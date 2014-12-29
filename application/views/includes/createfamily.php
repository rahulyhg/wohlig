<?php echo form_open('site/createfamilysubmit','id="form"');

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




echo "<br/>";

echo form_submit('submit','Create Family','class="btn btn-primary" id="submit" disabled="disabled"');
echo form_reset('reset','Reset Form','class="btn btn-info"');


?>


<script>

$('#name').keyup(function(){
	
	var form_data = {
		name: $('#name').val(),
	}
		
	$.ajax({
		url: "<?php echo site_url('site/checkfamilyname'); ?>",
		type: 'POST',
		data: form_data,
		success: function(msg) {			
			var message= JSON.parse(msg);
			
			if(message.number==0)
			{
				
				$('#message').html("<span class='alert alert-success'>The name you have entered is unique.</span>");
				$('#submit').removeAttr('disabled');
			}
			else
			{
				
				$('#message').html("<span class='alert alert-error'>The name you have entered already exists.</span>");
				$('#submit').attr('disabled','disabled');
				
			}
		}
	});
});

</script>