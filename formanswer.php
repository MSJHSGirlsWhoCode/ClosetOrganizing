<!DOCTYPE html>
<html lang="en-US">
	<head>
		<title> What's Your Perfect Vacation City? </title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<link rel="stylesheet" type="text/css" href="/klee/aic/v04b/vacationcityv04b.css">
	</head>
	<body>
    <br />
    <br />
    <img src="atdplogo.png" alt="ATDP CORP LOGO" id="logo"/>
    <?php
    printHeader();

    echo "<h2>Here are your results to your quiz! What city should YOU visit? </h2>";

    $two = $_POST["two"];

   if($two == "Laidback" && $six == "The beach"){
      echo "<h3> You should visit Honolulu, Oahu! </h3>";
    }
    elseif($two == "Adventurous"){
      echo "<h3> You should visit Barcelona, Spain! </h3>";
    }
    else{
      echo "<h3>You should have a staycation! No need to travel to find your perfect vacation city. </h3>";
    }
    ?>
    <br />
    <?php
    echo "Here are your results that you chose!";
    ?>
    <br />
    <br />
    <?php
    //one
    $one = $_POST["one"];
    echo "What type of person are you: ";
    if ($one == "Introvert" || $one == "Extrovert") {
      echo htmlspecialchars($one);
    }
    else{
        echo "No Type Chosen";
    }
    ?>
    <br />
    <br />
    <?php
    //two
    $two = $_POST["two"];
    echo "How your friends describe you: ";
    if (filter_var($_POST['two'], FILTER_VALIDATE_BOOLEAN) !== false) {
      echo htmlspecialchars($two);
    }
    else{
        echo "No Type Chosen";
    }
    ?>
    <br />
    <br />
    <?php
    //three
    echo "What kind of shoes you prefer to wear: ";
    if (filter_var($_POST['three'], FILTER_VALIDATE_BOOLEAN) !== false) {
      echo htmlspecialchars($three);
    }
    else{
        echo "No Type Chosen";
    }
    ?>
    <br />
    <br />
    <?php
//four
    echo "What house you are in: ";
    if (filter_var($_POST['four'], FILTER_VALIDATE_BOOLEAN) !== false) {
      echo htmlspecialchars($four);
    }
    else{
        echo "No Type Chosen";
    }
    ?>
    <br />
    <br />
    <?php
//five
    echo "Who you would travel with: ";
    if (filter_var($_POST['five'], FILTER_VALIDATE_BOOLEAN) !== false){
      echo htmlspecialchars($five);
    }
    else {
      echo "No Type Chosen";
    }
    ?>
    <br />
    <br />
    <?php
//six
    echo "Where you like to hangout: ";
    if (filter_var($_POST['six'], FILTER_VALIDATE_BOOLEAN) !== false){
      echo htmlspecialchars($six);
    }
    else {
      echo "No Type Chosen";
    }
    ?>
    <br />
    <br />
    <?php
//seven
    echo "What your favorite activiy to do in your free time is: ";
    if (filter_var($_POST['seven'], FILTER_VALIDATE_BOOLEAN) !== false){
      echo htmlspecialchars($seven);
    }
    else {
      echo "No Type Chosen";
    }
    ?>
    <br />
    <br />
    <?php
//eight
    echo "What you do when you're with a friend: ";
    if (filter_var($_POST['eight'], FILTER_VALIDATE_BOOLEAN) !== false){
      echo htmlspecialchars($eight);
    }
    else {
      echo "No Type Chosen";
    }
    ?>
    <br />
    <br />
    <?php
    //nine
    echo "What kind of goals you set for yourself: ";
    if (filter_var($_POST['nine'], FILTER_VALIDATE_BOOLEAN) !== false){
      echo htmlspecialchars($nine);
    }
    else {
      echo "No Type Chosen";
    }
    ?>
    <br />
    <br />
    <?php
//ten
    echo "What you can never leave the house without: ";
    if (filter_var($_POST['ten'], FILTER_VALIDATE_BOOLEAN) !== false){
      echo htmlspecialchars($ten);
    }
    else {
      echo "No Type Chosen";
    }
     ?>
     <br />
     <br />
     <br />
     <h3> Personal Information </h3>
     <?php
     echo "Name: ";
     $first = $_POST["firstname"];
     echo htmlspecialchars($first);
     //middle initial
     echo "   MI: ";
     $middle = $_POST["middleinitial"];
     echo htmlspecialchars($middle);
     //last name
     echo "   Last Name: ";
     $last = $_POST["lastname"];
     echo htmlspecialchars($last);
     ?>
     <br />
     <br />
     <?php
     //DOB
     echo  "Date Of Birth: ";
     $month = $_POST["months"];
     $day = $_POST["day"];
     $year = $_POST["year"];
     echo "{$month}/{$day}/{$year}";
     ?>
     <br />
     <br />
     <?php
     //Gender
     $gender = $_POST["gender"];
     echo "Gender: {$gender}";
     ?>
     <br />
     <br />
     <?php
     //email
     $email = $_POST["email"];
     echo "Email: {$email}";
     ?>
     <br />
     <br />
     <?php
     //address
     $address = $_POST["address"];
     $city = $_POST["city"];
     $state = $_POST["state"];
     $zipcode = $_POST["zipcode"];

     echo "Address: {$address}, {$city}, {$state}, {$zipcode}";
      ?>
	</body>
</html>
