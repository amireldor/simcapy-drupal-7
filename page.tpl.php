  <div id="wrapper" class="grid-container">

    <div class="grid-100">
      <header>
        <div class="grid-60">
          <?php if ($page['header']): ?>
            <?php echo render($page['header']); ?>
          <?php else: ?>
            <h1><?php echo $site_name ?> </h1>
          <?php endif;?>
        </div>

        <div id="menus" class="grid-40">
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
        </div> <!-- menus -->

      </header>
    </div>

    <div id="middle-content" class="grid-100">
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

        <div class="grid-70">
          <?php echo render($page['content']); ?>
        </div>

        <div class="grid-30">
          <?php echo render($page['sidebar']); ?>
        </div>

      </section> <!-- main -->
    </div>

    <footer class="grid-100">
      <?php echo render($page['footer']); ?>
    </footer>

  </div> <!-- wrapper -->
