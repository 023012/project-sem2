@extends('site.app')
@section('content')

    <!-- ...:::: Start Breadcrumb Section:::... -->
    <div class="breadcrumb-section breadcrumb-bg-color--golden">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">VỀ CHÚNG TÔI</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="{{route('site.home')}}">Trang Chủ</a></li>
                                    <li><a href="#">Thông Tin</a></li>
                                    <li class="active" aria-current="page">Về Chúng Tôi</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- Start About Top -->
    <div class="about-top">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-between d-sm-column">
                <div class="col-md-6">
                    <div class="about-img" data-aos="fade-up" data-aos-delay="0">
                        <div class="img-responsive">
                            <img src="{{asset('frontend/assets/images/about/img-about.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="content" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="title">GIỚI THIỆU VỀ CỬA HÀNG HONO CỦA CHÚNG TÔI</h3>
                        <h5 class="semi-title">Chúng tôi tin rằng mọi dự án tồn tại trong thế giới kỹ thuật số đều là kết quả của một quá trình
                            ý tưởng và mọi ý tưởng đều có nguyên nhân.</h5>
                        <p>Vì lý do này, mỗi thiết kế của chúng tôi đều phục vụ một ý tưởng. Sức mạnh của chúng tôi trong thiết kế được phản ánh bởi
                            tên, sự quan tâm của chúng tôi để biết chi tiết. Chuyên gia của chúng tôi sẽ không ngại đi xa hơn chỉ để
                            tiếp cận gần như hoàn hảo. Chúng ta không yêu cầu mọi thứ phải hoàn hảo nhưng chúng ta cần chúng phải hoàn hảo
                            được chăm sóc hoàn hảo. Đó là lý do tại sao chúng tôi sẵn sàng đóng góp tốt nhất. Không phải một
                            từng chi tiết nhỏ nhất bị bỏ sót dưới con mắt chuyên nghiệp của Billey. Sự cống hiến và
                            nỗ lực tương đương với mức độ đam mê và quyết tâm. Trở nên tốt hơn, cùng nhau trở thành một.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Top -->

    <!-- Start Slill Progress -->
    <div class="progressbar-section section-top-gap-100 section-inner-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="content" data-aos="fade-up" data-aos-delay="0">
                        <h4 class="title">Chức năng đáp ứng sự hoàn hảo</h4>
                        <p>Trong thời đại ngày nay, người ta không thể đánh giá thấp tầm quan trọng của thiết kế, nghệ thuật
                            tạo ra hình ảnh nổi bật để lay động và thu hút khán giả của bạn. Và khi thế giới trở nên nhiều hơn
                            và được số hóa nhiều hơn theo từng giây trôi qua, tầm quan trọng của thiết kế đồ họa ngày càng được nâng cao
                            tăng vọt lên đỉnh.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="custom-progress m-t-40">
                        <div class="skill-progressbar" data-aos="fade-up" data-aos-delay="0">
                            <h6 class="font--semi-bold m-b-15">Thiết Kế</h6>
                            <div class="line-progressbar" data-percentage="75" data-progress-color="#b19361"></div>
                        </div>
                        <div class="skill-progressbar" data-aos="fade-up" data-aos-delay="200">
                            <h6 class="font--semi-bold m-b-15">Ý Tưởng</h6>
                            <div class="line-progressbar" data-percentage="86" data-progress-color="#b19361"></div>
                        </div>
                        <div class="skill-progressbar" data-aos="fade-up" data-aos-delay="400">
                            <h6 class="font--semi-bold m-b-15">Sáng Tạo</h6>
                            <div class="line-progressbar" data-percentage="97" data-progress-color="#b19361"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slill Progress -->

    <!-- Start Service Section -->
    <div class="service-promo-section section-top-gap-100">
        <div class="service-wrapper">
            <div class="container">
                <div class="row">
                    <!-- Start Service Promo Single Item -->
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="0">
                            <div class="image">
                                <img src="{{asset('frontend/assets/images/icons/icon_about1.jpg')}}" alt="">
                            </div>
                            <div class="content">
                                <h6 class="title">Luôn sáng tạo</h6>
                                <p>Luôn sáng tạo với Billey và bộ sưu tập khổng lồ các phần tử, bố cục &
                                    các hiệu ứng.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Promo Single Item -->
                    <!-- Start Service Promo Single Item -->
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="200">
                            <div class="image">
                                <img src="{{asset('frontend/assets/images/icons/icon_about2.jpg')}}" alt="">
                            </div>
                            <div class="content">
                                <h6 class="title">Tùy chỉnh nhanh</h6>
                                <p>Dễ dàng cài đặt và định cấu hình tùy chỉnh chủ đề chỉ bằng vài cú nhấp chuột với Billey.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Promo Single Item -->
                    <!-- Start Service Promo Single Item -->
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="400">
                            <div class="image">
                                <img src="{{asset('frontend/assets/images/icons/icon_about3.jpg')}}" alt="">
                            </div>
                            <div class="content">
                                <h6 class="title">Tích hợp cao cấp</h6>
                                <p>Các plugin cao cấp được tích hợp trong Billey là vũ khí bí mật để doanh nghiệp của bạn
                                    phát triển.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Promo Single Item -->
                    <!-- Start Service Promo Single Item -->
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="600">
                            <div class="image">
                                <img src="{{asset('frontend/assets/images/icons/icon_about4.jpg')}}" alt="">
                            </div>
                            <div class="content">
                                <h6 class="title">Chỉnh sửa thời gian thực</h6>
                                <p>Chỉnh sửa tác phẩm của bạn và xem trước các thay đổi trực tiếp trên màn hình bằng trình tạo trang nâng cao.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Promo Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Service Section -->

    <!--  Start  Team Section    -->
    <div class="team-section section-top-gap-100 secton-fluid section-inner-bg">
        <!-- Start Section Content Text Area -->
        <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-content-gap">
                            <div class="secton-content text-center">
                                <h3 class="section-title">Đội của chúng tôi</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Section Content Text Area -->
        <div class="team-wrapper">
            <div class="container">
                <div class="row mb-n6">
                    <div class="col-xl-3 mb-5">
                        <div class="team-single" data-aos="fade-up" data-aos-delay="0">
                            <div class="team-img">
                                <img class="img-fluid" src="{{asset('frontend/assets/images/team/leader1.png')}}" alt="">
                            </div>
                            <div class="team-content">
                                <h6 class="team-name font--bold mt-5">Giang Đẫm</h6>
                                <span class="team-title">Nhà thiết kế web</span>
                                <ul class="team-social pos-absolute">
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                                    <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                                    <li><a href="#"><i class="ion-social-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 mb-5">
                        <div class="team-single" data-aos="fade-up" data-aos-delay="200">
                            <div class="team-img">
                                <img class="img-fluid" src="{{asset('frontend/assets/images/team/leader2.png')}}" alt="">
                            </div>
                            <div class="team-content">
                                <h6 class="team-name font--bold mt-5">Nguyễn Thành Đạt</h6>
                                <span class="team-title">Người sáng lập</span>
                                <ul class="team-social pos-absolute">
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                                    <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                                    <li><a href="#"><i class="ion-social-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 mb-5">
                        <div class="team-single" data-aos="fade-up" data-aos-delay="400">
                            <div class="team-img">
                                <img class="img-fluid" src="{{asset('frontend/assets/images/team/leader3.png')}}" alt="">
                            </div>
                            <div class="team-content">
                                <h6 class="team-name font--bold mt-5">Đào Tuấn Anh</h6>
                                <span class="team-title">Giám đốc điều hành</span>
                                <ul class="team-social pos-absolute">
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                                    <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                                    <li><a href="#"><i class="ion-social-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 mb-5">
                        <div class="team-single" data-aos="fade-up" data-aos-delay="600">
                            <div class="team-img">
                                <img class="img-fluid" src="{{asset('frontend/assets/images/team/leader4.png')}}" alt="">
                            </div>
                            <div class="team-content">
                                <h6 class="team-name font--bold mt-5">Nguyễn Minh Tuấn</h6>
                                <span class="team-title">Giám đốc công nghệ</span>
                                <ul class="team-social pos-absolute">
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                                    <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                                    <li><a href="#"><i class="ion-social-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--   End  Team Section   -->

    <!-- Start Company Logo Section -->
    <div class="company-logo-section section-top-gap-100 section-fluid">
        <div class="company-logo-wrapper" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="company-logo-slider default-slider-nav-arrow">
                            <!-- Slider main container -->
                            <div class="swiper-container company-logo-slider">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Start Company Logo Single Item -->
                                    <div class="company-logo-single-item swiper-slide">
                                        <div class="image"><img class="img-fluid"
                                                src="{{asset('frontend/assets/images/company-logo/company-logo-1.png')}}" alt=""></div>
                                    </div>
                                    <!-- End Company Logo Single Item -->
                                    <!-- Start Company Logo Single Item -->
                                    <div class="company-logo-single-item swiper-slide">
                                        <div class="image"><img class="img-fluid"
                                                src="{{asset('frontend/assets/images/company-logo/company-logo-2.png')}}" alt=""></div>
                                    </div>
                                    <!-- End Company Logo Single Item -->
                                    <!-- Start Company Logo Single Item -->
                                    <div class="company-logo-single-item swiper-slide">
                                        <div class="image"><img class="img-fluid"
                                                src="{{asset('frontend/assets/images/company-logo/company-logo-3.png')}}" alt=""></div>
                                    </div>
                                    <!-- End Company Logo Single Item -->
                                    <!-- Start Company Logo Single Item -->
                                    <div class="company-logo-single-item swiper-slide">
                                        <div class="image"><img class="img-fluid"
                                                src="{{asset('frontend/assets/images/company-logo/company-logo-4.png')}}" alt=""></div>
                                    </div>
                                    <!-- End Company Logo Single Item -->
                                    <!-- Start Company Logo Single Item -->
                                    <div class="company-logo-single-item swiper-slide">
                                        <div class="image"><img class="img-fluid"
                                                src="{{asset('frontend/assets/images/company-logo/company-logo-5.png')}}" alt=""></div>
                                    </div>
                                    <!-- End Company Logo Single Item -->
                                    <!-- Start Company Logo Single Item -->
                                    <div class="company-logo-single-item swiper-slide">
                                        <div class="image"><img class="img-fluid"
                                                src="{{asset('frontend/assets/images/company-logo/company-logo-6.png')}}" alt=""></div>
                                    </div>
                                    <!-- End Company Logo Single Item -->
                                    <!-- Start Company Logo Single Item -->
                                    <div class="company-logo-single-item swiper-slide">
                                        <div class="image"><img class="img-fluid"
                                                src="{{asset('frontend/assets/images/company-logo/company-logo-7.png')}}" alt=""></div>
                                    </div>
                                    <!-- End Company Logo Single Item -->
                                    <!-- Start Company Logo Single Item -->
                                    <div class="company-logo-single-item swiper-slide">
                                        <div class="image"><img class="img-fluid"
                                                src="{{asset('frontend/assets/images/company-logo/company-logo-8.png')}}" alt=""></div>
                                    </div>
                                    <!-- End Company Logo Single Item -->
                                </div>
                            </div>
                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev d-none d-md-block"></div>
                            <div class="swiper-button-next d-none d-md-block"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Company Logo Section -->

@endsection