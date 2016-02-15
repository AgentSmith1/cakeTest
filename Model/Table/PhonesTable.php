<?php 
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class PhonesTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }
    
    public function validationDefault(Validator $validator){
     $validator
            ->add('name', 'notEmpty', [
                'rule' => 'notEmpty',
                'message' => __('Поле не должно быть пустым')
            ])
            ->add('surname', 'notEmpty', [
                'rule' => 'notEmpty',
                'message' => __('Поле не должно быть пустым')
            ])
            ->add('phone', 'notEmpty', [
                'rule' => 'notEmpty',
                'message' => __('Поле не должно быть пустым')
            ])
             ->add('mail', 'notEmpty', [
                'rule' => 'notEmpty',
                'message' => __('Поле не должно быть пустым')
            ]);
           /* ->add('name',[
                'notEmpty' =>[
                'rule' => 'notEmpty',
                'message' => 'Поле не должно быть пустым'
            
                ]
            ]);*/
            
           
            
         
         return $validator;
    }
    
}