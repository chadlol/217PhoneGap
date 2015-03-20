<?php
/**
 * Created by PhpStorm.
 * User: Chad
 * Date: 3/18/2015
 * Time: 8:49 PM
 */

$name = $_POST['name'];
$address = $_POST['address'];

$to = "217cis@gmail.com,chadohl@gmail.com,karen.kelly@scc.spokane.edu";
$subject = "Order";
$txt = "Someone's made an order from Hot Mess!\nName: $name\nAddress: $address";

$headers = "From: Hot.Mess@hotmess.com";

mail($to,$subject,$txt,$headers);

header("Location: http://217-11.chadohl.com/index.html");
die();