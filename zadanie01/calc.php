<?php
require_once dirname(__FILE__).'/../config.php';

$x = $_REQUEST ['x'];
$y = $_REQUEST ['y'];
$z = $_REQUEST ['z'];

if ( ! (isset($x) && isset($y) && isset($z))) {
	
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

if ( $x == "" || $x<=0 ){
	$messages [] = 'Nie podano kwoty lub kwota jest równa/mniejsza od zera';
}
if ( $y == "" || $y<=0) {
	$messages [] = 'Nie podano lat. ';
}
if ( $z == ""|| $z<=0) {
	$messages [] = 'Nie podano oprocentowania';
}
if (empty( $messages )) {
	if (! is_numeric( $x )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $y )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}	
	
	if (! is_numeric( $z )) {
		$messages [] = 'Trzecia wartość nie jest liczbą całkowitą';
	}
}

if (empty($messages))
{
	$x = intval($x);
	$y = intval($y);
	$z = intval($z);
	
	$rata = ($x/($y*12));
	$rata_procent= $rata * $z/100;
	$rata=$rata_procent +$rata;
	
}
include 'calc_viev.php' ; 
