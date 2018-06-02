 <header class="clone" style="display:flex">
        <div id="logo">
        	<div class="inner">   
              <a href="./index.php">
              	<!--img src="./images/logo6.jpeg" /-->
              	<span style="color:white;font-weight: bold;font-size: 25px;font-family: verdana,sans serif;text-align: center;">HOTELS<span style="font-size: 8px"> . COM</span></span>

              </a>
                <a href="#register"><span style="margin-left: 300px;color:white">[signup
                  <span style="color:white" onclick="document.getElementById('id01').style.display='block'">/signin]</span>
              </span></a>

             </div>

           </div>
       
</header> 

    <div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
  
   <div id="subheader">
   	    <hr/>

   	    <?php include("dbconnect.php"); ?>
         <?php 
            
           $sql="select categoryid,categoryname,route from category order by categoryid";
               $result=$conn->query($sql);
               if($result->num_rows > 0)
               {
               	 
                 while($rows=$result->fetch_assoc())
                 {
                  
         ?> 
             
        <span id="content"><a  href="<?php  echo ($rows['route'] ."?".'categoryid='. $rows["categoryid"] );?>"> <?php echo(strtoUpper($rows["categoryname"]));  ?></a></span>

        <?php }
             }
          ?>    
         
        <hr/>
   </div>
