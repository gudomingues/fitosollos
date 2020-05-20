<?php

include('verificarLogin.php');

?>

<h2><?php echo $_SESSION['usuario']; ?></h2>
<h2><a href="logout.php">Sair</a></h2>