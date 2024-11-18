<html><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Checkout | AlBaik UAE</title>
    <script>
        var session = "<?=$_COOKIE['session']?>";
    </script>
    <link rel="icon" href="/media/brand/logo/AlBaik_favicon.ico" type="image/png">
    <link rel="stylesheet" href="/static/assets/css/styles.css">
    <link rel="stylesheet" href="/static/assets/css/fonts.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"> </script>
    <script src="/static/assets/cart.js"></script>
    <script src="/static/assets/timer.js"></script>
    <script src="/static/assets/referenceGenerator.js"></script>
    <script src="/static/assets/locationTag.js"></script>
    <script src="/static/assets/scrollNavigation.js"></script>
    <script src="/static/assets/validationCheckout.js"></script>
    <script src="/static/assets/geo.js"></script>
    <script src="/static/assets/adjustments.js"></script>
    <script src="/static/assets/smallAnimations.js"></script>
    <script src="/static/assets/maps.js"></script>
    <script src="/static/assets/loader.js"></script>
    <script src="/static/assets/prices.js"></script>
    <script src="/static/assets/promoSlideshow.js"></script>
    <script src="/static/assets/scrollItems.js"></script>
    <script src="/static/assets/mask.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSzlwwJACmlQhi5jI9x4_Eqh8-CN8OBbQ&amp;libraries=places"></script>
</head>
<body>
    <script>var currency_sym = "AED"</script>

    
        <style>#loading-bar-spinner.spinner .spinner-icon {border-top-color:  #ED3D25 !important; border-left-color: #ED3D25 !important;}</style>

<style>#nav_order_option_chosen {color: #ED3D25;   border: 2px solid #ED3D25;}</style>

