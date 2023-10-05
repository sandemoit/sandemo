<nav class="main-nav-one stricky">
    <div class="container-fluid">
        <div class="inner-container">
            <div class="logo-box">
                <a href="<?= site_url('') ?>">
                    <img src="<?= base_url('assets/frontend') ?>/images/sandemoid-light.png" aria-label="PT. Sandemo Indo Teknologi" width="100%">
                </a>
                <a href="javascript:;#" class="side-menu__toggler"><i class="fa fa-bars"></i></a>
            </div><!-- /.logo-box -->
            <div class="main-nav__main-navigation">
                <ul class="main-nav__navigation-box">
                    <li>
                        <a href="<?= site_url('') ?>">Home</a>
                    </li>

                    <li class="<?= ($this->uri->segment(1) == 'about') ? 'current' : '' ?>">
                        <a href="<?= site_url('about') ?>">About</a>
                    </li>

                    <li class="dropdown">
                        <a href="javascript:;">Pages</a>
                        <ul>
                            <li><a href="<?= site_url('service') ?>">Service</a></li>
                            <li><a href="<?= site_url('packetappweb') ?>">Package App</a></li>
                        </ul>
                    </li>

                    <li class="<?= ($this->uri->segment(1) == 'portfolio') ? 'current' : '' ?>">
                        <a href="<?= site_url('portfolio') ?>">Portofolio</a>
                    </li>

                    <li class="<?= ($this->uri->segment(1) == 'karir') ? 'current' : '' ?>">
                        <a href="<?= site_url('karir') ?>">Career</a>
                    </li>

                    <li class="<?= ($this->uri->segment(1) == 'blog') ? 'current' : '' ?>">
                        <a href="<?= site_url('blog') ?>">Blog</a>
                    </li>

                </ul><!-- /.main-nav__navigation-box -->
            </div><!-- /.main-nav__main-navigation -->
            <div class="main-nav__right">
                <a href="mailto:<?= $home['gmail'] ?>" aria-label="kirim email" class="main-nav__email2"><i class="far fa-envelope"></i></a>
                <a href="<?= site_url('contact') ?>" class="thm-btn main-nav-one__btn2"><span>GET IN TOUCH</span></a>
                <!-- /.thm-btn main-nav-one__btn -->
            </div><!-- /.main-nav__right -->
        </div><!-- /.inner-container -->
    </div><!-- /.container-fluid -->
</nav><!-- /.main-nav-one -->