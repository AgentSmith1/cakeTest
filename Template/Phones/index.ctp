
<h1>Телефонная книга</h1>


<div class="actions">
    <ul>
        <li><a href="/">Главная</a></li>
        <li><?=$this->Html->link('Добавить статью', '/phones/add');?></li>
   
    </ul>
</div>

<div class="content">
<table>
    <tr>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Телефон</th>
        <th>E-mail</th>
        <th>Created</th>
        <th>Modified</th>
        <th>Действия</th>
     
    </tr>

    <!-- Here is where we iterate through our $articles query object, printing out article info -->

    <?php foreach ($phones as $phone): ?>
    <tr>
        <td><?= $phone->name;?></td>
        <td><?= $this->Html->link($phone->surname, ['action' => 'view', $phone->id]);?></td>
        <td><?= h($phone->phone);?></td>
        <td><?= h($phone->mail);?></td>
        <td><?= $phone->created->format(DATE_RFC850);?></td>
        <td><?= $phone->modified->format(DATE_RFC850);?></td>
        <td><?= $this->Html->link('Редактировать',['action' => 'edit',$phone->id]);?>|<?= $this->Form->postLink('Удалить',['action' =>'delete',$phone->id],['confirm' => 'Действительно удалить?']);?></td>
        <td></td>
       
    </tr>
    <?php endforeach; ?>
</table>
</div>