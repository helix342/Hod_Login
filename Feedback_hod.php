<?php
include("db.php");
$sql = "SELECT * FROM complaints_detail WHERE status = 2";
$sql1 = "SELECT * FROM complaints_detail WHERE status IN (4, 6, 7, 8, 9, 10, 12)";
$sql2 = "SELECT * FROM complaints_detail WHERE status = 11";
$sql3 = "SELECT * FROM complaints_detail WHERE status IN (5, 16, 17)";
$result = mysqli_query($conn, $sql);
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
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/dboardstyles.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>

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
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
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
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href=""
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                    src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="javascript:void(0)"><i
                                        class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                <div class="dropdown-divider"></div>
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
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="profile.php" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">Profile</></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="edit-profile.html" aria-expanded="false"><i class="mdi mdi-account-edit"></i><span
                                    class="hide-menu">Edit Profile</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="error-404.html" class="sidebar-link"><i
                                            class="mdi mdi-account-settings-variant"></i><span class="hide-menu"> Basic
                                            Details </span></a></li>
                                <li class="sidebar-item"><a href="error-404.html" class="sidebar-link"><i
                                            class="mdi mdi-book-multiple"></i><span class="hide-menu"> Academic Details
                                        </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="Errorpages/error-404.html" aria-expanded="false"><i class="mdi mdi-account-key"></i><span class="hide-menu">Change password</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="Feedback_hod.php" aria-expanded="false"><i class="mdi mdi-comment-text"></i><span class="hide-menu">Feedback Corner</span></a>
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
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
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
                                            <li class="nav-item" style="">
                                                <a class="nav-link active show" data-toggle="tab" href="#dashboard"
                                                    role="tab" aria-selected="true"><span class="hidden-sm-up"></span>
                                                    <span sty class="hidden-xs-down"><i
                                                            class="mdi mdi-view-grid"></i><b>&nbsp Dashboard</b></span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#pending"
                                                    role="tab" aria-selected="false"><span class="hidden-sm-up"></span>
                                                    <span class="hidden-xs-down"><i
                                                            class="fas fa-clock"></i><b>&nbsp Pending</b></span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#approved" role="tab"
                                                    aria-selected="false"><span class="hidden-sm-up"></span> <span
                                                        class="hidden-xs-down"><i
                                                            class="fas fa-check"></i><b>&nbsp Approved</b></span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#completed" role="tab"
                                                    aria-selected="false"><span class="hidden-sm-up"></span> <span
                                                        class="hidden-xs-down"><i
                                                            class="mdi mdi-check-all"></i><b>&nbsp Completed</b></span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#rejected" role="tab"
                                                    aria-selected="false"><span class="hidden-sm-up"></span> <span
                                                        class="hidden-xs-down"><i
                                                            class="mdi mdi-close-circle"></i><b>&nbsp Rejected</b></span></a>
                                            </li>
                                        </ul>
                                        <!-------------------------dashboard------------------------------>
                                        <div class="tab-content tabcontent-border">
                                            <div class="tab-pane p-20 active show" id="dashboard" role="tabpanel">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title m-b-0"><b>Issue Analysis</b></h4><br>
                                                        <div class="row">
                                                            <!-- Pending -->
                                                            <div class="col-12 col-md-3 mb-3">
                                                                <div class="cir">
                                                                    <div class="bo">
                                                                        <div class="content1">
                                                                            <div class="stats-box text-center p-3" style="background-color:orange;">

                                                                                <i class="fas fa-clock"></i>
                                                                                <h1 class="font-light text-white">
                                                                                    <?php $query2 = "SELECT COUNT(*) as pending FROM complaints_detail WHERE  status ='2'";
                                                                                    $output2 = mysqli_query($conn, $query2);
                                                                                    $row2 = mysqli_fetch_assoc($output2);
                                                                                    $pendingCount = $row2['pending'];
                                                                                    echo $pendingCount;
                                                                                    ?>
                                                                                </h1>
                                                                                <small class="font-light">Pending</small>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Approved -->
                                                            <div class="col-12 col-md-3 mb-3">
                                                                <div class="cir">
                                                                    <div class="bo">
                                                                        <div class="content1">
                                                                            <div class="stats-box text-center p-3" style="background-color:rgb(14, 86, 239);">
                                                                                <i class="fas fa-check"></i>
                                                                                <h1 class="font-light text-white">
                                                                                    <?php $query2 = "SELECT COUNT(*) as approved FROM complaints_detail WHERE   (status ='4' or status ='6' or status='7' or status='8' or status='9' or status='10' or status='11')";
                                                                                    $output2 = mysqli_query($conn, $query2);
                                                                                    $row2 = mysqli_fetch_assoc($output2);
                                                                                    $pendingCount = $row2['approved'];
                                                                                    echo $pendingCount;
                                                                                    ?>
                                                                                </h1>
                                                                                <small class="font-light">Approved</small>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Completed -->
                                                            <div class="col-12 col-md-3 mb-3">
                                                                <div class="cir">
                                                                    <div class="bo">
                                                                        <div class="content1">
                                                                            <div class="stats-box text-center p-3" style="background-color:rgb(70, 160, 70);">
                                                                                <i class="mdi mdi-check-all"></i>
                                                                                <h1 class="font-light text-white">
                                                                                    <?php $query2 = "SELECT COUNT(*) as completed FROM complaints_detail WHERE  status ='11'";
                                                                                    $output2 = mysqli_query($conn, $query2);
                                                                                    $row2 = mysqli_fetch_assoc($output2);
                                                                                    $pendingCount = $row2['completed'];
                                                                                    echo $pendingCount;
                                                                                    ?>
                                                                                </h1>
                                                                                <small class="font-light">Completed</small>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Rejected -->
                                                            <div class="col-12 col-md-3 mb-3">
                                                                <div class="cir">
                                                                    <div class="bo">
                                                                        <div class="content1">
                                                                            <div class="stats-box text-center p-3" style="background-color: rgb(241, 0, 0);">
                                                                                <i class="mdi mdi-close-circle"></i>
                                                                                <h1 class="font-light text-white">
                                                                                    <?php $query2 = "SELECT COUNT(*) as rejected FROM complaints_detail WHERE  status ='5'";
                                                                                    $output2 = mysqli_query($conn, $query2);
                                                                                    $row2 = mysqli_fetch_assoc($output2);
                                                                                    $pendingCount = $row2['rejected'];
                                                                                    echo $pendingCount;
                                                                                    ?>
                                                                                </h1>
                                                                                <small class="font-light">Rejected</small>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-------------------------pending tab---------------------------->
                                            <div class="tab-pane p-20" id="pending" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h4>Pending Details
                                                                    <button type="button" style="float:right;"
                                                                        class="btn btn-success btnapproveall">Aprrove
                                                                        All</button>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table id="myTable1" class="table table-bordered table-striped">
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
                                                                        <b>Faculty Name</b>
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
                                                                                
                                                                                class="btn btn-success btndesc ml-5" id="seeproblem"
                                                                                data-toggle="modal" value='<?php echo $row['id']; ?>'
                                                                                data-target="#probdesc">View More</button>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $row['date_of_reg']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <button type="button"
                                                                                class="btn btn-success showImage"
                                                                                value="<?php echo $row['id']; ?>"
                                                                                data-toggle="modal"
                                                                                data-target="#imageModal1"
                                                                                data-task-id='<?php echo htmlspecialchars($row['id']); ?>'>
                                                                                View
                                                                            </button>
                                                                        </td>
                                                                        <td>
                                                                            <button type="button"
                                                                                value="<?php echo $row['id']; ?>"
                                                                                id="detail_id"
                                                                                class="btn btn-success btnapprove">Approve</button>
                                                                            <button type="button"
                                                                                value="<?php echo $row['id']; ?>"
                                                                                class="btn btn-danger btnreject"
                                                                                data-toggle="modal"
                                                                                data-target="#rejectreason">Reject
                                                                            </button>
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
                                                                    <textarea type="text" id="pd" value="" style="width:440px;height: 180px;" readonly>
                                                                    </textarea>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Image Modal For Pending -->
                                                <div id="imageModal1" class="modal fade" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">View Image</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <img id="modalImage" src="" alt="Image Preview" style="max-width: 100%; display: none;" />
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            </div>
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
                                                            <form id="rejectdetails">
                                                                <div class="modal-body" style="font-size:larger;">
                                                                    <textarea class="form-control"
                                                                        placeholder="Enter reason"
                                                                        name="textaria"
                                                                        style="width:440px;height: 180px;" required></textarea>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--------------approved tab-------------------->
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
                                                        <table id="myTable2" class="table table-bordered table-striped">
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
                                                                        <b>Faculty Name</b>
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
                                                                            <?php echo $row['id']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $row['faculty_name']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <button type="button"
                                                                                value='<?php echo $row['id']; ?>'
                                                                                class="btn btn-success btndesc ml-5"
                                                                                data-toggle="modal" id="seeproblemapr"
                                                                                data-target="#probdescappr">View More</button>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $row['date_of_reg']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <button type="button"
                                                                                value="<?php echo $row['id']; ?>"
                                                                                class="btn btn-success viewimgappr"
                                                                                data-toggle="modal"
                                                                                data-target="#viewimgappr"
                                                                                data-image-id='<?php echo htmlspecialchars($row['id']); ?>'>
                                                                                View</button>
                                                                        </td>
                                                                        <td>
                                                                            <?php
                                                                            // Define the status messages array
                                                                            $statusMessages = [
                                                                                1 => 'Pending',
                                                                                2 => 'Approved by infra',
                                                                                3 => 'Rejected by infra',
                                                                                4 => 'Forwarded to Manager',
                                                                                5 => 'Rejected by HOD',
                                                                                6 => 'Sent to principal for approval',
                                                                                7 => 'Assigned to worker',
                                                                                8 => 'Worker pending',
                                                                                9 => 'Worker started to work',
                                                                                10 => 'Worker in progress',
                                                                                11 => 'Waiting for approval',
                                                                                12 => 'Sent to infra for completion',
                                                                                13 => 'Work completed',
                                                                                14 => 'Reassign',
                                                                                15 => 'Sent to manager for rework',
                                                                                16 => 'Rejected by manager',
                                                                                17 => 'Rejected by principal',
                                                                            ];

                                                                            // Get the status from the row and display the corresponding message
                                                                            $status = $row['status'];
                                                                            $statusMessage = $statusMessages[$status] ?? 'Unknown status';

                                                                            // Output the status message
                                                                            echo $statusMessage;
                                                                            ?>
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
                                                                    <textarea type="text" id="pdapr" style="width:440px;height: 180px;" readonly>
                                                                </textarea>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>

                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Image Modal For Approved -->
                                                <div id="viewimgappr" class="modal fade" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">View Image</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <img id="imgapr" src="" alt="Image Preview" style="max-width: 100%; display: none;" />
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-----------completed tab----------->
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
                                                        <table id="myTable3" class="table table-bordered table-striped">
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
                                                                        <b>Faculty Name</b>
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
                                                                    <th style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                        <b>Status</b>
                                                                    </th>
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
                                                                            <?php echo $row['id']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $row['faculty_name']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <button type="button"
                                                                                value="<?php echo $row['id']; ?>"
                                                                                class="btn btn-success btndesc ml-5"
                                                                                data-toggle="modal" id="seeproblemcomp"
                                                                                data-target="#probdesccomp">View More</button>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $row['date_of_reg']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <button type="button"
                                                                                value="<?php echo $row['id']; ?>"
                                                                                class="btn btn-success viewimgcomp"
                                                                                data-toggle="modal"
                                                                                data-target="#viewimgcomp"
                                                                                data-img-id='<?php echo htmlspecialchars($row['id']); ?>'>
                                                                                View</button>
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
                                                                    <textarea type="text" id="pdcomp" value="" style="width:440px;height: 180px;" readonly>
                                                                </textarea>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Image Modal For Completed -->
                                                <div id="viewimgcomp" class="modal fade" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">View Image</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <img id="imgcomp" src="" alt="Image Preview" style="max-width: 100%; display: none;" />
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            </div>
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
                                                        <table id="myTable4" class="table table-bordered table-striped">
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
                                                                        <b>Faculty Name</b>
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
                                                                    <th style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                        <b>Status</b>
                                                                    </th>
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
                                                                            <?php echo $row['id']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $row['faculty_name']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <button type="button"
                                                                                value="<?php echo $row['id']; ?>"
                                                                                class="btn btn-success btndesc ml-5"
                                                                                data-toggle="modal" id="seeproblemrej"
                                                                                data-target="#probdescrej">View More</button>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $row['date_of_reg']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <button type="button"
                                                                                value="<?php echo $row['id']; ?>"
                                                                                class="btn btn-success viewimgrej"
                                                                                data-toggle="modal"
                                                                                data-target="#viewimgrej"
                                                                                data-imga-id='<?php echo htmlspecialchars($row['id']); ?>'>
                                                                                View</button>

                                                                        </td>
                                                                        <td class="col-1">
                                                                            <button type="button" value="<?php echo $row['id']; ?>" class="btn btn-danger btnrejectmodal" data-toggle="modal"
                                                                                data-target="#problemrejected" id="rejectedfeedback">Rejected Reason</button>
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
                                                                <div class="modal-body" style="font-size:larger;">
                                                                    <textarea type="text" id="pdrej" value="" style="width:440px;height: 180px;" readonly>
                                                                </textarea>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>

                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Image Modal For Rejected -->
                                                <div id="viewimgrej" class="modal fade" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">View Image</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <img id="imgrej" src="" alt="Image Preview" style="max-width: 100%; display: none;" />
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
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
                                                                <textarea type="text" id="pdrej2" value="" style="width:440px;height: 180px;" readonly>
                                                                </textarea>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <footer class="footer text-center">
                                        <b>
                                            2024 © M.Kumarasamy College of Engineering All Rights Reserved.<br>
                                            Developed and Maintained by Technology Innovation Hub.
                                        </b>
                                    </footer>
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
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">

    <script>
        $(document).ready(function() {
            $('#myTable1').DataTable();
            $('#myTable2').DataTable();
            $('#myTable3').DataTable();
            $('#myTable4').DataTable();
            table.ajax.reload()
        });

        $(document).on('click', '.btnapprove', function(e) {
            e.preventDefault();
            if (confirm('Are you sure you want to approve this complaint?')) {
                var update_id = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "hodbackend.php",
                    data: {
                        'update_status': true,
                        'update_id': update_id
                    },
                    success: function(response) {

                        var res = jQuery.parseJSON(response);
                        if (res.status == 500) {
                            alert(res.message);
                        } else {
                            $('#myTable1').load(location.href + " #myTable1");
                            $('#myTable2').load(location.href + " #myTable2");
                            $('#myTable3').load(location.href + " #myTable3");
                            //table.ajax.reload()
                        }
                    }
                });
            }
        });

        $(document).on('click', '.btnapproveall', function(e) {
            e.preventDefault();

            if (confirm('Are you sure you want to Approve all complaints?')) {
                var updated_id = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "hodbackend.php",
                    data: {
                        'updated_status': true,
                        'updated_id': updated_id
                    },
                    success: function(response) {

                        var res = jQuery.parseJSON(response);
                        if (res.status == 500) {
                            alert(res.message);
                        } else {
                            $('#myTable1').load(location.href + " #myTable1");
                            $('#myTable2').load(location.href + " #myTable2");
                            $('#myTable3').load(location.href + " #myTable3");
                            // table.ajax.reload()
                        }
                    }
                });
            }
        });

        $('#rejectdetails').on('submit', function(e) {
            e.preventDefault();

            if (confirm('Are you sure you want to reject this complaint?')) {
                var formdata1 = new FormData(this);
                var reject_id = $('.btnreject').val();

                formdata1.append("reject_status", true);
                formdata1.append("reject_id", reject_id);

                $.ajax({
                    type: "POST",
                    url: "hodbackend.php",
                    data: formdata1,
                    processData: false,
                    contentType: false,

                    success: function(response) {
                        var res = jQuery.parseJSON(response);
                        if (res.status == 200) {
                            $('#rejectreason').modal('hide');
                            $('#rejectdetails')[0].reset();
                            $('#myTable1').load(location.href + " #myTable1");
                            $('#myTable4').load(location.href + " #myTable4");
                            table.ajax.reload()

                        } else if (res.status == 500) {
                            $('#rejectreason').modal('hide');
                            $('#rejectdetails')[0].reset();
                            console.error("Error:", res.message);
                            alert("Something Went wrong.! try again")
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX error:", error);
                        alert("An error occurred: " + error);
                    }
                });
            }
        });
        // pending tab
        $(document).on('click', '#seeproblem', function(e) {
            e.preventDefault();
            var user_id = $(this).val();
            console.log(user_id)
            $.ajax({
                type: "POST",
                url: "hodbackend.php",
                data: {
                    'seedetails': true,
                    'user_id': user_id
                },
                success: function(response) {
                    var res = jQuery.parseJSON(response);
                    console.log(res)
                    if (res.status == 500) {
                        alert(res.message);
                    } else {
                        $('#pd').val(res.data.problem_description);
                        $('#probdesc').modal('show');
                    }
                }
            });
        });


        //<!--------------approved tab prob desc ajax------------>
        $(document).on('click', '#seeproblemapr', function(e) {
            e.preventDefault();
            var user_idapr = $(this).val();
            console.log(user_idapr)
            $.ajax({
                type: "POST",
                url: "hodbackend.php",
                data: {
                    'seedetailsapr': true,
                    'user_idapr': user_idapr
                },
                success: function(response) {
                    var res = jQuery.parseJSON(response);
                    console.log(res)
                    if (res.status == 500) {
                        alert(res.message);
                    } else {
                        $('#pdapr').val(res.data.problem_description);
                        $('#probdescappr').modal('show');
                    }
                }
            });
        });

        //<!-------completed tab prob desc ajax--------------->
        $(document).on('click', '#seeproblemcomp', function(e) {
            e.preventDefault();
            var user_idcomp = $(this).val();
            console.log(user_idcomp)
            $.ajax({
                type: "POST",
                url: "hodbackend.php",
                data: {
                    'seedetailscomp': true,
                    'user_idcomp': user_idcomp

                },
                success: function(response) {
                    var res = jQuery.parseJSON(response);
                    console.log(res)
                    if (res.status == 500) {
                        alert(res.message);
                    } else {
                        $('#pdcomp').val(res.data.problem_description);
                        $('#probdesccomp').modal('show');
                    }
                }
            });
        });
        //<!------------------rejected tab probdesc ajax------------->
        $(document).on('click', '#seeproblemrej', function(e) {
            e.preventDefault();
            var user_idrej1 = $(this).val();
            console.log(user_idrej1)
            $.ajax({
                type: "POST",
                url: "hodbackend.php",
                data: {
                    'seedetailsrej': true,
                    'user_idrej1': user_idrej1

                },
                success: function(response) {
                    var res = jQuery.parseJSON(response);
                    console.log(res)
                    if (res.status == 500) {
                        alert(res.message);
                    } else {
                        $('#pdrej').val(res.data.problem_description);
                        $('#probdescrej').modal('show');
                    }
                }
            });
        });

        //<!------------------rejected tab feedback ajax------------->

        $(document).on('click', '#rejectedfeedback', function(e) {
            e.preventDefault();
            var user_idrej = $(this).val();
            console.log(user_idrej)
            $.ajax({
                type: "POST",
                url: "hodbackend.php",
                data: {
                    'seefeedback': true,
                    'user_idrej': user_idrej

                },
                success: function(response) {
                    var res = jQuery.parseJSON(response);
                    console.log(res)
                    if (res.status == 500) {
                        alert(res.message);
                    } else {
                        $('#pdrej2').val(res.data.feedback);
                        $('#problemrejected').modal('show');
                    }
                }
            });
        });

        //<!------------------pending tab image------------->

        $(document).on('click', '.showImage', function() {
            var task_id = $(this).data('task-id');
            $('#task_id').val(task_id);

            // Fetch the image from the server
            $.ajax({
                type: "POST",
                url: "hodbackend.php",
                data: {
                    'get_image': true,
                    'task_id': task_id
                },
                dataType: "json",
                success: function(response) {
                    if (response.status == 200) {
                        $('#modalImage').attr('src', response.data.image).show();
                    } else {
                        $('#modalImage').hide();
                        alert(response.message);
                    }
                    $('#imageModal1').modal('show');
                },
                error: function(xhr, status, error) {
                    alert('An error occurred while retrieving the image.');
                }
            });
        });

        //<!------------------approved tab image------------->

        $(document).on('click', '.viewimgappr', function() {
            var task_id = $(this).data('image-id');
            $('#task_id').val(task_id);

            // Fetch the image from the server
            $.ajax({
                type: "POST",
                url: "hodbackend.php",
                data: {
                    'get_image': true,
                    'task_id': task_id
                },
                dataType: "json",
                success: function(response) {
                    if (response.status == 200) {
                        $('#imgapr').attr('src', response.data.image).show();
                    } else {
                        $('#imgapr').hide();
                        alert(response.message);
                    }
                    $('#viewimgapr').modal('show');
                },
                error: function(xhr, status, error) {
                    alert('An error occurred while retrieving the image.');
                }
            });
        });

        //<!------------------completed tab image------------->

        $(document).on('click', '.viewimgcomp', function() {
            var task_id = $(this).data('img-id');
            $('#task_id').val(task_id);

            // Fetch the image from the server
            $.ajax({
                type: "POST",
                url: "hodbackend.php",
                data: {
                    'get_image': true,
                    'task_id': task_id
                },
                dataType: "json",
                success: function(response) {
                    if (response.status == 200) {
                        $('#imgcomp').attr('src', response.data.image).show();
                    } else {
                        $('imgcomp').hide();
                        alert(response.message);
                    }
                    $('#viewimgcomp').modal('show');
                },
                error: function(xhr, status, error) {
                    alert('An error occurred while retrieving the image.');
                }
            });
        });

        //<!------------------rejected tab image------------->

        $(document).on('click', '.viewimgrej', function() {
            var task_id = $(this).data('imga-id');
            $('#task_id').val(task_id);

            // Fetch the image from the server
            $.ajax({
                type: "POST",
                url: "hodbackend.php",
                data: {
                    'get_image': true,
                    'task_id': task_id
                },
                dataType: "json",
                success: function(response) {
                    if (response.status == 200) {
                        $('#imgrej').attr('src', response.data.image).show();
                    } else {
                        $('#imgrej').hide();
                        alert(response.message);
                    }
                    $('#viewimgrej').modal('show');
                },
                error: function(xhr, status, error) {
                    alert('An error occurred while retrieving the image.');
                }
            });
        });
    </script>
</body>

</html>