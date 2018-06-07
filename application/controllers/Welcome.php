<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data = array();
		$this->load->view('header');
        $this->load->view('welcome_message', $data);
		// echo 'Hello World';
        $this->load->view('footer');
	}

	public function checkString(){
		$test= strpos('bananan', 'a');

		print( $test);
	}

	public function wrapText(){
		$text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at fermentum orci. Suspendisse fermentum venenatis est, eu volutpat felis fringilla sit amet. Pellentesque ac libero tincidunt, volutpat libero et, iaculis ex. Nulla porta sem vel tempor rutrum. Phasellus eget mattis mauris. In condimentum nec tellus vel posuere. Integer accumsan tincidunt sollicitudin. Nulla condimentum egestas dapibus. Donec at hendrerit eros, vitae maximus ante. Phasellus mollis risus sed tempor maximus. Vivamus augue lorem, suscipit eu velit non, mollis convallis lacus. Suspendisse libero nisi, ultrices vitae risus a, auctor luctus magna.';
		echo substr($text, 10);
	
		for( $i =1; $i <= strlen($text); $i++) {
			$lineString = '<br> #' . $i .'- '.substr($text, 0,10);
			$text = $lineString;
			echo $lineString.'<br><br>';
		}
	}

}
