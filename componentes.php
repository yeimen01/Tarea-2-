<?php

function asgInput($nombre, $label, $opst=[], $value=''){

    $placeholder= '';
    $type='text';
    $required='';
    $class= 'form-control'; 


    foreach($opst as $k=>$j){
        $$k = $j;
    }

    return "<div class='form-group'> 
        <label>{$label}: </label>
        <input class= '{$class}' placeholder='{$placeholder}' type='{$type}' {$required} name='{$nombre}'
    
    </div>";
}

function asgTextArea($nombre, $label, $opst=[]){

    $placeholder= '';
    $type='text';
    $required='';
    $class= 'form-control'; 


    foreach($opst as $k=>$j){
        $$k = $j;
    }

    return "<div class='form-group'>
        <label>{$label}: </label>
        <textarea class='{$class}' placeholder='{$placeholder}' type='{$type}' {$required} name='{$nombre}'></textarea>
    
    </div>";
    
}
