
<section class="contact text-white custom-fs-14">
    <div class="container">
        <div class="title">
            <h2><span>GET IN</span> TOUCH
            </h2>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2>
                    <a href="#" class="custom-fs-30 custom-font-oswald custom-text-primary">Contact Us</a>
                </h2>

                <ul style="list-style: none;" class="mb-4">
                    <li class="mb-2">Address: {{$setting->address1}}</li>
                    <li class="mb-2">Tel.: {{$setting->phone1}}
                    </li>

                </ul>
                <ul style="list-style: none;" class="mb-4">
                    <li class="mb-2">E-mail: {{$setting->email1}},</li>

                </ul>
                <img src="{{getImage($setting->logo)}}" alt="" class="img-fluid">
            </div>
            <div class="col-lg-6">

                <form action="#">
                    <div class="form_wrap_1">
                        <input type="text" name="" placeholder="Your Name" id="" class="form-control">
                    </div>
                    <div class="form_wrap_1">
                        <input type="email" name="" placeholder="Your Email" id="" class="form-control">
                    </div>
                    <div class="form_wrap_1">
                        <input type="tel" name="" placeholder="Contact No" id="" class="form-control">
                    </div>
                    <div class="form_wrap_1">
                        <textarea name="" id="" placeholder="Message" class="form-control"></textarea>
                    </div>
                    <button class="btn btn_style_2 w-100 mt-3">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
<footer>

    <div class="footer_top">
        <div class="container">

            <div class="row">
                <div class="col-lg-5 mb-3 mb-lg-0">
                    <h2 class="mb-2 custom-fs-30 custom-font-oswald text-center">Social Media
                    </h2>
                    <ul class="social_media">
                        <li><a href="{{$setting->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="{{$setting->linkedin}}"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="{{$setting->twitter}}"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="{{$setting->instagram}}"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-7">
                    <h2 class="mb-2 custom-fs-30 custom-font-oswald text-center">Subscribe to Notices
                    </h2>
                    <p class="text-center custom-fs-14 mb-3">
                        Keep your email address to subscribe to us inorder to get updated about latest market news;
                    </p>
                    <form action="#" class="d-flex justify-content-center align-items-center">
                        <div class="form_wrap_1 mb-0">
                            <input type="email" name="" id="" placeholder="Email" class="form-control">
                        </div>
                        <button class="btn btn_style_2">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bot">
        <div class="container">
            <div class="d-flex justify-content-around text-center flex-wrap">
                <p>Copyright © {{date('Y')}} themarketcontrol.com
            </div>
        </div>
    </div>
</footer>
