<?php include('verificarLogin.php'); ?>
    <?php

    $idCultC = 1;
    $horaC = "1998-10-12 15:47:00";
    $horaS = "1998-10-12 15:47:00";
    $amostraF = 1;
    $amostraC = 1;
    $desc = "nada";
    $peso  = 8;
    $cadTipo  = 1;
    $cadPropC  = 1;
    $cadRespC  = 1;
    $usuarioC  = 1;
    $lab = 1;


    if (!empty($usuarioC)) {



        require_once("configuracao.php");
        $sql =  "insert into amostra (AMO_TAN_ID, AMO_LAB_ID, AMO_PRI_ID, AMO_CUL_ID, AMO_USR_ID, AMO_RES_ID, AMO_DESCRICAO, AMO_DH_CHEG, AMO_DH_SAIDA, AMO_PESO, AMO_FINALIZADA, AMO_CANCELADA) values (?, ? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,?);";

        $comando = mysqli_prepare($conexao, $sql);

        mysqli_stmt_bind_param($comando, "iiiiiisssdss", $cadTipo, $lab, $cadPropC, $idCultC, $usuarioC, $cadRespC, $desc, $horaC, $horaS, $peso, $amostraF, $amostraC);

        mysqli_stmt_execute($comando);

        if (mysqli_affected_rows($conexao) != 0) {
            echo "<script language='javascript' type='text/javascript'>
                alert('Usuário cadastrado com sucesso!');window.location.
                href='Painel.php'</script>";
        }

        mysqli_stmt_close($comando);
        mysqli_close($conexao);
    }



    ?>
    
