<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Citati</title>
</head>
<body>

    <!-- Header - slider -->
    <div class="container-fluid">        
       

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                <div class="carousel-item active">
                <?php      
           
            $slike=scandir("images/");
                        unset($slike[0]);
                        unset($slike[1]);
                        shuffle($slike);

                echo  "<img class='lock w-100' src='images/$slike[0]' alt='First slide'>" ?>
                </div>
                <div class="carousel-item">
                <?php echo  "<img class='lock w-100' src='images/$slike[1]' alt='Second slide'>" ?>
                </div>
                <div class="carousel-item">
                <?php echo  "<img class='lock w-100' src='images/$slike[2]' alt='Third slide'>" ?>
                </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
            </div>
    
    <!-- navigacija -->
        <div class="row">            
            <div class="col-12 col-sm-3 col-md-2">
                <nav class="navbar">                        
                    <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" href="index.php?posao=true">Posao</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link"  href="index.php?zdravlje=true">Zdravlje</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="index.php?ljubav=true">Ljubav</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="index.php?motivacija=true">Motivacija</a>
                    </li>
                    </ul>
                </nav>            
            </div>

            <!-- citati -->
            <div class="col-12 col-sm-9 col-md-10">
                <blockquote>
                            <p>
                                <?php                                                    
                                       $file = file('proba.txt');
                                        $broj = count($file);
                                        

                                        for($i=0; $i<$broj; $i++){
                                           if($broj % 2 ==0){
                                               echo $broj;
                                           }
                                        }
                                    
                                ?>
                            </p>
                </blockquote>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer class="container text-center">
            <p>
                <?php                          
                    setlocale(LC_TIME, 'SR');
                    $dan = strftime('%A');
                    $datum = date("d.m.Y.");
                    echo "<p> $dan, $datum</p>";
                ?>
            </p>
    </footer>
</body>
</html>