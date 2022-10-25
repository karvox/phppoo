<?php $this->layout('master', ['title' => $title]) ?>

<h1>User</h1>

<form action="/user/update/12" method="post">
    
    <input type="text" name="firestName" value="Judson">
    <input type="text" name="lastName" value="Borges">
    <input type="email" name="email" value="judsonborges@email.com">
    <input type="password" name="password" value="123456789">

    <button type="submit">Atualizar</button>
</form>