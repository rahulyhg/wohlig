<?php 


$folio[0]->header="Designers Group";
$folio[0]->img="designers";
$folio[0]->description="This website contains many number of pages, developed with an admin panel where the admin can make all the website changes through the adminpanel. The Intro, Portfolio, Media Page are designed and developed on HTML5. Entire website including the animations are compatible on mobile devices too.";
$folio[0]->technology="HTML5, CSS3, jQuery, K2, PHP, Mootool, Joomla 2.5, Ajax";


$folio[1]->header="Golf Factory";
$folio[1]->img="golf";
$folio[1]->description="A complete e-commerce website with features like, cart, payment gateway, magic zoom on images, product catalog, discount coupons, sales, shipping, reports. Website also molds itself to a mobile website on mobile phones with more easy and user friendly navigation, events etc. ";
$folio[1]->technology="HTML5, CSS3, jQuery, Prototype, PHP, Magento, Magic Zoom, Ajax, Bootstrap";


$folio[2]->header="Int Advertising";
$folio[2]->img="int";
$folio[2]->description="A completely innovative web layout, unconventional web animations, along with admin panel for the client to manage their portfolio, Testimonial and many more. The portfolio of the website is self-developed gallery with backend management of the portfolio.";
$folio[2]->technology="HTML5, CSS3, jQuery, PHP, jQuery Masonry, Codeignitor";


$folio[3]->header="Ispirare Accessories";
$folio[3]->img="ispirare";
$folio[3]->description="Innovative design with background web slider and beautiful transitions and animation perfectly blending to the feel. This website is an example of a single page which is utilized for a website site using creative navigation and animations.";
$folio[3]->technology="HTML5, CSS3, jQuery, PHP, Super Slides";


$folio[4]->header="Lashkaria Group";
$folio[4]->img="lashkaria";
$folio[4]->description="This website contains many number of pages, developed with an admin panel where the admin can make all the website changes through the adminpanel. Website also molds itself to a mobile website on mobile phones with more easy and user friendly navigation, events etc. Background image transition is enhancing the UI.";
$folio[4]->technology="HTML5, CSS3, jQuery, K2, PHP, Mootool, Joomla 2.5, Ajax, Bootstrap";


$folio[5]->header="Orange Stone";
$folio[5]->img="orgstn";
$folio[5]->description="Self Developed Slider, beautiful transitions and animation perfectly blending to the feel. Uses extensive of animations and ajax making the website lite and simple.";
$folio[5]->technology="HTML5, CSS3, jQuery, PHP, Ajax";


?>

<?php
 $this->load->helper('portfolio'); 
 echo createportfolio($folio); 
?>
