<style>
/* ===== LATIN AMERICA TWO-COLUMN LAYOUT (FIXED CAMPUS IMAGES) ===== */
#latin-america {
    max-width: 1920px;
    margin: 0 auto 4rem auto;
    padding: 3rem;
    background: rgba(22, 78, 99, 0.05);
    border-radius: 1rem;
}

/* FORCE TWO COLUMNS */
#latin-america .la-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 2.5rem;
    align-items: start;
}

/* LEFT & RIGHT COLUMNS */
#latin-america .la-column {
    display: flex;
    flex-direction: column;
    gap: 2.5rem;
}

/* PANELS */
#latin-america .panel {
    background: #ffffff;
    border-radius: 1rem;
    box-shadow: 0 12px 24px rgba(0,0,0,0.12);
    overflow: hidden;
}

#latin-america .panel-header {
    padding: 1rem 1.25rem;
    font-weight: 800;
    text-align: center;
    color: var(--color-primary);
}

/* MAP IMAGES */
#latin-america .panel img.map-image {
    width: 100%;
    height: 320px;
    object-fit: cover;
}
</style>

<div class="la-column">
    <div class="panel">
        <div class="panel-header">
            Where we are located – Copán Ruinas, Copán, Honduras
        </div>
        <img src="media/Honduras.jpg" alt="Honduras Map" class="map-image">
    </div>

    <div class="panel">
        <div class="panel-header">
            Regional Expansion: Mexico, Honduras, and Colombia (Bogotá, Cali, Villa Gorgona)
        </div>
        <img src="media/UPLAM map.jpg" alt="UPLAM Regional Map" class="map-image">
    </div>
</div>
