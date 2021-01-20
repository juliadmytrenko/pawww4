{
"title": "iTyped.js",
"slug": "itypedjs",
"created_at": "Styczeń 17, 2021",
"description": "",
"img_url": ""
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
