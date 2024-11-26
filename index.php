<?php
# gampang banget ini Bang
# Lewati aja 3 rondenya mwhehe

/*** -------------- config -------------- ***/
include('./flag.php');
error_reporting(0);
highlight_file('index.php');

/*** -------------- konstantanya bebas kok -------------- ***/
extract($_GET);
foreach($_GET as $key => $value) {
    if(!defined($key)){
        define($key, $value);
    }
}

/*** -------------- Initialize consts -------------- ***/
if(!defined('pass1')) define('pass1', '');
if(!defined('pass2')) define('pass2', '');
if(!defined('pass3')) define('pass3', '');
$flag='';

/*** -------------- Temuin dah flagnya klo bisa -------------- ***/
# ======================================== level 1
if(pass1 !== ''){
    $p = preg_match("/^Round1$/i", pass1);
    if(pass1 !== 'Round1' && $p){
        $flag = $flag.FLAG1;
        echo "Round 1 lewat! : ".FLAG1."<br>";
    }else{
        exit('level 1 DIE! ' . pass1 .'<br>');
    }
}else{
    exit("pass1 undefined<br>");
}

# ======================================== level 2
if(pass2 !== ''){
    echo($_SERVER['REMOTE_ADDR']);
    echo("\n");
    $_SERVER['REMOTE_ADDR'] = 0;
    if (!$_SERVER['REMOTE_ADDR']){
        $flag = $flag.FLAG2;
        echo "Round 2 lewat! : ".FLAG2."<br>";
    }else{
        exit('level 2 DIE! ' . pass2 .'<br>');
    }
}else{
    exit("pass2 undefined<br>");
}

⁄⁄FinalRound;
# ======================================== level 3
if(pass3 !== ''){
    /*** Ronde 3 bonus dehhh ***/
    $flag = $flag.FLAG3;
    echo "Ronde 3 lewat! : ".FLAG3."<br>";
}else{
    exit("pass3 undefined<br>");
}

if(strlen($flag) == 33){
    echo 'Cong!! FLAG : '.$flag;
}