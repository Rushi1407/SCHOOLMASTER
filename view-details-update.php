<?php
include_once 'database.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE student set student_id='" . $_POST['student_id'] . "', fname='" . $_POST['fname'] . "', lname='" . $_POST['lname'] . "', mobno='" . $_POST['mobno'] . "', email='" . $_POST['email'] . "' ,city='" . $_POST['city'] . "', country='" . $_POST['country'] . "', password='" . $_POST['password'] . "', com_password='" . $_POST['com_password'] . "' WHERE student_id='" . $_POST['student_id'] . "'");
 header("Location: allstudents.php", true, 301);
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM student WHERE student_id='" . $_GET['student_id'] . "'");
$row= mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <title>EEducation Master Template</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="EEducation master is one of the best eEducational html template, it's suitable for all eEducation websites like university,college,school,online eEducation,tution center,distance eEducation, computereEducation">
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
            <!--== NOTIFICATION ==-->
            <div class="col-md-2 tab-hide">
                <div class="top-not-cen">
                    <a class='waves-effect btn-noti' href="admin-all-enquiry.html" title="all enquiry messages"><i class="fa fa-commenting-o" aria-hidden="true"></i><span>5</span></a>
                    <a class='waves-effect btn-noti' href="admin-course-enquiry.html" title="course booking messages"><i class="fa fa-envelope-o" aria-hidden="true"></i><span>5</span></a>
                    <a class='waves-effect btn-noti' href="admin-admission-enquiry.html" title="admission enquiry"><i class="fa fa-tag" aria-hidden="true"></i><span>5</span></a>
                </div>
            </div>
            <!--== MY ACCCOUNT ==-->
            <div class="col-md-2 col-sm-3 col-xs-6">
                <!-- Dropdown Trigger -->
                <a class='waves-effect dropdown-button top-user-pro' href='#' data-activates='top-menu'><img src="images/user/6.png" alt="" />My Account <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>

                <!-- Dropdown Structure -->
                <ul id='top-menu' class='dropdown-content top-menu-sty'>
                    <li><a href="admin-panel-setting.html" class="waves-effect"><i class="fa fa-cogs" aria-hidden="true"></i>Admin Setting</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#" class="ho-dr-con-last waves-effect"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a>
                    </li>
                </ul>
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
                        <li class="active-bre"><a href="#"> Student Details</a>
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
                                    <h4>Student Informations</h4>
                                    <p>Here you can edit your website basic details URL, Phone, Email, Address, User and password and more</p>
                                </div>

                                <div class="tab-inn">
                                        <form action=" " method="post">
                                            <?php if(isset($message)) { echo $message; } ?>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input type="text"  class="validate" name="fname" required>
                                                <label class="">First name</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input type="text"  name="lname" class="validate" required>
                                                <label class="">Last name</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input type="number"  name="number1" class="validate" required>
                                                <label class="">Phone number</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input type="email" class="validate" name="email"  required>
                                                <label class="">Email is</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input type="text"  name="city" class="validate">
                                                <label class="">City</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input type="text"  name="country" class="validate">
                                                <label class="">Country</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input type="password"  name="password" class="validate">
                                                <label class="">Password</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input type="password"  name="com_password" class="validate">
                                                <label class="">Confirm Password</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="text" value="" name="student_id" class="validate">
                                                <label>Student id</label>
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