<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../access/css/styles.css"> <!--ENLACE PARA LLAMAR LA HOJA DE ESTILOS-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet"><!--Font of Google-->
    <title>REPASO HTML</title>
</head>
<body class="styleBody"> <!--CUERPO DE LA PAGINA-->

    <header class="styleHeader"> <!--INICIO ENCABEZADO-->
                <nav class="contenedorNavmenu">
                    <ul class="styleUl">
                        <li class="styleLi"><a class="styleLink" href="layout.php">Home</a></li>
                        <li class="styleLi"><a class="styleLink" href="layout.php?opc=1">Link 1</a></li>
                        <li class="styleLi"><a class="styleLink" href="layout.php?opc=2">Link 2</a></li>
                    </ul>  
                </nav>

                <img class="iconSena" src="../access/images/logoSena.png"  alt="">
                
                
    </header><!--FINAL ENCABEZADO-->

    <main class="styleMain"><!--INICIO CONTENIDO-->

        <!--ESTE CONTENIDO SE CAMBIA O PASA ALGO AQUI-->
        <?php
        //Variables
            if(isset($_GET["opc"]))
            {
                $opcion = $_GET["opc"];//metodo get para url
                //Condicional
                switch($opcion){
                    case 1:
                        include "link1.php";
                    break;
                    case 2:
                        include "link2.php";
                    break;
                    default:
                        echo ("Error");
                    break;
            }
                //Basura 
                /*if($opcion==1)
                    include "link1.php";
                elseif ($opcion==2)
                    include "link2.php";
                else
                echo ("Error");*/
            }
            else
            include "home.php";
        ?>

    </main><!--FINAL CONTENIDO-->

    <footer class="styleFooter"><!--INICIO PIE DE PAGINA-->
        <h3>Developer: Alejandro Rivera </h3>

        <div class="styleGithub">
            <img class="iconGithub" src="../access/images/logoGit.png" alt="">
            <small>@AlejoR96</small>
        </div>
    </footer><!--FINAL PIE DE PAGINA -->


    
</body>
</html>