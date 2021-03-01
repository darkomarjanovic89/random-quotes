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

    <!-- Header -->
    <div class="container-fluid">        
        <?php      
            // $slike= array("images/slika1.jpg","images/slika2.jpg","images/slika3.jpg","images/slika4.jpg","images/slika5.jpg","images/slika6.jpg","images/slika7.jpg","images/slika8.jpg","images/slika9.jpg","images/slika10.jpg","images/slika11.jpg","images/slika12.jpg","images/slika13.jpg");
            // $promSlike=array_rand($slike,3);
            
            $imgDirectory = 'images/';
            $results = scandir($imgDirectory);
                        $images = array();
                        foreach ($results as $result) {
                            if ($result != '.' && $result != '..') {
                                $imgDir = 'images/portfolio/'.$result.'/';
                                $images[] = glob($imgDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
                            }
                        }
                        $randomImages = array_rand($images, 3);
                        
                        foreach ($randomImages as $value) {
                            echo $value.'<br>'; // this is just set up for testing at the moment
                        }
          
                        var_dump ($randomImages);
                      
               
        
               
        ?>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="<?php echo $randomImages[0] ?>" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo $randomImages[1] ?>" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo $randomImages[2] ?>" alt="Third slide">
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
    
        <div class="row">
            <!-- navigacija -->
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
                                    // Citati ljubav
                                    // $text = file_get_contents('ljubav.txt');
                                    // $textarray = explode("\d", $text);
                                    // $PromenljivIndex = array_rand($textarray);
                                    // $razliciteFrazeLJ = $textarray[$PromenljivIndex];
                                    // $razliciteFrazeLJ = str_replace(";","<br><i>", $razliciteFrazeLJ);
                                    // $razliciteFrazeLJ = str_replace("\d","</i>", $razliciteFrazeLJ);
                                    $text=file("ljubav.txt");

                                    
                                    // Citati posao
                                    $text = file_get_contents('posao.txt');
                                    $textarray = explode("\d", $text);
                                    $PromenljivIndex = array_rand($textarray);
                                    $razliciteFrazeP = $textarray[$PromenljivIndex];
                                    $razliciteFrazeP = str_replace(";","<br><i>", $razliciteFrazeP);
                                    
                                    // Citati zdravlje
                                    $text = file_get_contents('zdravlje.txt');
                                    $textarray = explode("\d", $text);
                                    $PromenljivIndex = array_rand($textarray);
                                    $razliciteFrazeZ = $textarray[$PromenljivIndex];                        
                                    $razliciteFrazeZ = str_replace(";","<br><i>", $razliciteFrazeZ);
                                        
                                    // Citati motivacija
                                    $text = file_get_contents('motivacija.txt');
                                    $textarray = explode("\d", $text);
                                    $PromenljivIndex = array_rand($textarray);
                                    $razliciteFrazeM = $textarray[$PromenljivIndex];
                                    $razliciteFrazeM = str_replace(";","<br><i>", $razliciteFrazeM);
                
                                    if(isset($_GET['ljubav'])){
                                        echo $razliciteFrazeLJ;
                                    }
                                    elseif(isset($_GET['posao'])){
                                        echo $razliciteFrazeP;
                                    }
                                    elseif(isset($_GET['zdravlje'])){
                                        echo $razliciteFrazeZ;
                                    }
                                    elseif(isset($_GET['motivacija'])){
                                        echo $razliciteFrazeM;
                                    }
                                    else{
                                        $grupa= array($razliciteFrazeLJ,$razliciteFrazeP,$razliciteFrazeZ, $razliciteFrazeM);
                                        echo $grupa[array_rand($grupa)];
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