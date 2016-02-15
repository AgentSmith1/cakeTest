<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{

    public function validationDefault(Validator $validator)
    {
        return $validator
         
            ->add('role', 'inList', [
                'rule' => ['inList', ['admin', 'user']],
                'message' => 'Выбирете роль'
            ])
             ->add('password', 'notEmpty', [
                'rule' => 'notEmpty',
                'message' => __('Поле не должно быть пустым')
            ])
            ->add('username', 'notEmpty', [
                'rule' => 'notEmpty',
                'message' => __('Поле не должно быть пустым')
            ]);
    }

}