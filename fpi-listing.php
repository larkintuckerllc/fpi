<?php
  $indicators = array();
  $args = array(
    'post_type' => 'fpi_indicator',
    'posts_per_page' => -1,
  );
  $loop = new WP_Query( $args );
  while ( $loop->have_posts() ) : $loop->the_post();
    $indicators[] = array(
      'id' => get_the_ID(),
      'link' => get_permalink(),
      'name' => get_field('name'),
      'image' => get_field('image'),
      'latitude' => get_field('latitude'),
      'longitude' => get_field('longitude'),
      'ecological' => get_field('ecological'),
      'economic' => get_field('economic'),
      'community' => get_field('community')
    );
  endwhile;
  wp_reset_query();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>FPI - Listing</title>
    <script defer="defer" src="<?php echo plugin_dir_url(__FILE__); ?>fpi-listing/static/js/main.22ab20e7.js"></script>
    <link href="<?php echo plugin_dir_url(__FILE__); ?>fpi-listing/static/css/main.3cdbca8d.css" rel="stylesheet"></link>
  </head>
  <body>
    <div id="root"></div>
    <script>
      window.fpiIndicators = <?php echo json_encode( $indicators ); ?>;
    </script>
  </body>
</html>
