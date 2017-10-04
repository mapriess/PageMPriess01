  <!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
    <link href="../../bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <title>Malte Prieß - Projekte</title>
  </head>

  <body>

    <div class="container col-sm-offset-2 col-sm-8">    

      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
<!--            <a class="navbar-brand" href="#">Web-Portfolio</a>-->
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="../../">Home</a></li>
              
              <li class="dropdown active">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projekte <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="../../projects">Überblick</a></li>
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Web projects</li>
                  <li><a href="../kanbanBoardWithDart">Kanban Board (dart)</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Further project will follow</a></li>
                </ul>
              </li>
              
              <li><a href="../../CV/">CV</a></li>
              <li><a href="../../aboutme/">Über mich</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
      
      <h1 class="title text-center">Projekte</h1>

      <?php
        // Datenbank-Verbindung herstellen
        require '../../inc/db.php';

        // echo "<h1>Programm Adressbuch</h1>";

        $erg = $db->query("SELECT * FROM user")
                or die($db->error);
        // print_r($erg);

        if ($erg->num_rows) {
          echo "<p>Datensätze vorhanden: " . $erg->num_rows . '<br>';
        }

        while ($zeile = $erg->fetch_object()) {
          echo '<br>'. $zeile->name . ' ' . $zeile->pw;
        }

        $erg->free();
        $db->close();
      ?>            
      
    </div>
      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  
  </body>
</html>