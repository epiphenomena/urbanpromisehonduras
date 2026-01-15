<style>
/* Testimonials Section */
/* Removed .testimonials-section rules */

#testimonials .testimonial-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 1.5rem;
}

@media (min-width: 768px) {
    #testimonials .testimonial-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}
@media (min-width: 768px) {
    #testimonials .testimonial-grid {
        grid-template-columns: repeat(2, 1fr); /* Adjusted for 60% column width */
    }
}


#testimonials .testimonial-card {
    align-items: center;
}

#testimonials .testimonial-card.accent-green {
    border-top-color: var(--color-accent-green);
}
#testimonials .testimonial-card.accent-primary {
    border-top-color: var(--color-primary);
}


#testimonials .author-image {
    width: 6rem;
    height: 6rem;
    border-radius: 50%;
    object-fit: cover;
    box-shadow: 0 5px 10px rgba(0,0,0,0.15);
    margin-bottom: 1rem;
    flex-shrink: 0;
}

#testimonials .quote-text {
    font-style: italic;
    color: #4b5563; /* Gray-600 */
    margin-bottom: 1rem;
    flex-grow: 1;
}

#testimonials .author-name {
    font-weight: 600;
    color: rgba(22, 78, 99, 0.7);
    font-size: 0.875rem;
}
</style>
<section id="testimonials" class="section-split">
    <div class="section-split-content">
    <div class="section-header">
            <h2 class="section-title">
                <span class="en">Voices from Our Global Community</span><span class="es">Voces de Nuestra Comunidad Global</span>
            </h2>
        </div>    
        <div class="testimonial-grid">
            <!-- Testimonial 1: Elian (Colombia) -->
            <div class="testimonial-card card">
                <img src="media/testimonial (1).jpg" alt="Child Elian from Villa de Héroes" class="author-image">
                <blockquote class="quote-text">
                    <span class="en">“(I hope that)... Villa de Héroes never ends. In Jesus’ name we pray, Amen."</span><span class="es">“(Espero que)... Villa de Héroes nunca termine. En el nombre de Jesús oramos, Amén."</span>
                </blockquote>
                <p class="author-name">
                    <span class="en">Elian, Child from Villa de Héroes, Colombia</span><span class="es">Elian, Niño de Villa de Héroes, Colombia</span>
                </p>
            </div>

            <!-- Testimonial 2: Soledad (México) -->
            <div class="testimonial-card card accent-green">
                <img src="media/testimonial (2).jpg" alt="Girl Soledad from Hay yipic ach’ix queremetic" class="author-image">
                <blockquote class="quote-text">
                    <span class="en">"I feel safe, heard, and free to express myself without judgment. Even though we are girls, we can do it too."</span><span class="es">"Me siento segura, escuchada y libre de expresarme sin ser juzgada. Aunque seamos niñas, nosotras también podemos hacerlo."</span>
                </blockquote>
                <p class="author-name">
                    <span class="en">Soledad, Child from Hay yipic ach’ix queremetic, México</span><span class="es">Soledad, Niña de Hay yipic ach’ix queremetic, México</span>
                </p>
            </div>

            <!-- Testimonial 3: Carlos (Honduras - New Quote) -->
            <div class="testimonial-card card accent-primary">
                <img src="media/testimonial (3).jpg" alt="Child Carlos from AfterSchool Program" class="author-image">
                <blockquote class="quote-text">
                    <span class="en">"My tutors teach me that I am capable of anything. I used to be afraid of math, but now it's my favorite subject!"</span><span class="es">"Mis tutores me enseñan que soy capaz de cualquier cosa. Antes le temía a las matemáticas, ¡pero ahora es mi materia favorita!"</span>
                </blockquote>
                <p class="author-name">
                    <span class="en">Carlos, AfterSchool Program, Copán Ruinas, Honduras</span><span class="es">Carlos, Programa Extraescolar, Copán Ruinas, Honduras</span>
                </p>
            </div>

            <!-- Testimonial 4: Marisol (México - New Quote) -->
            <div class="testimonial-card card">
                <img src="media/testimonial (4).jpg" alt="Youth Marisol from UPCEL Fellowship" class="author-image">
                <blockquote class="quote-text">
                    <span class="en">"UPCEL showed me that ministry isn't just about preaching—it's about building tangible solutions. I'm taking this model back home."</span><span class="es">"UPCEL me mostró que el ministerio no es solo predicar, es construir soluciones tangibles. Me llevo este modelo a casa."</span>
                </blockquote>
                <p class="author-name">
                    <span class="en">Marisol, UPCEL Fellow, Oaxaca, México</span><span class="es">Marisol, Becaria de UPCEL, Oaxaca, México</span>
                </p>
            </div>
        </div>
    </div>
    <div class="section-split-content">
    </div>
</section>