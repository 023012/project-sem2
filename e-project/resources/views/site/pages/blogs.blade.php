@extends('site.app')
@section('content')

    <!-- ...:::: Start Breadcrumb Section:::... -->
    <div class="breadcrumb-section breadcrumb-bg-color--golden">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">Tất Cả Bài Viết</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="{{route('site.home')}}">Trang Chủ</a></li>
                                    <li><a href="{{route('site.blogs')}}">Bài Viết</a></li>
                                    <li class="active" aria-current="page">Tất Cả Bài Viết</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- ...:::: Start Blog List Section:::... -->
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
                                                    <a href="#" class="accordion-title collapsed"
                                                        data-bs-toggle="collapse" data-bs-target="#men-fashion"
                                                        aria-expanded="false">Men <i
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
                
                <div class="col-lg-9">
                    <div class="shop-sort-section">
                        <div class="container">
                            <div class="row">
                                <!-- Start Sort Wrapper Box -->
                                <div
                                    class="sort-box d-flex justify-content-between align-items-md-center align-items-start flex-md-row flex-column"
                                    data-aos="fade-up" data-aos-delay="0">
                                    <!-- Start Sort tab Button -->
                                    <div class="sort-tablist d-flex align-items-center">
                                        <ul class="tablist nav sort-tab-btn">
                                            <li><a class="nav-link active" data-bs-toggle="tab"
                                                   href="#layout-3-grid"><img
                                                        src="{{asset('frontend/assets/images/icons/bkg_grid.png')}}"
                                                        alt=""></a></li>
                                            <li><a class="nav-link" data-bs-toggle="tab" href="#layout-list"><img
                                                        src="{{asset('frontend/assets/images/icons/bkg_list.png')}}"
                                                        alt=""></a></li>'
                                        </ul>

                                        <!-- Start Page Amount -->
                                        <div class="page-amount ml-2">
                                            <span>Showing 1–9 of 21 results</span>
                                        </div> <!-- End Page Amount -->
                                    </div> <!-- End Sort tab Button -->

                                    <!-- Start Sort Select Option -->
                                    <div class="sort-select-list d-flex align-items-center">
                                        <label class="mr-2">Sort By:</label>
                                        <form action="#">
                                            <fieldset>
                                                <select name="speed" id="speed">
                                                    <option>Sort by average rating</option>
                                                    <option>Sort by popularity</option>
                                                    <option selected="selected">Sort by newness</option>
                                                    <option>Sort by price: low to high</option>
                                                    <option>Sort by price: high to low</option>
                                                    <option>Product Name: Z</option>
                                                </select>
                                            </fieldset>
                                        </form>
                                    </div> <!-- End Sort Select Option -->


                                </div> <!-- Start Sort Wrapper Box -->
                            </div>
                        </div>
                    </div> <!-- End Section Content -->
                    <div class="tab-pane active show sort-layout-single" id="layout-3-grid">
                        <div class="row">
                            @foreach ($blogs as $blog)                                
                                <div class="col-xl-4 col-sm-6 col-12">
                                    <!-- Start Product Default Single Item -->
                                    <div class="product-default-single-item product-color--golden"
                                         data-aos="fade-up" data-aos-delay="0">
                                        <div class="image-box" style="width= 50px; height:150px">
                                            <a href="{{route('site.blog-single', $blog->id)}}"
                                               class="image-link">
                                                <img src="{{ asset('uploads/' . $blog->image) }}"
                                                     alt="Product Thumbnail" class="img-fluid" width="50px" height="50px">
                                            </a>
                                        </div>
                                                                                
                                        <div style="display: flex; font-size: 5px;">
                                            <ul class="post-meta" style="display: flex; margin:0px; padding: 0px;font-size: 9px; text-decoration:none">
                                                <li>POSTED BY : <a href="#" class="author">{{$blog->write_by}}</a></li>
                                                <li>ON : <a href="#" class="date">{{$blog->created_at}}</a></li>
                                            </ul>
                                        </div>
                                        <div style="text-align: center">
                                            <h5 class="title"><b><a
                                                href="{{route('site.blog-single', $blog->id)}}">{{$blog->title}}</a></b>
                                            </h5>
                                            
                                            <a href="{{route('site.blog-single', $blog->id)}}" class="read-more-btn icon-space-left">Read More <span class="icon"><i
                                                        class="ion-ios-arrow-thin-right"></i></span></a>
                                        </div>
                                        
                                        
                                    </div>
                                    <!-- End Product Default Single Item -->

                                </div>
                            @endforeach

                        </div>
                    </div> <!-- End Grid View Product -->                    
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Blog List Section:::... -->

@endsection