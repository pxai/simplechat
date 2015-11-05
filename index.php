<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_database = "simplechat";

    /* Database config */
    $link = mysql_connect($db_host,$db_user,$db_pass) or die('No se ha podido realizar la conexión');

    mysql_select_db($db_database,$link);
    mysql_query("SET names UTF8");

    // Check wether chat button was pressed and content was sent
    if (count($_POST) > 0 && $_POST["msg"] != "" && $_POST["who"]!="") {
        // clean tags and code injection
        $message = htmlentities($_POST["msg"]);
        $who = htmlentities($_POST["who"]);
        $ip = $_SERVER["REMOTE_ADDR"];
        
        mysql_query("insert into message (who, message, ip) values ('".$who."','".$message."','".$ip."')");
    }
    
    $messages = mysql_query('select * from message order by msgdate desc');
    $total = mysql_num_rows($messages);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>SimpleChat! <?=$total?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css" type="text/css">
        <link rel="stylesheet" href="css/custom.css" type="text/css">
    </head>
    <body>
        <div class="container">
            
            <div class="col-lg-6" id="game">
            <h1><span class="glyphicon glyphicon-ice-lolly-tasted">SimpleChat!</h1>
   
            <form method="post" action="index.php" >
             <div class="input-group">
                 <input id="who" name="who" class="form-control" placeholder="Who are you">
             </div>
            <div class="input-group">
                <textarea id="msg" name="msg" class="form-control"></textarea>
                 <div >
                    <button type="submit" id="chatbtn" name="submit" class="btn btn-info">
                        Chat!!&nbsp;&nbsp;&nbsp;&nbsp;<span class="correct glyphicon glyphicon-bullhorn"></span>
                    </button>
                </div>
             </div><!-- /input-group -->       
             </form>
             <div>Messages so far: <?=$total?>
                  <span class="correct glyphicon glyphicon-heart"></span>&nbsp;
                  <a href="index.php" title="click to refresh">Refresh</a> | 
                  
                  <div id="messages">
                  <?php
                    $messages = mysql_query('select * from message order by msgdate desc');
                    while ($msg = mysql_fetch_assoc($messages)) {
                        ?>
                            <div class="message panel panel-success">
                              <div class="panel-heading">
                                  <span class="who"><span class="correct glyphicon glyphicon-user"></span> <?php echo $msg['who'];?></span>
                                  <span class="date"><span class="correct glyphicon glyphicon-time"></span> <?php echo $msg['msgdate'];?></span>  
                              </div>
                                <div class="panel-body">
                                    <?php echo $msg['message'];?>
                                </div>
                            </div>
                  <?php
                    }
                   ?>
                  </div>
            </div>
        </div>
      </div>
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>