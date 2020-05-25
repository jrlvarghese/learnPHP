<?php
    // for showing the name in page
    //echo $_POST['firstName'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>User profile</title>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>

<body>
    <div class='w3-container w3-margin w3-padding'>
        <h2>User profile</h2>
        <h3><?php echo $firstName.' '; echo $lastName;?></h3>
        <ul>
            <li>Email: <?php echo $email; ?></li>
            <li>Gender: <?php echo $gender; ?></li>
        </ul>
    </div>
</body>
</html>