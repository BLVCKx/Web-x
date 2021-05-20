<?php
session_start();
	include "../controller/produitC.php";
	include_once '../Model/produit.php';

	$productC = new produitC();
    $error = "";
    $listeProduit=$productC->afficherProduit();
	if (
        isset($_POST["name"]) &&
        isset($_POST["description"]) && 
        isset($_POST["price"]) &&
        isset($_POST["quantity"]) &&
        isset($_POST["category"]) && 
        isset($_POST["image"])
	){
		if (
            !empty($_POST["name"]) && 
            !empty($_POST["description"]) &&
            !empty($_POST["price"]) && 
            !empty($_POST["quantity"]) &&
            !empty($_POST["category"]) && 
            !empty($_POST["image"])
        ) {
            $prod = new produit(
                $_POST['name'],
                $_POST['description'],
                $_POST['price'], 
                $_POST['quantity'],
                $_POST['category'],
                $_POST['image']
			);		
            $productC->modifierProduit($prod, $_GET['id']);
            header('Location:media.php');
        }
        else
            $error = "Missing information";
	}
?>
<!DOCTYPE HTML>
<html>

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Ample Admin Lite Template by WrapPixel</title>
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <script src="style/js/controle2.js"></script>
    <!-- Bootstrap Core CSS -->
  <!-- Custom CSS -->
 <!-- font-awesome icons CSS-->
  <!-- //font-awesome icons CSS-->
    <!-- side nav css file -->
   <!-- side nav css file -->
    <!-- js-->
    <script src="style/js/jquery-1.11.1.min.js"></script>
    <script src="style/js/modernizr.custom.js"></script>
    <!--webfonts-->
    
    <!--//webfonts-->
    <!-- Metis Menu -->
    <script src="style/js/metisMenu.min.js"></script>
    <script src="style/js/custom.js"></script>
    <link href="style/css/custom.css" rel="stylesheet">
    <!--//Metis Menu -->
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">

</head>

<body>
    
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->

        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="http://localhost/github/back-admin/dashboard.php">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src="plugins/images/logo-icon.png" alt="homepage" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="plugins/images/logo-text.png" alt="homepage" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                   
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class=" in">
                            <form role="search" class="app-search d-none d-md-block me-3">
                                <input type="text" placeholder="Search..." class="form-control mt-0">
                                <a href="" class="active">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li>
                            <a class="profile-pic" href="#">
                                <img src="plugins/images/users/varun.jpg" alt="user-img" width="36"
                                    class="img-circle"><span class="text-white font-medium"><?php echo $_SESSION['f'];?> <span></span> <?php echo $_SESSION['l'];?></span></a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="http://localhost/github/back-admin/dashboard.php "
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="http://localhost/github/back-admin/profile.php"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Profile</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="http://localhost/github/back-admin/basic-table.php"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Wael Table</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="http://localhost/github/back-admin/fray table.php"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">fray Table</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="http://localhost/github/back-admin/fox.php"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">fox Table</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="http://localhost/github/backendyoussef/views/media.php"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">youssef Table</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="http://localhost/github/cruz2/fr.php"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Nessim landolsi</span>
                            </a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="#" class="fw-normal">Dashboard</a></li>
                            </ol>
                           
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- //header-ends -->
            <!-- main content start-->
            <div id="page-wrapper">
            <div class="col-sm-12">
                <div class="white-box">
                    <h2 class="title1">événements disponibles
