<?php

$homes = ['int','js','css','images/icons','Schema','festfiles'];
$dirs = ['int/*.php','int/skeema','js/*.js','css/*.css','images/icons/*','Schema/*','festfiles/*'];
$Src = '../wmff/rdev.wimbornefolk.co.uk/';
$tlen = strlen($Src);

foreach ($homes as $home) {
  if (!file_exists($home)) mkdir($home,0777,1);
}

foreach ($dirs as $dir) {
  foreach (glob($Src . $dir) as $sf) {
//    echo "Checking $sf: ";
    $df = substr($sf,$tlen);
//echo $df; exit;
    if (file_exists($df)) {
      $sfts = filectime($sf);
      $dfts = filectime($df);
      if ($sfts > $dfts) {
        echo "$sf Needs copying\n";
        copy($sf,$df);
      }
    } else {
      echo "$sf Needs copying\n";
      copy($sf,$df);
    }
//    echo "\n";
    
  }
}


