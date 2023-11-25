<!DOCTYPE html>
<html>
<head>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 300px;
            margin: 0 auto;
        }
        h1 {
            font-size: 24px;
        }
        p {
            font-size: 18px;
            ytfghjkiudgfvdhjijdhg
        }
    </style>
</head>
<body>
<h3>Erik Omar Alba Davila</h3>
    <form method="get">
        <h1>Tabla de Multiplicar</h1>
        <h1>Cambio En Remoto</h1>
        <h1>Cambio en local</h1>
        <label for="num">Número:</label>
        <input type="number" name="num" required>
        <br>
        <label for="hasta">Hasta:</label>
        <input type="number" name="hasta" required>
        <br>
        <input type="submit" value="Generar Tabla">
    </form>

    <?php
        if (isset($_GET['num']) && isset($_GET['hasta'])) {
            echo "<div>";
            echo "<h1>Tabla del ".$_GET['num']."</h1>";
            $n = $_GET['num'];
            for ($x = 1; $x <= $_GET['hasta']; $x++) {
                echo "<p>".$n."x".$x."=".$x*$n."</p>";
            }
            echo "</div>";
        }
    ?>
</body>
</html>
