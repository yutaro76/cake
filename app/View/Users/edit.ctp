<?php 
echo $this->Form->create('User', array('url'=>'edit'));
echo $this->Form->input('name');
echo $this->Form->input('place');
echo $this->Form->input('id', array('type'=>'hidden'));
echo $this->Form->end('保存');
