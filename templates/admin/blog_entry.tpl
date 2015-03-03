<!DOCTYPE html>
<html lang="en">
  { $modules.head }
  <body>

    <div class="content">
      <div id="header">
        <div class="title">
        <h1><a href="{$url.base}/">SIMPLE BLOG</a></h1>
        <h2><a href="{$url.base}/admin-blog-entry">ADMIN</a></h2>
        <h3>New Blog Post</h3>
        </div>

      </div>
      <div id="main">
        <div class="center">
    
            
    
            <h3>Add a blog post:</h3>
                <form method="post" name="blog_entry_form" id="blog_entry_form">
                  <ul>
                      <li>
                          <input type="text" name="title" id="title" placeholder="Enter blog title">
                      </li>
                      </br>
                      <li>
                          <input type="textarea" rows="10" columns="50" name="new_entry" id="new_entry" placeholder="Enter blog entry">
                      </li>
                      </br>

                     </li>
                      <li>
                          <input type="submit" value="Submit Entry" />
                      </li>
                      </br>
                      <li>
                        <span class="status"></span>
                      </li>
                 </ul>
              </form>
              <br /> 
        </div>
      </div>
      <div id="footer">
        <div class="padding"><a href="{$url.base}/">HOME</a> | <a href="{$url.base}/admin-blog-entry">ADMIN</a></div>
      </div>
      {literal}
      <script type="text/javascript">
        jQuery(document).ready(function() {
          
            var title;
            var entry;
            
            jQuery('form').submit(function(event) {

                console.log( $( this ).serializeArray() );
                var serializedData = jQuery(this).serializeArray();
                
                request = jQuery.ajax({ 
                    type      : 'POST', 
                    url       : '/admin-save-blog-entry', //Controller
                    data      :  serializedData, 
                    dataType  : 'json'
                });
                
                request.done(function (response, textStatus, jqXHR){
                    console.log(response.posted);
                    jQuery('.status').fadeIn(1000).append('<p>Data Was Posted Successfully</p>');

                });

                // Callback handler that will be called on failure
                request.fail(function (jqXHR, textStatus, errorThrown){
                    console.log("The following error occurred: " + textStatus, errorThrown );
                    jQuery('.status').fadeIn(1000).append('<p>' + textStatus + '</p>');
                });
                
                request.always(function () {
                    jQuery('#title').val(''); 
                    jQuery('#new_entry').val(''); 
                });
                
                event.preventDefault(); 
            });
        });
      </script>
      {/literal}
  </body>
  
</html>