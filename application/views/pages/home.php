<h2><?= $title ?></h2>
<p>Strona główna</p>
	<div class="jumbotron bg-secondary d-flex flex-wrap align-items-center justify-content-center p-4">
		<div class="p-3 p-lg-4 text-white" style="width: 30rem">
			<p class="display-4">Lorem ipsum!</p>
			<p>dolor sit amet, consectetur adipiscing elit. Duis volutpat dui a dui dictum commodo. Suspendisse commodo magna viverra, cursus felis eget, blandit tortor. Pellentesque quam massa, finibus ut venenatis sit amet, suscipit vitae risus. </p>
		</div>
		<img src="https://pbs.twimg.com/profile_images/1080855598298611713/lTS-u1Iu.jpg" alt="Kermit"/>
	</div>

	<h4>Najnowsze posty</h4>

	<div class="container">
		<!-- Stack the columns on mobile by making one full-width and the other half-width -->
		<div class="row">
			<?php
				class Post
				{
					public $title;
					public $description;
					public $rows;
					public $cols;
					public function __construct()
					{
						$this->description = "Praesent porttitor elementum enim. In sit amet libero aliquam, consectetur quam et, efficitur justo. Suspendisse dignissim malesuada justo.";
						$this->rows = 1;
						$this->cols = 6;
					}
				}

				$post1 = new Post();
				$post1->title = 'Plugin1';
				$post1->cols = 12;

				$post2 = new Post();
				$post2->title = 'Plugin2';

				$post3 = new Post();
				$post3->title = 'Plugin3';

				$post4 = new Post();
				$post4->title = 'Plugin4';

				$post5 = new Post();
				$post5->title = 'Plugin5';


				$plugins = array($post1, $post2, $post3, $post4, $post5);

				foreach ($plugins as $plugin) { ?>
					<div class="col-12 <?php echo "col-lg-".$plugin->cols ?>">
						<div class="card mb-3" style="max-width: 540px;">
							<div class="row g-0 pl-3 pt-3 pt-md-0">
								<div class="col-md-4 d-flex">
									<img src="https://camo.githubusercontent.com/9f29e3d7fc79b01485632a99af0fd6a0f65d921adc720d0d30cdce9475caa9ca/68747470733a2f2f6769746875622e7375726d6f6e2e6d652f696d616765732f636f6d6d6f6e2f7377697065722d6c6f676f2e737667" alt="Swiper.js logo">
								</div>
								<div class="col-md-8">
									<div class="card-body">
										<h5 class="card-title"><?php echo $plugin->title ?></h5>
										<p class="card-text"><?php echo $plugin->description ?></p>
										<button type="button" class="btn btn-primary">Więcej</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php }
			?>

		</div>
	</div>
