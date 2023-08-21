      <!-- aside -->
      <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
          <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
              <i class="fe fe-x"><span class="sr-only"></span></i>
          </a>
          <nav class="vertnav navbar navbar-light">
              <!-- nav bar -->
              <div class="w-100 mb-4 d-flex">
                  <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="{{ route('admin.dashboard') }}">
                      <svg version="1.1" id="logo" class="navbar-brand-img brand-sm"
                          xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                          y="0px" viewBox="0 0 120 120" xml:space="preserve">
                          <g>
                              <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                              <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                              <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                          </g>
                      </svg>
                  </a>
              </div>
              <ul class="navbar-nav flex-fill w-100 mb-2">
                  <li class="nav-item dropdown">
                      <a href="#dashboard" data-toggle="collapse" aria-expanded="false"
                          class="dropdown-toggle nav-link">
                          <span class="ml-3 item-text">Dashboard</span><span class="sr-only">(current)</span>
                      </a>
                  </li>
                  {{-- Quản lý account --}}
{{--                  <li class="nav-item dropdown">--}}
{{--                      <a href="#Admin" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">--}}
{{--                          <i class="fe fe-grid fe-16"></i>--}}
{{--                          <span class="ml-3 item-text">Quản lý tài khoản</span>--}}
{{--                      </a>--}}
{{--                      <ul class="collapse list-unstyled pl-4 w-100" id="Admin">--}}
{{--                          <li class="nav-item">--}}
{{--                              <a class="nav-link pl-3"  href="{{ route('admin.admin-manage.index') }}"><span class="ml-1 item-text">Danh sách tài khoản</span>--}}
{{--                              </a>--}}
{{--                          </li>--}}
{{--                          <li class="nav-item">--}}
{{--                              <a class="nav-link pl-3" href="{{ route('admin.admin-manage.create') }}"><span class="ml-1 item-text">Thêm mới </span>--}}
{{--                              </a>--}}
{{--                          </li>--}}
{{--                      </ul>--}}
{{--                  </li>--}}

                  {{-- Quản lý Khách hàng --}}
                  <li class="nav-item dropdown">
                      <a href="#Customer" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                          <i class="fe fe-grid fe-16"></i>
                          <span class="ml-3 item-text">Quản lý khách hàng</span>
                      </a>
                      <ul class="collapse list-unstyled pl-4 w-100" id="Customer">
                        <li class="nav-item">
                            <a class="nav-link pl-3"  href="{{ route('admin.user.index') }}"><span class="ml-1 item-text">Danh sách khách hàng</span>
                            </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link pl-3" href="{{ route('admin.user.create') }}"><span class="ml-1 item-text">Thêm mới khách hàng</span>
                          </a>
                      </li>
                    </ul>
                  </li>

                  {{-- Quản lý danh mục --}}
                  <li class="nav-item ">
                      <a href="#Category" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                          <i class="fe fe-grid fe-16"></i>
                          <span class="ml-3 item-text">Quản lý danh mục</span>
                      </a>
                      <ul class="collapse list-unstyled pl-4 w-100" id="Category">
                        <li class="nav-item">
                            <a class="nav-link pl-3"  href="{{ route('admin.category.index') }}"><span class="ml-1 item-text">Danh sách danh mục</span>
                            </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link pl-3" href="{{ route('admin.category.create') }}"><span class="ml-1 item-text">Thêm mới danh mục</span>
                          </a>
                      </li>
                    </ul>
                  </li>


                  {{-- Quản lý contac --}}
                  <li class="nav-item dropdown">
                      <a href="#Contac" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                          <i class="fe fe-grid fe-16"></i>
                          <span class="ml-3 item-text">Quản lý liên hệ</span>
                      </a>
                      <ul class="collapse list-unstyled pl-4 w-100" id="Contac">
                        <li class="nav-item">
                            <a class="nav-link pl-3"  href="{{ route('admin.contact.index') }}"><span class="ml-1 item-text">Danh sách liên hệ</span>
                            </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link pl-3" href="{{ route('admin.contact.create') }}"><span class="ml-1 item-text">Thêm mới liên hệ</span>
                          </a>
                      </li>
                    </ul>
                  </li>

                  {{-- Quản lý sản phẩm --}}
                  <li class="nav-item dropdown">
                      <a href="#Products" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                          <i class="fe fe-grid fe-16"></i>
                          <span class="ml-3 item-text">Quản lý sản phẩm</span>
                      </a>
                      <ul class="collapse list-unstyled pl-4 w-100" id="Products">
                          <li class="nav-item">
                              <a class="nav-link pl-3"  href="{{ route('admin.products.index') }}"><span class="ml-1 item-text">Danh sách sản phẩm</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link pl-3" href="{{ route('admin.product-comments.index') }}"><span class="ml-1 item-text">nhận xét sản phẩm</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link pl-3"  href="{{ route('admin.discount.index') }}"><span class="ml-1 item-text">giảm giá</span>
                              </a>
                          </li>
                      </ul>
                  </li>

                  {{-- Quản lý đơn hàng --}}
                  <li class="nav-item dropdown">
                      <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                          <i class="fe fe-grid fe-16"></i>
                          <span class="ml-3 item-text">Quản lý đơn hàng</span>
                      </a>
                  </li>

                  {{-- Bảng báo cáo thống kê --}}
                  <li class="nav-item dropdown">
                      <a href="#Report" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                          <i class="fe fe-grid fe-16"></i>
                          <span class="ml-3 item-text">Báo cáo thống kê</span>
                      </a>
                      <ul class="collapse list-unstyled pl-4 w-100" id="Report">
                          <li class="nav-item">
                              <a class="nav-link pl-3" href="./ui-color.html"><span class="ml-1 item-text">Báo xuất nhập hàng</span>
                              </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link pl-3" href="./ui-color.html"><span class="ml-1 item-text">Báo xuất lãi suất</span>
                            </a>
                        </li>
                      </ul>
                  </li>
              </ul>
          </nav>
      </aside>
      <!-- aside -->
