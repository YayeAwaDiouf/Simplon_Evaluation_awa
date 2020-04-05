<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Liste Users</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/style.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/font-awesome.css">

</head>
<body>

<!-- ****************************************************************************
*                            Barre de Navigation                           *
**************************************************************************** -->
<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse navbar-fixed-top">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#menu" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"><span class="fa fa-home fa-3x "></span><i class="fa fa-diamond fa-3x"> Simplon_Evaluation</i> </a>
    <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav mr-auto">
            <!-- user -->

            <li class="nav-item">
                <a class="nav-link" href="add.php"> User_Add</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">User_List <span class="sr-only">(current)</span></a>
            </li>
            <!-- categorie -->

            <li class="nav-item active">
                <a class="nav-link" href="../categories/add.php">Catégorie_add</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../categories/list.php">Categorie_List</a>
            </li>

            <!-- topic -->

            <li class="nav-item active">
                <a class="nav-link" href="../topics/add.php">Topic_add</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../topics/list.php"> Topic_List</a>
            </li>

            <!-- post -->

            <li class="nav-item active">
                <a class="nav-link" href="../postes/add.php"> Post_add</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../postes/list.php">Post_List</a>
            </li>



        </ul>

    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <i class="fa fa-list-alt "></i>Liste Des Users
                </header>

                <table class="table table-striped table-advance table-hover">
                    <tbody>
                    <tr>
                        <th><i class="fa fa-star fa-spin"></i> #</th>
                        <th><i class="fa fa-mail-forward "></i> email de l'utilisateur</th>
                        <th><i class="fa fa-lock "></i>Mot de Passe de L'utilisateur</th>
                        <th><i class="fa fa-user"></i> birthday de l'Utilisateur</th>
                        <th>Add_Categorie</th>
                    </tr>
                    <?php
                    require_once '../../model/DB.php';
                    require_once '../../model/userDao.php';
                    $user = listeUser();
                    while ($users = mysqli_fetch_object($user)) {
                        echo "
                                <tr>
                                      <td>".$users->idUser."</td>
                                      <td>".$users->mailUser."</td>
                                      <td>".$users->pwUser."</td>
                                      <td>".$users->bdayUser."</td>


                              	      <td><a href='../../view/categories/add.php?idUser=".$users->idUser."'><i class='fa fa-plus text-primary'></i></a></td>
                                </tr>";
                    }
                    ?>
                    </tbody>
                </table>
            </section>
        </div>
    </div>
</div>
</body>
</html>