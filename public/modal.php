<style>
/* Modal Styles */
body.modal-open {
    overflow: hidden;
}

.modal-overlay {
    position: fixed;
    inset: 0;
    background-color: rgba(0, 0, 0, 0.8);
    z-index: 100;
    display: none; /* Hidden by default */
    align-items: center;
    justify-content: center;
    padding: 1rem;
    transition: opacity 0.3s ease;
}

.modal-overlay.is-open {
    display: flex;
}

.modal-content {
    background-color: white;
    border-radius: 0.75rem;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    max-width: 70rem; /* Adjusted max-width for content */
    width: 100%;
    max-height: 90vh;
    overflow-y: auto;
    transform: translateY(20px);
    transition: transform 0.3s ease;
}

.modal-overlay.is-open .modal-content {
    transform: translateY(0);
}

.modal-inner {
    padding: 1.5rem;
}

@media (min-width: 768px) {
    .modal-inner {
        padding: 2.5rem;
    }
}


.modal-header {
    display: flex;
    justify-content: space-between; /* Add this back for modal header */
    align-items: flex-start;

    padding-bottom: 1rem;
    margin-bottom: 1.5rem;
    position: sticky;
    top: 0;
    background-color: white;
    z-index: 10;
}

.modal-title {
    font-size: 1.875rem; /* 30px */
    font-weight: 800;
    color: var(--color-primary);
    margin: 0;
}

.modal-close-button {
    background: none;
    border: none;
    cursor: pointer;
    padding: 0.25rem;
    margin-top: -0.5rem;
    margin-right: -0.5rem;
    transition: color 0.2s;
    color: #9ca3af; /* Gray-400 */
}

.modal-close-button:hover {
    color: #4b5563; /* Gray-700 */
}

.close-icon {
    width: 24px;
    height: 24px;
    stroke: currentColor;
}

.modal-body {
    height: 100%;
    display: flex;
    flex-direction: column;
    gap: 2rem;
}

.modal-program-detail {
    display: none; /* Hidden by default, shown by JS */
}

.program-image-container {
    border-radius: 0.75rem;
    overflow: hidden;
    box-shadow: 0 10px 15px rgba(0,0,0,0.1);
    height: 16rem; /* 256px */
    margin-bottom: 2rem;
}

.program-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.program-detail-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 2rem;
}

@media (min-width: 1024px) {
    .program-detail-grid {
        grid-template-columns: 2fr 1fr;
    }
}

.program-info {
    display: flex;
    flex-direction: column;
    gap: 2rem;
}

.program-section-block {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.program-subtitle {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--color-primary);
    margin-bottom: 0.5rem;
}

.program-description {
    color: #4b5563; /* Gray-700 */
    line-height: 1.75;
}

.metrics-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
}

@media (min-width: 640px) {
    .metrics-grid {
        grid-template-columns: repeat(4, 1fr);
    }
}

.metric-item {
    background-color: rgba(156, 214, 57, 0.1); /* Light green tint */
    padding: 0.75rem;
    border-radius: 0.5rem;
    text-align: center;
}

.metric-number {
    font-size: 1.5rem;
    font-weight: 800;
    color: var(--color-accent-green);
    margin: 0;
}

.metric-label {
    font-size: 0.75rem;
    font-weight: 600;
    color: var(--color-primary);
    margin-top: 0.25rem;
}

.program-support-button {
    margin-top: 1.5rem;
    align-self: center;
    width: 100%;
    max-width: 20rem;
    background-color: var(--color-accent-green);
    color: white;
    font-weight: 800;
}

.program-support-button:hover {
    background-color: var(--color-primary);
}


.program-testimonial {
    background-color: rgba(22, 78, 99, 0.05); /* Light primary tint */
    border-radius: 0.75rem;
    border-left: 4px solid var(--color-accent-blue);
    padding: 1.5rem;
    box-shadow: inset 0 2px 4px rgba(0,0,0,0.06);
    display: flex;
    flex-direction: column;
}

.program-testimonial-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--color-primary);
    font-style: italic;
    margin-bottom: 1rem;
}

.program-testimonial-quote {
    font-size: 1.125rem;
    color: #374151; /* Dark Gray */
    font-style: italic;
    line-height: 1.6;
}

