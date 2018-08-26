<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="container-fluid top-header-inner">
	<div class="col-2"></div>
	<div class="col-10">
		<div class="alert alert-danger" onclick="this.classList.add('hidden')"><strong><p class="text-center"><?= $message ?></p></strong></div>
	</div>
</div>