<?php session_start();

$connect = mysqli_connect("localhost","root","","hotel");


$_SESSION['userid'] = isset($_SESSION['userid']) ? $_SESSION['userid'] : "";

if($_SESSION['userid']){

//echo"<h2> you have logged in now </h2>";
}

?>



<html>
<head>
<title>IITJ GuestHouse</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="container">
  <div id="header">
    <div id="website_title">
      <div id="title">  IIT Jodhpur </div>
      <div id="slogan"> Online GuestHouse Booking</div>
    </div>
  </div>
  <!-- end of header -->
    <div id="menu">
      <ul>
        <li><a href="#" class="current">Home</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#" class="last">Contact</a></li>
      </ul>
    </div>
  <!-- end of banner -->
  <div id="content">
    <div id="content_left">
      <div class="content_left_section">
        <div class="content_title_01">Request For Booking</div>
        <form method="post" action="request.php">
          <label>Arrival</label>
		  <input class="inputfield" name="Arrival" type="date" placeholder="dd-mm-yyyy" style="width: 150px; margin-right: 20px; margin-left: 12px" required="text" /><br><br>
            
            <label>Departure</label>
             <input class="inputfield" name="Departure" type="date" placeholder="dd-mm-yyyy" style="width: 150px; margin-right: 20px;margin-left: 12px" required="text" /><br><br>
			 <label>First Name :</label>
            <input class="inputfield" name="Name" type="text" style="width: 100px;margin-left: 10px;" required="text" /><br><br>
            <label>Last Name :</label>
			<input class="inputfield" name="Surname" type="text" style="width: 100px; margin-right: 20px;margin-left: 12px;"required="text" /><br><br>
			<label>Designation :</label>
            <select name="Designation" style="margin-left: 11px;">
              <option value="student" >Student</option>
              <option value="faculty">Faculty</option>
            </select><br><br>
			<label>Contact :</label>
             <input class="inputfield" name="Contact" type="text" style="width: 100px; margin-right: 20px;margin-left: 11px;" required="text" /><br><br>
			 <label>Email :</label>
             <input class="inputfield" name="Mail" type="email" style="width: 150px; margin-right: 20px;margin-left: 11px;" required="text" /><br><br>
            <label>Adress :</label>
             <textarea class="inputfield" rows="5" cols="50" name="address" type="text" style="width: 220px; height:80px; margin-right: 20px;margin-left: 11px;"required="text" ></textarea><br><br>
             <label>Password :</label>
             <input class="inputfield" name="Password" type="password" style="width: 100px; margin-right: 20px;margin-left: 11px;" required="text" /><br><br>
          <div class="cleaner_h20">&nbsp;</div>
          <div class="rc_btn_01"><input type="submit" value="Request" name="request"></div>
        </form>
        <div class="cleaner">&nbsp;</div>
      </div>
      <!-- end of booking -->
      <div class="cleaner_h30">&nbsp;</div>
      <div class="cleaner_horizontal_divider_01">&nbsp;</div>
      <div class="cleaner_h30">&nbsp;</div>
    </div>



    <!-- end of content left -->
    <div id="content_right">
      <div class="content_right_section">
	   <div class="content_right_2column_box">
        <div class="content_title_01">Check Booking Status</div>
        <form action="check.php" method="post">
         <div class="form_row">
            <label>UserID:</label>
            <input class="inputfield" name="userid" type="text" style="width: 80px; margin-right: 20px;" required="text" /><br><br>
            <label>Password:</label>
            <input class="inputfield" name="password" type="password" style="width: 80px;" required="text" />
          </div>
        <div class="cleaner_h10">&nbsp;</div>
        <div class="cleaner_h40">&nbsp;</div>
        <input type="submit" value="Check" name="check"/>
        
      </div>
      <div class="cleaner_h40">&nbsp;</div>
        <div class="content_title_01">About IIT Jodhpur</div>
        <p>This website is a software engineering project under the guidence of Dr. Chiranjoy Chattopadhyay.</p>
      </div>
      <div class="content_right_section">
        <div class="content_title_01">Gallery</div>
        <div class="gallery_box"> <img src="http://www.iitj.ac.in/slidertest/img/01.jpg" alt="" width=82px height=82px /></div>
        <div class="gallery_box"> <img src="http://www.iitj.ac.in/slidertest/img/02.jpg" alt=""  width=82px height=82px/></div>
        <div class="gallery_box"> <img src="http://www.iitj.ac.in/slidertest/img/03.jpg" alt=""  width=82px height=82px/> </div>
        <div class="gallery_box"> <img src="http://www.iitj.ac.in/slidertest/img/15th%20aug%20002.jpg" alt="" width=82px height=82px /></div>
        <div class="cleaner">&nbsp;</div>
      </div>
      <div class="cleaner_h20">&nbsp;</div>
    </div>
    <!-- end of content right -->
    <div class="cleaner">&nbsp;</div>
  </div>

</div>
<!-- end of container -->
</body>
</html>
