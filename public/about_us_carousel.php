<style>
/* ===============================
   TWO COLUMN LAYOUT
================================ */
.uplam-gallery-section {
    max-width: 1200px;
    margin: 0 auto;
    padding: 3rem 1rem;
}

.uplam-gallery-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 2rem;
}

@media (min-width: 1024px) {
    .uplam-gallery-grid {
        grid-template-columns: 1fr 1fr;
        align-items: start;
    }
}

/* ===============================
   CAROUSEL
================================ */
.uplam-carousel {
    position: relative;
    width: 100%;
    overflow: hidden;
    border-radius: 1rem;
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
}

.carousel-track {
    display: flex;
    transition: transform 0.6s ease-in-out;
}

.carousel-slide {
    min-width: 100%;
    height: 420px;
}

.carousel-slide img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.carousel-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(0,0,0,0.6);
    color: white;
    border: none;
    font-size: 2rem;
    width: 48px;
    height: 48px;
    border-radius: 50%;
    cursor: pointer;
    z-index: 2;
}

.carousel-btn.prev { left: 1rem; }
.carousel-btn.next { right: 1rem; }

.carousel-btn:hover {
    background: rgba(0,0,0,0.85);
}
</style>

<div class="uplam-carousel">
    <div class="carousel-track">
        <div class="carousel-slide"><img src="media/CAMPUS 1.jpg"></div>
        <div class="carousel-slide"><img src="media/CAMPUS 2.jpg"></div>
        <div class="carousel-slide"><img src="media/CAMPUS 3.jpg"></div>
        <div class="carousel-slide"><img src="media/CAMPUS 4.jpg"></div>
    </div>
    <button class="carousel-btn prev">‹</button>
    <button class="carousel-btn next">›</button>
</div>