<?php
include("db.php");
$sql = "SELECT * FROM complaints_detail WHERE status = 2";
$sql1 = "SELECT * FROM complaints_detail WHERE status IN (4, 6, 7, 8, 9, 10, 12)";
$sql2 = "SELECT * FROM complaints_detail WHERE status = 11";
$sql3 = "SELECT * FROM complaints_detail WHERE status = 5";
$result = mysqli_query($conn, $sql);
$result4 = mysqli_query($conn, $sql);
$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);
$result3 = mysqli_query($conn, $sql3);
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>MIC</title>
    <!-- Custom CSS -->
    <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <a class="navbar-brand" href="https://www.mkce.ac.in">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10" style="padding-left:0px; border-left:0px;">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="assets/images/logo2.png" width="50px" alt="homepage" class="light-logo" />

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" />

                        </span>
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <!-- <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a
                                class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                                data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-bell font-24"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Notifications</a>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href=""
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                    src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i>
                                    My Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i
                                        class="ti-settings m-r-5 m-l-5"></i> Account Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i
                                        class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                            </div>
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
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="index.html" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="profile.html" aria-expanded="false"><i class="mdi mdi-account"></i><span
                                    class="hide-menu">Profile</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="edit-profile.html" aria-expanded="false"><i class="mdi mdi-account-edit"></i><span
                                    class="hide-menu">Edit Profile</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="basic-details.php" class="sidebar-link"><i
                                            class="mdi mdi-account-settings-variant"></i><span class="hide-menu"> Basic
                                            Details </span></a></li>
                                <li class="sidebar-item"><a href="academic-details.html" class="sidebar-link"><i
                                            class="mdi mdi-book-multiple"></i><span class="hide-menu"> Academic Details
                                        </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="password.php" aria-expanded="false"><i class="mdi mdi-account-key"></i><span
                                    class="hide-menu">Change password</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="Feedback_hod.php" aria-expanded="false"><i class="mdi mdi-comment-text"></i><span
                                    class="hide-menu">Feedback Corner</span></a>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="https://www.camsmkce.in/index.aspx" aria-expanded="false"><i
                                    class="mdi mdi-vector-arrange-above"></i><span class="hide-menu">Cams</span></a>
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
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Feedback Approval</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Feedback Corner</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <form class="zmdi-format-valign-top">
                                <div class="card-body">
                                    <h4 class="card-title">Complaint Details</h4>
                                    <div class="card">
                                        <ul class="nav nav-tabs mb-3" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active show" data-toggle="tab" href="#pending"
                                                    role="tab" aria-selected="true"><span class="hidden-sm-up"></span>
                                                    <span class="hidden-xs-down"><i
                                                            class="bi-person"></i><b>Pending</b></span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#approved" role="tab"
                                                    aria-selected="false"><span class="hidden-sm-up"></span> <span
                                                        class="hidden-xs-down"><i
                                                            class="bi bi-book"></i><b>Approved</b></span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#completed" role="tab"
                                                    aria-selected="false"><span class="hidden-sm-up"></span> <span
                                                        class="hidden-xs-down"><i
                                                            class="bi bi-people-fill"></i><b>Completed</b></span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#rejected" role="tab"
                                                    aria-selected="false"><span class="hidden-sm-up"></span> <span
                                                        class="hidden-xs-down"><i
                                                            class="bi bi-people-fill"></i><b>Rejected</b></span></a>
                                            </li>
                                        </ul>
                                        <div class="tab-content tabcontent-border">
                                            <div class="tab-pane p-20 active show" id="pending" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h4>Pending Details
                                                                    <button type="button" style="float:right;"
                                                                        class="btn btn-success btnadddetails">Aprrove
                                                                        All</button>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table id="myTable" class="table table-bordered table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th class="pending status"
                                                                        style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                        <b>S.No</b>
                                                                    </th>
                                                                    <th
                                                                        style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                        <b>Problem id</b>
                                                                    </th>
                                                                    <th
                                                                        style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                        <b>Faculty Incharge</b>
                                                                    </th>
                                                                    <th
                                                                        style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                        <b>Problem Description</b>
                                                                    </th>
                                                                    <th
                                                                        style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                        <b>Date Registered</b>
                                                                    </th>
                                                                    <th
                                                                        style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                        <b>Image</b>
                                                                    </th>
                                                                    <th
                                                                        style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                        <b>Action</b>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $id = 1;
                                                                while ($row = mysqli_fetch_assoc($result)) {
                                                                ?>
                                                                <tr>
                                                                    <td>
                                                                        <?php echo $id; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $row['problem_id']; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $row['faculty_name']; ?>
                                                                    </td>
                                                                    <td>
                                                                        <button type="button"
                                                                            class="btn btn-success btndesc ml-5"
                                                                            data-toggle="modal"
                                                                            data-target="#probdesc">View More</button>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $row['date_of_reg']; ?>
                                                                    </td>
                                                                    <td>
                                                                        <button type="button"
                                                                            value="<?php echo $row['id']; ?>"
                                                                            class="btn btn-success btncertificate"
                                                                            data-toggle="modal"
                                                                            data-target="#viewimg">View</button>
                                                                    </td>
                                                                    <td>
                                                                        <button type="button"
                                                                            value="<?php echo $row['id']; ?>"
                                                                            id="detail_id"
                                                                            class="btn btn-success btnapprove">Approve</button>
                                                                        <button type="button"
                                                                            value="<?php echo $row['id']; ?>"
                                                                            class="btn btn-danger btnuserdelete"
                                                                            data-toggle="modal"
                                                                            data-target="#rejectreason">Reject</button>
                                                                    </td>
                                                                    <?php
                                                                    $id++;
                                                                    }
                                                                    ?>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <!------------------view problem description modal-->
                                                <div class="modal fade" id="probdesc" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Problem
                                                                    Description</h5>
                                                                <button type="button" class="btn" data-dismiss="modal"
                                                                    aria-label="Close"><i class="mdi mdi-close"></i>
                                                                </button>
                                                            </div>
                                                            <form id="addnewdetails">
                                                                <div class="modal-body" style="font-size:larger;">
                                                                <?php
                                                                $id = 1;
                                                                while ($row = mysqli_fetch_assoc($result4)) {
                                                                ?>
                                                                <?php echo $row['problem_description']; ?>
                                                                <?php
                                                                $id++;
                                                                    }
                                                                ?>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!------------view image modal-->
                                                <div class="modal fade" id="viewimg" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Problem
                                                                    Image</h5>
                                                                <button type="button" class="btn" data-dismiss="modal"
                                                                    aria-label="Close"><i class="mdi mdi-close"></i>
                                                                </button>
                                                            </div>
                                                            <form id="addnewdetails">
                                                                <div class="modal-body" style="font-size:larger;">
                                                                    <center>
                                                                        <?php echo $row['image']; ?>
                                                                    </center>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>

                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!------------reject  reason modal----->
                                                <div class="modal fade" id="rejectreason" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">
                                                                    Reason for rejection</h5>
                                                                <button type="button" class="btn" data-dismiss="modal"
                                                                    aria-label="Close"><i class="mdi mdi-close"></i>
                                                                </button>
                                                            </div>
                                                            <form id="addnewdetails">
                                                                <div class="modal-body" style="font-size:larger;">
                                                                    <textarea class="form-control"
                                                                        placeholder="Enter reason"
                                                                        style="width:440px;height: 180px;"></textarea>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-primary"
                                                                        data-dismiss="modal">Submit</button>
                                                                </div>
                                                            </form>
                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane p-20" id="approved" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h4>Approved Complaint Details
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table id="myTable" class="table table-bordered table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th
                                                                        style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                        <b>S.No</b>
                                                                    </th>
                                                                    <th
                                                                        style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                        <b>Problem id</b>
                                                                    </th>
                                                                    <th
                                                                        style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                        <b>Faculty Incharge</b>
                                                                    </th>
                                                                    <th
                                                                        style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                        <b>Problem Description</b>
                                                                    </th>
                                                                    <th
                                                                        style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                        <b>Date Registered</b>
                                                                    </th>
                                                                    <th
                                                                        style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                        <b>Image</b>
                                                                    </th>
                                                                    <th style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;"
                                                                        class="col-2"><b>Status</b></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $id = 1;
                                                                while ($row = mysqli_fetch_assoc($result1)) {
                                                                ?>
                                                                <tr>
                                                                    <td>
                                                                        <?php echo $id; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $row['problem_id']; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $row['faculty_name']; ?>
                                                                    </td>
                                                                    <td>
                                                                        <button type="button"
                                                                            value="<?php echo $row['problem_description']; ?>"
                                                                            class="btn btn-success btncertificate ml-5"
                                                                            data-toggle="modal"
                                                                            data-target="#probdescappr">View
                                                                            More</button>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $row['date_of_reg']; ?>
                                                                    </td>
                                                                    <td>
                                                                        <button type="button"
                                                                            value="<?php echo $row['id']; ?>"
                                                                            class="btn btn-success btncertificate"
                                                                            data-toggle="modal"
                                                                            data-target="#viewimgappr">View</button>
                                                                    </td>
                                                                    <td>
                                                                        <center>
                                                                            <b>Waiting for assigning at manager</b>
                                                                        </center>
                                                                    </td>
                                                                </tr>
                                                                <?php
                                                                    $id++;
                                                                }
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <!------------------view problem description modal-->
                                                <div class="modal fade" id="probdescappr" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Problem
                                                                    Description</h5>
                                                                <button type="button" class="btn" data-dismiss="modal"
                                                                    aria-label="Close"><i class="mdi mdi-close"></i>
                                                                </button>
                                                            </div>
                                                            <form id="addnewdetails">
                                                                <div class="modal-body" style="font-size:larger;">
                                                                    <p>dddddweianfdifvsnafidbniadnbaefovdfbsgaiskdgngwognisfdiusb
                                                                        digbrgg girhg hrvsgif fhsv Lorem ipsum dolor sit
                                                                        amet consectetur, adipisicing elit. Quo delectus
                                                                        atque reprehenderit eligendi sint. Sunt odio
                                                                        sit, laborum illum aspernatur non ullam a itaque
                                                                        ipsa maiores eius dolores corporis est.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>

                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!------------view image modal-->
                                                <div class="modal fade" id="viewimgappr" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Problem
                                                                    Image</h5>
                                                                <button type="button" class="btn" data-dismiss="modal"
                                                                    aria-label="Close"><i class="mdi mdi-close"></i>
                                                                </button>
                                                            </div>
                                                            <form id="addnewdetails">
                                                                <div class="modal-body" style="font-size:larger;">
                                                                    <center>
                                                                        <img src="assets/images/logo2.png" alt="no img">
                                                                    </center>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>

                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane p-20" id="completed" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h4>Completed Complaint Details</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table id="myTable" class="table table-bordered table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th
                                                                        style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                        <b>S.No</b>
                                                                    </th>
                                                                    <th
                                                                        style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                        <b>Problem id</b>
                                                                    </th>
                                                                    <th
                                                                        style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                        <b>Faculty Incharge</b>
                                                                    </th>
                                                                    <th
                                                                        style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                        <b>Problem Description</b>
                                                                    </th>
                                                                    <th
                                                                        style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                        <b>Date Registered</b>
                                                                    </th>
                                                                    <th
                                                                        style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                        <b>Image</b>
                                                                    </th>
                                                                    <th style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;"
                                                                        class="col-2"><b>Status</b></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $id = 1;
                                                                while ($row = mysqli_fetch_assoc($result2)) {
                                                                ?>
                                                                <tr>
                                                                    <td>
                                                                        <?php echo $id; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $row['problem_id']; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $row['faculty_id']; ?>
                                                                    </td>
                                                                    <td>
                                                                        <button type="button"
                                                                            value="<?php echo $row['id']; ?>"
                                                                            class="btn btn-success btncertificate ml-5"
                                                                            data-toggle="modal"
                                                                            data-target="#probdesccomp">View
                                                                            More</button>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $row['date_of_reg']; ?>
                                                                    </td>
                                                                    <td>
                                                                        <button type="button"
                                                                            value="<?php echo $row['id']; ?>"
                                                                            class="btn btn-success btncertificate"
                                                                            data-toggle="modal"
                                                                            data-target="#viewimgcomp">View</button>

                                                                    </td>
                                                                    <td>
                                                                        <center>
                                                                            <b>Completed</b>
                                                                        </center>
                                                                    </td>
                                                                </tr>
                                                                <?php
                                                                    $id++;
                                                                }
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <!------------------view problem description modal---------------->
                                                <div class="modal fade" id="probdesccomp" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Problem
                                                                    Description</h5>
                                                                <button type="button" class="btn" data-dismiss="modal"
                                                                    aria-label="Close"><i class="mdi mdi-close"></i>
                                                                </button>
                                                            </div>
                                                            <form id="addnewdetails">
                                                                <div class="modal-body" style="font-size:larger;">
                                                                    <p>dddddweianfdifvsnafidbniadnbaefovdfbsgaiskdgngwognisfdiusb
                                                                        digbrgg girhg hrvsgif fhsv Lorem ipsum dolor sit
                                                                        amet consectetur, adipisicing elit. Quo delectus
                                                                        atque reprehenderit eligendi sint. Sunt odio
                                                                        sit, laborum illum aspernatur non ullam a itaque
                                                                        ipsa maiores eius dolores corporis est.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>

                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!------------view image modal-->
                                                <div class="modal fade" id="viewimgcomp" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Problem
                                                                    Image</h5>
                                                                <button type="button" class="btn" data-dismiss="modal"
                                                                    aria-label="Close"><i class="mdi mdi-close"></i>
                                                                </button>
                                                            </div>
                                                            <form id="addnewdetails">
                                                                <div class="modal-body" style="font-size:larger;">
                                                                    <center>
                                                                        <img src="assets/images/logo2.png" alt="no img">
                                                                    </center>


                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!----------rejected tab------->
                                            <div class="tab-pane p-20" id="rejected" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h4>Rejected Complaint Details</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table id="myTable" class="table table-bordered table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th
                                                                        style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                        <b>S.No</b>
                                                                    </th>
                                                                    <th
                                                                        style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                        <b>Problem id</b>
                                                                    </th>
                                                                    <th
                                                                        style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                        <b>Faculty Incharge</b>
                                                                    </th>
                                                                    <th
                                                                        style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                        <b>Problem Description</b>
                                                                    </th>
                                                                    <th
                                                                        style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                        <b>Date Registered</b>
                                                                    </th>
                                                                    <th
                                                                        style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                        <b>Image</b>
                                                                    </th>
                                                                    <th style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;"
                                                                        class="col-2"><b>Status</b></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $id = 1;
                                                                while ($row = mysqli_fetch_assoc($result3)) {
                                                                ?>
                                                                <tr>
                                                                    <td>
                                                                        <?php echo $id; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $row['problem_id']; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $row['faculty_name']; ?>
                                                                    </td>
                                                                    <td>
                                                                        <button type="button"
                                                                            value="<?php echo $row['id']; ?>"
                                                                            class="btn btn-success btncertificate ml-5"
                                                                            data-toggle="modal"
                                                                            data-target="#probdescrej">View
                                                                            More</button>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $row['date_of_reg']; ?>
                                                                    </td>
                                                                    <td>
                                                                        <button type="button"
                                                                            value="<?php echo $row['id']; ?>"
                                                                            class="btn btn-success btncertificate"
                                                                            data-toggle="modal"
                                                                            data-target="#viewimgrej">View</button>

                                                                        </td>
                                                                        <td>
                                                                            <center>
                                                                                <button type="button" value="<?php echo $row['problem_description']; ?>" class="btn btn-danger">Problem rejected </button>
                                                                            </center>
                                                                        </td>
                                                                    </tr>
                                                                <?php
                                                                    $id++;
                                                                }
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <!------------------view problem description modal---------------->
                                                <div class="modal fade" id="probdescrej" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Problem
                                                                    Description</h5>
                                                                <button type="button" class="btn" data-dismiss="modal"
                                                                    aria-label="Close"><i class="mdi mdi-close"></i>
                                                                </button>
                                                            </div>
                                                            <form id="addnewdetails">

                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>

                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!------------view image modal-->
                                                <div class="modal fade" id="viewimgrej" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Problem
                                                                    Image</h5>
                                                                <button type="button" class="btn" data-dismiss="modal"
                                                                    aria-label="Close"><i class="mdi mdi-close"></i>
                                                                </button>
                                                            </div>
                                                            <form id="addnewdetails">
                                                                <div class="modal-body" style="font-size:larger;">
                                                                    <center>
                                                                        <img src="assets/images/logo2.png" alt="no img">
                                                                    </center>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>

                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!------------problem rejected modal-------------->
                                                <div class="modal fade" id="problemrejected" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Reason
                                                                    for Rejection</h5>
                                                                <button type="button" class="btn" data-dismiss="modal"
                                                                    aria-label="Close"><i class="mdi mdi-close"></i>
                                                                </button>
                                                            </div>
                                                            <form id="addnewdetails">
                                                                <div class="modal-body" style="font-size:larger;">
                                                                    <p>dddddweianfdifvsnafidbniadnbaefovdfbsgaiskdgngwognisfdiusb
                                                                        digbrgg girhg hrvsgif fhsv Lorem ipsum dolor sit
                                                                        amet consectetur, adipisicing elit. Quo delectus
                                                                        atque reprehenderit eligendi sint. Sunt odio
                                                                        sit, laborum illum aspernatur non ullam a itaque
                                                                        ipsa maiores eius dolores corporis est.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>

                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <footer class="footer text-center" style="margin-top: 250px;">
                                                <b>
                                                    2024 © M.Kumarasamy College of Engineering All Rights Reserved.<br>
                                                    Developed and Maintained by Technology Innovation Hub.
                                                </b>
                                            </footer>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <script src="dist/js/waves.js"></script>
    <script src="dist/js/sidebarmenu.js"></script>
    <script src="dist/js/custom.min.js"></script>
    <script src="assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
        $('#zero_config').DataTable();
    </script>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });

        $(document).on('click', '.btnapprove', function(e) {
            e.preventDefault();

            if (confirm('Are you sure you want to approve this complaint?')) {
                var update_id = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "backend.php",
                    data: {
                        'update_status': true,
                        'update_id': update_id
                    },
                    success: function(response) {

                        var res = jQuery.parseJSON(response);
                        if (res.status == 500) {
                            alert(res.message);
                            $('#myTable').load(location.href + " #myTable");
                        } else {
                            $('#myTable').load(location.href + " #myTable");
                        }
                    }
                });
            }
        });
    </script>

</body>

</html>