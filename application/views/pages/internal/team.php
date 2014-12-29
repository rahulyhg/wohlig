<div class="circles">
	<a href="<?php echo site_url('/site/chintan') ;?>"><div class="internalcircle" image="chintan">
	</div>
	<a href="<?php echo site_url('/site/dhruv') ;?>"><div class="internalcircle" image="dhruv">
	</div>
	<a href="<?php echo site_url('/site/omar') ;?>"><div class="internalcircle" image="omar">
	</div>
	<a href="<?php echo site_url('/site/tushar') ;?>"><div class="internalcircle" image="tushar">
	</div>
	
	</div>
</div>

<script>
$(document).ready(function(e) {
	var total=$('.internalcircle').length;
	console.log(total);
	var xaxis=0;
	var yaxis=0;
	internalwidth=$('.internalcircle').css('width');
	radius=180;
	/*var first=$('.internalcircle').get(0)
	$(first).css('left','50%');*/
	var angle2=2/total*Math.PI;
	//angle=Math.PI/2;
	console.log(Math.sin(angle));
	for(var i=1;i<total;i++)
	{
		
		var angle=angle2*i;
		console.log(angle*180/Math.PI);
		yaxis=radius-(Math.cos(angle)*radius);
		xaxis=(Math.sin(angle)*radius);
		
		var element=$('.internalcircle').get(i);
		$(element).css({'left': xaxis,'top': yaxis});
		console.log(xaxis);
		
	}
	for(var i=0;i<total;i++)
	{
		var element=$('.internalcircle').get(i);
		var image2=$(element).attr('image');
		var image="url(<?php echo base_url('assets/img/circles'); ?>/"+image2+".png)";
		$(element).css('background',image);
		
	}

	
	
});

</script>
