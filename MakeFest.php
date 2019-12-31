<?php

$homes = ['int','js','css','images/icons','Schema'];
$dirs = ['int/*.php','int/skeema','js/*.js','css/*.css','images/icons/*','Schema/*'];
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
/*


ln ../wmff/rdev.wimbornefolk.co.uk/int/*.php int 2>/dev/null
ln ../wmff/rdev.wimbornefolk.co.uk/int/skeema int 2>/dev/null
ln ../wmff/rdev.wimbornefolk.co.uk/js/*.js js 2>/dev/null
ln ../wmff/rdev.wimbornefolk.co.uk/css/*.css css 2>/dev/null
ln ../wmff/rdev.wimbornefolk.co.uk/images/icons/* images/icons 2>/dev/null
ln ../wmff/rdev.wimbornefolk.co.uk/Schema/* Schema 2>/dev/null
# New Version
#!/usr/bin/perl
@dirs = [['int/*.php','int'],['int/skeema','int'],['js/*.js','js'],['css/*.css','css'],['images/icons/*','images/icons'],['Schema/*','Schema']];
$Src = '../wmff/rdev.wimbornefolk.co.uk/';
*/

