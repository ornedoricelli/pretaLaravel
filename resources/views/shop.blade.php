<!-- var_dump($products);
exit;  -->

@extends('layouts.master')

@section('styles')
    <link rel="stylesheet" href="/css/shop.css" />
@endsection

@section('content')
<nav>

@include('partials/shop/nav_shop')
@include('partials/shop/nav_shop_mobile')

</nav>

<!-- CUERPO SHOP -->
<main>

<div class="filter-pages">
  <div class="filter-pages__categoria">
  <div class="link">
    <a href="">
      <h4>Home</h4>
    </a>
    <h4>/</h4>
    <a href="">
        <h4> Vestidos</h4>
      </a>
  </div>
</div>
@include('partials/shop/filterPages_shop')
</div>
<div class="modulosTodos">

<?php foreach ($products as $product) {
  echo '<div class="modulo-shop">
    <div class="modulo-shop__img">
      <img class="uno" src="' .
      $product['photo1'] .
      '" alt="">
      <img class="dos" src="'.
      $product['photo3'] .
      '" alt="">
  </div>
  <div class="modulo-shop__descripcion">
    <div class="titulo"><h4>'.
    $product['name'].
    '</h4></div>
    <div class="precio"><h4>$'. $product['price'].'</h4></div>
    <div class="color"><h4>' . $product['discount'] . '%OFF
  </h4></div>
  </div>
  </div>';
} ?>

</div>
</main>
@endsection
