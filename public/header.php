<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPH Fixed Sidebar Prototype</title>
    <!-- Load Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Set up Tailwind configuration -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    // Define the primary brand colors
                    colors: {
                        'uph-primary': '#164E63', // Deep Teal (For dark text/elements)
                        'uph-main-blue': '#51CEEA', // Main Blue (Original accent/hovers)
                        'uph-main-green': '#9cd639', // Main Green (New accent/highlight)
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <!-- Load the Inter font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-gray-50 font-sans min-h-screen lang-en">
