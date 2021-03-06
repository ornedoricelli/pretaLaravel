<!-- ___________________________________NAV __________________________________________________-->
<div class="nav-abajo" style="height:115px; width:100%; margin:0px; padding:0px; background-color:transparent;"></div>
<div class="nav-abajo-m" style="height:40px; width:100%; margin:0px; padding:0px; background-color:transparent;"></div>
<nav id="hero">
     <!-- ___________________________________HAMB-->

    <div class="nav-hamburguer">
      <input id="burger" type="checkbox" />

      <label for="burger">
        <span></span>
        <span></span>
        <span></span>
      </label>

      <div class="nav-shop">
        <a href="{{  url('/carrito') }}"><i class="material-icons">shop</i></a>
      </div>

      <div class="nav-logo-mobile">
        <a href="{{  url('/') }}"><img src="/images/logo-preta.png" /></a>


      </div>

      <div class="hamb-nav">
        <ul>
          <img src="/images/banner-menu.png" alt="" />
          <div class="ingresar">
            <a href="{{  url('/login') }}">
            @if (Auth::guest())
              <h3>INGRESAR</h3>

            </a>
            <a href="{{  url('/register') }}">
              <h3>REGISTRARME</h3>
            </a>
  @else
  <li><a class="nombre" href="{{  url('/perfil') }}">{{ Auth::user()->name }}</a></li>

      <li>
         <a href="{{ url('/logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                LOGOUT
         </a>
         <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
      </li>



  </div>
  @endif




          <a class="nombre" href="{{  url('/shopby/newin') }}">
            <li>
              <div class="li-flex">
                NEW IN
                <i class="material-icons">chevron_right</i>
              </div>
            </li></a>

          <a class="nombre" href="{{  url('/shop') }}">
            <li>
              <div class="li-flex">
                SHOP ALL
                <i class="material-icons">chevron_right</i>
              </div>
            </li></a>
          <a class="nombre" href="{{  url('/shop/tops/2') }}">
            <li>
              <div class="li-flex">
                TOPS
                <i class="material-icons">chevron_right</i>
              </div>
            </li></a>
          <a class="nombre" href="{{  url('/shop/jeans/1') }}">
            <li>
              <div class="li-flex">
                JEANS
                <i class="material-icons">chevron_right</i>
              </div>
            </li></a>
          <a class="nombre" href="{{  url('/shop/vestidos/4') }}">
            <li>
              <div class="li-flex">
                VESTIDOS
                <i class="material-icons">chevron_right</i>
              </div>
            </li></a>
          <a class="nombre" href="{{  url('/shopby/sale') }}">
            <li>
              <div class="li-flex">
                SALE
                <i class="material-icons">chevron_right</i>
              </div>
            </li></a>
          <a class="nombre" href="#">
            <li>
              <div class="li-flex">
                LOCALES
                <i class="material-icons">chevron_right</i>
              </div>
            </li></a>
          <a class="nombre" href="{{  url('/ayuda') }}">
            <li>
              <div class="li-flex">
                AYUDA
                <i class="material-icons">chevron_right</i>
              </div>
            </li></a>
         
        </ul>
        <div class="hamb-redes">
          <ul>
            <a href=""><li><i class="fab fa-facebook footer-icon"></i></li></a>
            <a href=""><li><i class="fab fa-instagram  footer-icon"></i></li></a>
            <a href=""><li><i class="fab fa-twitter-square  footer-icon"></i></li
            ></a>
            <a href=""><li><i class="fab fa-youtube  footer-icon"></i></li></a>
            <a href=""><li><i class="fab fa-linkedin  footer-icon"></i></li></a>
          </ul>
        </div>
      </div>
    </div>
    <!-- ___________________________________END HAMB-->

    <div class="container">

      <div class="nav-tablet-desktop">
        <div class="nav-container1">
          
          <div class="nav-locales">
            <ul>
            <div class="tooltip2 top">
              <li><a >LOCALES</a></li>
              <span class="tiptext2">MUY PRONTO :)</span>
</div>
              <hr />
              <div class="tooltip2 top">
              <div class="nav-search">
                <a ><i class="material-icons">search</i></a>
                <li><a >BUSCAR</a></li>
</div>

    <span class="tiptext2">FUNCIONALIDAD EN CONSTRUCCIÓN :)</span>
</div>
              <hr />
              <li><a href="{{  url('/ayuda') }}">AYUDA</a></li>
            </ul>
          </div>

          <div class="nav-logo">
            <a href="{{  url('/') }}"> <img src="/images/logo-preta.png" alt="" /></a>
          </div>


          <div class="nav-ingresar">
            <ul>


@if (Auth::guest())
                    <li><a href="{{  url('/login') }}">INGRESA</a></li>
                    <hr />
              <div class="nav-search">
                <li><a href="{{  url('/register') }}">REGISTRATE</a></li>
              </div>

  @else
  <li><a class="nombre" href="{{  url('/perfil') }}">{{ Auth::user()->name }}</a></li>

  <hr />
              <div class="nav-search">
          <li>
         <a href="{{ url('/logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                SALIR
         </a>
         <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
      </li>
      </div>
      <hr />
              <li>
                <a href="{{  url('/carrito') }}"> <i class="material-icons">shopping_basket</i></a>
              </li>

  </li>

  @endif



          </div>
        </div>
        </ul>
        <div class="nav-container2">
          <ul>
            <li><a href="{{  url('/shopby/newin') }}">NEW IN</a></li>
            <li><a href="{{  url('/shop') }}">SHOP</a></li>
            <li><a href="/shop/jeans/1">JEANS</a></li>
            <li><a href="/shop/abrigos/3">ABRIGOS</a></li>
            <li><a href="/shop/vestidos/4">VESTIDOS</a></li>
            <li><a href="/shop/tops/2">TOPS</a></li>
            <li><a href="{{  url('/shopby/sale') }}">SALE</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- ___________________________________END NAV __________________________________________________-->
