<!-- Page Sidebar Start -->
<div class="sidebar-wrapper" sidebar-layout="stroke-svg">
    <div>
        <!-- Logo Section -->
        <div class="logo-wrapper">
            
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"></i></div>
        </div>

        

        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn">
                        <a href="{{ route('dashboard.home') }}">
                            <img class="img-fluid" src="{{ asset('assets/images/logo/logo-icon.png') }}" alt="Logo">
                        </a>
                        <div class="mobile-back text-end">
                            <span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i>
                        </div>
                    </li>

                    <!-- Dashboard -->
                    <!-- Dashboard -->
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title {{ request()->routeIs('dashboard.home') ? 'active' : '' }}" href="{{ route('dashboard.home') }}">
                            <i class="fa fa-home"></i>
                            <span>Dashboard</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('dashboard.home') }}">Dashboard</a></li>
                        </ul>
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

                    <!-- Work Permit Management Section
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
                    </li> -->

                    <!-- Template Section -->
                    <li class="sidebar-main-title">
                        <div><h6>Templates</h6></div>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title">
                        <i class="fa fa-file-text"></i>
                            <span>Templates</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('template01.index') }}">Translation Risit</a></li>
                            <li><a href="{{ route('work_permits.create') }}">Barcode </a></li>
                            <li><a href="{{ route('template03.index') }}">Guchidara Slip</a></li>
                            <li><a href="{{ route('template04.index') }}">Translation & notry</a></li>
                            <!--<li><a href="{{ route('template05.index') }}">Caddie Job Offer Letter Entry</a></li>
                            <li><a href="{{ route('template06.index') }}">Template06</a></li>
                            <li><a href="{{ route('template07.index') }}">Passport </a></li>
                            <li><a href="{{ route('template07_1.index') }}">Enrollment </a></li>
                            <li><a href="{{ route('template07_2.index') }}">Police report </a></li>
                            <li><a href="{{ route('template08.index') }}">Passport verification </a></li>
                            <li><a href="{{ route('template08_1.index') }}">Registration </a></li>
                            <li><a href="{{ route('template08_2.index') }}">Police Clearance  </a></li>
                            <li><a href="{{ route('template09.index') }}">job offer  </a></li>-->

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
