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
<div class="main_header">
<div class="row w-100 h-100">
    <div class="col-lg-4 col-md-4 col-12 order-lg-1 order-2">
        <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
            <img src="images/eksath.png" width="300" height="300" >
        </div>
        
    </div>
    <div class="col-lg-8 col-md-8 col-12 order-lg-2 order-1">
    <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
            <h1>Let's Stay Safe & Fight Together Against Cor<span class="corona_rot"><img src="images/corona.png" width="100" height="55">na Virus</span></h1>
        </div>
    </div>
</div>

</div>



            <?php
                $data = file_get_contents('https://api.apify.com/v2/key-value-stores/toDWvRj1JpTXiM8FF/records/LATEST?disableRedirect=true');
                $coranalive = json_decode($data, true);
                  
                 ?>

                <?php
                 ?>
<!--latest update-->
<section class="corona_update">
    <div class="mb-3">
        <h3 class="text-uppercase text-center">covid-19 updates</h3>
    </div>
    <div class="d-flex justify-content-around aligh-items-center">
        <div>
            <h1 class="count"><?php echo $coranalive['totalCases']; ?></h1>
            <p>Total Confirm COVID-19 cases*</p>
        </div>
        <div>
            <h1 class="count" style="color:green"><?php echo $coranalive['recovered']; ?></h1>
            <p>Cured/Discharge cases</p>
        </div>
        <div>
            <h1 class="count" style="color:red"><?php echo $coranalive['deaths']; ?></h1>
            <p>Death cases</p>
        </div>
        <div>
            <h1 class="count" style="color: blue"><?php echo $coranalive['activeCases']; ?></h1>
            <p>Active COVID-19 cases*</p>
        </div>
    </div>
</section>
<!-- about section-->
<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
    <div class="section_header text-center mb-5 mt-4">
        <h1>About COVID-19</h1>
    </div>
    <div class="row pt-5">
        <div class="col-lg-5 col-md-6 col-12 ml-5">
            <img src="images/diagcorona.jpg" class="img-fluid">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <h1> What is COVID-19 (Corona-Virus)</h1>
            <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.

            Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.

            </p>
            <p>The best way to prevent and slow down transmission is to be well informed about the COVID-19 virus, the disease it causes and how it spreads. Protect yourself and others from infection by washing your hands or using an alcohol based rub frequently and not touching your face. 

            The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette (for example, by coughing into a flexed elbow).
            </p>
            <p>The severity of COVID-19 symptoms can range from very mild to severe. Some people may have only a few symptoms, and some people may have no symptoms at all. Some people may experience worsened symptoms, such as worsened shortness of breath and pneumonia, about a week after symptoms start.

            People who are older have a higher risk of serious illness from COVID-19, and the risk increases with age. People who have existing chronic medical conditions also may have a higher risk of serious illness. Certain medical conditions that increase the risk of serious illness from COVID-19 include:
            <ul class="list">
                <li>Serious heart diseases</li>
                <li>such as heart failure</li>
                <li>coronary artery disease or cardiomyopathy</li>
                <li>Cancer</li>
                <li>Chronic obstructive pulmonary disease (COPD)</li>
                <li>Chronic kidney disease</li>
                <li>Pregnancy</li>
                <li>High blood pressure</li>

            </ul>
            </p>
        </div>
    </div>
</div>

<!--corona symterms-->

<div class="container-fluid  pt-5 pb-5" id="aboutid">
    <div class="section_header text-center mb-5 mt-4">
        <h1>Coronavirus Symptoms</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                    <img src="images/cough.png" class="img-fluid" width="120" height="120">
                    <figcaption>cough </figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                    <img src="images/runnynose.png" class="img-fluid" width="120" height="120">
                    <figcaption>runny nose </figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                    <img src="images/fever.png" class="img-fluid" width="120" height="120">
                    <figcaption>fever </figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                    <img src="images/sick.png" class="img-fluid" width="120" height="120">
                    <figcaption>cold </figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                    <img src="images/week.png" class="img-fluid" width="120" height="120">
                    <figcaption>tiredness </figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                    <img src="images/breath.png" class="img-fluid" width="120" height="120">
                    <figcaption>difficulty breathing </figcaption>
                </figure>
            </div>

        </div>
    </div>
</div>

<!--corona prevention-->

