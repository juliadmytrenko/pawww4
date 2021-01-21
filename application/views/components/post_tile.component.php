<?php
	function createPostTile($post) {
			$wiv_class_and_attributes = 'class="wiv" style="width: 100%" data-wiv-speed=".55" data-wiv-height="5" data-wiv-tightness="6" data-wiv-thickness="2" data-wiv-color="inherit"';

			echo '
				<div class="mb-3" >
					<div '.($post['slug'] === 'wivjs' ? $wiv_class_and_attributes : 'class="card"').'>
							<div class="row g-0 pl-4 pt-4 pt-md-0">
								<div class="col-md-4 d-flex justify-content-center align-items-center p-3">
									<img style="max-height: 250px" src='.$post['img_url'].' alt="'.$post['title'].' logo">
								</div>
								<div class="col-md-8">
									<div class="card-body">
										<h3 class="card-title"> '.$post['title'].'</h3>
										<small class="post-date">📅 '.$post['created_at'].'</small>
										<p class="card-text">'.$post['description'].'</p>
										<a class="btn btn-primary" href='.site_url().'posts/'.$post['slug'].'>Więcej</a>
									</div>
								</div>
							</div>
					</div>
				</div>
			';
	}
?>
