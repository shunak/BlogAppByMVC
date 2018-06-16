<?php $this->setLayoutVar('title', $user['user_name'])?>

<h2><?= $this->escape($user['user_name']);?></h2>

<div id="statuses">
    <?php foreach ($statuses as $statuses):?> 
    <?= $this->render('status/status', array('status'=>$status));?>
    <?php endforeach;?>
</div>

