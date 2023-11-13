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

    public function view($id = null) {
        $this->set('user', $this->User->read(null, $id));
    }

    public function edit($id = null) {
        $this->User->id = $id;
        if(empty($this->data)) {
            // データが空だったとき＝更新ではなく更新するページに初めてアクセスした時の操作
            $this->data = $this->User->read(null, $id); // nullは何も指定せず全て取得という意味
            $this->set('id', $id);
        } else {
            // ページにすでにデータがあるとき＝更新するとき
            if($this->User->save($this->data)) {
                $this->Flash->success('更新しました');
                $this->redirect(array('action'=>'index'));
            }
        }
    }

    public function delete($id = null){
        $this->User->delete($id);
        $this->Flash->error('削除しました');
        $this->redirect(array('action'=>'index'));
    }
}