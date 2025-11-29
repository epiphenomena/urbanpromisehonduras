            <!-- 4. SOCIAL MEDIA SECTION (UPDATED) -->
            <section id="social-media" class="bg-white shadow-lg rounded-xl mb-10 p-8 md:p-12">
                <h2 class="sr-only"><span class="en">Social Media</span><span class="es">Redes Sociales</span></h2>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 max-w-6xl mx-auto">

                    <!-- Column 1: Impact Video -->
                    <div class="space-y-6">
                        <h3 class="text-3xl font-bold text-uph-primary">
                            <span class="en">UPLAM Impact Video</span><span class="es">Video de Impacto UPLAM</span>
                        </h3>
                        <div class="aspect-video rounded-xl overflow-hidden shadow-xl border-4 border-uph-main-green">
                            <!-- YouTube Embed: https://youtu.be/EYABnBqOAgk -->
                            <iframe width="100%" height="100%"
                                    src="https://www.youtube.com/embed/EYABnBqOAgk"
                                    title="UPLAM Impact Video"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                            </iframe>
                        </div>
                    </div>

                    <!-- Column 2: Instagram Grid and Newsletter Form (Stacked) -->
                    <div class="space-y-10">

                        <!-- Row 1: Instagram Grid Placeholder -->
                        <div>
                            <h3 class="text-2xl font-bold text-uph-primary mb-6">
                                <span class="en">Latest from Instagram @urbanpromisehonduras</span><span class="es">Lo Más Reciente de Instagram @urbanpromisehonduras</span>
                            </h3>
                            <div class="grid grid-cols-3 gap-2">
                                <!-- Instagram Post Placeholders (6 posts) -->
                                <a href="https://www.instagram.com/urbanpromisehonduras/" target="_blank" class="block aspect-square rounded-lg overflow-hidden transition transform hover:scale-105 shadow-md">
                                    <img src="https://placehold.co/300x300/164E63/51CEEA?text=IG+Post+1" alt="Instagram Post 1" class="w-full h-full object-cover">
                                </a>
                                <a href="https://www.instagram.com/urbanpromisehonduras/" target="_blank" class="block aspect-square rounded-lg overflow-hidden transition transform hover:scale-105 shadow-md">
                                    <img src="https://placehold.co/300x300/51CEEA/164E63?text=IG+Post+2" alt="Instagram Post 2" class="w-full h-full object-cover">
                                </a>
                                <a href="https://www.instagram.com/urbanpromisehonduras/" target="_blank" class="block aspect-square rounded-lg overflow-hidden transition transform hover:scale-105 shadow-md">
                                    <img src="https://placehold.co/300x300/9cd639/164E63?text=IG+Post+3" alt="Instagram Post 3" class="w-full h-full object-cover">
                                </a>
                                <a href="https://www.instagram.com/urbanpromisehonduras/" target="_blank" class="block aspect-square rounded-lg overflow-hidden transition transform hover:scale-105 shadow-md">
                                    <img src="https://placehold.co/300x300/164E63/9cd639?text=IG+Post+4" alt="Instagram Post 4" class="w-full h-full object-cover">
                                </a>
                                <a href="https://www.instagram.com/urbanpromisehonduras/" target="_blank" class="block aspect-square rounded-lg overflow-hidden transition transform hover:scale-105 shadow-md">
                                    <img src="https://placehold.co/300x300/51CEEA/9cd639?text=IG+Post+5" alt="Instagram Post 5" class="w-full h-full object-cover">
                                </a>
                                <a href="https://www.instagram.com/urbanpromisehonduras/" target="_blank" class="block aspect-square rounded-lg overflow-hidden transition transform hover:scale-105 shadow-md">
                                    <img src="https://placehold.co/300x300/9cd639/51CEEA?text=IG+Post+6" alt="Instagram Post 6" class="w-full h-full object-cover">
                                </a>
                            </div>
                            <p class="text-sm text-center text-gray-500 mt-4">
                                <a href="https://www.instagram.com/urbanpromisehonduras/" target="_blank" class="hover:text-uph-main-blue font-semibold">View All Posts on Instagram &rarr;</a>
                            </p>
                        </div>

                        <!-- Row 2: Newsletter Form -->
                        <div class="bg-uph-primary/5 p-6 rounded-xl shadow-inner">
                            <h3 class="text-2xl font-bold text-uph-primary mb-6 text-center">
                                <span class="en">Subscribe to Our Newsletter</span><span class="es">Suscríbete a Nuestro Boletín</span>
                            </h3>
                            <form class="space-y-4">
                                <!-- Name Row -->
                                <div class="flex space-x-4">
                                    <div class="flex-1">
                                        <label for="newsletter-first-name" class="sr-only">First Name</label>
                                        <input type="text" id="newsletter-first-name"
                                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-uph-main-green focus:border-uph-main-green"
                                               data-i18n-placeholder="form_first_name_placeholder" required>
                                    </div>
                                    <div class="flex-1">
                                        <label for="newsletter-last-name" class="sr-only">Last Name</label>
                                        <input type="text" id="newsletter-last-name"
                                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-uph-main-green focus:border-uph-main-green"
                                               data-i18n-placeholder="form_last_name_placeholder" required>
                                    </div>
                                </div>

                                <!-- Email Field -->
                                <div>
                                    <label for="newsletter-email" class="sr-only">Email Address</label>
                                    <input type="email" id="newsletter-email"
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-uph-main-green focus:border-uph-main-green"
                                           data-i18n-placeholder="form_email_placeholder" required>
                                </div>

                                <!-- Submit Button -->
                                <button type="submit"
                                        class="w-full px-6 py-3 bg-uph-main-green text-white font-extrabold rounded-lg shadow-md hover:bg-uph-main-green/90 transition duration-300">
                                    <span class="en">Subscribe</span><span class="es">Suscribirse</span>
                                </button>

                                <!-- Placeholder Message Box for Success/Error -->
                                <div id="subscribe-message" class="text-center text-sm font-semibold pt-2 hidden"></div>
                            </form>
                        </div>
                    </div>

                </div>
            </section>