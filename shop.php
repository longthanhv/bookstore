<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="./asset/css/product.css">
    <link rel="stylesheet" href="./asset/css/search.css">
    <link rel="stylesheet" href="./asset/css/shop.css">
    <link
        rel="stylesheet"
        type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
      />
</head>
<body>
<?php include 'header.php'; ?>
<div class="banner" id='search'>
        <img src="http://amovietnam.vn/wp-content/uploads/2016/02/banner-doc-sach-vi-tuong-lai-amo-vietnam-2018.jpg" alt="">
        <div class="banner-text">
            <div class="banner-title">
                <h3>TÌM KIẾM SÁCH</h3>
            </div>
            <div class="banner-content"> 
                <form id="banner-content">
                <input type="text"  class="banner-text-form" placeholder="Tên Sách" required>
                <div class="btn-banner">
                    <input type="submit" class="banner-form-btn" value="TÌM KIẾM">
                </div>
                </form>
            </div>
            <div class="banner-expan top" id="expan-banner-btn">
                <span> Tìm kiếm nâng cao <i class="fa fa-angle-double-down normal-search" aria-hidden="true"></i></span>
            </div>
            <form class="banner-content advance-search" action="category-manga.html" method="GET">
                <div>
                    <select class="banner-text-form">
                        <option value="0">Thể loại</option>
                        <option value="1">Chính Trị Pháp Luật</option>
                        <option value="2">Khoa Học Công Nghệ - Kinh Tế</option>
                        <option value="3">Văn Học Nghệ Thuật</option>
                        <option value="4">Văn Hóa Xã Hội Lịch Sử</option>
                        <option value="5">Giáo Trình Sách Giáo Khoa</option>
                        <option value="6">Truyện - Tiểu Thuyết</option>
                        <option value="7">Tâm Lý - Tâm Linh - Tôn Giáo</option>
                        <option value="8">Truyện Thiếu Nhi Tranh Ảnh</option>
                        <option value="9">Khác</option>
                    </select>
                </div>
                <div><input type="text" id="author" class="banner-text-form" placeholder="Tác giả"></div>
                <div><input type="text" class="banner-text-form" placeholder="Quốc gia"></div>
                <div><input type="text" class="banner-text-form" placeholder="Tình trạng"></div>
                <div class="btn-banner">
                    <input type="submit" class="banner-form-btn" value="TÌM KIẾM">
                    <input type="reset" class="banner-form-btn btn-reset" value="ĐẶT LẠI">
                </div>
            </form>
        </div>
    </div>
<div class="heading-shop">
    <h3 >Cửa Hàng</h3>
