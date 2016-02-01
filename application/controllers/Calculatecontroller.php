 <?php


 class Calculatecontroller extends CI_Controller{
  public	function __construct(){
    parent::__construct();
    $this->load->helper(array('form', 'url'));
    $this->load->library('upload');
    $this->load->helper('file');
    $this->load->model('mainmodel');

  }


//     --------------------------------------------------Analysis-------------------------------------------------------------//




  function viewcalculate() {
   
   
   $this->load->view('header');
   $this->load->view('viewcalculate');

 }


 public function save(){
  $this->load->model('calendarmodel');
  if ($this->input->post('submit')) {

   $date = $this->input->post('date');
   $data = $this->input->post('data');

   $this->calendarmodel->add_calendar_data($date,$data);
   redirect('/Reportcontroller/showreport/'.$date);
 }

}








}