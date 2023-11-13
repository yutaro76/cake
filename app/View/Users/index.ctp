<table>
<tr>
    <th>id</th>
    <th>name</th>
    <th>place</th>
    <th>created</th>
    <th>updated</th>
    <th>action</th>
</tr>
<?php for($i = 0; $i < count($results); $i++) { ?>
<tr>
    <td><?php echo $results[$i]['User']['id']; ?> </td>
    <td><?php echo $results[$i]['User']['name']; ?> </td>
    <td><?php echo $results[$i]['User']['place']; ?> </td>
    <td><?php echo $results[$i]['User']['created']; ?> </td>
    <td><?php echo $results[$i]['User']['updated'];?> </td>
    <td><?php echo $this->Html->link('Edit', array('action'=>'edit', $results[$i]['User']['id'])); ?>
        <?php echo $this->Html->link('Delete', array('action'=>'delete', $results[$i]['User']['id'])); ?>
</tr>
<?php } ?>
</table>

