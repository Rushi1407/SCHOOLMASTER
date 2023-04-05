<!DOCTYPE html>
<html lang="en">


<head>
    <title>EEducation Master </title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="EEducation master is one of the best eEducational html template, it's suitable for all eEducation websites like university,college,school,online eEducation,tution center,distance eEducation,computer eEducation">
    <meta name="keyword" content="eEducation html template, university template, college template, school template, online eEducation template, tution center template">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- ALL CSS FILES -->
    <link href="css/materialize.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="css/style-mob.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
      <!--== MAIN CONTRAINER ==-->
    <div class="container-fluid sb1">
        <div class="row">
            <!--== LOGO ==-->
            <div class="col-md-2 col-sm-3 col-xs-6 sb1-1">
                <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
                <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
                <a href="index.html" class="logo"><img src="images/logo1.png" alt="" />
                </a>
            </div>
            <!--== SEARCH ==-->
            <div class="col-md-6 col-sm-6 mob-hide">
                <form class="app-search">
                    <input type="text" placeholder="Search..." class="form-control">
                    <a href="#"><i class="fa fa-search"></i></a>
                </form>
            </div>
    
           
            <!--== MY ACCCOUNT ==-->
           
                <!-- Dropdown Structure -->
                
            </div>
        </div>
    </div>

    <!--== BODY CONTNAINER ==-->
     <div class="container-fluid sb2">
        <div class="row">
            <div class="sb2-1">
                <!--== USER INFO ==-->
                <div class="sb2-12">
                    <ul>
                        <li><img src="images/placeholder.jpg" alt="">
                        </li>
                        <li>
                            <h5>Rushikesh Vaddodariya <span> Ua92, Creator</span></h5>
                        </li>
                        <li></li>
                    </ul>
                </div>
                <!--== LEFT MENU ==-->
                <div class="sb2-13">
                    <ul class="collapsible" data-collapsible="accordion">
                       
                        
                       

                       
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-users" aria-hidden="true"></i> Students</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="allstudents.php">All Students</a>
                                    </li>
                                    <li><a href="admin-student-add.php">Add New Students</a>
                                    </li>
                                    <li><a href="view-details-update.php">Update Students</a>
                                    </li>
                                    <li><a href="allstudents.php">Delete Students</a>
                                    </li>
                                </ul>
                            </div>
                        </li>


                         <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-users" aria-hidden="true"></i> Parents</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="allparents.php">All Parents</a>
                                    </li>
                                    <li><a href="addparents.php">Add New Parents</a>
                                    </li>
                                    <li><a href="updateparents.php">Update Parents</a>
                                    </li>
                                      <li><a href="allparents.php">Delete Parents</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-users" aria-hidden="true"></i> Teachers</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="allteachers.php">All Teachers</a>
                                    </li>
                                    <li><a href="addteachers.php">Add New Teachers</a>
                                    </li>
                                    <li><a href="updateteachers.php">Update Teachers</a>
                                    </li>
                                    <li><a href="allteachers.php">Delete Teacher</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        




                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>


            <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2">
                <!--== breadcrumbs ==-->
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Add new Teachers</a>
                        </li>
                        <li class="page-back"><a href="index.html"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li>
                    </ul>
                </div>

                <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
						<div class="box-inn-sp admin-form">
                                <div class="inn-title">
                                    <h4>Add New Teachers Informations</h4>
                                    <p>Here you can edit your website basic details URL, Phone, Email, Address, User and password and more</p>
                                </div>


                                <div class="tab-inn">
                                    <form action="insertteachers.php" method="post">
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input type="text" value="" class="validate" name="name" required>
                                                <label class="">Name</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input type="number" value="" name="phone_no" class="validate" required>
                                                <label class="">Phone number</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <textarea value="" name="address" class="validate"></textarea>
                                                <label class="">Address</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                        
                                            <div class="input-field col s6">
                                                <input type="text" value="" name="course" class="validate" required>
                                                <label class="">Course</label>
                                            </div>
                                           <div class="input-field col s6">
                                                <input type="number" value="" name="salary" class="validate" required>
                                                <label class="">Salary £:</label>
                                            </div>
                                        </div>
                                               
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <i class="waves-effect waves-light btn-large waves-input-wrapper" style="">
                                                    <input type="submit" value="submit" class="waves-button-input">
                                                </i>
                                            </div>
                                        </div>
                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--Import jQuery before materialize.js-->
    <script src="js/main.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>