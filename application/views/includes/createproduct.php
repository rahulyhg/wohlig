 <script>

  
  $(function() {
	$( "#category" ).combobox();
	$( "#toggle" ).click(function() {
	  $( "#category" ).toggle();
	});
  });

$(function() {
	$( "#brand" ).combobox();
	$( "#toggle" ).click(function() {
	  $( "#brand" ).toggle();
	});
  });

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

  
/*$(function() {
	$( "#category" ).combobox();
	$( "#toggle" ).click(function() {
	  $( "#category" ).toggle();
	});
  });
*/
</script>

<?php echo form_open('site/createproductsubmit');

echo form_label("Name:");
$data = array(
              'name'        => 'name',
              'id'          => 'name',
              'value'       => set_value('name'),
              'maxlength'   => '100',
              'size'        => '50',
			  'placeholder' => "Name",
            );
echo form_input($data);
echo "<span  id='message1'></span>";


echo form_label("Sku:");
$data = array(
              'name'        => 'sku',
              'id'          => 'sku',
              'value'       => set_value('sku'),
              'maxlength'   => '100',
              'size'        => '50',
			  'placeholder' => "sku",
            );
echo form_input($data);
echo "<span  id='message2'></span>";


echo form_label("Tax:");
$data = array(
              'name'        => 'tax',
              'id'          => 'tax',
              'value'       => set_value('tax'),
              'maxlength'   => '100',
              'size'        => '50',
			  'placeholder' => "tax",
            );
echo form_input($data);

echo form_label("Stock:");
$data = array(
              'name'        => 'stock',
              'id'          => 'stock',
              'value'       => set_value('stock'),
              'maxlength'   => '100',
              'size'        => '50',
			  'placeholder' => "stock",
            );
echo form_input($data);

echo form_label("Price");
$data = array(
              'name'        => 'price',
              'id'          => 'price',
              'value'       => set_value('price'),
              'maxlength'   => '100',
              'size'        => '50',
			  'placeholder' => "price",
            );
echo form_input($data);

echo form_label("Cost");
$data = array(
              'name'        => 'cost',
              'id'          => 'cost',
              'value'       => set_value('cost'),
              'maxlength'   => '100',
              'size'        => '50',
			  'placeholder' => "cost",
            );
echo form_input($data);

echo '<div class="ui-widget">';
echo form_label("Category:");
echo form_dropdown('category',$category,set_value('category'),'id="category"');
echo '</div>';

echo '<div class="ui-widget">';
echo form_label("Brand:");
echo form_dropdown('brand',$brand,set_value('brand'),'id="brand"');
echo '</div>';

echo '<div class="ui-widget">';
echo form_label("Family:");
echo form_dropdown('family',$family,set_value('family'),'id="family"');
echo '</div>';

echo '<div class="ui-widget">';
echo form_label("Brick:");
echo form_dropdown('brick',$brick,set_value('brick'),'id="brick"');
echo '</div>';


echo "<br/>";

echo form_submit('submit','Create Product','class="btn btn-primary"');

echo form_reset('reset','Reset Form','class="btn btn-info"');

?>



<script>

$('#name').keyup(function(){
	
	var form_data = {
		name: $('#name').val(),
	}
		
	$.ajax({
		url: "<?php echo site_url('site/checkproductname'); ?>",
		type: 'POST',
		data: form_data,
		success: function(msg) {			
			//console.log(form_data);
			var message= JSON.parse(msg);
			//console.log(msg);
			if(message.number==0)
			{
				
				$('#message1').html("<span class='alert alert-success'>The Name you have entered is unique.</span>");
				$('#submit').removeAttr('disabled');
			}
			else
			{
				
				$('#message1').html("<span class='alert alert-error'>The Name you have entered already exists.</span>");
				$('#submit').attr('disabled','disabled');
				
			}
		}
	});
});

$('#sku').keyup(function(){
	
	var form_data = {
		sku: $('#sku').val(),
	}
		
	$.ajax({
		url: "<?php echo site_url('site/checkproductsku'); ?>",
		type: 'POST',
		data: form_data,
		success: function(msg) {			
			//console.log(form_data);
			var message= JSON.parse(msg);
			//console.log(msg);
			if(message.number==0)
			{
				
				$('#message2').html("<span class='alert alert-success'>The Sku you have entered is unique.</span>");
				$('#submit').removeAttr('disabled');
			}
			else
			{
				
				$('#message2').html("<span class='alert alert-error'>The Sku you have entered already exists.</span>");
				$('#submit').attr('disabled','disabled');
				
			}
		}
	});
});

</script>