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
        <h3 class="text-center text-uppercase"> Hospitals and Beds</h3>
    </div>

    <div class="table-responsive">
        <table class="tabe table-bordered table-striped text-center " id="tbval"  width="100%">
            <tr>
            
                <th>State Name</th>
                <th>Rural Hospitals</th>
                <th>Rural Beds</th>
                <th>Urban Hospitals</th>
                <th>Urban Beds</th>
                <th>Total Hospitals</th>
                <th>Total Beds(State Wise)</th>
                
            </tr>

            <?php
                $data = file_get_contents('https://api.rootnet.in/covid19-in/hospitals/beds');
                $coranalive = json_decode($data, true);
                
               
                

                $statecount= count($coranalive['data']['regional']);
 
                
                $i=0;
                while($i< $statecount){

                 ?>

                <tr>

                    <td><?php echo $coranalive['data']['regional'][$i]['state'] ?></td>

                    <td><?php echo $coranalive['data']['regional'][$i]['ruralHospitals'] ?></td>
                    <td><?php echo $coranalive['data']['regional'][$i]['ruralBeds'] ?></td>
                    <td><?php echo $coranalive['data']['regional'][$i]['urbanHospitals'] ?></td>
                    <td><?php echo $coranalive['data']['regional'][$i]['urbanBeds'] ?></td>
                    <td><?php echo $coranalive['data']['regional'][$i]['totalHospitals'] ?></td>
                    <td><?php echo $coranalive['data']['regional'][$i]['totalBeds'] ?></td>
             </tr>
     
   

                <?php
                $i++;

                }
                
                

                 ?>
        
        </table>

    
    </div>

</section>

 <!-- ///////////// top cursor /////////// -->

 <div class="container scrolltop float-right pr-5">
	<i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"> </i>
</div>


</div>

 <br>
 
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
<script type="text/javascript">



	
mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};
function scrollFunction() {
if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
mybutton.style.display = "block";
} else {
mybutton.style.display = "none";
}
}

function topFunction() {
document.body.scrollTop = 0; 
document.documentElement.scrollTop = 0;
}

</script>

</body>
</html>