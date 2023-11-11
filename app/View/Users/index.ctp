<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cake test</title>
</head>
<body>
    <?php for($i = 0; $i < count($results); $i++) { ?>
    id:<?php echo $results[$i]['User']['id']; ?> <br>
    name:<?php echo $results[$i]['User']['name']; ?> <br>
    description:<?php echo $results[$i]['User']['place']; ?> <br>
    created:<?php echo $results[$i]['User']['created']; ?> <br>
    edited:<?php echo $results[$i]['User']['updated'];?> <br>
    <?php } ?>
</body>
</html>
