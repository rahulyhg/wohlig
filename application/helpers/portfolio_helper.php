<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('createportfolio'))
{
    function createportfolio($folio = '')
    {
		$text1='<div class="pg_content"><div id="pg_title" class="pg_title">';
		foreach($folio as $key => $obj) {
			if($key==0)
			$text1.='<h1 style="display:block;top:25px;">'.$obj->header.'</h1>';
			else
			$text1.='<h1>'.$obj->header.'</h1>';
			
		}
		$text1.='</div>';
		$text2='<div id="pg_preview">';
		foreach($folio as $key => $obj) {
			if($key==0)
			$text2.='<img class="pg_thumb" style="display:block;z-index:9999;" src="'.base_url("assets/img/medium/$obj->img.jpg").'" alt="'.base_url("assets/img/large/$obj->img.jpg").'"/>';
			else
			$text2.='<img class="pg_thumb" src="'.base_url("assets/img/medium/$obj->img.jpg").'" alt="'.base_url("assets/img/large/$obj->img.jpg").'"/>';
			
		}
		
		$text3='<div id="pg_desc1" class="pg_description">';
		foreach($folio as $key => $obj) {
			if($key==0)
			$text3.='<div style="display:block;left:250px;"><h2>Project Description</h2><p>'.$obj->description.'</p></div>';
			else
			$text3.='<div><h2>Project Description</h2><p>'.$obj->description.'</p></div>';
			
		}
		$text3.="</div>";
		
		$text4='<div id="pg_desc2" class="pg_description">';
		foreach($folio as $key => $obj) {
			if($key==0)
			$text4.='<div style="display:block;left:250px;"><h2>Technologies Used</h2><p>'.$obj->technology.'</p></div>';
			else
			$text4.='<div><h2>Technologies Used</h2><p>'.$obj->technology.'</p></div>';
			
		}
		$text4.="</div></div>";
		
		$text5='<div id="thumbContainter"><div id="thumbScroller"><div class="container">';
		foreach($folio as $key => $obj) {
			$text5.='<div class="content"><div><a href="#"><img src="'.base_url("assets/img/thumbs/$obj->img.jpg").'" alt="" class="thumb" /></a></div></div>';
			
		}
		$text5.="</div></div></div>";
		return $text1.$text2.$text3.$text4.$text5;
    }   
}