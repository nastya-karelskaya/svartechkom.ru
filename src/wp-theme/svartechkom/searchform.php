<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
	<!-- <label class="screen-reader-text" for="s">Поиск: </label> -->
	<input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="Поиск"/>

  <div>
    <input type="submit"  id="searchsubmit" value="" />
    <!-- <img src="<?php echo get_template_directory_uri() . '/assets/images/index/main/icon-search.png';?>" alt="Поиск"> -->
  </div>

</form>