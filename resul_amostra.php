<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Insert Estate</title>
</head>

<body>
<div class="d-flex justify-content-center">
    <h2> Inserir Estado</h2>
</div>

    <?php
    $erroSigla = $erroNome = $sigla = $nome =  "";



    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nome"])) {
            $erroNome = "O campo acima é obrigatorio!";
        } else {
            $nome = $_POST["nome"];
        }
        if (empty($_POST["sigla"])) {
            $erroSigla = "O campo acima é obrigatorio!";
        } else {
            $sigla = $_POST["sigla"];
        }
        if (!empty($nome) && !empty($sigla)) {

            require_once ("configuracao.php");

            $sql = "insert into estado (nome, sigla) values (?, ?)";

            $comando = mysqli_prepare($conexao, $sql);

            mysqli_stmt_bind_param($comando, "ss", $nome, $sigla);

            mysqli_stmt_execute($comando);

            mysqli_stmt_close($comando);
            mysqli_close($conexao);


            header("location: estadolista.php");
        }
    }
    ?>
    <div class="d-flex justify-content-center ">
    <div class="row">
  <div class="">
    <div class="card">
      <div class="card-body">
    <form action="insertes.php" method="POST">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="nome">Digite o nome do ESTADO</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $nome ?>">
                  <p class="text-danger">  <?php echo $erroNome ?></p>
                </div>
                <div class="form-group">
                    <label for="sigla">Digite a sigla do ESTADO</label>
                    <input type="text" class="form-control" id="sigla" name="sigla" value="<?php echo $sigla ?>">
                  <p class="text-danger">  <?php echo $erroSigla ?> </p>
                </div>

                <div class="d-flex justify-content-center">
                <div class="card-group ">
               <div class="card ">
                <button type="submit" class="btn btn-primary  ">Salvar</button><br>
                <a href="listar_opcoes.php" class="btn btn-dark ">Ir Para a Tabela</a>
                </div>
                </div>
                </div>
        </div>
        </div>


    </form>
      </div>
    </div>
  </div>
    </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>