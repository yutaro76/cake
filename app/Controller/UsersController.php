<?php 

class UsersController extends AppController
{
    function beforeFilter() { // 全てのアクションの前に実行するもの
        parent::beforeFilter(); // 親要素のbeforeを実行
    }

    public function index()
    {
        $results = $this->User->find('all');
        $this->set('results', $results);
    }
}