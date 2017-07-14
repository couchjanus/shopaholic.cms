<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Shop</title>
    <link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="fake-nav"></div>
    <div id="nav">
    <!--  START search input-->
      <div class="search-container">
            <input id="search-toggle" type="checkbox">
            <label class="search-backdrop" for="search-toggle"></label>
            <div class="search-content">
                <form id="search-form" action="">
                    <input type="search" class="input-search" placeholder="Input what you want to search" required>
                    <button type="submit" id="searchsubmit" class="fa fa-search fa-4x"></button>
                </form>
            </div>
        </div>
    <!--  END search input-->
        <ul class="list-menu">
        <!--   START bottom in responsive menu    -->
            <input id="responsive-toggle" type="checkbox">
            <label for="responsive-toggle" id="btm-open-menu">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </label>
        <!--   END bottom in responsive menu    -->
            <li class="item-menu shop">
                <i href="/">shop</i>
                <ul class="sub-menu">
                    <li>
                        <h3 class="title-sub-menu"><a href="/">Home</a></h3>
                    </li>
                    <li>
                        <h3 class="title-sub-menu"><a href="/">Blog</a></h3>
                    </li>
                    <li>
                        <h3 class="title-sub-menu"><a href="about">About</a></h3>
                    </li>
                    <li>
                        <h3 class="title-sub-menu"><a href="contact">Contact</a></h3>
                    </li>
                    <li>
                        <h3 class="title-sub-menu"><a href="/">Shop</a></h3>
                    </li>
                </ul>
            </li>
            <li class="item-menu logo">
              <a href="/"><?= APPNAME; ?><br><span><?= SLOGAN; ?></span></a>
            </li>
            <li class="item-menu nav-icons">
                <label for="search-toggle"><i class="fa fa-search button-search" aria-hidden="true"></i></label>
                <label for="modal-basket-toggle" id="cart_trigger"><i class="fa fa-shopping-bag" aria-hidden="true"></i></label>
                <label for="modal-login-toggle"><i class="fa fa-user" aria-hidden="true"></i></label>
            </li>
        </ul>
    </div>
    <!--  END NAVIGAION  -->
