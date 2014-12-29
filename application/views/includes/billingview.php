<script>

  
  $(function() {
	$( "#name" ).combobox();
	$( "#toggle" ).click(function() {
	  $( "#name" ).toggle();
	});
  });

$(function() {
	$( "#phone" ).combobox();
	$( "#toggle" ).click(function() {
	  $( "#phone" ).toggle();
	});
  });
/*
$(function() {
	$( "#family" ).combobox();
	$( "#toggle" ).click(function() {
	  $( "#family" ).toggle();
	});
  });

$(function() {
	$( "#brick" ).combobox();
	$( "#toggle" ).click(function() {
	  $( "#brick" ).toggle();
	});
  });
*/
</script>



<div class="search">


  <div class="row">
    <div class="ui-widget span6">
      <?php 
echo "Name:";
echo form_dropdown('name',$name,'','id="name"');
 ?>
    </div>
    <div class="productnone" style="display:none">
      <?php 
echo form_dropdown('product',$product,'','id="productnone"');
 ?>
    </div>
    <div class="ui-widget span6">
      <?php 
echo "Phone:";
echo form_dropdown('phone',$phone,'','id="phone"');
 ?>
    </div>
  </div>
  <div class="row center">
    <?php 
echo form_button('search','Search','class="btn btn-primary" id="mainsearch"');
echo form_button('createnew','Create New','class="btn btn-primary" id="maincreate"');
?>
    <br/>
    <br/>
    <br/>
    <?php echo "<div  id='message3'></div>"; ?> </div>
</div>
<div class='detail'>
  <div class="row">
    <div class="ui-widget span6">
      <?php 
echo form_label("Name:");
$data = array(
              'name'        => 'name',
			  'id'          => 'name2',
             //'class'       => 'input-block-level',
              'value'       => set_value('name'),
              'maxlength'   => '100',
              'size'        => '50',
			  'placeholder' => 'Name',
            );
echo form_input($data);
 ?>
    </div>
    <div class="ui-widget span6">
      <?php 
echo form_label("Phone:");
$data = array(
              'phone'        => 'phone',
			  'id'          => 'phone2',
              //'class'       => 'input-block-level',
              'value'       => set_value('phone'),
              'maxlength'   => '100',
              'size'        => '50',
			  'placeholder' => 'Phone',
            );
echo form_input($data);
 ?>
    </div>
    <div class="ui-widget span6">
      <?php 
echo form_label("Address:");
$data = array(
              'name'        => 'address',
              'id'          => 'address',
              'value'       => set_value('address'),
              'maxlength'   => '100',
              'size'        => '50',
			  'placeholder' => "Address",
            );
echo form_input($data);
 ?>
    </div>
     <div class="ui-widget span6">
      <?php 
echo form_label("landmark:");
$data = array(
              'name'        => 'landmark',
              'id'          => 'landmark',
              'value'       => set_value('landmark'),
              'maxlength'   => '100',
              'size'        => '50',
			  'placeholder' => "landmark",
            );
echo form_input($data);
 ?>
    </div>
    <div class="ui-widget span6">
      <?php 
echo form_label("Email:");
$data = array(
              'name'        => 'email',
              'id'          => 'email',
              'value'       => set_value('email'),
              'maxlength'   => '100',
              'size'        => '50',
			  'placeholder' => "Email",
            );
echo form_input($data);
 ?>
    </div>
    <div class="ui-widget span6" style="display:none;" >
      <?php 
echo form_label("Id:");
$data = array(
              'id'        => 'id',
              'id'          => 'id2',
              'value'       => set_value('id'),
              'maxlength'   => '100',
              'size'        => '50',
			  'placeholder' => "id",
            );
echo form_input($data);
 ?>
    </div>
  </div>
  <br />
  <div class="row center"> <?php echo form_button('create','Create','class="btn btn-primary" id="create"');
 ?> <?php echo form_button('edit','Edit','class="btn btn-primary" id="edit"');
 ?> <?php echo form_button('reset','Reset','class="btn btn-primary" id="reset"');
 ?> <br/>
    <br/>
    <br/>
    <?php echo "<span  id='message'></span>"; ?> <?php echo "<span  id='message4'></span>"; ?> <?php echo "<span  id='message5'></span>"; ?> <?php echo "<span  id='message2'></span>"; ?> </div>
