<div class="sns">
  <ul class="snsb clearfix">
    <li>
      <a href="https://twitter.com/share" class="twitter-share-button" data-via="" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?>">Tweet</a>
      <script type="text/javascript" src="//platform.twitter.com/widgets.js"></script> 
    </li>

    <li class="like">
      <iframe src="http://www.facebook.com/v2.0/plugins/like.php?href=<?php the_permalink(); ?>&amp;layout=button_count&amp;show_faces=false&amp;width=100&amp;action=like&amp;colorscheme=light&amp;height=30" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:20px;" allowTransparency="true"></iframe>
    </li>

    <li>
      <a href="http://b.hatena.ne.jp/entry/<?php the_permalink(); ?>" class="hatena-bookmark-button" data-hatena-bookmark-title="<?php the_title(); ?>｜<?php bloginfo('name'); ?>" data-hatena-bookmark-layout="simple-balloon" title="このエントリーをはてなブックマークに追加"><img src="http://b.st-hatena.com/images/entry-button/button-only.gif" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a>
      <script type="text/javascript" src="http://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script> 
    </li>

    <li>
      <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
      <g:plusone size="standard" href="<?php the_permalink(); ?>"></g:plusone>
    </li>
  </ul>
</div>