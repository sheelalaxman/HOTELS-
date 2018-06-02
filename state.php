<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Hotels</title>
  <link rel="stylesheet" type="text/css" href="./css/index.css">
</head>

<body style="overflow:auto">
   <?php include("header.php"); ?>

  <div id="slider">
   <img src="./images/slide2.jpg" />
    <div class="centered">EXPLORE</div>
      <div class="centered1">FIVE STAR HOTELS</div>
      <div class="centered2"><img src="./images/down.jpg"></div>
    </div>


    <?php include("dbconnect.php"); ?>
     
   <div class="flex-container">
        
        <?php  
           
           $i= $_GET['categoryid'];  
           $sql='select hotelid,hotelinfo,hotelname,himage from items where categoryid='.$i.' order by categoryid,hotelid';
         $result=$conn->query($sql);

            if($result->num_rows > 0)
               {
                 
                 while($rows=$result->fetch_assoc())
                 {
         ?>            

          <div><img src="<?php echo $rows['himage']?>"><a href="#"><h3 class="title"><?php echo strtoupper($rows['hotelname'])?></h3></a><?php echo $rows['hotelinfo']?></div>
          
         <?php 
              }
            }
            ?>
</div>



</body>
</html>