<html>
    <head>
    <link rel="stylesheet" href="../CSS/mbk_style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    </head>
    <body>
        <!--Start Menu-->
            <?php include '../Process_PHP/Mbk_meun_1.php'; ?>
        <!--End Menu-->

        <div class="Mbk_Accessories_1">
            <div id="Mbk_Accessories_nav">
                <a href="../Mbk_Main.php">Home</a> > <a href="../Mbk_Bottom.php">Man Bottom</a> > Perkins Pants in Navy
            </div>
            <div id="Mbk_Accessories_Title">
                <label id="Mbk_Title">Man Bottom</label>
            </div>
            <div class="container">
                <div id="Mbk_Accessories_image">
                    <img src="../../Image/Bottoms/Bottoms Angles/Perkins Navy Pant/01-12_Mens-041_1024x1024@2x.jpg" class="image normal-zoom" id="main">
                </div> 
            </div>
               <div class="box1">
                    <div id="Mbk_Accessories_image1">
                        <img src="../../Image/Bottoms/Bottoms Angles/Perkins Navy Pant/01-12_Mens-041_1024x1024@2x.jpg" id="accessories_img" onclick="change(this.src)">
                    </div>
                    <div id="Mbk_Accessories_image2">
                        <img src="../../Image/Bottoms/Bottoms Angles/Perkins Navy Pant/01-12_Mens-039_aac19ea6-298b-4700-8fa9-fb8accc35673_1024x1024@2x.jpg" id="accessories_img" onclick="change(this.src)">
                    </div>
                    <div id="Mbk_Accessories_image3">
                        <img src="../../Image/Bottoms/Bottoms Angles/Perkins Navy Pant/01-12_Mens-048_1024x1024@2x.jpg" id="accessories_img" onclick="change(this.src)">
                    </div>
       
               </div>   
            
            <div id="Mbk_Accessories_image_desc">
                <div id="Mbk_Accessories_image_desc_title">
                    Dries Van Noten Man
                </div>
                <div id="Mbk_Accessories_image_desc_title1">
                    Perkins Pants in Navy
                </div>
                <div id="Mbk_Accessories_image_desc_price">
                    $196.00
                </div>
                <div id="Mbk_Accessories_image_desc_quantity">
                    Quantity
                    <input type="number" id="Mbk_Accessories_image_desc_quantity_txtbox" min="1" max="1000" value="1">
                </div>

                <div id="Mbk_Accessories_image_desc_size">
                    Size
                    <select name="Mbk_Accessories_image_desc_size_txtbox" id="Mbk_Accessories_image_desc_size_txtbox">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>

                <div id="Mbk_Accessories_image_desc_btns">
                   <button class="Mbk_Accessories_image_desc_add_to_car_btn">ADD TO CART</button>
                   <button class="Mbk_Accessories_image_desc_buy_it_now_btn">BUY IT NOW</button>
                </div>
            </div>

            <div id="Mbk_Accessories_image_desc_info">
                <hr id="Mbk_Accessories_image_desc_info_line">
                <div class="vl"></div>
                <hr id="Mbk_Accessories_image_desc_info_line1">
                <div id="Mbk_Accessories_image_desc_info_links">
                    <button id="show">Description</button>
                    <button id="hide">More info</button>
                </div>
                <div id="desc_info_links_desc">
                    <i id="desc_info_links_italic">This is a demonstration store. You can purchase products like this from Mohawk General Store.</i>

                    <div id="desc_info_links_desc_1">
                        Perkins Pants in Navy by Dries Van Noten. 
                        Easy to wear navy pants in a cotton linen blend feature an elastic waist 
                        and a drawstring finish as well as two side pockets and a single back pocket.
                    </div>

                    <ul id="desc_info_links_ul">
                        <li>66% linen, 34% cotton</li>
                        <li>Made in Romania</li>
                        <li>16.5" waist, 43" length, 34" inseam, 11" rise</li>
                        <li>Model is 6"2' and wears a size 52</li>
                        <li>Ref: 3177</li>
                    </ul>  

                    
                    <!--<label id="desc_info_important">
                        *Please note: All Dries Van Noten items are only available for domestic shipping; 
                        international shipping is not available through our website. 
                        Please email info@mohawkgeneralstore.com for more information or questions.
                    </label>-->
                </div>

                <div id="desc_info_links_desc1" style="display: none;">
                    <b id="desc_info_links_desc1_b">Order Processing</b>

                    <p id="desc_info_links_desc1_p">
                        All orders placed online Monday-Friday (excluding holidays) before 2PM PST will begin processing that day and ship within 48 hours, pending item availability and credit card verification. Orders placed after 2PM PST will begin processing the next business day. Orders placed on Friday after 2PM PST will begin processing the following Monday. Transit times do not include Saturday, Sunday or holidays.

                        Order processing cut-off times are provided as guidelines only, and do not take into account possible delays caused by item availability and payment verification.
                    </p>

                    <b id="desc_info_links_desc1_b">In-Store Pickup</b>

                    <p id="desc_info_links_desc1_p">
                        Orders placed online within said hours using the In-Store pickup option, will be available approximately 2 hours after the order has been processed. Orders will not be made available for pickup until you receive an email confirmation that your order is ready for pickup.
                    </p>

                    <b id="desc_info_links_desc1_b">Shipping Restrictions</b>

                    <p id="desc_info_links_desc1_p">
                        We do not offer Saturday delivery. Orders shipped to APO/FPO addresses and PO Boxes will ship out via USPS Priority Mail.
                    </p>

                    <b id="desc_info_links_desc1_b">Tracking your order</b>

                    <p id="desc_info_links_desc1_p">
                        Upon completion of your order, you will receive a shipment confirmation email, which will include a link that will direct you to updated tracking information.
                    </p>


                    <b id="desc_info_links_desc1_b">International Shipping</b>

                    <p id="desc_info_links_desc1_p">
                         We use USPS for all international deliveries. Rates are calculated based on destination and weight of package. All additional taxes, customs and import duties levied by the client’s local government are the responsibility of the client.
                    </p>
                </div>

                
                <div id="share_it_icons">
                    <label id="share_it">Share this Product</label>

                    <button id="share_it_btn"><img src="https://img.icons8.com/color/48/000000/twitter--v1.png" id="share_it_img"/><label id="share_it_img_lbl">Tweet</label></button>
                    <button id="share_it_btn"><img src="https://img.icons8.com/color/48/000000/facebook.png" id="share_it_img"/><label id="share_it_img_lbl">Share</label></button>
                    <button id="share_it_btn"><img src="https://img.icons8.com/fluency/48/000000/instagram-new.png" id="share_it_img"/><label id="share_it_img_lbl">Post</label></button>
                </div>
            </div>


            <div id="Mbk_Accessories_images">
                <div class="box1">
                    <div id="Mbk_Accessories_image_01">
                        <a href='' id="accessories_link">
                            <img src="../../Image/Bottoms/06-08_Mens-274_360x.jpg" alt="Find Me Amalfi Pant in Black" id="accessories_imgs">
                        <center>
                            <p id="accessories_item"><b>Amalfi Pant in Black</b></p>
                            <p id="accessories_desc">SMOCK Man</p>
                            <p id="accessories_desc">$225.00</p>
                        </center>
                        </a>
                    </div>
                    <div id="Mbk_Accessories_image_02">
                        <a href='' id="accessories_link">
                            <img src="../../Image/Bottoms/03-02_Mens-547_360x.jpg"
                            alt="Find Me Amalfi Pant in Green" id="accessories_imgs">
                                <center>
                                    <p id="accessories_item"><b>Amalfi Pant in Green</b></p>
                                    <p id="accessories_desc">SMOCK Man</p>
                                    <p id="accessories_desc">$225.00</p>
                                </center>
                        </a>
                    </div>
                    <div id="Mbk_Accessories_image_03">
                        <a href='' id="accessories_link">
                            <img src="../../Image/Bottoms/03-02_Mens-564_360x.jpg"
                            alt="Find Me Amalfi Pant in Denim Wash" id="accessories_imgs">
                                <center>
                                    <p id="accessories_item"><b>Amalfi Pant in Denim Wash</b></p>
                                    <p id="accessories_desc">SMOCK Man</p>
                                    <p id="accessories_desc">$225.00</p>
                                </center>
                                <div id="circle">
                                    <label id="sales_lbl">SALE</label>
                                </div>
                        </a>
                    </div>
                    <div id="Mbk_Accessories_image_04">
                        <a href='' id="accessories_link">
                            <img src="../../Image/Bottoms/06-08_Mens-008_360x.jpg"
                            alt="Find Me Fauna Print Drop Short in Tobacco" id="accessories_img_0">
                                <center>
                                    <p id="accessories_item"><b>Fauna Print Drop Short in Tobacco</b></p>
                                    <p id="accessories_desc">SMOCK Man</p>
                                    <p id="accessories_desc">$168.00</p>
                                </center>
                        </a>
                    </div>
               </div>   
            </div>
        </div>

        <!--Start MBK Footer-->
        <?php include '../Process_PHP/Mbk_footer_1.php'; ?>
        <!--End MBK Footer-->

        <script src="../Javascript/mbk.js"></script>

