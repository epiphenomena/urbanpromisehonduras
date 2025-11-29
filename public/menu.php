    <!-- 1. The Fixed Sidebar (Navigation) -->
    <nav id="side-menu" class="hidden md:flex flex-col fixed top-0 left-0 h-full bg-white shadow-xl p-6 justify-between">

        <!-- Top Section: Logo and Navigation Links -->
        <div>
            <!-- Logo Placeholder Image -->
            <div class="mb-10 p-2 border-b border-gray-200">
                <a href="#top">
                    <img src="https://placehold.co/180x50/164E63/FFFFFF?text=UPH+Logo"
                         alt="UPH Logo Placeholder"
                         class="en rounded-lg max-w-full h-auto">
                    <img src="https://placehold.co/180x50/164E63/FFFFFF?text=Logotipo+UPH"
                         alt="Logotipo de UPH"
                         class="es rounded-lg max-w-full h-auto">
                </a>
            </div>

            <!-- Navigation Links (Scrolling) -->
            <ul class="space-y-2">

                <!-- LINK 1: Our Work (Heart Icon) - Scrolls to the top section -->
                <li>
                    <a href="#top"
                       class="nav-link text-lg font-medium py-3 px-4 rounded-lg flex items-center space-x-3 w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                            <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path>
                        </svg>
                        <span class="en">Our Work</span><span class="es">Nuestro Trabajo</span>
                    </a>
                </li>

                <!-- LINK 2: Programs (Book Icon) -->
                <li>
                    <a href="#programs" class="nav-link text-lg font-medium py-3 px-4 rounded-lg flex items-center space-x-3 w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                            <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1 0-5H20"></path>
                        </svg>
                        <span class="en">Programs</span><span class="es">Programas</span>
                    </a>
                </li>

                <!-- The Testimonials link has been removed as requested -->

                <!-- LINK: Latin America (Globe Icon) -->
                <li>
                    <a href="#latin-america"
                       class="nav-link text-lg font-medium py-3 px-4 rounded-lg flex items-center space-x-3 w-full">
                        <!-- World Icon SVG -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M12 2a15.3 15.3 0 0 0 4 10a15.3 15.3 0 0 0-4 10a15.3 15.3 0 0 0-4-10a15.3 15.3 0 0 0 4-10z"></path>
                            <path d="M2 12h20"></path>
                        </svg>
                        <span class="en">Latin America</span><span class="es">América Latina</span>
                    </a>
                </li>

                <!-- LINK 3: Social Media (Phone Icon) -->
                <li>
                    <a href="#social-media" class="nav-link text-lg font-medium py-3 px-4 rounded-lg flex items-center space-x-3 w-full">
                        <!-- Phone Handset Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                            <path d="M22 16.92v3a2 2 0 0 1-2 2A18 18 0 0 1 3 4a2 2 0 0 1 2-2h3.92a2 2 0 0 1 1.66.76l2.36 3.6a2 2 0 0 1-.26 2.25l-2.73 2.73a1.5 1.5 0 0 0 0 2.12l2.12 2.12a1.5 1.5 0 0 0 2.12 0l2.73-2.73a2 2 0 0 1 2.25-.26l3.6 2.36a2 2 0 0 1 .76 1.66z"/>
                        </svg>
                        <span class="en">Social Media</span><span class="es">Redes Sociales</span>
                    </a>
                </li>

                <!-- Link 4: About us (Home Icon) -->
                <li>
                    <a href="#about-us" class="nav-link text-lg font-medium py-3 px-4 rounded-lg flex items-center space-x-3 w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                            <path d="M3 6l9-4 9 4v14c0 1.1-.9 2-2 2H5c-1.1 0-2-.9-2-2V6zM9 22V12h6v10"></path>
                        </svg>
                        <span class="en">About us</span><span class="es">Acerca de Nosotros</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Bottom Section: Language Toggle -->
        <div class="border-t border-gray-200 pt-6">
            <div class="flex flex-col space-y-2 text-sm text-gray-500">
                <!-- English Language Button -->
                <button id="lang-en"
                        class="text-left py-1 hover:text-uph-main-green transition duration-300"
                        onclick="setLanguage('en')">
                    <span class="en">English (USA)</span><span class="es">Inglés (EE. UU.)</span>
                </button>

                <!-- Spanish Language Button -->
                <button id="lang-es"
                        class="text-left py-1 hover:text-uph-main-green transition duration-300"
                        onclick="setLanguage('es')">
                    <span class="en">Spanish (HND)</span><span class="es">Español (HND)</span>
                </button>
            </div>
        </div>
    </nav>