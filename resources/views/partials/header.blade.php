<header role="header" aria-label="Site header">
    <div class="header-container" id="site-header">
        <div class="container">
            <div class="header">
                <!-- Left Logo -->
                <a href="/" class="logo white-logo homeLink" aria-label="Dotlogics Home">
                    <div class="logo-text">dotlogics</div>
                </a>

                <!-- Middle Nav -->
                <nav class="nav-middle" role="navigation" aria-label="Main navigation">
                    <ul>
                        <li data-dropdown="service">
                            <div class="redirect-name">Services</div>
                            <div class="drop-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                    <path d="M3 5L7.5 9L12 5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                        </li>
                        <li><a href="#">Case Studies</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Resources</a></li>
                    </ul>
                </nav>

                <!-- Services Dropdown -->
                <div class="dropdown-list-wrapper" id="service">
                    <div class="dropdown-list">
                        <div class="about-list d-flex flex-column align-start">
                            <h3>Our Services</h3>
                            <p>All the solutions you need to accelerate growth and drive business success.</p>
                        </div>
                        <div class="dividing-line"></div>
                        <div class="list-links">
                            <ul>
                                <li style="cursor: pointer;"><a href="#">Website & Digital Experience</a>
                                    <div><svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none"><path d="M5.5 12L9.5 7.5L5.5 3" stroke="#212329" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></div>
                                </li>
                                <li style="cursor: pointer;"><a href="#">Technology Solutions</a>
                                    <div><svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none"><path d="M5.5 12L9.5 7.5L5.5 3" stroke="#212329" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></div>
                                </li>
                                <li style="cursor: pointer;"><a href="#">AI Agents & Automation</a>
                                    <div><svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none"><path d="M5.5 12L9.5 7.5L5.5 3" stroke="#212329" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Right Side -->
                <div class="right-side">
                    <a href="#" class="btn-contact">Get Started</a>
                    <div class="menu-btn-1" aria-label="Toggle menu" aria-expanded="false" aria-controls="nav-menu">
                        <span aria-hidden="true"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="glossy-bg" aria-hidden="true"></div>
    </div>

    <!-- Mobile Nav -->
    <nav class="nav-menu" id="nav-menu" role="navigation" aria-label="Mobile navigation">
        <div class="container">
            <ul>
                <li data-dropdown="service" class="d-flex flex-column">
                    <div class="moblie-dropdown-wrapper">
                        <div class="redirect-name">Services</div>
                        <div class="drop-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                <path d="M12 10L7.5 6L3 10" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="dropdown-mobile-list-wrapper" id="service-mobile">
                        <div class="dropdown-list">
                            <div class="about-list">
                                <p>All the solutions you need to accelerate growth and drive business success.</p>
                            </div>
                            <div class="dividing-line"></div>
                            <div class="list-links">
                                <ul>
                                    <li><a href="#">Website & Digital Experience</a></li>
                                    <li><a href="#">Technology Solutions</a></li>
                                    <li><a href="#">AI Agents & Automation</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li><a href="#">Case Studies</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Resources</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
    </nav>
</header>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        // Desktop dropdown navigation
        const navItems = document.querySelectorAll(".nav-middle li[data-dropdown]");
        const dropdowns = document.querySelectorAll(".dropdown-list-wrapper");

        navItems.forEach((item) => {
            const dropdownId = item.getAttribute("data-dropdown");
            const dropdown = document.getElementById(dropdownId);

            item.addEventListener("click", (e) => {
                e.stopPropagation();
                const isOpen = dropdown.classList.contains("show");
                dropdowns.forEach((d) => d.classList.remove("show"));
                navItems.forEach((li) => li.classList.remove("active"));
                if (!isOpen) {
                    dropdown.classList.add("show");
                    item.classList.add("active");
                }
            });
        });

        // Mobile menu
        const burgerButton = document.querySelector(".menu-btn-1");
        const mobileMenu = document.querySelector(".nav-menu");

        if (burgerButton && mobileMenu) {
            burgerButton.addEventListener("click", (e) => {
                e.stopPropagation();
                const isMenuOpen = mobileMenu.classList.contains("show");
                if (isMenuOpen) {
                    mobileMenu.classList.remove("show");
                    burgerButton.classList.remove("active");
                } else {
                    mobileMenu.classList.add("show");
                    burgerButton.classList.add("active");
                }
            });
        }

        // Mobile dropdowns
        const dropdownWrappers = document.querySelectorAll(".moblie-dropdown-wrapper");
        dropdownWrappers.forEach(wrapper => {
            wrapper.addEventListener("click", () => {
                const parentLi = wrapper.closest("li");
                const dropdown = parentLi.querySelector(".dropdown-mobile-list-wrapper");
                const arrow = wrapper.querySelector(".drop-icon svg");
                if (dropdown.classList.contains("show")) {
                    dropdown.classList.remove("show");
                    dropdown.style.maxHeight = null;
                    arrow.style.transform = "rotate(0deg)";
                } else {
                    dropdown.classList.add("show");
                    dropdown.style.maxHeight = dropdown.scrollHeight + 20 + "px";
                    arrow.style.transform = "rotate(180deg)";
                }
            });
        });

        // Close on outside click
        document.addEventListener("click", (e) => {
            dropdowns.forEach((d) => d.classList.remove("show"));
            navItems.forEach((li) => li.classList.remove("active"));
        });

        // Header scroll effect
        const headerContainer = document.querySelector('.header-container');
        const glossyBg = document.querySelector('.glossy-bg');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                headerContainer.classList.add('scrolled');
            } else {
                headerContainer.classList.remove('scrolled');
            }
        });
    });
</script>
