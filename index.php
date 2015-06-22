<html>
<head>
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>mpword</title>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/mpword/assets/lib_css.php"); ?>
</head>
<body>

    <?php include($_SERVER['DOCUMENT_ROOT'] . "/mpword/assets/header.php"); ?>

 
<div class="container">
   <br>
   <br>
<div class="jumbotron">
   <center>
    <h2>mpword | Multiplayer Word Processing</h2>
    <br>
    <p>It's as crazy and terrible as it sounds.</p>
    <br>
    <center><a href="#" class="btn btn-info btn-raised btn-lg">Tutorial</a>
    <a href="#" class="btn btn-warning btn-raised btn-lg">Close</a>
   </center>
</div>
    </div>
<br>
<br>

<div class="panel panel-default">
    <div class="panel-body">
       <center>
           <form>
               <div class="form-group">
            <div class="col-lg-10">
                <textarea class="form-control" rows="3" id="textarea"></textarea>
            </div>
           </form>
    </div>
    </center>
</div>

<?php include($_SERVER['DOCUMENT_ROOT'] . "/mpword/assets/footer.php"); ?>

 <?php include($_SERVER['DOCUMENT_ROOT'] . "/mpword/assets/lib_js.php"); ?>
</body>
</html>
