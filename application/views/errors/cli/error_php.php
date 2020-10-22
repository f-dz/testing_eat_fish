<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

A PHP Error was encountered

Severity:    <?= filter_var($severity, FILTER_SANITIZE_STRING), "\n"; ?>
Message:     <?= filter_var($message, FILTER_SANITIZE_STRING), "\n"; ?>
Filename:    <?= filter_var($filepath, FILTER_SANITIZE_STRING), "\n"; ?>
Line Number: <?= filter_var($line, FILTER_SANITIZE_STRING); ?>

<?php if (defined('SHOW_DEBUG_BACKTRACE') && SHOW_DEBUG_BACKTRACE === TRUE): ?>

Backtrace:
<?php	foreach (debug_backtrace() as $error): ?>
<?php		if (isset($error['file']) && strpos($error['file'], realpath(BASEPATH)) !== 0): ?>
	File: <?= filter_var($error['file'], FILTER_SANITIZE_STRING), "\n"; ?>
	Line: <?= filter_var($error['line'], FILTER_SANITIZE_STRING), "\n"; ?>
	Function: <?= filter_var($error['function'], FILTER_SANITIZE_STRING), "\n\n"; ?>
<?php		endif ?>
<?php	endforeach ?>

<?php endif ?>
