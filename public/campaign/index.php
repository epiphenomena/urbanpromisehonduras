<?php include '../layout_top.php'; ?>
<?php include '../header.php'; ?>
<?php include '../menu.php'; ?>

<!-- Main Content Wrapper -->
<main class="main-content">
    <?php include 'hero.php'; ?>

    <section class="section-content-container">
        <h2>Our Current Campaign: Building Futures</h2>
        <p>Join us in making a tangible difference. Every dollar contributes directly to providing essential resources and opportunities for children in Honduras.</p>

        <div class="campaign-dashboard">
            <!-- JavaScript variables for easy editing -->
            <script>
                const fundraisingGoal = 25000; // Manually editable goal
                const amountRaised = 18750; // Manually editable raised amount
            </script>

            <h3>Progress Update:</h3>
            <div class="progress-bar-container">
                <div class="progress-bar" style="width: calc((amountRaised / fundraisingGoal) * 100);"></div>
            </div>
            <p class="progress-text">
                $<span id="amountRaisedDisplay"></span> raised of $<span id="fundraisingGoalDisplay"></span> goal (<span id="percentageDisplay"></span>%)
            </p>

            <div class="call-to-action-buttons">
                <a href="#" class="button button-primary button-large">Donate to this Campaign</a>
                <a href="#" class="button button-secondary button-large">Share this Campaign</a>
            </div>

            <hr>

            <h3>Our Amazing Donors:</h3>
            <ul class="donor-wall">
                <li>Anonymous Donor - $500</li>
                <li>Jane Doe - $100</li>
                <li>John Smith - $250</li>
                <li>The Generous Family Foundation - $5000</li>
                <li>Community Supporters - $75</li>
                <li><a href="#">Your Name Here!</a></li>
            </ul>
        </div>
    </section>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const amountRaisedDisplay = document.getElementById('amountRaisedDisplay');
        const fundraisingGoalDisplay = document.getElementById('fundraisingGoalDisplay');
        const percentageDisplay = document.getElementById('percentageDisplay');
        const progressBar = document.querySelector('.progress-bar');

        if (amountRaisedDisplay && fundraisingGoalDisplay && percentageDisplay && progressBar) {
            amountRaisedDisplay.textContent = amountRaised.toLocaleString();
            fundraisingGoalDisplay.textContent = fundraisingGoal.toLocaleString();

            const percentage = (amountRaised / fundraisingGoal) * 100;
            percentageDisplay.textContent = percentage.toFixed(2); // Display with 2 decimal places

            progressBar.style.width = percentage + '%';
        }
    });
</script>

<style>
    /* Campaign specific styles */
    .campaign-dashboard {
        margin-top: 2rem;
        padding: 1.5rem;
        background-color: var(--color-background-light);
        border-radius: 0.75rem;
        box-shadow: 0 4px 6px rgba(0,0,0,0.05);
    }

    .progress-bar-container {
        width: 100%;
        background-color: var(--color-background-medium);
        border-radius: 0.5rem;
        height: 25px;
        margin-top: 1rem;
        overflow: hidden;
    }

    .progress-bar {
        height: 100%;
        background-color: var(--color-accent-green);
        border-radius: 0.5rem;
        text-align: center;
        color: white;
        line-height: 25px;
        transition: width 0.5s ease-in-out;
        min-width: 0%; /* Ensures bar is visible even with 0% progress */
    }

    .progress-text {
        text-align: center;
        margin-top: 0.5rem;
        font-size: 1.1rem;
        font-weight: 600;
        color: var(--color-primary);
    }

    .call-to-action-buttons {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        margin-top: 2rem;
        margin-bottom: 2rem;
    }

    @media (min-width: 768px) {
        .call-to-action-buttons {
            flex-direction: row;
            justify-content: center;
        }
    }

    .donor-wall {
        list-style: none;
        padding: 0;
        margin-top: 1.5rem;
        columns: 1; /* Default for mobile */
    }

    .donor-wall li {
        background-color: var(--color-background-medium);
        padding: 0.75rem 1rem;
        margin-bottom: 0.5rem;
        border-radius: 0.5rem;
        font-size: 0.95rem;
    }

    @media (min-width: 768px) {
        .donor-wall {
            columns: 2; /* Two columns for desktop */
            column-gap: 1.5rem;
        }
    }
</style>

<?php include '../modal.php'; ?>
<?php include '../footer.php'; ?>
<?php include '../layout_bottom.php'; ?>