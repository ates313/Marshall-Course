
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page || A</title>
    <link rel="stylesheet" href="<?php echo base_url('public/admin/assets/') ?>css/login.css">
</head>

<body>

    <section>
        <div class="form-box">
            <div class="form-value">
                <form>
                    <h2>Login</h2>
                    <div class="inputbox">
                    <ion-icon name="person-outline"></ion-icon>
                        <input type="user" required>
                        <label>User Name</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" required>
                        <label>Password</label>
                    </div>
                    <button>Log In</button>
                </form>
            </div>
        </div>
    </section>

    

</body>
</html>



<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>