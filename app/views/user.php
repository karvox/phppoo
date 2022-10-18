<?php $this->layout('master', ['title' => $title]) ?>

<?php $this->start('css') ?>

    <link rel="stylesheet" href="/css/style.css">

<?php $this->stop() ?>

<h1>User Profile</h1>
<p>Hello, <?php echo $this->e($name) ?></p>