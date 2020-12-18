<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Prova</title>
</head>

<body>

	
    <form action="crea_usuari.php" method="post">

        <input type="text" name="nom" id="nom">
        <br>
        <input type="password" name="contrasenya" id="pswd"><br>
        <input type="email" name="email" id="email"><br>
        <input type="submit" value="Envia">

    
    </form>
    
     <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
    	
    <form action="login_usuari.php" method="post">

        <input type="text" name="nom_usuari" id="nom">
        <br>
        <input type="password" name="contrasenya" id="pswd"><br>
      
        <input type="submit" value="Envia">

    
    </form>
    
    <form action="borrar_usuari.php" method="post">
    	
    	<input type="submit" value="Borrar usuari">
    	
    </form>
    
    <form action="crear_experiencia.php" method="post">
    	
    		<label for="titol">titol</label>	
		<input type="text" name='titol'></input>
    		<label for="descripcio">descripcio</label>
    		<input type="textarea" name="descripcio"></input>
    		<label for="imatge">imatge</label>
    		<input type="text" name="imatge" id=""></input>
    		<label for="categoria">categoria</label>
    		<input type="text" name="categoria"></input>
    		<input type="submit" value="Enviar">
    </form>
    
   <form action="experiencia_categoria.php" method="post">
   	
   	<input type="number" name="categoria" id="categoria">
   	<input type="submit" value="Selecciona categories">
   	
   </form>

</body>

</html>
