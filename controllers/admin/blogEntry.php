<?php
namespace Simpleblog;

class AdminBlogEntryController extends SharedFirstLevelController
{
	//protected $include_classes = array( 'FlashMessages', 'Pagination' );
	
	/**
	 * If you expect this controller to output a json response.
	 *
	 * @var boolean
	 */
	public $is_json = false;

	public function buildCommon()
    {
		$this->setLayout( 'admin/blog_entry.tpl' );
    }

	public function insertBlogEntry()
	{
		$return_data = array();

		// get the POST values
		$title = "";
		$content = "";
		
		// get the form values
		$filterPost = \Sifo\FilterPost::getInstance();
		
		$blogEntryCommentModel = new BlogEntryModel();
		$success = $blogEntryCommentModel->addBlogEntry($filterPost->getString( 'title' ), $filterPost->getString( 'new_entry' ));


		return $return_data;
	}
	
	public function getCacheDefinition()
	{
		// No caching:
		return false;

		// The language is added automatically in the cache name from the Controller.
		$cache_name = 'home';

		// Caching for the default time:
		return  $cache_name;

		// Caching with custom expiration , 900 seconds.
		return array( 'name' => $cache_name, 'expiration' => 900 );
	}
	

	
}
