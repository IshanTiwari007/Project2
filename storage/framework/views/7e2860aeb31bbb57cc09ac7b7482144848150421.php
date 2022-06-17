<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo e(asset('/css/login.css')); ?>">
</head>
<body>
    <section>
        <div class="imgBx">
            <img src="<?php echo e(asset('/img/backg.jpg')); ?>">
        </div>
        <div class="contentBx">
            <div class="formBX">
                <h2>Login</h2>
                <form>
                    <div class="inputBx">
                        <span>Username</span>
                        <input type="text" name="">
                    </div>
                    <div class="inputBx">
                        <span>Password</span>
                        <input type="password" name="">
                    </div>
                    <div class="remember">
                        <label for=""><input type="checkbox" name="" id=""> Remember me</label>
                    </div>
                    <div class="inputBx">
                        <input type="Submit" value = "Sign in" name="">
                    </div>
                    <div class="inputBx">
                        <p>Don't have an account ? <a href="#">Sign up</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html><?php /**PATH C:\xampp\htdocs\Project2\Project2\resources\views/newlogin.blade.php ENDPATH**/ ?>