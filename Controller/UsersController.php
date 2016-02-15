<?php
    
    namespace App\Controller;
    
    use App\Controller\AppController;
    use Cake\Network\Exception\NotFoundException;
    
    class UsersController extends AppController{
        
        
        public function initialize(){
            parent::initialize();

         $this->loadComponent('Flash'); // Include the FlashComponent
         }
        
        public function index(){
             $users = $this->Users->find('all');
            
             $this->set(compact('users'));
        }
        
        public function add(){
            $users = $this->Users->newEntity();
            if($this->request->is('post')){
                $users = $this->Users->patchEntity($users,$this->request->data);
                if($this->Users->save($users)){
                    $this->Flash->success(__('Пользователь добавлена'));
                    return $this->redirect(['action' => 'index']);
                }
                else{
                    $this->Flash->error(__('Пользователь не добавлена'));
                    }
            }
            $this->set(compact('users'));
        }
        
        public function login(){
            
        }
        
        public function logout(){
            
        }
    }