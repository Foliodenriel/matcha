<header>
    <div class="row g-0">
        <div class="d-flex col-md-5">
            <div class="p-2 header-logo">Matcha</div>
        </div>
        <div class="d-flex col-md-2">
            <a href="<?php echo $this->router->findPathFromRoute("search"); ?>"><div class="header-button"><img width="25" height="25" src="<?php echo $this->asset('img/search-heart.svg'); ?>"></div></a>
            <a href="<?php echo $this->router->findPathFromRoute("like"); ?>"><div class="header-button"><img width="25" height="25" src="<?php echo $this->asset('img/heart.svg'); ?>"></div></a>
            <a href="<?php echo $this->router->findPathFromRoute("match"); ?>"><div class="header-button"><img width="25" height="25" src="<?php echo $this->asset('img/person-hearts.svg'); ?>"></div></a>
            <a href="<?php echo $this->router->findPathFromRoute("notification"); ?>"><div class="header-button"><img width="25" height="25" src="<?php echo $this->asset('img/bell.svg'); ?>"></div></a>
        </div>
        <div class="d-flex col-md-5 justify-content-end">
            <div class="header-button"><img width="25" height="25" src="<?php echo $this->asset('img/settings.svg'); ?>"></div>
            <div class="header-button"><img width="25" height="25" src="<?php echo $this->asset('img/logout.svg'); ?>"></div>
        </div>
    </div>
</header>