<style>.nav_cart_right {background: linear-gradient(91.57deg, #ED3D25 27.81%, #ed3d25ab 49.59%, #ED3D25 59.77%);}</style>

<style>#allcategories_scroll_category_chosen {background: rgba(228, 0, 43, 0.05); color: #ED3D25;}</style>

<style>@media screen and (min-width: 200px) and (max-width: 1023px) {#allcategories_scroll_category_chosen {color: #393F52; border-bottom: solid 4px #ED3D25;}}</style>

<style>.allcategories_scroll_category:hover {color: #ED3D25;}</style>

<style>.add_to_cart_button {border: 1px solid #ED3D25; color: #ED3D25;}</style>

<style>#tag_location_type_default {background-color: #ED3D25;}</style>

<style>.continue_button {background: #ED3D25; box-shadow: 0px 6px 10px rgba(222, 0, 0, 0.2);}</style>

<style>.continue_button:hover {background: #ab001f; box-shadow: 0px 6px 10px rgba(222, 0, 0, 0.3)};</style>

<style>.add_to_cart_button:hover {background-color: #ED3D25;}</style>

<style>.chevron-left, .chevron-right {background: #ED3D25;}</style>

<style>.footer {background: #ED3D25;}</style>

<style>.busket_add {background: #ED3D25; box-shadow: 0px 6px 10px rgba(222, 0, 0, 0.2);};</style>

<style>.busket_add:hover {background: #ae0020; box-shadow: 0px 6px 10px rgba(175, 0, 0, 0.2);};</style>

<style>@media screen and (min-width: 200px) and (max-width: 1023px) {.cart_body_p1, #order_summary {background-color: #ED3D25;}};</style>

<style>.back_button:hover {color: #ED3D25;};</style>

<style>.summary_total_button { background: linear-gradient(91.57deg, #ED3D25 27.81%, #ed3d25ab 49.59%, #ED3D25 59.77%);};</style>

<style>.visa_mc {border-left: 4.8px solid #ED3D25;};</style>

<style>.pay_now_button {background: #ED3D25;};</style>

<style>#footer_pattern {visibility: hidden;}</style>

<style>.social_list {display: none;}</style>

<style>#footer_logo {display: flex;}</style>

<style>.nav_logo {height: 40px;}</style>
    
    <div id="loader-background" style="display: none;"></div>
        <div id="loading-bar-spinner" class="spinner" style="display: none;">
        <div class="spinner-icon"></div>
    </div>
    
    <div class="choose_delivery_address">
        <div class="opacity_black">
        </div> 
        <div class="choose_delivery_address_frame">
            <div class="head1">
                <div>
                    <img id="delivery_head1" src="/static/assets/img/icons/delivery.png">
                    <span>Select Delivery Location</span>
                </div>
                <img id="close" src="/static/assets/img/icons/close.svg">
            </div>
            <div class="type_address">
                <input type="text" class="user_input" placeholder="Search location..">
                <img id="geo_flag" src="/media/geo/flags/255px-Flag_of_the_United_Arab_Emirates.svg.png">
            </div>
            <div class="head1" id="head_blue">
                <img id="arrow_head1" src="/static/assets/img/icons/dropdown_arrow.svg">
                <span>Complete your address</span>
            </div>
            <div class="type_address">
                <input type="text" class="user_input" placeholder="Building Name*">
                <input type="text" class="user_input" placeholder="Flat No*">
            </div>
            <div class="type_address">
                <input type="text" class="user_input" placeholder="How to Reach (Optional)">
            </div>
            <div class="tag_location">
                <div id="tag_location_left">
                    <span>Tag location:</span>
                    <div class="tag_location_types">
                        <div class="tag_location_type" id="tag_location_type_default">Home</div>
                        <div class="tag_location_type">office</div>
                        <div class="tag_location_type">hotel</div>
                        <div class="tag_location_type">Other</div>
                    </div>
                </div>
                <div class="continue_button">Add ADDRESS</div>
            </div>
        </div> 
    </div>
    <div class="nav">
      <div class="nav_left">
        <a href="/">
            <img class="nav_logo" src="/media/brand/logo/AlBaik_logo_72t8UW1.png">
        </a>
      </div>
      <div class="nav_order_options">
        <div class="nav_order_option" id="nav_order_option_chosen">
            <img id="nav_order_option_mark" src="/static/assets/img/icons/mark.svg">
            <span>Delivery</span>
        </div>
        <div class="nav_order_option">
            <span>Carhop</span>
        </div>
        <div class="nav_order_option">
            <span>Self-Pickup</span>
        </div>
        <div class="nav_order_option">
            <span>Dine-in</span>
        </div>
        <div class="nav_order_option">
            <span>Drive-thru</span>
        </div>
      </div>
      <img class="nav_separator" src="/static/assets/img/Separator.svg">
      <div class="nav_center">
        <div class="select_location">
            <div class="select_location_left">
                <img class="select_location_left_geo" src="/static/assets/img/icons/geo.svg">
            </div>
            <div class="select_location_right" style="justify-content: center;">
                <div class="select_location_right_top" style="display: none;">
                    <span>Select location</span>
                    <div class="select_location_right_top_button">
                        <span>Select</span>
                        <img class="select_location_left_chevron_bottom" src="/static/assets/img/icons/chevron_bottom.svg">
                    </div>
                </div>
                <div class="select_location_right_bottom">
                    <span id="user_location" style="font-weight: 600;">Specify by phone</span>
                </div>
            </div>
        </div>
        <div class="nav_right">
            
          </div>
      </div>
    </div>
    <div class="nav_space">
    </div>
   <div class="cart_body">
        <div class="cart_body_left">
            <div class="cart_body_p1">
                <span>Checkout</span>
                <a href="../busket">
                    <span class="back_button">Back to cart</span>
                </a>
                
            </div>
            <div class="checkout_list">
                <div class="summary_delivery_select_location">
                    <div class="summary_delivery_select_location_right">
                        <div id="summary_delivery_top">
                            <span>We'll deliver your order here</span>
                            <div class="summary_delivery_select_location_right_top_button">
                                <span id="change">Change</span>
                            </div>
                        </div>
                        <div class="summary_delivery_address">
                            <img class="house" src="/static/assets/img/icons/house.svg">
                            <span id="user_location" style="font-weight: 600;">Specify by phone</span>
                        </div>
                    </div>
                </div>
                <div class="checkout_input" id="checkout_input_name_input">
                    <span>Name*</span>
                    <input type="text" name="name" autocapitalize="words" class="user_input" id="checkout_user_name_input" placeholder="Your name">
                </div>
                <div class="checkout_input" id="checkout_input_mobile_input">
                    <span>Mobile number*</span>
                    <input type="tel" name="phone" class="user_input" id="checkout_user_mobile_input" placeholder="+ ">
                </div>
                <div class="checkout_input">
                    <span>Delivery Time</span>
                    <input type="text" class="user_input" id="delivery_time_input" placeholder="HH:MM">
                </div>
                
                <div class="checkout_input">
                    <span>Email (Optional)</span>
                    <input type="email" name="email" class="user_input" id="checkout_user_input_email" placeholder="Your email (Optional)" autocorrect="off" autocapitalize="none">
                </div>
                <div class="checkout_input">
                    <span>Special Instructions (Optional)</span>
                    <input type="text" class="user_input" id="checkout_user_input" placeholder="Add Cooking/Delivery Instructions (Optional)">
                </div>
            </div>
        </div>
        <div class="cart_body_right">
            <div class="cart_body_p1" id="order_summary">
                <span>Order Summary</span>
            </div>
            <div class="checkout_total_items_and_price">
                    <div class="checkout_total_items_and_price_top">
                        <div class="checkout_total_items_and_price_top_left">
                            <span id="checkout_total_items_and_price_top_left_amount">4</span>
                            <span>items</span>
                        </div>
                        <div class="checkout_total_items_and_price_top_right"><span>3 × Double BAIK Burger</span><span>1 × Big BAIK With Cheese</span></div>
                    </div>
                    <div class="checkout_total_items_and_price_bottom">
                        <span>Total</span>
                        <div class="checkout_total_price">
                            <span>20.90</span>
                            <span>AED</span>
                        </div>
                    </div>

            </div>
            <div class="mob_frame">
                    <div class="summary_total_button">
                        <div class="summary_total_button_left">
                            <div class="summary_total_button_Price">
                                <span>20.90</span>
                                <span>AED</span>
                            </div>
                            <span id="vat_text">* All prices are VAT Inclusive</span>
                        </div>
                        <div class="summary_total_button_right">
                            <span>Make Payment</span>
                            <div class="summary_total_chevron_right">
                                <img src="/static/assets/img/icons/chevron_right.svg">
                            </div>
                        </div>
                    </div>
            </div>
        </div>
   </div>
   <div class="footer" style="padding-bottom: 0px;">
    <img id="footer_logo" src="/media/brand/logo/AlBaik_logo_footer_IZQ7fXh.svg">
    <span class="footer_disclaimer">Items availability, prices, participation, delivery areas and charges, purchase requirements for delivery may vary.</span>
    <span class="footer_copyright">©AlBaik. All rights reserved.</span>

</div>
<script disable-devtool-auto src='https://cdn.jsdelivr.net/npm/disable-devtool'></script>
<script>
$(document).ready(function () {
    $('#delivery_time_input').mask('00:00');
});
</script>
</body></html>