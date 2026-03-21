<?php
// Args: title, url, desc, img
$title = isset($args['title']) ? $args['title'] : '';
$url   = isset($args['url'])   ? $args['url']   : '#';
$desc  = isset($args['desc'])  ? $args['desc']  : '';
$img   = isset($args['img'])   ? $args['img']   : '';
?>
<div class="service-box">
  <?php if ($img) : ?>
    <img src="<?php echo esc_url($img); ?>" alt="<?php echo esc_attr($title); ?>" loading="lazy" width="400" height="250">
  <?php endif; ?>
  <div class="service-box-body">
    <h4><a href="<?php echo esc_url($url); ?>"><?php echo esc_html($title); ?></a></h4>
    <p><?php echo esc_html($desc); ?></p>
    <a href="<?php echo esc_url($url); ?>" class="btn btn-primary" style="margin-top:10px;font-size:.85rem;padding:8px 18px;">Learn More</a>
  </div>
</div>
