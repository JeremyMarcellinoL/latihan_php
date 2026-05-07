<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
<body>

<form class="w3-container w3-card-4" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  <h2 class="w3-text-blue">Input Form</h2>
  <p>Input Name and Study Program.</p>
  <p>      
  <label class="w3-text-blue"><b>Name</b></label>
  <input class="w3-input w3-border" name="name" type="text"></p>
  <p>      
  <label class="w3-text-blue"><b>Study Program</b></label>
  <input class="w3-input w3-border" name="study_program" type="text"></p>
  <p>      
  <button class="w3-btn w3-blue" type="submit">Submit</button></p>
</form>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $study_program = $_POST["study_program"];

    if (empty($name) || empty($study_program)){
?>

<div class="w3-panel w3-pale-red w3-leftbar w3-border-red">
  <p>You need to complete all the input before Submit</p>
</div>

<?php
    } else{
?>

<div class="w3-panel w3-pale-green w3-leftbar w3-border-green">
  <p>Hello, <?php echo $_POST['name']; ?>, you are from <?php echo $_POST['study_program'];?>
</div>

<?php }
  }
  ?>
  </p>
  </div>
  
</body>
</html> 
