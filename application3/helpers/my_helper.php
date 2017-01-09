<?php
function get_tgl($tgl){
	date_default_timezone_set( 'Asia/Jakarta' );
	preg_match( '/([\d]{9})/', $tgl, $matches ); // gets just the first 9 digits in that string

	$tgl = date( 'Y-m-d', $matches[0]);

	return $tgl;
}

function get_tgl2($tgl){
	date_default_timezone_set( 'Asia/Jakarta' );
	preg_match( '/([\d]{9})/', $tgl, $matches ); // gets just the first 9 digits in that string

	$tgl = date( 'd-m-Y', $matches[0]);

	return $tgl;
}
?>