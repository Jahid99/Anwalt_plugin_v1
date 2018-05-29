
<?php


function curl_download_all_reviews($Url){

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
	$total_reviews = 0;

	$string = curl_download_all_reviews($profile_link);

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

	$reviews = $val ;
	$total_reviews += (int)$reviews;

	$string = curl_download_all_reviews($profile_link2);

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

	$reviews = $val ;
	$total_reviews += (int)$reviews;

	$string = curl_download_all_reviews($profile_link3);
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



	$reviews = $val ;
	$total_reviews += (int)$reviews;

	$string = curl_download_all_reviews($profile_link4);
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

	$reviews = $val ;
	$total_reviews += (int)$reviews;


	//echo $total_reviews;


?>
 <p class="hnpsnippet1"><?php echo  $val=$total_reviews; ?> Bewertungen auf <a href="<?php echo $profile_link5; ?>">Anwalt.de</a></p>

<?php


$total_rating = 0;
$total_reviews = 0;

function curl_download_all_rating($Url){

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

$string = curl_download_all_rating($profile_link);
$rating = $string[101].'.'.$string[103];
$total_rating += (float)($rating);

$string = curl_download_all_rating($profile_link2);
$rating = $string[101].'.'.$string[103];
$total_rating += (float)($rating);

$string = curl_download_all_rating($profile_link3);
$rating = $string[101].'.'.$string[103];
$total_rating += (float)($rating);

$string = curl_download_all_rating($profile_link4);
$rating = $string[101].'.'.$string[103];
$total_rating += (float)($rating);

//echo $total_rating;

?>

<?php 

$i = 0;

if(isset($profile_link)){
	$i++;
}


if(isset($profile_link2)){
	$i++;
}


if(isset($profile_link3)){
	$i++;
}


if(isset($profile_link4)){
	$i++;
}

$total_rating=($total_rating/$i) ;

$total_rating = (string) $total_rating;

//echo strlen($total_rating);

if(strlen($total_rating)==1){
  $total_rating.='.0';
}

 ?>

<p class="hnpsnippet2"> <?php echo $total_rating; ?> von 5 Sternen </p>





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


  echo $string = curl_download_image_link($profile_link);

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


  $string = curl_download_street_address($profile_link);
    
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


  $string = curl_download_postal_code($profile_link);
    
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
      "addressLocality": "<?php echo $address5; ?>",
      "addressCountry": "<?php echo $country5; ?>"
    },
    "name": "<?php echo $name5; ?>",
    "telephone": "<?php echo $phone5 ; ?>",
    "image": "https://img.anwalt.de/<?php echo $img_string; ?>",
    "url": "<?php echo $profile_link; ?>"
    ,
    "aggregateRating": {
      "@type": "AggregateRating",
      "bestRating": "5",
      "worstRating": "1",
      "ratingValue": "<?php echo $total_rating; ?>",
      "ratingCount": "<?php echo $val ; ?>"
    }
    }
  </script>


