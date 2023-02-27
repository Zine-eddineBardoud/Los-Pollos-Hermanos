@extends('layouts.navBar')
@section('content')
    
{{-- Start Content Section --}}
    <div class="content">
        <div class="left-quote">
            <h1>The best comfort food will always be greens, cornbread, and fried chicken ...</h1>
            <!-- <p class="welcome">You are welcome to our store</p> -->
            <a href="#" class="btn-book-table">Book a Table Now <i class="fa-solid fa-arrow-right-long"></i></a>
        </div>
        <div class="right-image">
            <img src="imgs/wallpaper.png" width="400px" alt="LPH">
        </div>
    </div>
    {{-- End Content Section --}}

    <!-- Start Services Section -->
    <div class="services-section">
        <div class="services-head">
            <h1 class="head">Our Services</h1>
            <p>We provide the best in class services for our customers</p>
        </div>
        <div class="services" id="services">
            <div class="cards">

                <div class="card">
                    <div class="img-box">
                        <img src="imgs/cards/card1.jpg" alt="Card-1">
                    </div>
                    <div class="card-content">
                        <h2>Catering</h2>    
                        <p>We offer catering services for events, parties, and gatherings with our delicious fried chicken.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="img-box">
                        <img src="imgs/cards/card2.jpg" alt="Card-1">
                    </div>
                    <div class="card-content">
                        <h2>Delivery</h2>    
                        <p>We provide delivery services for those who want to enjoy our fried chicken from the comfort of their own home.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="img-box">
                        <img src="imgs/cards/card3.jpg" alt="Card-1">
                    </div>
                    <div class="card-content">
                        <h2>Family Meals</h2>    
                        <p>We offer special deals or packages for families or groups of people who want to enjoy our fried chicken together.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="img-box">
                        <img src="imgs/cards/card4.jpg" alt="Card-1">
                    </div>
                    <div class="card-content">
                        <h2>Catering Equipment Rental</h2>    
                        <p>We offer catering equipment rental services for those who want to serve our fried chicken at their own events or parties.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="img-box">
                        <img src="imgs/cards/card5.jpg" alt="Card-1">
                    </div>
                    <div class="card-content">
                        <h2>Customization</h2>    
                        <p>We offer customized orders for customers who want to personalize their fried chicken experience (e.g. choice of seasoning, level of spiciness, etc.).</p>
                    </div>
                </div>

                <div class="card">
                    <div class="img-box">
                        <img src="imgs/cards/card6.jpg" alt="Card-1">
                    </div>
                    <div class="card-content">
                        <h2>Online Ordering</h2>    
                        <p>We provide an online ordering system for customers to easily place their orders for pickup or delivery.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Services Section -->

    <!-- Start Products Section -->
    <div class="products-section" id="products">
        <div class="products-head">
            <h1>Our Products</h1>
            <p>we prioritize quality in every step of the cooking process.</p>
        </div>
        <div class="products">
            
            <div class="product-card">
                <div class="new-product">
                    <p>New</p>
                </div>
                <div class="product-image">
                    <img src="imgs/products/pro1.png" alt="">
                </div>
                <div class="product-about">
                    <div class="product-info">
                        <h3>Fried chicken thigh</h3>
                        <p>Healthy Freid Chicken Healthy Freid Chicken Healthy Freid Chicken</p>
                    </div>
                    <div class="product-ratio">
                        <div class="product-price">
                            $25<span> / 10 pcs</span>
                        </div>
                        <div class="product-rating">
                            <i class="fa-solid fa-star orange"></i>
                            <i class="fa-solid fa-star orange"></i>
                            <i class="fa-solid fa-star orange"></i>
                            <i class="fa-solid fa-star orange"></i>                    
                            <i class="fa-regular fa-star"></i>
                            3.9
                        </div>
                    </div>
                    <div class="product-buttons">
                        <button class="buy-button">More Details</button>
                        <button class="add-to-card"><i class="fa-solid fa-cart-plus"></i></button>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <div class="new-product">
                    <p>New</p>
                </div>
                <div class="product-image">
                    <img src="imgs/products/pro2.png" alt="">
                </div>
                <div class="product-about">
                    <div class="product-info">
                        <h3>Plate fried chicken thigh</h3>
                        <p>Healthy Freid Chicken Healthy Freid Chicken Healthy Freid Chicken</p>
                    </div>
                    <div class="product-ratio">
                        <div class="product-price">
                            $30<span> / 1 plate</span>
                        </div>
                        <div class="product-rating">
                            <i class="fa-solid fa-star orange"></i>
                            <i class="fa-solid fa-star orange"></i>
                            <i class="fa-solid fa-star orange"></i>
                            <i class="fa-solid fa-star orange"></i>                    
                            <i class="fa-regular fa-star"></i>
                            3.9
                        </div>
                    </div>
                    <div class="product-buttons">
                        <button class="buy-button">More Details</button>
                        <button class="add-to-card"><i class="fa-solid fa-cart-plus"></i></button>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <div class="new-product">
                    <p>New</p>
                </div>
                <div class="product-image">
                    <img src="imgs/products/pro4.png" alt="">
                </div>
                <div class="product-about">
                    <div class="product-info">
                        <h3>Plate freid chicken wings</h3>
                        <p>Healthy Freid Chicken Healthy Freid Chicken Healthy Freid Chicken</p>
                    </div>
                    <div class="product-ratio">
                        <div class="product-price">
                            $40<span> / 1 plate</span>
                        </div>
                        <div class="product-rating">
                            <i class="fa-solid fa-star orange"></i>
                            <i class="fa-solid fa-star orange"></i>
                            <i class="fa-solid fa-star orange"></i>
                            <i class="fa-solid fa-star orange"></i>                    
                            <i class="fa-regular fa-star"></i>
                            3.9
                        </div>
                    </div>
                    <div class="product-buttons">
                        <button class="buy-button">More Details</button>
                        <button class="add-to-card"><i class="fa-solid fa-cart-plus"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn">
            <a href="/products" class="show-more">Show More Product</a>
        </div>
    </div>
    <!-- End Products Section -->

    <!-- Start About Section -->
    <div class="about-section" id="about">
        <div class="about-head">
            <h1>About Us</h1>
            <p>Know more about us.</p>
        </div>
        <div class="about">
            <div class="left-image">
                <img src="imgs/wallpaper.png" alt="" width="400px">
            </div>
            <div class="right-text">
                <p>Los Pollos Hermanos is a premier food establishment dedicated to providing our customers with the highest quality food and exceptional service. We take pride in offering a wide range of delicious dishes, all made with the freshest ingredients available.
                    <br><br>Our commitment to excellence extends beyond the food we serve. We strive to create a warm and welcoming atmosphere where our customers can relax and enjoy their meals in the company of friends and family.
                    <br><br>At Los Pollos Hermanos, we believe that food is more than just sustenance - it's an experience. That's why we put so much care and attention into every dish we prepare, ensuring that every bite is bursting with flavor and satisfaction.
                    <br><br>Whether you're looking for a quick lunch, a romantic dinner, or a large family gathering, we have something for everyone. So come visit us today and see why Los Pollos Hermanos is the go-to destination for food lovers everywhere.</p>
            </div>
        </div>
    </div>
    <!-- End About Section -->

    <!-- Start Contact Section -->
    <div class="contact-section" id="contact">
        <div class="contact-head">
            <h1>Get in Touch!</h1>
            <p>If you have any questions or comments, please don't hesitate to contact us.<br>We would love to hear from you!</p>
        </div>
        <div class="contact">
            <a href="#"><i class="fa-regular fa-paper-plane"></i>  Email Us</a>
        </div>
    </div>
    <!-- End Contact Section -->

    <!-- Start Footer Section -->
    <div class="footer-section">
        <div class="social-media">
            <a href="#" class="linkedin"><i class="fa-brands fa-linkedin"></i></a>
            <a href="#" class="github"><i class="fa-brands fa-github"></i></a>
            <a href="#" class="twitter"><i class="fa-brands fa-twitter"></i></a>
        </div>
        <ul class="footer-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#products">Products</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#">Book a Table</a></li>
        </ul>
        <p class="edit">Edited By <span>Zine-eddine Bardoud</span> @ 2023</p>
    </div>
    <!-- End Footer Section -->
    
@endsection