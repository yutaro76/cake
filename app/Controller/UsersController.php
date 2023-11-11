<?php 

class UsersController extends AppController
{
    function beforeFilter() { // 全てのアクションの前に実行するもの
        parent::beforeFilter(); // 親要素のbeforeを実行
    }

    public $components = array('Flash');

    public function index()
    {
        $results = $this->User->find('all');
        $this->set('results', $results);
    }

    public function add()
    {
        if($this->request->is('post')){
            $this->User->create();
            if($this->User->save($this->request->data)){
                $this->Flash->success('追加しました');
                $this->redirect(array('action'=>'index'));
             } else {
                $this->Flash->success('失敗しました');
             }

        }
    }
}