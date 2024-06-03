<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Assistant:400,700" rel="stylesheet">
    <link rel="stylesheet" href=<?= base_url('dist/css/login.css') ?>>

</head>

<body>
    <section class='login' id='login'>
        <div class='head'>
            <h1 class='company'>SPRM</h1>
        </div>
        <p class='msg'>Welcome back</p>
        <div class='form'>
            <form action="/login" method="post">
                <input type="text" placeholder='Username' class='text' name='username' id='username' required><br>
                <input type="password" placeholder='••••••••••••••' class='password' name='password' id='password' required><br>
                <button class='btn-login' id='do-login' type="submit">Login</button>
                <?php if (session()->getFlashdata('error')) : ?>
                    <div class="error-msg">
                        <?= session()->getFlashdata('error') ?>
                    </div>
                <?php endif; ?>
            </form>
        </div>
    </section>
</body>

</html>