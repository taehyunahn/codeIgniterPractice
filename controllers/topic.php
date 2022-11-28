<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Topic extends CI_Controller {

	public function index()
	{
		$this->load->view('topic');
	}

    public function get($id){
        echo '토픽'.$id;
    }
}





// <!-- <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// class Topic extends CI_Controller {
//     function index(){
//         echo '토픽 페이지';
//     }
// }
// ?>