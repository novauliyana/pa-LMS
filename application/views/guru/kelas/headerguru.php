<div class="container-scroller">
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex justify-content-center">
            <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
                <a class="navbar-brand brand-logo" href="<?= base_url('elearningguru/index') ?>">SMA X BANDUNG</a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo" /></a>
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-sort-variant"></span>
                </button>
            </div>
        </div>

        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <ul class="navbar-nav mr-lg-4 w-100">
            </ul>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                        <img src="<?= base_url() .
                                        $user['image']; ?>" class="img-circle">
                        <span class="nav-profile-name"><?= $user['username'] ?></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item" href="<?= base_url('elearningguru/index'); ?>">
                            <i class="mdi mdi-account text-primary"></i>
                            Profile
                        </a>
                        <a class="dropdown-item " href="<?= base_url('auth/logout'); ?>">
                            <i class="mdi mdi-logout text-primary"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>

    <div class="container-fluid page-body-wrapper">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('elarningguru/index') ?>">
                        <i class="mdi mdi-account-multiple menu-icon"></i>
                        <span class="menu-title">Kelas</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('jadwal') ?>">
                        <i class="mdi mdi-calendar menu-icon"></i>
                        <span class="menu-title">Jadwal </span>
                    </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('presensi') ?>">
                        <i class="mdi mdi-checkbox-multiple-marked menu-icon"></i>
                        <span class="menu-title">Presensi</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('pesan') ?>">
                        <i class="mdi mdi-message-text menu-icon"></i>
                        <span class="menu-title">Pesan</span>
                    </a>
                </li>

            </ul>
        </nav>