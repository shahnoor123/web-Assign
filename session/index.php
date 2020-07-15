<?php 

session_start();

//if condition for check email and password 
if(isset($_POST["login_btn"])){
    if($_POST["email_input"] == "admin" && $_POST["password_input"] == "admin"){
        $_SESSION["uname"] = $_POST["email_input"];
        header("location:welcome.php");
    }
    
    else{
        echo" Invalid User ";
        
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title Page</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn t work if you view the page via file:// -->
    <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>

<body>
    <h1 class="text-center">It's Session World</h1>

    <form action="" method="POST" role="form">
        <legend>Form title</legend>

        <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email_input" id="" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="">password</label>
            <input type="password" class="form-control" name="password_input" id="" placeholder="password">
        </div>

        <button type="submit" class="btn btn-primary" name="login_btn">Submit</button>
    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>
