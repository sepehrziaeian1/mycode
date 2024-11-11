<html>
<head>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo "پسورد: " . htmlspecialchars($password) . "<br>";
    echo "نام: " . htmlspecialchars($name) . "<br>";
    echo "نام خانوادگی: " . htmlspecialchars($lastname) . "<br>";
    echo "نام کاربری: " . htmlspecialchars($username) . "<br>";
}
?>
<script>
function validateForm() {
    let password = document.getElementById('password').value;
    let name = document.getElementById('name').value;
            let lastname = document.getElementById('lastname').value;
            let username = document.getElementById('username').value;
            let errorMessages = [];
            if (name.trim() == "") {
                errorMessages.push("نام نمی‌تواند خالی باشد.");
            }

            // بررسی نام خانوادگی
            if (lastname.trim() == "") {
                errorMessages.push("نام خانوادگی نمی‌تواند خالی باشد.");
            }

            // بررسی نام کاربری
            if (username.trim() == "") {
                errorMessages.push("نام کاربری نمی‌تواند خالی باشد.");
            }
            const passwordRegex = /^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*(),.?":{}|<>]).{6,}$/;
            if (!passwordRegex.test(password)) {
                errorMessages.push("پسورد باید شامل حداقل یک حرف بزرگ، یک عدد، یک نماد خاص و حداقل 6 کاراکتر باشد.");
            }
            if (errorMessages.length > 0) {
                alert(errorMessages.join("\n"));
                return false;
            }
            return true; // فرم معتبر است و می‌توان ارسال کرد
}
 
</script>
<style>
form{
    direction:rtl;
   
}
input[type="submit"]{
    text-align:center;
    font-weight:bold;
    padding-right:60px;
    text-align:center;
    padding-left:60px;
    background-color:green;
    

}
input{
    border-radius:20px;
    margin:auto;
    float:center;
    

}
label{
    text-align:right;
    font-weight:bold;
    margin:auto;
    float:center;
}
body{
    background-color:rgb(59,59,59);color:white;
    margin:auto;
    
}
</style>
</head>
<body>
    <h2  style="text-align:center">فرم ثبت نام </h2>
    <center>
<form action="POST" onsubmit="return validateForm()">
<label for="name">نام:</label>
 <input type="text" id="name" name="name"><br><br>


        <label for="lastname">نام خانوادگی:</label>
        <input type="text" id="lastname" name="lastname"><br><br>


        <label for="username">نام کاربری:</label>
        <input type="text" id="username" name="username"><br><br>

        
  <label for="password">رمز:</lable>
  <input id="password" type="password"><br><br>
  <input type="submit" value="ثبت"> 
</form>
</center>
</body>
</html>




