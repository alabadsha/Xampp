<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="p-4">

  <div class="container">
    <h3>Item Counter</h3>

    <form action="index.php" method="POST">

      <div class="form-group">
        <label>Amount</label>
        <input type="number" name="Amount">
      </div>
      <div class="form-group">
        <label>buget</label>
        <input type="number" name="buget">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  <div class="container py-2">
    <h2>
      The Discount is 30%!
    </h2>
  </div>

  <div class="container">
    <div class="fluid-container">
      <a href="login.php">Login</a>
    </div>
  </div>
</body>

</html>
<?php

$amount = $_POST['Amount'];
$buget = $_POST['buget'];
$price = 100;
$dis = .30;
$total = $amount * $price;
$discount = $total - ($total * $dis);
$total_left = null;
echo "\tThe total will be about \${$total} <br>";
echo "After discout it will be \${$discount}";

if ($buget >= $discount) {
  echo "<br>Your buget is \$$buget. You can buy the item!";
} else {
  echo "<br>Your buget is \$$buget. You cannot buy this item...";
}

$total_left = $buget - $discount;

echo "<br>The Buget left is \$$total_left.";
if ($total_left >= $discount) {
  echo "\tYou can Buy more Items!";
} else {
  echo "\tIts not enough to Buy more Items.";
}



?>