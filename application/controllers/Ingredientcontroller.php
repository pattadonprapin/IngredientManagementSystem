
<?php


class Ingredientcontroller extends CI_Controller{
    public	function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
        $this->load->helper('file');
        $this->load->model('mainmodel');

    }






    //--------------------------------------------------INGREDIENT-------------------------------------------------------------//






    function viewingredient() {
      
       
       $this->load->view('header');
       $data['ingredientlist'] = $this->mainmodel->getingredientinfo();         
       $this->load->view('foodviewingredient',$data);
       
       

   }

   function foodviewaddingredient(){
    
     
       $this->load->view('header');
       $this->load->view('foodviewaddingredient');
       
       
   }

   function foodingredientsave(){

    if ($this->input->post('submit')) {

        $inname = $this->input->post('inname');
        $type = $this->input->post('type');
        $amountofingredient = $this->input->post('amountofingredient');
        $purchasedate = $this->input->post('purchasedate');
        $expireddate = $this->input->post('expireddate');
        $test1 = $this->input->post('test1');
        $test2 = $this->input->post('test2');

        $data = array(
            'ingredient' => $inname,
            'type' => $type,
            'amount' => $amountofingredient,
            'purchaseDate' =>$purchasedate,
            'expiredDate' =>$expireddate ,

            );

        $insert_id2 =   $this->mainmodel->foodingredientsave($data);


    }
    redirect('Ingredientcontroller/viewingredient');
}



function editingredient($id){
   
    $id = $this->uri->segment(3);
    $data['ingredientinfo'] = $this->mainmodel->getingredientedit($id);
    print_r($data);
    $this->load->view('header');
    $this->load->view('foodvieweditin',$data);
    
    

}




function foodingredientupdate(){
   
    if ($this->input->post('submit')) {

        $inname = $this->input->post('inname');
        $type = $this->input->post('type');
        $amountofingredient = $this->input->post('amountofingredient');
        $purchasedate = $this->input->post('purchasedate');
        $expireddate = $this->input->post('expireddate');
        $id = $this->input->post('id');

        $data = array(
            'ingredient' => $inname,
            'type' => $type,
            'amount' => $amountofingredient,
            'purchaseDate' =>$purchasedate,
            'expiredDate' =>$expireddate ,

            );
        print_r($data);
        $this->mainmodel->foodingredientupdate($data,$id);
    }
    redirect('Ingredientcontroller/viewingredient');
}





function deleteingredient(){
    $id = $this->uri->segment(3);
    print_r($id);
    $this->mainmodel->deleteingredientinfo($id);


    redirect('Ingredientcontroller/viewingredient');
}


























}