<?php
include_once 'contactform.php';
include_once 'database.php';
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
<div class="jumbotron" id="banner">
  <div class="container">
    <h1 class="display-4" id="Welcome">Welcome</h1>
		<hr class="my-4">
    <p class="lead" id="Bannertext"> My Name is Jesse Siersema</p>
    <p class="lead" id="Bannertext2">Guitarist,Gamer and Application/media developer</P>
    <img id="Word" src="img/MOS_Word.png" />
    <img src="img/MOS_Outlook.png" id="outlook">
    <img src="img/MOS_PowerPoint.png" id="Powerpoint">
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
            <p>My name is Jesse Siersema, I am an 18 year old Application and Media Developer at the ROC Ter AA Located in Helmond <br />For this assignment we needed to create a Portofolio with some information about ourselves</p>
            <p>In my Free time I Practice the guitar or Play some Games(Mainly Overwatch). I Also Play in a little band Called the "Kolele Gang" with some friends of mine</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 d-none d-md-block">
      <img class="img-thumbnail" src="img/me.png" />
      <p> Note: This is me on Stage at my latest show wich is also on youtube! <br /> <a href="https://www.youtube.com/playlist?list=PLqhmO6hubIPlFlnHG9es6YK6xRPDeJDis">Click here to see the playlist</a></p>
    </div>
    <div class="col-md-4 d-none d-md-block">
      <img class="img-thumbnail" src="img/cv.png">
    </div>

    <div class="col-md-8 mb-4">
      <div class="card">
        <div class="card-body">
          <div class="card-title">
            <h4>Resume</h4>
          </div>
          <div class="card-body">
            <p>You can Download my Resume here:</p>
            <a href="docs/ResumeJesseSiersema.docx" class="btn btn-info" download>Download</a>
            <a href="docs/ResumeJesseSiersemaDutch.docx" class="btn btn-info" download>Download(Dutch Version)</a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-8 mb-4">
      <div class="card">
        <div class="card-body">
          <div class="card-title">
            <h4>Skills</h4>
          </div>
          <div class="card-body">
            <p>Here i describe my skills</p>
            <ul class="list-group">
              <li class="list-group-item">PHP</li>
              <li class="list-group-item">HTML</li>
              <li class="list-group-item">CSS</li>
              <li class="list-group-item">C#</li>
              <li class="list-group-item">JavaScript</li>
              <li class="list-group-item">Microsoft Office Outlook*</li>
              <li class="list-group-item">Microsoft Office Word*</li>
              <li class="list-group-item">Microsoft Office Excel*</li>
              <li class="list-group-item">Microsoft Office Powerpoint</li>
            </ul>
            <p> *: Certificate badges on top of the page</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 d-none d-md-block">
      <img class="img-thumbnail" src="img/skills.jpg" />
    </div>
<!-- Row Closing Tag Reminder-->
  </div>
  <!-- Container Closing Tag -->
</div>

      <div class="card" id="Qoute">
        <div class="card-body">
          <blockquote class="blockquote mb-4 justify-content-center">
            <h1 class="text-center" id="QouteThing" >" There are three responses to a piece of Design: yes,no and WOW!<br /> Wow is the one to aim for.</h1>
            <footer class="blockquote-footer text-center" style="color: White">Milton Glaser </footer>
          </blockquote>
        </div>
      </div>

      <div class="container">
              <div class="row">



      <?php
        //Query:
        $TextQuery = "SELECT * FROM cards;";
        //Execute Query
        $resultText = $conn->query($TextQuery);
        //Loop over the result to get all the data from the query
        while($data = $resultText->fetch_assoc())
        {
          echo "<p>",$data['Text'],"</p>";
        }
      ?>
    </div>
</div>


      <div class="container">
        <div class="row  justify-content-center">
          <div class="col-md-6">
            <h2>Contact Form</h2>
              <form action="" method="post">
                <div class="col ">
                First Name: <input type="text" name="first_name" class="form-control"><br>
              </div>
              <div class="col">
                Last Name: <input type="text" name="last_name" class="form-control"><br>
              </div>
              <div class="col">
                Email: <input type="text" name="email" class="form-control"><br>
              </div>
              <div class="col">
                Message:<br><textarea class="form-control" rows="5" name="message" cols="30"></textarea><br>
              </div>
              <div class="col">
              <input class="form-control" type="submit" name="submit" value="Submit">
              </div>
              </form>
          </div>
          </div>
        </div>

        <div class="card" id="footer">
          <div class="card-body">
            <h6 class="text-center">This website was made by Jesse Siersema</h6>
          </div>
        </div>
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"</script>
  </body>
</html>
