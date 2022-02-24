<?php
require 'auto.php';

//promenna $pes1, obsahujici nazev
$pes1 = new pes('Azor');
echo 'Pes se jmenuje: ' . $pes1->jmeno . '<br />';
echo 'Pes mluvi: ' . $pes1->mluv() . '<br />';

//promenna $pes1, obsahujici nazev
$pes2 = new pes('Natahu');
echo 'Pes se jmenuje: ' . $pes2->jmeno . '<br />';
echo 'Pes mluvi: ' . $pes2->mluv() . '<br />';