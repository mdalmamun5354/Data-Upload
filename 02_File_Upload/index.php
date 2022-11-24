<!DOCTYPE html>
<html>
    <?php include("head.php"); ?>
    <body>
        <?php include("header.php"); ?>
        <section class="main_sec">
            <div class="main_area">
                <div class="main_con">
                    <form class="left" action="programs.php" method="post" enctype="multipart/form-data">
                        <p>Full Name: <input style="width: 180px; color: rgba(0, 0, 0, 0.661);" class="a" type="text" name="Name" id="name" required placeholder="Md. Al-Mamun"></p>
                        <p>Last Name: <input style="width: 175px; color: rgba(0, 0, 0, 0.661);" class="a" type="text" name="Last_Name" id="last_name" placeholder="Mamun"></p>
                        <p>Date Of Birth: <input style="width: 145px; color: rgba(0, 0, 0, 0.661);" class="a" type="date" name="Date_Of_Birth" id="date_of_birth"></p>
                        <p>Contact No: <input style="width: 168px; color: rgba(0, 0, 0, 0.661);" class="a" type="number" name="Contact_No" id="contact_no" placeholder="0179603****"></p>
                        <p>Email ID: <input style="width: 195px; color: rgba(0, 0, 0, 0.661);" class="a" type="email" name="Email" id="email" required placeholder="mdalmamun5354@gmail.com"></p>
                        <p>Email Password: <input style="width: 120px; color: rgba(0, 0, 0, 0.661);" class="a" type="password" name="Password" id="password" required placeholder="********"></p>
                        <legend>Gender:</legend>
                            <p class="gender_p"><input class="a" type="radio" name="Gender" id="gemder" value="male">Male &nbsp;&nbsp;&nbsp;&nbsp;<input class="a" type="radio" name="Gender" id="gender"value="male">Female</p>

                        <p>Profile Pic: <input type="file" name="image"></p>
                        <p><input class="submit" type="submit" name="Submit" id="submit" value="Join"></p>
                    </form>
                    <div class="right">
                        <img src="img/Login Pag Side Image3.jpg" width="900px">
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>