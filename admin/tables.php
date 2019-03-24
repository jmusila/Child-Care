<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Happy-Childcare</title>
        <link type="text/css" href="static/bootstrap/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="static/bootstrap/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="static/css/theme.css" rel="stylesheet">
        <link type="text/css" href="static/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.html">Happy Childcare </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <form class="navbar-search pull-left input-append" action="#">
                        <input type="text" class="span3">
                        <button class="btn" type="button">
                            <i class="icon-search"></i>
                        </button>
                        </form>
                        <ul class="nav pull-right">
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="static/images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Your Profile</a></li>
                                    <li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="index.html"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                                <li><a href="messages.php"><i class="icon icon-inbox"></i>Inbox <b class="label green pull-right">
                                    11</b> </a></li>
                                <li><a href="task.html"><i class="menu-icon icon-tasks"></i>Tasks <b class="label orange pull-right">
                                    19</b> </a></li>
                            </ul>
                            <!--/.widget-nav-->
                            
                            
                            <ul class="widget widget-menu unstyled">
                                <li><a href="ui-button-icon.html"><i class="menu-icon icon-bold"></i> View Food </a></li>
                                <li><a href="tables.php"><i class="menu-icon icon-bold"></i> View Users </a></li>
                                <li><a href="ui-typography.html"><i class="menu-icon icon-book"></i>My Child </a></li>
                                <li><a href="form.html"><i class="menu-icon icon-paste"></i>Recommendations </a></li>
                            </ul>
                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>More Pages </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="other-login.html"><i class="icon-inbox"></i>Login </a></li>
                                        <li><a href="other-user-profile.html"><i class="icon-inbox"></i>Profile </a></li>
                                        <li><a href="other-user-listing.html"><i class="icon-inbox"></i>All Users </a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Users</h3>
							</div>
							<div class="module-body">
                        <table class="table table-striped table-bordered table-condensed">
                            <tr>
                                <th>ID</th>
                                <th>FIRSTNAME</th>
                                <th>LASTNAME</th>
                                <th>EMAIL</th>
                                <th>PHONE NUMBER</th>
                                <th>USERNAME</th>
                            </tr>
                            <?php
                                $sql="SELECT * FROM users order by id asc";
                                $result = mysqli_query($conn, $sql);
                                while($fetch = mysqli_fetch_assoc($result))
                                {
                                ?>
                                <tr>
                                <td><?php echo $fetch['id']; ?></td>
                                <td><?php echo $fetch['firstname']; ?></td>
                                <td><?php echo $fetch['lastname']; ?></td>
                                <td><?php echo $fetch['email']; ?></td>
                                <td><?php echo $fetch['phone']; ?></td>
                                <td><?php echo $fetch['username']; ?></td>
                                <td><a class="btn btn-success" href="editdonejobs.php?id=' . $row['id'] . '">EDIT</a></td>

                                </tr>
                            <?php } ?>
                        </table>
                        </div>
                        </div>
                        </div>
                        </div>

                     <div class="module hide">
                                <div class="module-head">
                                    <h3>
                                        Adjust Budget Range</h3>
                                </div>
                                <div class="module-body">
                                    <div class="form-inline clearfix">
                                        <a href="#" class="btn pull-right">Update</a>
                                        <label for="amount">
                                            Price range:</label>
                                        &nbsp;
                                        <input type="text" id="amount" class="input-" />
                                    </div>
                                    <hr />
                                    <div class="slider-range">
                                    </div>
                                </div>
                            </div>
                                </div>
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2019 JonathanCreations - Happychild.com </b>All rights reserved.
            </div>
        </div>
        <script src="static/js/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="static/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="static/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="static/js/jquery.flot.js" type="text/javascript"></script>
        <script src="static/js/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="static/js/jquery.dataTables.js" type="text/javascript"></script>
        <script src="static/js/common.js" type="text/javascript"></script>
      
    </body>
