<?php

//validate first and last name field 
function validName($name)
{
    return !empty(trim($name));
}

//validate service list field
function validService($service)
{
    $validServices = array("none", "Leadership", "Managing Change", "Team Effectiveness", "morale", "Organizational Communication", "Constructive Climate");
    foreach ($validServices as $serarray) {
        if (!in_array($serarray, $validServices)) {
            return false;
        }
    }
    return true;
}

//validate industry list field
function validIndustry($industry)
{
    $validIndustry = array("none", "consumer", "financial", "technology", "media", "communications", "government");
    foreach ($validIndustry as $indarray) {
        if (!in_array($indarray, $validIndustry)) {
            return false;
        }
    }
    return true;
}

//validate how you heard about us
function validHear($hear)
{
    $validHear = array("none", "face", "person", "web", "other");
    foreach ($validHear as $heararray) {
        if (!in_array($heararray, $validHear)) {
            return false;
        }
    }
    return true;
}

//validate consultation preference
function validConsult($consult)
{
    $validConsult = array("One-on-one consulting", "Group Format", "Virtual", "I'm not sure");
    return in_array($consult, $validConsult);
}

//validate email 
function validEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

?>