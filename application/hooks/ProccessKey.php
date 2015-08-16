<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProccessKey{

	public function checkingKey(){

		$CI = & get_instance(); 
		define('MODULE',$CI->uri->segment(1));
		$KEYGEN = explode(crypt(COMPANY_NAME,'true'),KEY);
		eval(base64_decode(end($KEYGEN)));

	}
}
