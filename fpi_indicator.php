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
<?php while (have_posts()) : the_post(); ?>
<div>test</div>
<script>
    window.fpiId = <?php the_ID(); ?>;
    window.fpiLatitude = <?php the_field('latitude'); ?>;
    window.fpiLongitude = <?php the_field('longitude'); ?>;
    window.fpiEcological = <?php the_field('ecological'); ?>;
    window.fpiEconomic = <?php the_field('economic'); ?>;
    window.fpiCommunity = <?php the_field('community'); ?>;
    window.fpiIndicators = <?php echo json_encode( $indicators ); ?>;
  </script>
<?php endwhile; ?>
