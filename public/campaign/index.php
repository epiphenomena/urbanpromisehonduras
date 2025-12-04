<?php include '../header.php'; ?>
<?php include '../menu.php'; ?>

<!-- Main Content Wrapper -->
<main class="main-content">
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
        <h1><span class="en">Building Futures: Our 2025 Impact Campaign</span><span class="es">Construyendo Futuros: Nuestra Campaña de Impacto 2025</span></h1>
        <p><span class="en">Support our mission to empower youth through education and community programs. Your donation today helps build a brighter tomorrow for hundreds of children.</span><span class="es">Apoya nuestra misión de empoderar a los jóvenes a través de la educación y programas comunitarios. Tu donación hoy ayuda a construir un mañana más brillante para cientos de niños.</span></p>
        <a href="#campaign-dashboard" class="button button-accent-green button-large"><span class="en">Donate Now</span><span class="es">Donar Ahora</span></a>
    </div>
</section>

    <section class="section-content-container">
        <h2><span class="en">Our Current Campaign: Building Futures</span><span class="es">Nuestra Campaña Actual: Construyendo Futuros</span></h2>
        <p><span class="en">Join us in making a tangible difference. Every dollar contributes directly to providing essential resources and opportunities for children in Honduras.</span><span class="es">Únase a nosotros para hacer una diferencia tangible. Cada dólar contribuye directamente a proporcionar recursos esenciales y oportunidades para los niños en Honduras.</span></p>

        <div class="campaign-dashboard">
            <!-- JavaScript variables for easy editing -->
            <script>
                const fundraisingGoal = 25000; // Manually editable goal
                const amountRaised = 18750; // Manually editable raised amount
            </script>

            <h3><span class="en">Progress Update:</span><span class="es">Actualización del Progreso:</span></h3>
            <div class="progress-bar-container">
                <div class="progress-bar" style="width: calc((amountRaised / fundraisingGoal) * 100);"></div>
            </div>
            <p class="progress-text">
                <span class="en">$<span id="amountRaisedDisplay"></span> raised of $<span id="fundraisingGoalDisplay"></span> goal (<span id="percentageDisplay"></span>%)</span>
                <span class="es">$<span id="amountRaisedDisplay"></span> recaudados de $<span id="fundraisingGoalDisplay"></span> meta (<span id="percentageDisplay"></span>%)</span>
            </p>

            <div class="call-to-action-buttons">
                <a href="#" class="button button-primary button-large"><span class="en">Donate to this Campaign</span><span class="es">Donar a esta Campaña</span></a>
                <a href="#" class="button button-secondary button-large"><span class="en">Share this Campaign</span><span class="es">Compartir esta Campaña</span></a>
            </div>

            <hr>

            <h3><span class="en">Our Amazing Donors:</span><span class="es">Nuestros Donantes Asombrosos:</span></h3>
            <ul class="donor-wall">
                <li><span class="en">Anonymous Donor</span><span class="es">Donante Anónimo</span> - $500</li>
                <li>Jane Doe - $100</li>
                <li>John Smith - $250</li>
                <li>The Generous Family Foundation - $5000</li>
                <li>Community Supporters - $75</li>
                <li><a href="#"><span class="en">Your Name Here!</span><span class="es">¡Tu Nombre Aquí!</span></a></li>
            </ul>
        </div>
    </section>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const amountRaisedDisplay = document.getElementById('amountRaisedDisplay');
        const fundraisingGoalDisplay = document.getElementById('fundraisingGoalDisplay');
        const percentageDisplay = document.getElementById('percentageDisplay');
        const progressBar = document.querySelector('.progress-bar');

        if (amountRaisedDisplay && fundraisingGoalDisplay && percentageDisplay && progressBar) {
            amountRaisedDisplay.textContent = amountRaised.toLocaleString();
            fundraisingGoalDisplay.textContent = fundraisingGoal.toLocaleString();

            const percentage = (amountRaised / fundraisingGoal) * 100;
            percentageDisplay.textContent = percentage.toFixed(2); // Display with 2 decimal places

            progressBar.style.width = percentage + '%';
        }
    });
</script>

<style>
    /* Campaign specific styles */
    .campaign-dashboard {
        margin-top: 2rem;
        padding: 1.5rem;
        background-color: var(--color-background-light);
        border-radius: 0.75rem;
        box-shadow: 0 4px 6px rgba(0,0,0,0.05);
    }

    .progress-bar-container {
        width: 100%;
        background-color: var(--color-background-medium);
        border-radius: 0.5rem;
        height: 25px;
        margin-top: 1rem;
        overflow: hidden;
    }

    .progress-bar {
        height: 100%;
        background-color: var(--color-accent-green);
        border-radius: 0.5rem;
        text-align: center;
        color: white;
        line-height: 25px;
        transition: width 0.5s ease-in-out;
        min-width: 0%; /* Ensures bar is visible even with 0% progress */
    }

    .progress-text {
        text-align: center;
        margin-top: 0.5rem;
        font-size: 1.1rem;
        font-weight: 600;
        color: var(--color-primary);
    }

    .call-to-action-buttons {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        margin-top: 2rem;
        margin-bottom: 2rem;
    }

    @media (min-width: 768px) {
        .call-to-action-buttons {
            flex-direction: row;
            justify-content: center;
        }
    }

    .donor-wall {
        list-style: none;
        padding: 0;
        margin-top: 1.5rem;
        columns: 1; /* Default for mobile */
    }

    .donor-wall li {
        background-color: var(--color-background-medium);
        padding: 0.75rem 1rem;
        margin-bottom: 0.5rem;
        border-radius: 0.5rem;
        font-size: 0.95rem;
    }

    @media (min-width: 768px) {
        .donor-wall {
            columns: 2; /* Two columns for desktop */
            column-gap: 1.5rem;
        }
    }
</style>


<?php include '../footer.php'; ?>