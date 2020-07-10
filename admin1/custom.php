
  <?php 
  date_default_timezone_set('Africa/Lagos');
  //$today =date("F d, Y h:i:s A") . "<br>";
          //      echo $today; 

			


// Note the lack of time zone specified with this timestamp.
    $today = new DateTime('');
   // echo $nowish->format('Y-m-d H:i:s'); // 2011-04-23 21:44:00
// Let's pretend we're on the US west coast.  
// This will be PDT right now, UTC-7
   // $la = new DateTimeZone('');
// Update the DateTime's timezone...
    //$nowish->setTimeZone($la);
// and show the result
	echo $today->format('H:i:s'); // 2011-04-23 14:44:00

	$date = new DateTime();
$timeZone = $date->getTimezone();
//echo $timeZone->getName();
	?>