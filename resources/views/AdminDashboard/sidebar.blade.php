<!-- Page Sidebar Start -->
<div class="sidebar-wrapper" sidebar-layout="stroke-svg">
    <div>
        <!-- Logo Section -->
        <div class="logo-wrapper">
            <a href="{{ route('dashboard') }}">
                <img class="img-fluid for-light" src="{{ asset('frontend/assets/images/logo/logo.png') }}" alt="Logo">
                <img class="img-fluid for-dark" src="{{ asset('frontend/assets/images/logo/logo_dark.png') }}" alt="Logo Dark">
            </a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"></i></div>
        </div>

        <div class="logo-icon-wrapper">
            <a href="{{ route('dashboard') }}">
                <img class="img-fluid" src="{{ asset('frontend/assets/images/logo/logo-icon.png') }}" alt="Logo Icon">
            </a>
        </div>

        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn">
                        <a href="{{ route('dashboard') }}">
                            <img class="img-fluid" src="{{ asset('assets/images/logo/logo-icon.png') }}" alt="Logo">
                        </a>
                        <div class="mobile-back text-end">
                            <span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i>
                        </div>
                    </li>

                    <!-- Dashboard -->
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                            <i class="fa fa-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <!-- User Management Section -->
                    <li class="sidebar-main-title">
                        <div><h6>Customer Management</h6></div>
                    </li>


                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title">
                            <i class="fa fa-users"></i>
                            <span>Customer Management</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('customers.index') }}">All Customers</a></li>
                            <li><a href="{{ route('customers.create') }}">Add Customer</a></li>
                        </ul>
                    </li>

                    <!-- Work Permit Management Section -->
                    <li class="sidebar-main-title">
                        <div><h6>Work Permits</h6></div>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title">
                            <i class="fa fa-id-card"></i>
                            <span>Work Permits</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('work_permits.index') }}">All Work Permits</a></li>
                            <li><a href="{{ route('work_permits.create') }}">Create Work Permit</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
<!-- Page Sidebar Ends -->

<!-- Sidebar Toggle Script -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var sidebarTitles = document.querySelectorAll(".sidebar-title");

        sidebarTitles.forEach(function (title) {
            title.addEventListener("click", function (e) {
                e.preventDefault(); // Prevent default action

                let submenu = this.nextElementSibling; // Get the submenu
                if (submenu && submenu.classList.contains("sidebar-submenu")) {
                    submenu.classList.toggle("d-block"); // Toggle visibility
                }
            });
        });

        // Highlight active links
        document.querySelectorAll(".sidebar-link").forEach(function (link) {
            if (link.href === window.location.href) {
                link.classList.add("active");
            }
        });
    });
</script>
