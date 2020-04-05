<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Liste Topic</title>
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
                <a class="nav-link" href="../users/list.php"> User_Add</a>
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
                <a class="nav-link" href="add.php">Topic_add</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">User_List <span class="sr-only">(current)</span></a>
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
                    <i class="fa fa-list-alt "></i>Liste Des Topics
                </header>

                <table class="table table-striped table-advance table-hover">
                    <tbody>
                    <tr>

                        <th><i class="fa fa-calendar "></i> Titre du Topic</th>
                        <th><i class="fa fa-user-md "></i> Mail du Créateur</th>
                        <th><i class="fa fa-calendar-o "></i> Birthday du Createur</th>
                        <th><i class="fa fa-code "></i> Catégorie appartenue</th>
                        <th>Add_Post</th>

                    </tr>
                    <?php
                    require_once '../../model/DB.php';
                    require_once '../../model/topicDao.php';
                    $topic = listeTopic();
                    while ($topics = mysqli_fetch_object($topic)) {
                        echo "
                                <tr>
                                     <td>".$topics->titleTop."</td>
                                      <td>".$topics->mailUser."</td>
                                      <td>".$topics->bdayUser."</td>
                                      <td>".$topics->labelCat."</td>

                                    <td><a href='../../view/postes/add.php'><i class='fa fa-plus text-primary'></i></a></td>

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