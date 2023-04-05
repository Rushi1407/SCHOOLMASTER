<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM teachers");
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <title>EEducation Master</title>
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
                        <li class="active-bre"><a href="#"> Add new student</a>
                        </li>
                        <li class="page-back"><a href="index.html"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li>
                    </ul>
                </div>


                <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Parents Details</h4>
                                    <p>All about parents like name, parents id, phone, email and more</p>
                                </div>

                                <?php
                                if (mysqli_num_rows($result) > 0) {
                                ?>
                                
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Name</th>
                                                    <th>Phone</th>
                                                    <th>Address</th>
                                                    <th>Course</th>
                                                    <th>Salary</th>
													<th>Update</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                         <?php
                                            $i=0;
                                            while($row = mysqli_fetch_array($result)) {
                                            ?>
                                                <tr>
                                                   <td><?php echo $row["teachers_id"]; ?></td>
                                                    <td><a href="#"><span class="list-enq-name"><?php echo $row["name"]; ?></span>
                                                    <td><?php echo $row["phone_no"]; ?></td>
                                                    <td><?php echo $row["address"]; ?></td>
                                                    <td><?php echo $row["course"]; ?></td>
                                                    <td><?php echo $row["salary"]; ?></td>
													<td><a href="updateteachers.php" class="ad-st-view">Update</a></td>
                                                    <td><a href="deleteteachers.php?teachers_id=<?php echo $row["teachers_id"]; ?>"class="ad-st-view">Delete</a></td>
                                                </tr>
                                               
                                               <?php
                                                $i++;
                                                        }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
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
<?php
}
else{
    echo "No result found";
}
?>

</body>


</html>