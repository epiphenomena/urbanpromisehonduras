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
    max-width: var(--content-max-width);
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 1rem;
}

@media (min-width: 768px) {
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
                <p>&copy; <?php echo date("Y"); ?> Urban Promise Honduras. All rights reserved.</p>
                <div class="footer-social-links">
                    <a href="https://www.facebook.com/urbanpromisehonduras" target="_blank" aria-label="Facebook">Facebook</a>
                    <a href="https://www.instagram.com/urbanpromisehonduras" target="_blank" aria-label="Instagram">Instagram</a>
                    <!-- Add more social links as needed -->
                </div>
            </div>
        </footer>
    </div> <!-- Close .site-container -->
    <script><?php echo file_get_contents('main.js'); ?></script>
</body>
</html>