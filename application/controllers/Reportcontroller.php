 <?php


 class Reportcontroller extends CI_Controller{
  


   //--------------------------------------------------Report-------------------------------------------------------------//




  function viewreport($year = null,$month = null) {

    $this->load->model('calendarmodel');
    $data['calendar' ]= $this->calendarmodel->generate($this->uri->segment(3), $this->uri->segment(4));
    $data['year'] = $year; // ADD THIS
    $data['month'] = $month; // ADD THIS
    $this->load->view('header');
    $this->load->view('viewcalendar',$data);



  }


  public function showreport(){
    $this->load->model('calendarmodel');
    $a =$this->uri->segment(3);
    $b =$this->uri->segment(4);
    $c =$this->uri->segment(5);
    $date = $a."-".$b."-".$c;
    print_r($date);
    $data['test'] = $this->calendarmodel->getit($date);
    print_r($data);
    $this->load->view('showreport',$data);
  }











}