</div>
<div class='order'> <a href="#" class="btn btn-success addproduct pull-right">Add Product</a>
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Sr. No.</th>
        <th>Product</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Amount</th>
        <th>Tax</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody class='orderbody'>
    </tbody>
  </table>
  <div class="row">
    <div class="center billingsubmit span9">  <button class="btn btn-warning btn-large submitbill">Submit</button>
     </div>
    <div class="pull-right span3">
      <table class="table table-bordered">
        <tr>
          <td class="bold">Total Amount:</td>
          <td class="finaltotal">Rs.</td>
        </tr>
        <tr>
          <td class="bold" >Total Tax:</td>
          <td class="finaltax">Rs.</td>
        </tr>
         <tr>
          <td class="bold" >Final Total:</td>
          <td class="finaltotalwithtax">Rs.</td>
        </tr>
      </table>
    </div>
  </div>
  <br/>
  <div class='comment bordered'>
    <div class="row">
      <div class= "span3 text">
        <div>
          <lable>
          <strong>Comments</strong>
          </label>
        </div>
        <textarea class="commentbox" rows="4" cols="50">
</textarea>
        <div>
          <button class="btn btn-primary commentsubmits" type="button">Submit</button>
        </div>
      </div>
      <div class="span9 table">
        <table  class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Date</th>
              <th>Comment</th>
            </tr>
          </thead>
          <tbody class='commenttablebody'>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<script>
	var allproducts;
	var srno=1;
	var j=1;
	
	function calculate() {
		var totalamount=0.0;
		var totaltax=0.0;
		var finaltotal=0.0;
		for(var i=1;i<srno;i++)
		{
			if(deletedrow.indexOf(i+"")==-1)
			{
				if(!isNaN(parseFloat($('.row'+i+' .tax').text())))
				totaltax+=parseFloat($('.row'+i+' .tax').text());
				
				if(!isNaN(parseFloat($('.row'+i+' .amount'+i+' input').val())))
				totalamount+=parseFloat($('.row'+i+' .amount'+i+' input').val());
				finaltotal=totalamount+totaltax;
			}
				
		}
		$('.finaltotal').text("Rs."+totalamount);
		$('.finaltax').text("Rs."+totaltax);
		$('.finaltotalwithtax').text("Rs."+finaltotal);
			
	}
	
	$(document).ready(function(e) {
		addnewrow();
		addnewrow();
		
		$.ajax({
		url: "<?php echo site_url('site/getallproducts'); ?>",
		success: function(msg) {			
			allproducts=JSON.parse(msg);
		}
	    });
		
		
	});
	
	$('.addproduct').click(function(e) {
		addnewrow();
	});
	
	
	var deletedrow=new Array();
	function addnewrow()
	{
		
		$("tbody.orderbody").append("<tr class='row"+(srno)+"'><td class='srno'>"+(j++)+"</td><td><div class='ui-widget product"+(srno)+"'></div></td><td><input placeholder='Quantity' type='text' value='1' style='width:90px;' class='quantity"+(srno)+"'><div class='quantityerror"+(srno)+" alert ' style='display:none;'></div></td><td class='price'></td><td class='amount amount"+(srno)+"'><input placeholder='Amount' type='text'></td><td class='tax'></td><td><a href='#' class='btn btn-danger deleteproduct"+srno+"' >Delete</a></td></tr>");
		
		$('.amount'+srno+' input').keyup(function() {
			
			var productid="."+$(this).parents('.orderbody tr').attr('class');
			var newproductval=$(productid+" select#productnone").val();
			console.log(productid+" .tax");
			for(var i=0;i<allproducts.length;i++)
			{
				
				if(allproducts[i].id==newproductval)
				{
					$(productid+" .tax").html((parseInt(allproducts[i].tax)/100)*parseInt($(this).val()));
					break;
				}
			}
			calculate();
			
		});

		
		var newsel='.product'+(srno);
		//console.log(newsel);
		$(newsel).html($('.productnone').html());
		var newsel2=newsel+" #productnone";
		//console.log(newsel2);
		newsel=newsel+'internal';
		$(newsel2).addClass(newsel.substr(1));
		//console.log(newsel);
		$(function() {
			$( newsel ).combobox();
			$( "#toggle" ).click(function() {
			  $( newsel ).toggle();
			});
		});
		$(newsel).change(function() {
			var selclass=$(this).attr('class');
			selclass=selclass.match(/\d/g);
			selclass = selclass.join("");
			//console.log(selclass);
			$('.quantity'+selclass).keyup();
			//$('.quantity'+selclass).focus();
		});
		
		$('.quantity'+(srno)).keyup(function(e){
			var productid="."+$(this).parents('.orderbody tr').attr('class');
			var newproductval=$(productid+" select#productnone").val();
			//console.log(newproductval);
			//console.log(allproducts);
			var quantity=parseInt($(this).val());
			for(var i=0;i<allproducts.length;i++)
			{
				
				if(allproducts[i].id==newproductval)
				{
					if(quantity>allproducts[i].stock)
					{
						var selclass=$(this).attr('class');
						selclass=selclass.match(/\d/g);
						selclass = selclass.join("");
						$('.quantityerror'+selclass).show();
						$('.quantityerror'+selclass).text("quantity should be less than "+allproducts[i].stock);
					}
					else
					{
						var selclass=$(this).attr('class');
						selclass=selclass.match(/\d/g);
						selclass = selclass.join("");
						$('.quantityerror'+selclass).hide();
					}
					break;
				}
			}
			
			for(var i=0;i<allproducts.length;i++)
			{
				
				if(allproducts[i].id==newproductval)
				{
					$(productid+" .price").html(allproducts[i].price);
					//console.log($(this).val());
					$(productid+" .amount input").val(parseInt(allproducts[i].price)*parseInt($(this).val()));
					$(productid+" .tax").html((parseInt(allproducts[i].tax)/100)*parseInt($(this).val()));
					break;
				}
			}
			//console.log(productid+" .ui-combobox input" );
			selclass=productid.match(/\d/g);
			selclass = selclass.join("");
			selclass=parseInt(selclass);
			selclass++;
			//console.log(productid+' .amount input');
			$(productid+' .amount input').trigger('keyup');
			if(e.keyCode==13)
			{
				$(".row"+selclass+" .ui-combobox input").focus();
				addnewrow();
			}
		});  
		
		$('.deleteproduct'+(srno)).click(function(e) {
			var newthis="."+$(this).parents('tr').attr('class');
			
			
			$(newthis).remove();
			deletedrow.push(newthis.substr(4));
			//console.log(deletedrow);
			j=1;
			for(var i=1;i<srno;i++)
			{
				if(deletedrow.indexOf(i+"")==-1)
				{
					var selector=".row"+i+" .srno";
					$(selector).text(j++);	
				}
			}
			calculate();
		});
		
		srno++;
	}
	
	

	$('#mainsearch').click(function(){
		if($('#name').val()=="" && $('#phone').val()=="")
		{
			$('#message3').fadeIn(500);
			$('#message3').html("<span class='alert alert-error'> To Search Third Party, Enter Name or Phone.</span>");
			$('#message3').delay(2000).fadeOut(1000);
			return false;
		}
		else
		{
			if($('#name').val()=="")
			{
				var form_data = {
				phone: $('#phone').val(),
				}
				console.log(form_data);
				$.ajax({
				url: "<?php echo site_url('site/mainsearchphone'); ?>",
				type: 'POST',
				data: form_data,
				success: function(msg) {
					console.log(msg);
					var message= JSON.parse(msg);
					$('.search').fadeOut(100);
					$('.detail').fadeIn(500);
					$('.order').fadeIn(500);
					$('#edit').fadeIn(50);
					$('#create').hide();
					$('#phone2').val(message.phone);
					$('#name2').val(message.name);
					$('#email').val(message.email);
					$('#address').val(message.address);
					$('#landmark').val(message.landmark);
					$('#id2').val(message.id);
					var comment="";var date="";
					
					for(var i=0;i<message.comment.length;i++)
					{
						comment=message.comment[i].comment;
						date=message.comment[i].date;
						$('.commenttablebody').append("<tr><td>"+date+"</td><td>"+comment+"</td></tr>");	
					}
					$('.commentbox').val("");
				}
			
			});
			}
			else{
				var form_data = {
				name: $('#name').val(),
				   }
			$.ajax({
				url: "<?php echo site_url('site/mainsearch'); ?>",
				type: 'POST',
				data: form_data,
				success: function(msg) {
					
					//console.log(msg);
					var message= JSON.parse(msg);
					$('.search').fadeOut(100);
					$('.detail').fadeIn(500);
					$('.order').fadeIn(500);
					$('#edit').fadeIn(50);
					$('#create').hide();
					$('#phone2').val(message.phone);
					$('#name2').val(message.name);
					$('#email').val(message.email);
					$('#address').val(message.address);
					$('#landmark').val(message.landmark);
					$('#id2').val(message.id);
					var comment="";var date="";
					
					for(var i=0;i<message.comment.length;i++)
					{
						comment=message.comment[i].comment;
						date=message.comment[i].date;
						$('.commenttablebody').append("<tr><td>"+date+"</td><td>"+comment+"</td></tr>");	
					}
					$('.commentbox').val("");
				}
			
			});
			}
		}
	});
	
	$('#edit').click(function(){
		
		if($('#name2').val()=="" || $('#phone2').val()=="" || $('#address').val()=="" || $('#email').val()=="")
		{
			$('#message4').fadeIn(500);
			$('#message4').html("<span class='alert alert-error'>Third Party can not be created.</span>");
			$('#message4').delay(2000).fadeOut(1000);
			return false;
		}
		else
		{
			var form_data = {
				name: $('#name2').val(),
				phone: $('#phone2').val(),
				address: $('#address').val(),
				landmark: $('#landmark').val(),
				email: $('#email').val(),
				id: $('#id2').val(),
			}
				
			$.ajax({
				url: "<?php echo site_url('site/editsearch'); ?>",
				type: 'POST',
				data: form_data,
				success: function(msg) {
					//console.log(form_data);
					$('.search').fadeOut(100);
					$('.detail').fadeIn(500);
					$('#edit').fadeIn(50);
					$('#create').fadeOut();
					$('#message').html("<span class='alert alert-success'>Details Edited Successfully.</span>");
					$('#message').delay(2000).fadeOut(1000);
				}
			});
		}
	});
	
	
	$('#create').click(function(){
		
		
		if($('#name2').val()=="" || $('#phone2').val()=="" ||  $('#address').val()=="" || $('#email').val()=="")
		{
			$('#message5').fadeIn(500);
			$('#message5').html("<span class='alert alert-error'>Third Party can not be created, Enter the Details </span>");
			$('#message5').delay(2000).fadeOut(1000);
			return false;
		}
		else
		{
			var form_data = {
				name: $('#name2').val(),
				phone: $('#phone2').val(),
				address: $('#address').val(),
				landmark: $('#landmark').val(),
				email: $('#email').val(),
				//id: $('#id2').val(),
			}
			$.ajax({
				url: "<?php echo site_url('site/createbill'); ?>",
				type: 'POST',
				data: form_data,
				success: function(msg) {
					//console.log(form_data);
					var message= JSON.parse(msg);
					$('.search').fadeOut(100);
					$('.detail').fadeIn(500);
					$('.order').fadeIn(500);
					$('#edit').fadeIn(50);
					$('#create').fadeOut();
					$('#id2').val(message.id);
					$('#message2').html("<span class='alert alert-success'>Details Created Successfully.</span>");
					$('#message2').delay(2000).fadeOut(1000);	
				}
			});
		}
	});
	
	$('#maincreate').click(function(){
		$('.search').fadeOut(100);
		$('.detail').fadeIn(500);
		$('#edit').fadeOut();
		$('#create').fadeIn();
	});

	$('#reset').click(function(){
	$('.commenttablebody').html("");	
	$('.search').fadeIn(500);
	$('.detail').fadeOut(100);
	$('.order').fadeOut(100);
	$('#phone2').val("");
	$('#name2').val("");
	$('#email').val("");
	$('#address').val("");
	$('#landmark').val("");
	$('#name').val("");
	$('#phone').val("");
	$('.ui-combobox input').val("");
	});
	
	$('.commentsubmits').click(function(){
		var form_data={
			thirdparty: $('#id2').val(),
			comment: $('.commentbox').val(),
		};
		$.ajax({
	
			url: "<?php echo site_url('site/commentsubmits'); ?>",
			data: form_data,
			type: "post",
			success: function(msg){
				//console.log(form_data);
				//console.log(msg);
				if(msg="true")
				{
					var d = new Date();
					d=d.toLocaleString();
					$('.commenttablebody').append("<tr><td>"+d+"</td><td>"+$('.commentbox').val()+"</td></tr>");
					$('.commentbox').val("");
				}
				
			}
			
		});
	});
	
	
	$(".submitbill").click(function (){
		var product=new Array();
		var quantity=new Array();
		var amount=new Array();
		for(var i=1;i<srno;i++)
		{
			$(".submitbill").attr('disabled','disabled');
			if(deletedrow.indexOf(i+"")==-1 && !isNaN(parseInt($('.product'+i+'internal').val())) )
			{
				product.push(parseInt($('.product'+i+'internal').val()));
				quantity.push(parseInt($('.quantity'+i).val()));
				amount.push(parseInt($('.amount'+i+' input').val()));
			}
		}
		if(product.length==0)
		{
			$(".submitbill").removeAttr('disabled');
			return false;
			
		}
		var form_data= {
			billamount: $('.finaltotal').text().substr(3),
			billtotal: $('.finaltotalwithtax').text().substr(3),
			billtax: $('.finaltax').text().substr(3),
			thirdparty: $('#id2').val(),
			quantity: quantity,
			product: product,
			amount: amount,
		};
		
		console.log(form_data);
		//console.log(form_data);
		$.ajax({
		url: "<?php echo site_url('site/submitbill'); ?>",
		type: 'POST',
		data: form_data,
		success: function(msg) {
						window.location.href = "<?php echo site_url('site/viewbill') ?>";
			
				
		}
		});
	return false;
	});
</script>