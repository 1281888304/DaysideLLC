<?php
function validForm(){
    return validService('service') ;
}

function validService($service){
    return !empty($service);
}