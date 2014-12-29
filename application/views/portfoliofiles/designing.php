<?php 

$folio[0]->header="Bungalow Stays Logo";
$folio[1]->header="Fiona International Logo";
$folio[2]->header="Golf Shirt Logo";
$folio[3]->header="Saral Pooja Logo";
$folio[4]->header="Vintage Earth Banner";
$folio[5]->header="What A Surprise";
$folio[6]->header="NextGen Solutions";
$folio[0]->img="design4";
$folio[1]->img="design6";
$folio[2]->img="design2";
$folio[3]->img="design1";
$folio[4]->img="design3";
$folio[5]->img="design5";
$folio[6]->img="design7";

$folio[0]->description="Designing of Corporate Identity.";
$folio[1]->description="Designing of Corporate Identity.";
$folio[2]->description="Designing of Corporate Identity.";
$folio[3]->description="Designing of Corporate Identity.";
$folio[4]->description="Designing of Banner.";
$folio[5]->description="Designing of Webpage.";
$folio[6]->description="Designing of Webpage & Corporate Identity.";

$folio[0]->technology="Adobe Illustrator";
$folio[1]->technology="Adobe Illustrator";
$folio[2]->technology="Adobe Illustrator";
$folio[3]->technology="Adobe Illustrator";
$folio[4]->technology="Adobe Illustrator, Adobe Photoshop";
$folio[5]->technology="Adobe Illustrator, Adobe Photoshop";
$folio[6]->technology="Adobe Illustrator, Adobe Photoshop";


?>

<?php
 $this->load->helper('portfolio'); 
 echo createportfolio($folio); 
?>
