<h1>Добавление записи</h1>

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
    echo $this->Form->create($entry);
    echo $this->Form->input('name',['label' => 'Имя']);
    echo $this->Form->input('surname',['label' => 'Фамилия']);
    echo $this->Form->input('phone',['label' => 'Телефон']);
    echo $this->Form->input('mail',['label' => 'Електронка']);
    echo $this->Form->button(__('Добавить'));
    echo $this->Form->end();
?>
</div>