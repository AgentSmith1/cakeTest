<?php

    namespace App\Controller;
    
    use App\Controller\AppController;
    use Cake\Network\Exception\NotFoundException;
    
    class PhonesController extends AppController{
      
         public function initialize(){
            parent::initialize();

         $this->loadComponent('Flash'); // Include the FlashComponent
         }
      
        public function index(){
            $phones = $this->Phones->find('all');
            
             $this->set(compact('phones'));
        }
        
        public function view($id = null){
           
            if(!$id){
                throw new NotFoundException(__('Не передан айди'));
            }
            
            $phone = $this->Phones->findById($id)->first();
           
            if(empty($phone)){
                throw new NotFoundException(__('Такой статьи нет'));
            }
            $this->set(compact('phone'));
        }
        
        public function add(){
            $entry = $this->Phones->newEntity();
            if($this->request->is('post')){
                $entry = $this->Phones->patchEntity($entry,$this->request->data);
                if($this->Phones->save($entry)){
                    $this->Flash->success(__('Статья добавлена'));
                    return $this->redirect(['action' => 'index']);
                }
                else{
                    $this->Flash->error(__('Статья не добавлена'));
                    }
            }
            $this->set(compact('entry'));
        }
        
        public function delete($id = null){
             if(!$id){
                throw new NotFoundException(__('Не передан айди'));
            }
            
            $this->request->allowMethod(['post','delete']);
            
            $entry = $this->Phones->get($id);
            if($this->Phones->delete($entry)){
                 $this->Flash->success(__('Статьия с номером: {0} была удалена.', h($id)));
            }
            else{
                $this->Flash->error(__('Статьия с номером: {0} не была удалена.', h($id)));
            }
                return $this->redirect(['action' => 'index']);
        }
        
        public function edit($id = null){
            if(!$id){
                throw new NotFoundException(__('Не передан айди'));
            }
            
            $entry = $this->Phones->findById($id)->first();
           
            if(empty($entry)){
                throw new NotFoundException(__('Такой статьи нет'));
            }
            if($this->request->is(['post','put'])){
                $this->Phones->patchEntity($entry,$this->request->data);
                if($this->Phones->save($entry)){
                    $this->Flash->success(__('Статьия с номером: {0} была отредактированна.', h($id)));
                      return $this->redirect(['action' => 'index']);
                }
                else{
                    $this->Flash->error(__('Статьия с номером: {0} не была отредактированна.', h($id)));
                }
                
            }
            $this->set(compact('entry'));
            
            
        }
            
           
}