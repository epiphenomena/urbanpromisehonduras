<style>
/* Footer */
footer {
    background-color: var(--color-primary);
    color: white;
    padding: 2rem var(--content-padding);
    text-align: center;
    margin-top: 2.5rem;
}

.footer-content {
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 1rem;
    justify-content: space-between;
}

@media (min-width: 768px) {
    footer {
        margin-left: var(--sidebar-width);
    }
    .footer-content {
        flex-direction: row;
    }
}

.footer-social-links a {
    color: white;
    margin: 0 0.5rem;
    text-decoration: underline;
}

.footer-social-links a:hover {
    color: var(--color-accent-blue);
}
</style>
<footer>
    <div class="footer-content">
        <div class="footer-social-links">
            <a href="https://www.facebook.com/urbanpromisehonduras" target="_blank" aria-label="Facebook"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-facebook-icon lucide-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg></a>
            <a href="https://www.instagram.com/urbanpromisehonduras" target="_blank" aria-label="Instagram"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-instagram-icon lucide-instagram"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/></svg></a>
            <!-- Add more social links as needed -->
        </div>
        <p>&copy; <?php echo date("Y"); ?> UrbanPromise Honduras, LLC</p>
    </div>
</footer>

<!-- Close html -->
    </div> <!-- Close .site-container -->
    <script type="module"><?php echo file_get_contents(__DIR__ . '/main.js'); ?></script>
</body>
</html>