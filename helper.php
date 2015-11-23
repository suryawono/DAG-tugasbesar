<?php

class Helper{
    
    function element($filename,$ext="php"){
        require_once $filename.".$ext";
    }
    
}