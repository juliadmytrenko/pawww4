<?php
use \Kurenai\Parser;
use \Kurenai\Parsers\Metadata\JsonParser;
use \Kurenai\Parsers\Content\ParsedownParser;


 class Post_model extends CI_Model {

 	private $parser;
 	protected $post;

 	public  function __construct() {
		$this->parser = new Parser(
			new JsonParser,
			new ParsedownParser
		);
	}

	public function get_posts($slug = FALSE) {
 		if($slug === FALSE) {



 			$query = $this->db->get('posts');
 			return $query->result_array();
		}


		function isMarkdown($file)
		{
			// returns whether the file has an .md extension
			if(pathinfo($file)['extension'] === "md") {
					return $file;
			}
		}

 		$files = scandir("./assets/posts");
		//print_r(array_filter($files, array(pathinfo($files)['extension'] => "md")));

		$md_files = array_filter($files, "isMarkdown");

		print_r($md_files);



//		echo "hujumuju";
		$post_file_content = file_get_contents(base_url()."assets/posts/".$slug.".md");
		$document = $this->parser->parse($post_file_content);
		$this->post = $document->getMetadata();
		$this->post['body'] = $document->getContent();

		return $this->post;
	}

	public function get_latest_posts() {
		$query = $this->db->query("SELECT * FROM posts ORDER BY created_at DESC LIMIT 5");
		return $query->result_array();
	}
 }
