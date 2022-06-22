<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
    <link rel="stylesheet" href="theme/frontend/css/bootstrap.css">
    <link rel="stylesheet" href="theme/frontend/css/swiper.min.css">
    <link rel="stylesheet" href="theme/frontend/css/font-awesome.css">
    <link rel="stylesheet" href="theme/frontend/scss/style.css">
    <link rel="stylesheet" href="theme/frontend/css/menu.css">
    <link rel="stylesheet" href="theme/frontend/scss/mobie.css">
</head>

<body>
    <div class="header " id="header">
        <div class="header-top ">
            <div class="container container-sm-fluid">
                <div class="row align-content-center justify-content-between">
                    <div class="col-6 mobie-logo d-block d-lg-none">
                        <a href="#" title="" class="img_ d-block logo-1" target="_blank">
                            <img src="theme/frontend/images/logo.png" alt=""> </a>
                    </div>
                    <div class="col-lg-12 d-none d-lg-flex justify-content-center align-items-center">
                        <div class="logo-icon">
                            <span class="icon_fb hotline-number">
                                Khuyến mại hè | Lên tới 60%
                            </span>
                            <a href="#" class="hotline-sale" title="hotline-sale smooth">Xem ngay <span class="hotline-sale__icon">
                                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
                        </div>
                    </div>

                    <div class="mobie-icon-menu col-6 d-flex d-lg-none align-items-center justify-content-end">
                        <div class="icon-mobie">
                            <button type="button" id="show-form-search" class="btn-search d-lg-none">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                            <i class="fa fa-align-right show_menu" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-body" id="header-body">
            <div class="container">
            <?php include('menu.php');?>
            </div>
            <div class="header-end d-flex align-items-center">
                <button id="show-form-search" class="btn-search btn-header"> <img src="theme/frontend/images/seach.png" alt=""></button>
                <div class="btn-card">
                    <span class="cart__current">0</span>
                    <button class="btn-header"><img src="theme/frontend/images/card.png" alt=""></button>
                </div>
                <button class="btn-header" data-bs-toggle="modal" href="#exampleModalToggle" role="button"> 
                    <img src="theme/frontend/images/urse.png" alt="">
                </button>
            </div>

        </div>

        <div class="main-search-top">
            <form action="" method="get" class="form-search-top" accept-charset="utf-8">
                <input type="text" name="q" value="" class="input-search input-place-white" placeholder="Tìm kiếm sản phẩm, mã sản phẩm...">
                <button type="submit" class="btn-submit-search smooth"><i class="fa fa-search"></i> </button>
            </form>
        </div>
    </div>

