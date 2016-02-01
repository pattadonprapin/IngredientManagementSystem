
<?php


class Foodcontroller extends CI_Controller{
    public	function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
        $this->load->helper('file');
        $this->load->model('mainmodel');

    }


//--------------------------------------------------FOOD-------------------------------------------------------------//

    function viewfood(){

     
     $this->load->model('mainmodel');

     $data['foodlist'] = $this->mainmodel->view();

     $this->load->view('header');
     $this->load->view('viewfood',$data);

     

 }


 



 function add(){
     
    $this->load->model('mainmodel');
    $data['ingredientinfo']  =      $this->mainmodel->showaddfoodname();
    print_r($data);
    $this->load->view('header');
    $this->load->view('foodviewnew',$data);
    
    
}




function save(){

    $this->load->model('imagemodel');
    if ($this->input->post('submit')) {
    	$insert_id = $this->mainmodel->addfoodname();


    // Add image
        $randomname = rand();
        $returnDetailImg = $this->imagemodel->uploadIMG("fileToUpload",$randomname);
        $dataimage = array(
            'refpic_foodID' => $insert_id,
            
            'imageTitle' => $returnDetailImg["file_name"],
            'imagePicture' =>$returnDetailImg["client_name"],
            'imageCreatedDate' =>date('Y-m-d H:i:s'),
            );

        $this->imagemodel->insertIMG($dataimage);
        

    //Add amount
    // foreach ($_POST['option'] as $key => $val)

    // {
    // $dataingredient =array(
    // 'refin_foodID' => $insert_id,
    // 'ingredientAmount' => $val,
    // 'ingredientCreatedDate' =>date('Y-m-d H:i:s'),
    // 'ingredientUpdatedDate' =>date('Y-m-d H:i:s'),

    // );

        
    // $this->mainmodel->addingredientamount($dataingredient,$_POST['ingredientinfoDetail']);

    // }

        
        

        foreach (array_combine($_POST['option'],$_POST['ingredientinfoDetail']) as $option => $id){
           $dataingredient =array(
               'foodID' => $insert_id,   
               'ingredientinfoID' => $id,
               'ingredientAmount' => $option,
               'ingredientCreatedDate' =>date('Y-m-d H:i:s'),
               'ingredientUpdatedDate' =>date('Y-m-d H:i:s'),
               );
           
           $this->mainmodel->addingredientamount($dataingredient);
       }




       redirect('Foodcontroller/viewfood');

   }

}



function delete(){
    $i = $this->uri->segment(3);

    $datapic =	 $this->mainmodel->delete($i);
    @unlink("./images/".$datapic);

    redirect('Foodcontroller/viewfood');
}



function edit($FoodID){
    $this->load->model('mainmodel');
    
    $FoodID = $this->uri->segment(3);

    $data['foodeditinfo'] = $this->mainmodel->edit($FoodID);
    
    $this->load->view('header');
    $this->load->view('foodviewedit',$data);
}





function updatefoodedit(){
   $this->load->model('mainmodel');
   $this->load->model('imagemodel');

   if ($this->input->post('submit')) {


    //update food
    $id = $this->input->post('id');
    $foodname = $this->input->post('foodname');


    $data = array(
        'foodName' => $foodname,
        'foodUpdatedDate' =>date('Y-m-d H:i:s'),
        );
    $this->mainmodel->updatefood($data,$id);





    //update ingredient
    for($j=0;$j<sizeof($_POST['defaultID']);$j++){
        $meet = false;
        $target = $_POST['defaultID'][$j];
        for($k=0;$k<sizeof($_POST['idIn']);$k++){
            if($target == $_POST['idIn'][$k]){
             $meet = true;
         }else{
         }
     }
     if(!$meet){
         
       $this->mainmodel->deleteingredient($_POST['defaultID'][$j]);
             // print_r($_POST['defaultID'][$j]);
   }
} 
$i = 0;
foreach ($_POST['option'] as $key => $val){
    $dataingredient =array(
        'ingredientAmount' => $val,
        'foodID' => $id,
        'ingredientUpdatedDate' =>date('Y-m-d H:i:s'),
        );


    $this->mainmodel->updateingredient($dataingredient,$_POST['idIn'][$i]);

    $i++;
}


    // Edit image
$randomname = rand();
$oldfile = $this->input->post('oldfile');
$returnDetailImg = $this->imagemodel->uploadIMG("fileToEdit",$randomname);
if($returnDetailImg != null){ 
    @unlink("./images/".$oldfile);
    $dataimage = array(
        'imageTitle' => $returnDetailImg["file_name"],
        'imagePicture' =>$returnDetailImg["client_name"],
        'imageUpdatedDate' =>date('Y-m-d H:i:s'),
        );
    unlink("./images/".$id);
    $this->imagemodel->updateIMG($dataimage,$id);
    

}
redirect('Foodcontroller/viewfood');
} else{
    redirect('Foodcontroller/edit/'.$foodID);
}

}















}