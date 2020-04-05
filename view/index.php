<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ajout Utilisateur</title>

    <link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
    <link rel="stylesheet" type="text/css" href="../public/css/font-awesome.css">

</head>
<body>

<!-- ****************************************************************************
*                            Barre de Navigation                           *
**************************************************************************** -->
<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse navbar-fixed-top">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#menu" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="../view/index.php" ><span class="fa fa-home fa-3x "></span><i class="fa fa-diamond fa-3x"> Simplon_Evaluation</i> </a>
    <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#" style="font-family: 'Helvetica Neue'  ; font-style: oblique; margin-left: 100px;">
                    <h3 style="margin-bottom: -15px;">
                        Bienvenue au Service de Gestion des Posts
                    </h3>
                </a>
            </li>
        </ul>
    </div>
</nav>

<div class="container" style="margin-bottom: 550px; margin-top: 250px; margin-left: 100px;">


        <form  method="post" accept-charset="utf-8" action="../../controller/userContrtoller.php" >


            <div class="form-group text-center">

                <a class="btn btn-danger btn-lg" href="../view/users/add.php" ">
                    <span class="fa fa-long-arrow-down fa-2x " style="color: #eaf6ea;">
                    </span>
                    <h4>
                        Inscrivez vous pour editer un Post
                    </h4>

                </a>

            </div>

        </form>
   
</div>
</body>
</html>