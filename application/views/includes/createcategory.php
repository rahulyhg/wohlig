<?php echo form_open('site/createcategorysubmit');

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
echo "<span  id='message'></span>";

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


echo "<br/>";

echo form_submit('submit','Create Category','class="btn btn-primary"');
echo form_reset('reset','Reset Form','class="btn btn-info"');

?>


<script>

$('#name').keyup(function(){
	
	var form_data = {
		name: $('#name').val(),
	}
		
	$.ajax({
		url: "<?php echo site_url('site/checkcategory'); ?>",
		type: 'POST',
		data: form_data,
		success: function(msg) {			
			//console.log(form_data);
			var message= JSON.parse(msg);
			//console.log(msg);
			if(message.number==0)
			{
				
				$('#message').html("<span class='alert alert-success'>The Name you have entered is unique.</span>");
				$('#submit').removeAttr('disabled');
			}
			else
			{
				
				$('#message').html("<span class='alert alert-error'>The Name you have entered already exists.</span>");
				$('#submit').attr('disabled','disabled');
				
			}
		}
	});
});

</script>