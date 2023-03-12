<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="styles.css" />

<head>
</head>

<body>
    <form action="login.php" method="POST" ><!-- onsubmit="return validateForm()" -->
        <!-- <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name">
        </div> -->
        <!-- <div class="form-group">
            <label for="surname">Surname:</label>
            <input type="text" class="form-control" id="surname" placeholder="Enter Surname">
        </div> -->
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" name="uname" class="form-control" id="username" placeholder="Enter username">
        </div>
        <!-- <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" >
        </div> -->
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
        </div><br>
        <!-- <div class="form-group">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender">
                <option value="">Please select gender</option>
                <option value="M">Male</option>
                <option value="F">Female</option>
                <option value="A">Rather not say!</option>
            </select>
        </div><br> -->

        <!-- <div class="form-group">
            <label for="city">City:</label>
            <select id="city" name="city">
                <option value="">Please select a city</option>
                <option value="PR">Prishtine</option>
                <option value="PZ">Prizren</option>
                <option value="GJK">Gjakove</option>
                <option value="Mitro">Mitrovice</option>
                <option value="PJ">Peje</option>
            </select>
        </div> -->
        <br>
        <!-- onClick="validateForm()" -->
        <button type="submit" class="btn btn-primary" >Submit</button>
    </form>
    
    <!-- <script src="mains.js"></script> -->
</body>

</html>
