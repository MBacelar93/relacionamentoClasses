<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once 'Lutador.php';
        require_once 'Luta.php';
       $l = array();

        $l[0] = new Lutador('Matheus','Brazil','31','1.75', 80.9, 11,2,2);
        $l[1] = new Lutador('Jose','França','31','1.75', 82, 11,2,2);
       

       
        
        $luta1 = new Luta();
        $luta1->marcarLuta($l[0], $l[1]);
        $luta1->lutar();
    ?>
</body>
</html>