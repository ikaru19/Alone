<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
	
		$data['post'] = $this->mamodel->get_post()->result();
		$this->load->view('dashboard/base', $data);
	}
	public function post(){
		$post = $this->input->post('post');
		$time = $this->input->post('time_stamp');
		$data = array(
			'post' => $post,
			'time_stamp' => $time,
			'user_id' => 1,
			'session_id' => 1
			);
		$a = $this->mamodel->input_post($data,'post');
				redirect('welcome');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */