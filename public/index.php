<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>

<!-- Main Content Wrapper -->
<main class="main-content">
    
    <!-- 1. Hero Section (Standard: Left Story 60%, Right Donate 40%) -->
    <section id="hero" class="section-split">
        <div class="section-split-content">
            <?php include 'hero_story.php'; ?>
        </div>
        <div class="section-split-content">
            <?php include 'hero_donate.php'; ?>
        </div>
    </section>

    <!-- 2. Social Media Section (Reversed: Left Video 40%, Right Instagram 60%) -->
    <section id="social-media" class="section-split section-split--reversed">
        <div class="section-split-content">
            <?php include 'social_media_video_newsletter.php'; ?>
        </div>
        <div class="section-split-content">
            <?php include 'social_media_instagram.php'; ?>
        </div>
    </section>

    <!-- 3. Programs Section (Standard: Left Mission 60%, Right Programs 40%) -->
    <section id="programs" class="section-split">
        <div class="section-split-content">
            <?php include 'programs_mission.php'; ?>
        </div>
        <div class="section-split-content">
            <?php include 'programs_core.php'; ?>
        </div>
    </section>

    <!-- 4. Testimonials Section (Reversed: Left Empty 40%, Right Voices 60%) -->
    <section id="testimonials" class="section-split section-split--reversed">
        <div class="section-split-content">
            <!-- Optional Left Content (e.g., Image or decorative) -->
             <img src="media/testimonial (1).jpg" alt="Testimonials Background" style="width:100%; height:100%; object-fit:cover; border-radius:1rem; opacity:0.8;">
        </div>
        <div class="section-split-content">
            <?php include 'testimonials_voices.php'; ?>
        </div>
    </section>

    <!-- 5. Latin America Section (Standard: Left Maps 60%, Right Campus 40%) -->
    <section id="latin-america" class="section-split">
        <div class="section-split-content">
            <?php include 'latin_america_maps.php'; ?>
        </div>
        <div class="section-split-content">
            <?php include 'latin_america_campus.php'; ?>
        </div>
    </section>

    <!-- 6. About Us Section (Reversed: Left Carousel 40%, Right Board 60%) -->
    <section id="about-us" class="section-split section-split--reversed">
        <div class="section-split-content">
            <?php include 'about_us_carousel.php'; ?>
        </div>
        <div class="section-split-content">
            <?php include 'about_us_board.php'; ?>
        </div>
    </section>

</main>

<?php include 'modal.php'; ?>
<?php include 'footer.php'; ?>