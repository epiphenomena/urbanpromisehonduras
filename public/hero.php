<style>
/* Hero Section Split Layout */
.hero-section-split {
    display: flex;
    flex-direction: column;
    /* Removed card-like styling here */
    padding: 0; /* Ensure no extra padding outside section-content-container */
    color: var(--color-text-light);
    padding-top: 4em;
}

.hero-content-left {
    position: relative;
    color: var(--color-text-light);
    padding: 2rem;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    min-height: 50vh;
}

.hero-bg-image {
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

.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #164E63;
    opacity: 0.6;
    z-index: 2;
}

.hero-story-content {
    position: relative;
    z-index: 3;
    background: rgba(0,0,0,0.6);
    padding: 1.5rem;
    border-radius: 0.5rem;
    backdrop-filter: blur(4px);
}

.quote {
    font-size: 1.5rem;
    font-style: italic;
    font-weight: 600;
    border-left: 4px solid var(--color-accent-green);
    padding-left: 1rem;
    margin-bottom: 1.5rem;
}

.story-preview {
    border-top: 1px solid #9ca3af;
    padding-top: 1.5rem;
}

.story-callout {
    font-size: 0.75rem;
    font-weight: 700;
    letter-spacing: 0.05em;
    text-transform: uppercase;
    margin-bottom: 0.75rem;
}

.story-excerpt {
    font-style: italic;
    margin-bottom: 1rem;
    max-height: 8rem;
    overflow: hidden;
}

.read-more-link {
    color: var(--color-accent-green);
    font-weight: 700;
}
.read-more-link:hover {
    color: var(--color-accent-blue);
}

/* Right side form */
.hero-content-right {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 2.5rem;
    background-color: rgba(249, 250, 251, 0.8);
}

.donation-form-container {
    width: 100%;
    max-width: 24rem;
    padding-top: 0; /* Remove padding-top from here */
}

.form-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--color-primary);
    text-align: center;
    margin-bottom: 1.5rem;
}

.donation-form {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.amount-selector {
    display: flex;
    gap: 0.5rem;
}

.amount-button {
    flex: 1;
    background-color: rgba(22, 78, 99, 0.1);
    color: var(--color-primary);
    font-weight: 600;
}
.amount-button:hover {
    background-color: rgba(81, 206, 234, 0.2);
}
.amount-button.active {
    background-color: var(--color-accent-green);
    color: white;
}

.form-note {
    font-size: 0.75rem;
    text-align: center;
    color: #6b7280;
    margin-top: 0.5rem;
}

.form-footer-note {
    font-size: 0.875rem;
    color: #6b7280;
    text-align: center;
    margin-top: 1.5rem;
}

@media (min-width: 768px) {
    .hero-section-split {
        flex-direction: row;
        min-height: 85vh;
        padding-top: 0;
    }
    .hero-content-left {
        width: 60%;
        padding: 3rem;
    }
    .hero-content-right {
        width: 40%;
    }
}
</style>
<section id="top" class="hero-section-split">
    <!-- Left Column: Quote and Story -->
    <div class="hero-content-left">
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
    <div class="hero-content-right">
        <div class="section-content-container">
            <div class="donation-form-container">
                <h3 class="form-title">
                    <span class="en">Transform a life today.</span><span class="es">Transforma una vida hoy.</span>
                </h3>
                <form class="donation-form">
                    <div class="amount-selector">
                        <button type="button" class="button amount-button">$25</button>
                        <button type="button" class="button amount-button">$50</button>
                        <button type="button" class="button amount-button active">$100</button>
                    </div>
                    <div class="form-group">
                        <label for="donor-name" class="sr-only"><span class="en">Full Name</span><span class="es">Nombre Completo</span></label>
                        <input type="text" id="donor-name" class="input-field" data-i18n-placeholder="form_name_placeholder">
                    </div>
                    <div class="form-group">
                        <label for="donor-address" class="sr-only"><span class="en">Address</span><span class="es">Dirección</span></label>
                        <input type="text" id="donor-address" class="input-field" data-i18n-placeholder="form_address_placeholder">
                    </div>
                    <div class="form-group">
                        <label for="donor-card" class="sr-only"><span class="en">Credit Card</span><span class="es">Tarjeta de Crédito</span></label>
                        <input type="text" id="donor-card" class="input-field" data-i18n-placeholder="form_card_placeholder">
                        <p class="form-note">
                            <span class="en">Secure transaction through SSL encryption.</span><span class="es">Transacción segura mediante cifrado SSL.</span>
                        </p>
                    </div>
                    <button type="submit" class="button button-primary button-large">
                        <span class="en">Complete Donation</span><span class="es">Completar Donación</span>
                    </button>
                </form>
                <p class="form-footer-note">
                    <span class="en">Your donation directly supports our programs in Latin America.</span><span class="es">Tu donación apoya directamente nuestros programas en Latinoamérica.</span>
                </p>
            </div>
        </div>
    </div>
</section>