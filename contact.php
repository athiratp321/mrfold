<?php include 'includes/header.php'; ?>

    <section class="py-20 md:py-32 px-6 md:px-12 bg-gradient-to-r from-blue-800 to-blue-600 text-white text-center rounded-b-lg shadow-xl hero-section">
        <h1 class="text-5xl md:text-6xl font-extrabold leading-tight mb-4">Contact Us</h1>
        <p class="text-lg md:text-xl opacity-90">We'd love to hear from you. Reach out for inquiries or to book a service.</p>
    </section>

    <!-- Contact Section -->
    <section class="py-16 px-6 md:px-12 bg-light-gray rounded-lg mt-8 shadow-inner">
        <h2 class="text-4xl font-bold text-center text-dark-blue mb-12 section-title">Get In Touch</h2>
        <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Contact Info -->
            <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-200 contact-card">
                <h3 class="text-2xl font-bold text-dark-blue mb-4">Contact Information</h3>
                <p class="text-gray-700 mb-3 text-lg"><i class="fas fa-phone-alt text-primary-blue mr-3"></i> Book Now: +91 6238-42367</p>
                <p class="text-gray-700 mb-3 text-lg"><i class="fas fa-globe text-primary-blue mr-3"></i> Website: www.mrfold.in</p>
                <p class="text-gray-700 mb-3 text-lg"><i class="fas fa-shipping-fast text-primary-blue mr-3"></i> Express Doorstep Pickup & Delivery Available!</p>
                <div class="flex space-x-4 mt-6 justify-center md:justify-start">
                    <a href="#" class="text-primary-blue hover:text-blue-700 text-3xl"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-primary-blue hover:text-blue-700 text-3xl"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-primary-blue hover:text-blue-700 text-3xl"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-primary-blue hover:text-blue-700 text-3xl"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <!-- Contact Form -->
            <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-200">
                <h3 class="text-2xl font-bold text-dark-blue mb-4">Send Us a Message</h3>
                <form class="space-y-4">
                    <div>
                        <input type="text" placeholder="Your Name" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-blue">
                    </div>
                    <div>
                        <input type="email" placeholder="Your Email" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-blue">
                    </div>
                    <div>
                        <textarea placeholder="Your Message" rows="5" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-blue"></textarea>
                    </div>
                    <button type="submit" class="bg-primary-blue text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300 shadow-md w-full btn">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>

