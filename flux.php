<!DOCTYPE html>
<html lang="fr">


<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>BIGDIG admin</title>

        <link href="css/style.default.css" rel="stylesheet">
        <link href="css/select2.css" rel="stylesheet" />
        <link href="css/style.datatables.css" rel="stylesheet">
        <link href="cdn.datatables.net/responsive/1.0.1/css/dataTables.responsive.css" rel="stylesheet">
        <link href="css/colorpicker.css" rel="stylesheet" />

        <!-- php5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        
        <header>
            <div class="headerwrapper">
                <div class="header-left">
                    <a href="apropos.php" class="logo">
                        <!--<img src="images/minilogo1.png" alt="" /> -->
                        <p style="color:white;">BIGDIG</p>
                    </a>
                    <div class="pull-right">
                        <a href="#" class="menu-collapse">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                </div><!-- header-left -->
                
                <div class="header-right">
                    
                    <div class="pull-right">
                        
                                                
                        <div class="btn-group btn-group-option">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                              <i class="fa fa-caret-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                              <li><a href="profil.php"><i class="glyphicon glyphicon-user"></i> Afficher mon profil</a></li>
                              <li class="divider"></li>
                              <li><a href="signin.php"><i class="glyphicon glyphicon-log-out"></i>Déconnexion</a></li>
                            </ul>
                        </div><!-- btn-group -->
                        
                    </div><!-- pull-right -->
                    
                </div><!-- header-right -->
                
            </div><!-- headerwrapper -->
        </header>
        <br>
        
        <section>
            <div class="mainwrapper">
                <div class="leftpanel">
                    <div class="media profile-left">
                        <a class="pull-left profile-thumb" href="profil.php">
                            <img class="img-circle" src="images/photos/souka.png" alt="">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">HAJI Soukaina</h4>
                            <small class="text-muted">Développeur</small>
                        </div>
                    </div><!-- media -->
                    
<!--
                    <h5 class="leftpanel-title">Navigation</h5>
-->
                   <ul class="nav nav-pills nav-stacked">
                        
                        <li class="parent"><a href="utilisateurs.php"><i class="fa fa-user"></i> <span>Utilisateurs</span></a>
                            <ul class="children">
                                <li><a href="utilisateurs.php"> Liste des utilisateurs</a></li>
                                <li><a href="ajouter_utilisateur.php">Ajouter un utilisateur</a></li>
                            </ul>
                        </li>

                        <li class="parent active"><a href="#"><i class="fa fa-rss"></i> <span>Flux</span></a>
                            <ul class="children">
                                <li class="active"><a href="#">Liste des flux</a></li>
                                <li><a href="ajouter_flux.php">Ajouter un flux</a></li>
                            </ul>
                        </li>

                        <li class="parent"><a href="relations.php"><i class="fa fa-link"></i> <span>Relations</span></a>
                            <ul class="children">
                                <li><a href="relations.php">Liste des relations</a></li>
                                <li><a href="ajouter_relation.php">Ajouter relation</a></li>
                            </ul>
                        </li>

                    </ul>
                    
                </div><!-- leftpanel -->
                
                <div class="mainpanel">
                    <div class="pageheader">
                        <div class="media">
                            <div class="pageicon pull-left">
                                <i class="fa fa-rss"></i>
                            </div>
                            <div class="media-body">
                                <ul class="breadcrumb">
                                    <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
                                    <li><a href="flux.php">Flux</a></li>
                                </ul>
                                <h4>Liste des flux</h4>
                            </div>
                        </div><!-- media -->
                    </div><!-- pageheader -->
                    
                    <div class="contentpanel">
                       
                        <div class="panel panel-primary-head">
                            
                            
                            <table id="basicTable" class="table table-striped table-bordered responsive">
                                <thead class="">
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>URL</th>
                                        <th>Couleur</th>
                                        <th>Type de flux</th>
                                        <th>Éditer</th>
                                        <th>Supprimer</th>
                                    </tr>
                                </thead>
                         
                                <tbody>
                                    <tr>
                                        <td>#1</td>
                                        <td>HESPRESS</td>
                                        <td><a href="http://www.hespress.com/feed/index.rss">http://www.hespress.com/feed/index.rss</a></td>
                                        <td><a class="btn btn-primary" style="background: #FFC0CB;">#FFC0CB
                                            </a>
                                        </td>
                                        <td>
                                            Interne
                                        </td>
                                         <td>
                                            <a class="btn btn-primary fa fa-edit" href="modif_flux.php">
                                            </a>
                                        </td>
                                        <td>
                                            <a class="btn btn-danger fa fa-trash-o">
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>#2</td>
                                        <td>chouftv</td>
                                        <td><a href="http://chouftv.ma/feed/index.rss">http://chouftv.ma/feed/index.rss</a></td>
                                        <td>
                                            <a class="btn btn-primary" style="background: #7FD4FF;cursor:auto;">#7FD4FF
                                            </a>
                                        </td>
                                        <td>
                                            Externe
                                        </td>
                                         <td>
                                            <a class="btn btn-primary fa fa-edit" href="modif_flux.php">
                                            </a>
                                        </td>
                                        <td>
                                            <a class="btn btn-danger fa fa-trash-o">
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!-- panel -->
                        
                        <br />
                        
                       
                        
                    </div><!-- contentpanel -->
                </div><!-- mainpanel -->
            </div><!-- mainwrapper -->
        </section>

        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/jquery-migrate-1.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/modernizr.min.js"></script>
        <script src="js/pace.min.js"></script>
        <script src="js/retina.min.js"></script>
        <script src="js/jquery.cookies.js"></script>
        
        <script src="js/jquery.dataTables.min.js"></script>
        <script src="cdn.datatables.net/plug-ins/725b2a2115b/integration/bootstrap/3/dataTables.bootstrap.js"></script>
        <script src="cdn.datatables.net/responsive/1.0.1/js/dataTables.responsive.js"></script>
        

        <script src="js/custom.js"></script>
        <script>
            jQuery(document).ready(function(){
                
                jQuery('#basicTable').DataTable({
                    responsive: true
                });
                
            });

        </script>

    </body>


</html>
