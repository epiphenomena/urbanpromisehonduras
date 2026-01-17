<style>
/* VIDEO */
#latin-america .video-wrapper {
    position: relative;
    width: 100%;
    padding-top: 56.25%;
}

#latin-america .video-wrapper iframe {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
}

/* CAMPUS GRID */
#latin-america .campus-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1rem;
    margin-bottom: 1.75rem;
}

/* FIXED: NO CROPPING */
#latin-america .campus-grid img {
    width: 100%;
    height: 140px;
    object-fit: contain; /* 👈 KEY FIX */
    background: #f3f4f6;
    border-radius: 0.75rem;
    padding: 0.5rem;
}

/* BUTTON */
#latin-america .campus-button {
    display: inline-block;
    padding: 1rem 2.25rem;
    background: var(--color-primary);
    color: #ffffff;
    font-weight: 800;
    font-size: 1.1rem;
    border-radius: 0.75rem;
    text-decoration: none;
    box-shadow: 0 8px 16px rgba(0,0,0,0.2);
    transition: transform 0.2s ease, background 0.2s ease;
}

#latin-america .campus-button:hover {
    transform: translateY(-2px);
}

/* RESPONSIVE */
@media (max-width: 1024px) {
    #latin-america .la-grid {
        grid-template-columns: 1fr;
    }

    #latin-america .campus-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}
</style>

<div class="la-column">
    <div class="panel" style="background:#000;">
        <div class="video-wrapper">
            <iframe
                src="https://www.youtube.com/embed/OK68If0WFMU"
                title="UPLAM Video"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>
    </div>

    <div class="panel" style="padding:2rem;text-align:center;">
        <h3 style="font-size:1.5rem;font-weight:900;margin-bottom:1.25rem;color:var(--color-primary);">
            Our UPLAM Campus
        </h3>

        <div class="campus-grid">
            <img src="media/CAMPUS 1.jpg" alt="Campus 1">
            <img src="media/CAMPUS 2.jpg" alt="Campus 2">
            <img src="media/CAMPUS 3.jpg" alt="Campus 3">
            <img src="media/CAMPUS 4.jpg" alt="Campus 4">
        </div>

        <a
            href="https://padlet.com/david3067/uplam-campus-2025-update-xllu05fx7xijexg7"
            target="_blank"
            class="campus-button">
            View Campus Update
        </a>
    </div>
</div>
