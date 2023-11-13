<?php 
    echo $this->Form->create('User', array('url'=>'add'));
    echo $this->Form->input('name');
    echo $this->Form->input('place');
    echo $this->Form->end('保存');
?>

    