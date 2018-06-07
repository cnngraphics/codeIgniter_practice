<?php
defined('BASEPATH') OR Exit('No direct access allowed');

class Purchases extends CI_Controller {

	public function index(){
		
		$this->load->view('header');
	
        
	}

	public function browse(){

		$this->load->model('purchases_model');
		$data['purchases'] = $this->purchases_model->get_purchases();
		// echo "<pre>";
		// var_dump($data);
		
		// $data['purchases'] = $purchases;

		$this->load->view('header');
		$this->load->view('purchases_view', $data);
		$this->load->view('footer');
	}

	public function create_purchases(){
		
		$this->load->model('purchases_model');
		
		$this->load->helper('form');

		$this->load->library('form_validation');

		
		$data_to_insert = $_POST;
		$this->purchases_model->create($data_to_insert);
	}
	public function seed(){
		exit('Already inserted');
		$purchases = [
			[
				'id' => '1',
				'date' => '2018-12-11',
				'price' => 1220,
				'description' => 'Dog food'
			],
			[
				'id' => '2',
				'date' => '2015-11-01',
				'price' => 2330,
				'description' => 'Cat and Dog food'
			],
			[
				'id' => '3',
				'date' => '2015-02-01',
				'price' => 320,
				'description' => 'Banana and mangoes'
			],
			[
				'id' => '4',
				'date' => '2018-10-11',
				'price' => 240,
				'description' => 'Dog food'
			],
			[
				'id' => '5',
				'date' => '2013-05-05',
				'price' => 20,
				'description' => 'Diri kole ak DjonDjon'
			],
			[
				'id' => '6',
				'date' => '2018-22-07',
				'price' => 20,
				'description' => 'Griot ak diri kole'
			],
		];

		foreach($purchases as $purchase){
			$this->db->insert('purchases', $purchase);
		}
		echo 'Success Inserting';
	}

}
