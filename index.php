
<!DOCTYPE html>
<html>
<head>
    <title>Register form</title>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>

<body>
    <div class="w3-card w3-margin w3-padding">
        <h2>Register</h2>
        <form class="w3-container" method="POST" action="register.php">
            <label class="w3-label w3-text-blue">First Name</label>
            <input class="w3-input w3-border" type="text" name="firstName">
            <br>

            <label class="w3-label w3-text-blue">Last Name</label>
            <input class="w3-input w3-border" type="text" name="lastName">
            <br>

            <label class="w3-label w3-text-blue">Email id</label>
            <input class="w3-input w3-border" type="text" name="email">
            <br>

            <label class="w3-label w3-text-blue">Gender</label>
            <select class="w3-input w3-border" name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="notspecified">Not specified</option>
            </select>
            <br>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>