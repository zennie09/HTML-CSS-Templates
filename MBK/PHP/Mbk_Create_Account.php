<html>
    <head>
    <link rel="stylesheet" href="../CSS/mbk_style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <!--Start Menu-->
      <?php include'../PHP/Process_PHP/Mbk_meun.php' ?>
         <!--End Menu-->

         <div class="Mbk_login">
            <div id="Mbk_login_title">
                Create Account
            </div>

           

            <input type="text" placeholder="First Name" id="Mbk_fn_txtbox" name="fn_txtbox">
            <input type="password" placeholder="Password" id="Mbk_rgpassword_txtbox" name="password_txtbox">
            <input type="text" placeholder="Last Name" id="Mbk_ln_txtbox" name="ln_txtbox">
            <input type="text" placeholder="Email" id="Mbk_rgemail_txtbox" name="email_txtbox">


            <button class="Mbk_create_btn" onclick="validate2();">CREATE</button>

            <div id="Mbk_create_account1">
                <a href="../PHP/Mbk_Main.php" id="mbk_return1">Return to Store</a>
            </div>
        </div>
        

        <!--Start Footer-->
        <?php include'../PHP/Process_PHP/Mbk_footer_1.php' ?>
        <!--End Footer-->

            <script src="../Javascript/mbk.js"></script>
    </body>
</html>