.program-testimonial-author {
    font-size: 0.875rem;
    font-weight: 600;
    color: var(--color-accent-blue);
    text-align: right;
    margin-top: 1rem;
}
</style>
<!-- Generic Modal Structure (hidden by default) -->
<div id="program-modal" class="modal-overlay">
    <!-- Modal Content Box -->
    <div class="modal-content" onclick="event.stopPropagation()">

        <div class="modal-inner">
            <!-- Modal Header -->
            <div class="modal-header">
                <h3 id="modal-title" class="modal-title">
                    <span class="en">Program Details</span><span class="es">Detalles del Programa</span>
                </h3>
                <button class="modal-close-button">
                    <svg xmlns="http://www.w3.org/2000/svg" class="close-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Modal Body - New Rich Content Layout -->
            <div id="modal-body-content" class="modal-body">

                <!-- Youth Program Content -->
                <div id="modal-content-youth" class="modal-program-detail">
                    <div class="program-image-container">
                        <img src="https://placehold.co/1000x400/164E63/FFFFFF?text=Youth+Leadership+Program" alt="Youth Program Visual" class="program-image">
                    </div>
                    <div class="program-detail-grid">
                        <div class="program-info">
                            <div class="program-section-block">
                                <h4 class="program-subtitle"><span class="en">About the Program</span><span class="es">Acerca del Programa</span></h4>
                                <p class="program-description"><span class="en">This year-round, intensive program for high school students focuses on spiritual leadership, job training, university preparation, and mentorship. We seek to raise up the next generation of community leaders in Honduras, providing them with the necessary tools to break cycles of poverty and violence.</span><span class="es">Este programa intensivo durante todo el año para estudiantes de secundaria se centra en el liderazgo espiritual, la capacitación laboral, la preparación universitaria y la mentoría. Buscamos formar la próxima generación de líderes comunitarios en Honduras, brindándoles las herramientas necesarias para romper los ciclos de pobreza y violencia.</span></p>
                            </div>
                            <div class="program-section-block">
                                <h4 class="program-subtitle"><span class="en">Key Metrics</span><span class="es">Métricas Clave</span></h4>
                                <div class="metrics-grid">
                                    <div class="metric-item"><p class="metric-number">160</p><p class="metric-label"><span class="en">Youth Enrolled</span><span class="es">Jóvenes Inscritos</span></p></div>
                                    <div class="metric-item"><p class="metric-number">98%</p><p class="metric-label"><span class="en">Graduation Rate</span><span class="es">Tasa de Graduación</span></p></div>
                                    <div class="metric-item"><p class="metric-number">30+</p><p class="metric-label"><span class="en">Mentors</span><span class="es">Mentores</span></p></div>
                                    <div class="metric-item"><p class="metric-number">5</p><p class="metric-label"><span class="en">Job Training Sites</span><span class="es">Sitios de Capacitación</span></p></div>
                                </div>
                            </div>
                            <a href="#" target="_blank" class="button button-primary button-large program-support-button"><span class="en">Support This Program</span><span class="es">Apoyar Este Programa</span></a>
                        </div>
                        <div class="program-testimonial">
                            <div class="program-section-block">
                                <h4 class="program-testimonial-title"><span class="en">A Life Transformed</span><span class="es">Una Vida Transformada</span></h4>
                                <blockquote class="program-testimonial-quote"><span class="en">The Youth Program showed me that I could be a leader in my own community. Now I am studying at university and mentoring younger students. UPH is my family.</span><span class="es">El Programa Juvenil me demostró que podía ser un líder en mi propia comunidad. Ahora estoy estudiando en la universidad y asesorando a estudiantes más jóvenes. UPH es mi familia.</span></blockquote>
                            </div>
                            <p class="program-testimonial-author">— <span class="en">Kevin R., UPH Alumnus</span><span class="es">Kevin R., Exalumno de UPH</span></p>
                        </div>
                    </div>
                </div>

                <!-- AfterSchool Program Content -->
                <div id="modal-content-afterschool" class="modal-program-detail">
                    <div class="program-image-container">
                        <img src="https://placehold.co/1000x400/51CEEA/164E63?text=AfterSchool+Academics" alt="AfterSchool Program Visual" class="program-image">
                    </div>
                    <div class="program-detail-grid">
                        <div class="program-info">
                            <div class="program-section-block">
                                <h4 class="program-subtitle"><span class="en">About the Program</span><span class="es">Acerca del Programa</span></h4>
                                <p class="program-description"><span class="en">Our daily after-school sessions provide remedial education, Bible study, and recreation in a nurturing and safe environment. This is where we build the foundational academic and social skills for success, protecting children during critical after-school hours.</span><span class="es">Nuestras sesiones diarias después de la escuela brindan educación de recuperación, estudio bíblico y recreación en un ambiente seguro y de apoyo. Aquí es donde construimos las habilidades académicas y sociales fundamentales para el éxito, protegiendo a los niños during las horas críticas después de la escuela.</span></p>
                            </div>
                            <div class="program-section-block">
                                <h4 class="program-subtitle"><span class="en">Key Metrics</span><span class="es">Métricas Clave</span></h4>
                                <div class="metrics-grid">
                                    <div class="metric-item"><p class="metric-number">85%</p><p class="metric-label"><span class="en">Daily Attendance</span><span class="es">Asistencia Diaria</span></p></div>
                                    <div class="metric-item"><p class="metric-number">3 Levels</p><p class="metric-label"><span class="en">Academic Improvement</span><span class="es">Mejora Académica</span></p></div>
                                    <div class="metric-item"><p class="metric-number">7,000+</p><p class="metric-label"><span class="en">Hours of Safety</span><span class="es">Horas Seguras</span></p></div>
                                    <div class="metric-item"><p class="metric-number">400</p><p class="metric-label"><span class="en">Children Served</span><span class="es">Niños Servidos</span></p></div>
                                </div>
                            </div>
                            <a href="#" target="_blank" class="button button-primary button-large program-support-button"><span class="en">Support This Program</span><span class="es">Apoyar Este Programa</span></a>
                        </div>
                        <div class="program-testimonial">
                            <div class="program-section-block">
                                <h4 class="program-testimonial-title"><span class="en">A Life Transformed</span><span class="es">Una Vida Transformada</span></h4>
                                <blockquote class="program-testimonial-quote"><span class="en">Before UPH, my son struggled with his reading and was often unsupervised. Now he loves going to AfterSchool and his grades are significantly better. I am so thankful for the peace of mind.</span><span class="es">Antes de UPH, mi hijo tenía dificultades con la lectura y a menudo estaba sin supervisión. Ahora le encanta ir al programa Extraescolar y sus notas son significativamente mejores. Estoy muy agradecida por la tranquilidad.</span></blockquote>
                            </div>
                            <p class="program-testimonial-author">— <span class="en">Maria C., Parent</span><span class="es">Maria C., Madre</span></p>
                        </div>
                    </div>
                </div>

                <!-- UrbanTrekkers Program Content -->
                <div id="modal-content-urbantrekkers" class="modal-program-detail">
                    <div class="program-image-container">
                        <img src="https://placehold.co/1000x400/9cd639/164E63?text=UrbanTrekkers+Field+Trip" alt="UrbanTrekkers Program Visual" class="program-image">
                    </div>
                    <div class="program-detail-grid">
                        <div class="program-info">
                            <div class="program-section-block">
                                <h4 class="program-subtitle"><span class="en">About the Program</span><span class="es">Acerca del Programa</span></h4>
                                <p class="program-description"><span class="en">UrbanTrekkers takes students on local and national field excursions to discover how their classroom learning applies to real-life challenges in science, history, and community development. We cultivate curious and engaged citizens by providing exposure they would otherwise never receive.</span><span class="es">UrbanTrekkers lleva a los estudiantes a excursiones de campo locales y nacionales para descubrir cómo su aprendizaje en el aula se aplica a desafíos de la vida real en ciencia, historia y desarrollo comunitario. Cultivamos ciudadanos curiosos y comprometidos al proporcionarles una exposición que de otra manera nunca recibirían.</span></p>
                            </div>
                            <div class="program-section-block">
                                <h4 class="program-subtitle"><span class="en">Key Metrics</span><span class="es">Métricas Clave</span></h4>
                                <div class="metrics-grid">
                                    <div class="metric-item"><p class="metric-number">15+</p><p class="metric-label"><span class="en">Field Trips</span><span class="es">Viajes de Campo</span></p></div>
                                    <div class="metric-item"><p class="metric-number">100+</p><p class="metric-label"><span class="en">Students Engaged</span><span class="es">Estudiantes Participantes</span></p></div>
                                    <div class="metric-item"><p class="metric-number">Science & History</p><p class="metric-label"><span class="en">Focus Areas</span><span class="es">Áreas de Enfoque</span></p></div>
                                    <div class="metric-item"><p class="metric-number">800</p><p class="metric-label"><span class="en">Hours of Discovery</span><span class="es">Horas de Descubrimiento</span></p></div>
                                </div>
                            </div>
                            <a href="#" target="_blank" class="button button-primary button-large program-support-button"><span class="en">Support This Program</span><span class="es">Apoyar Este Programa</span></a>
                        </div>
                        <div class="program-testimonial">
                            <div class="program-section-block">
                                <h4 class="program-testimonial-title"><span class="en">A Life Transformed</span><span class="es">Una Vida Transformada</span></h4>
                                <blockquote class="program-testimonial-quote"><span class="en">I always thought science was boring until UrbanTrekkers took us to the mountains. Seeing the geology and nature up close made me want to become an environmental engineer.</span><span class="es">Siempre pensé que la ciencia era aburrida hasta que UrbanTrekkers nos llevó a las montañas. Ver la geología y la naturaleza de cerca me hizo querer convertirme en ingeniera ambiental.</span></blockquote>
                            </div>
                            <p class="program-testimonial-author">— <span class="en">Sofia L., Student</span><span class="es">Sofia L., Estudiante</span></p>
                        </div>
                    </div>
                </div>

                <!-- UPCEL Program Content -->
                <div id="modal-content-upcel" class="modal-program-detail">
                    <div class="program-image-container">
                        <img src="https://placehold.co/1000x400/164E63/9cd639?text=UPCEL+Fellows+Training" alt="UPCEL Program Visual" class="program-image">
                    </div>
                    <div class="program-detail-grid">
                        <div class="program-info">
                            <div class="program-section-block">
                                <h4 class="program-subtitle"><span class="en">About the Program</span><span class="es">Acerca del Programa</span></h4>
                                <p class="program-description"><span class="en">The UrbanPromise Centre for Entrepreneurial Leadership (UPCEL) is a 12-month fellowship for visionary leaders from across Latin America. They live in community, serve in our programs, and receive intensive training in the UrbanPromise model to launch their own ministries and sites in their home countries.</span><span class="es">El Centro UrbanPromise para el Liderazgo Empresarial (UPCEL) es una beca de 12 meses para líderes visionarios de toda América Latina. Viven en comunidad, sirven en nuestros programas y reciben capacitación intensiva en el modelo UrbanPromise para lanzar sus propios ministerios y sitios en sus países de origen.</span></p>
                            </div>
                            <div class="program-section-block">
                                <h4 class="program-subtitle"><span class="en">Key Metrics</span><span class="es">Métricas Clave</span></h4>
                                <div class="metrics-grid">
                                    <div class="metric-item"><p class="metric-number">45+</p><p class="metric-label"><span class="en">Leaders Trained</span><span class="es">Líderes Capacitados</span></p></div>
                                    <div class="metric-item"><p class="metric-number">5</p><p class="metric-label"><span class="en">Countries Represented</span><span class="es">Países Representados</span></p></div>
                                    <div class="metric-item"><p class="metric-number">7</p><p class="metric-label"><span class="en">New Sites Launched</span><span class="es">Nuevos Sitios Lanzados</span></p></div>
                                    <div class="metric-item"><p class="metric-number">500+</p><p class="metric-label"><span class="en">Total Hours of Training</span><span class="es">Horas Totales de Capacitación</span></p></div>
                                </div>
                            </div>
                            <a href="#" target="_blank" class="button button-primary button-large program-support-button"><span class="en">Support This Program</span><span class="es">Apoyar Este Programa</span></a>
                        </div>
                        <div class="program-testimonial">
                            <div class="program-section-block">
                                <h4 class="program-testimonial-title"><span class="en">A Life Transformed</span><span class="es">Una Vida Transformada</span></h4>
                                <blockquote class="program-testimonial-quote"><span class="en">The UPCEL program gave me the tools, the community, and the spiritual foundation to take the UrbanPromise model back to my community in Costa Rica. It changed everything and empowered me to start my own ministry.</span><span class="es">El programa UPCEL me brindó las herramientas, la comunidad y la base espiritual para llevar el modelo UrbanPromise a mi comunidad en Costa Rica. Lo cambió todo y me empoderó para iniciar mi propio ministerio.</span></blockquote>
                            </div>
                            <p class="program-testimonial-author">— <span class="en">Maria F., UPCEL Fellow</span><span class="es">Maria F., Becaria de UPCEL</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div></div>