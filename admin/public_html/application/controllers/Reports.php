<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->data['page_title'] = 'Reports';
		$this->load->model('model_reports');
		$this->load->model('model_stores');
	}

	/*
    * It redirects to the report page
    * and based on the year, all the orders data are fetch from the database.
    */
	public function index()
	{
	

		$this->render_template('reports/index', $this->data);
	}


}
