<div id="app" class="App">

    <div id="app-navigation" class="App-navigation"></div>

    <div id="drawer" class="App-drawer">

        <header id="header" class="App-header">
            <div id="header-navigation" class="Header-navigation"></div>
            <div class="container">
                <div class="Header-title">
                    <a href="<?php echo e($forum['baseUrl']); ?>">
                        <?php if($forum['logoUrl']): ?>
                            <img src="<?php echo e($forum['logoUrl']); ?>" alt="<?php echo e($forum['title']); ?>" class="Header-logo">
                        <?php else: ?>
                            <?php echo e($forum['title']); ?>

                        <?php endif; ?>
                    </a>
                </div>
                <div id="header-primary" class="Header-primary"></div>
                <div id="header-secondary" class="Header-secondary"></div>
            </div>
        </header>

    </div>

    <main class="App-content">
        <div class="container">
            <div id="admin-navigation" class="App-nav sideNav"></div>
        </div>

        <div id="content" class="sideNavOffset">
            <?php echo $content; ?>

        </div>
    </main>

</div>
<?php /**PATH /home/mysitxez/public_html/forum/vendor/flarum/core/src/Frontend/../../views/frontend/admin.blade.php ENDPATH**/ ?>