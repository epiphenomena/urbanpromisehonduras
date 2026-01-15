<style>
/* Programs Section */
#programs {
    color: #E5E7EB;
    padding: 4rem 0;
}

#programs .impact-stats {
    margin: 4rem 0;
    text-align: center;
}

#programs .section-subtitle {
    font-size: 1.25rem;
    font-weight: 700;
    color: #2e2d2dff;
    text-align: center;
    margin-bottom: 2rem;
}

#programs .stats-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
    max-width: 48rem;
    margin: 0 auto;
}

@media (min-width: 768px) {
    #programs .stats-grid {
        grid-template-columns: repeat(5, 1fr);
    }
}

#programs .stat-item {
    background-color: rgba(255, 255, 255, 0.1);
    padding: 1rem;
    border-radius: 0.75rem;
}

#programs .stat-number {
    font-size: 2.25rem;
    font-weight: 800;
    color: #101e68ff;
    margin: 0;
}

#programs .stat-label {
    font-weight: 600;
    color: #000000ff;
    margin-top: 0.25rem;
}

#programs .program-section {
    margin-top: 4rem;
}

#programs .program-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 1.5rem;
}

@media (min-width: 768px) {
    #programs .program-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

/* PROGRAM CARDS WITH BACKGROUND IMAGES */
#programs .program-card {
    position: relative;
    box-shadow: 0 8px 16px rgba(0,0,0,0.4);
    background-size: cover;
    background-position: center;
    border-radius: 0.75rem;
    overflow: hidden;
    min-height: 260px;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
}

/* Dark overlay for readability */
#programs .program-card::before {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.35);
    z-index: 1;
}

/* Card content above overlay */
#programs .program-card > * {
    position: relative;
    z-index: 2;
}

/* Individual background images */
#programs .program-card.youth {
    background-image: url("media/youth.jpg");
}

#programs .program-card.afterschool {
    background-image: url("media/afterschool.jpg");
}

#programs .program-card.urbantrekkers {
    background-image: url("media/urbantrekkers.jpg");
}

#programs .program-card.upcel {
    background-image: url("media/upcel.jpg");
}

#programs .program-card .card-title {
    color: #FEE2E2;
}

#programs .program-card .button {
    margin-top: auto;
}
</style>

<section id="programs" class="section-split section-split--reversed">
    <div class="section-split-content">

        <!-- 1. Mission -->
        <div class="section-header">
            <h2 class="section-title">
                <span class="en">Our Mission</span><span class="es">Nuestra Misión</span>
            </h2>
            <p class="section-subtitle">
                <span class="en">
                    To inspire the children and youth of Honduras to reach their potential by equipping them with the skills necessary for life management, academic achievement, spiritual growth, and leadership rooted in the Christian faith.
                </span>
                <span class="es">
                    Inspirar a los niños y jóvenes de Honduras a alcanzar su potencial equipándolos con las habilidades necesarias para la gestión de la vida, el logro académico, el crecimiento espiritual y el liderazgo arraigado en la fe cristiana.
                </span>
            </p>
        </div>

        <!-- 2. Impact -->
        <div class="impact-stats">
            <h3 class="subsection-title">
                <span class="en">Impact (2024)</span><span class="es">Impacto (2024)</span>
            </h3>
            <div class="stats-grid">
                <div class="stat-item"><p class="stat-number">400</p><p class="stat-label"><span class="en">Children</span><span class="es">Niños</span></p></div>
                <div class="stat-item"><p class="stat-number">160</p><p class="stat-label"><span class="en">Youth</span><span class="es">Jóvenes</span></p></div>
                <div class="stat-item"><p class="stat-number">340</p><p class="stat-label"><span class="en">Parents & Tutors</span><span class="es">Padres y Tutores</span></p></div>
                <div class="stat-item"><p class="stat-number">112</p><p class="stat-label"><span class="en">Volunteers</span><span class="es">Voluntarios</span></p></div>
                <div class="stat-item"><p class="stat-number">23</p><p class="stat-label"><span class="en">Staff</span><span class="es">Personal</span></p></div>
            </div>
        </div>
    </div>

    <div class="section-split-content">
        <!-- 3. Core Programs -->
        <div class="program-section">
            <h2 class="subsection-title">
                <span class="en">Our Core Programs</span><span class="es">Nuestros Programas Centrales</span>
            </h2>

            <div class="card-grid program-grid">

                <div class="program-card card youth">
                    <h4 class="card-title"><span class="en">Youth Program</span><span class="es">Programa Juvenil</span></h4>
                    <p class="card-text">
                        <span class="en">A comprehensive discipleship program focusing on leadership development, academic mentorship, and college preparation for high school students.</span>
                        <span class="es">Un programa integral de discipulado centrado en el desarrollo de liderazgo, mentoría académica y preparación universitaria para estudiantes de secundaria.</span>
                    </p>
                    <button class="button" data-program-key="youth">
                        <span class="en">Learn More</span><span class="es">Saber Más</span>
                    </button>
                </div>

                <div class="program-card card afterschool">
                    <h4 class="card-title"><span class="en">AfterSchool Program</span><span class="es">Programa Extraescolar</span></h4>
                    <p class="card-text">
                        <span class="en">Providing a safe, supportive, and academically enriching environment for elementary and middle school students outside of school hours.</span>
                        <span class="es">Proporcionar un entorno seguro, de apoyo y enriquecedor académicamente para estudiantes de primaria y secundaria fuera del horario escolar.</span>
                    </p>
                    <button class="button" data-program-key="afterschool">
                        <span class="en">Learn More</span><span class="es">Saber Más</span>
                    </button>
                </div>

                <div class="program-card card urbantrekkers">
                    <h4 class="card-title"><span class="en">UrbanTrekkers</span><span class="es">UrbanTrekkers</span></h4>
                    <p class="card-text">
                        <span class="en">Experiential education trips designed to broaden students' perspectives, connect learning to the real world, and build teamwork skills.</span>
                        <span class="es">Viajes de educación experiencial diseñados para ampliar las perspectivas de los estudiantes, conectar el aprendizaje con el mundo real y desarrollar habilidades de trabajo en equipo.</span>
                    </p>
                    <button class="button" data-program-key="urbantrekkers">
                        <span class="en">Learn More</span><span class="es">Saber Más</span>
                    </button>
                </div>

                <div class="program-card card upcel">
                    <h4 class="card-title"><span class="en">UPCEL</span><span class="es">UPCEL</span></h4>
                    <p class="card-text">
                        <span class="en">Our 12-month fellowship program for visionary leaders of Latin America to learn the UrbanPromise model.</span>
                        <span class="es">Nuestro programa de becas de 12 meses para líderes visionarios de América Latina para aprender el modelo UrbanPromise.</span>
                    </p>
                    <button class="button" data-program-key="upcel">
                        <span class="en">Learn More</span><span class="es">Saber Más</span>
                    </button>
                </div>

            </div>
        </div>

    </div>
</section>
