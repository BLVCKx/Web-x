<?php


class Client
{
   private  $cin;
   private  $first_name;
   private  $last_name;
   private  $Email;
   private  $phone;
   private  $password;
  


   function __construct($cin ,$first_name,  $last_name, $Email, $phone, $password)
   { 
    $this->cin=$cin;
    $this->first_name=$first_name;
    $this->last_name=$last_name;
    $this->email=$email;
    $this->phone=$phone;
    $this->password=$password;
}


function getcin()
{return $this->cin;}
function getfirst_name()
{return $this->first_name;}
function getlast_name()
{return $this->last_name;}
function getemail()
{return $this->email;}
function getPhone()
{return $this->Phone;}
function getpassword()
{return $this->password;}




function setcin($cin)
{return $this->cin=$cin;}
function setfirst_name($first_name)
{return $this->first_name=$first_name;}
function setlast_name($last_name)
{return $this->last_name=$last_name;}
function setemail($email)
{return $this->email=$email;}
function setphone($phone)
{return $this->phone=$phone;}
function setpassword($password)
{return $this->password=$password;}













}











?>