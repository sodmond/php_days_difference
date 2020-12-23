function daysDiff($today, $past){
  $time_diff = $today - $past;
  $days_diff = $time_diff / (3600 * 24);
  echo "Days difference is " . floor($days_diff);
  echo "<br>Weeks difference is ". floor($days_diff/7);
}

$today = strtotime(date("Y-m-d"));
$past = strtotime("2020-11-18");

daysDiff($today, $past);
