{
"title": "iTyped.js",
"slug": "itypedjs",
"created_at": "Styczeń 17, 2021",
"description": "Wpisz dowolny ciąg i obserwuj, jak wpisuje z ustawioną prędkością, cofnij wpisany tekst i rozpocznij nowe zdanie dla dowolnej liczby ustawionych ciągów.",
"img_url": "https://camo.githubusercontent.com/52cea81026635bed2555f853d6702158cadd31065435f6bafa255289e54be060/68747470733a2f2f63646e2e7261776769742e636f6d2f6c75697376696e69636975733136372f6974797065642f6d61737465722f696d672f6974797065646a732e676966"
}
===
&nbsp;

&nbsp;

###Instalacja i opis użycia

```html
<span sid="iTyped"></span>
```
&nbsp;

Zainicjalizuj iTyped w JavaScript.

```javascript
<script src="https://unpkg.com/ityped@1.0.3"></script>
<script type="text/javascript">
	const iTyped = document.querySelector('#iTyped');
	ityped.init(iTyped, { showCursor: false, strings: ['przykład użycia', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.' ] });
</script>
```

&nbsp;

### Przykład użycia

<div style="height:20px">
	<span style="font-size: 20px" id="ityped"></span>
</div>
