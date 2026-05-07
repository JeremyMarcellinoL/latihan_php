<!DOCTYPE html>
<html>
<head>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
</head>
<body>

<form class="w3-container w3-card-4" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  <h2 class="w3-text-green">Food Delivery</h2>
  
  <p>      
  <label class="w3-text-green"><b>Name</b></label>
  <input class="w3-input w3-border" name="name" type="text" placeholder="Input your name !">
  </p>
  
  <p>      
  <label class="w3-text-green"><b>Food & Beverages</b></label>
  </p>
  <p>
  <!-- Tambahkan name="fnb[]" dan value harganya -->
  <input class="w3-check" type="checkbox" name="fnb[]" value="50000">
  <label>Pizza @50K</label></p>
  <p>
  <input class="w3-check" type="checkbox" name="fnb[]" value="40000">
  <label>Burger @40K</label></p>
  <p>
  <input class="w3-check" type="checkbox" name="fnb[]" value="20000">
  <label>Potato Chips @20K</label></p>
  
  <p>      
  <label class="w3-text-green"><b>Payment Type</b></label>
  </p>
  <p>
  <input class="w3-radio" type="radio" name="payment" value="cash">
  <label>Cash</label></p>
  <p>
  <input class="w3-radio" type="radio" name="payment" value="debit card">
  <label>Debit Card</label></p>
  
  <p>      
  <button class="w3-btn w3-green" type="submit">Submit</button>
  </p>
</form>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    // Gunakan isset untuk mencegah error jika checkbox/radio tidak diisi
    $fnb = isset($_POST["fnb"]) ? $_POST["fnb"] : [];
    $payment = isset($_POST["payment"]) ? $_POST["payment"] : "";

    // Cek apakah ada input yang kosong
    if (empty($name) || empty($fnb) || empty($payment)){
?>

<div class="w3-panel w3-pale-red w3-leftbar w3-border-red">
  <p>You need to complete all the input before Submit</p>
</div>

<?php
    } else {
      // Menjumlahkan semua harga makanan yang dipilih di dalam array fnb
      $total = array_sum($fnb);
?>

<div class="w3-panel w3-pale-green w3-leftbar w3-border-green">
  <!-- Menampilkan output sesuai format di gambar -->
  <p>hello, <?php echo htmlspecialchars($name); ?>, Your Total Order Rp. <?php echo $total; ?>,- (<?php echo htmlspecialchars($payment); ?>)</p>
</div>

<?php 
    }
  }
?>

</body>
</html>