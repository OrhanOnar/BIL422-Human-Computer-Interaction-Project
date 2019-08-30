<?php 
date_default_timezone_set('Europe/Istanbul');
if(!function_exists('humanTiming')){
  function humanTiming($time){
    $time = time() - $time; // to get the time since that moment

    $tokens = array (
        31536000 => 'yıl',
        2592000 => 'ay',
        604800 => 'hafta',
        86400 => 'gün',
        3600 => 'saat',
        60 => 'dakika',
        1 => 'saniye'
    );

  foreach ($tokens as $unit => $text) {
      if ($time < $unit) continue;
      $numberOfUnits = floor($time / $unit);
      return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'':'').' önce';
   }
  }
}

?>