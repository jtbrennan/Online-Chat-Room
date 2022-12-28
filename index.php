<!-- <!DOCTYPE html> -->
<head>
    <title>Message Board</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="icon" type="image/x-icon" href="http://drupal.org/favicon.ico">
  <meta http-equiv="Location" content="https://Message-Board.johnnyt001.repl.co">
</head>

<body>

    <!-- Bootstrap Navbar -->
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom bg-white text-dark navbar nav fixed-top shadow-lg">
        <a href="/" class="d-flex align-items-center text-white text-decoration-none">
        </a>
        <ul class="nav nav-pills">
          <li class="nav-item"><a href="" class="nav-link" aria-current="page">Home</a></li>
          <li class="nav-item"><a href="https://github.com/jtbrennan" class="nav-link">Github</a></li>
        </ul>
    </header>

    <!-- Bootstap Hero -->
    <section class="marginn" style="margin-top: 100px;">
    <section class="one" id="one">
    <div class="row d-inline-flex p-2 align-items-center" style="margin-left: 25px; margin-right: 25px;">
        <div class="col-10 col-sm-8 col-lg-6">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWrDreQZnP2-lYy5t1IiCMOKUoJTtAyO3d2g&usqp=CAU" class="d-block mx-lg-auto img-fluid" width="" height="">
        </div>
        <div class="col-lg-6">
          <h1 class="display-5 fw-bold lh-1 mb-3">Message Board</h1>
          <p class="lead">Message Board <span style="text-transform: lowercase;">This site uses the Front-End Framework Bootstrap to style the page. <span style="text-transform: capitalize;">T</span>he open-source server-side scripting language: PHP is used for functionality.<span style="text-transform: capitalize;">The</span> User types in a message and clicks send.<span style="text-transform: capitalize;">The</span>site then adds the message to a text file. <span style="text-transform: capitalize;">Every</span>time the site is loaded, the program loops through each line of the text file and displays the messages to the screen. <span style="text-transform: capitalize;"></span><span style="text-transform: capitalize;"></span></span></p>
          <div class="d-grid justify-content-md-start">
            <button class="btn btn-outline-primary" onclick="window.location.href='https://www.linkedin.com/in/john-brennan-25aaa1246/'">LinkedIn</button><br><br> 
          </div>
        </div>
      </div>
    </span>
    <div class="custom-shape-divider-bottom-1633851282">
  
    </div>
    </section>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <div class="container">
        <div class="panel-group">
            <div class="panel panel-primary">
                <div class="panel-heading">Post a message...</div>
                <div class="panel-body">
                    <form action="" id="message-form" method="post">
                        <div class="form-group">
                            <label>Message:</label>
                            <textarea id="message" type="text" name="text" class="form-control"></textarea>
                        </div>
                        <button class="btn btn-dark" type="submit" name="submit">Post to board</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <!-- Firebase -->
    <script src="https://www.gstatic.com/firebasejs/3.3.0/firebase.js"></script>

    <?php
    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
      $name = $_POST['text'];
      $handle = fopen('names.txt', 'a');
      fwrite($handle, $name."\n");
      echo "<script type='text/javascript'>window.top.location='https://Message-Board.johnnyt001.repl.co';</script>"; exit;

      fclose($handle);
    }
    $read = file('names.txt');

    foreach ($read as $line) {
        echo ' <div class="container"><div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">Message</div>
                <div class="panel-body">
                    <li class="message-board">'  .$line.     
                    '</li>
                </div>
            </div>
        </div></div>';
    }

    ?>
<script>header("Location: index.php", true, 303);</script>
</body>

</html>
