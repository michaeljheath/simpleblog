<?php

namespace SimpleBlog;

class BlogEntryModel extends \Sifo\Model
{
    
    public function getBlogEntries()
    {
        return $this->GetArray('SELECT * from blog_entries', array('tag' => 'Get all entries'));
    }
    
    public function addBlogEntry($title, $content)
    {
        $sql = "insert into blog_entries (title, content) VALUES (?,?)";
        $result = $this->Execute( $sql, array(
                                    'tag' => 'Add message',
                                    $title,
                                    $content
		                             ) );
    }
}