<!-- Generic Modal Structure (hidden by default) -->
    <div id="program-modal"
         class="fixed inset-0 bg-black bg-opacity-80 z-[100] hidden items-center justify-center p-4 transition-opacity duration-300"
         onclick="closeModal(event)">
        <!-- Modal Content Box: Larger, max height, scrollable -->
        <div class="bg-white rounded-xl shadow-2xl max-w-5xl w-full max-h-[90vh] overflow-y-auto transform transition-all duration-300" onclick="event.stopPropagation()">

            <div class="p-6 md:p-10">
                <!-- Modal Header -->
                <div class="flex justify-between items-start border-b pb-4 mb-6 sticky top-0 bg-white z-10">
                    <h3 id="modal-title" class="text-3xl font-extrabold text-uph-primary">
                        <span class="en">Program Details</span><span class="es">Detalles del Programa</span>
                    </h3>
                    <button onclick="closeModal()" class="text-gray-400 hover:text-gray-700 transition p-1 -mt-2 -mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Modal Body - New Rich Content Layout -->
                <div id="modal-body-content" class="space-y-8">

                    <!-- Youth Program Content -->
                    <div id="modal-content-youth" class="modal-content-panel" style="display: none;">
                        <div class="rounded-xl overflow-hidden shadow-lg h-64 bg-gray-200">
                            <img src="https://placehold.co/1000x400/164E63/FFFFFF?text=Youth+Leadership+Program" alt="Youth Program Visual" class="w-full h-full object-cover">
                        </div>
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mt-8">
                            <div class="lg:col-span-2 space-y-8">
                                <div class="space-y-4">
                                    <h4 class="text-2xl font-bold text-uph-primary"><span class="en">About the Program</span><span class="es">Acerca del Programa</span></h4>
                                    <p class="text-gray-700 leading-relaxed"><span class="en">This year-round, intensive program for high school students focuses on spiritual leadership, job training, university preparation, and mentorship. We seek to raise up the next generation of community leaders in Honduras, providing them with the necessary tools to break cycles of poverty and violence.</span><span class="es">Este programa intensivo durante todo el año para estudiantes de secundaria se centra en el liderazgo espiritual, la capacitación laboral, la preparación universitaria y la mentoría. Buscamos formar la próxima generación de líderes comunitarios en Honduras, brindándoles las herramientas necesarias para romper los ciclos de pobreza y violencia.</span></p>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold text-uph-primary mb-4"><span class="en">Key Metrics</span><span class="es">Métricas Clave</span></h4>
                                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                                        <div class="p-3 rounded-lg bg-uph-main-green/10 text-center"><p class="text-2xl font-extrabold text-uph-main-green">160</p><p class="text-xs font-semibold text-uph-primary mt-1"><span class="en">Youth Enrolled</span><span class="es">Jóvenes Inscritos</span></p></div>
                                        <div class="p-3 rounded-lg bg-uph-main-green/10 text-center"><p class="text-2xl font-extrabold text-uph-main-green">98%</p><p class="text-xs font-semibold text-uph-primary mt-1"><span class="en">Graduation Rate</span><span class="es">Tasa de Graduación</span></p></div>
                                        <div class="p-3 rounded-lg bg-uph-main-green/10 text-center"><p class="text-2xl font-extrabold text-uph-main-green">30+</p><p class="text-xs font-semibold text-uph-primary mt-1"><span class="en">Mentors</span><span class="es">Mentores</span></p></div>
                                        <div class="p-3 rounded-lg bg-uph-main-green/10 text-center"><p class="text-2xl font-extrabold text-uph-main-green">5</p><p class="text-xs font-semibold text-uph-primary mt-1"><span class="en">Job Training Sites</span><span class="es">Sitios de Capacitación</span></p></div>
                                    </div>
                                </div>
                                <a href="#" target="_blank" class="block text-center px-6 py-3 bg-uph-main-green text-white font-extrabold rounded-lg hover:bg-uph-primary transition duration-300 shadow-lg text-lg"><span class="en">Support This Program</span><span class="es">Apoyar Este Programa</span></a>
                            </div>
                            <div class="lg:col-span-1 p-6 bg-uph-primary/5 rounded-xl border-l-4 border-uph-main-blue shadow-inner flex flex-col justify-between">
                                <div class="space-y-4">
                                    <h4 class="text-xl font-bold text-uph-primary italic"><span class="en">A Life Transformed</span><span class="es">Una Vida Transformada</span></h4>
                                    <blockquote class="text-lg text-gray-800 italic"><span class="en">The Youth Program showed me that I could be a leader in my own community. Now I am studying at university and mentoring younger students. UPH is my family.</span><span class="es">El Programa Juvenil me demostró que podía ser un líder en mi propia comunidad. Ahora estoy estudiando en la universidad y asesorando a estudiantes más jóvenes. UPH es mi familia.</span></blockquote>
                                </div>
                                <p class="text-sm font-semibold text-uph-main-blue mt-4 text-right">— <span class="en">Kevin R., UPH Alumnus</span><span class="es">Kevin R., Exalumno de UPH</span></p>
                            </div>
                        </div>
                    </div>

                    <!-- AfterSchool Program Content -->
                    <div id="modal-content-afterschool" class="modal-content-panel" style="display: none;">
                        <div class="rounded-xl overflow-hidden shadow-lg h-64 bg-gray-200">
                            <img src="https://placehold.co/1000x400/51CEEA/164E63?text=AfterSchool+Academics" alt="AfterSchool Program Visual" class="w-full h-full object-cover">
                        </div>
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mt-8">
                            <div class="lg:col-span-2 space-y-8">
                                <div class="space-y-4">
                                    <h4 class="text-2xl font-bold text-uph-primary"><span class="en">About the Program</span><span class="es">Acerca del Programa</span></h4>
                                    <p class="text-gray-700 leading-relaxed"><span class="en">Our daily after-school sessions provide remedial education, Bible study, and recreation in a nurturing and safe environment. This is where we build the foundational academic and social skills for success, protecting children during critical after-school hours.</span><span class="es">Nuestras sesiones diarias después de la escuela brindan educación de recuperación, estudio bíblico y recreación en un ambiente seguro y de apoyo. Aquí es donde construimos las habilidades académicas y sociales fundamentales para el éxito, protegiendo a los niños during las horas críticas después de la escuela.</span></p>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold text-uph-primary mb-4"><span class="en">Key Metrics</span><span class="es">Métricas Clave</span></h4>
                                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                                        <div class="p-3 rounded-lg bg-uph-main-green/10 text-center"><p class="text-2xl font-extrabold text-uph-main-green">85%</p><p class="text-xs font-semibold text-uph-primary mt-1"><span class="en">Daily Attendance</span><span class="es">Asistencia Diaria</span></p></div>
                                        <div class="p-3 rounded-lg bg-uph-main-green/10 text-center"><p class="text-2xl font-extrabold text-uph-main-green">3 Levels</p><p class="text-xs font-semibold text-uph-primary mt-1"><span class="en">Academic Improvement</span><span class="es">Mejora Académica</span></p></div>
                                        <div class="p-3 rounded-lg bg-uph-main-green/10 text-center"><p class="text-2xl font-extrabold text-uph-main-green">7,000+</p><p class="text-xs font-semibold text-uph-primary mt-1"><span class="en">Hours of Safety</span><span class="es">Horas Seguras</span></p></div>
                                        <div class="p-3 rounded-lg bg-uph-main-green/10 text-center"><p class="text-2xl font-extrabold text-uph-main-green">400</p><p class="text-xs font-semibold text-uph-primary mt-1"><span class="en">Children Served</span><span class="es">Niños Servidos</span></p></div>
                                    </div>
                                </div>
                                <a href="#" target="_blank" class="block text-center px-6 py-3 bg-uph-main-green text-white font-extrabold rounded-lg hover:bg-uph-primary transition duration-300 shadow-lg text-lg"><span class="en">Support This Program</span><span class="es">Apoyar Este Programa</span></a>
                            </div>
                            <div class="lg:col-span-1 p-6 bg-uph-primary/5 rounded-xl border-l-4 border-uph-main-blue shadow-inner flex flex-col justify-between">
                                <div class="space-y-4">
                                    <h4 class="text-xl font-bold text-uph-primary italic"><span class="en">A Life Transformed</span><span class="es">Una Vida Transformada</span></h4>
                                    <blockquote class="text-lg text-gray-800 italic"><span class="en">Before UPH, my son struggled with his reading and was often unsupervised. Now he loves going to AfterSchool and his grades are significantly better. I am so thankful for the peace of mind.</span><span class="es">Antes de UPH, mi hijo tenía dificultades con la lectura y a menudo estaba sin supervisión. Ahora le encanta ir al programa Extraescolar y sus notas son significativamente mejores. Estoy muy agradecida por la tranquilidad.</span></blockquote>
                                </div>
                                <p class="text-sm font-semibold text-uph-main-blue mt-4 text-right">— <span class="en">Maria C., Parent</span><span class="es">Maria C., Madre</span></p>
                            </div>
                        </div>
                    </div>

                    <!-- UrbanTrekkers Program Content -->
                    <div id="modal-content-urbantrekkers" class="modal-content-panel" style="display: none;">
                        <div class="rounded-xl overflow-hidden shadow-lg h-64 bg-gray-200">
                            <img src="https://placehold.co/1000x400/9cd639/164E63?text=UrbanTrekkers+Field+Trip" alt="UrbanTrekkers Program Visual" class="w-full h-full object-cover">
                        </div>
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mt-8">
                            <div class="lg:col-span-2 space-y-8">
                                <div class="space-y-4">
                                    <h4 class="text-2xl font-bold text-uph-primary"><span class="en">About the Program</span><span class="es">Acerca del Programa</span></h4>
                                    <p class="text-gray-700 leading-relaxed"><span class="en">UrbanTrekkers takes students on local and national field excursions to discover how their classroom learning applies to real-life challenges in science, history, and community development. We cultivate curious and engaged citizens by providing exposure they would otherwise never receive.</span><span class="es">UrbanTrekkers lleva a los estudiantes a excursiones de campo locales y nacionales para descubrir cómo su aprendizaje en el aula se aplica a desafíos de la vida real en ciencia, historia y desarrollo comunitario. Cultivamos ciudadanos curiosos y comprometidos al proporcionarles una exposición que de otra manera nunca recibirían.</span></p>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold text-uph-primary mb-4"><span class="en">Key Metrics</span><span class="es">Métricas Clave</span></h4>
                                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                                        <div class="p-3 rounded-lg bg-uph-main-green/10 text-center"><p class="text-2xl font-extrabold text-uph-main-green">15+</p><p class="text-xs font-semibold text-uph-primary mt-1"><span class="en">Field Trips</span><span class="es">Viajes de Campo</span></p></div>
                                        <div class="p-3 rounded-lg bg-uph-main-green/10 text-center"><p class="text-2xl font-extrabold text-uph-main-green">100+</p><p class="text-xs font-semibold text-uph-primary mt-1"><span class="en">Students Engaged</span><span class="es">Estudiantes Participantes</span></p></div>
                                        <div class="p-3 rounded-lg bg-uph-main-green/10 text-center"><p class="text-2xl font-extrabold text-uph-main-green">Science & History</p><p class="text-xs font-semibold text-uph-primary mt-1"><span class="en">Focus Areas</span><span class="es">Áreas de Enfoque</span></p></div>
                                        <div class="p-3 rounded-lg bg-uph-main-green/10 text-center"><p class="text-2xl font-extrabold text-uph-main-green">800</p><p class="text-xs font-semibold text-uph-primary mt-1"><span class="en">Hours of Discovery</span><span class="es">Horas de Descubrimiento</span></p></div>
                                    </div>
                                </div>
                                <a href="#" target="_blank" class="block text-center px-6 py-3 bg-uph-main-green text-white font-extrabold rounded-lg hover:bg-uph-primary transition duration-300 shadow-lg text-lg"><span class="en">Support This Program</span><span class="es">Apoyar Este Programa</span></a>
                            </div>
                            <div class="lg:col-span-1 p-6 bg-uph-primary/5 rounded-xl border-l-4 border-uph-main-blue shadow-inner flex flex-col justify-between">
                                <div class="space-y-4">
                                    <h4 class="text-xl font-bold text-uph-primary italic"><span class="en">A Life Transformed</span><span class="es">Una Vida Transformada</span></h4>
                                    <blockquote class="text-lg text-gray-800 italic"><span class="en">I always thought science was boring until UrbanTrekkers took us to the mountains. Seeing the geology and nature up close made me want to become an environmental engineer.</span><span class="es">Siempre pensé que la ciencia era aburrida hasta que UrbanTrekkers nos llevó a las montañas. Ver la geología y la naturaleza de cerca me hizo querer convertirme en ingeniera ambiental.</span></blockquote>
                                </div>
                                <p class="text-sm font-semibold text-uph-main-blue mt-4 text-right">— <span class="en">Sofia L., Student</span><span class="es">Sofia L., Estudiante</span></p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- UPCEL Program Content -->
                    <div id="modal-content-upcel" class="modal-content-panel" style="display: none;">
                        <div class="rounded-xl overflow-hidden shadow-lg h-64 bg-gray-200">
                            <img src="https://placehold.co/1000x400/164E63/9cd639?text=UPCEL+Fellows+Training" alt="UPCEL Program Visual" class="w-full h-full object-cover">
                        </div>
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mt-8">
                            <div class="lg:col-span-2 space-y-8">
                                <div class="space-y-4">
                                    <h4 class="text-2xl font-bold text-uph-primary"><span class="en">About the Program</span><span class="es">Acerca del Programa</span></h4>
                                    <p class="text-gray-700 leading-relaxed"><span class="en">The UrbanPromise Centre for Entrepreneurial Leadership (UPCEL) is a 12-month fellowship for visionary leaders from across Latin America. They live in community, serve in our programs, and receive intensive training in the UrbanPromise model to launch their own ministries and sites in their home countries.</span><span class="es">El Centro UrbanPromise para el Liderazgo Empresarial (UPCEL) es una beca de 12 meses para líderes visionarios de toda América Latina. Viven en comunidad, sirven en nuestros programas y reciben capacitación intensiva en el modelo UrbanPromise para lanzar sus propios ministerios y sitios en sus países de origen.</span></p>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold text-uph-primary mb-4"><span class="en">Key Metrics</span><span class="es">Métricas Clave</span></h4>
                                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                                        <div class="p-3 rounded-lg bg-uph-main-green/10 text-center"><p class="text-2xl font-extrabold text-uph-main-green">45+</p><p class="text-xs font-semibold text-uph-primary mt-1"><span class="en">Leaders Trained</span><span class="es">Líderes Capacitados</span></p></div>
                                        <div class="p-3 rounded-lg bg-uph-main-green/10 text-center"><p class="text-2xl font-extrabold text-uph-main-green">5</p><p class="text-xs font-semibold text-uph-primary mt-1"><span class="en">Countries Represented</span><span class="es">Países Representados</span></p></div>
                                        <div class="p-3 rounded-lg bg-uph-main-green/10 text-center"><p class="text-2xl font-extrabold text-uph-main-green">7</p><p class="text-xs font-semibold text-uph-primary mt-1"><span class="en">New Sites Launched</span><span class="es">Nuevos Sitios Lanzados</span></p></div>
                                        <div class="p-3 rounded-lg bg-uph-main-green/10 text-center"><p class="text-2xl font-extrabold text-uph-main-green">500+</p><p class="text-xs font-semibold text-uph-primary mt-1"><span class="en">Total Hours of Training</span><span class="es">Horas Totales de Capacitación</span></p></div>
                                    </div>
                                </div>
                                <a href="#" target="_blank" class="block text-center px-6 py-3 bg-uph-main-green text-white font-extrabold rounded-lg hover:bg-uph-primary transition duration-300 shadow-lg text-lg"><span class="en">Support This Program</span><span class="es">Apoyar Este Programa</span></a>
                            </div>
                            <div class="lg:col-span-1 p-6 bg-uph-primary/5 rounded-xl border-l-4 border-uph-main-blue shadow-inner flex flex-col justify-between">
                                <div class="space-y-4">
                                    <h4 class="text-xl font-bold text-uph-primary italic"><span class="en">A Life Transformed</span><span class="es">Una Vida Transformada</span></h4>
                                    <blockquote class="text-lg text-gray-800 italic"><span class="en">The UPCEL program gave me the tools, the community, and the spiritual foundation to take the UrbanPromise model back to my community in Costa Rica. It changed everything and empowered me to start my own ministry.</span><span class="es">El programa UPCEL me brindó las herramientas, la comunidad y la base espiritual para llevar el modelo UrbanPromise a mi comunidad en Costa Rica. Lo cambió todo y me empoderó para iniciar mi propio ministerio.</span></blockquote>
                                </div>
                                <p class="text-sm font-semibold text-uph-main-blue mt-4 text-right">— <span class="en">Maria F., UPCEL Fellow</span><span class="es">Maria F., Becaria de UPCEL</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>