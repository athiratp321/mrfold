<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MR. FOLD - Experience Next-Level Fabric Care</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <!-- Google Fonts - Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="text-gray-800">

    <!-- Top Bar: Social Media & Contact Info -->
    <div class="bg-dark-blue text-white py-2 px-6 md:px-12 hidden md:flex justify-between items-center text-sm rounded-b-lg">
        <div class="flex items-center space-x-6">
            <p><i class="fas fa-map-marker-alt mr-2"></i> 8434 Signal Hill Road, Manassas, VA, 20110</p>
            <p><i class="fas fa-clock mr-2"></i> Mon-Fri: 08:00 AM - 05:00 PM</p>
            <p><i class="fas fa-envelope mr-2"></i> info@yourcompany.com</p>
        </div>
        <div class="flex items-center space-x-4">
            <a href="tel:+18007654321" class="flex items-center hover:text-accent-orange transition duration-300">
                <i class="fas fa-phone mr-2"></i> 1 (800) 765-43-21
            </a>
            <div class="flex space-x-3 text-lg">
                <a href="#" class="hover:text-accent-orange transition duration-300"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="hover:text-accent-orange transition duration-300"><i class="fab fa-twitter"></i></a>
                <a href="#" class="hover:text-accent-orange transition duration-300"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="hover:text-accent-orange transition duration-300"><i class="fab fa-instagram"></i></a>
            </div>
            <button class="bg-accent-orange text-white px-4 py-1 rounded-md font-semibold text-sm hover:bg-orange-600 transition duration-300 shadow-md">
                Buy Now
            </button>
        </div>
    </div>

    <!-- Header Section -->
    <header class="bg-white shadow-lg py-4 px-6 md:px-12 flex justify-between items-center rounded-b-lg site-header sticky top-0 z-50">
        <div class="flex items-center">
            <img src="https://placehold.co/40x40/007bff/ffffff?text=MR" alt="MR Fold Logo" class="h-10 w-10 mr-2 rounded-full">
            <a href="index.php" class="text-2xl font-bold text-primary-blue">MR. FOLD</a>
        </div>
        <!-- Desktop Navigation -->
        <nav class="hidden md:flex space-x-8">
            <a href="index.php" class="text-lg font-medium text-gray-700 hover:text-primary-blue transition duration-300">Home</a>
            <a href="services.php" class="text-lg font-medium text-gray-700 hover:text-primary-blue transition duration-300">Services</a>
            <a href="about.php" class="text-lg font-medium text-gray-700 hover:text-primary-blue transition duration-300">About Us</a>
            <a href="contact.php" class="text-lg font-medium text-gray-700 hover:text-primary-blue transition duration-300">Contact</a>
            <button class="bg-primary-blue text-white px-6 py-2 rounded-lg font-semibold hover:bg-blue-700 transition duration-300 shadow-md btn">Get a Quote</button>
        </nav>
        <!-- Mobile Hamburger Menu -->
        <div class="md:hidden">
            <button id="mobile-menu-button" class="text-gray-700 focus:outline-none">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
    </header>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu" class="hidden md:hidden fixed inset-0 bg-white z-50 flex flex-col items-center justify-center space-y-8">
        <button id="close-mobile-menu" class="absolute top-6 right-6 text-gray-700 focus:outline-none">
            <i class="fas fa-times text-3xl"></i>
        </button>
        <a href="index.php" class="text-3xl font-medium text-gray-700 hover:text-primary-blue transition duration-300" onclick="document.getElementById('mobile-menu').classList.add('hidden')">Home</a>
        <a href="services.php" class="text-3xl font-medium text-gray-700 hover:text-primary-blue transition duration-300" onclick="document.getElementById('mobile-menu').classList.add('hidden')">Services</a>
        <a href="about.php" class="text-3xl font-medium text-gray-700 hover:text-primary-blue transition duration-300" onclick="document.getElementById('mobile-menu').classList.add('hidden')">About Us</a>
        <a href="contact.php" class="text-3xl font-medium text-gray-700 hover:text-primary-blue transition duration-300" onclick="document.getElementById('mobile-menu').classList.add('hidden')">Contact</a>
        <button class="bg-primary-blue text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300 shadow-lg text-2xl btn">Get a Quote</button>
    </div>

