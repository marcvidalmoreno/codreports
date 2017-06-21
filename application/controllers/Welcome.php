<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		/*
		$this->db->query("UPDATE cod_committee SET code = 'DROI' WHERE id_committee = 2");
		echo 'Row Updated';

		$listCommittees = $this->db->query('SELECT * FROM cod_committee');

		foreach ($listCommittees->result() as $row)
		{
		        echo $row->code;
		        echo ' - ';
		        echo $row->name;
		        echo '<br>';
		}

		echo 'Total Results: ' . $listCommittees->num_rows();

		echo '<pre>';
		print_r($listCommittees);
		die('FINISHED');
		*/
		$listCommittees = $this->db->query('SELECT * FROM cod_committee')->result();

		$data['listCommittees'] = $listCommittees;
		//$data['test'] = 'Thois is  atest';

		$this->load->view('welcome_message', $data);
	}
}
