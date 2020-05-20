<!DOCTYPE html>
<html>


<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Pagina Inicial</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link rel="stylesheet" href="painel.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<?php include('verificarLogin.php'); ?>

    <!-- Custom nvbar color -->
    <nav class="navbar navbar-expand-lg  fixed-top static-top mb-5 shadow naveg ">
        <a class="navbar-header" href="#">
            <img src="fitos.png" width="150" height="50"></a>
        <!--logo-->

        <div class="d-flex flex-row-reverse navbar-collapse p-2" id="navbarText">
            <ul class="nav navbar-nav navbar-right" style="color:cornsilk">

                <li class="nav-item active">
                    <a class="nav-link textTp text-light" href="logout.php">Sair<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- fim nav -->


    <!-- cards-->
 
  
    <div class="divTp p-6" >
  
  

    <div class="capa float-center">
        <div class="row align-items-center justify-content-center position-relative" style="top:35%;">
            <h1 class="display-1 font-weight-bold" style="font-size:4.5rem;  color:#fff">Bem Vindo <?php echo $_SESSION['usuario']; ?></h1>
        </div>
        <div class="row align-items-center justify-content-center position-relative" style="top:70%;">
            <a href="laboratorio.php" class="col-2  m-3  btn btn-success" style="font-size:1.5rem;">Laboratórios</a>
            <a href="proprietario.php" class="col-2 m-1 position-relative btn btn-success" style="font-weight: 500;">Cadastrar Proprietarios</a>
            <a href="#" class="col-2 m-3  position-relative btn btn-success" style="font-weight: 500;">Responsaveis Tecnicos</a>
        </div>
        <div class="row align-items-center justify-content-center position-relative" style="top:80%;">
        <a href="#" class="col-2 m-3  position-relative btn btn-success" style="font-weight: 500;">Amostras</a>
        <a href="#" class="col-2 m-3  position-relative btn btn-success" style="font-weight: 500;">Resultados</a>
        <a href="cadastro.php" class="col-2 m-3  position-relative btn btn-success" style="font-weight: 500;">Cadastro Usuario</a>
    </div>
    </div>
    
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>