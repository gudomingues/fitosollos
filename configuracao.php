<?php 
    define("SERVIDOR", "localhost");
    define("USUARIO", "root");
    define("SENHA", "bg260615");
    define("BANCO_DADOS", "curso");
    define("PORTA", "3306");

    $conexao = mysqli_connect(SERVIDOR,USUARIO,SENHA,BANCO_DADOS,PORTA);
  
    ?>