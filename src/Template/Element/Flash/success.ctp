<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="alert alert-success" onclick="this.classList.add('hidden')"><i class="fa fa-check-square" aria-hidden="true"></i>
<?= $message ?></div>
