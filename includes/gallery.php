<?php

$types_ok = array(
	'image/jpeg',
	'image/png',
	'image/gif'
	);
$arr_eceptions = array(
	'.',
	'..',
	'_tumbs'
	);
$arr_li = array();

function create_gallery($path)
{
	liste_repertoire($path);
	// output();
}

function liste_repertoires()
{
	global $arr_eceptions;
}

function output($path)
{

}