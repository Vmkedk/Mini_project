<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Pneumono</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
       <link rel="stylesheet" href="css/owl.carousel.min.css"> 
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
      
      <link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css><!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- top -->
        <!-- header -->
        <?php
         include"aheader.php"
         ?>
      <!-- end header -->
            <div class="full_bg">
      <!-- header inner -->
         <div class="section">
            <!-- carousel code -->
            <div id="banner1" class="carousel slide slider_main">
               <ol class="carousel-indicators ">
                  <li data-target="#banner1" data-slide-to="0" class="indicator-li-1">01</li>
                  <li data-target="#banner1" data-slide-to="1" class="">02</li>
                  <li data-target="#banner1" data-slide-to="2" class="active">03</li>
               </ol>
               <div class="carousel-inner">
                  <!-- first slide -->
                  <div class="carousel-item active">
                     <div class="carousel-caption cuplle">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-8">
                                 <div class="photog">
                                    <h1>Care early<br>Pneumonia</h1>
                                    <!-- <a class="read_more" href="javascript:void(0)" >Read More</a>
                                    <a class="read_more" href="about.html" >About Us</a> -->
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- second slide -->
                  <div class="carousel-item">
                     <div class="carousel-caption cuplle">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-8">
                                <div class="photog">
                                    <h1>Confirm early<br>Pneumonia</h1>
                                    <!-- <a class="read_more" href="javascript:void(0)" >Read More</a>
                                    <a class="read_more" href="about.html" >About Us</a> -->
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- third slide -->
                  <div class="carousel-item">
                     <div class="carousel-caption cuplle">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-8">
                                <div class="photog">
                                    <h1>Treat early<br>Pneumonia</h1>
                                    <!-- <a class="read_more" href="javascript:void(0)" >Read More</a>
                                    <a class="read_more" href="about.html" >About Us</a> -->
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- controls -->
               <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
               <i class="fa fa-angle-left" aria-hidden="true"></i>
               <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
               <i class="fa fa-angle-right" aria-hidden="true"></i>
               <span class="sr-only">Next</span>
               </a>
            </div>
         </div>
      </div>
      <!-- end banner -->


      <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">DOCTOR DETAILS</strong>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-dark">
                                <thead>
                                <tr>
                                <th scope="col">DOCTOR NAME</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">PHONE</th>
                                <th scope="col">QUALIFICATION</th>
                                <th scope="col">ADDRESS</th>
                                <th scope="col">DISTRICT</th>						
                                <th scope="col">ACTION</th>
				 
			                    </tr>
	   </thread>
	<?php
			//  mysql_connect("localhost","root","");
			//  mysql_select_db("pneumoniadetection");
            // $query="SELECT * FROM dregister";
			// $res=mysqli_query($query);
            $con=mysqli_connect('localhost','root','','pneumoniadetection');
            $res=mysqli_query($con,"SELECT * FROM dregister");
			
			 
									
			while($row=mysqli_fetch_array($res))
			 {
				 ?> <tbody>
			 <tr>
			  <td><font color="#FFFFFF"><?php echo $row['d_name'];?></font></td>
			  <td><font color="#FFFFFF"><?php echo $row['email']; ?></font></td>
			  <td><font color="#FFFFFF"><?php echo $row['phone']; ?></font></td>
			  <td><font color="#FFFFFF"><?php echo $row['qualification'];?></font></td>
			  <td><font color="#FFFFFF"><?php echo $row['address']; ?></font></td>
			  <td><font color="#FFFFFF"><?php echo $row['district']; ?></font></td>
			  <td><font color="#FFFFFF"><a href="adocapprove.php?d_id=<?php echo $row['d_id']; ?>"><?php if($row['approve']==0){ echo "/APPROVE"; }?></a></font></td>
							
			 <?php
		 
			 }
		      ?>
	     	</tr>
		
		</tbody>	
		</table>
        </div>
        </section>
        </div>
        </div>

      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                        <div class="col-lg-2 col-md-6 col-sm-6">
                           <div class="hedingh3 text_align_left">
                              <h3>Resources</h3>
                              <ul class="menu_footer">
                                 <li><a href="index.html">Home</a><li>
                                 <li><a href="javascript:void(0)">What we do</a><li>
                                 <li> <a href="javascript:void(0)">Media</a><li>
                                 <li> <a href="javascript:void(0)">Travel Advice</a><li>
                                 <li><a href="javascript:void(0)">Protection</a><li>
                                 <li><a href="javascript:void(0)">Care</a><li>
                              </ul>
                             
           
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                           <div class="hedingh3 text_align_left">
                             <h3>About</h3>
                              <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various</p>
                           </div>
                        </div>
                     
                
                       
                        <div class="col-lg-3 col-md-6 col-sm-6">
                           <div class="hedingh3  text_align_left">
                              <h3>Contact  Us</h3>
                                <ul class="top_infomation">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>
                           Making this the first true  
                        </li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i>
                           Call : +01 1234567890
                        </li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i>
                           <a href="Javascript:void(0)">Email : demo@gmail.com</a>
                        </li>
                     </ul>
                            
                           
                     </div>
                  </div>
                     <div class="col-lg-4 col-md-6 col-sm-6">
                           <div class="hedingh3 text_align_left">
                              <h3>countrys</h3>
                              <div class="map">
                                <img src="images/map.png" alt="#"/>
                              </div>
                           </div>
                        </div>
                    
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-8 offset-md-2">
                        <p>© 2020 All Rights Reserved. Design by <a href="https://html.design/"> Free html Templates</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>