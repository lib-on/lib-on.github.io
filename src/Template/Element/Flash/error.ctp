<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="alert alert-danger" onclick="this.classList.add('hidden');"><i class="fa fa-times" aria-hidden="true"></i>
<?= $message ?></div>
