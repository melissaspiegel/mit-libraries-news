<form action="<?php echo site_url(); ?>" method="get">
  <fieldset>
    <input type="text" name="s" id="search" placeholder="Search news &amp; events" value="<?php the_search_query(); ?>" />
     <input id="subBtn" type="submit" value="Search" />
  </fieldset>
</form>