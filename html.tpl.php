<!DOCTYPE html>
<html lang="en" <?php echo $rdf_namespaces; ?>>
<head>
  <?php echo $head; ?>
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <title><?php echo $head_title; ?></title>
  <?php echo $styles; ?>
  <?php echo $scripts; ?>
</head>
<body>
  <?php echo $page_top; ?>
  <div id="capybara-wrapper">
    <?php echo theme_image(array('path' => $directory . '/transparent-capybara.png', 'alt' => 'A nice capybara drawing', 'title' => 'A nice capybara drawing, isn\'t it?', 'attributes' => array('id' => 'capybara'))); ?>
  </div>
  <?php echo $page; ?>
  <?php echo $page_bottom; ?>
</body>
</html>