<div class="container-fluid sub_section  pt-5 pb-5 " id="preventid">
	<div class="section_header text-center mb-5 mt-4">
		<h1> 6 Steps Prevention Against Coronavirus </h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
					<figure>
					<img src="images/handwash.png" class="img-fluid" width="90" height="90">
					</figure>
					</div>

					<div class="col-lg8 col-md-8 col-12">
						<p>Wash your hands regularly for 20 seconds, with soap and water or alcohol-based hand rub</p>
					</div>
				</div>
			</div>

				<div class="col-lg-4  col-md-4  col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12 ">
						<figure>
							<img src="images/mask.png" class="img-fluid" width="90" height="90">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>Cover your nose and mouth with a disposable tissue or flexed elbow when you cough or sneeze</p>
					</div>
				</div>
			</div>


			<div class="col-lg-4  col-md-4  col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12 ">
						<figure>
							<img src="images/quarantine.png" class="img-fluid" width="90" height="90">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>Avoid close contact (1 meter or 3 feet) with people who are unwell</p>
					</div>
				</div>
			</div>


			<div class="col-lg-4  col-md-4  col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12 ">
						<figure>
							<img src="images/home.png" class="img-fluid" width="90" height="90">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>Stay home and self-isolate from others in the household if you feel unwell</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4  col-md-4  col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12 ">
						<figure>
							<img src="images/news.png" class="img-fluid" width="90" height="90">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>Stay informed by watching news & follow the recommended practices</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4  col-md-4  col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12 ">
						<figure>
							<img src="images/medical.png" class="img-fluid" width="90" height="90">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>If you have fever, cough and difficulty breathing, seek medical care early</p>
					</div>
				</div>
			</div>

			</div>
		</div>
	</div>


</div> 


<!-- /////////////// Contact Us ASAP ////////////// -->

<div class="container-fluid   pt-5 pb-5 " id="contactid">
	<div class="section_header text-center mb-5 mt-4">
		<h1> Contact Us </h1>
	</div>

	<div class="container">
		<div class="row">
		<div class="col-lg-8 offset-lg-2 col-12">

        <form action="index.php" method="POST" >

 <div class="form-group">
    <label >Full Name </label>
    <input type="text" class="form-control" name="fullname" placeholder="name" autocomplete="off" required>
  </div>

  <div class="form-group">
    <label >Email </label>
    <input type="email" class="form-control" name="email" placeholder="name@example.com" required autocomplete="off">
  </div>
 
  <div class="form-group">
    <label >mobile </label>
    <input type="number" class="form-control" name="mobile" placeholder="mobile" autocomplete="off" required>
  </div>

    <div class="form-group">
			    <label >Select Symptoms</label> <br>

			 	 <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
				    <input type="checkbox" class="custom-control-input " id="customcheckbox1"    name="coronasym[]" value="cold">
				    <label class="custom-control-label" for="customcheckbox1">Cold</label>
				  </div>
				  <div class="custom-control custom-checkbox custom-control-inline text-capitalize ">
				    <input type="checkbox" class="custom-control-input  "  id="customcheckbox2" name="coronasym[]" value="fever">
				    <label class="custom-control-label" for="customcheckbox2">fever</label>
				  </div>

				   <div class="custom-control custom-checkbox custom-control-inline text-capitalize ">
				    <input type="checkbox" class="custom-control-input  " id="customcheckbox3" name="coronasym[]" value="breath">
				    <label class="custom-control-label" for="customcheckbox3">difficulty in breath</label>
				  </div>

				   <div class="custom-control custom-checkbox custom-control-inline text-capitalize ">
				    <input type="checkbox" class="custom-control-input  " id="customcheckbox4" name="coronasym[]" value="tired">
				    <label class="custom-control-label" for="customcheckbox4">feeling weak</label>
				  </div>
				</div>

	  <div class="form-group">
	    <label for="exampleFormControlTextarea1">Message</label>
	    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
	  </div>

	  <button type="submit" class="btn btn-primary" name="submit" onclick="myFunction()">Submit</button>
      <br>
      
	</form>

    
			</div>
		</div>
	</div>
   

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
<script type="text/javascript">

$('.count').counterUp({
	delay:20,
	time:3000
})

	
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


<?php

include 'dbcon.php';

if(isset($_POST['submit'])){
    $fullname =$_POST['fullname'];
    $email =$_POST['email'];
    $mobile =$_POST['mobile'];
    $symp =$_POST['coronasym'];
    $message =$_POST['message'];

    $chk = "";
    foreach($symp as $chk1){
        $chk .=$chk1. ",";
    }

    $insertquery = "insert into coronacase(fullname, email, mobile, symp, message) values('$fullname','$email','$mobile','$chk', '$message')";

    $query = mysqli_query($con, $insertquery);

    

}

?>