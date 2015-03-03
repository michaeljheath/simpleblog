<!DOCTYPE html>
<html lang="en">
    { $modules.head }
  <body>
    <div class="content">
      <div id="header">
        <div class="title">
        <h1><a href="{$url.base}/">SIMPLE BLOG</a></h1>
        <h2><a href="{$url.base}/admin-blog-entry">ADMIN</a></h2>
        <h3>Latest Blog Entries</h3>
        </div>
      </div>
      <div id="main">
        <div class="center">
        {if $blog_entries}
          {foreach $blog_entries as $entry}
      
            <h3>{$entry.title}</h3>
            {$entry.content}
            <p class="date">Posted by Jack <img src="{$url.static}/css/images/more.gif" alt="" /> <a href="{$url.base}/blog-entry/id:{$entry.id};title:{$entry.title};content:{$entry.content}">Read more</a> </p>
            <br />
            
      
          {/foreach}
        {/if}
        </div>
      </div>
      <div id="footer">
        <div class="padding"><a href="{$url.base}/">HOME</a> | <a href="{$url.base}/admin-blog-entry">ADMIN</a></div>
      </div>
    </div>
  </body>
</html>