<?php

    function formatDate($date=""){
        //retorna formato año-mes-día        
            list($dia, $mes, $year) = explode('-',$date);
            $val = $year."-".$mes."-".$dia;  
            return $val;           
    }

