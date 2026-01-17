<style>
/* ===============================
   STATIC IMAGE GRID (1:1)
================================ */
.uplam-static-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 0.75rem;
}

.uplam-static-grid img {
    width: 100%;
    aspect-ratio: 1 / 1;
    object-fit: cover;
    border-radius: 0.5rem;
    cursor: pointer;
    transition: transform 0.2s, box-shadow 0.2s;
}

.uplam-static-grid img:hover {
    transform: scale(1.04);
    box-shadow: 0 6px 12px rgba(0,0,0,0.15);
}

/* ===============================
   BOARD TEXT
================================ */
.uplam-board {
    margin-top: 1.5rem;
    font-size: 0.95rem;
    line-height: 1.6;
    color: #1f2937;
}

.uplam-board strong {
    display: block;
    margin-bottom: 0.5rem;
    font-size: 1rem;
}

/* ===============================
   MODAL
================================ */
.uplam-modal {
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.75);
    display: none;
    align-items: center;
    justify-content: center;
    z-index: 9999;
}

.uplam-modal.active {
    display: flex;
}

.uplam-modal-content {
    background: white;
    max-width: 90%;
    max-height: 90%;
    padding: 1.5rem;
    border-radius: 1rem;
    overflow-y: auto;
    position: relative;
}

.uplam-modal-close {
    position: absolute;
    top: 0.75rem;
    right: 1rem;
    font-size: 2rem;
    background: none;
    border: none;
    cursor: pointer;
}

.uplam-modal-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 0.75rem;
}

.uplam-modal-grid img {
    width: 100%;
    aspect-ratio: 1 / 1;
    object-fit: cover;
    border-radius: 0.5rem;
}
</style>

<div class="uplam-static-grid">
    <img src="media/CAMPUS 1.jpg" class="open-modal">
    <img src="media/CAMPUS 2.jpg" class="open-modal">
    <img src="media/CAMPUS 3.jpg" class="open-modal">
    <img src="media/CAMPUS 4.jpg" class="open-modal">
</div>

<!-- BOARD OF DIRECTORS TEXT -->
<div class="uplam-board">
    <strong>Board of Directors</strong>
    Luis Ortiz – Ottawa, IL<br>
    Fernando Martínez – Boston, MA<br>
    Marty Morrison – Houston, TX<br>
    Jon Lane – Charlotte, NC<br>
    Dave Doble – Surrey, BC, Canada
</div>

<!-- MODAL -->
<div class="uplam-modal" id="uplamModal">
    <div class="uplam-modal-content">
        <button class="uplam-modal-close" id="closeModal">&times;</button>

        <div class="uplam-modal-grid">
            <img src="media/CAMPUS 1.jpg">
            <img src="media/CAMPUS 2.jpg">
            <img src="media/CAMPUS 3.jpg">
            <img src="media/CAMPUS 4.jpg">
            <img src="media/CAMPUS 1.jpg">
            <img src="media/CAMPUS 2.jpg">
            <img src="media/CAMPUS 3.jpg">
            <img src="media/CAMPUS 4.jpg">
            <img src="media/CAMPUS 1.jpg">
            <img src="media/CAMPUS 2.jpg">
            <img src="media/CAMPUS 3.jpg">
            <img src="media/CAMPUS 4.jpg">
            <img src="media/CAMPUS 1.jpg">
            <img src="media/CAMPUS 2.jpg">
            <img src="media/CAMPUS 3.jpg">
            <img src="media/CAMPUS 4.jpg">
        </div>
    </div>
</div>

<script>
/* CAROUSEL */
(function () {
    const track = document.querySelector(".carousel-track");
    const slides = document.querySelectorAll(".carousel-slide");
    const nextBtn = document.querySelector(".carousel-btn.next");
    const prevBtn = document.querySelector(".carousel-btn.prev");

    if (track && nextBtn && prevBtn) {
        let index = 0;

        function update() {
            track.style.transform = `translateX(-${index * 100}%)`;
        }

        nextBtn.onclick = () => {
            index = (index + 1) % slides.length;
            update();
        };

        prevBtn.onclick = () => {
            index = (index - 1 + slides.length) % slides.length;
            update();
        };

        setInterval(() => {
            index = (index + 1) % slides.length;
            update();
        }, 4000);
    }
})();

/* MODAL */
const modal = document.getElementById("uplamModal");
const openBtns = document.querySelectorAll(".open-modal");
const closeBtn = document.getElementById("closeModal");

if (modal) {
    openBtns.forEach(img => {
        img.addEventListener("click", () => {
            modal.classList.add("active");
        });
    });

    if (closeBtn) {
        closeBtn.addEventListener("click", () => {
            modal.classList.remove("active");
        });
    }

    modal.addEventListener("click", (e) => {
        if (e.target === modal) modal.classList.remove("active");
    });
}
</script>