<?php namespace App\Models;
use CodeIgniter\Model;

class M_user extends Model
{
	public function get_data($email, $password)
	{
      return $this->db->table('user')
      ->where(array('user_email' => $email, 'user_pass' => $password))
      ->get()->getRowArray();
	}

	//--------------------------------------------------------------------

}