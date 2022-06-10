<?php

$showMessage = function (string $message, string $class = 'success') {
	echo "
	<div class='alert alert-{$class}'>
		<p>{$message}</p>
	</div>
	";
};

return $showMessage;
