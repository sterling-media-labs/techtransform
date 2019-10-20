<?php
$host = "localhost";
$user = "root";
$pass = "root";
$database = "techtransform";
$mysql = mysqli_connect($host, $user, $pass, $database);
date_default_timezone_set("Asia/Kolkata");
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["name"]) && !empty($_POST["name"]) && isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["phone"]) && !empty($_POST["phone"]) && isset($_POST["event"]) && !empty($_POST["event"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $event = $_POST["event"];
    $name = trim(mysqli_real_escape_string($mysql, $name));
    $email = trim(mysqli_real_escape_string($mysql, $email));
    $phone = trim(mysqli_real_escape_string($mysql, $phone));
    $event = trim(mysqli_real_escape_string($mysql, $event));
    $date = date("Y-m-d H:i:s");
    $insertQuery = "INSERT INTO participants VALUES (NULL, '$name', '$email', '$phone', '$event', CURRENT_TIMESTAMP)";
    $insertQueryExec = mysqli_query($mysql, $insertQuery);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register | TechTransform 2019 | BMS Institute of Technology & Management</title>
    <link rel="stylesheet" href="./static/css/animate.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="./meetup/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="./meetup/css/animate.css">
    <link rel="stylesheet" href="./meetup/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./meetup/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./meetup/css/magnific-popup.css">
    <link rel="stylesheet" href="./meetup/css/aos.css">
    <link rel="stylesheet" href="./meetup/css/ionicons.min.css">
    <link rel="stylesheet" href="./meetup/css/flaticon.css">
    <link rel="stylesheet" href="./meetup/css/icomoon.css">
    <link rel="stylesheet" href="./meetup/css/style.css">
    <link rel="stylesheet" href="./static/css/timelify.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="./static/css/slick.css">
</head>
<body>
    <section style="z-index: 0; height: 100%; background-image: url('./20215.jpg'); background-position: center; background-size: cover;">
        <div class="order-md-last " style="justify-content: center; width: 40%; padding-top: 60px; padding-bottom: 60px; margin: auto;">
            <form action="#" method="post" class="bg-white p-4 p-md-5" style="border-radius: 6px;  text-align: center; justify-content: center;">
            <img src="./logo.png" height="163" width="150" style="margin-bottom: 30px;" >
                <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                </div>
                <div class="form-group">
                <input type="text" name="phone" class="form-control" placeholder="Your Phone No" required>
                </div>
                <div class="form-group">
                    <select name="event"class="form-control">
                        <?php
                            $query = "SELECT * FROM events";
                            $queryExec = mysqli_query($mysql, $query);
                            while($row = mysqli_fetch_array($queryExec, MYSQLI_ASSOC)){
                                
                        ?>
                            <option value="<?php echo $row['id'] ?>"> <?php echo $row["name"]; ?> - Department of <?php echo $row["department"]; ?> </option>
                            <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                <input type="submit" value="Register" class="btn btn-primary py-3 px-5" >
                </div>
            </form>    
        </div>
    </section>
    <script src="./meetup/js/jquery.min.js"></script>
    <script src="./meetup/js/jquery-migrate-3.0.1.min.js"></script>
    <script type="text/javascript" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/TweenLite.min.js"></script>
    <script type="text/javascript" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/EasePack.min.js"></script>
    <script type="text/javascript" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/demo.js"></script>
    <script src="./meetup/js/popper.min.js"></script>
    <script src="./meetup/js/bootstrap.min.js"></script>
    <script src="./meetup/js/jquery.easing.1.3.js"></script>
    <script src="./meetup/js/jquery.waypoints.min.js"></script>
    <script src="./meetup/js/jquery.stellar.min.js"></script>
    <script src="./meetup/js/owl.carousel.min.js"></script>
    <script src="./meetup/js/jquery.magnific-popup.min.js"></script>
    <script src="./meetup/js/aos.js"></script>
    <script src="./meetup/js/jquery.animateNumber.min.js"></script>
    <script src="./meetup/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="./meetup/js/google-map.js"></script>
    <script src="./meetup/js/main.js"></script>
    <script type="text/javascript" src="./static/js/slick.js"></script>
</body>
</html>
<style type="text/css">
* {
    margin: 0;
    padding: 0;
}
</style>