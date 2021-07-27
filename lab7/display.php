<?php
if(isset($_POST['submit'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $c_email = $_POST['c_email'];
    $password = $_POST['password'];
    $c_password = $_POST['c_password'];
    $security_question = $_POST['security_question'];
    $security_answer = $_POST['security_answer'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip_code = $_POST['zip_code'];
    $phone = $_POST['phone'];
    $phone_type = $_POST['phone_type'];
?>

<html>
<body>
    <table border=1>
        <tr>
            <td colspan="4"><center><h1>Personal Information</h1></center></td>
        </tr>
        <tr>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Date of Birth</td>
            <td>Gender</td>
        </tr>
        <tr>
            <td><?= $first_name; ?></td>
            <td><?= $last_name; ?></td>
            <td><?= $dob; ?></td>
            <td><?= $gender; ?></td>
        </tr>
    </table>
    <br>
    <br>
    <br>
    <table border=1>
        <tr>
            <td colspan="6"><center><h1>Account Information</h1></center></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>Re-type Email</td>
            <td>Password</td>
            <td>Re-type Password</td>
            <td>Security Question</td>
            <td>Security Answer</td>
        </tr>
        <tr>
            <td><?= $email; ?></td>
            <td><?= $c_email; ?></td>
            <td><?= $password; ?></td>
            <td><?= $c_password; ?></td>
            <td><?= $security_question; ?></td>
            <td><?= $security_answer; ?></td>
        </tr>
    </table>
    <br>
    <br>
    <br>
    <table border=1>
    <tr>
            <td colspan="6"><center><h1>Contact Information</h1></center></td>
        </tr>
        <tr>
            <td>Address</td>
            <td>City</td>
            <td>State</td>
            <td>Zip Code</td>
            <td>Phone Number</td>
            <td>Phone Type</td>
        </tr>
        <tr>
            <td><?= $address; ?></td>
            <td><?= $city; ?></td>
            <td><?= $state; ?></td>
            <td><?= $zip_code; ?></td>
            <td><?= $phone; ?></td>
            <td><?= $phone_type; ?></td>
        </tr>
    </table>
<?php } ?>
</body>
</html>
