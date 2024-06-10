<x-site-layout>

    <h1>hi</h1>

    <!-- banner section start -->
    <div class="banner_section layout_padding">
        <div class="container">
            <div id="banner_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="banner_taital_main">
                                    <h1 class="banner_taital">Ashrr <br>Coffo</h1>
                                    <p class="banner_text">Where every drop is a masterpiece<br>Brewing up brilliance for your daily delight</p>
                                    <div class="btn_main">
                                        <div class="about_bt active"><a href="#">About Us</a></div>
                                        <div class="callnow_bt"><a href="#">Call Now</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="banner_taital_main">
                                    <h1 class="banner_taital">Ashrr <br>Coffo</h1>
                                    <p class="banner_text">Where every drop is a masterpiece<br>Brewing up brilliance for your daily delight</p>
                                    <div class="btn_main">
                                        <div class="about_bt active"><a href="#">About Us</a></div>
                                        <div class="callnow_bt"><a href="#">Call Now</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="banner_taital_main">
                                    <h1 class="banner_taital">Ashrr <br>Coffo</h1>
                                    <p class="banner_text">Where every drop is a masterpiece<br>Brewing up brilliance for your daily delight</p>
                                    <div class="btn_main">
                                        <div class="about_bt active"><a href="#">About Us</a></div>
                                        <div class="callnow_bt"><a href="#">Call Now</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#banner_slider" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="carousel-control-next" href="#banner_slider" role="button" data-slide="next">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- banner section end -->
    </div>
    <!-- header section end -->
    <!-- about section start -->
    <div class="about_section layout_padding">
        <div class="container">
            <div class="about_section_2">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about_taital_box">
                            <h1 class="about_taital">About Our shop</h1>
                            <h1 class="about_taital_1">Coffee Distribution</h1>
                            <p class=" about_text">Step into our virtual coffee sanctuary, where the click of a button transports you to a world of rich aromas and unparalleled flavors. At our online coffee shop, we've meticulously curated a selection of the finest beans from around the globe, each chosen for its distinct character and quality. From the comforting embrace of a classic latte to the bold allure of an artisanal pour-over, every cup is crafted with care and precision. Whether you're seeking a moment of tranquility amidst a busy day or a virtual gathering place to connect with friends, our digital café invites you to indulge in the simple pleasure of a perfectly brewed cup. Welcome to our online haven, where the artistry of coffee meets the convenience of the digital age.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image_iman"><img src="images/about-img.png" class="about_img"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about section end -->
    <!-- coffee section start -->
    <div class="coffee_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="coffee_taital">OUR Coffee Products</h1>
                </div>
            </div>
        </div>
        <div class="coffee_section_2">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container-fluid">
                            <div class="row">
                                @foreach ($products as $pro)
                                <div class="col-lg-3 col-md-6">
                                    <div class="coffee_img"><img src="{{ asset('uploads/product/' . $pro->image) }}"></div>
                                    <div class="coffee_box">
                                        <h3 class="types_text">{{$pro->name}}</h3>
                                        <p class="looking_text">{{$pro->description}}</p>
                                        <div class="read_bt"><a href="#">Read More</a></div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container-fluid">
                            <div class="row">
                                @foreach ($products as $pro)
                                <div class="col-lg-3 col-md-6">
                                    <div class="coffee_img"><img src="{{ asset('uploads/product/' . $pro->image) }}"></div>
                                    <div class="coffee_box">
                                        <h3 class="types_text">{{$pro->name}}</h3>
                                        <p class="looking_text">{{$pro->description}}</p>
                                        <div class="read_bt"><a href="#">Read More</a></div>
                                    </div>
                                </div>
                                @endforeach


                            </div>
                        </div>
                    </div>

                </div>
                <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- coffee section end -->
    <!-- contact section start -->
    <div class="contact_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="contact_taital">Get In Touch</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="contact_section_2">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mail_section_1">
                            <input type="text" class="mail_text" placeholder="Your Name" name="Your Name">
                            <input type="text" class="mail_text" placeholder="Your Email" name="Your Email">
                            <input type="text" class="mail_text" placeholder="Your Phone" name="Your Phone">
                            <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                            <div class="send_bt"><a href="#">Send</a></div>
                        </div>
                    </div>
                    <div class="map_main">
                        <div class="map-responsive">
                            <iframe
                                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France"
                                width="250" height="500" frameborder="0" style="border:0; width: 100%;"
                                allowfullscreen=""en></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-site-layout>
