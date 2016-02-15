<h1>Авторизация</h1>

<div class="actions">
    <ul>
        <li><a href="/">Главная</a></li>
        <li><?=$this->Html->link('Добавить статью', '/phones/add');?></li>
        <li><?=$this->Html->link('Список пользователей',['controller' => 'users','action' => 'index']);?></li>
        <li><?=$this->Html->link('Новый пользователь','/users/add');?></li>
   
    </ul>
</div>
<div class="content">
<?php
    echo $this->Form->create($users);
    echo $this->Form->input('username',['label' => 'Логин']);
    echo $this->Form->input('password',['label' => 'Пароль']);
    echo $this->Form->button(__('Войти'));
    echo $this->Form->end();
?>


</div>