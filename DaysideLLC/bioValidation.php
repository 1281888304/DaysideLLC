<?php
function validForm(){
    return validBio('bio') ;
}

function validBio($bio){
    return !empty($bio);
}