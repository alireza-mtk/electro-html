    <?php
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';
        $column=3;
    ?>
<ul class="nav navbar-nav departments-menu animate-dropdown">
    <li class="nav-item dropdown <?php echo ( $page == 'home-v2' ? 'open' : '' ); ?>">

        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="departments-menu-toggle" >Shop by Department</a>
        <ul id="menu-vertical-menu" class="dropdown-menu yamm departments-menu-dropdown">
            <li class="highlight menu-item animate-dropdown active"><a title="Value of the Day" href="index.php?page=product-category">Value of the Day</a></li>
            <li class="highlight menu-item animate-dropdown"><a title="Top 100 Offers" href="index.php?page=home-v3">Top 100 Offers</a></li>
            <li class="highlight menu-item animate-dropdown"><a title="New Arrivals" href="index.php?page=home-v3-full-color-background">New Arrivals</a></li>

            <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown menu-item-2584 dropdown">
                <a title="Computers &amp; Accessories" href="index.php?page=product-category" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Computers &#038; Accessories</a>
                <?php require_once 'department-menu-megamenu.php'; ?>
            </li>

            <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown menu-item-2585 dropdown">
                <a title="Cameras, Audio &amp; Video" href="index.php?page=product-category" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Cameras, Audio &#038; Video</a>
                <?php require 'department-menu-megamenu.php'; ?>
            </li>

            <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown menu-item-2586 dropdown">
                <a title="Mobiles &amp; Tablets" href="index.php?page=product-category" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Mobiles &#038; Tablets</a>
                <?php require 'department-menu-megamenu.php'; ?>
            </li>


            <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown menu-item-2587 dropdown">
                <a title="Movies, Music &amp; Video Games" href="index.php?page=product-category" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Movies, Music &#038; Video Games</a>
                <?php require 'department-menu-megamenu.php'; ?>
            </li>


            <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown menu-item-2588 dropdown">
                <a title="TV &amp; Audio" href="index.php?page=product-category" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">TV &#038; Audio</a>
                <?php require 'department-menu-megamenu.php'; ?>
            </li>


            <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown menu-item-2589 dropdown">

                <a title="Watches &amp; Eyewear" href="index.php?page=product-category" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Watches &#038; Eyewear</a>
                <?php require 'department-menu-megamenu.php'; ?>
            </li>


            <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown menu-item-2590 dropdown">

                <a title="Car, Motorbike &amp; Industrial" href="index.php?page=product-category" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Car, Motorbike &#038; Industrial</a>
                <?php require 'department-menu-megamenu.php'; ?>
            </li>

            <li class="menu-item animate-dropdown"><a title="Accessories" href="index.php?page=product-category">Accessories</a></li>
            <li class="menu-item animate-dropdown"><a title="Printers &amp; Ink" href="index.php?page=product-category">Printers &#038; Ink</a></li>
            <li class="menu-item animate-dropdown"><a title="Software" href="index.php?page=product-category">Software</a></li>
            <li class="menu-item animate-dropdown"><a title="Office Supplies" href="index.php?page=product-category">Office Supplies</a></li>
            <li class="menu-item animate-dropdown"><a title="Computer Components" href="index.php?page=product-category">Computer Components</a></li>
            <li class="menu-item animate-dropdown"><a title="Car Electronic &amp; GPS" href="index.php?page=product-category">Car Electronic &#038; GPS</a></li>
            <li class="menu-item animate-dropdown"><a title="Accessories" href="index.php?page=product-category">Accessories</a></li>
            <li class="menu-item animate-dropdown"><a title="Printers &amp; Ink" href="index.php?page=product-category">Printers &#038; Ink</a></li>
        </ul>
    </li>
</ul>
