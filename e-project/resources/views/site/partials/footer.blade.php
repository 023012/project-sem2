   <!-- Start Footer Section -->
   <footer class="footer-section footer-bg section-top-gap-100">
    <div class="footer-wrapper">
        <!-- Start Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="row mb-n6">
                    <div class="col-lg-3 col-sm-6 mb-6">
                        <!-- Start Footer Single Item -->
                        <div class="footer-widget-single-item footer-widget-color--golden" data-aos="fade-up"
                            data-aos-delay="0">
                            <h5 class="title">Thông Tin</h5>
                            <ul class="footer-nav">
                                <li><a href="#">Thông Tin Giao Hàng</a></li>
                                <li><a href="#">Điều Khoản & Điều Kiến</a></li>
                                <li><a href="{{route('site.contact-us')}}">Liên Hệ</a></li>
                                <li><a href="#">Trở Lại</a></li>
                            </ul>
                        </div>
                        <!-- End Footer Single Item -->
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-6">
                        <!-- Start Footer Single Item -->
                        <div class="footer-widget-single-item footer-widget-color--golden" data-aos="fade-up"
                            data-aos-delay="200">
                            <h5 class="title">Tài Khoản Của Tôi</h5>
                            <ul class="footer-nav">
                                <li><a href="{{route('site.user.profile')}}">Tài khoản</a></li>
                                <li><a href="{{route('site.wishlist')}}">Yêu thích</a></li>
                                <li><a href="#">Chính Sách Bảo Mật</a></li>
                                <li><a href="#">Câu Hỏi Thường Gặp</a></li>
                                <li><a href="#">Lịch Sử Mua Hàng</a></li>
                            </ul>
                        </div>
                        <!-- End Footer Single Item -->
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-6">
                        <!-- Start Footer Single Item -->
                        <div class="footer-widget-single-item footer-widget-color--golden" data-aos="fade-up"
                            data-aos-delay="400">
                            <h5 class="title">Thể Loại</h5>
                            <ul class="footer-nav">
                                <li><a href="#">Trang Trí</a></li>
                                <li><a href="#">Dụng cụ nhà bếp</a></li>
                                <li><a href="#">Ghế & Ghế Bar</a></li>
                                <li><a href="#">Ghế Sofa và Ghế Bành</a></li>
                                <li><a href="#">Đèn nội thất</a></li>
                            </ul>
                        </div>
                        <!-- End Footer Single Item -->
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-6">
                        <!-- Start Footer Single Item -->
                        <div class="footer-widget-single-item footer-widget-color--golden" data-aos="fade-up"
                            data-aos-delay="600">
                            <h5 class="title">Về Chúng Tôi</h5>
                            <div class="footer-about">
                                <p>Chúng tôi là một nhóm gồm các nhà thiết kế và phát triển tạo ra sản phẩm chất lượng cao</p>

                                <address class="address">
                                    <span>Địa Chỉ: Số 8 Tôn Thất Thuyết, Phường Mỹ Đình, Quận Từ Liêm, Hà Nội.</span>
                                    <span>Email: demo@example.com</span>
                                </address>
                            </div>
                        </div>
                        <!-- End Footer Single Item -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Top -->

        <!-- Start Footer Center -->
        <div class="footer-center">
            <div class="container">
                <div class="row mb-n6">
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-6">
                        <div class="footer-social" data-aos="fade-up" data-aos-delay="0">
                            <h4 class="title">Theo Dõi Chúng Tôi</h4>
                            <ul class="footer-social-link">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 col-md-6 mb-6">
                        <div class="footer-newsletter" data-aos="fade-up" data-aos-delay="200">
                            <h4 class="title">Đừng Bỏ Lỡ Những Cập Nhật Mới</h4>
                            <div class="form-newsletter">
                                <form action="#" method="post">
                                    <div class="form-fild-newsletter-single-item input-color--golden">
                                        <input type="email" placeholder="Địa Chỉ Email ..." required>
                                        <button type="submit">Đăng Kí!</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Center -->

        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row justify-content-between align-items-center align-items-center flex-column flex-md-row mb-n6">
                    <div class="col-auto mb-6">
                        <div class="footer-payment">
                            <div class="image">
                                <img src="{{ asset('frontend/assets/images/company-logo/payment.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
    </div>
</footer>
<!-- End Footer Section -->
