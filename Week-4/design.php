<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="post" class="form">
        <label for="">Enter Full Name</label>
        <input type="text" name="full_name" id="">
        <label for="">Enter Password</label>
        <input type="password" name="password" id="">  
        <input type="radio" name="sex" value="male" id=""> Male
        <input type="radio" name="sex" value="female" id=""> Female
        <textarea name="comment" cols="30" rows="6" id=""></textarea>
        <div class="buttons">
            <button type="reset" value="reset form">Reset form</button>
            <button type="submit" value="Register">Register</button>
        </div>
    </form>

    <?php
    echo "First Name is :" . $_POST["full_name"] . "<br>";
    echo "Password is :" . $_POST["password"] . "<br>"; 
    echo "Comment : " . $_POST["comment"] . "<br>";
    if(!empty($_POST['sex']))
        echo ("<br>Sex : " . $_POST['sex']);
    else {
        echo "Plz select gender";
    }

    ?>
</body>
</html>