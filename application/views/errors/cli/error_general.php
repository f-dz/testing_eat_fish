<?php
defined('BASEPATH') OR exit('No direct script access allowed');

echo "\nERROR: ",
	filter_var($heading, FILTER_SANITIZE_STRING),
	"\n\n",
	filter_var($message, FILTER_SANITIZE_STRING),
	"\n\n";