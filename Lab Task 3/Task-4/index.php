<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L3Task-4</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>REGISTRATION</h2>
    <form action="" method="POST">
        <div>
            <span>Name</span>
            <input type="text" name="" id="">
        </div>
        <div>
            <span>Email</span>
            <input type="text" name="" id="">
        </div>
        <div>
            <span>User Name</span>
            <input type="text" name="" id="">
        </div>
        <div>
            <span>Password</span>
            <input type="text" name="" id="">
        </div>
        <div>
            <span>Confirm Password</span>
            <input type="text" name="" id="">
        </div>
        <div>
            <div class="container">
                <h4>Gender</h4>
                <div class="gendermale">
                    <input type="radio" name="Gender" id="male">
                    <label for="male">
                        <span>
                            Male
                        </span>
                    </label>
                </div>
                <div class="genderfemale">
                    <input type="radio" name="Gender" id="female">
                    <label for="female">
                        <span>
                            Female
                        </span>
                    </label>
                </div>
                <div class="genderother">
                    <input type="radio" name="Gender" id="other">
                    <label for="other">
                        <span>
                            Other
                        </span>
                    </label>
                </div>
            </div>
        </div>
        <div>
            <label for="dob">Date of Birth</label>
            <div class="container">
                <input type="date" name="dob" id="dob" class="dob">
            </div>
        </div>
        <div>
            <input type="submit" name="submit" class="submit">
            <input type="reset" name="reset" class="reset">
        </div>
    </form>
</body>

</html>