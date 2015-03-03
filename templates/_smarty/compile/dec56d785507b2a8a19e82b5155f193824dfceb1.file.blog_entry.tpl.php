<?php /* Smarty version Smarty 3.1.4, created on 2015-02-27 11:23:32
         compiled from "C:\dev\sifo\instances\simpleblog\templates\entries\blog_entry.tpl" */ ?>
<?php /*%%SmartyHeaderCode:739554e8db3ff0e2e6-53489379%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dec56d785507b2a8a19e82b5155f193824dfceb1' => 
    array (
      0 => 'C:\\dev\\sifo\\instances\\simpleblog\\templates\\entries\\blog_entry.tpl',
      1 => 1425032387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '739554e8db3ff0e2e6-53489379',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_54e8db40283d6',
  'variables' => 
  array (
    'modules' => 0,
    'url' => 0,
    'entry' => 0,
    'comments' => 0,
    'comment' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e8db40283d6')) {function content_54e8db40283d6($_smarty_tpl) {?><!DOCTYPE html>
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
        <h3><?php echo $_smarty_tpl->tpl_vars['entry']->value['title'];?>
</h3>
        </div>

      </div>
      <div id="main">
        <div class="center">
    
      
            <h3><?php echo $_smarty_tpl->tpl_vars['entry']->value['title'];?>
</h3>
            <p><?php echo $_smarty_tpl->tpl_vars['entry']->value['content'];?>
</p>
            <br />
            
    
      
            <h3>Comments</h3>
              <div id="comment" class="comment">
              <?php if ($_smarty_tpl->tpl_vars['comments']->value){?>
                <?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value){
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
                  <p><?php echo $_smarty_tpl->tpl_vars['comment']->value['comment'];?>
</p>
                <?php } ?>
              <?php }?>
              </div>
            <br />
            
    
            
    
            <h3>Add a comment:</h3>
                <form method="post" name="comment_form" id="comment_form">
                  <ul>
                      <li>
                          <input type="textarea" rows="4" columns="50" name="new_comment" id="new_comment" placeholder="Enter comment">
                          <input type="submit" value="Add Comment" />
                          <input type="hidden" name="entry_id" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" />
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
        <div class="padding"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['base'];?>
/">HOME</a> | <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['base'];?>
/admin-blog-entry">ADMIN</a></div>
      </div>
    </div>
      
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
      
  </body>
  
</html><?php }} ?>