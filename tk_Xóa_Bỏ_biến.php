<?php
// Php  với object (json)
$ob=array('name'=>'tung','class'=>'cntt');
unset($ob['name']);
print_r($ob);
// arr
$arr=array('name','tung','class','cntt');
unset($arr[0]);
print_r($arr);
