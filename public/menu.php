<style>
/* Sidebar Navigation (Desktop/Tablet) */
.sidebar-nav {
    display: none; /* Hidden by default, shown by JS on mobile, always on desktop */
    position: fixed;
    top: 0;
    left: 0;
    width: var(--sidebar-width);
    min-height: 100vh;
    background-color: white;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    padding: 1.5rem;
    z-index: 50;
    flex-direction: column;
    gap: 1.5rem; /* Spacing between logo, nav, and language switcher */
}

/* Desktop layout adjustments */
@media (min-width: 768px) {
    .sidebar-nav {
        display: flex; /* Always visible on desktop */
    }
    .mobile-menu-close { /* Ensure close button is hidden on desktop */
        display: none !important;
    }
}

/* Mobile Menu Specifics */
@media (max-width: 767px) {
    .sidebar-nav {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%; /* Full width on mobile when open */
        height: 100%; /* Full height on mobile when open */
        padding-top: 4rem; /* Space for a close button */
        overflow-y: auto; /* Enable scrolling if content is too long */
        z-index: 100; /* Bring above other content */
        transform: translateX(-100%); /* Start off-screen */
        transition: transform 0.3s ease-in-out;
    }

    .sidebar-nav.is-open {
        transform: translateX(0); /* Slide in */
        display: flex; /* Ensure it's visible */
    }

    .mobile-menu-close {
        display: block; /* Show close button */
        position: absolute;
        top: 1rem;
        right: 1.5rem;
        background: none;
        border: none;
        cursor: pointer;
        z-index: 101; /* Ensure it's on top of sidebar-nav */
    }

    .mobile-menu-close .close-icon {
        width: 28px;
        height: 28px;
        stroke: var(--color-primary);
    }
}

/* Navigation Menu */
.nav-menu {
    list-style: none;
    padding: 0;
    margin: 0; /* Managed by parent gap */
    flex-grow: 1; /* Allow nav menu to take up available space */
}

.nav-menu .nav-item {
    margin-bottom: 0.5rem;
}

.nav-menu .nav-link {
    display: flex;
    align-items: center;
    padding: 0.75rem 1rem;
    border-radius: 0.5rem;
    font-size: 1.125rem; /* 18px */
    font-weight: 500;
    color: var(--color-text-dark);
    transition: background-color 0.2s, color 0.2s;
}

.nav-menu .nav-link:hover,
.nav-menu .nav-link.active {
    background-color: var(--color-background-medium);
    color: var(--color-accent-blue);
}

.nav-menu .nav-link svg {
    margin-right: 0.75rem;
    width: 20px;
    height: 20px;
}

/* Logo in Sidebar */
.sidebar-logo {
    padding-bottom: 1.5rem;
    border-bottom: 1px solid var(--color-border);
    margin-bottom: 0; /* Managed by parent gap */
}

.sidebar-logo img {
    max-width: 180px;
    height: auto;
    border-radius: 0.5rem;
}

/* Language Switcher */
.lang-switcher {
    border-top: 1px solid var(--color-border);
    padding-top: 1.5rem;
    margin-top: 0; /* Removed auto to prevent pushing off-screen */
}

.lang-switcher button {
    background: none;
    border: none;
    cursor: pointer;
    display: block;
    width: 100%;
    text-align: left;
    padding: 0.25rem 0;
    color: #6b7280; /* Gray-500 */
    font-size: 0.875rem; /* 14px */
    transition: color 0.3s;
}

.lang-switcher button:hover {
    color: var(--color-accent-green);
}

.lang-switcher button.active {
    font-weight: bold;
    color: var(--color-accent-green);
}
</style>
<nav id="side-menu" class="sidebar-nav">
    <!-- Close button for mobile -->
    <button class="mobile-menu-close" id="mobile-menu-close">
        <svg class="close-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
    </button>

    <!-- Top Section: Logo and Navigation Links -->
    <div>
        <!-- Logo Placeholder Image -->
        <div class="sidebar-logo">
            <a href="#top">
                <img src="/media/logo.png"
                     alt="UPH Logo. Logotipo de UPH.">
            </a>
        </div>

        <!-- Navigation Links (Scrolling) -->
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="#top" class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path></svg>
                    <span class="en">Our Work</span><span class="es">Nuestro Trabajo</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#programs" class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1 0-5H20"></path></svg>
                    <span class="en">Programs</span><span class="es">Programas</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#latin-america" class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M12 2a15.3 15.3 0 0 0 4 10a15.3 15.3 0 0 0-4 10a15.3 15.3 0 0 0-4-10a15.3 15.3 0 0 0 4-10z"></path><path d="M2 12h20"></path></svg>
                    <span class="en">Latin America</span><span class="es">América Latina</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#social-media" class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2 2A18 18 0 0 1 3 4a2 2 0 0 1 2-2h3.92a2 2 0 0 1 1.66.76l2.36 3.6a2 2 0 0 1-.26 2.25l-2.73 2.73a1.5 1.5 0 0 0 0 2.12l2.12 2.12a1.5 1.5 0 0 0 2.12 0l2.73-2.73a2 2 0 0 1 2.25-.26l3.6 2.36a2 2 0 0 1 .76 1.66z"/></svg>
                    <span class="en">Social Media</span><span class="es">Redes Sociales</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#about-us" class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 6l9-4 9 4v14c0 1.1-.9 2-2 2H5c-1.1 0-2-.9-2-2V6zM9 22V12h6v10"></path></svg>
                    <span class="en">About us</span><span class="es">Acerca de Nosotros</span>
                </a>
            </li>
        </ul>
    </div>

    <!-- Bottom Section: Language Toggle -->
    <div class="lang-switcher">
        <button id="lang-en" onclick="setLanguage('en')">
            <span class="en">English (USA)</span><span class="es">Inglés (EE. UU.)</span>
        </button>
        <button id="lang-es" onclick="setLanguage('es')">
            <span class="en">Spanish (HND)</span><span class="es">Español (HND)</span>
        </button>
    </div>
</nav>