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
<!doctype html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FPI - <?php the_field('name'); ?></title>
  <link rel="stylesheet" href="<?php echo plugin_dir_url(__FILE__); ?>fpi-indicator/index-2022-03-26-01.css">
</head>
<body>
<div id="fpi_indicator_root" class="container">
  <div><?php the_field('name') ?></div>
  <div id="fpi_indicator_root__hero">
    <div id="fpi_indicator_root__hero__workaround">
      <svg
        id="fpi_indicator_root__hero__map"
        viewBox='-50 -50 100 100'
      ></svg>
    </div>
    <div
      id="fpi_indicator_root__hero__image"
      style="background-image: url(<?php the_field('image') ?>);"
    >
    </div>
  </div>
  <div id="fpi_indicator_root__content">
    <div id="fpi_indicator_root__content__data">
      <div class="fpi_indicator_root__content__data__indicator">
        <div class="fpi_indicator_root__content__data__indicator__title">Ecological</div>
        <div class="fpi_indicator_root__content__data__indicator__value">
          <div
            id="fpi_indicator_root__content__data__indicator__value__scale--ecological"
            class="fpi_indicator_root__content__data__indicator__value__scale"
            style="width: 0%;"
          >
          </div>
        </div>
      </div>
      <div
        class="fpi_indicator_root__content__data__ranking"
      >
        Ranked
        <span
          id="fpi_indicator_root__content__data__ranking__rank--ecological"
        ></span>
        out of
        <span
          id="fpi_indicator_root__content__data__ranking__total--ecological"
        ></span>
        fisheries.
      </div>
      <div
        id="fpi_indicator_root__content__data__comparison--ecological"
        class="fpi_indicator_root__content__data__comparison"
      >
      </div>
      <div class="fpi_indicator_root__content__data__indicator">
        <div class="fpi_indicator_root__content__data__indicator__title">Economic</div>
        <div class="fpi_indicator_root__content__data__indicator__value">
          <div
            id="fpi_indicator_root__content__data__indicator__value__scale--economic"
            class="fpi_indicator_root__content__data__indicator__value__scale"
            style="width: 0%;"
          >
          </div>
        </div>
      </div>
      <div
        class="fpi_indicator_root__content__data__ranking"
      >
        Ranked
        <span
          id="fpi_indicator_root__content__data__ranking__rank--economic"
        ></span>
        out of
        <span
          id="fpi_indicator_root__content__data__ranking__total--economic"
        ></span>
        fisheries.
      </div>
      <div
        id="fpi_indicator_root__content__data__comparison--economic"
        class="fpi_indicator_root__content__data__comparison"
      >
      </div>
      <div class="fpi_indicator_root__content__data__indicator">
        <div class="fpi_indicator_root__content__data__indicator__title">Community</div>
        <div class="fpi_indicator_root__content__data__indicator__value">
          <div
            id="fpi_indicator_root__content__data__indicator__value__scale--community"
            class="fpi_indicator_root__content__data__indicator__value__scale"
            style="width: 0%;"
          >
          </div>
        </div>
      </div>
      <div
        class="fpi_indicator_root__content__data__ranking"
      >
        Ranked
        <span
          id="fpi_indicator_root__content__data__ranking__rank--community"
        ></span>
        out of
        <span
          id="fpi_indicator_root__content__data__ranking__total--community"
        ></span>
        fisheries.
      </div>
      <div
        id="fpi_indicator_root__content__data__comparison--community"
        class="fpi_indicator_root__content__data__comparison"
      >
      </div>
    </div>
    <div
      id="fpi_indicator_root__content__overview"
    >
      <div
        id="fpi_indicator_root__content__overview__description"
      >
        <?php the_field('description') ?>
      </div>
      <div
        id="fpi_indicator_root__content__overview__custom"
      >
        <?php the_field('custom') ?>
      </div>
    </div>
  </div>
</div>
<script>
  window.baseUrl = "<?php echo plugin_dir_url(__FILE__); ?>";
  window.fpiId = <?php the_ID(); ?>;
  window.fpiLatitude = <?php the_field('latitude'); ?>;
  window.fpiLongitude = <?php the_field('longitude'); ?>;
  window.fpiEcological = <?php the_field('ecological'); ?>;
  window.fpiEconomic = <?php the_field('economic'); ?>;
  window.fpiCommunity = <?php the_field('community'); ?>;
  window.fpiIndicators = <?php echo json_encode( $indicators ); ?>;
</script>
<script src="<?php echo plugin_dir_url(__FILE__); ?>node_modules/d3/build/d3.min.js"></script>
<script src="<?php echo plugin_dir_url(__FILE__); ?>node_modules/d3-geo/dist/d3-geo.min.js"></script>
<script src="<?php echo plugin_dir_url(__FILE__); ?>fpi-indicator/index-2022-03-26-01.js"></script>
</body>
<?php endwhile; ?>
