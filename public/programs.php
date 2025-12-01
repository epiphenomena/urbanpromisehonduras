<style>
/* Programs Section */
.impact-stats {
    margin-bottom: 4rem;
    text-align: center;
}

.subsection-title {
    font-size: 1.75rem;
    font-weight: 700;
    color: var(--color-primary);
    text-align: center;
    margin-bottom: 2rem;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
    max-width: 48rem;
    margin: 0 auto;
}

@media (min-width: 640px) {
    .stats-grid {
        grid-template-columns: repeat(5, 1fr);
    }
}

.stat-item {
    background-color: rgba(22, 78, 99, 0.05);
    padding: 1rem;
    border-radius: 0.75rem;
}

.stat-number {
    font-size: 2.25rem;
    font-weight: 800;
    color: var(--color-accent-blue);
    margin: 0;
}

.stat-label {
    font-weight: 600;
    color: var(--color-primary);
    margin-top: 0.25rem;
}

.program-section {
    margin-top: 4rem;
}

.program-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 1.5rem;
    max-width: 48rem;
    margin: 0 auto;
}

@media (min-width: 768px) {
    .program-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

.program-card {
    background-color: white; /* Changed to solid white */
    padding: 1.5rem;
    border-radius: 0.75rem;
    box-shadow: 0 8px 16px rgba(0,0,0,0.1); /* Stronger shadow */
    text-align: center;
    display: flex;
    flex-direction: column;
}

.program-card .card-title {
    color: var(--color-primary);
}

.program-card .button {
    margin-top: auto; /* Pushes button to the bottom */
}
</style>
<section id="programs" class="content-section">
    <div class="section-content-container">
        <!-- 1. Mission Statement -->
        <div class="section-header">
            <h2 class="section-title">
                <span class="en">Our Mission</span><span class="es">Nuestra Misión</span>
            </h2>
            <p class="section-subtitle">
                <span class="en">To inspire the children and youth of Honduras to reach their potential by equipping them with the skills necessary for life management, academic achievement, spiritual growth, and leadership rooted in the Christian faith.</span><span class="es">Inspirar a los niños y jóvenes de Honduras a alcanzar su potencial equipándolos con las habilidades necesarias para la gestión de la vida, el logro académico, el crecimiento espiritual y el liderazgo arraigado en la fe cristiana.</span>
            </p>
        </div>

        <!-- 2. Impact Stats -->
        <div class="impact-stats">
            <h3 class="subsection-title">
                <span class="en">Impact (2024)</span><span class="es">Impacto (2024)</span>
            </h3>
            <div class="stats-grid">
                <div class="stat-item">
                    <p class="stat-number">400</p>
                    <p class="stat-label"><span class="en">Children</span><span class="es">Niños</span></p>
                </div>
                <div class="stat-item">
                    <p class="stat-number">160</p>
                    <p class="stat-label"><span class="en">Youth</span><span class="es">Jóvenes</span></p>
                </div>
                <div class="stat-item">
                    <p class="stat-number">340</p>
                    <p class="stat-label"><span class="en">Parents & Tutors</span><span class="es">Padres y Tutores</span></p>
                </div>
                <div class="stat-item">
                    <p class="stat-number">112</p>
                    <p class="stat-label"><span class="en">Volunteers</span><span class="es">Voluntarios</span></p>
                </div>
                <div class="stat-item">
                    <p class="stat-number">23</p>
                    <p class="stat-label"><span class="en">Staff</span><span class="es">Personal</span></p>
                </div>
            </div>
        </div>

        <!-- 3. Program Modal Panels -->
        <div class="program-section">
            <h3 class="subsection-title">
                <span class="en">Our Core Programs</span><span class="es">Nuestros Programas Centrales</span>
            </h3>
            <div class="card-grid program-grid">
                <!-- Program 1: Youth Program -->
                <div class="program-card">
                    <h4 class="card-title"><span class="en">Youth Program</span><span class="es">Programa Juvenil</span></h4>
                    <p class="card-text"><span class="en">A comprehensive discipleship program focusing on leadership development, academic mentorship, and college preparation for high school students.</span><span class="es">Un programa integral de discipulado centrado en el desarrollo de liderazgo, mentoría académica y preparación universitaria para estudiantes de secundaria.</span></p>
                    <button onclick="openModal('youth')" class="button">
                        <span class="en">Learn More</span><span class="es">Saber Más</span>
                    </button>
                </div>
                <!-- Program 2: AfterSchool Program -->
                <div class="program-card">
                    <h4 class="card-title"><span class="en">AfterSchool Program</span><span class="es">Programa Extraescolar</span></h4>
                    <p class="card-text"><span class="en">Providing a safe, supportive, and academically enriching environment for elementary and middle school students outside of school hours.</span><span class="es">Proporcionar un entorno seguro, de apoyo y enriquecedor académicamente para estudiantes de primaria y secundaria fuera del horario escolar.</span></p>
                    <button onclick="openModal('afterschool')" class="button">
                        <span class="en">Learn More</span><span class="es">Saber Más</span>
                    </button>
                </div>
                <!-- Program 3: UrbanTrekkers -->
                <div class="program-card">
                    <h4 class="card-title"><span class="en">UrbanTrekkers</span><span class="es">UrbanTrekkers</span></h4>
                    <p class="card-text"><span class="en">Experiential education trips designed to broaden students' perspectives, connect learning to the real world, and build teamwork skills.</span><span class="es">Viajes de educación experiencial diseñados para ampliar las perspectivas de los estudiantes, conectar el aprendizaje con el mundo real y desarrollar habilidades de trabajo en equipo.</span></p>
                    <button onclick="openModal('urbantrekkers')" class="button">
                        <span class="en">Learn More</span><span class="es">Saber Más</span>
                    </button>
                </div>
                <!-- Program 4: UPCEL -->
                <div class="program-card">
                    <h4 class="card-title"><span class="en">UPCEL</span><span class="es">UPCEL</span></h4>
                    <p class="card-text"><span class="en">Our 12-month fellowship program for visionary leaders of Latin America to learn the UrbanPromise model.</span><span class="es">Nuestro programa de becas de 12 meses para líderes visionarios de América Latina para aprender el modelo UrbanPromise.</span></p>
                    <button onclick="openModal('upcel')" class="button">
                        <span class="en">Learn More</span><span class="es">Saber Más</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>