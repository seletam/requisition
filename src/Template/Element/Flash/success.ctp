<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="container-fluid">
	<div class="col-2"></div>
	<div class="col-10">
		<div class="alert alert-success" onclick="this.classList.add('hidden')"><?= $message ?></div>
	</div>
</div>