</h2>
<center>
		<h4 class="btn btn-warning">
		   Ajouter event
		   <span style="margin-left: 30px;">
		   	     <a href="addevent.php"><i class="fa fa-plus" data-toggle="modal" data-target="#myModal"></i></a>
                    
		   </span>
           </h4>
           </center> 
                    <div class="panel-body widget-shadow">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>nom evenement</th>
                                    <th>capacite</th>
                                    <th>contact</th>
                                    <th>type</th>
                                    <th>Description</th>
                                    <th>modifier</th>
                                    <th>suprimer</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?PHP
				foreach($listeProduit as $prod){
			?>
                                <tr>
                                    <th scope="row"><img src="images/<?PHP echo $prod['image']; ?>" width="90"
                                            height="100"></th>
                                    <td>
                                        <?PHP echo $prod['name']; ?>
                                    </td>
                                    <td>
                                        <?PHP echo $prod['price']; ?>
                                    </td>
                                    <td>
                                        <?PHP echo $prod['quantity']; ?>
                                    </td>
                                    <td>
                                        <?PHP echo $prod['category']; ?>
                                    </td>
                                    <td>
                                        <?PHP echo $prod['description']; ?>
                                    </td>
                                    <td>
                                        <form method="POST" action="media.php?id=<?PHP echo $prod['id']; ?>">
                                            <button type="submit" class="btn btn-info" value="modify">Modifier</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form method="POST" action="supprimerProduit.php">
                                            <button type="submit" class="btn btn-danger" value="delete">suprimer</button>
                                            <input type="hidden" value=<?PHP echo $prod['id']; ?> name="id">
                                        </form>
                                    </td>
                                    
                                </tr>
                                
                                <?PHP
				                }
			                    ?>
                                 
                            </tbody>
                        </table>
                        <button 
        
        
        onclick="myfun()" class="btn btn-warning">print page </button >
                    </div>
                    </div>
                </div>
            </div>
            <?php
			if (isset($_GET['id'])){
				$prod = $productC->recupererProduit($_GET['id']);
				
		?>
            <div id="page-wrapper">
                <div class="main-page">
                    <div class="forms">
                        <div class="form-grids row widget-shadow" data-example-id="basic-forms">
                            <div class="form-title">
                                <h4>modifier événement</h4>
                                <div id="erreur"></div>
                            </div>
                            <div id="error">
                                <?php echo $error; ?>
                            </div>
                            <div class="form-body">

                                <form method="POST" action="">
                                    <div class="form-group">
                                        <label>nom</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="<?php echo $prod['name']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>capacite</label>
                                        <input type="number" class="form-control" name="price" id="price"
                                            value="<?php echo $prod['price']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>contact</label>
                                        <input type="number" class="form-control" name="quantity" id="quantity"
                                            value="<?php echo $prod['quantity']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>type</label>
                                        <select id="category" name="category" 
                                            Required>
                                            <option value="select" name="select" id="select">select</option>
                                            <option value="gratuit" name="protein" id="protein">gratuit</option>
                                            <option value="payant" name="mechanical" id="mechanical">payant
                                                </option>
                                            
                                        </select>
                                    </div>
                                    <div class="description">
                                        <label>Description</label>
                                        <textarea name="description" id="description"
                                            value="<?php echo $prod['description']; ?>"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" name="image" id="image"
                                            value="<?php echo $prod['image']; ?>">
                                    </div>
                                    <button type="submit" class="btn btn-info" value="modify"
                                        onclick=" return verif_edit();">Modifier</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
		}
		?>
        </div>
        <!-- side nav js -->
        <script src='style/js/SidebarNav.min.js' type='text/javascript'></script>
        <script>
        $('.sidebar-menu').SidebarNav()
        </script>
        <!-- //side nav js -->
        <!-- Classie -->
        <!-- for toggle left push menu script -->
        <script src="style/js/classie.js"></script>
        <script>
        var menuLeft = document.getElementById('cbp-spmenu-s1'),
            showLeftPush = document.getElementById('showLeftPush'),
            body = document.body;

        showLeftPush.onclick = function() {
            classie.toggle(this, 'active');
            classie.toggle(body, 'cbp-spmenu-push-toright');
            classie.toggle(menuLeft, 'cbp-spmenu-open');
            disableOther('showLeftPush');
        };

        function disableOther(button) {
            if (button !== 'showLeftPush') {
                classie.toggle(showLeftPush, 'disabled');
            }
        }
        </script>
        <!-- //Classie -->
        <!-- //for toggle left push menu script -->
        
        <!--//scrolling js-->
        <!-- Bootstrap Core JavaScript -->
        <script src="style/js/bootstrap.js"> </script>


       
        
        <script type="text/javascript">
        function myfun() {

            window.print();
        }
        </script>
     

</body>
</html>