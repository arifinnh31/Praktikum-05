<?php
require_once('./lib/db_login.php');
$name = $_GET['name'];
$address = $_GET['address'];
$city = $_GET['city'];

//Asign a query
$query = " INSERT INTO customers (name, address, city) VALUES('".$name."', '". $address."', '".$city."') ";
echo $query;

$result = $db->query( $query );

if ( !$result) {
    echo '<div class="alert alert-danger alert-dismissible">'.
    '<strong>Error!</strong> Could not query the database<br>'.
    $db->error. '<br>query = '.$query.
    '</div>';
} else {
    echo '<div class="alert alert-success alert-dismissible">'.
    '<strong>Success!</strong> Data has been added.<br>'.
    'Name: '.$_GET['name'].'<br>'.
    'Address: '.$_GET['address'].'<br>'.
    'City: '.$_GET['city'].'<br>'.
    '</div>';


}
//close db connection
$db->close();