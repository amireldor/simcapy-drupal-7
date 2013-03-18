  <div id="wrapper" class="container">

    <?php //echo theme_image(array('path' => $directory . '/untitled.png', 'alt' => 'A nice capybara drawing', 'title' => 'A nice capybara drawing, isn\'t it?', 'attributes' => array('id' => 'capybara', 'class' => 'hide'))); ?>

    <div class="span-24">
      <header class="container">
        <div class="large span-14 pull-3">
          <?php echo render($page['header']); ?>
        </div>

        <section id="menus" class="span-10 push-6 last">
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
        </section> <!-- menus -->

      </header>
    </div>

    <div class="container span-24">
      <section class="main span-24">

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

        <div class="span-18 append-2">
          <?php echo render($page['content']); ?>
        </div>

        <div class="span-4 last">
          <?php echo render($page['sidebar']); ?>
        </div>

      </section> <!-- main -->
    </div>

    <footer class="span-24">
      <?php echo render($page['footer']); ?>
    </footer>

  </div>
