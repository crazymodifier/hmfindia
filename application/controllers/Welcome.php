<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * All index controller
	 */
	class Welcome extends CI_Controller
	{
		function index($slug = "home")
		{
			$pages = $this->db->where('slug',$slug)->get('pages')->row();
			if ($pages) 
			{
				$data = array(
					'title' => $pages->title,
					'slug'	=> $slug,
					'donaters' => $this->db->get('donaters')->result(), 
				);
				$this->load->view('includes/header',$data);
				$this->load->view('pages/'.$slug,$data);
				$this->load->view('includes/footer',$data);
			}
			else 
			{
				show_404();
			}
		}


		function referral($page = 'HMF0A190101')
		{
			$data = array(
				'title' => 'Invite Your Friend',
				'referral' => $this->db->select()->where('mobile',$page)->get('users')->row(),
				 
			);
			$this->load->view('includes/header',$data);
			$this->load->view('pages/referral',$page);
			$this->load->view('includes/footer',$page);
		}

		//User registration function
		public function registration()
		{
			$myvalidation = array(
				array(
					'field' => 'name' , 
					'label' => 'Name' ,
					'rules' => 'required',
					'errors'=> 
						array(
							'required' => 'Name must be filled',
						)
				 	),
				array(
					'field' => 'mobile',
					'label' => 'Mobile Number',
					'rules' => 'required|numeric|exact_length[10]',
					'errors' => array(
						'required' => 'Mobile must be field',
						'numeric'  => 'Mobile number contain only numeric value',
						'exact_length' => 'mobile number must be 10 digits only',
						)
					),
			);

			$this->form_validation->set_rules($myvalidation);
				if ($this->form_validation->run()) 
					$query = $this->Logics->membership($this->input->post());
					if ($query) {
						$this->session->set_flashdata('message', 'Thank you for Registration!!!');
						$this->session->set_userdata('own_id', $query['mobile']);
						return redirect('user/dashboard');
					}
				else
				{
					$this->session->set_flashdata('message', 'Invalid inputs');
					return redirect('home');
				}
		}
		
		public function donate()
		{
			$myvalidation = array(
				array(
					'field' => 'name' , 
					'label' => 'Name' ,
					'rules' => 'required',
					'errors'=> 
						array(
							'required' => 'Name must be filled',
						)
				 	),
				array(
					'field' => 'mobile',
					'label' => 'Mobile Number',
					'rules' => 'required|numeric|exact_length[10]',
					'errors' => array(
						'required' => 'Mobile must be field',
						'numeric'  => 'Mobile number contain only numeric value',
						'exact_length' => 'mobile number must be 10 digits only',
						)
					),
				array(
					'field' => 'ammount',
					'label' => 'Ammount',
					'rules' => 'required|numeric',
					'errors' => array(
						'required' => 'Mobile must be field',
						'numeric'  => 'Mobile number contain only numeric value',
						)
					),
			);

			$this->form_validation->set_rules($myvalidation);
				if ($this->form_validation->run()) 
					$query = $this->db->insert('donaters',$this->input->post());
					if ($query) {
						$this->session->set_flashdata('message', 'Thank you for donation');
						return redirect('donate');
					}
				else
				{
					$this->session->set_flashdata('message', 'Invalid inputs');
					return redirect('home');
				}
		}
	}
?>


<!-- function realvisitor($ip)
{
    session_start();
    if(!isset($_SESSION['real_user']))
    {
        $file = 'usercounter.txt';
        if(!$data = @file_get_contents($file))
        {
            file_put_contents($file, base64_encode($ip));
            $_SESSION['user_count'] = 1;
        }
        else{
            $decodedData = base64_decode($data);
            $ipList      = explode(';', $decodedData);

            if(!in_array($ip, $ipList)){
              array_push($ipList, $ip);
              file_put_contents($file, base64_encode(implode(';', $ipList)));
            }
            $_SESSION['user_count'] = count($ipList);
        }
        $_SESSION['real_user'] = $ip;
    }
}

$ip =$_SERVER['REMOTE_ADDR'];
realvisitor($ip);
echo "<h2 style='color:white;' class='visitors'>visitor's count : &nbsp;".$_SESSION['user_count']."</h2>";



?>	 -->