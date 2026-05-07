<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
<body>

<form class="w3-container w3-card-4" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  <h2 class="w3-text-green">Food Delivery</h2>
  <p>      
  <label class="w3-text-green"><b>Name</b></label>
  <input class="w3-input w3-border" name="name" type="text" placeholder="Input your name !"></p>
  <p>      
  <label class="w3-text-green"><b>Food & Beverages</b></label>
  <p>
  <input class="w3-check" type="checkbox" name="fnb[]" value="140000" checked="checked">
  <label>Pizza @140k</label></p>
  <p>
  <input class="w3-check" type="checkbox" name="fnb[]" value="40000">
  <label>Burger @40k</label></p>
  <p>
  <input class="w3-check" type="checkbox" name="fnb[]" value="20000">
  <label>Potato Chips @20k</label></p>
  </p>
  <p>
  <input class="w3-check" type="checkbox" name="fnb[]" value="90000">
  <label>Sushi @90k</label></p>
  <p>
  <input class="w3-check" type="checkbox" name="fnb[]" value="25000">
  <label>Milk Tea @25k</label></p>
  <p>      
  <label class="w3-text-green"><b>Payment</b></label>
  </p>
  <input class="w3-radio" type="radio" name="payment" value="cash">
  <label>Cash</label></p>
  <p>
  <input class="w3-radio" type="radio" name="payment" value="transfer">
  <label>Transfer</label></p>
  <p>
  <input class="w3-radio" type="radio" name="payment" value="" disabled>
  <label>QRIS (Coming Soon)</label></p>
  <p>      
  <button class="w3-btn w3-green" type="submit">Submit</button>
  </p>
</form>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST["name"]) ? $_POST["name"] : "";
    $fnb = isset($_POST["fnb"]) ? $_POST["fnb"] : [];
    $payment = isset($_POST["payment"]) ? $_POST["payment"] : "";

    if (empty($name) || empty($fnb) || empty($payment)){
?>

<div class="w3-panel w3-pale-red w3-leftbar w3-border-red">
  <p>You need to complete all the input before Submit</p>
</div>

<?php
    } else{
      $total = array_sum($fnb);
?>

<div class="w3-panel w3-pale-green w3-leftbar w3-border-green">
  <p>Hello, <?php echo $_POST['name']; ?>, your total order is: <?php echo $total; ?>,- (<?php echo htmlspecialchars($payment); ?>)</p>
  <?php ?>
  
</div>

<?php }
  }
  ?>
</body>
</html> 
