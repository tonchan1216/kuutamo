<?php require_once('./wp-load.php');?>

<div class="cs-social-share clearfix">

  <div class="cs-share-this-product facebook">
    <a title="Share on Facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink();?>">
      <div class="social-share-icon-block">
        <img src="<?php echo get_stylesheet_directory_uri();?>/images/sns/facebook.svg">
        <span class="share-text">Share</span>
      </div>
    </a>
  </div>
  
  <div class="cs-share-this-product twitter ">
    <a title="Share on Twitter" target="_blank" href="https://twitter.com/share?url=<?php echo get_the_permalink();?>&text=<?php echo get_the_title();?>">
      <div class="social-share-icon-block">
        <img src="<?php echo get_stylesheet_directory_uri();?>/images/sns/twitter.svg">
        <span class="share-text">Tweet</span>
      </div>
    </a>
  </div>
  
  <div class="cs-share-this-product google-plus ">
    <a title="Share on Google+" target="_blank" href="https://plus.google.com/share?url=<?php echo get_the_permalink();?>">
      <div class="social-share-icon-block">
        <img src="<?php echo get_stylesheet_directory_uri();?>/images/sns/googleplus.svg">
        <span class="share-text">Share</span>
      </div>
    </a>
  </div>
  
  <div class="cs-share-this-product pocket ">
    <a title="Share on Pocket" target="_blank" href="http://getpocket.com/edit?url=<?php echo get_the_permalink();?>">
      <div class="social-share-icon-block">
        <img src="<?php echo get_stylesheet_directory_uri();?>/images/sns/pocket.svg">
        <span class="share-text">Pocket</span>
      </div>
    </a>
  </div>
    
  <div class="cs-share-this-product hatena ">
    <a title="Share via Email" href="http://b.hatena.ne.jp/add?url=<?php echo get_the_permalink();?>">
      <div class="social-share-icon-block">
        <img src="<?php echo get_stylesheet_directory_uri();?>/images/sns/hatena.svg">
        <span class="share-text">はてブ</span>
      </div>
      <div class="count"></div>
    </a>
  </div>  

  <div class="cs-share-this-product line ">
    <a title="Share via Email" href="http://line.me/R/msg/text/?<?php echo get_the_title();?> <?php echo get_the_permalink();?>">
      <div class="social-share-icon-block">
        <img src="<?php echo get_stylesheet_directory_uri();?>/images/sns/line.svg">
        <span class="share-text">Line</span>
      </div>
      <div class="count"></div>
    </a>
  </div>
  
  <div class="clearfix"></div>
  
</div>

<style>
  @import url(http://fonts.googleapis.com/css?family=Noto+Sans);
  body {
    font-family: Noto Sans;
  }

  .clearfix:after {
    visibility: hidden;
    display: block;
    content: " ";
    clear: both;
    height: 0;
  }

/*/////////////////////////////////////////////////////////////
    // Social Sharing Icons \
    ///////////////////////////////////////////////////////////// */
    .cs-social-share {
      box-sizing: border-box;
      width: 100%;
      max-width: 600px;
      margin: auto;
      display: block;
      background: #424242;
      border: solid 3px #2F2F2F;
      padding: 2%;
    }

/*/////////////////////////////////////////////////////////////
    // Social Sharing Icons On Product Page \
    ///////////////////////////////////////////////////////////// */
    .cs-share-this-product {
      float: left;
      width: 15%;
      height: 30px;
      padding: 1px 0px;
      min-width: 68px;
      margin: 2% .8%;
      overflow: hidden;
      -webkit-filter: brightness(90%);
      -moz-filter: brightness(90%);
      -ms-filter: brightness(90%);
      -o-filter: brightness(90%);
      filter: brightness(90%);
      transition: all .45s ease-in-out;
    }
    .cs-share-this-product:hover {
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.4);
      border-radius: 3px;
      -webkit-filter: brightness(120%);
      -moz-filter: brightness(120%);
      -ms-filter: brightness(120%);
      -o-filter: brightness(120%);
      filter: brightness(120%);
    }
    .cs-share-this-product:hover img {
      left: 32%;
      transform: scale(1);
    }
    .cs-share-this-product:hover span.share-text {
      opacity: 0;
      left: 20px;
      transform: rotateX(90deg) scale(0.3);
    }
    .cs-share-this-product a {
      text-decoration: none;
    }
    .cs-share-this-product img {
      width: 28px;
      transition: all .5s ease;
      position: relative;
      left: 0;
      transform: scale(0.8);
    }
    .cs-share-this-product .social-share-icon-block span.share-text {
      font-size: 12px;
      color: #fff;
      position: relative;
      left: -3px;
      top: -8px;
      transition: all .45s ease-in-out;
    }
    .cs-share-this-product.facebook {
      background: #527EBF;
    }
    .cs-share-this-product.twitter {
      background: #25C0E2;
    }
    .cs-share-this-product.google-plus {
      background: #DB4A37;
    }
    .cs-share-this-product.pocket {
      background: #EE4056;
    }
    .cs-share-this-product.hatena {
      background: #008FDE;
    }    
    .cs-share-this-product.line {
      background: #00C300;
    }


  </style>