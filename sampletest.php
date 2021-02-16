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
        <h3 class="text-center text-uppercase"> COVID-19 LIVE UPDATES OF INDIA</h3>
    </div>

    <div class="row">
    
    <div class="table-responsive col-lg-12 col-md-6 col-12">
    <input class="form-control" id="myInput" type="text" placeholder="Search by State Name or Type">
        <table class="tabe table-bordered table-striped text-center  " id="tbval" >
        
            
            <thead>
      <tr class="text-center">
                <th>date</th>
                <th>totalSamplesTested</th>
                
                <th>totalIndividualsTested</th>
                <th>totalPositiveCases</th>
                <th>source</th>
      </tr>
    </thead>
    <tbody id="myTable">
            <?php
                $data = file_get_contents('https://api.rootnet.in/covid19-in/stats/testing/history');
                $coranalive = json_decode($data, true);

                $statecount=  count($coranalive['data']);


                  $i=0;
                while($i< $statecount){
 
                 ?>

                <tr>
                <td><?php echo $coranalive['data'][$i]['day'] ?></td>
                    <td><?php echo $coranalive['data'][$i]['totalSamplesTested'] ?></td>

                    <td><?php echo $coranalive['data'][$i]['totalIndividualsTested'] ?></td>
                    <td><?php echo $coranalive['data'][$i]['totalPositiveCases'] ?></td>
                    <td><?php echo $coranalive['data'][$i]['source'] ?></td>
                   
             </tr>
                <?php
              
                $i++;

                }
                 ?>
    </tbody>
        </table>
    </div>

</section>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

 <!-- ///////////// top cursor /////////// -->

 <div class="container scrolltop float-right pr-5">
	<i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"> </i>
</div>


</div>
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

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

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