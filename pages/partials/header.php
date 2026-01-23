<header>
    <nav>
        <h1><a href="/">Portfolio</a></h1>
        <ul>
            <?php $class = $currentPage == 'home.php' ? 'here' : ''; ?>
            <li><a href="/" class="<?php echo $class ?>">Accueil</a></li>
            <?php $class = $currentPage == 'about.php' ? 'here' : ''; ?>
            <li><a href="/about" class="<?php echo $class ?>">À Propos</a></li>
            <?php $class = $currentPage == 'projects.php' ? 'here' : ''; ?>
            <li><a href="/projects" class="<?php echo $class ?>">Projets</a></li>
            <?php $class = $currentPage == 'contact.php' ? 'here' : ''; ?>
            <li><a href="/contact" class="<?php echo $class ?>">Contact</a></li>
        </ul>
        <div class="burger">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </nav>
</header>