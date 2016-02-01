        <?php



        class Calendarmodel extends CI_Model {



          public function __construct()
          {
            parent::__construct();

            
          }    


          function get_calendar_data($year,$month){
            $query = $this->db->select('date,note')->from('food_ingredient_calculate')
            ->like('date', "$year-$month","after")->get();

            $cal_data = array();

            foreach ($query->result() as $row) {

              if(substr($row->date,8,1)==0)
              {
                $cal_data[substr($row->date,9,1)] = $row->note;
              }
              else{
                $cal_data[substr($row->date,8,2)] = $row->note;
              }

            }

            return $cal_data;

          }


          function add_calendar_data($date,$data){
            if($this->db->select('date')->from('food_ingredient_calculate')->where('date',$date)->count_all_results()){
              $this->db->where('date', $date);

              $caldatainfo =array(
                'date' => $date,
                'note' => $data
                );

              $this->db->update('food_ingredient_calculate', $caldatainfo);
            } else {

              $caldatainfo =array(
                'date' => $date,
                'note' => $data
                );

              $this->db->insert('food_ingredient_calculate',$caldatainfo);
            } 
          }



          function generate($year,$month){
           

            $this->prefs = array (
             
              'show_next_prev' => true,
              'next_prev_url' => base_url()."index.php/Reportcontroller/viewreport/",
              'month_type'   => 'long',
              'day_type'     => 'short',
              
              );



            $this->prefs['template']= '

            {table_open}<table border="0" cellpadding="0" cellspacing="0" class="calendar">{/table_open}

            {heading_row_start}<tr>{/heading_row_start}

            {heading_previous_cell}<th><a href="{previous_url}">&lt;&lt;</a></th>{/heading_previous_cell}
            {heading_title_cell}<th colspan="{colspan}" style="text-align: center;">{heading}</th>{/heading_title_cell}
            {heading_next_cell}<th><div style="text-align: right;"><a href="{next_url}">&gt;&gt;</a></div></th>{/heading_next_cell}

            {heading_row_end}</tr>{/heading_row_end}

            {week_row_start}<tr>{/week_row_start}
            {week_day_cell}<td>{week_day}</td>{/week_day_cell}
            {week_row_end}</tr>{/week_row_end}


            {cal_row_start}<tr class="days">{/cal_row_start}
            {cal_cell_start}<td class="days">{/cal_cell_start}


            {cal_cell_content}
            <a href="/inanalysis/index.php/Reportcontroller/showreport/'.$year.'/'.$month.'/{day}">{day}</a>
            <div class="content" style="word-wrap: break-word; width:5em;">{content}</div>
            {/cal_cell_content}

            {cal_cell_content_today}
            <div class="highlight">
            <a href="/inanalysis/index.php/Reportcontroller/showreport/'.$year.'/'.$month.'/{day}">{day}</a></div>
            <div class="content" style="word-wrap: break-word; width:5em;">{content}</div>
            {/cal_cell_content_today}

            {cal_cell_no_content}{day}{/cal_cell_no_content}
            {cal_cell_no_content_today}<div class="highlight">{day}</div>{/cal_cell_no_content_today}

            {cal_cell_blank}&nbsp;{/cal_cell_blank}

            {cal_cell_end}</td>{/cal_cell_end}
            {cal_row_end}</tr>{/cal_row_end}

            {table_close}</table>{/table_close}
            ';


            $this->load->library('calendar', $this->prefs);

            $cal_data = $this->get_calendar_data($year,$month);

            return $this->calendar->generate($year,$month,$cal_data);


          }


          function getit($date){
           $data="";
           $this->db->where('date', $date);
           $query = $this->db->get('food_ingredient_calculate');
           if($query->num_rows() >= 1)
           {
             foreach ($query->result_array() as $key => $value) {
              $data = $value;
            }
            return $data;
          }

        }




      }