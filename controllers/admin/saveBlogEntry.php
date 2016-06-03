<?php
namespace Simpleblog;

class AdminSaveBlogEntryController extends \Sifo\Controller{
	//protected $include_classes = array( 'FlashMessages', 'Pagination' );
	
	/**
	 * If you expect this controller to output a json response.
	 *
	 * @var boolean
	 */
	public $is_json = true;

	public function build(){
		return $this->insertBlogEntry();
    }

	public function insertBlogEntry(){
		$success = true;
		$return_values = array();
		
		// get the form values
		$filterPost = \Sifo\FilterPost::getInstance();
		
		$blogEntryCommentModel = new BlogEntryModel();
		$success = $blogEntryCommentModel->addBlogEntry($filterPost->getString( 'title' ), $filterPost->getString( 'new_entry' ));

		if($success)
		{
			$return_values['success'] = true;
			$return_values['posted'] = 'Data Was Posted Successfully';
		}
		
		return $return_values;
	}
}
