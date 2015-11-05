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
             <div>Messages so far: <span class="totalmsg"></span>
                  <span class="correct glyphicon glyphicon-heart"></span>&nbsp;
                  <a href="index.php" title="click to refresh">Refresh</a> | 
                  <a href="indexWebWorkers.php" title="click to refresh">Webworkers version</a>
                  <div id="messages">

                  </div>
            </div>
        </div>
      </div>
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/chat.js"></script>
        <script type="text/javascript">
            var worker = new Worker('js/get_messages_worker.js');
            console.log('Lets go');
            worker.postMessage({ 'cmd': 'unknown', 'msg': 'UNKNOWN' });
            worker.addEventListener('message', function (e) {
                 document.getElementById('messages').textContent = e.data;
            }, false);
        </script>
    </body>
</html>