<?php
    //code file
    function add(){
        $x = 10;
        $y = 11;
        $z = 12;
        $i = 100;
        $a = 20;

        return ($x + $y + $z + $i) / $a;
    }

    function substract(){
        return 0;
    }

    function other(){
        return "";
    }

    function end(){
        return TRUE;
    }

    function another(){
        return FALSE;
    }

    function test(){
        return FALSE;
    }

    function test3(){
        return 0;
    }

    function profit() {
        $modal = 0;
        $modal = $modal + 20;
        return $modal;
    }

    function newfeature(){
        $newfeatures = array($this->startservices());
        return $newfeatures;
    }

    function startservices(){
        $services = array('s1', 's2');
        return $services;
    }
?>