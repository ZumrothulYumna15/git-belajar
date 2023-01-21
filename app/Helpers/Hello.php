<?php

if(!function_exists('showHelloWorld')){
    function showHelloWorld(){
        return "Hello World";
    }
}

if(!function_exists('sayHello')){
    function sayHello($nama){
        return "Hello, ".$nama;
    }
}