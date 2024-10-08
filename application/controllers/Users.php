	<?php 
	/**
	 * Login Controller
	 */
	class Users extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			if (!$this->session->userdata('own_id')) {
				redirect('home');
			}
		}
		function index($page = '')
		{
			$data = array(
				'title' 	  => $page, 
				'userdata'    => $this->Logics->userdata($this->session->userdata('own_id')),
				'earnings'	  => $this->Logics->earnings($this->session->userdata('own_id')),  
				'members'	  => $this->Logics->members($this->session->userdata('own_id')),  
			);
			$this->load->view('includes/header',$data);
			$this->load->view('users/sidebar',$data);
			$this->load->view('users/'.$page,$data);
			$this->load->view('includes/footer',$data);
		}

		function updates()
		{
			$data['title'] = 'Registration';
			$data['user']  = $this->Logics->userdata($this->session->userdata('own_id'));
			$this->load->view('includes/header',$data);
			$this->load->view('users/registration',$data);
		}

		function update($value='')
		{
			if ($this->Logics->update($value, $this->input->post())) 
			{
				$this->session->set_flashdata('message',"Your data has been updated");
				redirect('user/profile');
			}
			else
			{
				$this->session->set_flashdata('message',"Invalid Data input!!!");
				redirect('user/profile');	
			}
		}
	}
?>