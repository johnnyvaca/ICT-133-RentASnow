<?php


class uploadSnow
{
    function upload($tmp_name,$name){
        move_uploaded_file($tmp_name,'addSnow/'.$name);
    }

}