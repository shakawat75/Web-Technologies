<html>

<body>
 

<?php $name = $email = $gender = $ssc = $hsc = $bsc = $msc = $bg = "";
$dd = $mm = $yyyy = "";
$name_err = $email_err = $db_err =  $gender_err = $degree_err = $bg_err = ""; 
$EmptyArr = [];$degree = [];
$count = 0; 

 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
	 
  if (empty($_POST["pname"])) {
    $name_err = "Name is required";
  } else {
    $name = test_input($_POST["pname"]);
	$EmptyArr = str_word_count($name);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z- ]*$/",$name) || $EmptyArr<2) {
      $name_err = "Only can contain whitespace,period,dash and alphabetic letter. Name must be consits of at least two words";
      $name = "";
    }
  }
 
 
 if (empty($_POST["pemail"])) {
    $email_err = "Email is required";
  } else {
    $email = test_input($_POST["pemail"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_err = "Invalid email format";
      $email = "";
    }
  }
  if(empty($_POST["dd"])||empty($_POST["mm"])||empty($_POST["yyyy"]))
	  $db_err = "Date of birth required";
  else{
	  $dd = test_input($_POST["dd"]);$mm = test_input($_POST["mm"]); $yyyy = test_input($_POST["yyyy"]);
	  $dd_err = "";
	  if(!ereg("[1-31]",(int)$dd) || !ereg("[1-12]",(int)$mm) || !ereg("[1953-1998]",(int)$yyyy))
	  {$db_err = "Invalid Date";
		$dd = $mm = $yyyy = "";}
  }
  
  if(empty($_POST["gender"]))
	  $gender_err = "Gender Required";
  else
	  $gender = test_input($_POST["gender"]);
  
	if(empty($_POST["check"])||count($_POST["check"])<2)
		$degree_err = "degree required(at least two)";
	else
	{
		$degree_err = "";
	    $degree = $_POST["check"];
	}
	
	if(empty($_POST['BG']))
		$bg_err = "Blood Group Required";
	else{
		$bg_err = " ";
		$bg = $_POST['BG'];
	}
		
  
	  
  }
  
 
 
 function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
  
  ?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 <fieldset style="margin-left:300px;width:300px; height:120px">
  <legend><b>NAME</b></legend>
  <input type="text" name ="pname" value="">
  <hr/>
  <?php echo "$name_err";?>
 </fieldset>
 
 <fieldset style="margin-left:300px;width:300px; height:120px">
  <legend><b>EMAIL</b></legend>
  <input type="text" name="pemail" value="">
  <hr/>
  <?php echo "$email_err";?>
 </fieldset>
 
 <fieldset style="margin-left:300px;width:300px; height:120px">
  <legend><b>DATE OF BIRTH</b></legend>
  <label> &nbsp  dd &nbsp &nbsp </label> <label> &nbsp &nbsp &nbsp  mm &nbsp &nbsp </label><label>  &nbsp yyyy &nbsp &nbsp </label><br>
  <input style="width:35px;height:15px"type="text" name="dd"><span> &nbsp / &nbsp</span><input style="width:35px;height:15px" type="text" name="mm"><span>&nbsp / &nbsp</span><input style="width:35px;height:15px" type="text" name="yyyy">
  
  <hr/>
  <?php echo "$db_err";?>
 </fieldset>
 
 <fieldset style="margin-left:300px;width:300px; height:120px">
  <legend><b>GENDER</b></legend>
  <input type="radio" id="male" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?>value="male" >Male &nbsp &nbsp <input type="radio" id="female" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?>value = "female">Female &nbsp &nbsp <input type="radio" id="other" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?>value="other">Other
  <hr/>
  <?php echo "$gender_err";?>
 </fieldset>
 
 <fieldset style="margin-left:300px;width:300px; height:120px">
  <legend><b>DEGREE</b></legend>
  <input type="checkbox"  name="check[]" value = "ssc">SSC &nbsp 
  <input type="checkbox"  name="check[]" value = "hsc">HSC &nbsp 
  <input type="checkbox"  name="check[]" value = "bsc" >BSc &nbsp 
  <input type="checkbox"  name="check[]" value = "msc" >MSc
  

  <hr/>
  <?php echo "$degree_err";?>
 </fieldset>
 
 <fieldset style="margin-left:300px;width:300px; height:120px">
  <legend><b>BLOOD GROUP</b></legend>
  <select name="BG" >
  <option value="">Select One</option>
  <option value="A+">A+</option>
  <option value="B+">B+</option>
  <option value="AB+">AB+</option>
  <option value="O+">O+</option>
  <option value="A-">A-</option>
  <option value="B-">B-</option>
  <option value="AB-">AB-</option>
  <option value="O-">O-</option>
  </select>

  <hr/>
  <?php echo "$bg_err";?>
  <br>
  <input type="submit">
 </fieldset>
 </form>
 
 <?php
echo "<h2>Your Input:</h2>";
echo "<b>Name:</b>$name";
echo "<br>";
echo "<b>Email:</b>$email";
echo "<br>";
echo "<b>DOB:</b>";
if($dd !=0  && $mm!= 0 && $yyyy!=0)
echo "$dd $mm $yyyy";
echo "<br>";
echo "<b>Gender:</b>$gender";
echo "<br>";
echo "<b>Blood Group:</b>$bg<br>";
echo "<b>Degree:</b>";
foreach($degree as $val)
{
	echo "$val<br>";
}
?>

  

 </body>
 </html>
 
 
  
