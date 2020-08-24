<?php
function validForm(){
    return validBio('accomplishment') && validKey('key');
}

function validBio($accomplishment){
    return !empty($accomplishment);
}
function validKey($key){
    return !empty($key);
}