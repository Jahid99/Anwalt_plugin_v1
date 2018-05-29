<?php 

   
   function curl_download3($Url){
   
    if (!function_exists('curl_init')){
   
    die('cURL is not installed. Install and try again.');
   
    }
   
    $ch = curl_init();
   
    curl_setopt($ch, CURLOPT_URL, $Url);
   
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   
    $output = curl_exec($ch);
   
    curl_close($ch);
   
    $start = strpos($output, '<span class="ratingText">(');
   
    $end = strpos($output, ')</span>', $start);
   
    $length = $end-$start;
   
    $output = substr($output, $start, $length);
   
    return $output;
   
   }
   $string = curl_download3($profile_link2);
   ?>


    <?php 

    $val = '';

    if(isset($string[26])){
      $val.=$string[26];
    }

    if(isset($string[27])){
      $val.=$string[27];
    }
    if(isset($string[28])){
      $val.=$string[28];
    }
    if(isset($string[29])){
      $val.=$string[29];
    }

    ?>
   
  <p class="hnpsnippet1"><?php echo $val ; ?> Bewertungen auf <a href="<?php echo $profile_link2; ?>" target="_blank">Anwalt.de</a> </p>
  <?php
   function curl_download4($Url){
   
    if (!function_exists('curl_init')){
   
    die('cURL is not installed. Install and try again.');
   
    header('content-type:text/plain');
   
    }
   
    $ch = curl_init();
   
    curl_setopt($ch, CURLOPT_URL, $Url);
   
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   
    $output = curl_exec($ch);
   
    curl_close($ch);
   
    $start = strpos($output, '<div class="ratingStarsTextRating">');
   
    $end = strpos($output, '</div>', $start);
   
    $length = $end-$start;
   
    $output = substr($output, $start, $length);
   
    return $output;
   }
   
   $string = curl_download4($profile_link2);

   $ratings = $string[101].'.'.$string[103];

   ?>
  <p class="hnpsnippet2"><?php echo  $ratings; ?> von 5 Sternen </p>



   <?php

//header('content-type:text/plain');

function curl_download_image_link($Url){

 if (!function_exists('curl_init')){

 die('cURL is not installed. Install and try again.');

 }

 $ch = curl_init();

 curl_setopt($ch, CURLOPT_URL, $Url);

 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

 $output = curl_exec($ch);

 curl_close($ch);

 $start = strpos($output, '<figure class="imageBoxRound centered">');

$end = strpos($output, '</figure>', $start);

$length = $end-$start;

$output = substr($output, $start, $length);



 return $output;

}


  echo $string = curl_download_image_link($profile_link2);

  $flag = 0;

  for($i=0;$i<=10000;$i++){

    if($string[$i]=='s' && $string[$i+1]=='r' && $string[$i+2]=='c' ){
      $flag = $i + 6;
      break;
    }

  }

  //$string[$flag];
  $img_string = '';

  for($i=$flag;$string[$i]!='"';$i++){

    
      $img_string.=$string[$i];

    

  }
  $img_string;
?>

<?php

//header('content-type:text/plain');

function curl_download_street_address($Url){

 if (!function_exists('curl_init')){

 die('cURL is not installed. Install and try again.');

 }

 $ch = curl_init();

 curl_setopt($ch, CURLOPT_URL, $Url);

 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

 $output = curl_exec($ch);

 curl_close($ch);

 $start = strpos($output, '<span class="iconText">');

$end = strpos($output, '<br>', $start);

$length = $end-$start;

$output = substr($output, $start, $length);



 return $output;

}


  $string = curl_download_street_address($profile_link2);
    
  $cleaner_input = trim(strip_tags($string));

 

?>


<?php

//header('content-type:text/plain');

function curl_download_postal_code($Url){

 if (!function_exists('curl_init')){

 die('cURL is not installed. Install and try again.');

 }

 $ch = curl_init();

 curl_setopt($ch, CURLOPT_URL, $Url);

 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

 $output = curl_exec($ch);

 curl_close($ch);

 $start = strpos($output, '<span class="iconText">');

$end = strpos($output, '</span>', $start);

$length = $end-$start;

$output = substr($output, $start, $length);



 return $output;

}


  $string = curl_download_postal_code($profile_link2);
    
    $flag = 0;

  for($i=0;$i<=10000;$i++){

    if($string[$i]=='<' && $string[$i+1]=='b' && $string[$i+2]=='r' && $string[$i+3]=='>'){
      $flag = $i + 4;
      break;
    }

  }


    $pc_string = '';

  for($i=$flag;$string[$i]!='/';$i++){

    
      if($string[$i]>='0' && $string[$i]<='9'){
        $pc_string.=$string[$i];
      }

    

  }
 


?>
  

  <script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "LocalBusiness",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "<?php echo $cleaner_input; ?>",
      "postalCode":"<?php echo $pc_string; ?>",
      "addressLocality": "<?php echo $address2; ?>",
      "addressCountry": "<?php echo $country2; ?>"
    },
    "name": "<?php echo $name2; ?>",
    "telephone": "<?php echo $phone2 ; ?>",
    "image": "https://img.anwalt.de/<?php echo $img_string; ?>",
    "url": "<?php echo $profile_link2; ?>"
    ,
    "aggregateRating": {
      "@type": "AggregateRating",
      "bestRating": "5",
      "worstRating": "1",
      "ratingValue": "<?php echo $ratings; ?>",
      "ratingCount": "<?php echo $val ; ?>"
    }
    }
  </script>



