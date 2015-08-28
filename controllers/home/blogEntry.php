<?php
namespace Simpleblog;

class HomeBlogEntryController extends \Sifo\Controller
{
	//protected $include_classes = array( 'FlashMessages', 'Pagination' );

	/**
	 * If you expect this controller to output a json response.
	 *
	 * @var boolean
	 */
	public $is_json = false;

	public function build()
    {
		$this->addModule( 'head', 'SharedHead' );
        	$this->setLayout( 'entries/blog_entry.tpl' );
		$this->assign( 'entry', $this->getBlogEntry(  ) );
		$this->assign( 'comments', $this->getBlogEntryComments(  ) );


    	}

	protected function getBlogEntry()
	{
		$entry = array();

		$entry['id'] = parent::getUrlParam(0);
		$title = parent::getUrlParam(1);
		// bug in the framework required to take out semi-colon
		list($title, $b) = explode(';', $title);
		$entry['title'] = $title;
		$entry['content'] = parent::getUrlParam(2);

		return $entry;
	}
	
	protected function getBlogEntryComments()
	{
		$comments = array();
				
		$blogEntryCommentModel = new BlogEntryCommentModel();
		$comments = $blogEntryCommentModel->getBlogEntryComments(parent::getUrlParam(0));

		return $comments;
	}
	
}
