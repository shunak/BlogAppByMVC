<?php $this->setLayoutVar('title','ログイン')?>

<h2>ログイン</h2>

<p>
    <a href="<?php echo $base_url;?>/account/signup">新規ユーザ登録</a>
</p>


<form action="<?= $base_url;?>/account/authenticate" method="post">
    <input type="hidden" name="_token" value="<?= $this->escape($_token);?>"/>

    <?php if(isset($errors)&&count($errors)>0):?>
    <?= $this->render('errors',array('errors'=>$errors)); ?>
    <?php endif;?>


    <?= $this->render('account/inputs', array('user_name'=>$user_name, 'password'=>$password,)) ;?>

    <p>
        <input type="submit" value="ログイン">
    </p>

</form>









