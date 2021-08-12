<html>
    <head>
    <link rel="stylesheet" href="../CSS/mbk_style.css">
    </head>
    <body>
        <!--Start Menu-->
      <?php include'../PHP/Process_PHP/Mbk_meun.php' ?>
         <!--End Menu-->

         <!--Start Slideshow-->
       <div class="mbk_slideshow">
                <div class="mySlides fade">
                    <img src="../Image/glasses.jpg" class="pics"/>
                    <label class="text">New shirt collection for men</label>
                    <button class="mbk_slideshow_btn">SHOP MEN'S</button>
                </div>
                <div class="mySlides fade">
                    <img src="../Image/Wall-Woman-Back-Against-1.jpg" class="pics"/>
                    <label class="text1">Up to 35% off women jeans!</label>
                    <button class="mbk_slideshow_btn1">SHOP WOMEN'S</button>
                </div>
                <div class="mySlides fade">
                    <img src="../Image/how-to-style-an-oversized-denim-jacket-f.jpg" class="pics"/>
                    <label class="text2">Up to 25% off women jackets!</label>
                    <button class="mbk_slideshow_btn">SHOP WOMEN'S</button>
                </div>
               
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
         
            
            <!--    Putting in the click dots   -->
        <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
        </div>
        <!--End Slideshow-->

        <div class="mbk_clothing">
            <div id="mbk_clothing_header">
                Woman Clothing
            </div>
            <div id="mbk_cloths">
                <div id="mbk_cloths_1">
                    <img src="../Image/dress.jpg" id="cloths">
                    <label class="cloths_text">Woman Dresses</label>  
                </div>
                <div id="mbk_cloths_2">
                    <img src="../Image/jumpers.jpeg" id="cloths">
                    <label class="cloths_text">Woman Jumpsuits</label>
                </div>
                <div id="mbk_cloths_3">
                    <img src="../Image/outerwear.jpeg" id="cloths">
                    <label class="cloths_text">Woman Outerwear</label>
                </div>
                <div id="mbk_cloths_4">
                    <img src="../Image/jeans.jpg" id="cloths">
                    <label class="cloths_text">Woman Pants</label>
                </div>
            </div>
        </div>

        <div class="mbk_clothing1">
            <div id="mbk_clothing_header">
                Man Clothing
            </div>
            <div id="mbk_cloths">
                <div id="mbk_cloths_1">
                    <img src="../Image/denim.jpg" id="cloths">
                    <label class="cloths_text">Man Denim</label>  
                </div>
                <div id="mbk_cloths_2">
                    <img src="../Image/knits.png" id="cloths">
                    <label class="cloths_text">Man Knits</label>
                </div>
                <div id="mbk_cloths_3">
                    <img src="../Image/womens-skinny-jeans-on-a-man-Your-Average-Guy.jpg" id="cloths">
                    <label class="cloths_text">Man Bottom</label>
                </div>
                <div id="mbk_cloths_4">
                    <img src="../Image/shirt.jpeg" id="cloths">
                    <label class="cloths_text">Man Shirts</label>
                </div>
            </div>
        </div>

        <div class="mbk_desc">
            <div id="mbk_desc1">
                <div id="mbk_desc_p">
                <div id="mbk_clothing_header">
                    Welcome to MBK
                </div>
                    Our products are inspired by the people and world around us. 
                    Beautiful, high quality goods that are designed especially for you. 
                    Discover our story and meet the people that make our brand what it is.
                </div>
                <div id="mbk_desc_img">
                    <img src="../Image/women-model-looking-at-viewer-sergey-fat-wallpaper.jpg" id="mbk_desc_pic">
                </div>
            </div>

            <div id="mbk_desc2">
                <div id="mbk_desc_img1">
                    <img src="../Image/bags.jpeg" id="mbk_desc_pic">
                </div>

                <div id="mbk_desc_p1">
                    All our products are made using the finest materials and craftsmanship. 
                    Each product is packaged and delivered with care. 
                    Check out our FAQs for more questions on shipping, processing, and more.
                </div>
            </div>

            <div id="mbk_desc3">
                <div id="mbk_desc_info">
                150 Elgin Street Ottawa
                Ontario CA K2P 1L4  
                <br>
                <br>
                Mon - Fri, 10am - 9pm
                Saturday, 11am - 9pm
                Sunday, 11am - 5pm   
                </div>
                <div id="mbk_desc_img2">
                    <img src="../Image/clothes-store-floating-wall-display-shelves-design-ideas-for-retail.jpg" id="mbk_desc_pic1">
                </div>
            
            </div>

           
        </div>
       

        <?php include'../PHP/Process_PHP/Mbk_footer.php' ?>


            <script src="../Javascript/mbk.js"></script>
    </body>
</html>