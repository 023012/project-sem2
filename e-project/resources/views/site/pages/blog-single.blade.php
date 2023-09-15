@extends('site.app')
@section('content')
    <!-- ...:::: Start Breadcrumb Section:::... -->
    <div class="breadcrumb-section breadcrumb-bg-color--golden">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">BÀI VIẾT CÁ NHÂN</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="{{route('site.home')}}">Trang Chủ</a></li>
                                    <li><a href="{{route('site.blog-single')}}">Bài Viết</a></li>
                                    <li class="active" aria-current="page">Bài Viết Cá Nhân</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- ...:::: Start Blog Single Section:::... -->
    <div class="blog-section">
        <div class="container">
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-3">
                    <!-- Start Sidebar Area -->
                    <div class="siderbar-section" data-aos="fade-up" data-aos-delay="0">

                        <!-- Start Single Sidebar Widget -->
                        <div class="sidebar-single-widget">
                            <h6 class="sidebar-title">Search</h6>
                            <div class="default-search-style d-flex">
                                <input class="default-search-style-input-box" type="search" placeholder="Search..."
                                    required>
                                <button class="default-search-style-input-btn" type="submit"><i
                                        class="fa fa-search"></i></button>
                            </div>
                        </div> <!-- End Single Sidebar Widget -->

                        <!-- Start Single Sidebar Widget -->
                        <div class="sidebar-single-widget">
                            <h6 class="sidebar-title">CATEGORIES</h6>
                            <div class="sidebar-content">
                                <ul class="sidebar-menu">
                                    <li><a href="#">Audio</a></li>
                                    <li><a href="#">Company</a></li>
                                    <li><a href="#">Gallery</a></li>
                                    <li><a href="#">Other</a></li>
                                    <li><a href="#">Travel</a></li>
                                    <li><a href="#"> Uncategorized</a></li>
                                    <li><a href="#"> Video</a></li>
                                    <li><a href="#">Wordpress</a></li>
                                </ul>
                            </div>
                        </div> <!-- End Single Sidebar Widget -->

                        <!-- Start Single Sidebar Widget -->
                        <div class="sidebar-single-widget">
                            <h6 class="sidebar-title">Tags</h6>
                            <div class="sidebar-content">
                                <div class="tag-link">
                                    <a href="#">Technology</a>
                                    <a href="#">Information</a>
                                    <a href="#">Wordpress</a>
                                    <a href="#">Devs</a>
                                    <a href="#">Program</a>
                                </div>
                            </div>
                        </div> <!-- End Single Sidebar Widget -->

                        <!-- Start Single Sidebar Widget -->
                        <div class="sidebar-single-widget">
                            <h6 class="sidebar-title">Meta</h6>
                            <div class="sidebar-content">
                                <ul class="sidebar-menu">
                                    <li><a href="#">Log in</a></li>
                                    <li><a href="#">Entries feed</a></li>
                                    <li><a href="#">Comments feed</a></li>
                                    <li><a href="#">WordPress.org</a></li>
                                </ul>
                            </div>
                        </div> <!-- End Single Sidebar Widget -->

                        <!-- Start Single Sidebar Widget -->
                        <div class="sidebar-single-widget">
                            <h6 class="sidebar-title">PRODUCT CATEGORIES</h6>
                            <div class="sidebar-content">
                                <ul class="sidebar-menu">
                                    <li>
                                        <ul class="sidebar-menu-collapse">
                                            <!-- Start Single Menu Collapse List -->
                                            <li class="sidebar-menu-collapse-list">
                                                <div class="accordion">
                                                    <a href="{{route('site.shop')}}"
                                                        class="accordion-title collapsed" data-bs-toggle="collapse"
                                                        data-bs-target="#men-fashion" aria-expanded="false">Men <i
                                                            class="ion-ios-arrow-right"></i></a>
                                                    <div id="men-fashion" class="collapse">
                                                        <ul class="accordion-category-list">
                                                            <li><a href="#">Dresses</a></li>
                                                            <li><a href="#">Jackets &amp; Coats</a></li>
                                                            <li><a href="#">Sweaters</a></li>
                                                            <li><a href="#">Jeans</a></li>
                                                            <li><a href="#">Blouses &amp; Shirts</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li> <!-- End Single Menu Collapse List -->
                                        </ul>
                                    </li>
                                    <li><a href="#">Football</a></li>
                                    <li><a href="#"> Men's</a></li>
                                    <li><a href="#"> Portable Audio</a></li>
                                    <li><a href="#"> Smart Watches</a></li>
                                    <li><a href="#">Tennis</a></li>
                                    <li><a href="#"> Uncategorized</a></li>
                                    <li><a href="#"> Video Games</a></li>
                                    <li><a href="#">Women's</a></li>
                                </ul>
                            </div>
                        </div> <!-- End Single Sidebar Widget -->

                    </div> <!-- End Sidebar Area -->
                </div>
                
            </div>
        </div>
    </div> <!-- ...:::: End Blog Single Section:::... -->

@endsection