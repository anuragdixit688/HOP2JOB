<?php


$server = 'localhost';
$username = 'root';
$password = '';
$database = 'hop2job';

$conn = mysqli_connect($server, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

if (isset($_POST['Submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $pwd = $_POST['pwd'];

    $sql = "INSERT INTO `register`(`name`, `email`, `number`, `pwd`) VALUES ('$name','$email','$number','$pwd')";

    if (mysqli_query($conn, $sql)) {
        header("location:login.php");
    } else {
        echo "Error: Could not able to execute $sql" . mysqli_error($conn);
    }
}

session_start();
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $query = "SELECT * FROM register WHERE `email`='$email' AND `pwd`='$pwd'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if (mysqli_num_rows($result) == 1) {
        header("location:index.php");
    } else {
        $error = "emailid or password is incorrect";
    }

}
if (isset($_POST['sub'])) {
    $company = $_POST['company'];
    $position = $_POST['position'];
    $rolres = $_POST['rolres'];
    $skills = $_POST['skills'];
    $CTC = $_POST['CTC'];

    $sql = "INSERT INTO `job`(`company`, `position`, `rolres`, `skills`, `CTC`) VALUES ('$company','$position','$rolres','$skills','$CTC')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
        alert('New Job Posted');
      </script>";
    } else {
        echo "Error: Could not able to execute $sql" . mysqli_error($conn);
    }
}
if (isset($_POST['applycand'])) {
    $funame = $_POST['funame'];
    $email = $_POST['email'];
    $hq = $_POST['hq'];
    $cmp = $_POST['cmp'];
    $prof = $_POST['prof'];
    $msg = $_POST['msg'];

    $sql = "INSERT INTO `applied`(`name`, `email`, `hq`, `cmpny`, `prof`, `msg`) VALUES ('$funame','$email','$hq','$cmp','$prof','$msg')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
        alert('Your request has been submitted.');
      </script>";
    } else {
        echo "Error: Could not able to execute $sql" . mysqli_error($conn);
    }
}
if (isset($_POST['profile'])) {
    $fname = $_POST['fname'];
    $cont = $_POST['cont'];
    $hqual = $_POST['hqual'];
    $skil = $_POST['skil'];
    $ctc = $_POST['ctc'];

    $sql = "INSERT INTO `candidates`(`fname`, `cont`, `hqual`, `skil`, `ctc`) VALUES ('$fname','$cont','$hqual','$skil','$ctc')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
        alert('Profile Submitted');
      </script>";
    } else {
        echo "Error: Could not able to execute $sql" . mysqli_error($conn);
    }
}
if (isset($_POST['cont'])) {
    $email = $_POST['email'];
    $sql = "INSERT INTO `contact`(`email`) VALUES ('$email')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>
        alert('Your query has been sent successfully!!');
      </script>";
    } else {
        echo "Error: Could not able to execute $sql" . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>