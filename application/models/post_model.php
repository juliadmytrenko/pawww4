<?php
use \Kurenai\Parser;
use \Kurenai\Parsers\Metadata\JsonParser;
use \Kurenai\Parsers\Content\ParsedownParser;

 class Post_model extends CI_Model {

 	private $parser;

 	public  function __construct() {
		$this->parser = new Parser(
			new JsonParser,
			new ParsedownParser
		);
	}

	public function get_posts($number = FALSE, $slug = FALSE) {
 		if($slug === FALSE) {
			$files = scandir("./assets/posts");
			$md_files = array_filter($files, "isMarkdown");
			$md_files = array_values($md_files);

			$posts = array();

//			foreach ($md_files as $slug):
//				$post_file_content = file_get_contents("./assets/posts/".$slug);
//				$document = $this->parser->parse($post_file_content);
//				array_push($posts, $document->getMetadata());
//			endforeach;
				if($number && $number <= count($md_files)) {
					$numberOfPostsToGet = $number;
				} else {
					$numberOfPostsToGet = count($md_files);
				}

			for ($i=0; $i< $numberOfPostsToGet; $i++) {
				$file = $md_files[$i];
				$post_file_content = file_get_contents("./assets/posts/".$file);
				$document = $this->parser->parse($post_file_content);
				array_push($posts, $document->getMetadata());
			}
			// there should be sort by date function

			return $posts;
		}

		$post_file_content = file_get_contents(base_url()."assets/posts/".$slug.".md");
		$document = $this->parser->parse($post_file_content);
		$post = $document->getMetadata();
		$post['body'] = $document->getContent();

		return $post;
	}
 }


function isMarkdown($file)
{
	// returns whether the file has an .md extension
	if(pathinfo($file)['extension'] === "md") {
		return $file;
	}
}
