<style>
/* =========================
   HERO SECTION - LEFT & SHARED
========================= */

#hero.section-split {
    position: relative;
    color: var(--color-text-light);
    min-height: 600px;
    overflow: hidden;
    padding-top: 10px;
}

@media (min-width: 768px) {
    #hero.section-split {
        padding-top: 0;
        min-height: auto;
        align-items: stretch;
    }
}

/* LEFT COLUMN */
#hero .hero-content-left {
    position: relative;
    padding: 3rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

@media (min-width: 768px) {
    #hero .hero-content-left {
        padding: 3rem;
    }
}

/* BACKGROUND IMAGE */
#hero .hero-bg-image {
    position: absolute;
    inset: 0;
    background-image: url("media/hero.jpg");
    background-size: cover;
    background-position: center 55%;
    z-index: 1;
}

/* OVERLAY */
#hero .hero-overlay {
    position: absolute;
    inset: 0;
    background: rgba(235, 250, 255, 0.3);
    z-index: 2;
}

/* STORY CONTENT */
#hero .hero-story-content {
    position: relative;
    z-index: 3;
    max-width: 50%;
    margin-right: auto;
    background: rgba(0, 0, 0, 0.6);
    padding: 1.5rem;
    border-radius: 0.5rem;
    backdrop-filter: blur(4px);
    text-align: left;
}

@media (max-width: 768px) {
    #hero .hero-story-content {
        max-width: 100%;
    }
}

/* TEXT STYLES */
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
</style>

<div class="hero-bg-image"></div>
<div class="hero-overlay"></div>
<div class="section-content-container">
    <div class="hero-story-content">
        <blockquote class="quote">
            <span class="en">“UPH saved my life, AGAIN.” Gerson Vásquez</span><span class="es">“UPH salvó mi vida.” Gerson Vásquez</span>
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