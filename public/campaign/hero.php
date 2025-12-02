<style>
/* Specific styles for the Campaign page hero */
.campaign-hero {
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

.campaign-hero-bg-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('https://placehold.co/1200x600/164E63/FFFFFF?text=Campaign+Page+Hero');
    background-size: cover;
    background-position: center;
    z-index: 1;
}

.campaign-hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: var(--color-primary);
    opacity: 0.7;
    z-index: 2;
}

.campaign-hero-content {
    position: relative;
    z-index: 3;
    max-width: 800px;
    margin: 0 auto;
}

.campaign-hero h1 {
    color: white; /* Override default primary color for hero heading */
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

.campaign-hero p {
    font-size: 1.2rem;
    line-height: 1.6;
    margin-bottom: 1.5rem;
}
</style>

<section class="campaign-hero">
    <div class="campaign-hero-bg-image"></div>
    <div class="campaign-hero-overlay"></div>
    <div class="campaign-hero-content section-content-container">
        <h1>Building Futures: Our 2025 Impact Campaign</h1>
        <p>Support our mission to empower youth through education and community programs. Your donation today helps build a brighter tomorrow for hundreds of children.</p>
        <a href="#campaign-dashboard" class="button button-accent-green button-large">Donate Now</a>
    </div>
</section>