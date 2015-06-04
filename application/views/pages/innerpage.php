<div class="row" >
	<div class="span4">
		<div class="logotext" style="position: absolute;left: 5%;">
		<a href="<?php echo site_url(); ?>">
		w<span class="logocircle <?php echo $color;?>" ></span>hlig
		</a>
		<a href="<?php echo site_url('site/index'); ?>"><span class="smallcircle home" ><img src="<?php echo base_url('assets/img/home.png');?>" /><div class="smallcircletext">home</div></span></a>
		<a href="<?php echo site_url('site/about'); ?>"><span class="smallcircle about" ><img src="<?php echo base_url('assets/img/about.png');?>" /><div class="smallcircletext">about</div></span></a>
		<a href="<?php echo site_url('site/team'); ?>"><span class="smallcircle team" ><img src="<?php echo base_url('assets/img/team.png');?>" /><div class="smallcircletext">team</div></span></a>
		<a href="<?php echo site_url('site/services'); ?>"><span class="smallcircle services" ><img src="<?php echo base_url('assets/img/services.png');?>" /><div class="smallcircletext">services</div></span></a>
		<a href="<?php echo site_url('site/products'); ?>"><span class="smallcircle products" ><img src="<?php echo base_url('assets/img/products.png');?>" /><div class="smallcircletext">products</div></span></a>
		<a href="<?php echo site_url('site/portfolio'); ?>"><span class="smallcircle portfolio" ><img src="<?php echo base_url('assets/img/portfolio.png');?>" /><div class="smallcircletext">portfolio</div></span></a>
		<a href="<?php echo site_url('site/testimonial'); ?>"><span class="smallcircle testimonial" ><img src="<?php echo base_url('assets/img/testimonial.png');?>" /><div class="smallcircletext">testimonial</div></span></a>
		<a href="<?php echo site_url('site/contact'); ?>"><span class="smallcircle contact" ><img src="<?php echo base_url('assets/img/contact.png');?>" /><div class="smallcircletext">contact</div></span></a>
				

		</div>
	</div>
	<div class="span8">
		<div class="large <?php echo $color;?>" id=""> 
		<a href="<?php echo site_url("site/$color");?>"><div class="pagetitle" > <img width="100px" src="<?php echo base_url('assets/img/'.$color.'.png');?>"/><?php echo $color;?> </div></a>
		<div class="internal"><?php $this->load->view('pages/internal/'.$internal); ?></div>
		</div>
	</div>
</div>
<script type="application/javascript" >
var oldclass="";
var newclass="";
var i=0;
var j=0;
var initialtop=0;
var secondstofade=100;
var allclasses = ["home","about", "team", "services", "products","portfolio", "testimonial", "contact"];
$(window).load(function(e) {
	$('.smallcircle.<?php echo $color;?>').hide();
	$('.smallcircle.home').addClass('<?php echo $color;?>');
	$('.smallcircle').addClass('grey');
	$('.smallcircle').hover(function(){
		$(this).removeClass('grey');
		oldclass=$('.logocircle').attr('class').substr(11);
		$('.logocircle').removeClass(oldclass);
		$('.large').removeClass(oldclass);
		newclass=$(this).attr('class').substr(12);
		if(newclass.substr(0,4)=="home")
		{
		
			$('.home .smallcircletext').animate({
				opacity:1,
				left: '+=21',
				width: 'toggle'
			  }, secondstofade, function() {
				// Animation complete.
			  });
		}
		$('.logocircle').addClass(newclass);
		$('.large').addClass(newclass);
		
		$('.'+newclass+' .smallcircletext').animate({
				opacity:1,
				left: '+=21',
				width: 'toggle'
			  }, secondstofade, function() {
				// Animation complete.
			  });
	},
	function(){
		$(this).addClass('grey');
		$('.logocircle').removeClass(newclass);
		$('.large').removeClass(newclass);
		$('.logocircle').addClass(oldclass);
		$('.large').addClass(oldclass);
		if(newclass.substr(0,4)=="home")
		{
			
			$('.home .smallcircletext').animate({
				opacity:0,
				left: '-=21',
				width: 'toggle'
			  }, secondstofade, function() {
				// Animation complete.
			  });
		}
		
		$('.'+newclass+' .smallcircletext').animate({
				opacity:0,
				left: '-=21',
				width: 'toggle'
			  }, secondstofade, function() {
				// Animation complete.
			  });
	});
	initialtop=parseInt($('.smallcircle').css('top'));
	//console.log("Initial Top:" + initialtop)
	for(i=j=0;i<allclasses.length;i++)
	{
		if(allclasses[i]!='<?php echo $color;?>')
		{
			$('.smallcircle.'+allclasses[i]).css('top',initialtop+((j+1)*60));
			j++;
		}
	}
	
	
	
	
	
});

</script> 
