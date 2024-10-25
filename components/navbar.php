<?php
include 'setLanguage.php';
$current_page = basename($_SERVER['REQUEST_URI']);
?>
<header class="header_section">
    <div class="container-fluid no_select">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <!-- Escolha de linguagem -->
            <div>
                <div class="navbar-brand" onclick="changeLanguage('pt_pt')" style="cursor:pointer">
                    <span class="lang-sm">
                        <?php echo $translator->gettext("lingua_pt"); ?>
                    </span>
                </div>
                <div class="navbar-brand">
                    <span class="lang-sm">
                        |
                    </span>
                </div>
                <div class="navbar-brand" onclick="changeLanguage('en_en')" style="cursor:pointer">
                    <span class="lang-sm">
                        <?php echo $translator->gettext("lingua_en"); ?>
                    </span>
                </div>
            </div>
            <!-- menu toogle para mobile -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
            </button>

            <!-- navbar -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item <?php echo ($current_page == 'index.php' || $current_page == '') ? 'active' : ''; ?>">
                        <a class="nav-link" href="index.php"><?php echo $translator->gettext("inicio"); ?>
                            <?php if ($current_page == 'index.php'): ?>
                            <span class="sr-only">(current)</span>
                            <?php endif; ?>
                        </a>
                    </li>
                    <li class="nav-item <?php echo ($current_page == 'skills.php') ? 'active' : ''; ?>">
                        <a class="nav-link" href="skills.php"><?php echo $translator->gettext("competencias"); ?></a>
                    </li>
                    <li
                        class="nav-item d-none-sm d-none-md <?php echo ($current_page == 'responsive.php') ? 'active' : ''; ?>">
                        <a class="nav-link"
                            href="responsive.php"><?php echo $translator->gettext("responsividade"); ?></a>
                    </li>
                    <li class="nav-item <?php echo ($current_page == 'portfolio.php') ? 'active' : ''; ?>">
                        <a class="nav-link" href="portfolio.php"><?php echo $translator->gettext("projetos"); ?></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<?php include('modal.php'); ?>