            <!-- 1. HERO SECTION (TOP) - Full screen height, Split Layout -->
            <section id="top" class="min-h-[85vh] h-auto lg:h-[85vh] bg-white rounded-xl flex flex-col lg:flex-row mb-10 overflow-hidden shadow-xl">

                <!-- Left Column: Quote and Story (Background Image) -->
                <div class="w-full lg:w-3/5 hero-bg-image p-8 md:p-12 flex flex-col justify-end min-h-[40vh] lg:min-h-full">

                    <!-- Content overlay for readability -->
                    <div class="bg-black/60 p-6 rounded-lg backdrop-blur-sm space-y-6">

                        <!-- Quote -->
                        <div class="text-white">
                            <blockquote class="text-xl md:text-2xl italic font-semibold border-l-4 border-uph-main-green pl-4">
                                <span class="en">“UPH saved my life.” Gerson Vásquez</span><span class="es">“UPH salvó mi vida.” Gerson Vásquez</span>
                            </blockquote>
                        </div>

                        <!-- Read in 2 Min Block -->
                        <div class="text-white border-t border-gray-400 pt-4">
                            <p class="text-xs font-bold tracking-widest mb-3 uppercase">
                                <span class="en">READ IN 2 MIN THE WHY OF OUR WORK</span><span class="es">LEE EN 2 MIN EL PORQUÉ DE NUESTRO TRABAJO</span>
                            </p>
                            <p class="text-sm italic mb-4 max-h-32 overflow-hidden">
                                <span class="en">It’s the first day of camp. You’ve prepared your classes for weeks, worked with your team, and you’re ready to give your best. The children arrive, their laughter filling the space. One boy runs toward you at full speed — it looks like he’s going to give you a hug. Instead, he grabs your arms, looks you straight in the eyes, and says with full conviction, “I HATE YOU.”</span><span class="es">Es el primer día de campamento. Has preparado tus clases durante semanas, trabajado con tu equipo y estás listo para dar lo mejor de ti. Los niños llegan, sus risas llenando el espacio. Un niño corre hacia ti a toda velocidad, parece que te va a dar un abrazo. En cambio, te agarra de los brazos, te mira directamente a los ojos y dice con total convicción: “TE ODIO.”</span>
                            </p>
                            <a href="https://mailchi.mp/urbanpromisehonduras.org/circus-june-2024?e=488e3e1390"
                               target="_blank"
                               class="inline-flex items-center text-uph-main-green hover:text-uph-main-blue font-bold transition duration-300">
                                <span class="en">Click to read more ⬇</span><span class="es">Clic para leer más ⬇</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Simple Giving Form (Inline Donation Form) -->
                <div class="w-full lg:w-2/5 flex flex-col items-center justify-center p-10 bg-gray-50/80">
                    <div class="max-w-sm w-full">
                        <h3 class="text-2xl font-bold text-uph-primary mb-6 text-center">
                            <span class="en">Transform a life today.</span><span class="es">Transforma una vida hoy.</span>
                        </h3>

                        <!-- Inline Donation Form -->
                        <form class="space-y-4">

                            <!-- Amount Selection (Added a simple amount placeholder for context) -->
                            <div class="flex space-x-2">
                                <button type="button" class="flex-1 py-2 bg-uph-primary/10 text-uph-primary font-semibold rounded-lg hover:bg-uph-main-blue/20 transition">$25</button>
                                <button type="button" class="flex-1 py-2 bg-uph-primary/10 text-uph-primary font-semibold rounded-lg hover:bg-uph-main-blue/20 transition">$50</button>
                                <button type="button" class="flex-1 py-2 bg-uph-main-green text-white font-semibold rounded-lg shadow-md hover:bg-uph-main-green/90 transition"> $100</button>
                            </div>

                            <!-- Name Field -->
                            <div>
                                <label for="donor-name" class="sr-only"><span class="en">Full Name</span><span class="es">Nombre Completo</span></label>
                                <input type="text" id="donor-name"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-uph-main-blue focus:border-uph-main-blue"
                                       data-i18n-placeholder="form_name_placeholder">
                            </div>

                            <!-- Address Field -->
                            <div>
                                <label for="donor-address" class="sr-only"><span class="en">Address</span><span class="es">Dirección</span></label>
                                <input type="text" id="donor-address"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-uph-main-blue focus:border-uph-main-blue"
                                       data-i18n-placeholder="form_address_placeholder">
                            </div>

                            <!-- Credit Card Field -->
                            <div>
                                <label for="donor-card" class="sr-only"><span class="en">Credit Card</span><span class="es">Tarjeta de Crédito</span></label>
                                <input type="text" id="donor-card"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-uph-main-blue focus:border-uph-main-blue"
                                       data-i18n-placeholder="form_card_placeholder">
                                <p class="mt-2 text-xs text-gray-500 text-center">
                                    <span class="en">Secure transaction through SSL encryption.</span><span class="es">Transacción segura mediante cifrado SSL.</span>
                                </p>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit"
                                    class="w-full px-6 py-4 bg-uph-primary text-white font-extrabold text-xl rounded-lg shadow-xl hover:bg-uph-main-blue transition duration-300 transform hover:scale-[1.02]">
                                <span class="en">Complete Donation</span><span class="es">Completar Donación</span>
                            </button>

                        </form>
                        <p class="mt-6 text-sm text-gray-500 text-center">
                            <span class="en">Your donation directly supports our programs in Latin America.</span><span class="es">Tu donación apoya directamente nuestros programas en Latinoamérica.</span>
                        </p>
                    </div>
                </div>
            </section>