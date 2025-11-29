<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>

    <!-- 2. Main Content Wrapper -->
    <!-- Content container shifts right of the sidebar on desktop -->
    <div class="md:ml-64 p-4 md:p-10 min-h-screen">
        <!-- Temporary Mobile Header for visibility -->
        <header class="block md:hidden bg-white shadow-md p-4 mb-4 rounded-xl">
            <p class="text-sm text-center text-red-500">
                NOTE: This is the **Desktop/Tablet Fixed Sidebar** design. For a mobile version, we would typically place a sticky header here with a hamburger icon.
            </p>
        </header>

        <!-- Main Content (Placeholder Sections for Scrolling) -->
        <main class="max-w-7xl mx-auto">
            <?php include 'hero.php'; ?>
            <?php include 'programs.php'; ?>
            <?php include 'testimonials.php'; ?>
            <?php include 'latin_america.php'; ?>
            <?php include 'social_media.php'; ?>
            <?php include 'about_us.php'; ?>
        </main>
    </div>

<?php include 'modal.php'; ?>
<?php include 'footer.php'; ?>
