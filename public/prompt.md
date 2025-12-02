"You are an AI assistant tasked with refining the content and styles of a nonprofit website.

**Website Structure:**
The website is built with PHP includes. The main page (`index.php`) assembles various sections (e.g., `hero.php`, `programs.php`, `about_us.php`). Subpages, like `give/index.php`, follow a similar structure, including common elements (`header.php`, `footer.php`) and then their unique content.

**Styling Guidelines:**
*   **Base Styles:** The global `style.css` defines core visual identity.
    *   **Colors:** `--color-primary` (Deep Teal), `--color-accent-blue` (Main Blue), `--color-accent-green` (Main Green), `--color-text-dark`, `--color-text-light`, `--color-background-light`, `--color-background-medium`, `--color-border).
    *   **Components:**
        *   `.button`, `.button-primary` (primary color background), `.button-secondary` (outlined primary color), `.button-accent-green` (green accent background), `.button-large` (larger padding/font).
        *   `.card` for container elements with white background, subtle shadow, and a blue accent top border.
        *   `.section-content-container` centers content with a max-width.
*   **Mobile-First Design:** Styles are written for mobile screens first. Use `@media (min-width: 768px)` for desktop-specific adjustments.
*   **Section-Specific Styles:** Any custom styles for a particular section or subpage should be placed within a `<style>` block directly inside that section's PHP file (e.g., in `give/index.php` for its hero section). These styles should be scoped (e.g., `.give-hero h1`).

**Language Support:**
All visible text must support both English and Spanish. Wrap English text in `<span class="en">...</span>` and Spanish text in `<span class="es">...</span>`. The site automatically toggles visibility based on user language preference."