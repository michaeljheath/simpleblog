<?php
namespace Simpleblog;

class HomeBlogEntryCommentsController extends \Sifo\Controller{
	//protected $include_classes = array( 'FlashMessages', 'Pagination' );

	/**
	 * If you expect this controller to output a json response.
	 *
	 * @var boolean
	 */
	public $is_json = true;

	public function build(){
		// get the form values
		$filterPost = \Sifo\FilterPost::getInstance();
		$values = array();

		$values['new_comment']  = $filterPost->getString( 'new_comment' );
		$values['entry_id'] = $filterPost->getString( 'entry_id' );


		return $this->insertBlogEntryComment($values);
	}
	
	protected function insertBlogEntryComment($values){
		$success = true;
		$return_values = array();
		
		$blogEntryCommentModel = new BlogEntryCommentModel();
		$success = $blogEntryCommentModel->addBlogEntryComment($values['entry_id'], $values['new_comment']);
		
		if($success)
		{
			$return_values['success'] = true;
			$return_values['posted'] = 'Data Was Posted Successfully';
		}
		
		return $return_values;
	}
	
}
