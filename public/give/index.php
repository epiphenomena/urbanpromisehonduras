<?php include '../layout_top.php'; ?>
<?php include '../header.php'; ?>
<?php include '../menu.php'; ?>

<!-- Main Content Wrapper -->
<main class="main-content">
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
        <h1><span class="en">Give Hope, Change Lives</span><span class="es">Da Esperanza, Cambia Vidas</span></h1>
        <p><span class="en">Your generosity empowers us to provide education, mentorship, and vital resources to youth in Honduras. Every contribution, big or small, creates lasting impact.</span><span class="es">Su generosidad nos permite brindar educación, tutoría y recursos vitales a los jóvenes en Honduras. Cada contribución, grande o pequeña, crea un impacto duradero.</span></p>
        <a href="#giving-options" class="button button-accent-green button-large"><span class="en">Explore Giving Options</span><span class="es">Explorar Opciones de Donación</span></a>
    </div>
</section>

    <section class="section-content-container">
        <h2><span class="en">Giving Options</span><span class="es">Opciones de Donación</span></h2>
        <p><span class="en">Your support makes a profound difference in the lives of children and families in Honduras.</span><span class="es">Su apoyo hace una profunda diferencia en las vidas de los niños y las familias en Honduras.</span></p>

        <h3><span class="en">Ways to Give:</span><span class="es">Formas de Donar:</span></h3>
        <div class="button-group">
            <a href="#" class="button button-primary button-large"><span class="en">Donate Online</span><span class="es">Donar en Línea</span></a>
            <a href="#" class="button button-secondary button-large"><span class="en">Become a Monthly Giver (The Circus)</span><span class="es">Convertirse en Donante Mensual (El Circo)</span></a>
            <a href="#" class="button button-primary button-large"><span class="en">Give via PayPal</span><span class="es">Donar vía PayPal</span></a>
        </div>

        <h3><span class="en">Mailing Address</span><span class="es">Dirección Postal</span></h3>
        <p>
            <span class="en">Urban Promise Honduras <br>
            P.O. Box 1234 <br>
            Anytown, USA 12345</span>
            <span class="es">Urban Promise Honduras <br>
            Apartado Postal 1234 <br>
            Cualquier Ciudad, EE. UU. 12345</span>
        </p>

        <h3><span class="en">Stock Gifts</span><span class="es">Donaciones de Acciones</span></h3>
        <p><span class="en">Instructions for making stock gifts can be found <a href="#">here</a> or by contacting us directly at <a href="mailto:info@urbanpromisehonduras.org">info@urbanpromisehonduras.org</a>.</span><span class="es">Las instrucciones para hacer donaciones de acciones se pueden encontrar <a href="#">aquí</a> o contactándonos directamente en <a href="mailto:info@urbanpromisehonduras.org">info@urbanpromisehonduras.org</a>.</span></p>

        <h3><span class="en">The Circus: Monthly Givers Group</span><span class="es">El Circo: Grupo de Donantes Mensuales</span></h3>
        <p><span class="en">Join "The Circus" and become a vital part of our ongoing mission. Monthly giving provides sustainable support, allowing us to plan long-term programs and impact more lives.</span><span class="es">Únase a "El Circo" y conviértase en una parte vital de nuestra misión continua. Las donaciones mensuales proporcionan un apoyo sostenible, lo que nos permite planificar programas a largo plazo e impactar más vidas.</span></p>
        <p><a href="#" class="button button-primary"><span class="en">Learn More & Join The Circus</span><span class="es">Saber Más & Unirse al Circo</span></a></p>

        <h3><span class="en">Financial Transparency</span><span class="es">Transparencia Financiera</span></h3>
        <p><span class="en">We are committed to financial transparency. Review our recent financial documents:</span><span class="es">Estamos comprometidos con la transparencia financiera. Revise nuestros documentos financieros recientes:</span></p>
        <ul>
            <li><a href="#"><span class="en">Annual Report 2023</span><span class="es">Informe Anual 2023</span></a></li>
            <li><a href="#"><span class="en">Annual Report 2022</span><span class="es">Informe Anual 2022</span></a></li>
            <li><a href="#"><span class="en">IRS Form 990 - 2023</span><span class="es">Formulario 990 del IRS - 2023</span></a></li>
            <li><a href="#"><span class="en">IRS Form 990 - 2022</span><span class="es">Formulario 990 del IRS - 2022</span></a></li>
        </ul>

        <h3><span class="en">Non-Profit Transparency Badges</span><span class="es">Insignias de Transparencia de Organizaciones sin Fines de Lucro</span></h3>
        <div class="transparency-badges">
            <img src="https://placehold.co/100x100?text=Charity+Navigator" alt="Charity Navigator Badge">
            <img src="https://placehold.co/100x100?text=Guidestar" alt="Guidestar Badge">
            <img src="https://placehold.co/100x100?text=BBB" alt="BBB Accredited Charity Badge">
        </div>
    </section>
</main>


<?php include '../footer.php'; ?>
<?php include '../layout_bottom.php'; ?>