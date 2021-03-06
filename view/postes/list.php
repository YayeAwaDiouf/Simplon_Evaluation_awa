<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Liste Post</title>
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
                <a class="nav-link" href="../users/add.php"> User_Add</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../users/list.php"> User_List</a>
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
                <a class="nav-link" href="../topics/list.php">Topic_List</a>
            </li>

            <!-- post -->

            <li class="nav-item active">
                <a class="nav-link" href="add.php"> Post_add</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Post_List <span class="sr-only">(current)</span></a>
            </li>



        </ul>

    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <i class="fa fa-list-alt "></i>Liste Des Post
                </header>

                <table class="table table-striped table-advance table-hover">
                    <tbody>
                    <tr>

                        <th><i class="fa fa-calendar "></i> Date du Post</th>
                        <th><i class="fa fa-code "></i> Contenu du Post</th>
                        <th><i class="fa fa-users "></i> User du Post</th>
                        <th><i class="fa fa-users "></i> Birthday</th>
                        <th><i class="fa fa-list "></i> Topic du Post</th>
                        <th><i class="fa fa-mail-forward "></i> Categorie du Post</th>

                    </tr>
                    <?php
                    require_once '../../model/DB.php';
                    require_once '../../model/postDao.php';
                    $post = listerPost();
                    while ($posts = mysqli_fetch_object($post)) {
                        echo "
                                <tr>
                                     <td>".$posts->datePost."</td>
                                      <td>".$posts->contentPost."</td>
                                      <td>".$posts->mailUser."</td>
                                      <td>".$posts->bdayUser."</td>
                                      <td>".$posts->titleTop."</td>
                                      <td>".$posts->labelCat."</td>



                                </tr>";
                    }
                    ?>
                    </tbody>
                </table>
            </section>
        </div>
    </div>
    <div class="form-group text-center">

        <a class="btn btn-danger btn-lg" href="../index.php">Retour a l'accueil</a>

    </div>
</div>
</body>
</html>