<html>
<body>
<form action=" " method="post">
<label>
 Enter a number
</label>
<input type="text" name="units">
<input type="submit" name="submit">
</form>
<?php
if(isset($_POST['submit'])) {
$units= (int) $_POST['units'];
function calculateElectricityBill($units) {
    if ($units <= 50) {
        $bill = $units * 3.50;
    } elseif ($units <= 100) {
        $bill = 50 * 3.50 + ($units - 50) * 4.00;
    } elseif ($units <= 150) {
        $bill = 50 * 3.50 + 50 * 4.00 + ($units - 100) * 5.20;
    } else {
        $bill = 50 * 3.50 + 50 * 4.00 + 50 * 5.20 + ($units - 150) * 6.50;
    }
    return $bill;
}
}
$unitsConsumed = $units;
$billAmount = calculateElectricityBill($unitsConsumed);
echo "Electricity Bill for $unitsConsumed units: Rs. $billAmount";
?>
</body>
</html>