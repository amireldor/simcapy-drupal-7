  <div id="wrapper">

    <?php echo theme_image(array('path' => $directory . '/untitled.png', 'alt' => 'A nice capybara drawing', 'title' => 'A nice capybara drawing, isn\'t it?', 'attributes' => array('id' => 'capybara', 'class' => 'hide'))); ?>

    <header>
      <?php echo render($page['header']); ?>
    </header>

    <section class="main">

      <?php if ($messages): ?>
        <div id="messages">
          <?php echo $messages; ?>
        </div>
      <?php endif; ?>

      <?php if ($breadcrumb): ?>
        <div class="breadcrumb">
          <?php print render($breadcrumb); ?>
        </div>
      <?php endif; ?>

      <?php if ($is_admin && $tabs): ?>
        <div class="tabs">
          <?php print render($tabs); ?>
        </div>
      <?php endif; ?>

      <?php echo render($page['content']); ?>
      <?php echo render($page['sidebar']); ?>

    </section><!-- main -->

    <nav id="main_menu">
      <ul>
      <?php foreach ($main_menu as $item): ?>
        <li><?php echo l($item['title'], $item['href']); ?></li>
      <?php endforeach; ?>
      </ul>
    </nav>

    <nav id="secondary_menu">
      <ul>
      <?php foreach ($secondary_menu as $item): ?>
        <li><?php echo l($item['title'], $item['href']); ?></li>
      <?php endforeach; ?>
      </ul>
    </nav>

    <footer>
      <?php echo render($page['footer']); ?>
    </footer>

  </div>

