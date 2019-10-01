<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model
{

    public function fetch_all_info_model()
    {
        $this->db->select('*');
        $this->db->where('id = 2');
        $query = $this->db->get('basic_info');
        return $query->result();
    }

    public function save_basic_info_model()
    {
        $headline = $this->input->post('headline');
        $tagline = $this->input->post('tagline');
        $what_magpieos_is = $this->input->post('what_magpieos_is');
        $about = $this->input->post('about');
        $copyright = $this->input->post('copyright');
        $logo = $this->input->post('logo');
        $bg_image_for_mobile = $this->input->post('bg_image_for_mobile');
        $bg_image_for_desktop = $this->input->post('bg_image_for_desktop');





        $data = array(
            'id' => 2,
            'headline' => $headline,
            'tagline'  => $tagline,
            'what_magpieos_is'  => $what_magpieos_is,
            'about_magpieos'  => $about,
            'copyright_year' => $copyright,
            'logo' => $logo,
            'bg_mobile' => $bg_image_for_mobile,
            'bg_desktop' => $bg_image_for_desktop
        );

        $this->db->update('basic_info', $data);
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function save_news_model(){
        $news_title = $this->input->post('news_title');
        $news_description = $this->input->post('news_description');
        $cover_image_removed = $this->input->post('cover_image_removed');
        // $news_cover_image = $this->input->post('news_cover_image');

        $app_id = $this->session->userdata('app_id');
        $current_date = date('Y-m-d H:i:s');

        $inserting_data = array(
            'ref_news_app_info_id' => $app_id,
            'news_title' => $news_title,
            'news_details' => $news_description,
            'news_created_date_time' => $current_date,
        );

        $path ='assets/uploads/images/app_id_'.$app_id.'/news_images/';

        if(is_dir($path)){
            $upload_path = $path;
        }else {
            mkdir($path, 0777, true);
            $upload_path = $path;
        }

        $config['upload_path'] = $upload_path;
        $config['allowed_types'] = 'jpg|jpeg|png|gif|bmp';
        $config['max_size'] = '20480'; // max_size in kb
        $current_date = $date = date('d_m_Y');
        $config['file_name'] = $current_date.'_'.$_FILES['news_cover_image']['name'];


        // Load and initialize upload library
        $this->load->library('upload');
        $this->upload->initialize($config);


        // Check wheter image comes or
        if($_FILES['news_cover_image']['name']){
            if($this->upload->do_upload('news_cover_image')){
                $uploadedData = $this->upload->data();

                $inserting_data = array(
                    'news_image_location' => $upload_path . $uploadedData['file_name'],
                    'news_image_size_bytes' => $uploadedData['file_size'],
                );
            }
        }

        // Now insert the data into database
        $this->db->trans_start();
        $this->db->insert('news', $inserting_data);
        $this->db->trans_complete();

        return true;

    }
}
