<?php
  class Pages extends CI_Controller{

    function view($page = 'home'){
      $this->load->view('pages/home');
    }
  }
 ?>
