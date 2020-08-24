<?php
function validForm()
{
    return validService('mangement');
}

function validService($service)
{
    return !empty($service);
}

?>