<script>
$(document).ready(function(){
  $("#hide").click(function(){
    $("#desc_info_links_desc").hide();
    $("#desc_info_links_desc1").show();
    $( "#hide" ).css('font-weight', 'bold');
    $( "#show" ).css('font-weight', 'normal');
  });
  $("#show").click(function(){
    $("#desc_info_links_desc").show();
    $("#desc_info_links_desc1").hide();
    $( "#show" ).css('font-weight', 'bold');
    $( "#hide" ).css('font-weight', 'normal');
  });
});
    

		const change = src => {
			document.getElementById('main').src = src
		}


   // Zoom in/out clothing img
    $('.image').click(function() {
    $(this).toggleClass('normal-zoom zoom-in');
    });

    $('.image').on('mousemove', function(event) {
    // This gives you the position of the image on the page
    var bbox = event.target.getBoundingClientRect();

    // Then we measure how far into the image the mouse is in both x and y directions
    var mouseX = event.clientX - bbox.left;
    var mouseY = event.clientY - bbox.top;

    // Then work out how far through the image as a percentage the mouse is
    var xPercent = (mouseX / bbox.width) * 100;
    var yPercent = (mouseY / bbox.height) * 100;

    // Then we change the `transform-origin` css property on the image to center the zoom effect on the mouse position
    //event.target.style.transformOrigin = xPercent + '% ' + yPercent + '%';
    // It's a bit clearer in jQuery:
    $(this).css('transform-origin', (xPercent+'% ' + yPercent+ '%') );
    // We add the '%' units to make sure the string looks exactly like the css declaration it becomes.

    });

    // If you want it to automatically trigger on hover
    $('.image').on('mouseenter', function() {
    $(this).addClass('zoom-in');
    $(this).removeClass('normal-zoom');
    });

    // and stop when not hovering
    $('.image').on('mouseleave', function() {
    $(this).addClass('normal-zoom');
    $(this).removeClass('zoom-in');
    });
</script>
    </body>

</html>