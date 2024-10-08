<?php 
	/**
	 * Login Controller
	 */
	class Login extends CI_Controller
	{
		function index()
		{
			$session = $this->Logics->login($this->input->post());
			if ($session) {
				$this->session->set_userdata('own_id', $session['mobile']);
				$this->session->set_flashdata('message', 'Thank you for login!!!');
				return redirect('user/dashboard');	
			}
			else
			{
				$this->session->set_flashdata('message', 'Invalid Mobile or Password!!!');
				return redirect('home');
			}
		}

		function logout()
		{
			$this->session->unset_userdata('own_id');
			redirect('home');	
		}
	}
?>