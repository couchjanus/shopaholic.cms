<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Shop</title>
    <link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <div class="fake-nav"></div>
    <nav id="nav">
    <!--  START search input-->
      <div class="search-container">
            <input id="search-toggle" type="checkbox">
            <label class="search-backdrop" for="search-toggle"></label>
            <div class="search-content">
                <form id="search-form" method ='POST' action="/search" >
                    <input type="search" class="input-search" placeholder="Input what you want to search" required name="query">
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
                        <h3 class="title-sub-menu"><a href="/catalog">Shop</a></h3>
                    </li>
                </ul>
            </li>
            <li class="item-menu logo">
              <a href="/"><?= APPNAME; ?><br><span><?= SLOGAN; ?></span></a>
            </li>
            <li class="nav-icons" id="navicons">
                <label for="search-toggle"><i class="fa fa-search button-search" aria-hidden="true"></i></label>
                <label for="modal-basket-toggle" id="cart_trigger"><i class="fa fa-shopping-cart" aria-hidden="true"></i></label>
                <label for="modal-login-toggle" class="animate"><i class="fa fa-user" aria-hidden="true"></i></label>
                <dropdown>
                  <input id="modal-login-toggle" type="checkbox">
                  <ul class="animate">
                    <?php if(User::isGuest()):?>
                      <li class="animate"><a href="/register">SignUp<i class="fa fa-user-plus float-right"></i></a></li>
                      <li class="animate"><a href="/login">LogIn<i class="fa fa-sign-in float-right"></i></a></li>
                    <?php else:?>
                      <li class="animate"><a href="/profile">Profile<i class="fa fa-user-circle float-right"></i></a></li>
                      <li class="animate"><a href="/logout">LogOut<i class="fa fa-sign-out float-right"></i></a></li>
                    <?php endif;?>
                  </ul>
                </dropdown>
            </li>
        </ul>
    </nav>
    <!--  END NAVIGAION  -->
