<html>
    <head>
    <link rel="stylesheet" href="../CSS/mbk_style.css">
    </head>
    <body>
        <!--Start MBK Menu-->
          <?php include '../PHP/Process_PHP/Mbk_meun.php'; ?>
        <!--End MBK Menu-->

        

        <div class="Mbk_login">
            <div id="Mbk_login_title">
                Login
            </div>

            <div id="Mbk_error_msg">
                <ul>
                    <li>Incorrect email or password.</li>
                </ul>
            </div>

            <input type="text" placeholder="Email" id="Mbk_email_txtbox" name="email_txtbox">
            <input type="password" placeholder="Password" id="Mbk_password_txtbox" name="password_txtbox">

            <div id="Mbk_forget_password">
                <a href="../PHP/Mbk_Forget_Password.php">Forgot your password?</a>
            </div>

            <button class="Mbk_sign_in_btn">SIGN IN</button>

            <div id="Mbk_create_account">
                <a href="../PHP/Mbk_Create_Account.php">Create account</a>
                <a href="../PHP/Mbk_Main.php" id="mbk_return">Return to Store</a>
            </div>
        </div>

        <!--Start MBK Footer-->
          <?php include '../PHP/Process_PHP/Mbk_footer_1.php'; ?>
        <!--End MBK Footer-->

            <script src="../Javascript/mbk.js"></script>
    </body>

</html>