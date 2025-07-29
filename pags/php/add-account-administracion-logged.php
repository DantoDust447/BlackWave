<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/style.css">
    <title>administracion</title>
</head>
<body>
    <header></header>
    	    <div class="empty-space"></div>
    <form action="objetos/objetoPuesto.php" class="login-form" method="post">
        <input type="number" placeholder="ID"  id="puesto_id" name="puesto_id" required>
        <input type="text" placeholder="Puesto" id="puesto_nombre"  name="puesto_nombre" required>
        <div class="menu">
            <button type="submit" class="submit-button">Login</button>
        </div>
        
    </form>
</body>
</html>