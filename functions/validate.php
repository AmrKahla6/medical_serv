<?php

function chechEmpty($value)
{

    if(empty($value))
    {
        return false;
    }
    return true;

}

function validEmail($email)
{
    if(!filter_var($email , FILTER_VALIDATE_EMAIL))
    {
        return false;
    } 

    return true;
}