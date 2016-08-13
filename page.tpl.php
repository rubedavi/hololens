<header id="header" class="header">
    <div class="wrapper">
        <nav class="nav">
            <a href="/" class="logo">
                <svg class="icon icon--logo"><use xlink:href="images/svg-defs.svg#microsoft"></use></svg>
            </a>
            <ul class="menu">
              <?php if ($main_menu): ?>
              <?php print theme('links__system_main_menu', array(
              'links' => $main_menu,
              'attributes' => array(
              'class' => 'nav navbar-nav navbar-right',
              )
              )); ?>
              <?php endif; ?>
            </ul>
            <div class="menu-toggle">
                <span class="menu-toggle__inner"></span>
            </div>
        </nav>
    </div>
</header>

<?php
echo render($page["content"]) ?>
