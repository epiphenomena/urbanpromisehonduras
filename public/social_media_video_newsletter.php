<style>
/* ===============================
   SOCIAL MEDIA SECTION - LEFT & SHARED
================================ */

#social-media .social-media-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 3rem;
}

@media (min-width: 1024px) {
    #social-media .social-media-grid {
        grid-template-columns: 1fr 1fr;
        align-items: start;
    }
}

/* Column stacking */
#social-media .social-media-column {
    display: flex;
    flex-direction: column;
    gap: 2.5rem;
}

/* VIDEO */
#social-media .video-container--bordered {
    border: 4px solid var(--color-accent-green);
    border-radius: 0.75rem;
    box-shadow: 0 10px 15px rgba(0,0,0,0.1);
    overflow: hidden;
}

#social-media iframe {
    width: 100%;
    aspect-ratio: 16 / 9;
    border: none;
}

/* NEWSLETTER */
#social-media .newsletter-section {
    background-color: rgba(22, 78, 99, 0.05);
    box-shadow: inset 0 2px 4px rgba(0,0,0,0.06);
}

#social-media .newsletter-form {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

#social-media .form-row {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

@media (min-width: 768px) {
    #social-media .form-row {
        flex-direction: row;
    }
    #social-media .form-group {
        flex: 1;
    }
}

#social-media .button-green {
    background-color: var(--color-accent-green);
    color: white;
}

#social-media .button-green:hover {
    background-color: var(--color-primary);
}

#social-media .subscribe-message {
    text-align: center;
    font-size: 0.875rem;
    font-weight: 600;
    padding-top: 0.5rem;
}
</style>

<div class="social-media-column">
    <!-- Video -->
    <div>
        <h2 class="subsection-title">
            <span class="en">UPLAM Impact Video</span>
            <span class="es">Video de Impacto UPLAM</span>
        </h2>

        <div class="video-container video-container--bordered">
            <iframe
                src="https://www.youtube.com/embed/EYABnBqOAgk"
                title="UPLAM Impact Video"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>
    </div>

    <!-- Newsletter -->
    <div class="newsletter-section card">
        <h3 class="subsection-title">
            <span class="en">Subscribe to Our Newsletter</span>
            <span class="es">Suscríbete a Nuestro Boletín</span>
        </h3>

        <form class="newsletter-form">
            <div class="form-row">
                <div class="form-group">
                    <input type="text" class="input-field" placeholder="First name" required>
                </div>
                <div class="form-group">
                    <input type="text" class="input-field" placeholder="Last name" required>
                </div>
            </div>

            <div class="form-group">
                <input type="email" class="input-field" placeholder="Email address" required>
            </div>

            <a href="#" class="button button-green">
                <span class="en">Subscribe</span>
                <span class="es">Suscribirse</span>
            </a>

            <div class="subscribe-message"></div>
        </form>
    </div>
</div>
