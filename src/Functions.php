<?php

/*
|--------------------------------------------------------------------------
| Global Functions for Alibaba Cloud
|--------------------------------------------------------------------------
|
| Some common global functions are defined here.
| This file will be automatically loaded.
|
*/
if (!function_exists('dd')) {
	/**
	 * @param mixed ...$parameters
	 */
	function dd(...$parameters) {
		dump(...$parameters);
		exit;
	}
}

if (!function_exists('dumpTitle')) {
	/**
	 * @param $title
	 */
	function dumpTitle($title) {

		\dump('-------------------------------------------------------------');
		\dump($title);
		\dump('-------------------------------------------------------------');
	}
}