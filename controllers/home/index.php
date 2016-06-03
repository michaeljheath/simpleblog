<?php
namespace Simpleblog;

class HomeIndexController extends SharedFirstLevelController{
	//protected $include_classes = array( 'FlashMessages', 'Pagination' );

	/**
	 * If you expect this controller to output a json response.
	 *
	 * @var boolean
	 */
	// public $is_json = false;

	public function buildCommon(){
        	$this->setLayout( 'home/index.tpl' );
		$this->assign( 'blog_entries', $this->getBlogEntries(  ) );
	}


	public function getCacheDefinition(){
		// No caching:
		return false;

		// The language is added automatically in the cache name from the Controller.
		$cache_name = 'home';

		// Caching for the default time:
		return  $cache_name;

		// Caching with custom expiration , 900 seconds.
		return array( 'name' => $cache_name, 'expiration' => 900 );
	}
	
	protected function getBlogEntries(){
		$entries = array();
		
		$blogEntryModel = new BlogEntryModel();
		$entries = $blogEntryModel->getBlogEntries();
		
		return $entries;
	}
	
}
