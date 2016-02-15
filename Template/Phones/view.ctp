<p><?= $phone->name;?></p>
<p> <?= $phone->surname;?></p>
<p> <?= h($phone->phone);?></p>
<p> <?= h($phone->mail);?></p>
<p> <?= $phone->created->format(DATE_RFC850);?></p>
<p> <?= $phone->modified->format(DATE_RFC850);?></p>