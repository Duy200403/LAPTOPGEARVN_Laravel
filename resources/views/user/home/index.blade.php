<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
        href="https://myshoes.vn/image/catalog/logo/logo-myshoes-nho.png"
        rel="icon"
    />
    <title>LapTop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href=" {{asset('user/Icons/fontawesome/css/all.min.css')}} ">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
        crossorigin="anonymous"
    />
    <link
        rel="stylesheet"
        type="text/css"
        href="{{asset('user/Css/Client/base/reset.css')}}"
    />
    <link
        rel="stylesheet"
        type="text/css"
        href=" {{asset('user/Css/Client/base/root.css')}}"
    />
    <link rel="stylesheet" href="{{asset('user/Css/Client/Effects/hover.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}" />
</head>

<body>
<div class="site-wrapper">
    <header class="header">
        <div class="header-wrapper">
            <div class="header-navbar">
                <div class="logo-wrapper">
                    <a href="{{ route('user.home.index')}}">
                        <img
                            src="https://static.ybox.vn/2022/5/1/1653287716717-LOGO%20XGEAR%20FINAL%20black.png"
                            alt
                            class="logo-img"
                        />
                    </a>
                </div>
                <form class="search-wrapper" action method="POST">
                    <input type="text" name="by" placeholder="Tìm kiếm sản phẩm..." />
                    <button type="submit" class="search-btn">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
                <div class="classic-wrapper">
                    @if(Auth::guard('customers')->check())
                        <div class="accounts">
                            <a href="?controller=login&action=login" class="accounts-link">
                                <i class='bx bxs-user'></i>
                                <div class="links-text">
                                    <span>Tài khoản</span>
                                    <span>{{ Auth::guard('customers')->user()->name }}</span>
                                </div>
                            </a>
                            <div class="dropdown-menu-accounts">
                                <span class="login"><i class="fa-solid fa-arrow-right-to-bracket"></i>
                                <a href="{{ route('user.login.logout') }}">Logout</a></span>
                            </div>
                        </div>
                    @else
                        <div class="accounts">
                            <a href="?controller=login&action=login" class="accounts-link">
                                <i class='bx bxs-user'></i>
                                <div class="links-text">
                                    <span>Tài khoản</span>
                                    <span>Đăng nhập/ Đăng ký</span>
                                </div>
                            </a>
                        </div>
                    @endif
                    <div class="cart">
                        <a href="{{ route('home.showCart') }}" class="cart-link hvr-icon-grow">
                            <i class='bx bx-cart-alt'></i>
                        </a>
                        <span class="quantity">!</span>
                        <div class="cart-empty">
                            <span>Giỏ Hàng</span>
                        </div>
                    </div>
                    <div class="cart">
                        <a href="{{ route('user.cartHistory.history') }}" class="cart-link hvr-icon-grow">
                            <i class='bx bx-cart-download' ></i>
                        </a>
                        <div class="cart-empty">
                            <span>Lịch Sử</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-wrapper">
                <div class="menu-default">
                    <ul class="main-menu">
                        <a href="{{ route('user.home.index')}}" class="item-link">
                            <span class="item-name">HOME</span>
                        </a>
                        @foreach ($type as $laptop)
                        @if ($laptop->id == 1)
                        <li class="menu-item hvr-float-shadow position-relative">
                            <a href="{{ route('user.type.tp', ['id' => $laptop->id]) }}" class="item-link">
                                <span class="item-name">{{ $laptop->Type_name }}</span>
                            </a>
                            <div class="sub-menu z-3 position-absolute w-100 text-center">
                                @php
                                    $displayedCateIds = []; // Danh sách các cate_id đã được hiển thị
                                @endphp
                                @foreach ($product as $item)
                                    @if ($item->id == 1 && !in_array($item->cate_id, $displayedCateIds))
                                        <ul class="list-group">
                                            <a href="{{ route('user.category.cat', ['id' => $item->cate_id]) }}">
                                            <li class="list-group-item p-2">{{ $item->Category_name }}</li>
                                            </a>
                                        </ul>
                                        @php
                                            $displayedCateIds[] = $item->cate_id; // Đánh dấu rằng cate_id đã được hiển thị
                                        @endphp
                                    @endif
                                @endforeach
                            </div>
                        </li>

                        @endif
                        @if ($laptop->id == 2)
                            <li class="menu-item hvr-float-shadow position-relative">
                                <a href="{{ route('user.type.tp', ['id' => $laptop->id]) }}" class="item-link">
                                    <span class="item-name">{{ $laptop->Type_name }}</span>
                                </a>
                                <div class="sub-menu z-3 position-absolute w-100 text-center">
                                    @php
                                        $displayedCateIds = []; // Danh sách các cate_id đã được hiển thị
                                    @endphp
                                    @foreach ($product as $item)
                                        @if ($item->id == 2 && !in_array($item->cate_id, $displayedCateIds))
                                        <ul class="list-group">
                                            <a href="{{ route('user.category.cat', ['id' => $item->cate_id]) }}">
                                            <li class="list-group-item p-2">{{ $item->Category_name }}</li>
                                            </a>
                                        </ul>
                                            @php
                                                $displayedCateIds[] = $item->cate_id; // Đánh dấu rằng cate_id đã được hiển thị
                                            @endphp
                                        @endif
                                    @endforeach
                                </div>
                            </li>
                        @endif
                        @if ($laptop->id == 3)
                            <li class="menu-item hvr-float-shadow position-relative">
                                <a href="{{ route('user.type.tp', ['id' => $laptop->id]) }}" class="item-link">
                                    <span class="item-name">{{ $laptop->Type_name }}</span>
                                </a>
                                <div class="sub-menu z-3 position-absolute w-100 text-center">
                                    @php
                                        $displayedCateIds = []; // Danh sách các cate_id đã được hiển thị
                                    @endphp
                                    @foreach ($product as $item)
                                        @if ($item->id == 3 && !in_array($item->cate_id, $displayedCateIds))
                                        <ul class="list-group">
                                            <a href="{{ route('user.category.cat', ['id' => $item->cate_id]) }}">
                                            <li class="list-group-item p-2">{{ $item->Category_name }}</li>
                                            </a>
                                        </ul>
                                            @php
                                                $displayedCateIds[] = $item->cate_id; // Đánh dấu rằng cate_id đã được hiển thị
                                            @endphp
                                        @endif
                                    @endforeach
                                </div>
                            </li>
                        @endif

                        @if ($laptop->id == 5)
                            <li class="menu-item hvr-float-shadow position-relative">
                                <a href="" class="item-link">
                                    <span class="item-name">{{ $laptop->Type_name }}</span>
                                </a>
                                <div class="sub-menu z-3 position-absolute w-100 text-center">

                                    @foreach ($product as $item)
                                        @if ($item->id == 5)
                                            <ul class="list-group">
                                                <li class="list-group-item p-2">{{ $item->Category_name }}</li>
                                            </ul>
                                        @endif
                                    @endforeach
                                </div>
                            </li>
                        @endif

                        @if ($laptop->id == 4)
                            <li class="menu-item hvr-float-shadow position-relative">
                                <a href class="item-link">
                                    <span class="item-name">{{ $laptop->Type_name }}</span>
                                </a>
                                <div class="sub-menu z-3 position-absolute w-100 text-center">
                                    @foreach ($product as $item)
                                        @if ($item->id == 4)
                                            <ul class="list-group">
                                                <li class="list-group-item p-2">{{ $item->Category_name }}</li>
                                            </ul>
                                        @endif
                                    @endforeach
                                </div>
                            </li>
                        @endif
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="body">
        <div class="row">
            <div class="col-12 px-0">
                <div class="content">
                    <div class="category-desc">
                        <img
                            class="category-banner"
                            src="{{asset('user/Images/bannerlaptop2.jpg')}}"
                            alt
                        />
                        <img
                            src="{{asset('user/Images/bannerlaptop1.jpg')}}"
                            alt="Giày Adidas Chính Hãng"
                            title="Giày Adidas Chính Hãng"
                            class="category-image"
                        />
                        <img
                            class="category-banner"
                            src="{{asset('user/Images/bannerlaptop2.jpg')}}"
                            alt
                        />
                    </div>
                    <div class="content-top">
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item hvr-icon-fade">
                                <i class="fa-solid fa-circle-check hvr-icon"></i>
                                <span>Hàng chính hãng, chât lượng cao</span>
                            </li>
                            <li class="list-group-item hvr-icon-spin">
                                <i class="fa-solid fa-rotate hvr-icon"></i>
                                <span>Đổi hàng 30 ngày, thủ tục đơn giản</span>
                            </li>
                            <li class="list-group-item hvr-icon-forward">
                                <i class="fa-solid fa-truck hvr-icon"></i>
                                <span>Miễn phí giao hành với đơn > 500k</span>
                            </li>
                        </ul>
                    </div>

                    <div class="main-products-wrapper">
                        <div class="title-wrapper">
                            <h3>THƯƠNG HIỆU NỔI BẬT</h3>
                            <div class="title-divider"></div>
                        </div>

                    </div>
                    @foreach($brand as $bran)
                        @if ($bran->brand_id == 1)
                            <div class="quick-link">
                                <div>
                                    <a href="{{ route('user.brand.br', ['id' => 1]) }}" data-href="laptop-acer" data-index="0" class="box-quicklink__item bd-radius quicklink-logo">
                                        <img src="//cdn.tgdd.vn/Brand/1/logo-acer-149x40.png" height="25" class="no-text">
                                    </a>
                                    <a href="{{ route('user.brand.br', ['id' => 2]) }}" data-href="laptop-asus" data-index="0" class="box-quicklink__item bd-radius quicklink-logo">
                                        <img src="//cdn.tgdd.vn/Brand/1/logo-asus-149x40.png" height="25" class="no-text">

                                    </a>
                                    <a href="{{ route('user.brand.br', ['id' => 3]) }}" data-href="laptop-hp-compaq" data-index="0" class="box-quicklink__item bd-radius quicklink-logo">
                                        <img src="//cdn.tgdd.vn/Brand/1/logo-hp-149x40-1.png" height="25" class="no-text">

                                    </a>
                                    <a href="{{ route('user.brand.br', ['id' => 4]) }}" data-href="laptop-dell" data-index="0" class="box-quicklink__item bd-radius quicklink-logo">
                                        <img src="//cdn.tgdd.vn/Brand/1/logo-dell-149x40.png" height="25" class="no-text">

                                    </a>
                                    <a href="laptop-apple-macbook" data-href="laptop-apple-macbook" data-index="0" class="box-quicklink__item bd-radius quicklink-logo">
                                        <img src="//cdn.tgdd.vn/Brand/1/logo-macbook-149x40.png" height="25" class="no-text">

                                    </a>
                                    <a href="laptop-lenovo" data-href="laptop-lenovo" data-index="0" class="box-quicklink__item bd-radius quicklink-logo">
                                        <img src="//cdn.tgdd.vn/Brand/1/logo-lenovo-149x40.png" height="25" class="no-text">

                                    </a>
                                    <a href="laptop-msi" data-href="laptop-msi" data-index="0" class="box-quicklink__item bd-radius quicklink-logo">
                                        <img src="//cdn.tgdd.vn/Brand/1/logo-msi-149x40.png" height="25" class="no-text">

                                    </a>
                                    <a href="laptop-itel" data-href="laptop-itel" data-index="0" class="box-quicklink__item bd-radius quicklink-logo">
                                        <img src="//cdn.tgdd.vn/Brand/1/logo-itel-149x40.png" height="25" class="no-text">

                                    </a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    <div class="main-products-wrapper">
                        <div class="title-wrapper">
                            <h3 class="mb-3">SẢN PHẨM MỚI</h3>
                            <div class="title-divider"></div>
                            <div class="subtitle">#NEW</div>
                        </div>

                        <div class="main-products">
                            <div class="row g-0">
                                @foreach ($version as $products)
                                    <div class="col-2-4">
                                        <div href="" class="product-layout">
                                            <a href="{{ route('user.productDetail.detail', ['id' => $products->id]) }}" class="product-image">
                                                <img
                                                    src="{{ asset(Storage::url('public/admin/'. $products->image)) }}"
                                                    width="100%"
                                                    height="238.387"
                                                    alt=""
                                                    title=""
                                                />
                                            </a>
                                            <div class="product-caption">
                                                <div class="brand">
                                                    <a href="#" class="brand-title">{{ $products->Brand_name }}</a>
                                                </div>
                                                <div class="name">
                                                    <a href="#">{{ $products->Version_name }}</a>
                                                </div>
                                                <div class="price">
                                                    <span class="price-new">{{ number_format($products->price, 0, ',', '.') }}₫</span>
                                                </div>
                                            </div>
                                            <div class="tag">
                                                <span class="tag-new">#NEW</span>
                                                <span class="tag-discount"></span>
                                            </div>
                                            <div class="product-layout--hover"></div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Sản phẩm nổi bật -->
                    <div class="main-products-wrapper">
                        <div class="title-wrapper">
                            <h3>SẢN PHẨM NỔI BẬT</h3>
                            <div class="title-divider"></div>
                            <div class="subtitle">#FEATURE</div>
                        </div>
                        <div class="main-products">
                            <div class="row g-0">
                                @foreach ($version->reverse()->take(1) as $products)
                                    <div class="col-2-4">
                                        <div class="product-layout">
                                            <a href="#" class="product-image">
                                                <img
                                                    src="{{ asset(Storage::url('public/admin/'. $products->image)) }}"
                                                    width="100%"
                                                    height="238.387"
                                                    alt=""
                                                    title=""
                                                />
                                            </a>
                                            <div class="product-caption">
                                                <div class="brand">
                                                    <a href="#" class="brand-title">{{ $products->Brand_name }}</a>
                                                </div>
                                                <div class="name">
                                                    <a href="#">{{ $products->product_name }}</a>
                                                </div>
                                                <div class="price">
                                                    <span class="price-new">{{ $products->price}}₫</span>
                                                </div>
                                            </div>
                                            <div class="tag">
                                                <span class="tag-new">#NEW</span>
                                                <span class="tag-discount"></span>
                                            </div>
                                            <div class="product-layout--hover"></div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Thương hiệu nổi bật -->

                    <!-- Sản phẩm bạn vừa xem -->
                    <div class="main-products-wrapper">
                        <div class="title-wrapper">
                            <h3>SẢN PHẨM BẠN VỪA XEM</h3>
                            <div class="title-divider"></div>
                            <div class="subtitle">#VIEW</div>
                        </div>
                        <div class="main-products">
                            <div class="row g-0">
                                <div class="col-2-4">
                                    <div class="product-layout">
                                        <a href class="product-image">
                                            <img
                                                src="https://xgear.net/wp-content/uploads/2022/12/Laptop-Gaming-Asus-TUF-F15-FX507ZC-HN124W.jpg"
                                                width="100%"
                                                height="238.387"
                                                alt
                                                title
                                            />
                                        </a>
                                        <div class="product-caption">
                                            <div class="brand">
                                                <a href class="brand-title">ASUS</a>
                                            </div>
                                            <div class="name">
                                                <a href
                                                >Laptop Gaming Asus TUF F15 FX507ZC-HN124W i7
                                                    RTX3050</a
                                                >
                                            </div>
                                            <div class="price">
                                                <span class="price-new">17.000.000₫</span>
                                                <span class="price-old">17.000.000₫</span>
                                            </div>
                                        </div>
                                        <div class="tag">
                                            <span class="tag-new">New</span>
                                            <span class="tag-discount"></span>
                                        </div>
                                        <div class="product-layout--hover"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tin tức -->
                    <div class="main-products-wrapper">
                        <div class="title-wrapper">
                            <h3>TIN TỨC MYSHOES.VN</h3>
                            <div class="title-divider"></div>
                            <div class="subtitle">#BLOG</div>
                        </div>
                        <div class="slider-card">
                            <div class="swipper">
                                <div class="col-3 swipper-slide px-2">
                                    <div class="card-item">
                                        <a class="card-img">
                                            <img
                                                src="https://myshoes.vn/image/cache/catalog/blog/03.01/chon-nuoc-hoa-theo-tam-trang-elle-man-cover-1-400x250h.jpeg"
                                                alt
                                            />
                                            <div class="card-author">Myshoes.vn</div>
                                        </a>
                                        <div class="card-caption">
                                            <a class="card-name"
                                            >Top những mùi hương nước hoa nam được yêu thích
                                                nhất năm 2023</a
                                            >
                                            <span class="card-desc"
                                            >Nếu bạn đang muốn gây ấn tượng và thu hút sự chú ý
                            của người phụ nữ mà bạn đang để mắt tới. Đầu
                            tiên..</span
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 swipper-slide px-2">
                                    <div class="card-item">
                                        <a class="card-img">
                                            <img
                                                src="https://myshoes.vn/image/cache/catalog/blog/03.01/chon-nuoc-hoa-theo-tam-trang-elle-man-cover-1-400x250h.jpeg"
                                                alt
                                            />
                                            <div class="card-author">Myshoes.vn</div>
                                        </a>
                                        <div class="card-caption">
                                            <a class="card-name"
                                            >Top những mùi hương nước hoa nam được yêu thích
                                                nhất năm 2023</a
                                            >
                                            <span class="card-desc"
                                            >Nếu bạn đang muốn gây ấn tượng và thu hút sự chú ý
                            của người phụ nữ mà bạn đang để mắt tới. Đầu
                            tiên..</span
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 swipper-slide px-2">
                                    <div class="card-item">
                                        <a class="card-img">
                                            <img
                                                src="https://myshoes.vn/image/cache/catalog/blog/03.01/chon-nuoc-hoa-theo-tam-trang-elle-man-cover-1-400x250h.jpeg"
                                                alt
                                            />
                                            <div class="card-author">Myshoes.vn</div>
                                        </a>
                                        <div class="card-caption">
                                            <a class="card-name"
                                            >Top những mùi hương nước hoa nam được yêu thích
                                                nhất năm 2023</a
                                            >
                                            <span class="card-desc"
                                            >Nếu bạn đang muốn gây ấn tượng và thu hút sự chú ý
                            của người phụ nữ mà bạn đang để mắt tới. Đầu
                            tiên..</span
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 swipper-slide px-2">
                                    <div class="card-item">
                                        <a class="card-img">
                                            <img
                                                src="https://myshoes.vn/image/cache/catalog/blog/03.01/chon-nuoc-hoa-theo-tam-trang-elle-man-cover-1-400x250h.jpeg"
                                                alt
                                            />
                                            <div class="card-author">Myshoes.vn</div>
                                        </a>
                                        <div class="card-caption">
                                            <a class="card-name"
                                            >Top những mùi hương nước hoa nam được yêu thích
                                                nhất năm 2023</a
                                            >
                                            <span class="card-desc"
                                            >Nếu bạn đang muốn gây ấn tượng và thu hút sự chú ý
                            của người phụ nữ mà bạn đang để mắt tới. Đầu
                            tiên..</span
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 swipper-slide px-2">
                                    <div class="card-item">
                                        <a class="card-img">
                                            <img
                                                src="https://myshoes.vn/image/cache/catalog/blog/03.01/chon-nuoc-hoa-theo-tam-trang-elle-man-cover-1-400x250h.jpeg"
                                                alt
                                            />
                                            <div class="card-author">Myshoes.vn</div>
                                        </a>
                                        <div class="card-caption">
                                            <a class="card-name"
                                            >Top những mùi hương nước hoa nam được yêu thích
                                                nhất năm 2023</a
                                            >
                                            <span class="card-desc"
                                            >Nếu bạn đang muốn gây ấn tượng và thu hút sự chú ý
                            của người phụ nữ mà bạn đang để mắt tới. Đầu
                            tiên..</span
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 swipper-slide px-2">
                                    <div class="card-item">
                                        <a class="card-img">
                                            <img
                                                src="https://myshoes.vn/image/cache/catalog/blog/03.01/chon-nuoc-hoa-theo-tam-trang-elle-man-cover-1-400x250h.jpeg"
                                                alt
                                            />
                                            <div class="card-author">Myshoes.vn</div>
                                        </a>
                                        <div class="card-caption">
                                            <a class="card-name"
                                            >Top những mùi hương nước hoa nam được yêu thích
                                                nhất năm 2023</a
                                            >
                                            <span class="card-desc"
                                            >Nếu bạn đang muốn gây ấn tượng và thu hút sự chú ý
                            của người phụ nữ mà bạn đang để mắt tới. Đầu
                            tiên..</span
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 swipper-slide px-2">
                                    <div class="card-item">
                                        <a class="card-img">
                                            <img
                                                src="https://myshoes.vn/image/cache/catalog/blog/03.01/chon-nuoc-hoa-theo-tam-trang-elle-man-cover-1-400x250h.jpeg"
                                                alt
                                            />
                                            <div class="card-author">Myshoes.vn</div>
                                        </a>
                                        <div class="card-caption">
                                            <a class="card-name"
                                            >Top những mùi hương nước hoa nam được yêu thích
                                                nhất năm 2023</a
                                            >
                                            <span class="card-desc"
                                            >Nếu bạn đang muốn gây ấn tượng và thu hút sự chú ý
                            của người phụ nữ mà bạn đang để mắt tới. Đầu
                            tiên..</span
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 swipper-slide px-2">
                                    <div class="card-item">
                                        <a class="card-img">
                                            <img
                                                src="https://myshoes.vn/image/cache/catalog/blog/03.01/chon-nuoc-hoa-theo-tam-trang-elle-man-cover-1-400x250h.jpeg"
                                                alt
                                            />
                                            <div class="card-author">Myshoes.vn</div>
                                        </a>
                                        <div class="card-caption">
                                            <a class="card-name"
                                            >Top những mùi hương nước hoa nam được yêu thích
                                                nhất năm 2023</a
                                            >
                                            <span class="card-desc"
                                            >Nếu bạn đang muốn gây ấn tượng và thu hút sự chú ý
                            của người phụ nữ mà bạn đang để mắt tới. Đầu
                            tiên..</span
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 swipper-slide px-2">
                                    <div class="card-item">
                                        <a class="card-img">
                                            <img
                                                src="https://myshoes.vn/image/cache/catalog/blog/03.01/chon-nuoc-hoa-theo-tam-trang-elle-man-cover-1-400x250h.jpeg"
                                                alt
                                            />
                                            <div class="card-author">Myshoes.vn</div>
                                        </a>
                                        <div class="card-caption">
                                            <a class="card-name"
                                            >Top những mùi hương nước hoa nam được yêu thích
                                                nhất năm 2023</a
                                            >
                                            <span class="card-desc"
                                            >Nếu bạn đang muốn gây ấn tượng và thu hút sự chú ý
                            của người phụ nữ mà bạn đang để mắt tới. Đầu
                            tiên..</span
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 swipper-slide px-2">
                                    <div class="card-item">
                                        <a class="card-img">
                                            <img
                                                src="https://myshoes.vn/image/cache/catalog/blog/03.01/chon-nuoc-hoa-theo-tam-trang-elle-man-cover-1-400x250h.jpeg"
                                                alt
                                            />
                                            <div class="card-author">Myshoes.vn</div>
                                        </a>
                                        <div class="card-caption">
                                            <a class="card-name"
                                            >Top những mùi hương nước hoa nam được yêu thích
                                                nhất năm 2023</a
                                            >
                                            <span class="card-desc"
                                            >Nếu bạn đang muốn gây ấn tượng và thu hút sự chú ý
                            của người phụ nữ mà bạn đang để mắt tới. Đầu
                            tiên..</span
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 swipper-slide px-2">
                                    <div class="card-item">
                                        <a class="card-img">
                                            <img
                                                src="https://myshoes.vn/image/cache/catalog/blog/03.01/chon-nuoc-hoa-theo-tam-trang-elle-man-cover-1-400x250h.jpeg"
                                                alt
                                            />
                                            <div class="card-author">Myshoes.vn</div>
                                        </a>
                                        <div class="card-caption">
                                            <a class="card-name"
                                            >Top những mùi hương nước hoa nam được yêu thích
                                                nhất năm 2023</a
                                            >
                                            <span class="card-desc"
                                            >Nếu bạn đang muốn gây ấn tượng và thu hút sự chú ý
                            của người phụ nữ mà bạn đang để mắt tới. Đầu
                            tiên..</span
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 swipper-slide px-2">
                                    <div class="card-item">
                                        <a class="card-img">
                                            <img
                                                src="https://myshoes.vn/image/cache/catalog/blog/03.01/chon-nuoc-hoa-theo-tam-trang-elle-man-cover-1-400x250h.jpeg"
                                                alt
                                            />
                                            <div class="card-author">Myshoes.vn</div>
                                        </a>
                                        <div class="card-caption">
                                            <a class="card-name"
                                            >Top những mùi hương nước hoa nam được yêu thích
                                                nhất năm 2023</a
                                            >
                                            <span class="card-desc"
                                            >Nếu bạn đang muốn gây ấn tượng và thu hút sự chú ý
                            của người phụ nữ mà bạn đang để mắt tới. Đầu
                            tiên..</span
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button id="prev"><</button>
                            <button id="next">></button>
                        </div>
                    </div>

                    <!-- Feedback -->
                    <div class="main-products-wrapper">
                        <div class="title-wrapper">
                            <h3>KHÁCH HÀNG NÓI VỀ MYSHOES.VN</h3>
                            <div class="title-divider"></div>
                            <div class="subtitle">#FEEDBACK</div>
                        </div>
                        <div class="slider-card">
                            <div class="swipper-2">
                                <div class="col-3 swipper-slide-2 px-2">
                                    <div class="feedback-item">
                                        <div class="feedback-img">
                                            <img
                                                src="https://myshoes.vn/image/cache/catalog/lookbook/IMG_181711-500x500.jpg"
                                                alt
                                            />
                                        </div>
                                        <div class="feedback-caption">
                          <span class="feedback-text"
                          >Tôi đã mua cho cả 2 vợ chồng giày của Myshoes.vn và
                            thật sự nó vô cùng chất lượng. Hàng đảm bảo chính
                            hãng 100% và chính sách bảo hành rất yên tâm ạ. Cảm
                            ơn Myshoes.vn!</span
                          >
                                            <span class="feedback-name">- Chị Thanh Thủy -</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 swipper-slide-2 px-2">
                                    <div class="feedback-item">
                                        <div class="feedback-img">
                                            <img
                                                src="https://myshoes.vn/image/cache/catalog/lookbook/IMG_181711-500x500.jpg"
                                                alt
                                            />
                                        </div>
                                        <div class="feedback-caption">
                          <span class="feedback-text"
                          >Tôi đã mua cho cả 2 vợ chồng giày của Myshoes.vn và
                            thật sự nó vô cùng chất lượng. Hàng đảm bảo chính
                            hãng 100% và chính sách bảo hành rất yên tâm ạ. Cảm
                            ơn Myshoes.vn!</span
                          >
                                            <span class="feedback-name">- Chị Thanh Thủy -</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 swipper-slide-2 px-2">
                                    <div class="feedback-item">
                                        <div class="feedback-img">
                                            <img
                                                src="https://myshoes.vn/image/cache/catalog/lookbook/IMG_181711-500x500.jpg"
                                                alt
                                            />
                                        </div>
                                        <div class="feedback-caption">
                          <span class="feedback-text"
                          >Tôi đã mua cho cả 2 vợ chồng giày của Myshoes.vn và
                            thật sự nó vô cùng chất lượng. Hàng đảm bảo chính
                            hãng 100% và chính sách bảo hành rất yên tâm ạ. Cảm
                            ơn Myshoes.vn!</span
                          >
                                            <span class="feedback-name">- Chị Thanh Thủy -</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 swipper-slide-2 px-2">
                                    <div class="feedback-item">
                                        <div class="feedback-img">
                                            <img
                                                src="https://myshoes.vn/image/cache/catalog/lookbook/IMG_181711-500x500.jpg"
                                                alt
                                            />
                                        </div>
                                        <div class="feedback-caption">
                          <span class="feedback-text"
                          >Tôi đã mua cho cả 2 vợ chồng giày của Myshoes.vn và
                            thật sự nó vô cùng chất lượng. Hàng đảm bảo chính
                            hãng 100% và chính sách bảo hành rất yên tâm ạ. Cảm
                            ơn Myshoes.vn!</span
                          >
                                            <span class="feedback-name">- Chị Thanh Thủy -</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 swipper-slide-2 px-2">
                                    <div class="feedback-item">
                                        <div class="feedback-img">
                                            <img
                                                src="https://myshoes.vn/image/cache/catalog/lookbook/IMG_181711-500x500.jpg"
                                                alt
                                            />
                                        </div>
                                        <div class="feedback-caption">
                          <span class="feedback-text"
                          >Tôi đã mua cho cả 2 vợ chồng giày của Myshoes.vn và
                            thật sự nó vô cùng chất lượng. Hàng đảm bảo chính
                            hãng 100% và chính sách bảo hành rất yên tâm ạ. Cảm
                            ơn Myshoes.vn!</span
                          >
                                            <span class="feedback-name">- Chị Thanh Thủy -</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 swipper-slide-2 px-2">
                                    <div class="feedback-item">
                                        <div class="feedback-img">
                                            <img
                                                src="https://myshoes.vn/image/cache/catalog/lookbook/IMG_181711-500x500.jpg"
                                                alt
                                            />
                                        </div>
                                        <div class="feedback-caption">
                          <span class="feedback-text"
                          >Tôi đã mua cho cả 2 vợ chồng giày của Myshoes.vn và
                            thật sự nó vô cùng chất lượng. Hàng đảm bảo chính
                            hãng 100% và chính sách bảo hành rất yên tâm ạ. Cảm
                            ơn Myshoes.vn!</span
                          >
                                            <span class="feedback-name">- Chị Thanh Thủy -</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 swipper-slide-2 px-2">
                                    <div class="feedback-item">
                                        <div class="feedback-img">
                                            <img
                                                src="https://myshoes.vn/image/cache/catalog/lookbook/IMG_181711-500x500.jpg"
                                                alt
                                            />
                                        </div>
                                        <div class="feedback-caption">
                          <span class="feedback-text"
                          >Tôi đã mua cho cả 2 vợ chồng giày của Myshoes.vn và
                            thật sự nó vô cùng chất lượng. Hàng đảm bảo chính
                            hãng 100% và chính sách bảo hành rất yên tâm ạ. Cảm
                            ơn Myshoes.vn!</span
                          >
                                            <span class="feedback-name">- Chị Thanh Thủy -</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 swipper-slide-2 px-2">
                                    <div class="feedback-item">
                                        <div class="feedback-img">
                                            <img
                                                src="https://myshoes.vn/image/cache/catalog/lookbook/IMG_181711-500x500.jpg"
                                                alt
                                            />
                                        </div>
                                        <div class="feedback-caption">
                          <span class="feedback-text"
                          >Tôi đã mua cho cả 2 vợ chồng giày của Myshoes.vn và
                            thật sự nó vô cùng chất lượng. Hàng đảm bảo chính
                            hãng 100% và chính sách bảo hành rất yên tâm ạ. Cảm
                            ơn Myshoes.vn!</span
                          >
                                            <span class="feedback-name">- Chị Thanh Thủy -</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button id="prev-2"><</button>
                            <button id="next-2">></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer">
            <div class="footer-wrapper">
                <div class="row g-0">
                    <div class="col-6">
                        <div class="title-module">
                            <h3 class="title-register">ĐĂNG KÝ NHẬN THÔNG TIN</h3>
                            <p>
                                Đăng ký ngay để được cập nhật sớm nhất những thông tin hữu
                                ích, ữu đãi vô cùng hấp dẫn và những món quà bất ngờ từ
                                Myshoes.vn!
                            </p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="newsletter-form">
                            <div class="input-group">
                                <input
                                    type="text"
                                    class="form-control newsletter-email"
                                    placeholder="Nhập email của bạn "
                                />
                                <div class="input-group-append d-flex">
                                    <button class="btn btn-danger btn-register" type="button">
                                        <i class="fa-solid fa-envelope"></i>Đăng Ký
                                    </button>
                                </div>
                            </div>
                            <div class="form-check mt-3">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    value
                                    id="flexCheckChecked"
                                />
                                <label class="form-check-label" for="flexCheckChecked">
                                    Tôi đã đọc và đồng ý với <span>Chính sách bảo mật</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="footer-wrapper">
                <div class="row g-0 mt-3">
                    <div class="col-5">
                        <div class="block-address">
                            <h3>LAPTOP CHÍNH HÃNG</h3>
                            <div class="block-header">
                                <img
                                    src="https://xgear.net/wp-content/uploads/2023/06/Logo-Xgear-300.png"
                                    alt
                                />
                                <div class="block-wrapper">
                      <span
                      >Website được định hướng trở thành hệ thống thương mại
                        điện tử bán giày chính hãng hàng đầu Việt Nam.</span
                      >
                                    <span>Showroom: 249 Xã Đàn, Đống Đa, Hà Nội</span>
                                    <span>Hotline: 0973711868</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2-3">
                        <div class="about-us">
                            <h3>VỀ CHÚNG TÔI</h3>
                            <ul>
                                <li>
                                    <a style="color: #fff" href="?redirect=about"
                                    >Giới thiệu</a
                                    >
                                </li>
                                <li><a>Điều khoản sử dụng</a></li>
                                <li><a>Chính sách bảo mật</a></li>
                                <li><a>Tin tức myshoes</a></li>
                                <li><a>Cơ hội việc làm</a></li>
                                <li><a>Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-2-3">
                        <div class="about-us">
                            <h3>KHÁCH HÀNG</h3>
                            <ul>
                                <li><a>Hướng dẫn mua hàng</a></li>
                                <li><a>Chính sách đổi trả</a></li>
                                <li><a>Chính sách bảo hành</a></li>
                                <li><a>Khách hàng thân thiết</a></li>
                                <li><a>Hướng dẫn chọn size</a></li>
                                <li><a>Chương trình khuyến mại</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-2-3">
                        <div class="about-us certificate">
                            <h3>KHÁCH HÀNG</h3>
                            <div class="certificate-img">
                                <img
                                    src="https://images.dmca.com/Badges/DMCA_logo-grn-btn150w.png?ID=1ed4cd9e-5ee4-4b63-95dc-c70388edd3cb"
                                    alt
                                />
                                <img
                                    src="https://myshoes.vn/image/catalog/logo/logo-bct.png"
                                    alt
                                    width="60%"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="footer-wrapper">
                <div class="copyright">Copyright © 2023 Mygroup Tech.,JSC</div>
            </div>
        </div>
    </footer>
</div>

<script src=" {{asset('Js/Client/handleUITabs.js')}}"></script>
<script src="{{asset('Js/Client/handleCardSlider.js')}}"></script>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"
></script>
</body>
</html>
