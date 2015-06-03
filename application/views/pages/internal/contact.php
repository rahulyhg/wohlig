    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
	var i=0;
function initialize() {

	 var styles = [
    {
      stylers: [
        { hue: "#00ffe6" },
        { saturation: -100 },
		 { lightness: 70 },
	
      ]
    }
  ];

  // Create a new StyledMapType object, passing it the array of styles,
  // as well as the name to be displayed on the map type control.
  var styledMap = new google.maps.StyledMapType(styles,
    {name: "Styled Map"});


  var mapOptions = {
    zoom: 15,
    center: new google.maps.LatLng(19.0398171,72.8599335),
    mapTypeId: google.maps.MapTypeId.ROADMAP,
	 mapTypeControlOptions: {
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
    }
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'),
                                mapOptions);
	 map.mapTypes.set('map_style', styledMap);
  map.setMapTypeId('map_style');							

  var image = '<?php echo base_url("assets/img/pointer.png"); ?>';
  var myLatLng = new google.maps.LatLng(19.0398171,72.8599335);
  var wohligMarker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      icon: image
  });
  
  google.maps.event.addListener(wohligMarker, 'click', function() {
    window.open("https://www.google.co.in/maps/place/Sadhana+English+Primary+School/@19.0398171,72.8599335,15z/data=!4m5!1m2!2m1!1s+sadhana+school++Sion+(W)+,+Mumbai+400022!3m1!1s0x3be7cf2cc4000001:0xc683a42662527334",'_blank');
  });
  google.maps.event.addListener(map, 'click', function() {
    window.open("https://www.google.co.in/maps/place/Sadhana+English+Primary+School/@19.0398171,72.8599335,15z/data=!4m5!1m2!2m1!1s+sadhana+school++Sion+(W)+,+Mumbai+400022!3m1!1s0x3be7cf2cc4000001:0xc683a42662527334",'_blank');
  });
  
  google.maps.event.addListener(wohligMarker, 'mouseover', function() {
    $(".textmap p").stop();
	 $(".textmap p").fadeIn(1000);
  });
  
   google.maps.event.addListener(wohligMarker, 'mouseout', function() {
    $(".textmap p").stop();
	 $(".textmap p").fadeOut(1000);
  });
}



google.maps.event.addDomListener(window, 'load', initialize);

var submitvalue=false;
var cname=false;
var cemail=false;
var cmessage=false;

$('document').ready( function () {
	$('.contactsubmit').click( function() {
		if(submitvalue) {
		callajax();
		}
		return false;
	});
	
	function checkname() {	
		var name=$('#name').val();
		if(name=="")	{
			$('#name').addClass("iserror");
			cname=false;
		}
		else {
		$('#name').removeClass("iserror");
			cname=true;
		}
		checkallvalid();
		
	}
	
	function validateEmail(emailaddress){  
	   var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;  
	   if(!emailReg.test(emailaddress)) {  
			return false;
	   }       
	   else 
	   return true;
	}
	
	function checkemail() {	
		var email=$('#email').val();
		if(!validateEmail(email) || email=="")	{
			$('#email').addClass("iserror");
			cemail=false;
		}
		else {
			$('#email').removeClass("iserror");
			cemail=true;
		}
		checkallvalid();
		
	}
	function checkmessage() {	
		var message=$('#message').val();
		if(message=="")	{
			$('#message').addClass("iserror");
			cmessage=false;
		}
		else {
		$('#message').removeClass("iserror");
			cmessage=true;
		}
		checkallvalid();
		
	}
	function checkallvalid() {	
		if(cname && cemail && cmessage)
		{
			submitvalue=true;
			$('.contactsubmit').css('opacity','1');
		}
		else
		{
			submitvalue=false;
			$('.contactsubmit').css('opacity','0.4');
		}
		
	}
	$('#name').change(function() {checkname();});
	$('#name').keyup(function() {checkname();});
	$('#email').change(function() {checkemail();});
	$('#email').keyup(function() {checkemail();});
	$('#message').change(function() {checkmessage();});
	$('#message').keyup(function() {checkmessage();});
	
	function callajax() {
		submitvalue=false;
		form_data={ name: $('#name').val(), address: $('#address').val() , phone: $('#phone').val() , email: $('#email').val(), message: $('#message').val(), };
		console.log(form_data);
		$.post("<?php echo site_url("site/sendcontact");?>", form_data ).always(function(msg) { 
		console.log(msg); 
		$(".nameform").fadeOut(500);
		$(".submitmessage").fadeOut(500);
		$(".submitmessage").text("Thank you for your message.");
		$(".submitmessage").delay(800).fadeIn(500);
		});;
		
	}
	
});





    </script>
<p style="margin-bottom: 30px;">Plot no. 3, Flat no. A/30 Laxmi Nivas , 3rd floor , Near sadhana school , Sion (W) , Mumbai 400022.<br/>Tel: +91 98200 45678 / +91 9819222221   Email: info@wohlig.com</p>
<div class="row">
<div class="cspan1">
 <div id="map-canvas" style="width:250px; height:250px;"></div>
 <div class="textmap"><p style="">click to reach us</p></div>
</div>
<div class="cspan2">
<form class="contactform">
<p style="text-align:left;margin-bottom: -10px;" class="submitmessage">The fields indicated with (*) are compulsory.</p><br />
<div class="nameform">
<label>Name (*)</label><input type="text" id="name"><br/>
<label>Address</label><input type="text" id="address"><br />
<label>Phone</label><input type="text" id="phone"> <br />
<label>Email (*)</label><input type="text" id="email"><br />
<label>Message (*)</label><textarea id="message" style="height:81px;resize: none;"></textarea><br />
<div style="text-align:center; width:100%;">
<a href="#" class="contactsubmit"><img class="submitimg" src="<?php echo base_url("assets/img/submit.png");?>"></a>
</div>
</form>
</div>
</div>
