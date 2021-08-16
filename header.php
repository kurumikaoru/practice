<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    
    <?php wp_head(); ?>

  </head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="myhead">
  <a href="<?php echo esc_url(home_url('/')); ?>">
  <?php bloginfo('name'); ?>
</a>  

<script tyle="text/javascript">
jQuery(function($){

  $('.myhead').each(function(){

    var $window = $(window),
    $header = $(this),

    headerOffsetTop = $header.offset().top;

    $window.on('scroll',function(){

      if($window.scrollTop() > headerOffsetTop){
        $header.addClass('sticky');
      }else{
        $header.removeClass('sticky');
      }
    });

    $window.trigger('scroll');
  });
});
</script>

</header>
