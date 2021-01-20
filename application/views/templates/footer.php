			<footer id="footer">
				<div class="row">
					<div class="col-lg-12  mt-3">
						<ul class="list-unstyled">
							<li class="float-lg-right"><a href="">Wróć na górę</a> &uarr;</li>
						</ul>
						<br>
						<hr>
						<p><small>
							© <?php echo date("Y"); ?>
							<a href="https://github.com/juliadmytrenko">Julia Dmytrenko</a> 😘
						</small></p>
						<p>Kod udostępniony na zasadach licencji  <a href="https://github.com/thomaspark/bootswatch/blob/master/LICENSE">MIT</a>.</p>
					</div>
				</div>
			</footer>
		</div>


		<!--iTyped.js-->
		<script src="https://unpkg.com/ityped@1.0.3"></script>

		<script type="text/javascript">
			const iTyped = document.querySelector('#ityped');
			const helloWorld = document.querySelector('#ityped-hello');
			ityped.init(iTyped, { showCursor: false, strings: ['przykład użycia', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.' ] });
			ityped.init(helloWorld, { showCursor: true, strings: ['Witaj świecie!', 'Hello World!', 'Bonjour monde!', '¡Hola Mundo!', 'Hallo Welt!', 'こんにちは世界！', 'Ahoj světe!', 'Ciao mondo!', 'Halo Dunia!', '你好世界！' ] });
		</script>
		<script src="<?php echo base_url(); ?>assets/prism.js"></script>
		<script src="<?php echo base_url(); ?>assets/script.js"></script>
	</body>
</html>
