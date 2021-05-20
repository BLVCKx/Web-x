<?php
include "../Controller/categorieC.php";
include_once '../Model/categorie.php';



$error = "";

$catC=new categorieC();

if (
    
    isset($_POST["nom_categ"]) && 
    isset($_POST["descriptionc"]) 
   )
{
    if (
        
        !empty($_POST["nom_categ"]) && 
        !empty($_POST["descriptionc"])
        )
    {
            $cat = new categorie
            (
                $_POST['nom_categ'],
                $_POST['descriptionc']
            );
            $catC->modifiercategorie($cat, $_GET['id_categ']);
            //header('Location:../View/afficher_categ.php');
            header('refresh:5;url=afficher_categ.php');

    }
    else 
    $error = "Missing information";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modifier Categorie</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="//cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

      

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

             


                <!-- Begin Page Content -->

                <div id="error">
                    <?php echo $error; ?>
                </div>

                <?php
                if (isset($_GET['id_categ'])) {
                    $cat = $catC->recuperercategorie($_GET['id_categ']); 
                ?>


                    <div class="container-fluid">
                
                        <div>
                        <!--modifier_categ.php-->
                            <form method="POST" action="">
                                <div class="form-group">
                                    <label for="id_categ">id</label>
                                    <input type="int" class="form-control" name="id_categ" id="id_categ" value="<?php echo $cat['id_categ']; ?>" disabled>
                                </div>

                                <div class="form-group">
                                    <label for="$nom_categ">nom</label>
                                    <input type="string" class="form-control" name="nom_categ" id="nom_categ" value="<?php echo $cat['nom_categ']; ?>">
                                </div>
                                  
                                <div class="form-group">
                                    <label for="categorie">description</label>
                                    <input type="string" class="form-control" name="descriptionc" id="descriptionc" value="<?php echo $cat['descriptionc']; ?>">
                                </div>

                                



                                <button type="submit" value="submit" class="btn btn-primary">Submit</button>

                            </form>
                        </div>
                     




                    </div>
                    <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->



        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

 
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

   

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

<?php
} 
else {
            echo "error de chargement";
        }
?>
</body>

</html>