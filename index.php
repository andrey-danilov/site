<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>График </title>

   
    <link rel="stylesheet" type="text/css" href="../src/jquery.jqplot.css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="../src/jquery.jqplot.js"></script>
    <script type="text/javascript" src="../src/plugins/jqplot.json2.js"></script>
    <script language="javascript" type="text/javascript" src="js/own.js"></script>
</head>

<body>

        <div class="container">
            
            <div class="navbar-header" style="background-color: #3366CC;">
                
                <h1 style="text-align: center; color: 000000;">График Функции</h1>
            </div>
            
            
            
        </div>
    <div class="container"id="container">

        <div class="row">

            <div class="col-md-6">
			    <form action="form.php" method="post">
                  <div class="form-group">
                    <label for="Function" >Введите функцию</label>
                    <input  name="Function" type="text" class="form-control" id="Function" placeholder="Ввведите функцию">
                    <button type="button" onclick="send();" >Построить график</button>
                </form>
            </div>

            <div class="col-md-6" id="col-md-6">  
                <div id="chart" class="effect6"></div>
            </div>

        </div>

    </div>
    
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../src/jquery.jqplot.js"></script>
    <script type="text/javascript" src="../src/plugins/jqplot.json2.js"></script>
    <script language="javascript" type="text/javascript" src="js/own.js"></script>
</body>
</html>