<style>
/* Latin America Section */
#latin-america .grid-container {
    display: grid;
    grid-template-columns: 1fr;
    gap: 1.5rem;
}

@media (min-width: 1024px) {
    #latin-america .grid-container {
        grid-template-columns: repeat(2, 1fr);
    }
}

#latin-america .grid-item {
    overflow: hidden;
}

#latin-america .grid-item.accent-green {
    border-top-color: var(--color-accent-green);
}
#latin-america .grid-item.accent-blue {
    border-top-color: var(--color-accent-blue);
}

#latin-america .map-image-container {
    height: 16rem; /* 256px */
    overflow: hidden;
}

#latin-america .map-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

#latin-america .map-caption {
    padding: 1rem;
    text-align: center;
}

#latin-america .map-text {
    font-weight: 600;
    color: var(--color-primary);
    margin: 0;
}

#latin-america .video-card {
    background-color: black; /* For video background */
}

#latin-america .campus-update-card {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 1.5rem;
}

#latin-america .campus-text {
    font-weight: 600;
    color: var(--color-primary);
    margin-bottom: 1rem;
}

#latin-america .campus-images {
    display: flex;
    gap: 0.5rem;
    justify-content: center;
    margin-bottom: 1.5rem;
}

#latin-america .campus-image {
    width: 3rem;
    height: 3rem;
    object-fit: cover;
    border-radius: 0.5rem;
    border: 1px solid var(--color-border);
}
</style>
<section id="latin-america" class="section-split section-split--reversed">
    <div class="section-split-content">
        <div class="section-header">
            <h2 class="section-title">
                <span class="en">From Honduras to Latin America</span><span class="es">De Honduras a América Latina</span>
            </h2>
        </div>
    </div>
    <div class="section-split-content">
        <div class="grid-container">
            <!-- Grid Item 1 (Top-Left): Honduras Map Placeholder -->
            <div class="grid-item card map-card accent-green">
                <div class="map-image-container">
                    <img src="https://placehold.co/600x400/9cd639/164E63?text=Map+of+Honduras%0A+%28Pin+on+Cop%C3%A1n+Ruinas%29"
                         alt="Map of Honduras with a pin on Copán Ruinas"
                         class="map-image">
                </div>
                <div class="map-caption">
                    <p class="map-text">
                        <span class="en">Where we are located - Copán Ruinas, Copán, Honduras</span><span class="es">Nuestra ubicación - Copán Ruinas, Copán, Honduras</span>
                    </p>
                </div>
            </div>

            <!-- Grid Item 2 (Top-Right): YouTube Video Embed -->
            <div class="grid-item card video-card accent-blue">
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/OK68If0WFMU"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                    </iframe>
                </div>
            </div>

            <!-- Grid Item 3 (Bottom-Left): Latin America Map Placeholder -->
            <div class="grid-item card map-card accent-green">
                <div class="map-image-container">
                    <img src="https://placehold.co/600x400/51CEEA/164E63?text=Map+of+Latin+America%0A+%28MX,+HND,+COL+Partners%29"
                         alt="Map of Latin America showing partner locations"
                         class="map-image">
                </div>
                <div class="map-caption">
                    <p class="map-text">
                        <span class="en">Regional Expansion: Mexico, Honduras, and Colombia (Bogotá, Cali, Villa Gorgona)</span><span class="es">Expansión Regional: México, Honduras y Colombia (Bogotá, Cali, Villa Gorgona)</span>
                    </p>
                </div>
            </div>

            <!-- Grid Item 4 (Bottom-Right): Button and Campus Update -->
            <div class="grid-item card campus-update-card accent-blue">
                <p class="campus-text">
                    <span class="en">our UPLAM Campus</span><span class="es">nuestro Campus UPLAM</span>
                </p>

                <div class="campus-images">
                    <img src="https://placehold.co/50x50/F3F4F6/9CA3AF?text=1" alt="Campus Photo 1" class="campus-image">
                    <img src="https://placehold.co/50x50/F3F4F6/9CA3AF?text=2" alt="Campus Photo 2" class="campus-image">
                    <img src="https://placehold.co/50x50/F3F4F6/9CA3AF?text=3" alt="Campus Photo 3" class="campus-image">
                    <img src="https://placehold.co/50x50/F3F4F6/9CA3AF?text=4" alt="Campus Photo 4" class="campus-image">
                </div>

                <a href="https://padlet.com/david3067/uplam-campus-2025-update-xllu05fx7xijexg7"
                   target="_blank"
                   class="button button-primary button-large">
                    <span class="en">View Campus Update</span><span class="es">Ver Actualización del Campus</span>
                </a>
            </div>
        </div>
    </div>
</section>