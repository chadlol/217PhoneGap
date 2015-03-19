<?php
/**
 * Created by PhpStorm.
 * User: Chad
 * Date: 3/18/2015
 * Time: 7:16 PM
 */

$form = <<<EOD

<form method='post' action='order_confirm.php?'>

    Name<br/>
    <input type='text' name='name' placeholder='Name' required/><br/>
    Address<br/>
    <input type='address' name='address' placeholder='Address' required/><br/>
    <input type='submit' name='submit' value='Submit Order' id='submitOrder'>
</form>
EOD;

echo json_encode( $form );