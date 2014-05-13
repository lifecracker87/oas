<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists ('render_view') )
{
	function render_view($path)
	{
		ob_start();
		$this->load->view($path);
		$html = ob_get_clean();
		return $html;
	}
}

