<?php
   session_start();

    // Check condittions
    if (!isset($_SESSION['Username']) && !isset($_SESSION['Mem_ID']))
    {
        // Jump back to login page
       header('Refresh: 1; URL = index.php');
        echo '<script type= "text/javascript">' .'alert("You are not logged in");' ."</script>";
    }
    
    else
    {
        echo "<h4><b>Welcome:<b> " .$_SESSION['Username'] ."!" ."</h4>";
        echo '<h5><a href="logout.php">Logout</a>';
    }
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110491194-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

    gtag('config', 'UA-110491194-1');
    </script>

    <meta charset="utf-8" />
    <title>New Blog Post | GearHead Inc</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    
    

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
    
<body>

<div class="container">

<div class="page-header">
    <h1><a href="index.php">GearHead Inc</a><small> New Blog Post</small></h1>
</div>
    
<!-- New Blog Post - START -->
<div class="container">
    <div class="row" id="row_style">
        <h4 class="text-center">Submit new post</h4>
        <div class="col-md-4   col-md-offset-4">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Title">
            </div>
            <textarea id="editor" cols="30" rows="10">Submit your text post here...</textarea>
            <br>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Tags">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" id="submit">Submit new post</button>
            </div>
        </div>
    </div>
</div>

<style>
    #row_style {
        margin-top: 30px;
    }

    #submit {
        display: block;
        margin: auto;
    }
</style>

<!-- you need to include the shieldui css and js assets in order for the charts to work -->
<link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" />
<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>

<script>
    $(function () {
        $("#editor").shieldEditor({
            height: 260
        });
    })
</script>
<!-- New Blog Post - END -->

</div>

</body>
</html>