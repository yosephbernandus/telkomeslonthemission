<?php
include 'database.php';
session_start();

if (empty($_SESSION['user_id'])) {
    header('Location: login.php');
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="image/favicon/favicon.ico">
    <link rel="shortcut icon" href="image/favicon/favicon-16x16.png">
    <link rel="shortcut icon" href="image/favicon/favicon-32x32.png">
    
    <title>Timur Bersuara | Admin Panel</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/admin-style.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Datatable CSS -->
    <link rel="stylesheet" href="css/datatables.min.css">
    <!-- Gijgo WYSIWYG Editor CSS -->
    <link rel="stylesheet" href="css/gijgo.min.css">
    <!-- Fontawesome Icons CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css" />


</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Admin Panel</h3>
            </div>

            <ul class="list-unstyled components">
                <p><b>Dashboard</b></p>  
                <hr>
                <li id="blog" class="">
                    <a href="index.php">Blog</a>
                </li>                  
                <li id="event" class="">
                    <a href="event.php">Event</a>
                </li>
                
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fa fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>

                    <a href="logout.php" class="btn btn-outline-dark float-right">Logout</a>
                </div>
            </nav>