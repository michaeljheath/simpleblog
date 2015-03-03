<?php /* Smarty version Smarty 3.1.4, created on 2015-02-27 11:43:07
         compiled from "C:\dev\sifo\instances\simpleblog\templates\admin\blog_entry.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3087354ed21cbddc078-53949564%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af1dc87e3db11faa4924933b808a27f310d6d86b' => 
    array (
      0 => 'C:\\dev\\sifo\\instances\\simpleblog\\templates\\admin\\blog_entry.tpl',
      1 => 1425033777,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3087354ed21cbddc078-53949564',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_54ed21cc2acb4',
  'variables' => 
  array (
    'modules' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ed21cc2acb4')) {function content_54ed21cc2acb4($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <?php echo $_smarty_tpl->tpl_vars['modules']->value['head'];?>

  <body>

    <div class="content">
      <div id="header">
        <div class="title">
        <h1><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['base'];?>
/">SIMPLE BLOG</a></h1>
        <h2><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['base'];?>
/admin-blog-entry">ADMIN</a></h2>
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
        <div class="padding"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['base'];?>
/">HOME</a> | <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['base'];?>
/admin-blog-entry">ADMIN</a></div>
      </div>
      
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
      
  </body>
  
</html><?php }} ?>