<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/reports
	 *	- or -
	 * 		http://example.com/index.php/reports/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/reports/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$reports = $this->db->query('SELECT * FROM cod_report')->result('array');

		$data['reports'] = $reports;
		$data['contextClass'] = 'info';

		$this->load->view('reports', $data);
	}
}
