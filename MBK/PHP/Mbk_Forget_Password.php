<html>
    <head>
    <link rel="stylesheet" href="../CSS/mbk_style.css">
    </head>
    <body>
        <!--Start Menu-->
      <?php include'../PHP/Process_PHP/Mbk_meun.php' ?>
         <!--End Menu-->

        <div class="Mbk_forget_password">
            <div id="Mbk_login_title">
                Reset Your Password
            </div>

            <label id="Mbk_forget_password_lbl">
                We will send you an email to reset your password.
            </label>

            <input type="text" placeholder="Email" id="Mbk_email_txtbox" name="email_txtbox">
            
            <button class="Mbk_sign_in_btn1">SUBMIT</button>
            <div id="Mbk_create_account1">
                <a href="../PHP/Mbk_Main.php" id="mbk_return">Cancel</a>
            </div>
        </div>
        

        <!--Start Footer-->
        <?php include'../PHP/Process_PHP/Mbk_footer.php' ?>
        <!--End Footer-->

            <script src="../Javascript/mbk.js"></script>
    </body>
</html>