<?PHP
include_once('/lib/endpoints.php'); 
$terminal = new endpoint; //new instance of endpoint class
$terminal -> user_token=''; // your user_token
$terminal -> access_token='';//your access_token
 $test = ($terminal -> get_snapshot(''));
 var_dump($test);

?>
