<h2><?= $title ?></h2>
<p>Strona główna</p>
	<div class="jumbotron bg-secondary d-flex flex-wrap align-items-center justify-content-center p-4">
		<div class="p-3 p-lg-4 text-white" style="width: 30rem">
			<p class="display-4" style="min-height: 70px;"><span  id="ityped-hello"></span></p>
			<p>dolor sit amet, consectetur adipiscing elit. Duis volutpat dui a dui dictum commodo. Suspendisse commodo magna viverra, cursus felis eget, blandit tortor. Pellentesque quam massa, finibus ut venenatis sit amet, suscipit vitae risus. </p>
			<a href="#" class="btn btn-warning">Więcej</a>
		</div>
		<img src="https://bstatic.com/xdata/images/xphoto/1182x887/82877075.jpg?k=db9e00135b7b8f038aad88a7676235667ca249a5eed997a499677812fa332833&o=?size=S" alt="forest" style="max-height: 400px"/>
	</div>

	<h4>Najnowsze posty</h4>

	<div class="container my-4">
		<!-- Stack the columns on mobile by making one full-width and the other half-width -->
		<div class="row">
			<?php
//				class Post
//				{
//					public $title;
//					public $created_at;
//					public $description;
//					public $rows;
//					public $cols;
//					public function __construct()
//					{
//						$this->created_at = date("Y-m-d h:i:sa");
//						$this->description = "Praesent porttitor elementum enim. In sit amet libero aliquam, consectetur quam et, efficitur justo. Suspendisse dignissim malesuada justo.";
//						$this->rows = 1;
//						$this->cols = 6;
//					}
//				}
//
//				$post1 = new Post();
//				$post1->title = 'Plugin1';
//				$post1->cols = 12;
//
//				$post2 = new Post();
//				$post2->title = 'Plugin2';
//
//				$post3 = new Post();
//				$post3->title = 'Plugin3';
//
//				$post4 = new Post();
//				$post4->title = 'Plugin4';
//
//				$post5 = new Post();
//				$post5->title = 'Plugin5';
//
//
//				$plugins = array($post1, $post2, $post3, $post4, $post5);

			include "./application/views/components/post_tile.component.php";
				//echo json_encode($latest_posts);
			?>
<!--			 instead of 12 there should be $post['cols']-->
			<?php
				foreach ($latest_posts as $post) : ?>
					<div class="col-12 col-lg-<?php echo 6 ?>" >
								<?php createPostTile($post);?>
					</div>
			<?php endforeach;?>
		</div>

		<div class="d-flex justify-content-center my-5"><a href="<?php echo site_url().'posts/'?>" class="btn btn-warning">Wyświetl wszystkie posty</a></div>
	</div>
