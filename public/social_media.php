<style>
/* Social Media Section */
.social-media-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 2.5rem;
    max-width: var(--content-max-width);
    margin: 0 auto;
}

@media (min-width: 1024px) {
    .social-media-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

.social-media-column {
    display: flex;
    flex-direction: column;
    gap: 2.5rem;
}

.social-media-column--stacked {
    gap: 2.5rem;
}

.video-container--bordered {
    border: 4px solid var(--color-accent-green);
    border-radius: 0.75rem;
    box-shadow: 0 10px 15px rgba(0,0,0,0.1);
    overflow: hidden;
}

.instagram-section {
    background-color: white;
    padding: 1.5rem;
    border-radius: 0.75rem;
    box-shadow: 0 4px 6px rgba(0,0,0,0.05);
}

.instagram-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 0.5rem;
}

.instagram-post {
    display: block;
    aspect-ratio: 1 / 1;
    border-radius: 0.5rem;
    overflow: hidden;
    transition: transform 0.2s;
    box-shadow: 0 2px 4px rgba(0,0,0,0.05);
}

.instagram-post:hover {
    transform: scale(1.05);
    box-shadow: 0 5px 10px rgba(0,0,0,0.1);
}

.instagram-post-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.instagram-link {
    text-align: center;
    font-size: 0.875rem;
    margin-top: 1rem;
}

.instagram-link a {
    font-weight: 600;
    color: #6b7280; /* Gray-500 */
}

.instagram-link a:hover {
    color: var(--color-accent-blue);
}


.newsletter-section {
    background-color: rgba(22, 78, 99, 0.05);
    padding: 1.5rem;
    border-radius: 0.75rem;
    box-shadow: inset 0 2px 4px rgba(0,0,0,0.06);
}

.newsletter-form {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.form-row {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

@media (min-width: 640px) {
    .form-row {
        flex-direction: row;
    }
    .form-row .form-group {
        flex: 1;
    }
}

.button-green {
    background-color: var(--color-accent-green);
    color: white;
}
.button-green:hover {
    background-color: var(--color-primary);
}

.subscribe-message {
    text-align: center;
    font-size: 0.875rem;
    font-weight: 600;
    padding-top: 0.5rem;
    display: block; /* Ensure visibility */
}
</style>
<section id="social-media" class="content-section">
    <div class="section-content-container">
        <div class="section-header sr-only">
            <h2 class="section-title">
                <span class="en">Social Media</span><span class="es">Redes Sociales</span>
            </h2>
        </div>

        <div class="social-media-grid">
            <!-- Column 1: Impact Video -->
            <div class="social-media-column">
                <h3 class="subsection-title">
                    <span class="en">UPLAM Impact Video</span><span class="es">Video de Impacto UPLAM</span>
                </h3>
                <div class="video-container video-container--bordered">
                    <iframe src="https://www.youtube.com/embed/EYABnBqOAgk"
                            title="UPLAM Impact Video"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                    </iframe>
                </div>
            </div>

            <!-- Column 2: Instagram Grid and Newsletter Form (Stacked) -->
            <div class="social-media-column social-media-column--stacked">
                <!-- Row 1: Instagram Grid Placeholder -->
                <div class="instagram-section">
                    <h3 class="subsection-title">
                        <span class="en">Latest from Instagram @urbanpromisehonduras</span><span class="es">Lo Más Reciente de Instagram @urbanpromisehonduras</span>
                    </h3>
                    <div class="instagram-grid">
                        <!-- Instagram Post Placeholders (6 posts) -->
                        <a href="https://www.instagram.com/urbanpromisehonduras/" target="_blank" class="instagram-post">
                            <img src="https://placehold.co/300x300/164E63/51CEEA?text=IG+Post+1" alt="Instagram Post 1" class="instagram-post-image">
                        </a>
                        <a href="https://www.instagram.com/urbanpromisehonduras/" target="_blank" class="instagram-post">
                            <img src="https://placehold.co/300x300/51CEEA/164E63?text=IG+Post+2" alt="Instagram Post 2" class="instagram-post-image">
                        </a>
                        <a href="https://www.instagram.com/urbanpromisehonduras/" target="_blank" class="instagram-post">
                            <img src="https://placehold.co/300x300/9cd639/164E63?text=IG+Post+3" alt="Instagram Post 3" class="instagram-post-image">
                        </a>
                        <a href="https://www.instagram.com/urbanpromisehonduras/" target="_blank" class="instagram-post">
                            <img src="https://placehold.co/300x300/164E63/9cd639?text=IG+Post+4" alt="Instagram Post 4" class="instagram-post-image">
                        </a>
                        <a href="https://www.instagram.com/urbanpromisehonduras/" target="_blank" class="instagram-post">
                            <img src="https://placehold.co/300x300/51CEEA/9cd639?text=IG+Post+5" alt="Instagram Post 5" class="instagram-post-image">
                        </a>
                        <a href="https://www.instagram.com/urbanpromisehonduras/" target="_blank" class="instagram-post">
                            <img src="https://placehold.co/300x300/9cd639/51CEEA?text=IG+Post+6" alt="Instagram Post 6" class="instagram-post-image">
                        </a>
                    </div>
                    <p class="instagram-link">
                        <a href="https://www.instagram.com/urbanpromisehonduras/" target="_blank">View All Posts on Instagram &rarr;</a>
                    </p>
                </div>

                <!-- Row 2: Newsletter Form -->
                <div class="newsletter-section">
                    <h3 class="subsection-title">
                        <span class="en">Subscribe to Our Newsletter</span><span class="es">Suscríbete a Nuestro Boletín</span>
                    </h3>
                    <form class="newsletter-form">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="newsletter-first-name" class="sr-only">First Name</label>
                                <input type="text" id="newsletter-first-name" class="input-field" data-i18n-placeholder="form_first_name_placeholder" required>
                            </div>
                            <div class="form-group">
                                <label for="newsletter-last-name" class="sr-only">Last Name</label>
                                <input type="text" id="newsletter-last-name" class="input-field" data-i18n-placeholder="form_last_name_placeholder" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="newsletter-email" class="sr-only">Email Address</label>
                            <input type="email" id="newsletter-email" class="input-field" data-i18n-placeholder="form_email_placeholder" required>
                        </div>
                        <button type="submit" class="button button-green">
                            <span class="en">Subscribe</span><span class="es">Suscribirse</span>
                        </button>
                        <div id="subscribe-message" class="subscribe-message" aria-live="polite"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>