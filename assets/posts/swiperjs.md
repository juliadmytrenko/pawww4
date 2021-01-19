{
"title": "Swiper.js",
"slug": "swiperjs",
"created_at": "Styczeń 15, 2021",
"description": "Swiper to najnowocześniejszy darmowy mobilny slider dotykowy z przyspieszanymi sprzętowo przejściami i niesamowitym natywnym zachowaniem. Jest przeznaczony do użytku w mobilnych witrynach internetowych, mobilnych aplikacjach internetowych i mobilnych aplikacjach natywnych / hybrydowych.",
"img_url": ""
}
===

# Swiper.js

###Instalacja

```html
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
```

###Opis użycia

Dodaj ten kod do swojego projektu.
```html
<!-- Slider main container -->
<div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">Slide 1</div>
        <div class="swiper-slide">Slide 2</div>
        <div class="swiper-slide">Slide 3</div>
        ...
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
</div>
```

Zainicjalizuj Swipera w JavaScript.
```javascript
var mySwiper = new Swiper('.swiper-container', {
  // Optional parameters
  direction: 'vertical',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
})
```
