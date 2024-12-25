<?php
$counterFile="counter.txt";
if(!file_exists($counterFile)){
    file_put_contents($counterFile,"0");
}
$currC=file_get_contents($counterFile);
$newC=$currC+1;
file_put_contents($counterFile,$newC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counter</title>
</head>
<body>
    <h1>Counter</h1>
    <div>
        <p>Your visitor number is <strong><?php echo $newC ; ?></strong></p>
    </div>
</body>
</html>