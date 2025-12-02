<style>
/* Specific styles for the Give page hero */
.give-hero {
    position: relative;
    padding: 6rem var(--content-padding); /* Adjust padding for visual balance */
    color: var(--color-text-light);
    text-align: center;
    overflow: hidden;
    min-height: 40vh; /* Ensure a decent height */
    display: flex;
    align-items: center;
    justify-content: center;
}

.give-hero-bg-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('https://placehold.co/1200x600/164E63/FFFFFF?text=Give+Page+Hero');
    background-size: cover;
    background-position: center;
    z-index: 1;
}

.give-hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: var(--color-primary);
    opacity: 0.7;
    z-index: 2;
}

.give-hero-content {
    position: relative;
    z-index: 3;
    max-width: 800px;
    margin: 0 auto;
}

.give-hero h1 {
    color: white; /* Override default primary color for hero heading */
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

.give-hero p {
    font-size: 1.2rem;
    line-height: 1.6;
    margin-bottom: 1.5rem;
}
</style>

<section class="give-hero">
    <div class="give-hero-bg-image"></div>
    <div class="give-hero-overlay"></div>
    <div class="give-hero-content section-content-container">
        <h1>Give Hope, Change Lives</h1>
        <p>Your generosity empowers us to provide education, mentorship, and vital resources to youth in Honduras. Every contribution, big or small, creates lasting impact.</p>
        <a href="#giving-options" class="button button-accent-green button-large">Explore Giving Options</a>
    </div>
</section>