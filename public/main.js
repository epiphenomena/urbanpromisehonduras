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
    document.querySelectorAll('.modal-program-detail').forEach(panel => { // Changed class name
        panel.style.display = 'none';
    });

    // Show the specific program's detail section
    const programPanel = document.getElementById(`modal-content-${programKey}`);
    if (programPanel) {
        programPanel.style.display = 'block';
    }

    // Show the modal
    modal.classList.add('is-open');
    document.body.classList.add('modal-open');
}

// Function to close the program detail modal
function closeModal(event) {
    const modal = document.getElementById('program-modal');
    if (!modal) return;

    // If event is provided (i.e., not called directly from a button with onClick)
    // and the click target is inside modal-content, do not close the modal
    if (event && event.target.closest('.modal-content') && !event.target.closest('.modal-close-button')) {
        return;
    }

    modal.classList.remove('is-open');
    document.body.classList.remove('modal-open');

    // Optionally hide the active program panel when modal closes
    document.querySelectorAll('.modal-program-detail').forEach(panel => {
        panel.style.display = 'none';
    });
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
    console.log("Saved Language:", savedLang)

    const hamburgerButton = document.getElementById('hamburger-button');
    const mobileMenuCloseButton = document.getElementById('mobile-menu-close');
    const sidebarNav = document.getElementById('side-menu');
    const navLinks = sidebarNav ? sidebarNav.querySelectorAll('.nav-link') : [];

    if (hamburgerButton && sidebarNav) {
        hamburgerButton.addEventListener('click', () => {
            sidebarNav.classList.add('is-open');
            hamburgerButton.classList.add('is-hidden'); // Hide hamburger when menu opens
        });
    }

    if (mobileMenuCloseButton && sidebarNav) {
        mobileMenuCloseButton.addEventListener('click', () => {
            sidebarNav.classList.remove('is-open');
            hamburgerButton.classList.remove('is-hidden'); // Show hamburger when menu closes
        });
    }

    // Handle clicks on program buttons to open modals
    document.querySelectorAll('button[data-program-key]').forEach(button => {
        button.addEventListener('click', (event) => {
            const programKey = event.currentTarget.dataset.programKey;
            openModal(programKey);
        });
        console.log("added open modal handler to:", button);
    });

    // Handle closing modal when close button is clicked
    const programModal = document.getElementById('program-modal');
    const modalCloseButton = programModal ? programModal.querySelector('.modal-close-button') : null;

    if (modalCloseButton) {
        modalCloseButton.addEventListener('click', closeModal);
    }

    // Handle closing modal when clicking outside the modal content
    if (programModal) {
        programModal.addEventListener('click', closeModal);
    }

    // Close menu when a navigation link is clicked (for smooth scrolling)
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (sidebarNav && sidebarNav.classList.contains('is-open')) {
                sidebarNav.classList.remove('is-open');
                hamburgerButton.classList.remove('is-hidden'); // Show hamburger when menu closes
            }
        });
    });
});