<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Estado Listar</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
  <script src='main.js'></script>
  <link rel="stylesheet" href="css/consulta_res.css" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
  <?php
  require_once("configuracao.php");

  $sql = "select resultado_analise.RES_ID,amostra.AMO_DESCRICAO,cultura.CUL_DESCRICAO from amostra
  inner join cultura on cultura.CUL_ID = amostra.AMO_CUL_ID
  inner join resultado_analise on amostra.AMO_ID = resultado_analise.REC_ANA_AMO_ID 
  order by resultado_analise.RES_ID desc;";
  $resultado = mysqli_query($conexao, $sql);
  ?>
  <nav class="navbar navbar-expand-lg   naveg static-top mb-5 shadow ">
        <a class="navbar-header" href="painel.php"> <img src="../imagens/fitos.png" width="150" height="50"></a>
        <!--logo-->

        <div class="d-flex flex-row-reverse navbar-collapse " id="navbarText">
            <ul class="nav navbar-nav navbar-right" style="color:cornsilk">

                <li class="nav-item active">
                    <a class="nav-link text-light textTp" href="painel.php">Voltar<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="back">
  <div class="d-flex justify-content-center">
    <h2> Analises</h2>
  </div>
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Codigo</th>
        <th scope="col">Descrição</th>
        <th scope="col">Cultura</th>
        <th scope="col">Opções</th>
    </thead>



    <?php
    while ($linha = mysqli_fetch_array($resultado)) {
      $codigo = $linha["RES_ID"];
      $nome = $linha["AMO_DESCRICAO"];
      $sigla = $linha["CUL_DESCRICAO"]; 
    
      echo "<tr>";
      echo "<td>$codigo</td>";
      echo "<td>$nome</td>";
      echo " <td>$sigla</td>";
      echo "<td>      <div class='d-flex flex-row bd-highlight '>
            <a  class='btn btn-primary' href='resul_amostra.php?codigo=$codigo' role='button'>Vizualizar</a>
            <a  class='btn btn-danger' href='#' role='button'>Excluir</a>
</div></td>";
      echo "</tr>";
    }
    mysqli_free_result($resultado);
    mysqli_close($conexao);
      
    
    ?>


  </table>
  <div class="d-flex justify-content-center">
    <div class="card-group">
      <div class="card">
        <a href="painel.php" class="btn btn-dark rounded  ">Inicio</a>
      </div>
    </div>
  </div>
    </div>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>