</div>
<div class="cartegory">
    <div class="container">
        <div class="cartegory-left">
            <div class="cartgory-name-shop">
                <h3>Thể Loại</h3>
            </div>
            <div class="cartegory-item">
                <ul>
                    <li><a href="">Chính Trị Pháp Luật</a></li>
                    <li><a href="">Khoa Học Công Nghệ - Kinh Tế</a></li>
                    <li><a href="">Văn Học Nghệ Thuật</a></li>
                    <li><a href="">Văn Hóa Xã Hội Lịch Sử</a></li>
                    <li><a href="">Giáo Trình Sách Giáo Khoa</a></li>
                    <li><a href="">Truyện - Tiểu Thuyết</a></li>
                    <li><a href="">Tâm Lý - Tâm Linh - Tôn Giáo</a></li>
                    <li><a href="">Truyện Thiếu Nhi Tranh Ảnh</a></li>
                </ul>
            </div>
        </div>
        <div class="product-right">
            <ul class="product">
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="" class="product-thumb">
                                <img src="https://salt.tikicdn.com/cache/280x280/ts/product/90/49/97/ec88ab408c1997378344486c94dbac40.jpg.webp" alt="">
                            </a>
                        </div>
                        <div class="product-info">
                            <a href="" class="product-cat">Truyện</a>
                            <a href="" class="product-name">Thao Túng Tâm Lý</a>                       
                        </div>
                        <div class="product-price">
                            <div class="price">100000</div>
                            <div><a href="" class="fa-solid fa-heart"></a>
                            <a href="" class="fa-solid fa-cart-shopping"></a></div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="" class="product-thumb">
                                <img src="https://salt.tikicdn.com/cache/280x280/ts/product/98/1d/ef/9f354dda85824878fbb43ef2af4dd233.png.webp" alt="">
                            </a>
                        </div>
                        <div class="product-info">
                            <a href="" class="product-cat">ma</a>
                            <a href="" class="product-name">Vãn Tình</a>                       
                        </div>
                        <div class="product-price">
                            <div class="price">100000</div>
                            <div><a href="" class="fa-solid fa-heart"></a>
                            <a href="" class="fa-solid fa-cart-shopping"></a></div>
                        </div>
                    </div>
                </li><li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="" class="product-thumb">
                                <img src="https://salt.tikicdn.com/cache/280x280/ts/product/83/23/b7/14a42ae4f66c9b8b298aaef4b9671442.jpg.webp" alt="">
                            </a>
                        </div>
                        <div class="product-info">
                            <a href="" class="product-cat">ma</a>
                            <a href="" class="product-name">Tâm Lý Học Về Tiền</a>                       
                        </div>
                        <div class="product-price">
                            <div class="price">100000</div>
                            <div><a href="" class="fa-solid fa-heart"></a>
                            <a href="" class="fa-solid fa-cart-shopping"></a></div>
                        </div>
                    </div>
                </li><li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="" class="product-thumb">
                                <img src="https://salt.tikicdn.com/cache/280x280/ts/product/45/3b/fc/aa81d0a534b45706ae1eee1e344e80d9.jpg.webp" alt="">
                            </a>
                        </div>
                        <div class="product-info">
                            <a href="" class="product-cat">ma</a>
                            <a href="" class="product-name">Nhà Kim Giả</a>                       
                        </div>
                        <div class="product-price">
                            <div class="price">100000</div>
                            <div><a href="" class="fa-solid fa-heart"></a>
                            <a href="" class="fa-solid fa-cart-shopping"></a></div>
                        </div>
                    </div>
                </li><li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="" class="product-thumb">
                                <img src="https://salt.tikicdn.com/cache/280x280/ts/product/22/cb/a9/524a27dcd45e8a13ae6eecb3dfacba7c.jpg.webp" alt="">
                            </a>
                        </div>
                        <div class="product-info">
                            <a href="" class="product-cat">ma</a>
                            <a href="" class="product-name">long</a>                       
                        </div>
                        <div class="product-price">
                            <div class="price">100000</div>
                            <div><a href="" class="fa-solid fa-heart"></a>
                            <a href="" class="fa-solid fa-cart-shopping"></a></div>
                        </div>
                    </div>
                </li><li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="" class="product-thumb">
                                <img src="https://salt.tikicdn.com/cache/280x280/ts/product/4f/b0/bf/dbff1a3a306b9adc591620553ce99a9d.jpg.webp" alt="">
                            </a>
                        </div>
                        <div class="product-info">
                            <a href="" class="product-cat">ma</a>
                            <a href="" class="product-name">long</a>                       
                        </div>
                        <div class="product-price">
                            <div class="price">100000</div>
                            <div><a href="" class="fa-solid fa-heart"></a>
                            <a href="" class="fa-solid fa-cart-shopping"></a></div>
                        </div>
                    </div>
                </li><li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="" class="product-thumb">
                                <img src="https://salt.tikicdn.com/cache/280x280/ts/product/e1/04/31/7763d9035552760f627c34acfec0e12f.jpg.webp" alt="">
                            </a>
                        </div>
                        <div class="product-info">
                            <a href="" class="product-cat">ma</a>
                            <a href="" class="product-name">long</a>                       
                        </div>
                        <div class="product-price">
                            <div class="price">100000</div>
                            <div><a href="" class="fa-solid fa-heart"></a>
                            <a href="" class="fa-solid fa-cart-shopping"></a></div>
                        </div>
                    </div>
                </li><li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="" class="product-thumb">
                                <img src="https://salt.tikicdn.com/cache/280x280/ts/product/5f/63/b1/706453f955241054e1d41173bb87df74.jpg.webp" alt="">
                            </a>
                        </div>
                        <div class="product-info">
                            <a href="" class="product-cat">ma</a>
                            <a href="" class="product-name">long</a>                       
                        </div>
                        <div class="product-price">
                            <div class="price">100000</div>
                            <div><a href="" class="fa-solid fa-heart"></a>
                            <a href="" class="fa-solid fa-cart-shopping"></a></div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        
    </div>
    </div>
</div>
<div class="procuc">

</div>
<?php include 'footer.php'; ?>
<script src="./asset/js/script.js"></script>
</body>
</html>