<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 *@author: AiFAiZ <faiz@aics.my>
 *@link: http://aics.my
 */
class Main_controller extends CI_Controller
{
   public function index()
   {
      $var['meta_title'] = "My Website";
      $var['meta_description'] = "My description of my website";
      $this->load->view('home', $var);
   }
}

/* End of file main_controller.php */
/* Location: ./application/controllers/main_controller.php */