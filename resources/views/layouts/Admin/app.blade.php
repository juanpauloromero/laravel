<html>
@include('layouts.Admin.includes.head')


<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"> <img src="{{ asset('image/logo.svg') }}" alt="Logo Grille O Presto"
                    class="logo"></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ route('logout') }}">Deconnexion</a></li>
            </ul>
            <ul class="nav navbar-nav">
                <li class="active"><a href="http://127.0.0.1:8000">Accueil</a></li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gestion Admin <b
                            class="caret"></b></a>
                    <ul class="dropdown-menu multi-level">
                        <li><a href="{{ route('admin.admin.create') }}">Add Admin</a></li>
                        <li><a href="{{ route('admin.admin.index') }}">Liste Admin</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gestion clients <b
                            class="caret"></b></a>
                    <ul class="dropdown-menu multi-level">
                        <li><a href="{{ route('admin.users.index') }}">Liste Clients</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gestion Menu <b
                            class="caret"></b></a>
                    <ul class="dropdown-menu multi-level">
                        <li><a href="{{ route('admin.menus.create') }}">Add Menu</a></li>
                        <li><a href="{{ route('admin.menus.index') }}">Liste Menu</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gestion Plats <b
                            class="caret"></b></a>
                    <ul class="dropdown-menu multi-level">
                        <li><a href="{{ route('admin.dishes.create') }}">Add
                                Plats</a></li>
                        <li><a href="{{ route('admin.dishes.index') }}">Liste
                                de Plats</a></li>
                    </ul>
                </li>

                <li class="active"><a href="{{ route('admin.orders.index') }}">Commandes</a></li>
                </li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>

<div>
    @yield('content')
</div>
<div>
    @yield('admin.footer')
</div>

</html>
