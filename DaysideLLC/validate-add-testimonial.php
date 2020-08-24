<?php
function validForm()
{
    return validComment($_POST['comment']) && validName($_POST['name']);
}

function validComment($comment)
{
    return !empty($comment);
}

function validName($name)
{
    return !empty($name);
}

?>