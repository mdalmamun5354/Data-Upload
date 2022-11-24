
<?php
// error_reporting(0);

$fullName = $_POST["Name"];
$lastName = $_POST["Last_Name"];
$birthDay = $_POST["Date_Of_Birth"];
$contactNo = $_POST["Contact_No"];
$email = $_POST["Email"];
$password = $_POST["Password"];
$gender = $_POST["Gender"];
$button = $_POST["Submit"];

$fileName = $_FILES["image"]["name"];
$fileType = $_FILES["image"]["type"];
$fileTmpName = $_FILES["image"]["tmp_name"];
$fileSize = $_FILES["image"]["size"];

if(isset($button)) {
    $userInfo = "Full Name: ". $fullName ."\nLast Name: ". $lastName ."\nBirth Day: ". $birthDay ."\nContact No: ". $contactNo ."\nEmail: ". $email ."\nPassword: ". $password ."\nGender: ". $gender;
    
    if ( !file_exists("userInfo/". $fullName) && !is_dir("userInfo/". $fullName) ) {
        mkdir("userInfo/". $fullName);       
    } 
    $myFile = fopen("userInfo/". $fullName . "/info.txt", "w+");
    fwrite($myFile, $userInfo);
    move_uploaded_file($fileTmpName, "userInfo/". $fullName . "/" . $fileName);
    fclose($myFile);
    
    
    // echo "<br>Full Name: ". $fullName . " <br>";
    // echo "Last Name:". $lastName . " <br>";
    // echo "Birth Day:". $birthDay . " <br>";
    // echo "Contact No:". $contactNo . " <br>";
    // echo "Email:". $email . " <br>";
    // echo "Gender:". $gender . " <br>";
    
    
    // echo "<pre>";
    // print_r($_POST);
    // echo "<br>";
    // print_r($_FILES);
    // echo "<br>";
    // print_r(getimagesize($fileTmpName));
    // echo "</pre>";
}
?>
<!DOCTYPE html>
<html>
    <?php include("head.php"); ?>
    <body>
        <?php include("header.php"); ?>
        <section class="main_sec">
            <div class="main_area">
                <div class="main_con">
                    <form class="left" style="padding-top: 0px;">
                        <?php 
                        echo "<h4>";
                        echo "<br>User Info: <br>";
                        echo "</h4>";
                    
                        $imgSrc = "userInfo/". $fullName . "/" . $fileName;
                        echo "<img src=\"".$imgSrc . "\"  width=\"200px\" style=\"margin-left: 20px;\">";
                    
                        $newFile = fopen("userInfo/". $fullName . "/info.txt", "r");
                        echo "<ul style=\"font-size: 18px;\">";
                        while(! feof($newFile)) {
                            echo "<li>";
                            echo fgets($newFile) . "<br>";
                            echo "</li>";
                        }
                        echo "</ul>";
                        fclose($newFile);
                        ?>
                        <p><a class="submit" href="index.php">Ok/Back</a></p>
                    </form>
                    <div class="right">
                        <img src="img/Login Pag Side Image3.jpg" width="900px">
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>