<?php  
/**
 * All logics 
 */
class Logics extends CI_Model
{
	function login($login_data)
	{
		$query = $this->db->select()->where('mobile', $login_data['mobile'])->where('password', $login_data['password'])->get('users');
		if ($query->num_rows()>0) {
			return $query->row_array();
		}
		else
		{
			return False;
		}
	}

	function userdata($user_id)
	{
		return $this->db->select()->where('mobile', $user_id)->get('users')->row_array();
	}

	function members($user_id)
	{
		$referral = $this->db->select('my_referral')->where('mobile',$user_id)->get('users')->row()->my_referral;
		return $this->db->select()->where('referral', $referral)->get('users')->result();
	}

	function earnings($user_id)
	{
		return $this->db->select()->where('user_id', $user_id)->get('earnings')->row_array();
	}

	function membership($data)
	{
		if ($data['referral'] == '') 
		{
			$this->db->order_by('id','DESC');
			$data['ownid'] = 'HMF0A19010'.($this->db->select()->get('users')->row_array()['id'] + 1);
			$data['my_referral'] = $data['ownid'];
 			if ($this->db->insert('users', $data)) 
			{
				$earnings = array(
					'user_id' => $data['mobile'],
					'wallet'  => 100,
				);
				$this->db->insert('earnings',$earnings);

				return $this->db->select()->where('mobile', $data['mobile'])->get('users')->row_array();
			}
		}
		else
		{
			
			/*print_r($this->db->select()->get('users')->row_array()['id']);
			exit();*/
			$query = $this->db->select()->where('my_referral',$data['referral'])->get('users')->row_array();
			if ($query) 
			{
				$this->db->insert('users', $data);
				//Inser user
				$earnings = array(
					'user_id' => $data['mobile'],
					'wallet'  => 5,
				);
				$this->db->insert('earnings',$earnings);
				//Insert referral data in user
				$this->db->order_by('id','DESC');
				$referral_data['referral_name'] = $query['name'];
				$referral_data['referral'] = $query['my_referral'];
				$referral_data['ownid'] = 'HMF0A19010'.($this->db->select()->get('users')->row_array()['id'] + 1);
				$this->db->where('mobile', $data['mobile'])->update('users',$referral_data);
				//insert referral earining
				$earn = $this->db->select()->where('user_id', $query['mobile'])->get('earnings')->row()->referral;

				$ref_earn['referral'] = $earn + 5;

				$this->db->where('user_id', $query['mobile'])->update('earnings',$ref_earn);
				return $this->db->select()->where('mobile', $data['mobile'])->get('users')->row_array();
			}
			else
			{
				$this->session->set_flashdata('message', "Invalid Referral Code");
				return redirect('home');
			}
		}
		
	}

	function update($value, $data)
	{
		return $this->db->where('mobile', $this->session->userdata('own_id'))->update('users',$data);
	}
}
?>