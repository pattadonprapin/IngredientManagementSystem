<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imagemodel extends CI_Model {

    public function __construct()
    {
       parent::__construct();

   }

   public function uploadIMG($files_post_name,$Image_name) {
    if (isset($_FILES["$files_post_name"]['name']) && $_FILES["$files_post_name"]['name'] != '') {
        unset($config);

        $configImage['upload_path'] = "./images/";
        $configImage['max_size']  = '1500';

        $configImage['allowed_types'] = 'gif|jpg|png|PNG';
        $configImage['overwrite'] = TRUE;
        $configImage['remove_spaces'] = TRUE;

        $configImage['file_name'] = $Image_name;
        $this->load->library('upload', $configImage);
        $this->upload->initialize($configImage);

        if (!$this->upload->do_upload("$files_post_name")) {
            echo $this->upload->display_errors();
            die();
        } else {
            $imageDetails = $this->upload->data();

            return  $imageDetails;

        }

    }
    else{
        echo "Error";
    }
}

public function insertIMG($dataimage){
	
 $this->db->insert('image', $dataimage);


}









public function updateIMG($dataimage,$id){

    $this->db->where('refpic_foodID', $id);
    $this->db->update('image', $dataimage);



}







}