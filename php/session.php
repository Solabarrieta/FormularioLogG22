<?php
global $user;
echo "este es el usuario: $user";
function postData($username){
    $user=$username;
    return $user;
}
