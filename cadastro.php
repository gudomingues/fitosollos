<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Cadastro</title>
</head>

<body>
    <?php
    $usuario = $email = $senha = $erroA = $erroB = $erroC = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["usuario"])) {
            $erroA = "O campo acima é obrigatorio!";
        } else {
            $usuario = $_POST["usuario"];
        }
        if (empty($_POST["email"])) {
            $erroB = "O campo acima é obrigatorio!";
        } else {
            $email = $_POST["email"];
        }
        if (empty($_POST["senha"])) {
            $erroC = "O campo acima é obrigatorio!";
        } else {
            $senha = $_POST["senha"];
        }
        if (!empty($usuario) && !empty($email) && !empty($senha)) {

            require_once("configuracao.php");

            $sql = "insert into cadastro (CAD_USU,CAD_SENHA, CAD_EMAIL) values (? ,? ,? )";

            $comando = mysqli_prepare($conexao, $sql);

            mysqli_stmt_bind_param($comando, "sss", $usuario, $senha, $email);

            mysqli_stmt_execute($comando);

            mysqli_stmt_close($comando);
            mysqli_close($conexao);
            echo "<script language='javascript' type='text/javascript'>
          alert('Usuário cadastrado com sucesso!');window.location.
          href='loginIndex.php'</script>";
        }
    }

    ?>



    <form action="cadastro.php" method="POST">

        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand " href="janelasFit.php">FITO SOLLOS - Cadastrar Novo Usuario</a>
        </nav>

        <div class="col-sm-10  ">
            <div class="card col-sm-10 offset-md-2  ">
                <div class="card-body ">

                    <div class="form-group row">
                        <label for="usuario" class="col-3 col-form-label">Insira seu Login </label>
                        <div class="col-10">
                            <input class="form-control" type="text" id="usuario" name="usuario" value="<?php echo $usuario ?>">
                            <p class="text-danger"> <?php echo $erroA ?></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-3 col-form-label">Insira seu Email </label>
                        <div class="col-10">
                            <input class="form-control" type="email" id="email" name="email" value="<?php echo $email ?>">
                            <p class="text-danger"> <?php echo $erroB ?></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="senha" class="col-3 col-form-label">Insira sua senha </label>
                        <div class="col-10">
                            <input class="form-control" type="password" id="senha" name="senha" value="<?php echo $senha ?>">
                            <p class="text-danger"> <?php echo $erroC ?></p>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success btn-lg  ">Cadastrar</button>
                    <a class="btn btn-danger btn-lg" href="painel.php" role="button">Cancelar</a>
    </form>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>