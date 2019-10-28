<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Переключение навигации</span>
            </button>
            <a class="navbar-brand" href="{{ route('product.index') }}"><div style="font-size: 35px">Наши бренды велосипедов</div></a>
            <a class="navbar-brand"  style="margin-left: 50px;"><div style="align-content: center">+375 9997779 наш телефон</div></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ route('product.shoppingCart') }}"><i class="fa fa-shopping-bag" aria-hidden="true"></i>
                        Корзина
                    <span class="badge">{{Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
                    </a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i>
                        Учетная запись пользователя<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        @if(Auth::check())
                            <li><a href="{{ route('user.profile') }}">Профиль пользователя</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ route('user.logout') }}">Выйти</a></li>
                        @else
                            <li><a href="{{ route('user.signup') }}">Зарегистрироваться</a></li>
                            <li><a href="{{ route('user.signin') }}">Войти</a></li>
                            @endif
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>