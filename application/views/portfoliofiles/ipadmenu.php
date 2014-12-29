<?php 

$folio[0]->header="Category View on iPad";
$folio[1]->header="Products View on iPad";
$folio[2]->header="Backend of iPad Menu";

$folio[0]->img="ipadmenu1";
$folio[1]->img="ipadmenu2";
$folio[2]->img="ipadmenu3";


$folio[0]->description="ipad menu is primarily made for guests and customer. Easy interactivity between the hotel, restaurant, hospitals attendant and the guest is the main feature of this product with a personalised touch.";
$folio[1]->description="ipad menu is primarily made for guests and customer. Easy interactivity between the hotel, restaurant, hospitals attendant and the guest is the main feature of this product with a personalised touch.";
$folio[2]->description="ipad menu is primarily made for guests and customer. Easy interactivity between the hotel, restaurant, hospitals attendant and the guest is the main feature of this product with a personalised touch.";


$folio[0]->technology="HTML 5, CSS 3, JQuery, Ajax, PHP 5, MYSQL, Bootsrap, Codeignitor, Jquery Mobile, PhoneGap, Hammer.js, JQuery Validator, Select 2, MD5 Hash, Adobe Photoshop, Adobe Illustrator.";
$folio[1]->technology="HTML 5, CSS 3, JQuery, Ajax, PHP 5, MYSQL, Bootsrap, Codeignitor, Jquery Mobile, PhoneGap, Hammer.js, JQuery Validator, Select 2, MD5 Hash, Adobe Photoshop, Adobe Illustrator.";
$folio[2]->technology="HTML 5, CSS 3, JQuery, Ajax, PHP 5, MYSQL, Bootsrap, Codeignitor, Jquery Mobile, PhoneGap, Hammer.js, JQuery Validator, Select 2, MD5 Hash, Adobe Photoshop, Adobe Illustrator.";


?>

<?php
 $this->load->helper('portfolio'); 
 echo createportfolio($folio); 
?>
