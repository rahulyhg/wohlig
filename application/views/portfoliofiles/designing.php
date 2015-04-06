<?php 

$folio[0]->header="SuperU Home";
$folio[1]->header="SuperU Play";
$folio[2]->header="SuperU Score";
$folio[3]->header="Toykraft Puzzel";
$folio[4]->header="Toykraft Puzzel";
$folio[5]->header="Toykraft Puzzel";
$folio[6]->header="Toykraft Puzzel";

$folio[0]->img="mobile17";
$folio[1]->img="mobile18";
$folio[2]->img="mobile19";
$folio[3]->img="mobile20";
$folio[4]->img="mobile21";
$folio[5]->img="mobile22";
$folio[6]->img="mobile23";

$folio[0]->description="SuperU Simple, Light, Single Handed Game Helps You Pass Your Time In An Enjoyeble Way. ";
$folio[1]->description="Addictive Game To Save The SuperU City Fun Game Where You Control SuperU And Save Him From Colliding With The Buildings , Hot Air Balloons And Space Crafts.";
$folio[2]->description="You Can Share You High Score And Complete With Your Freinds On Google Play Service.";
$folio[3]->description="Toykraft Puzzel Is Learn With Toy-Kraft Apps. Solve Your Favourite Zigsaw Puzzel On The Go! Pegasus Toy-Kraft Pvt.Ltd. Provide An Unbeatable Puzzel Solving  Expreriance For Young Ones.";
$folio[4]->description="Toykraft Puzzel Is Learn With Toy-Kraft Apps. Solve Your Favourite Zigsaw Puzzel On The Go! Pegasus Toy-Kraft Pvt.Ltd. Provide An Unbeatable Puzzel Solving  Expreriance For Young Ones.";
$folio[5]->description="Toykraft Puzzel Is Learn With Toy-Kraft Apps. Solve Your Favourite Zigsaw Puzzel On The Go! Pegasus Toy-Kraft Pvt.Ltd. Provide An Unbeatable Puzzel Solving  Expreriance For Young Ones.";
$folio[6]->description="Toykraft Puzzel Is Learn With Toy-Kraft Apps. Solve Your Favourite Zigsaw Puzzel On The Go! Pegasus Toy-Kraft Pvt.Ltd. Provide An Unbeatable Puzzel Solving  Expreriance For Young Ones.";


$folio[0]->technology="Lua programming, Corona Labs.";
$folio[1]->technology="Lua programming, Corona Labs.";
$folio[2]->technology="Lua programming, Corona Labs.";
$folio[3]->technology="Lua programming, Corona Labs.";
$folio[4]->technology="Lua programming, Corona Labs.";
$folio[5]->technology="Lua programming, Corona Labs.";
$folio[6]->technology="Lua programming, Corona Labs.";



?>

<?php
 $this->load->helper('portfolio'); 
 echo createportfolio($folio); 
?>
