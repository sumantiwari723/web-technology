<html>
<body>
<form action="display.php" method="post">
<div>
    <span><h1>Personal Information</h1></span>
    <div>
        <b><label>First Name:</label></b>
        <input type="text" name="first_name" size="60" required>
    </div>
    <br>
    <div>
        <b><label>Last Name:</label></b>
        <input type="text" name="last_name" size="60" required>
    </div>
    <br>
    <div>
        <b><label>Date of Birth:</label></b>
        <input type="date" name="dob" size="20" required>
    </div>
    <br>
    <div>
       <b> <label>Gender:</label></b>
       <select name="gender" required>
       <option value="">Choose a Gender</option>
       <option value="male">Male</option>
       <option value="female">Female</option>
       </select>
    </div>
</div>
<br>
<div>
    <span><h1>Account Information</h1></span>
    <div>
        <b><label>Email:</label></b>
        <input type="email" name="email" size="60" required><br>
        (Your email address will be your username)<br>
    </div>
    <br>
    <div>
        <b><label>Re-type Email:</label></b>
        <input type="email" name="c_email" size="60" required>
    </div>
    <br>
    <div>
       <b> <label>Password:</label></b>
        <input type="password" name="password" size="60" required><br>
        (Min 8 characters,1 number,cas-sensitive)<br>
    </div>
    <br>
    <div>
        <b><label>Re-type Password:</label></b>
        <input type="password" name="c_password" size="60" required>
    </div><br>
    <div>
        <b><label>Secutity Question:</label></b>
        <select name="security_question">
    <option selected>Choose a security question</option>
    <option>What's your first pet's name?</option>
    <option>How old were you a year ago?</option>
        </select>
    </div>
    <br>
    <div>
       <b> <label>Secutity Answer:</label></b>
        <input type="text" name="security_answer" size="60" required><br>
        (Not case-sensitive)<br>
    </div>
    <br>
</div>
<div>
    <span><h1>Contact Information</h1></span>
    <div>
        <b><label>Address:</label></b>
        <input type="text" name="address" size="60" required>
    </div>
    <br>
    <div>
        <b><label>City:</label></b>
        <input type="text" name="city" size="60" required>
    </div>
    <br>
    <div>
        <b><label>State:</label></b>
       <select name="state" required>
       <option value="">Select a state</option>
       <option value="1">1</option>
       <option value="2">2</option>
       <option value="1">3</option>
       <option value="2">4</option>
       <option value="1">5</option>
       <option value="2">6</option>
       </select>
    </div>
    <br>
    <div>
        <b><label>Zip Code:</label></b>
        <input type="number" size="15" name="zip_code">
        <input type="number" placeholder="Optional">
        <br>  
    </div>
    <br>
    <div>
        <b><label>Phone Number:</label></b>
        <input type="number" name="phone" required>
        <select name="phone_type" required>
       <option value="mobile">Mobile</option>
       <option value="phone">Telephone</option>
       </select><br>
       (No spaces or dashes)<br>
    </div>
    <br>
    <div>
        <b><input type="submit" value="Save" name="submit"></b>
    </div>
</div>
</form>
</body>
</html>
