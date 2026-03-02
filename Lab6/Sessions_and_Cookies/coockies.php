<?php
// get cookies:
echo "Cookies received from the client:<br/>";
foreach ($_COOKIE as $key => $value) {    
    echo "key=$key, value=$value<br/>";
}
