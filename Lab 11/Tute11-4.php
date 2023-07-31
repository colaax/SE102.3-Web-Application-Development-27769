<html>
<body>
<form action=" " method="post">
<label>
 Enter a number
</label>
<input type="text" name="number">
<input type="submit" name="submit">
</form>
<?php
if(isset($_POST['submit'])) {
$number= (int) $_POST['number'];
switch($number)
{
    case 1:
        echo ("Today is Monday");
        break;
    case 2:
        echo ("Today is Monday");
        break;
    case 3:
        echo ("Today is Monday");
        break;
    case 4:
        echo ("Today is Monday");
        break;
    case 5:
        echo ("Today is Monday");
        break;
    case 6:
        echo ("Today is Monday");
        break;
    case 7:
        echo ("Today is Monday");
        break;
    default:
        echo "No information available for that day.";
}
}
?>
</body>
</html>