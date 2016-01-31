
    <?php


    class Maincontroller extends CI_Controller{
    public	function __construct(){
    parent::__construct();
    $this->load->helper(array('form', 'url'));
    $this->load->library('upload');
     $this->load->helper('file');
      $this->load->model('mainmodel');

    }

    

    function index(){
            $this->load->view('header');
              $this->load->view('main');          
    }





    }
