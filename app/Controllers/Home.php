<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$fizz_buzz_data['datas'] = $this->get_fizz_buzz_output();
		return view('welcome_message', $fizz_buzz_data);
	}


	public function get_fizz_buzz_output() {
		$fizz_buzz_array = [];
		$i = 1;
		$n = 100;
		while ($i <= $n) {
			if (($i % 3 == 0) && ($i % 5 == 0)) {
				array_push($fizz_buzz_array, "fizzbuzz </br>");
			} elseif ($i % 3 == 0) {
				array_push($fizz_buzz_array, "fizz </br>");
			} elseif ($i % 5 == 0) {
				array_push($fizz_buzz_array, "buzz </br>");
			} else {
				array_push($fizz_buzz_array, $i . "</br>");
			}
			$i+= 1;
		}
		return $fizz_buzz_array;
	}
}
