<?php 
$folio[0]->header="Chintan Shah";
$folio[0]->img="1";
$folio[0]->description="A collection of tex
tile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.";
$folio[1]->header="Tushar Shah";

$folio[1]->img="2";

$folio[1]->description="It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer.";
$folio[0]->technology="The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.";
$folio[1]->technology="A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.";
?>

<?php
 $this->load->helper('portfolio'); 
 echo createportfolio($folio); 
?>
