<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page || Marshall</title>
    <link rel="stylesheet" href="<?php echo base_url('public/admin/assets/') ?>css/login.css">
</head>

<body>
<section>

    <form action="<?php echo base_url('login_action'); ?>" method="post">
            <div class="form-box">
                <div class="form-value">
                    <form>
                        <h2>Login</h2>
                        <div class="inputbox">
                            <input name="username" type="text" placeholder="Username">
                        </div>
                        <div class="inputbox">
                            <!-- <label>Password</label> -->
                            <input name="password" type="password" placeholder="password">
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                    </form>
                </div>
            </div>
    </form>
    </section>

</body>

</html>



<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>