{
"title": "Swiper.js",
"slug": "swiperjs",
"created_at": "Styczeń 15, 2021",
"description": "Swiper to najnowocześniejszy darmowy mobilny slider dotykowy z przyspieszanymi sprzętowo przejściami i niesamowitym natywnym zachowaniem. Jest przeznaczony do użytku w mobilnych witrynach internetowych, mobilnych aplikacjach internetowych i mobilnych aplikacjach natywnych / hybrydowych.",
"img_url": "https://www.vuescript.com/wp-content/uploads/2016/12/Swiper-Slide-Component-For-Vue.js.png"
}
===
&nbsp;

&nbsp;

###Instalacja

```html
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
```

&nbsp;

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
&nbsp;

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

&nbsp;

### Przykład użycia

<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="https://s3.amazonaws.com/iexplore_web/images/assets/000/002/690/original/spinx_-_Roderick_Eime.jpg?1439577916" alt="Sphinx"/></div>
        <div class="swiper-slide"><img src="https://cdn1.matadornetwork.com/blogs/1/2018/02/Taj-Mahal.jpg" alt="Taj Mahal"/></div>        
<div class="swiper-slide"><img src="https://www.bhutanpeacefultour.com/wp-content/uploads/2019/02/Paro-Taktsang-1.jpg" alt="klasztor Gniazdo Tygrysa w Bhutanie"/></div>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>
