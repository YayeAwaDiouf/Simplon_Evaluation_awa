
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ajout Topic</title>

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
                <a class="nav-link" href="#">Topic_add <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="list.php"> Topic_List</a>
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

<!-- ****************************************************************************
*                           Alert de confirmation                          *
**************************************************************************** -->
<?php
if (isset($_GET['ok'])){
    if ($_GET['ok'] == 1){
        echo "<div class='alert alert-success'>
		 				topic save succefully!!!
		 			</div>";
    }else{
        echo "<div class='alert alert-warning'>
		 				Error!!! topic can't be saved!!!
		 			</div>";
    }
}
?>
<!-- container-->
<div class="container">
    <fieldset>
        <legend class="text-center">Ajout Topic</legend>

        <form  method="post" accept-charset="utf-8" action="../../controller/topicContrtoller.php" >

            <div class="form-group">
                <input type="text" name="titleTop" placeholder="titre du topic" class="form-control">
            </div>

            <div class="form-group" >
                <select class="form-control" name="idUserTop"  >
                    <option> Choisir un utilisateur </option>
                <?php
                require_once '../../model/DB.php';
                require_once '../../model/userDao.php';
                $list = listeUser();
                while ($lists = mysqli_fetch_object($list)) {

                    echo "

                    <option value='$lists->idUser'> ".$lists->mailUser."</option>

                    ";

                }
                ?>
                </select>
            </div>
            <div class="form-group" >
                <select class="form-control" name="idCatTop">
                    <option> Choisir une Catégorie </option>
                    <?php
                    require_once '../../model/DB.php';
                    require_once '../../model/categorieDao.php';
                    $list = listeCategorie();

                    while ($lists = mysqli_fetch_object($list)) {

                        echo "

                    <option value='$lists->idCat'> ".$lists->labelCat."</option>

                    ";

                    }
                    ?>
                </select>
            </div>
            <div class="form-group text-center">

                <input type="submit" name="valider" value="valider" class="btn btn-angel btn-lg" >


                <a class="btn btn-danger btn-lg" href="../postes/add.php"> Add_Post</a>

            </div>
        </form>
    </fieldset>
</div>
</body>
</html>