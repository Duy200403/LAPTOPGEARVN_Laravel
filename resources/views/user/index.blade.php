

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
        href="https://myshoes.vn/image/catalog/logo/logo-myshoes-nho.png"
        rel="icon"
    />
    <title>Myshoes.vn - Giày Chính Hãng</title>
    {{--    <link rel="stylesheet" href="/Public/Icons/fontawesome/css/all.min.css" />--}}
    <link rel="stylesheet" href=" {{asset('public/user/Icons/fontawesome/css/all.min.css')}} ">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
        crossorigin="anonymous"
    />
    <link
        rel="stylesheet"
        type="text/css"
        href="/Public/Css/Client/base/reset.css"
    />
    <link
        rel="stylesheet"
        type="text/css"
        href="/Public/Css/Client/base/root.css"
    />
    <link rel="stylesheet" href="/Public/Css/Client/Effects/hover.css" />
    <link rel="stylesheet" type="text/css" href="/Views/Client/home/home.css" />
</head>

<body>
<div class="site-wrapper">
    <header class="header">
        <div class="header-wrapper">
            <div class="header-navbar">
                <div class="logo-wrapper">
                    <a href="#">
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
                    <div class="accounts">
                        <a href="?controller=login&action=login" class="accounts-link">
                            <i class="fa-solid fa-user"></i>
                            <div class="links-text">
                                <span>Tài khoản</span>
                                <span>Đăng nhập/ Đăng ký</span>
                            </div>
                        </a>
                        <div class="dropdown-menu-accounts">
                  <span class="login"
                  ><i class="fa-solid fa-arrow-right-to-bracket"></i>Đăng
                    nhập</span
                  >
                            <span class="logout"
                            ><i
                                    class="fa-sharp fa-solid fa-arrow-right-from-bracket"
                                ></i
                                >Đăng ký</span
                            >
                        </div>
                        <!-- <a href='?controller=login&action=login' class='accounts-link'>
                                                <i class='fa-solid fa-user'></i>
                                                <div class='links-text'>
                                                    <span>Tài khoản</span>
                                                    <span>Chỉnh sửa / Thoát</span>
                                                </div>
                                            </a>
                                            <div class='dropdown-menu-accounts logined'>
                                                <span class='login'><i class='fa-solid fa-user'></i>Tài khoản của tôi</span>
                                                <span class='logout'><a href='?controller=admin'>&diams; Trang quản trị</a></span>
                                                <span class='logout'><i class='fa-solid fa-cart-shopping'></i>Đơn hàng của tôi</span>
                                                <span class='exit'><i class='fa-solid fa-arrow-right-to-bracket'></i><a href='?controller=login&action=logout'>Thoát</a></span>
                                            </div> -->
                    </div>
                    <div class="cart">
                        <a href="?redirect=cart" class="cart-link hvr-icon-grow">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                        <span class="quantity">!</span>
                        <div class="cart-empty">
                            <span>Không có sản phẩm trong giỏ hàng!</span>
                        </div>

                        <!-- <div class="cart-products">
                                        <div class="list-products-cart">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td class="td-img" scope="row">
                                                            <img src="https://myshoes.vn/image/cache/catalog/2023/lacoste/112/giay-lacoste-powercourt-1121-nam-den-01-60x60.jpg" alt="">
                                                        </td>
                                                        <td class="td-name hvr-grow">
                                                            <a>Giày Lacoste PowerCourt 1121 Nam - Đen</a>
                                                            <p>Chọn size nam: 39.5</p>
                                                        </td>
                                                        <td class="td-quantity">x1</td>
                                                        <td class="td-total">2.690.000₫</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-img" scope="row">
                                                            <img src="https://myshoes.vn/image/cache/catalog/2023/lacoste/112/giay-lacoste-powercourt-1121-nam-den-01-60x60.jpg" alt="">
                                                        </td>
                                                        <td class="td-name hvr-grow">
                                                            <a>Giày Lacoste PowerCourt 1121 Nam - Đen</a>
                                                            <p>Chọn size nam: 39.5</p>
                                                        </td>
                                                        <td class="td-quantity">x1</td>
                                                        <td class="td-total">2.690.000₫</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-img" scope="row">
                                                            <img src="https://myshoes.vn/image/cache/catalog/2023/lacoste/112/giay-lacoste-powercourt-1121-nam-den-01-60x60.jpg" alt="">
                                                        </td>
                                                        <td class="td-name hvr-grow">
                                                            <a>Giày Lacoste PowerCourt 1121 Nam - Đen</a>
                                                            <p>Chọn size nam: 39.5</p>
                                                        </td>
                                                        <td class="td-quantity">x1</td>
                                                        <td class="td-total">2.690.000₫</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-img" scope="row">
                                                            <img src="https://myshoes.vn/image/cache/catalog/2023/lacoste/112/giay-lacoste-powercourt-1121-nam-den-01-60x60.jpg" alt="">
                                                        </td>
                                                        <td class="td-name hvr-grow">
                                                            <a>Giày Lacoste PowerCourt 1121 Nam - Đen</a>
                                                            <p>Chọn size nam: 39.5</p>
                                                        </td>
                                                        <td class="td-quantity">x1</td>
                                                        <td class="td-total">2.690.000₫</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-img" scope="row">
                                                            <img src="https://myshoes.vn/image/cache/catalog/2023/lacoste/112/giay-lacoste-powercourt-1121-nam-den-01-60x60.jpg" alt="">
                                                        </td>
                                                        <td class="td-name hvr-grow">
                                                            <a>Giày Lacoste PowerCourt 1121 Nam - Đen</a>
                                                            <p>Chọn size nam: 39.5</p>
                                                        </td>
                                                        <td class="td-quantity">x1</td>
                                                        <td class="td-total">2.690.000₫</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-img" scope="row">
                                                            <img src="https://myshoes.vn/image/cache/catalog/2023/lacoste/112/giay-lacoste-powercourt-1121-nam-den-01-60x60.jpg" alt="">
                                                        </td>
                                                        <td class="td-name hvr-grow">
                                                            <a>Giày Lacoste PowerCourt 1121 Nam - Đen</a>
                                                            <p>Chọn size nam: 39.5</p>
                                                        </td>
                                                        <td class="td-quantity">x1</td>
                                                        <td class="td-total">2.690.000₫</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="cart-totals">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td scope="row" style="width: 70%;">Thành tiền</td>
                                                        <td>11.150.000₫</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row" style="width: 70%;">Tổng cộng</td>
                                                        <td>11.150.000₫</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="cart-buttons">
                                                <button type="button" class="btn btn-light"><a>XEM GIỎ HÀNG</a></button>
                                                <button type="button" class="btn btn-danger"><a>THANH TOÁN</a></button>
                                            </div>
                                        </div>
                                    </div> -->
                    </div>
                </div>
            </div>
            <div class="menu-wrapper">
                <div class="menu-default">
                    <ul class="main-menu">
                        <li class="menu-item hvr-float-shadow position-relative">
                            <a href class="item-link">
                                <span class="item-name">Laptop Văn Phòng</span>
                            </a>
                            <div class="sub-menu z-3 position-absolute w-100 text-center">
                                <ul class="list-group">
                                    <li class="list-group-item p-2">Laptop Asus</li>
                                    <li class="list-group-item p-2">Laptop Dell</li>
                                    <li class="list-group-item p-2">Laptop Lenovo</li>
                                    <li class="list-group-item p-2">Laptop HP</li>
                                    <li class="list-group-item p-2">ALaptop Acer</li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-item hvr-float-shadow position-relative">
                            <a href class="item-link">
                                <span class="item-name">Laptop Gaming & Đồ Họa</span>
                            </a>
                            <div class="sub-menu z-3 position-absolute w-100 text-center">
                                <ul class="list-group">
                                    <li class="list-group-item p-2">Dell Gaming</li>
                                    <li class="list-group-item p-2">Asus Gaming</li>
                                    <li class="list-group-item p-2">Acer Gaming</li>
                                    <li class="list-group-item p-2">MSI Gaming</li>
                                    <li class="list-group-item p-2">HP Gaming</li>
                                    <li class="list-group-item p-2">Lenovo Gaming</li>
                                    <li class="list-group-item p-2">GigabyteGaming</li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-item hvr-float-shadow position-relative">
                            <a href class="item-link">
                                <span class="item-name">SP Microsoft Surface</span>
                            </a>
                            <div class="sub-menu z-3 position-absolute w-100 text-center">
                                <ul class="list-group">
                                    <li class="list-group-item p-2">Surface Pro</li>
                                    <li class="list-group-item p-2">Surface Laptop</li>
                                    <li class="list-group-item p-2">Surface Book</li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-item hvr-float-shadow position-relative">
                            <a href class="item-link">
                                <span class="item-name">Sản Phẩm Apple</span>
                            </a>
                            <div class="sub-menu z-3 position-absolute w-100 text-center">
                                <ul class="list-group">
                                    <li class="list-group-item p-2">Macbook Air</li>
                                    <li class="list-group-item p-2">Macbook Pro</li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-item hvr-float-shadow position-relative">
                            <a href class="item-link">
                                <span class="item-name">Linh Kiện Laptop</span>
                            </a>
                            <div class="sub-menu z-3 position-absolute w-100 text-center">
                                <ul class="list-group">
                                    <li class="list-group-item p-2">Bộ Nhớ RAM</li>
                                    <li class="list-group-item p-2">Ổ Cứng SSD</li>
                                    <li class="list-group-item p-2">Ổ Cứng HDD</li>
                                    <li class="list-group-item p-2">Webcam</li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-item hvr-float-shadow position-relative">
                            <a href class="item-link">
                                <span class="item-name">Phụ Kiện Laptop</span>
                            </a>
                            <div class="sub-menu z-3 position-absolute w-100 text-center">
                                <ul class="list-group">
                                    <li class="list-group-item p-2">Balo Laptop</li>
                                    <li class="list-group-item p-2">Túi Chống Sốc</li>
                                    <li class="list-group-item p-2">Pin Laptop</li>
                                    <li class="list-group-item p-2">Bàn Phím Laptop</li>
                                    <li class="list-group-item p-2">HP Gaming</li>
                                    <li class="list-group-item p-2">Sạc Nguồn Laptop</li>
                                    <li class="list-group-item p-2">Đế Tản Nhiệt</li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-item hvr-float-shadow position-relative">
                            <a href class="item-link">
                                <span class="item-name">Gaming Gear</span>
                            </a>
                            <div class="sub-menu z-3 position-absolute w-100 text-center">
                                <ul class="list-group">
                                    <li class="list-group-item p-2">Bàn Phím</li>
                                    <li class="list-group-item p-2">Tai Nghe</li>
                                    <li class="list-group-item p-2">Chuột</li>
                                    <li class="list-group-item p-2">Pad Chuột</li>
                                    <li class="list-group-item p-2">Bàn, Ghế</li>
                                    <li class="list-group-item p-2">Tay Cầm Chơi Game</li>
                                </ul>
                            </div>
                        </li>
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
                            src="/Public/Images/bannerlaptop2.jpg"
                            alt
                        />
                        <img
                            src="/Public/Images/bannerlaptop1.jpg"
                            alt="Giày Adidas Chính Hãng"
                            title="Giày Adidas Chính Hãng"
                            class="category-image"
                        />
                        <img
                            class="category-banner"
                            src="/Public/Images/bannerlaptop3.jpg"
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

                    <!-- Sản phẩm -->
                    <div class="main-products-wrapper">
                        <div class="title-wrapper">
                            <h3>SẢN PHẨM MỚI</h3>
                            <div class="title-divider"></div>
                            <div class="subtitle">#NEW</div>
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

                    <!-- Sản phẩm nổi bật -->
                    <div class="main-products-wrapper">
                        <div class="title-wrapper">
                            <h3>SẢN PHẨM NỔI BẬT</h3>
                            <div class="title-divider"></div>
                            <div class="subtitle">#FEATURE</div>
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

                    <!-- Thương hiệu nổi bật -->
                    <div class="main-products-wrapper">
                        <div class="title-wrapper">
                            <h3>THƯƠNG HIỆU NỔI BẬT</h3>
                            <div class="title-divider"></div>
                            <div class="subtitle">#BRAND</div>
                        </div>
                        <div class="main-products">
                            <div class="row g-0">
                                <div class="col-3">
                                    <div class="master-slider">
                                        <img
                                            width="100%"
                                            height="727"
                                            src="https://hanoicomputercdn.com/media/banner/27_Jul5a3a5bfe0a01df097661142d6eeb3226.jpg"
                                            alt
                                        />
                                        <span>LAPTOP CHÍNH HÃNG</span>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="row g-0">
                                        <div class="col-12">
                                            <div class="tab-container">
                                                <ul class="nav-tabs">
                                                    <li class="tab-item tab--active">
                                                        <span>NIKE</span>
                                                    </li>
                                                    <li class="tab-item"><span>ADIDAS</span></li>
                                                    <li class="tab-item"><span>LACOSTE</span></li>
                                                    <li class="tab-item"><span>PUMA</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="tab-pane show">
                                                <div class="row g-0">
                                                    <div class="col-3">
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
                                                                    >Laptop Gaming Asus TUF F15
                                                                        FX507ZC-HN124W i7 RTX3050</a
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
                                            <div class="tab-pane">
                                                <div class="row g-0">
                                                    <div class="col-3">
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
                                                                    >Laptop Gaming Asus TUF F15
                                                                        FX507ZC-HN124W i7 RTX3050</a
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
                                            <div class="tab-pane">
                                                <div class="row g-0">
                                                    <div class="col-3">
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
                                                                    >Laptop Gaming Asus TUF F15
                                                                        FX507ZC-HN124W i7 RTX3050</a
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
                                            <div class="tab-pane">
                                                <div class="row g-0">
                                                    <div class="col-3">
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
                                                                    >Laptop Gaming Asus TUF F15
                                                                        FX507ZC-HN124W i7 RTX3050</a
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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

<script src="/Public/Js/Client/handleUITabs.js"></script>
<script src="/Public/Js/Client/handleCardSlider.js"></script>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"
></script>
</body>
</html>
