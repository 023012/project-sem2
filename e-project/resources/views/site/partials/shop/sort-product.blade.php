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
                                    alt=""></a></li>
                        '
                    </ul>

                    <!-- Start Page Amount -->
                    <div class="page-amount ml-2">
                        <span>Showing 1–9 of 21 results</span>
                    </div> <!-- End Page Amount -->
                </div> <!-- End Sort tab Button -->

                <!-- Start Sort Select Option -->
                <div class="sort-select-list d-flex align-items-center">
                    <label class="mr-2">Sort By: </label>
                    <form action="{{route('site.shop')}}" method="get">
                        @csrf
                        <fieldset>
                            <select name="sort_option" id="sort_option" onchange="this.form.submit()">
                                @foreach ($sortOptions as $key => $value)
                                    <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
{{--                            <button type="submit">Sắp xếp</button>--}}
                        </fieldset>
                    </form>
                </div> <!-- End Sort Select Option -->


            </div> <!-- Start Sort Wrapper Box -->
        </div>
    </div>
</div>
<script>
    $('[name="sort_option"]').change(function() {
        $(this).closest('form').submit();

    })
</script>
