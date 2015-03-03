<?php

namespace SimpleBlog;

class BlogEntryCommentModel extends \Sifo\Model
{
    
    public function getBlogEntryComments($blogEntryId)
    {
        $sql = 'select comments.comment from comments, blog_entries, blog_entry_comments 
                where comments.id = blog_entry_comments.comment_id
                and blog_entry_comments.blog_entry_id = blog_entries.id
                and blog_entries.id = ?';
                
        return $this->GetArray($sql, array($blogEntryId));
    }
    
    public function addBlogEntryComment($blogEntryId, $comment)
    {
        
        $sql = "insert into comments (comment) VALUES (?)";
        $result = $this->Execute( $sql, array(
                                    'tag' => 'Add message',
                                    $comment
		                             ) );
        
        // get the latest comment_id
        $commentId = $this->Insert_ID();
        if($result)
        {
            $sql = "insert into blog_entry_comments (blog_entry_id, comment_id) VALUES (?,?)";
            $result = $this->Execute($sql, array(
                                        'tag' => 'Add message',
                                        $blogEntryId,
                                        $commentId
                                    ));
            
            if($result)
                return true;
            else
                return false;
            
        }
    }


}