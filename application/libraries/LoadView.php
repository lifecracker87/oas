<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Description of LoadView load view determining either form ajax request or not
 *
 * @author bhim
 */
class LoadView {
    
    private $mainViewPath;
    private $headerViewPath='parts/header';
    private $footerViewPath='parts/footer';
    
    public function __construct($headPath=NULL,$footPath=NULL)
    {
        
        if($headPath)
        {
            $this->headerViewPath = $headPath;
        }
        if($footPath)
        {
            $this->footerViewPath = $footPath;
        }
        
    }
    public function loader($mainPath)
    {
        $CI = & get_instance();
        $this->mainViewPath = $mainPath;
        if(!$CI->input->is_ajax_request())
            $CI->load->view($this->headerViewPath);
        
        $CI->load->view($this->mainViewPath);
        
        if(!$CI->input->is_ajax_request())
            $CI->load->view($this->footerViewPath);
            
    }
}
