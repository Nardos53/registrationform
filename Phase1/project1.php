<!DOCTYPE html>
<html>
    <head>
        <title>Registration Form</title>
        <link rel="stylesheet" href="pro.css" type="text/css"> 
    </head>
    <body>
        <div class="main">
            <div class="register">
                <h2>Register Here</h2>
                <form  id="register" method="post" action="connect.php">
                    <label>First Name : </label>
                    <br>
                    <input type="text" name="fname" id="name" placeholder="Enter your first name">
                    <br><br>
                    <label> Last Name : </label>
                    <br>
                    <input type="text" name="lname" id="name" placeholder="Enter your Last name">
                    <br><br>
                    <label>Your Age : </label>
                    <br>
                    <input type="number" name="age" id="name" placeholder="How old are you?">
                    <br><br>
                    <label>Email : </label>
                    <br>
                    <input type="email" name="email" id="name" placeholder="Enter your valid Email">
                    <br><br>
                    <label>Gender :</label>
                    <br>
                    &nbsp; &nbsp; &nbsp;
                    <input type="radio" name="gender" id="male" value="m">
                    &nbsp;
                    <span id="male">Male</span>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gender" id="female" value="f">
                    &nbsp;
                    <span id="female">Female</span>
                    <br><br>
                    <input type="submit" value="Submit" name="submit" id="submit">
                </form>
            </div><!--end register-->
        </div><!--end main-->
    </body>
</html>
