<?php
require_once "header.php";
 ?>
<!DOCTYPE html>
<html lang="en-US">
	<head>
		<title> What's Your Perfect Vacation City? </title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<link rel="stylesheet" type="text/css" href="form.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  	<script src="form.js"></script>
	</head>
	<body>
    <br />
    <br />
    <img src="atdplogo.png" alt="ATDP CORP LOGO" id="logo"/>
    <?php
    printHeader();
     ?>
     <br />
     <b>
       Find out what city you should go to next! Choose one answer for each question
     </b><br/><b> and then fill out some personal information! Happy Travel!
    </b>
    <br />
     <form action="formanswer.php" method="post">
      <p class="align" id="one"> 1. What type of person are you? <!-- one -->
        <br />
        <input type="radio" name="one" value="Check" class="check" checked />
        <label></label>
        <br />
        <input type="radio" name="one" value="Introvert" />
        <label> Introvert </label>
        <br />
        <input type="radio" name="one" value="Extrovert"  />
        <label> Extrovert </label>
        <br />
      </p>
      <p class="align" id="two"> 2. How would your friends describe you? <!-- two -->
        <br />
        <input type="radio" name="two" value="Check" class="check" checked />
        <label></label>
        <br />
        <input type="radio" name="two" value="Quiet"   />
        <label> Quiet </label>
        <br />
        <input type="radio" name="two" value="Outgoing"   />
        <label> Outgoing </label>
        <br />
        <input type="radio" name="two" value="Adventurous"   />
        <label> Adventurous </label>
        <br />
        <input type="radio" name="two" value="Laidback"   />
        <label> Laidback </label>
        <br />
      </p>
      <p class="align" id="three"> 3. What kind of shoes do you prefer to wear? <!-- three -->
        <br />
        <input type="radio" name="three" value="Check" class="check" checked />
        <label></label>
        <br />
        <input type="radio" name="three" value="Sneakers"   />
        <label> Sneakers </label>
        <br />
        <input type="radio" name="three" value="Boots"   />
        <label> Boots </label>
        <br />
        <input type="radio" name="three" value="Dress Shoes (high heels)"   />
        <label> Dress shoes (high heels) </label>
        <br />
        <input type="radio" name="three" value="Barefoot"   />
        <label> Barefoot </label>
        <br />
      </p>
      <p class="align" id="four"> 4. What house are you in? <!-- four -->
        <br />
        <input type="radio" name="four" value="Check" class="check" checked />
        <label></label>
        <br />
        <input type="radio" name="four" value="Gryffindor"   />
        <label> Gryffindor </label>
        <br />
        <input type="radio" name="four" value="Hufflepuff"   />
        <label> Hufflepuff </label>
        <br />
        <input type="radio" name="four" value="Ravenclaw"   />
        <label> Ravenclaw </label>
        <br />
        <input type="radio" name="four" value="Slytherin"   />
        <label> Slytherin </label>
        <br />
      </p>
      <p class="align" id="five"> 5. Who would you travel with? <!-- five -->
        <br />
        <input type="radio" name="five" value="Check" class="check" checked />
        <label></label>
        <br />
        <input type="radio" name="five" value="Family"   />
        <label> Family </label>
        <br />
        <input type="radio" name="five" value="Best Friend"   />
        <label> Best Friend </label>
        <br />
        <input type="radio" name="five" value="Group of Friends"   />
        <label> Group of Friends </label>
        <br />
        <input type="radio" name="five" value="Yourself"   />
        <label> Myself </label>
        <br />
      </p>
      <p class="align" id="six"> 6. Where do you like to hangout? <!-- six -->
        <br />
        <input type="radio" name="six" value="Check" class="check" checked />
        <label></label>
        <br />
        <input type="radio" name="six" value="Your room!"   />
        <label> My room! </label>
        <br />
        <input type="radio" name="six" value="The beach"   />
        <label> The beach </label>
        <br />
        <input type="radio" name="six" value="The City"   />
        <label> The city </label>
        <br />
        <input type="radio" name="six" value="In the middle of nowhere"   />
        <label> In the middle of nowhere </label>
        <br />
      </p>
      <p class="align" id="seven"> 7. What is your favorite activiy to do in your free time? <!-- seven -->
        <br />
        <input type="radio" name="seven" value="Check" class="check" checked />
        <label></label>
        <br />
        <input type="radio" name="seven" value="A sport"   />
        <label> A sport </label>
        <br />
        <input type="radio" name="seven" value="Reading"   />
        <label> Reading </label>
        <br />
        <input type="radio" name="seven" value="Watching TV"   />
        <label> Watching TV </label>
        <br />
        <input type="radio" name="seven" value="Going wherever your friends are"   />
        <label> Going wherever my friends are </label>
        <br />
      </p>
      <p class="align" id="eight"> 8. When you're with a friend, what do you do? <!-- eight -->
        <br />
        <input type="radio" name="eight" value="Check" class="check" checked />
        <label></label>
        <br />
        <input type="radio" name="eight" value="Go out somewhere"   />
        <label> Go out somewhere </label>
        <br />
        <input type="radio" name="eight" value="Stay at home and chill"   />
        <label> Stay at home and chill </label>
        <br />
        <input type="radio" name="eight" value="Eat a meal together"   />
        <label> Eat a meal together </label>
        <br />
        <input type="radio" name="eight" value="Shop"   />
        <label> Shop </label>
        <br />
      </p>
      <p class="align" id="nine"> 9. What kind of goals do you set for yourself? <!-- nine -->
        <br />
        <input type="radio" name="nine" value="Check" class="check" checked />
        <label></label>
        <br />
        <input type="radio" name="nine" value="Ambitious Goals"   />
        <label> Ambitious goals </label>
        <br />
        <input type="radio" name="nine" value="What goals? You follow where life takes you"   />
        <label> What goals? I follow where life takes me </label>
        <br />
        <input type="radio" name="nine" value="Reasonable ones that you can accomplish"   />
        <label> Reasonable ones that I can accomplish </label>
        <br />
        <input type="radio" name="nine" value="You don't set goals"   />
        <label> I just don't set goals </label>
        <br />
      </p>
      <p class="align" id="ten"> 10. What can you never leave the house without? <!-- ten -->
        <br />
        <input type="radio" name="ten" value="Check" class="check" checked />
        <label></label>
        <br />
        <input type="radio" name="ten" value="Your phone"   />
        <label> My phone </label>
        <br />
        <input type="radio" name="ten" value="A book"   />
        <label> A book </label>
        <br />
        <input type="radio" name="ten" value="Your accessories (watch, bracelets)"   />
        <label> My accessories (watch, bracelets) </label>
        <br />
        <input type="radio" name="ten" value="A notebook and pen"   />
        <label> A notebook and pen </label>
        <br />
      </p>
      <div class="personal">
      <p>
        Tell us more about yourself by filling out some personal information!
      </p>
      <p>
        (Don't worry! This is only research for ATDP Corp.)
      </p>
        <b>First Name:
  				<input type="text" name="firstname" class="name" required/>
  			</b>
  			<b>MI:
  				<input type="text" name="middleinitial" maxlength="1" class="name" id="middle" required/>
  			</b>
  			<b>Last Name:
  				<input type="text" name="lastname" class="name" required/>
  			</b>
  			<br />
  			<br />
  			<br />
  			<b>Date Of Birth: </b>
  				<b>Month
  				<select name="months">
  					<option value="blank">--</option>
  					<option value="01">January</option>
  					<option value="02">February</option>
  					<option value="03">March</option>
  					<option value="04">April</option>
  					<option value="05">May</option>
  					<option value="06">June</option>
  					<option value="07">July</option>
  					<option value="08">August</option>
  					<option value="09">September</option>
  					<option value="10">October</option>
  					<option value="11">November</option>
  					<option value="12">December</option>
  				</select>
  				</b>
  				<b>Day
  				<select name="day">
  					<option value="blank">--</option>
  					<option value="01">01</option>
  					<option value="02">02</option>
  					<option value="03">03</option>
  					<option value="04">04</option>
  					<option value="05">05</option>
  					<option value="06">06</option>
  					<option value="07">07</option>
  					<option value="08">08</option>
  					<option value="09">09</option>
  					<option value="10">10</option>
  					<option value="11">11</option>
  					<option value="12">12</option>
  					<option value="13">13</option>
  					<option value="14">14</option>
  					<option value="15">15</option>
  					<option value="16">16</option>
  					<option value="17">17</option>
  					<option value="18">18</option>
  					<option value="19">19</option>
  					<option value="20">20</option>
  					<option value="21">21</option>
  					<option value="22">22</option>
  					<option value="23">23</option>
  					<option value="24">24</option>
  					<option value="25">25</option>
  					<option value="26">26</option>
  					<option value="27">27</option>
  					<option value="28">28</option>
  					<option value="29">29</option>
  					<option value="30">30</option>
  					<option value="31">31</option>
  				</select>
  			</b>
  				<b>Year
  					<input type="number" name="year" id="year" required/>
  				</b>
  			<br />
  			<br />
  				<b>Email Address:
  					<input type="email" name="email" class="email" required/>
  				</b>
  				<p>I identify my gender as:
  					<select name="gender">
  						<option value="Other">--</option>
  						<option value="Female">Female</option>
  						<option value="Male">Male</option>
  						<option value="Intersex">Intersex</option>
  						<option value="MtFemale">MtF Female</option>
  						<option value="FtMale">FtM Male</option>
  					</select>
  				</p>
  				<br />
  				<b>Address: <input type="text" name="address" class="address" required/></b>
  				<b>City: <input type="text" name="city" class="address" required/></b>
  				<b>State: <input type="text" name="state" maxlength="2" class="address" id="state" required/></b>
  				<b>Zipcode: <input type="number" name="zipcode" class="address" id="zip" required/></b>
      </div>
      <p>
        <input id="done" type="submit" name="done" value="Done" />
      </p>
    </form>
		<h6><a href="https://atdpsites.berkeley.edu/validate/"><small>validate</small></a></h6>
	</body>
<!--</html>-->