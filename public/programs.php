            <!-- 2. PROGRAMS SECTION - Mission, Impact, and Program Modals -->
            <section id="programs" class="min-h-screen bg-white shadow-lg rounded-xl mb-10 p-8 md:p-12">

                <!-- 1. Mission Statement -->
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-extrabold text-uph-primary mb-4">
                        <span class="en">Our Mission</span><span class="es">Nuestra Misión</span>
                    </h2>
                    <p class="text-lg text-gray-700 max-w-4xl mx-auto">
                        <span class="en">To inspire the children and youth of Honduras to reach their potential by equipping them with the skills necessary for life management, academic achievement, spiritual growth, and leadership rooted in the Christian faith.</span><span class="es">Inspirar a los niños y jóvenes de Honduras a alcanzar su potencial equipándolos con las habilidades necesarias para la gestión de la vida, el logro académico, el crecimiento espiritual y el liderazgo arraigado en la fe cristiana.</span>
                    </p>
                </div>

                <!-- 2. Impact Stats -->
                <div class="mb-16">
                    <h3 class="text-2xl font-bold text-center text-uph-primary mb-8">
                        <span class="en">Impact (2024)</span><span class="es">Impacto (2024)</span>
                    </h3>
                    <div class="grid grid-cols-2 sm:grid-cols-5 gap-4 text-center max-w-5xl mx-auto">
                        <!-- Stat 1: Children -->
                        <div class="p-3 rounded-xl bg-uph-primary/5">
                            <p class="text-3xl md:text-4xl font-extrabold text-uph-main-blue">400</p>
                            <p class="text-sm md:text-base font-semibold text-uph-primary mt-1"><span class="en">Children</span><span class="es">Niños</span></p>
                        </div>
                        <!-- Stat 2: Youth -->
                        <div class="p-3 rounded-xl bg-uph-primary/5">
                            <p class="text-3xl md:text-4xl font-extrabold text-uph-main-blue">160</p>
                            <p class="text-sm md:text-base font-semibold text-uph-primary mt-1"><span class="en">Youth</span><span class="es">Jóvenes</span></p>
                        </div>
                        <!-- Stat 3: Parents & Tutors -->
                        <div class="p-3 rounded-xl bg-uph-primary/5">
                            <p class="text-3xl md:text-4xl font-extrabold text-uph-main-blue">340</p>
                            <p class="text-sm md:text-base font-semibold text-uph-primary mt-1"><span class="en">Parents & Tutors</span><span class="es">Padres y Tutores</span></p>
                        </div>
                        <!-- Stat 4: Volunteers -->
                        <div class="p-3 rounded-xl bg-uph-primary/5">
                            <p class="text-3xl md:text-4xl font-extrabold text-uph-main-blue">112</p>
                            <p class="text-sm md:text-base font-semibold text-uph-primary mt-1"><span class="en">Volunteers</span><span class="es">Voluntarios</span></p>
                        </div>
                        <!-- Stat 5: Staff -->
                        <div class="p-3 rounded-xl bg-uph-primary/5">
                            <p class="text-3xl md:text-4xl font-extrabold text-uph-main-blue">23</p>
                            <p class="text-sm md:text-base font-semibold text-uph-primary mt-1"><span class="en">Staff</span><span class="es">Personal</span></p>
                        </div>
                    </div>
                </div>

                <!-- 3. Program Modal Panels (2x2 Grid) -->
                <h3 class="text-2xl font-bold text-center text-uph-primary mb-8">
                    <span class="en">Our Core Programs</span><span class="es">Nuestros Programas Centrales</span>
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto">

                    <!-- Program 1: Youth Program -->
                    <div class="bg-uph-main-blue/10 p-6 rounded-xl shadow-md flex flex-col items-center text-center">
                        <h4 class="text-xl font-bold text-uph-primary mb-4"><span class="en">Youth Program</span><span class="es">Programa Juvenil</span></h4>
                        <p class="text-gray-700 mb-6"><span class="en">A comprehensive discipleship program focusing on leadership development, academic mentorship, and college preparation for high school students.</span><span class="es">Un programa integral de discipulado centrado en el desarrollo de liderazgo, mentoría académica y preparación universitaria para estudiantes de secundaria.</span></p>
                        <button onclick="openModal('youth')"
                                class="mt-auto px-6 py-3 bg-uph-main-blue text-white font-semibold rounded-lg hover:bg-uph-primary transition duration-300">
                            <span class="en">Learn More</span><span class="es">Saber Más</span>
                        </button>
                    </div>

                    <!-- Program 2: AfterSchool Program -->
                    <div class="bg-uph-main-blue/10 p-6 rounded-xl shadow-md flex flex-col items-center text-center">
                        <h4 class="text-xl font-bold text-uph-primary mb-4"><span class="en">AfterSchool Program</span><span class="es">Programa Extraescolar</span></h4>
                        <p class="text-gray-700 mb-6"><span class="en">Providing a safe, supportive, and academically enriching environment for elementary and middle school students outside of school hours.</span><span class="es">Proporcionar un entorno seguro, de apoyo y enriquecedor académicamente para estudiantes de primaria y secundaria fuera del horario escolar.</span></p>
                        <button onclick="openModal('afterschool')"
                                class="mt-auto px-6 py-3 bg-uph-main-blue text-white font-semibold rounded-lg hover:bg-uph-primary transition duration-300">
                            <span class="en">Learn More</span><span class="es">Saber Más</span>
                        </button>
                    </div>

                    <!-- Program 3: UrbanTrekkers -->
                    <div class="bg-uph-main-blue/10 p-6 rounded-xl shadow-md flex flex-col items-center text-center">
                        <h4 class="text-xl font-bold text-uph-primary mb-4"><span class="en">UrbanTrekkers</span><span class="es">UrbanTrekkers</span></h4>
                        <p class="text-gray-700 mb-6"><span class="en">Experiential education trips designed to broaden students' perspectives, connect learning to the real world, and build teamwork skills.</span><span class="es">Viajes de educación experiencial diseñados para ampliar las perspectivas de los estudiantes, conectar el aprendizaje con el mundo real y desarrollar habilidades de trabajo en equipo.</span></p>
                        <button onclick="openModal('urbantrekkers')"
                                class="mt-auto px-6 py-3 bg-uph-main-blue text-white font-semibold rounded-lg hover:bg-uph-primary transition duration-300">
                            <span class="en">Learn More</span><span class="es">Saber Más</span>
                        </button>
                    </div>

                    <!-- Program 4: UPCEL -->
                    <div class="bg-uph-main-blue/10 p-6 rounded-xl shadow-md flex flex-col items-center text-center">
                        <h4 class="text-xl font-bold text-uph-primary mb-4"><span class="en">UPCEL</span><span class="es">UPCEL</span></h4>
                        <p class="text-gray-700 mb-6"><span class="en">Our 12-month fellowship program for visionary leaders of Latin America to learn the UrbanPromise model.</span><span class="es">Nuestro programa de becas de 12 meses para líderes visionarios de América Latina para aprender el modelo UrbanPromise.</span></p>
                        <button onclick="openModal('upcel')"
                                class="mt-auto px-6 py-3 bg-uph-main-blue text-white font-semibold rounded-lg hover:bg-uph-primary transition duration-300">
                            <span class="en">Learn More</span><span class="es">Saber Más</span>
                        </button>
                    </div>
                </div>
            </section>