<?php
use \Kurenai\Parser;
use \Kurenai\Parsers\Metadata\JsonParser;
use \Kurenai\Parsers\Content\ParsedownParser;


 class Post_model extends CI_Model {

 	private $parser;

 	public  function __construct() {
 		$this->load->database();


		$this->parser = new Parser(
			new JsonParser,
			new ParsedownParser
		);
	}
//	I'm lost here
	public function get_posts($slug = FALSE) {
 		if($slug === FALSE) {
 			$query = $this->db->get('posts');
 			return $query->result_array();
		}
		//echo base_url().$slug;
		$post_file_content = file_get_contents(base_url()."assets/posts/".$slug.".md");
		$document = $this->parser->parse($post_file_content);
		echo $document->get("created_at");
		$query = $this->db->get_where('posts', array('slug' => $slug));
		return $query->row_array();
	}

	public function get_latest_posts() {
		$query = $this->db->query("SELECT * FROM posts ORDER BY created_at DESC LIMIT 5");
		return $query->result_array();
	}
 }
