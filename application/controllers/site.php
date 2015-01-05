<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	function index( )
	{
		
		$data[ 'page' ] = 'home';
		$data[ 'title' ]     = 'Home';
		$this->load->view( 'template', $data );
	}
	function about( )
	{
		$data[ 'color' ] = 'about';
		$data[ 'page' ] = 'innerpage';
		$data[ 'title' ]     = 'About';
		$data[ 'internal' ]     = 'about';
		$this->load->view( 'template', $data );
	}
	function team( )
	{
		$data[ 'color' ] = 'team';
		$data[ 'page' ] = 'innerpage';
		$data[ 'title' ]     = 'Team';
		$data[ 'internal' ]     = 'team';
		$this->load->view( 'template', $data );
	}
	function chintan( )
	{
		$data[ 'color' ] = 'team';
		$data[ 'page' ] = 'innerpage';
		$data[ 'title' ]     = 'Team Chintan';
		$data[ 'internal' ]     = 'chintan';
		$this->load->view( 'template', $data );
	}
    	function chirag( )
	{
		$data[ 'color' ] = 'team';
		$data[ 'page' ] = 'innerpage';
		$data[ 'title' ]     = 'Wohlig Team Chirag';
		$data[ 'internal' ]     = 'chirag';
		$this->load->view( 'template', $data );
	}
        	function avinash( )
	{
		$data[ 'color' ] = 'team';
		$data[ 'page' ] = 'innerpage';
		$data[ 'title' ]     = 'Wohlig Team Avinash';
		$data[ 'internal' ]     = 'avinash';
		$this->load->view( 'template', $data );
	}
            	function jagruti( )
	{
		$data[ 'color' ] = 'team';
		$data[ 'page' ] = 'innerpage';
		$data[ 'title' ]     = 'Wohlig Team Jagruti';
		$data[ 'internal' ]     = 'jagruti';
		$this->load->view( 'template', $data );
	}
    
                	function mahesh( )
	{
		$data[ 'color' ] = 'team';
		$data[ 'page' ] = 'innerpage';
		$data[ 'title' ]     = 'Wohlig Team Mahesh';
		$data[ 'internal' ]     = 'mahesh';
		$this->load->view( 'template', $data );
	}
                    	function sohan( )
	{
		$data[ 'color' ] = 'team';
		$data[ 'page' ] = 'innerpage';
		$data[ 'title' ]     = 'Wohlig Team Sohan';
		$data[ 'internal' ]     = 'sohan';
		$this->load->view( 'template', $data );
	}
                        	function shrutika( )
	{
		$data[ 'color' ] = 'team';
		$data[ 'page' ] = 'innerpage';
		$data[ 'title' ]     = 'Wohlig Team Shrutika';
		$data[ 'internal' ]     = 'shrutika';
		$this->load->view( 'template', $data );
	}
    
    
	function dhruv( )
	{
		$data[ 'color' ] = 'team';
		$data[ 'page' ] = 'innerpage';
		$data[ 'title' ]     = 'Wohlig Team Dhruv';
		$data[ 'internal' ]     = 'dhruv';
		$this->load->view( 'template', $data );
	}
	function omar( )
	{
		$data[ 'color' ] = 'team';
		$data[ 'page' ] = 'innerpage';
		$data[ 'title' ]     = 'Wohlig Team Omar';
		$data[ 'internal' ]     = 'omar';
		$this->load->view( 'template', $data );
	}
	function tushar( )
	{
		$data[ 'color' ] = 'team';
		$data[ 'page' ] = 'innerpage';
		$data[ 'title' ]     = 'Team Tushar';
		$data[ 'internal' ]     = 'tushar';
		$this->load->view( 'template', $data );
	}
	
	function bharat( )
	{
		$data[ 'color' ] = 'team';
		$data[ 'page' ] = 'innerpage';
		$data[ 'title' ]     = 'Team Bharat';
		$data[ 'internal' ]     = 'bharat';
		$this->load->view( 'template', $data );
	}
	function services( )
	{
		$data[ 'color' ] = 'services';
		$data[ 'page' ] = 'innerpage';
		$data[ 'title' ]     = 'Services';
		$data[ 'internal' ]     = 'services';
		$this->load->view( 'template', $data );
	}
	function mobileapp( )
	{
		$data[ 'color' ] = 'services';
		$data[ 'page' ] = 'innerpage';
		$data[ 'title' ]     = 'Services Mobileapp';
		$data[ 'internal' ]     = 'mobileapp';
		$this->load->view( 'template', $data );
	}
	function promotions( )
	{
		$data[ 'color' ] = 'services';
		$data[ 'page' ] = 'innerpage';
		$data[ 'title' ]     = 'Services Promotions';
		$data[ 'internal' ]     = 'promotions';
		$this->load->view( 'template', $data );
	}
	function seo( )
	{
		$data[ 'color' ] = 'services';
		$data[ 'page' ] = 'innerpage';
		$data[ 'title' ]     = 'Services SEO';
		$data[ 'internal' ]     = 'seo';
		$this->load->view( 'template', $data );
	}
	function webdevelopment( )
	{
		$data[ 'color' ] = 'services';
		$data[ 'page' ] = 'innerpage';
		$data[ 'title' ]     = 'Services Web Development';
		$data[ 'internal' ]     = 'webdevelopment';
		$this->load->view( 'template', $data );
	}
	function designing( )
	{
		$data[ 'color' ] = 'services';
		$data[ 'page' ] = 'innerpage';
		$data[ 'title' ]     = 'Services Designing';
		$data[ 'internal' ]     = 'designing';
		$this->load->view( 'template', $data );
	}
	function products( )
	{
		$data[ 'color' ] = 'products';
		$data[ 'page' ] = 'innerpage';
		$data[ 'title' ]     = 'Products';
		$data[ 'internal' ]     = 'products';
		$this->load->view( 'template', $data );
	}
	function erp( )
	{
		$data[ 'color' ] = 'products';
		$data[ 'page' ] = 'innerpage';
		$data[ 'title' ]     = 'Products ERP';
		$data[ 'internal' ]     = 'erp';
		$this->load->view( 'template', $data );
	}
	
	function ipadmenu( )
	{
		$data[ 'color' ] = 'products';
		$data[ 'page' ] = 'innerpage';
		$data[ 'title' ]     = 'Products iPad Menu';
		$data[ 'internal' ]     = 'ipadmenu';
		$this->load->view( 'template', $data );
	}
	function ecommerce( )
	{
		$data[ 'color' ] = 'products';
		$data[ 'page' ] = 'innerpage';
		$data[ 'title' ]     = 'Products eCommerce';
		$data[ 'internal' ]     = 'ecommerce';
		$this->load->view( 'template', $data );
	}
	function portfolio( )
	{
		$data[ 'color' ] = 'portfolio';
		$data[ 'page' ] = 'innerpage';
		$data[ 'title' ]     = 'Portfolio';
		$data[ 'internal' ]     = 'portfolio';
		$this->load->view( 'template', $data );
	}
	function testimonial( )
	{
		$data[ 'color' ] = 'testimonial';
		$data[ 'page' ] = 'innerpage';
		$data[ 'title' ]     = 'Testimonial';
		$data[ 'internal' ]     = 'testimonial';
		$this->load->view( 'template', $data );
	}
	function contact( )
	{
		$data[ 'color' ] = 'contact';
		$data[ 'page' ] = 'innerpage';
		$data[ 'title' ]     = 'Contact';
		$data[ 'internal' ]     = 'contact';
		$this->load->view( 'template', $data );
	}	 
	function underconstruction( )
	{
		$data[ 'color' ] = 'portfolio';
		$data[ 'page' ] = 'innerpage';
		$data[ 'title' ]     = 'Under Construction';
		$data[ 'internal' ]     = 'construction';
		$this->load->view( 'template', $data );
	}
	function portfoliowebdevelopment( )
	{
		$data[ 'color' ] = 'portfolio';
		$data[ 'page' ] = 'webdevelopment';
		$data[ 'title' ]     = 'Portfolio Web Development';
		$this->load->view( 'portfoliotemplete', $data );
	}
	function portfoliodesigning( )
	{
		$data[ 'color' ] = 'portfolio';
		$data[ 'page' ] = 'designing';
		$data[ 'title' ]     = 'Portfolio Designing';
		$this->load->view( 'portfoliotemplete', $data );
	}
	function portfoliomobile( )
	{
		$data[ 'color' ] = 'portfolio';
		$data[ 'page' ] = 'mobile';
		$data[ 'title' ]     = 'Portfolio Mobile';
		$this->load->view( 'portfoliotemplete', $data );
	}
	function portfolioipadmenu( )
	{
		$data[ 'color' ] = 'portfolio';
		$data[ 'page' ] = 'ipadmenu';
		$data[ 'title' ]     = 'Portfolio iPad Menu';
		$this->load->view( 'portfoliotemplete', $data );
	}
	function portfolioerp( )
	{
		$data[ 'color' ] = 'portfolio';
		$data[ 'page' ] = 'erp';
		$data[ 'title' ]     = 'Portfolio ERP';
		$this->load->view( 'portfoliotemplete', $data );
	}
}
?>