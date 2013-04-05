<!--============================== Header =================================-->
<header>
  <div class="container_12">
    <h1><a class="logo" href="<?php print $front_page; ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a></h1>

    <?php if (isset($navigation)): ?>
      <div class="nav_wrap">
        <div class="nav_wrap_inner">
          <div class="responsibe_block">
            <div class="responsibe_block_inner"> <a href="#" class="resp_navigation"></a></div>
          </div>
          <nav class="main-menu">
            <?php print $navigation; ?>
          </nav>
        </div>
      </div>
    <?php endif; ?>

  </div>
</header>

<?php if ($title): ?>
  <!-- page title -->
  <div class="wrapper pagetitle">
    <div class="container_12">
      <article class="grid_9">
        <h1 class="font_heading02"><span class="color_white"><?php print $title; ?></span> </h1>
      </article>
      <?php if ($seach_block_form): ?>
        <article style="float:right;" class="grid_1 last-col">
          <?php print $seach_block_form; ?>
        </article>  
      <?php endif; ?>
      <div style="margin-top:3px;" class="brd"></div>
    </div>
  </div>
  <!-- // page title -->
<?php endif; ?>
  
  
<!--============================== Slider =================================-->
<?php if ($page['slider']): ?>
  <div class="wrapper">
    <?php print render($page['slider']); ?>
  </div>
<?php endif; ?>


<!--============================== Slider =================================-->
<?php if ($page['highlighted']): ?>
  <div class="wrapper">
    <?php print render($page['highlighted']); ?>
  </div>
<?php endif; ?>

<!--============================== Content ================================-->
<section id="content" class="cont_pad">
  <div class="container_12">

    <!-- sidebar first -->
    <?php if ($page['sidebar_first']): ?>
      <article id="sidebar-first" class="sidebar column grid_<?php print $sidebar_first_size; ?>">
        <?php print render($page['sidebar_first']); ?>
      </article> <!--  /#sidebar-first -->
    <?php endif; ?>
    <!-- // sidebar first -->

    <article class="main-content grid_<?php print $content_size; ?>" id="main-content">
      <?php print $messages; ?>
      <?php if ($tabs): ?>
        <div class="tabs">
          <?php print render($tabs); ?>
        </div>
      <?php endif; ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </article>

    <!-- sidebar second -->
    <?php if ($page['sidebar_second']): ?>
      <article id="sidebar-second" class="sidebar column grid_<?php print $sidebar_second_size; ?> last-col">
        <?php print render($page['sidebar_second']); ?>
      </article> <!-- /.section, /#sidebar-second -->
    <?php endif; ?>
    <!-- // sidebar second -->


  </div>

</section>

<!--============================== Footer =================================-->

<div id="footer-bottom" class="wrapper bg_black">
  <div class="container_12">
    <article class="footer-social-links grid_6 txt11">
      
<div id="boss-footer">
  <div class="content">
    <map name="boss_logo">

    <area target="_blank" coords="0,0,16,17" shape="rect" title="www.thisisboss.com" alt="www.thisisboss.com" href="http://www.thisisboss.com">
    <area target="_blank" coords="16,0,32,17" shape="rect" title="Website Design San Antonio" alt="Website Design San Antonio" href="http://www.thisisboss.com/sanantoniowebdesign">
    <area target="_blank" coords="0,17,16,35" shape="rect" title="SEO San Antonio" alt="SEO San Antonio" href="http://www.thisisboss.com/santonioseo">
    <area target="_blank" coords="16,17,32,35" shape="rect" title="San Antonio Web Design" alt="San Antonio Web Design" href="http://www.thisisboss.com/mobile-websites">

    <area target="_blank" coords="41,0,78,17" shape="rect" title="www.thisisboss.com" alt="www.thisisboss.com" href="http://www.thisisboss.com">
    <area target="_blank" coords="78,0,115,17" shape="rect" title="Website Design San Antonio" alt="Website Design San Antonio" href="http://www.thisisboss.com/sanantoniowebdesign">
    <area target="_blank" coords="41,17,78,35" shape="rect" title="SEO San Antonio" alt="SEO San Antonio" href="http://www.thisisboss.com/santonioseo">
    <area target="_blank" coords="78,17,115,35" shape="rect" title="San Antonio Web Design" alt="San Antonio Web Design" href="http://www.thisisboss.com/mobile-websites">

    </map>

    <img title="Website Design San Antonio" alt="Website Design San Antonio" usemap="#boss_logo" src="https://bossfooter.thisisboss.com/footervariants/images/web_design.png" id="boss-logo" class="boss-logo">

    <div class="links-wrapper">
            <div class="boss-links">
        <div class="links-top">
          <a title="www.thisisboss.com" target="_blank" href="http://thisisboss.com" class="first">www.thisisboss.com</a>
          <a title="Website Design San Antonio" target="_blank" href="http://www.thisisboss.com/sanantoniowebdesign" class="last">Website Design San Antonio</a>
                </div>
        <div class="links-bottom">
                  <a title="SEO San Antonio" target="_blank" href="http://www.thisisboss.com/santonioseo" class="first">SEO San Antonio</a>
          <a title="San Antonio Web Design" target="_blank" href="http://www.thisisboss.com/mobile-websites" class="last">San Antonio Web Design</a>
        </div>
      </div>
    </div>
  </div>
</div>
    </article>
    <article class="grid_5last-col">
      <div class="copyright">
        ©&nbsp; 2005 - <?php print date('Y'); ?> <a href="#"class="color_green">AETNA</a>. All Rights Reserved.
      </div>
      <div class="social"> 
        <a href="<?php print theme_get_setting('twitter_url', 'proma'); ?>" title="<?php print t('Twitter'); ?>"><img src="<?php print base_path() . path_to_theme(); ?>/images/social/twitter.png" alt=""></a>
        <a href="<?php print theme_get_setting('facebook_url', 'proma'); ?>" title="<?php print t('Facebook'); ?>"><img src="<?php print base_path() . path_to_theme(); ?>/images/social/facebook.png" alt=""></a>
        <a href="<?php print theme_get_setting('linkedin_url', 'proma'); ?>" title="<?php print t('Linkedin'); ?>"><img src="<?php print base_path() . path_to_theme(); ?>/images/social/linkedin.png" alt=""></a>
        <a href="skype:<?php print theme_get_setting('skype', 'proma'); ?>?call" title="<?php print t('Skype'); ?>"><img src="<?php print base_path() . path_to_theme(); ?>/images/social/skype.png" alt=""></a> 
        <a href="<?php print theme_get_setting('rss_url', 'proma'); ?>" title="<?php print t('RSS'); ?>"><img src="<?php print base_path() . path_to_theme(); ?>/images/social/rss.png" alt=""></a> 
      </div>
    </article>
  </div>
</div>
