<h1>Список пользователей</h1>


<div class="actions">
    <ul>
        <li><a href="/">Главная</a></li>
        <li><?=$this->Html->link('Добавить статью', '/phones/add');?></li>
   
    </ul>
</div>

<div class="content">
<table>
    <tr>
        <th>ID</th>
        <th>Логин</th>
        <th>Роль</th>
      
     
    </tr>

    <!-- Here is where we iterate through our $articles query object, printing out article info -->

    <?php foreach ($users as $user): ?>
    <tr>
        <td><?= $user->id;?></td>
        <td><?= $user->username;?></td>
        <td><?= $user->role;?></td>
     
    </tr>
    <?php endforeach; ?>
</table>
</div>