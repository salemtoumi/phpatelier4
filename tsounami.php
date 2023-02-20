<!DOCTYPE html>

<html>
<head>
<title>pyramide </title>

</head>
<body>
<?php
    for ($i=0; $i<=$_POST["nombre"]; $i++)
    {
        for($j=0; $j<$i; $j++){
            echo  "*";
        }
        echo "<br>";
    }
?>
</body>
</html>
