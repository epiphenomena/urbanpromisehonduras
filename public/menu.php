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

.nav-link.button.button-primary {
  color: var(--color-text-light);
}

.nav-link.button.button-primary:hover {
  color: var(--color-text-dark);
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
            <a href="/">
                <img src="/media/logo.png"
                     alt="UPH Logo. Logotipo de UPH.">
            </a>
        </div>

        <!-- Navigation Links (Scrolling) The hrefs to homepage sections start with /# so that the menu works when included on subpages -->
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="/#hero" class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path></svg>
                    <span class="en">Our Work</span><span class="es">Nuestro Trabajo</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="/#social-media" class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Free 7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2025 Fonticons, Inc. --><path fill="currentColor" d="M171.5 38.8C192.3 4 236.5-10 274 7.6l7.2 3.8C316 32.3 330 76.5 312.4 114l0 0-14.1 30 109.7 0 7.4 .4c36.3 3.7 64.6 34.4 64.6 71.6 0 13.2-3.6 25.4-9.8 36 6.1 10.6 9.7 22.8 9.8 36 0 18.3-6.9 34.8-18 47.5 1.3 5.3 2 10.8 2 16.5 0 25.1-12.9 47-32.2 59.9-1.9 35.5-29.4 64.2-64.4 67.7l-7.4 .4-104.1 0c-18 0-35.9-3.4-52.6-9.9l-7.1-3-.7-.3-6.6-3.2-.7-.3-12.2-6.5c-12.3-6.5-23.3-14.7-32.9-24.1-4.1 26.9-27.3 47.4-55.3 47.4l-32 0c-30.9 0-56-25.1-56-56L0 200c0-30.9 25.1-56 56-56l32 0c10.8 0 20.9 3.1 29.5 8.5l50.1-106.5 .6-1.2 2.7-5 .6-.9zM56 192c-4.4 0-8 3.6-8 8l0 224c0 4.4 3.6 8 8 8l32 0c4.4 0 8-3.6 8-8l0-224c0-4.4-3.6-8-8-8l-32 0zM253.6 51c-14.8-6.9-32.3-1.6-40.7 12l-2.2 4-56.8 120.9c-3.5 7.5-5.5 15.5-6 23.7l-.1 4.2 0 112.9 .2 7.9c2.4 32.7 21.4 62.1 50.7 77.7l11.5 6.1 6.3 3.1c12.4 5.6 25.8 8.5 39.4 8.5l104.1 0 2.4-.1c12.1-1.2 21.6-11.5 21.6-23.9l-.2-2.6c-.1-.9-.2-1.7-.4-2.6-2.7-12.1 4.3-24.2 16-28 9.7-3.1 16.6-12.2 16.6-22.8 0-4.3-1.1-8.2-3.1-11.8-6.3-11.1-2.8-25.2 8-32 6.8-4.3 11.2-11.8 11.2-20.2 0-7.1-3.1-13.5-8.2-18-5.2-4.6-8.2-11.1-8.2-18s3-13.4 8.2-18c5.1-4.5 8.2-10.9 8.2-18l-.1-2.4c-1.1-11.3-10.1-20.3-21.4-21.4l-2.4-.1-147.5 0c-8.2 0-15.8-4.2-20.2-11.1-4.4-6.9-5-15.7-1.5-23.1L269 93.6c7-15 1.4-32.7-12.5-41L253.6 51z"/></svg>
                    <span class="en">Social Media</span><span class="es">Redes Sociales</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="/#programs" class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Free 7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2025 Fonticons, Inc. --><path fill="currentColor" d="M256 141.3l0 309.3 .5-.2C311.1 427.7 369.7 416 428.8 416l19.2 0 0-320-19.2 0c-42.2 0-84.1 8.4-123.1 24.6-16.8 7-33.4 13.9-49.7 20.7zM230.9 61.5L256 72 281.1 61.5C327.9 42 378.1 32 428.8 32L464 32c26.5 0 48 21.5 48 48l0 352c0 26.5-21.5 48-48 48l-35.2 0c-50.7 0-100.9 10-147.7 29.5l-12.8 5.3c-7.9 3.3-16.7 3.3-24.6 0l-12.8-5.3C184.1 490 133.9 480 83.2 480L48 480c-26.5 0-48-21.5-48-48L0 80C0 53.5 21.5 32 48 32l35.2 0c50.7 0 100.9 10 147.7 29.5z"/></svg>
                    <span class="en">Programs</span><span class="es">Programas</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="/#latin-america" class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Free 7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2025 Fonticons, Inc. --><path fill="currentColor" d="M55.7 199.7l30.9 30.9c6 6 14.1 9.4 22.6 9.4l21.5 0c8.5 0 16.6 3.4 22.6 9.4l29.3 29.3c6 6 9.4 14.1 9.4 22.6l0 37.5c0 8.5 3.4 16.6 9.4 22.6l13.3 13.3c6 6 9.4 14.1 9.4 22.6l0 18.7c0 17.7 14.3 32 32 32s32-14.3 32-32l0-2.7c0-8.5 3.4-16.6 9.4-22.6l45.3-45.3c6-6 9.4-14.1 9.4-22.6l0-34.7c0-17.7-14.3-32-32-32l-82.7 0c-8.5 0-16.6-3.4-22.6-9.4l-16-16c-4.2-4.2-6.6-10-6.6-16 0-12.5 10.1-22.6 22.6-22.6l34.7 0c12.5 0 22.6-10.1 22.6-22.6 0-6-2.4-11.8-6.6-16l-19.7-19.7C242 130 240 125.1 240 120s2-10 5.7-13.7l17.3-17.3c5.8-5.8 9.1-13.7 9.1-21.9 0-7.2-2.4-13.7-6.4-18.9-3.2-.1-6.4-.2-9.6-.2-95.4 0-175.7 64.2-200.3 151.7zM464 256c0-34.6-8.4-67.2-23.4-95.8-6.4 .9-12.7 3.9-17.9 9.1l-13.4 13.4c-6 6-9.4 14.1-9.4 22.6l0 34.7c0 17.7 14.3 32 32 32l24.1 0c2.5 0 5-.3 7.3-.8 .4-5 .5-10.1 .5-15.2zM0 256a256 256 0 1 1 512 0 256 256 0 1 1 -512 0z"/></svg>
                    <span class="en">Latin America</span><span class="es">América Latina</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="/#about-us" class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--! Font Awesome Free 7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2025 Fonticons, Inc. --><path fill="currentColor" d="M304 70.1C313.1 61.9 326.9 61.9 336 70.1L568 278.1C577.9 286.9 578.7 302.1 569.8 312C560.9 321.9 545.8 322.7 535.9 313.8L527.9 306.6L527.9 511.9C527.9 547.2 499.2 575.9 463.9 575.9L175.9 575.9C140.6 575.9 111.9 547.2 111.9 511.9L111.9 306.6L103.9 313.8C94 322.6 78.9 321.8 70 312C61.1 302.2 62 287 71.8 278.1L304 70.1zM320 120.2L160 263.7L160 512C160 520.8 167.2 528 176 528L224 528L224 424C224 384.2 256.2 352 296 352L344 352C383.8 352 416 384.2 416 424L416 528L464 528C472.8 528 480 520.8 480 512L480 263.7L320 120.3zM272 528L368 528L368 424C368 410.7 357.3 400 344 400L296 400C282.7 400 272 410.7 272 424L272 528z"/></svg>
                    <span class="en">About us</span><span class="es">Acerca de Nosotros</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="/give/" class="nav-link button button-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                    <span class="en">Give</span><span class="es">Donar</span>
                </a>
            </li>
        </ul>
    </div>

    <!-- Bottom Section: Language Toggle -->
    <div class="lang-switcher">
        <button id="lang-en">
            <span class="en">English (USA)</span><span class="es">Inglés (EE. UU.)</span>
        </button>
        <button id="lang-es">
            <span class="en">Spanish (HND)</span><span class="es">Español (HND)</span>
        </button>
    </div>
</nav>