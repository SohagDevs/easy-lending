<style>
/* Custom CSS for Navbar */
.navbar {
    z-index: 9999;
}

.nav-link.active {
    font-weight: bold;
    color: #dc3545 !important;
    /* Active effect color */
    background-color: #f8f9fa;
    /* Subtle background */
    border-radius: 0.25rem;
}
.iconColor {
    color: #dd2c5c;
}
.navbar-nav .nav-link.active, .navbar-nav .nav-link.show {
    color: var(--bs-navbar-active-color);
}
.nav-item .active {
    font-weight: bold;
}
.nav-item {
    padding: 0 10px;
}

.dropdown-menu {
    border-radius: 12px;
    box-shadow: 0px 6px 6px 0px rgba(174, 105, 123, 0.42);
    border: none;
    padding: 12px;
}

.dropdown-item {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 15px 30px;
    border-radius: 8px;
    transition: all 0.3s ease-in-out;
    font-weight: 500;
    color: #333;
    box-shadow: 0px 4px 8px 0px rgba(171, 190, 209, 0.4);
}

.dropdown-item i {
    color: #e63946;
    /* Icon color */
    font-size: 18px;
}

.dropdown-item:hover {
    background-color: #f8f9fa;
    color: #e63946;
}

.btn-danger {
    border-radius: 0.25rem;
    box-shadow: 0 4px 6px rgba(250, 3, 28, 0.4);
}
</style>
</head>

<body>
    <nav class="navbar shadow-sm navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="assets/images/Ready-ecommerce-Black.svg" alt="Ready eCommerce" width="150" class="me-2">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/views/show.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Feature
                        </a>
                        <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="https://demo.readyecommerce.app/admin/login" target="blank"><i class="ri-line-chart-line iconColor"></i>Super Admin Panel</a></li>
                            <li><a class="dropdown-item" href="https://demo.readyecommerce.app/" target="blank"><i class="ri-computer-line iconColor" ></i>User Website</a></li>
                            <li><a class="dropdown-item" href="https://razinsoft.com:1625/storage/product/app/customer-app.apk" target="blank"><i class="ri-smartphone-line iconColor"></i>User App</a></li>
                            <li><a class="dropdown-item" href="https://razinsoft.com:1625/storage/product/app/seller-app.apk" target="blank"><i class="ri-store-2-line iconColor align-middle fs-4"></i> Seller App Addon</a></li>
                            <li><a class="dropdown-item" href="https://razinsoft.com:1625/storage/product/app/rider-app.apk" target="blank"><i class="ri-truck-line iconColor align-middle fs-4"></i>Deliveryman App Addon</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://readyecommerce.app/#pricing" target="blank">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://readyecommerce.app/installation" target="blank">Services</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="supportDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Support & Help
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="supportDropdown">
                            <li><a class="dropdown-item" href="https://docs.readyecommerce.app/details#section-1" target="blank"><i class="ri-file-list-2-fill iconColor"></i>Setup Documentation</a></li>
                            <li><a class="dropdown-item" href="https://readyecommerce.app/contact" target="blank"><i class="ri-information-fill iconColor"></i>About Us</a></li>
                            <li><a class="dropdown-item" href="https://readyecommerce.app/contact#contact" target="blank"><i class="ri-phone-fill iconColor"></i>Contact Us</a></li>
                            <li><a class="dropdown-item" href="https://readyecommerce.app/#faq" target="blank"><i class="ri-question-fill iconColor"></i>FAQs</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary d-none d-lg-flex" href="https://codecanyon.net/item/ready-ecommerce-complete-multi-vendor-ecommerce-mobile-app-website-rider-app-with-seller-app/52519302" target="blank">Buy Now</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>