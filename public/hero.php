<style>
/* Hero Section Specific Styles */
#hero.section-split {
    color: var(--color-text-light);
    padding-top: 4em; /* For mobile spacing beneath fixed header */
    overflow: hidden; /* To contain absolutely positioned children */
}

@media (min-width: 768px) {
    #hero.section-split {
        padding-top: 0; /* No padding needed on desktop, content is full height */
    }
}

#hero .hero-content-left {
    position: relative;
    padding: 2rem; /* Mobile padding */
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    min-height: 50vh; /* Minimum height for mobile visual */
}

@media (min-width: 768px) {
    #hero .hero-content-left {
        padding: 3rem; /* Desktop padding */
    }
}

#hero .hero-bg-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('https://placehold.co/1200x800/164E63/FFFFFF?text=Inspiring+Background+Image');
    background-size: cover;
    background-position: center;
    z-index: 1;
}

#hero .hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #164E63;
    opacity: 0.6;
    z-index: 2;
}

#hero .hero-story-content {
    position: relative;
    z-index: 3;
    background: rgba(0,0,0,0.6);
    padding: 1.5rem;
    border-radius: 0.5rem;
    backdrop-filter: blur(4px);
}

#hero .quote {
    font-size: 1.5rem;
    font-style: italic;
    font-weight: 600;
    border-left: 4px solid var(--color-accent-green);
    padding-left: 1rem;
    margin-bottom: 1.5rem;
}

#hero .story-preview {
    border-top: 1px solid #9ca3af;
    padding-top: 1.5rem;
}

#hero .story-callout {
    font-size: 0.75rem;
    font-weight: 700;
    letter-spacing: 0.05em;
    text-transform: uppercase;
    margin-bottom: 0.75rem;
}

#hero .story-excerpt {
    font-style: italic;
    margin-bottom: 1rem;
    max-height: 8rem;
    overflow: hidden;
}

#hero .read-more-link {
    color: var(--color-accent-green);
    font-weight: 700;
}
#hero .read-more-link:hover {
    color: var(--color-accent-blue);
}

#hero .hero-content-right {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 2.5rem;
    background-color: rgba(249, 250, 251, 0.8);
}


</style>
<section id="hero" class="section-split">
    <!-- Left Column: Quote and Story -->
    <div class="section-split-content hero-content-left">
        <div class="hero-bg-image"></div>
        <div class="hero-overlay"></div>
        <div class="section-content-container">
            <div class="hero-story-content">
                <blockquote class="quote">
                    <span class="en">“UPH saved my life.” Gerson Vásquez</span><span class="es">“UPH salvó mi vida.” Gerson Vásquez</span>
                </blockquote>
                <div class="story-preview">
                    <p class="story-callout">
                        <span class="en">READ IN 2 MIN THE WHY OF OUR WORK</span><span class="es">LEE EN 2 MIN EL PORQUÉ DE NUESTRO TRABAJO</span>
                    </p>
                    <p class="story-excerpt">
                        <span class="en">It’s the first day of camp. You’ve prepared your classes for weeks, worked with your team, and you’re ready to give your best. The children arrive, their laughter filling the space. One boy runs toward you at full speed — it looks like he’s going to give you a hug. Instead, he grabs your arms, looks you straight in the eyes, and says with full conviction, “I HATE YOU.”</span><span class="es">Es el primer día de campamento. Has preparado tus clases durante semanas, trabajado con tu equipo y estás listo para dar lo mejor de ti. Los niños llegan, sus risas llenando el espacio. Un niño corre hacia ti a toda velocidad, parece que te va a dar un abrazo. En cambio, te agarra de los brazos, te mira directamente a los ojos y dice con total convicción: “TE ODIO.”</span>
                    </p>
                    <a href="https://mailchi.mp/urbanpromisehonduras.org/circus-june-2024?e=488e3e1390" target="_blank" class="read-more-link">
                        <span class="en">Click to read more ⬇</span><span class="es">Clic para leer más ⬇</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Right Column: Simple Giving Form -->
    <div class="section-split-content hero-content-right">
        <div class="section-content-container">
            <div class="call-to-action-container">
                <h3 class="form-title">
                    <span class="en">Support our work</span><span class="es">Apoya nuestro trabajo</span>
                </h3>
                <div class="button-group">
                    <a href="#" class="button button-primary button-large">
                        <span class="en">Give Today</span><span class="es">Donar Hoy</span>
                    </a>
                    <a href="#" class="button button-secondary button-large">
                        <span class="en">Give Monthly (Join the Circus)</span><span class="es">Donar Mensual (Únete al Circo)</span>
                    </a>
                    <a href="#" class="button button-primary button-large">
                        <span class="en">Give through PayPal</span><span class="es">Donar con PayPal</span>
                    </a>
                </div>
                <p class="form-footer-note">
                    <a href="#">
                        <span class="en">Additional giving information and options</span><span class="es">Información y opciones adicionales para donar</span>
                    </a>
                </p>
            </div>
        </div>
    </div>
</section>