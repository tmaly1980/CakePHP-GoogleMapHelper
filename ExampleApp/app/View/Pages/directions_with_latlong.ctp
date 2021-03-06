<h3>Directions With Lat & Long Example</h3>

<?= $this->Html->script('//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', false); ?>
<?= $this->Html->script('http://maps.google.com/maps/api/js?sensor=false', false); ?>

<?php
  $map_options = array(
    'id'       => 'map_canvas',
    'width'    => '500px',
    'height'   => '500px',
    'localize' => false,
    'zoom'     => 10,
    'marker'   => false,
    'type'     => 'ROADMAP',
  );
?>

<div style="float:left;">
  <?= $this->GoogleMap->map($map_options); ?>
</div>
<?php
  $text = '
    // load the necessary scripts
    <?= $this->Html->script("//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js", false); ?>
    <?= $this->Html->script("http://maps.google.com/maps/api/js?sensor=false", false); ?>

    <?php
      $map_options = array(
        "id"       => "map_canvas",
        "width"    => "500px",
        "height"   => "500px",
        "localize" => false,
        "zoom"     => 10,
        "marker"   => false,
        "type"     => "ROADMAP",
      );
    ?>

    // print the map
    <?= $this->GoogleMap->map($map_options); ?>

    // Add the div where the directions will be printed
    <div id="directions"></div>

    // add the directions with latitude and longitude for the 2 points
    <?=
      $this->GoogleMap->getDirections("map_canvas", "directions1", array(
        "from" => array("latitude" => 37.8081103, "longitude" => -122.416631),
        "to"   => array("latitude" => 37.819877, "longitude" => -122.478939)
      ), array(
        "travelMode" => "WALKING",
        "directionsDiv" => "directions",
      ));
    ?>
'   ;
?>
<div style="float:left; margin-left: 20px">
Code:
<?= $this->Geshi->highlightText($text, 'php'); ?>
</div>


<div style="float:left;" id="directions"></div>
<?=
  $this->GoogleMap->getDirections("map_canvas", "directions1", array(
    "from" => array("latitude" => 37.8081103, "longitude" => -122.416631),
    "to"   => array("latitude" => 37.819877, "longitude" => -122.478939)
  ), array(
    "travelMode" => "WALKING",
    "directionsDiv" => "directions",
  ));
  ?>
