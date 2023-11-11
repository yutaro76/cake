<?php for($i = 0; $i < count($results); $i++) { ?>
id:<?php echo $results[$i]['User']['id']; ?> <br>
name:<?php echo $results[$i]['User']['name']; ?> <br>
place:<?php echo $results[$i]['User']['place']; ?> <br>
created:<?php echo $results[$i]['User']['created']; ?> <br>
updated:<?php echo $results[$i]['User']['updated'];?> <br>
<?php } ?>

