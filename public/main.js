// Mock translation data for elements that are difficult to manage with CSS alone (e.g., placeholders)
const translations = {
    'en': {
        'form_name_placeholder': 'Full Name',
        'form_address_placeholder': 'Address (Street, City, Zip)',
        'form_card_placeholder': 'Credit Card Number (e.g. **** 1234)',
        'form_first_name_placeholder': 'First Name',
        'form_last_name_placeholder': 'Last Name',
        'form_email_placeholder': 'Email Address',
        'subscribe_success': 'Thank you for subscribing! Check your email for confirmation.',
        'subscribe_error': 'Subscription failed. Please check your details and try again.'
    },
    'es': {
        'form_name_placeholder': 'Nombre Completo',
        'form_address_placeholder': 'Dirección (Calle, Ciudad, Código Postal)',
        'form_card_placeholder': 'Número de Tarjeta (ej. **** 1234)',
        'form_first_name_placeholder': 'Nombre',
        'form_last_name_placeholder': 'Apellido',
        'form_email_placeholder': 'Correo Electrónico',
        'subscribe_success': '¡Gracias por suscribirte! Revisa tu correo electrónico para confirmar.',
        'subscribe_error': 'Error al suscribirse. Por favor, verifica tus datos e inténtalo de nuevo.'
    }
};

const langEnBtn = document.getElementById('lang-en');
const langEsBtn = document.getElementById('lang-es');
const langToggleButtons = [langEnBtn, langEsBtn];
const activeClass = ['active']; // Updated class for active language button
const inactiveClass = []; // No specific inactive class, just remove active

// Function to update the language and highlight the active button
function setLanguage(lang) {
    // Store language preference in localStorage
    localStorage.setItem('language', lang);

    // 1. Set the class on the body
    document.body.classList.remove('lang-en', 'lang-es');
    document.body.classList.add(`lang-${lang}`);

    // 2. Update placeholder texts
    const currentPlaceholders = translations[lang];
    document.querySelectorAll('[data-i18n-placeholder]').forEach(element => {
        const key = element.getAttribute('data-i18n-placeholder');
        if (currentPlaceholders[key]) {
            element.placeholder = currentPlaceholders[key];
        }
    });

    // 3. Update the button highlights
    langToggleButtons.forEach(button => {
        const isCurrent = button.id.includes(lang);
        if (isCurrent) {
            button.classList.add(...activeClass);
        } else {
            button.classList.remove(...activeClass);
        }
    });
}

// Function to open the program detail modal
function openModal(programKey) {
    const modal = document.getElementById('program-modal');
    
    // Hide all program detail sections
    document.querySelectorAll('.modal-content-panel').forEach(panel => {
        panel.style.display = 'none';
    });

    // Show the specific program's detail section
    const programPanel = document.getElementById(`modal-content-${programKey}`);
    if (programPanel) {
        programPanel.style.display = 'block';
    }

    // Show the modal
    modal.classList.remove('hidden'); // Assuming 'hidden' hides the modal via display: none;
    modal.classList.add('flex'); // Assuming 'flex' shows the modal via display: flex;
}


// Function to close the program detail modal
function closeModal(event) {
    // Close only if the click is on the background or the close button
    // Check if event is defined and target is not a child of modal-content, or if it's the close button itself
    const modal = document.getElementById('program-modal');
    if (!modal) return;

    if (event && event.target !== modal && !event.target.closest('.modal-content')) {
        return; // Clicked outside the modal content but not on the modal backdrop itself, nor on a close button
    }

    modal.classList.add('hidden');
    modal.classList.remove('flex');
}

// Newsletter Subscription Mockup handler
document.addEventListener('submit', function(e) {
    const newsletterForm = e.target.closest('.newsletter-form');
    if (newsletterForm) {
        e.preventDefault();

        const subscribeMessage = document.getElementById('subscribe-message');
        const firstName = newsletterForm.querySelector('#newsletter-first-name').value;
        const lastName = newsletterForm.querySelector('#newsletter-last-name').value;
        const email = newsletterForm.querySelector('#newsletter-email').value;

        const lang = localStorage.getItem('language') || 'en';
        const t = translations[lang];

        // Simple validation check
        if (firstName && lastName && email && email.includes('@')) {
            // Simulate successful submission
            subscribeMessage.textContent = t.subscribe_success;
            subscribeMessage.classList.remove('hidden', 'text-red-500'); // Assuming these were Tailwind
            subscribeMessage.classList.add('text-uph-main-green'); // New class from vanilla CSS
            newsletterForm.reset();
        } else {
            // Simulate failure
            subscribeMessage.textContent = t.subscribe_error;
            subscribeMessage.classList.remove('hidden', 'text-uph-main-green'); // Assuming these were Tailwind
            subscribeMessage.classList.add('text-red-500'); // Use standard red for error
        }

        // Clear message after 5 seconds
        setTimeout(() => {
            subscribeMessage.textContent = '';
            subscribeMessage.classList.add('hidden');
        }, 5000);
    }
});


// Mobile Menu Functionality
document.addEventListener('DOMContentLoaded', () => {
    // Initialize the site language on load
    const savedLang = localStorage.getItem('language') || 'en';
    setLanguage(savedLang);

    const hamburgerButton = document.getElementById('hamburger-button');
    const mobileMenuCloseButton = document.getElementById('mobile-menu-close');
    const sidebarNav = document.getElementById('side-menu');
    const navLinks = sidebarNav ? sidebarNav.querySelectorAll('.nav-link') : [];

    if (hamburgerButton && sidebarNav) {
        hamburgerButton.addEventListener('click', () => {
            sidebarNav.classList.add('is-open');
        });
    }

    if (mobileMenuCloseButton && sidebarNav) {
        mobileMenuCloseButton.addEventListener('click', () => {
            sidebarNav.classList.remove('is-open');
        });
    }

    // Close menu when a navigation link is clicked (for smooth scrolling)
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (sidebarNav && sidebarNav.classList.contains('is-open')) {
                sidebarNav.classList.remove('is-open');
            }
        });
    });
});