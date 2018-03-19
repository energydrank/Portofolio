<?php
if(isset($_POST['submit'])){
    $to = "77604@rocteraa-student.nl"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">

    <title>Portofolio Jesse Siersema</title>
  </head>
  <body>
<nav class="navbar navbar-expand-md">
  <a class="navbar-brand" href="#">Portofolio Jesse Siersema</a>
  <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
</nav>


<div class="jumbotron" style="background-image: url('img/Jumbotron.jpg'); background-size: 1903px 290px; ">
  <div class="container">
    <h1 class="display-4" style=" Color: White;">Welcome</h1>
		<hr class="my-4">
    <p class="lead" style="Color: White;"> My Name is Jesse Siersema</p>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-8 mb-4">
      <div class="card">
        <div class="card-body">
          <div class="card-title">
            <h4>About me</h4>
          </div>
          <div class="card-body">
            <p class="lead">About me</p>
            <p>I am an 18 year old Student from the ROC Ter Aa where i study Application Developer</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <img class="img-thumbnail" src="img/code.jpg" />
      <p> Note: This is a Placeholder Image</p>
    </div>
    <div class="col-md-4">
      <img class="img-thumbnail" src="img/code.jpg" />
      <p> Note: This is a Placeholder Image</p>
    </div>

    <div class="col-md-8 mb-4">
      <div class="card">
        <div class="card-body">
          <div class="card-title">
            <h4>About me</h4>
          </div>
          <div class="card-body">
            <p class="lead">About me</p>
            <p>I am an 18 year old Student from the ROC Ter Aa where i study Application Developer</p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-8 mb-4">
      <div class="card">
        <div class="card-body">
          <div class="card-title">
            <h4>About me</h4>
          </div>
          <div class="card-body">
            <p class="lead">About me</p>
            <p>I am an 18 year old Student from the ROC Ter Aa where i study Application Developer</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <img class="img-thumbnail" src="img/code.jpg" />
      <p> Note: This is a Placeholder Image</p>
    </div>
<!-- Row Closing Tag Reminder-->
  </div>
  <!-- Container Closing Tag -->
</div>

      <div class="card" style="background-color: purple; margin-bottom: 10px;">
        <div class="card-body">
          <blockquote class="blockquote mb-4">
            <h1 style="color: white;">" There are three responses to a piece of Design: yes,no and WOW! Wow is the one to aim for.""</h1>
            <footer class="blockquote-footer" style="color: White">Milton Glaser </footer>
          </blockquote>
        </div>
      </div>

  <div id="ContactForm">
  <form action="" method="post">
  First Name: <input type="text" name="first_name" style="margin-bottom: 10px;"><br>
  Last Name: <input type="text" name="last_name" style="margin-left:2px; margin-bottom: 10px;"><br>
  Email: <input type="text" name="email" style="margin-left: 38px; margin-bottom: 10px;"><br>
  Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
  <input type="submit" name="submit" value="Submit">
  </form>
</div>
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"</script>
  </body>
</html>
