<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div style="border:1px solid #900;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: <?= filter_var($severity, FILTER_SANITIZE_STRING); ?></p>
<p>Message:  <?= filter_var($message, FILTER_SANITIZE_STRING); ?></p>
<p>Filename: <?= filter_var($filepath, FILTER_SANITIZE_STRING); ?></p>
<p>Line Number: <?= filter_var($line, FILTER_SANITIZE_STRING); ?></p>

<?php if (defined('SHOW_DEBUG_BACKTRACE') && SHOW_DEBUG_BACKTRACE === TRUE): ?>

	<p>Backtrace:</p>
	<?php foreach (debug_backtrace() as $error): ?>

		<?php if (isset($error['file']) && strpos($error['file'], realpath(BASEPATH)) !== 0): ?>

			<p style="margin-left:10px">
			File: <?= filter_var($error['file'], FILTER_SANITIZE_STRING) ?><br />
			Line: <?= filter_var($error['line'], FILTER_SANITIZE_STRING) ?><br />
			Function: <?= filter_var($error['function'], FILTER_SANITIZE_STRING) ?>
			</p>

		<?php endif ?>

	<?php endforeach ?>

<?php endif ?>

</div>