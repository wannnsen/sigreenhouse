<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>
    <img class="wave" src="<?php echo e(asset('img/wave.png')); ?>">
    <div class="container">
        <div class="img">
            <img src="<?php echo e(asset('img/greenhouse.png')); ?>">
        </div>
        <div class="login-content">
            <form action="<?php echo e(url('/login')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <h3>SIGREENHOUSE</h3>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Email</h5>
                        <input type="email" name="email" required>
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i"> 
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" name="password" required>
                    </div>
                </div>
                <?php if($errors->any()): ?>
                    <span style="color: red;"><?php echo e($errors->first()); ?></span>
                <?php endif; ?>
                <a href="#">Lupa password?</a>
                <input type="submit" value="Login" class="btn">
            </form>      
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\sigreenhouse\resources\views/auth/login.blade.php ENDPATH**/ ?>