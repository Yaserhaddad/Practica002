<!-- 
    BOCETO ENUNCIADO

	    página inicial= un formulario( campo, botón("Incrementar"); -> form (text, number)
	
	    campo = 0 (puedo modificar) -> input(number)
	
	    botónIncremento -> input(submit)
		     (incremento +1 el valor que sea) -> if(botonIncremento){contador= numberConta +1}

	    botonInicializa -> input(submit)
             (contador = 0) -> if(botonInicializa){contador= 0}

     -------------------------------------------  
    ****TODO LO HE HECHO EN EL MISMO SCRIPT****
	    Union mediante un if(isset($_REQUEST["valor"]) {... } -> Al haberlo hecho en el mismo script
        no he tenido la necesidad de usar este metodo
 -->

<?php

    // Colocamos el isset para evitar el error de incremento y borrar indice no definido. (TRUE)

    if(isset($_POST["incremento"]) ) {
        $conta = $_POST["conta"] + 1;}

    else if (isset($_POST["borrar"])){
        //Borramos los datos
        $conta = 0;
    }
    else{
        $conta =0;
    }
?>
<html>
<head>
    <title>Formulario que incrementa</title>
</head>
<body>
    <form name= "formulario" action="<?=$_SERVER["PHP_SELF"]?>" method="post">
        <input name="conta" type="number" value="<?=$conta?>">
        <input name = "incremento" type="submit" value="Incrementar">
        <input name = "borrar" type="submit" value="Inicializar">
    </form>
</body>
</html>
