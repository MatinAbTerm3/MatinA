<header>
			<nav class="navbar navbar-dark bg-dark navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.html"><img src="assets/images/icon.png" alt="لوگو" width="45" height="48" class="d-inline-block align-top"></a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    ورود/ثبت نام
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                    <li><a class="dropdown-item" href="<?php echo SITE_URL; ?>register.html">ثبت نام</a></li>
                                    <li><a class="dropdown-item" href="<?php echo SITE_URL; ?>login.php">ورود</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="<?php echo SITE_URL; ?>index.html">خانه</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo SITE_URL; ?>catalog.php" >کتاب ها</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo SITE_URL; ?>contactus.html" >تماس با ما</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="مثال: تاریخچه زمان" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">بگرد</button>
                        </form>
                    </div>
                </div>
            </nav>
        </header>