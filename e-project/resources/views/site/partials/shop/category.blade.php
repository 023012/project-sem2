<div class="siderbar-section" data-aos="fade-up" data-aos-delay="0">

    <!-- Start Single Sidebar Widget -->
    <div class="sidebar-single-widget">
        <h6 class="sidebar-title">Danh mục</h6>
        <div class="sidebar-content">
            <ul class="sidebar-menu">
                @foreach($categories as $category)
                    <li><a href="{{ route('site.category', $category->id) }}">{{ $category->name }}</a></li>
                @endforeach
            </ul>
        </div>
    </div> <!-- End Single Sidebar Widget -->

    <!-- Start Single Sidebar Widget -->
    <div class="sidebar-single-widget">
        <h6 class="sidebar-title">Lọc theo khoảng giá</h6>
        <div class="sidebar-content">
            <form action="{{ route('site.product.filterByPrice') }}" method="GET">
                <div class="default-form-box">
                    <label for="min_price">Giá tối thiểu: <span>0 ₫</span></label>
                    <input type="text" name="price_min" id="min_price" value="{{ old('price_min') }}">
                </div>
                <div class="default-form-box">
                    <label for="max_price">Giá tối đa: <span>50.000.000 ₫</span></label>
                    <input type="text" name="price_max" id="max_price" value="{{ old('price_max') }}">
                </div>
                <button type="submit" class="btn btn-golden">Áp dụng</button>
            </form>
        </div>
    </div> <!-- End Single Sidebar Widget -->

{{--    <!-- Start Single Sidebar Widget -->--}}
{{--    <div class="sidebar-single-widget">--}}
{{--        <h6 class="sidebar-title">MANUFACTURER</h6>--}}
{{--        <div class="sidebar-content">--}}
{{--            <div class="filter-type-select">--}}
{{--                <ul>--}}
{{--                    <li>--}}
{{--                        <label class="checkbox-default" for="brakeParts">--}}
{{--                            <input type="checkbox" id="brakeParts">--}}
{{--                            <span>Brake Parts(6)</span>--}}
{{--                        </label>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <label class="checkbox-default" for="accessories">--}}
{{--                            <input type="checkbox" id="accessories">--}}
{{--                            <span>Accessories (10)</span>--}}
{{--                        </label>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <label class="checkbox-default" for="EngineParts">--}}
{{--                            <input type="checkbox" id="EngineParts">--}}
{{--                            <span>Engine Parts (4)</span>--}}
{{--                        </label>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <label class="checkbox-default" for="hermes">--}}
{{--                            <input type="checkbox" id="hermes">--}}
{{--                            <span>hermes (10)</span>--}}
{{--                        </label>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <label class="checkbox-default" for="tommyHilfiger">--}}
{{--                            <input type="checkbox" id="tommyHilfiger">--}}
{{--                            <span>Tommy Hilfiger(7)</span>--}}
{{--                        </label>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div> <!-- End Single Sidebar Widget -->--}}

{{--    <!-- Start Single Sidebar Widget -->--}}
{{--    <div class="sidebar-single-widget">--}}
{{--        <h6 class="sidebar-title">SELECT BY COLOR</h6>--}}
{{--        <div class="sidebar-content">--}}
{{--            <div class="filter-type-select">--}}
{{--                <ul>--}}
{{--                    <li>--}}
{{--                        <label class="checkbox-default" for="black">--}}
{{--                            <input type="checkbox" id="black">--}}
{{--                            <span>Black (6)</span>--}}
{{--                        </label>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <label class="checkbox-default" for="blue">--}}
{{--                            <input type="checkbox" id="blue">--}}
{{--                            <span>Blue (8)</span>--}}
{{--                        </label>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <label class="checkbox-default" for="brown">--}}
{{--                            <input type="checkbox" id="brown">--}}
{{--                            <span>Brown (10)</span>--}}
{{--                        </label>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <label class="checkbox-default" for="Green">--}}
{{--                            <input type="checkbox" id="Green">--}}
{{--                            <span>Green (6)</span>--}}
{{--                        </label>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <label class="checkbox-default" for="pink">--}}
{{--                            <input type="checkbox" id="pink">--}}
{{--                            <span>Pink (4)</span>--}}
{{--                        </label>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div> <!-- End Single Sidebar Widget -->--}}

{{--    <!-- Start Single Sidebar Widget -->--}}
{{--    <div class="sidebar-single-widget">--}}
{{--        <h6 class="sidebar-title">Tag products</h6>--}}
{{--        <div class="sidebar-content">--}}
{{--            <div class="tag-link">--}}
{{--                <a href="#">asian</a>--}}
{{--                <a href="#">brown</a>--}}
{{--                <a href="#">euro</a>--}}
{{--                <a href="#">fashion</a>--}}
{{--                <a href="#">hat</a>--}}
{{--                <a href="#">t-shirt</a>--}}
{{--                <a href="#">teen</a>--}}
{{--                <a href="#">travel</a>--}}
{{--                <a href="#">white</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div> <!-- End Single Sidebar Widget -->--}}

    <!-- Start Single Sidebar Widget -->
    <div class="sidebar-single-widget">
        <div class="sidebar-content">
            <a href="#"
               class="sidebar-banner img-hover-zoom">
                <img class="img-fluid"
                     src="{{asset('frontend/assets/images/banner/side-banner.jpg')}}" alt="">
            </a>
        </div>
    </div> <!-- End Single Sidebar Widget -->

</div> <!-- End Sidebar Area -->
