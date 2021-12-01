<?php
$swords=$_GET['swords'];
$asterisc="***";
$paragrafo =
 "What’s important is the fucking  drive to see a project through no matter what.
 Form follows fucking function. Accomplishment validates belief, and belief inspires accomplishment.
 Don’t fucking censor yourself. Sterility leads to susceptibility. 
 If you fucking give up, you will achieve nothing.
 Widows and orphans are terrible fucking tragedies, both in real life and definitely in typography.
 There is no right fucking answer. The splendor of the mystery is that you don’t understand.
 Saul Bass on failure: Failure is built into creativity… the creative act involves this element of ‘newness’ and ‘experimentalism,’
 then one must expect and accept the fucking possibility of failure.Fuck.
 You need to sit down and sketch more fucking ideas because stalking your ex on facebook isn’t going to get you anywhere.";

 var_dump(strlen($paragrafo));
 var_dump($swords);
 $newParag=str_replace($swords,$asterisc,$paragrafo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <p>
     <?php 
     echo $newParag;
     ?>
  </p>
</body>
</html>