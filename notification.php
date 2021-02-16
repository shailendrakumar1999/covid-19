<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Corona</title>
    <?php include 'link/links.php' ?>
    <?php include 'css/style.php' ?>
</head>
<body>

<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5"  href="index.php">Covid-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link " href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
    

      
      
      <li class="nav-item "><a  class="nav-link" href="hospital.php" >Hospital & Beds</a> </li>
          
          <li class="nav-item"><a class="nav-link" href="medical.php" >Medical College & Beds</a></li>
      
      <li class="nav-item">
        <a class="nav-link" href="notification.php">Notifications & Advisories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="confirmcorona.php">Comparison</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact and Helpline Information</a>
      </li>
      
    </ul>
    
        
    
  </div>
</nav>

<section class="corono_update container-fluid">
    <div class="my-5">
        <h3 class="text-center text-uppercase"> Notifications & Advisories</h3>
    </div>

    <div class="table-responsive">
        <table class="tabe table-bordered table-striped text-center " id="tbval">
            <tr>
            
                <th>Date</th>
                <th>Notification Title</th>
                <th>Link</th>
                
            </tr>

            <?php
                $data = file_get_contents('https://api.rootnet.in/covid19-in/notifications');
                $coranalive = json_decode($data, true);
                
               
                
               
                $statecount= count($coranalive['data']['notifications']);

                $i=1;
               
                while($i< $statecount){
                    $j=0;
                    $test= $coranalive['data']['notifications'][$i]['title'];
                    $str= (explode(" ", $test, 2)); 
                    ?>

                    <tr>

                        <td><?php  echo $str[$j]; ++$j; ?></td>
                        <td><?php  echo $str[$j]; ?></td>
                        <td><?php  echo $coranalive['data']['notifications'][$i]['link']; ?></td>
                    </tr>
                     
                   

                    <?php
                    $i++;

                }

                //echo $coranalive['data']['contacts']['regional'][0]['loc'];
                
                
                
                

            ?>




        
        </table>

        
    
    </div>

</section>

 <!-- ///////////// footer /////////// -->

<footer class="bg-primary text-white text-center text-lg-start">
  <div class="container p-4">
    <div class="row">
      
  
    </div>
   
  </div>
  
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
    © 2020 Copyright:
    <a class="text-white" href=""></a>
  </div>
  <!-- Copyright -->
</footer>

 

</body>
</html>