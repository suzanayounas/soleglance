<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;



function uploadImage($file, $dir)
{
    $filename = date('YmdHi') . $file->getClientOriginalName();
    $file->move(public_path('public' . '/' . $dir), $filename);
    return $filename;

}

function showImage($image, $dir)
{
     if (File::exists(public_path('public/' . $dir . '/' . $image)) && !empty($image)) {
        return asset('public/' . $dir . '/' . $image);
    } else {
         return '../assets/images/user/1.jpg';

    }

}



function currentDate()
{
    return date('d-M-Y');
}

function currentDatePicker()
{
    return date('m/d/Y');
}

function currentDateInput()
{
    return date('mm/dd/yyyy');
}

function currentDateInsert()
{
    return date('Y-m-d');
}

function currentDateTimeInsert()
{
    return date('Y-m-d h:i:s');
}


function currentYear()
{
    return date('Y');
}

function currentMonthStart()
{
    return date('Y-m-01');
}

function currentMonthEnd()
{
    return date('Y-m-t');
}

function currentMonth()
{
    return date('m');
}

function dateInsert($obj)
{
    return date('Y-m-d', strtotime($obj));
}

function monthInsert($obj)
{
    return date('m', strtotime($obj));
}

function yearInsert($obj)
{
    return date('Y', strtotime($obj));
}

function showDatePicker($obj)
{
    return date('d/m/Y', strtotime($obj));
}

function showDate($obj)
{
    return date('d-M-Y', strtotime($obj));
}

function showDateTime($obj)
{
    return date('d-M-Y h:i:s', strtotime($obj));
}


function ShowFullName($firstName, $lastName)
{
    return $firstName . ' ' . $lastName;
}




