<h1><?php echo $post['title']; ?></h1>
<small class="post-date">📅 <?php echo $post['created_at'] ?></small>
<div class="post-body hljs">
	<?php echo $post['body']; ?>
</div>


<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script type="text/javascript">
	let swiper = new Swiper('.swiper-container', {
		pagination: {
			el: '.swiper-pagination',
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
	});
</script>

<!--iTyped.js-->
<script src="https://unpkg.com/ityped@1.0.3"></script>
<script type="module">
	import { init } from 'ityped';
	const iTyped = document.querySelector('#ityped');
	init(iTyped, { showCursor: false, strings: ['Lorem', 'Ipsum', 'costam' ] });
</script>


