<!DOCTYPE html>
<html lang="en" <?php echo $rdf_namespaces; ?>>
<head>
  <?php echo $head; ?>
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
