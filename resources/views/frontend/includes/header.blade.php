<header class="header-section">
    <div class="main-navbar">
        <div class="container">
            <nav class="nav-items-wrapper">
                <!-- Website Logo -->
                <div class="header-brand-logo-outer">
                    <a href="{{ url('/') }}" class="header-brand-logo">
                        <img src="{{ asset('/frontend/') }}/assets/images/logo.jpg" width="193" height="89"
                            alt="logo">
                    </a>
                </div>
                <!-- Nav Toggle Button -->
                <div class="nav-toggle-btn">
                    <div class="btn-inner"></div>
                </div>
                <!-- Main Nav -->
                <ul class="nav-item-list">
                    <li class="nav-list-item active">
                        <a href="{{ url('/') }}" class="nav-item-link">
                            Home
                        </a>
                    </li>
                    <li class="nav-list-item active">
                        <a href="{{ url('/all-project') }}" class="nav-item-link">
                            Projects
                        </a>
                    </li>
                    <li class="nav-list-item active">
                        <a href="{{ url('/service-list') }}" class="nav-item-link">
                            Services
                        </a>
                    </li>
                    <li class="nav-list-item">
                        <a href="{{ url('/contact') }}" class="nav-item-link">
                            Contact Us
                        </a>
                    </li>
                    <li class="nav-list-item">
                        <a href="{{ url('/service-list') }}" class="nav-item-link get-service">
                            Service Request
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
