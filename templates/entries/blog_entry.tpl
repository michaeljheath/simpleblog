<!DOCTYPE html>
<html lang="en">
  { $modules.head }
  <body>

    <div class="content">
      <div id="header">
        <div class="title">
        <h1><a href="{$url.base}/">SIMPLE BLOG</a></h1>
        <h2><a href="{$url.base}/admin-blog-entry">ADMIN</a></h2>
        <h3>{$entry.title}</h3>
        </div>

      </div>
      <div id="main">
        <div class="center">
    
      
            <h3>{$entry.title}</h3>
            <p>{$entry.content}</p>
            <br />
            
    
      
            <h3>Comments</h3>
              <div id="comment" class="comment">
              {if $comments}
                {foreach $comments as $comment}
                  <p>{$comment['comment']}</p>
                {/foreach}
              {/if}
              </div>
            <br />
            
    
            
    
            <h3>Add a comment:</h3>
                <form method="post" name="comment_form" id="comment_form">
                  <ul>
                      <li>
                          <input type="textarea" rows="4" columns="50" name="new_comment" id="new_comment" placeholder="Enter comment">
                          <input type="submit" value="Add Comment" />
                          <input type="hidden" name="entry_id" value="{$entry.id}" />
                     </li>
                      <li>
                        <span class="throw_error"></span>
                      </li>
                 </ul>
              </form>
              <br /> 

        </div>
    
      </div>
      <div id="footer">
        <div class="padding"><a href="{$url.base}/">HOME</a> | <a href="{$url.base}/admin-blog-entry">ADMIN</a></div>
      </div>
    </div>
      {literal}
      <script type="text/javascript">
        jQuery(document).ready(function() {
          
            var request;
            var comment;
            
            jQuery('form').submit(function(event) {

                // cache the comment for display on return
                comment = $('input[name=new_comment]').val()
                console.log( $( this ).serializeArray() );
                var serializedData = jQuery(this).serializeArray();
                
                request = jQuery.ajax({ 
                    type      : 'POST', 
                    url       : '/blog-entry-comments', //Controller
                    data      :  serializedData, 
                    dataType  : 'json'
                });
                
                request.done(function (response, textStatus, jqXHR){
                    // Log a message to the console
                    console.log(response.posted);
                    jQuery('#comment').fadeIn(1000).append('<p>' + comment + '</p>');

                });

                // Callback handler that will be called on failure
                request.fail(function (jqXHR, textStatus, errorThrown){
                    // Log the error to the console
                    console.log("The following error occurred: " + textStatus, errorThrown );
                    jQuery('.throw_error').fadeIn(1000).html(textStatus);
                });
                
                request.always(function () {
                    jQuery('#new_comment').val(''); 
                });
                
                event.preventDefault(); 
            });
        });
      </script>
      {/literal}
  </body>
  
</html>