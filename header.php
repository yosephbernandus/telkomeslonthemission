<?php
include 'admin/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Timur Bersuara</title>
    <link rel="shortcut icon" href="image/favicon/favicon.ico">
    <link rel="shortcut icon" href="image/favicon/favicon-16x16.png">
    <link rel="shortcut icon" href="image/favicon/favicon-32x32.png">
    
    
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
	<style>
		.a_hover a:hover  {
			background-color: rgb(56, 203, 195);
			opacity: 2;
			cursor: pointer;
        }

        
        
    </style>
     
</head>
<body>
    <div class="loader" id="loader">
    </div>


    <nav id="header" class="navbar navbar-expand-md navbar-light fixed-top">
        <!-- <a class="navbar-brand" href="#"></a> -->
        
            <img class="mr-4" src="image/logo.png" alt="" width="48px;" height="48px;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <ul class="navbar-nav mr-auto">
            <li id="home" class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li id="about-us" class="nav-item">
                <a class="nav-link" href="about_us.php">About Us</a>
            </li>
            <li id="event" class="nav-item">
                <a class="nav-link" href="event.php">Event</a>
            </li>
            <li id="blog" class="nav-item">
                <a class="nav-link" href="blog.php">Blog</a>
            </li>
            </ul>
            
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>