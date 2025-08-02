<?php include 'includes/header.php'; ?>


    <!-- Hero Section with Split Layout -->
    <!-- <section id="home" class="relative bg-light-gray py-12 md:py-20 px-4 md:px-8 flex flex-col items-center justify-center min-h-[70vh] rounded-b-lg shadow-xl overflow-hidden">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-12 z-10 w-full">
            <div class="relative bg-white rounded-xl shadow-lg overflow-hidden flex flex-col justify-end p-6 md:p-10 min-h-[400px]">
                <img src="https://placehold.co/700x500/007bff/ffffff?text=Precision+Folding" alt="Precision Folding Service" class="absolute inset-0 w-full h-full object-cover opacity-80">
                <div class="absolute inset-0 bg-gradient-to-t from-dark-blue to-transparent opacity-70"></div>
                <div class="relative z-10 text-white text-center md:text-left">
                    <h2 class="text-3xl md:text-4xl font-extrabold leading-tight mb-3">
                        Precision Folding
                    </h2>
                    <p class="text-lg md:text-xl mb-6 opacity-95">
                        Meticulous care for every crease.
                    </p>
                    <a href="services.php" class="bg-accent-orange text-white px-8 py-3 rounded-lg font-semibold text-lg hover:bg-orange-600 transition duration-300 shadow-lg btn">
                        Order Now
                    </a>
                </div>
            </div>
            <div class="relative bg-white rounded-xl shadow-lg overflow-hidden flex flex-col justify-end p-6 md:p-10 min-h-[400px]">
                <img src="https://placehold.co/700x500/007bff/ffffff?text=Expert+Ironing" alt="Expert Ironing Service" class="absolute inset-0 w-full h-full object-cover opacity-80">
                <div class="absolute inset-0 bg-gradient-to-t from-dark-blue to-transparent opacity-70"></div>
                <div class="relative z-10 text-white text-center md:text-left">
                    <h2 class="text-3xl md:text-4xl font-extrabold leading-tight mb-3">
                        Expert Ironing
                    </h2>
                    <p class="text-lg md:text-xl mb-6 opacity-95">
                        Cleaning Excellence Guaranteed!
                    </p>
                    <a href="services.php" class="bg-accent-orange text-white px-8 py-3 rounded-lg font-semibold text-lg hover:bg-orange-600 transition duration-300 shadow-lg btn">
                        Order Now
                    </a>
                </div>
            </div>
        </div>
    </section> -->

    <section id="home" class="relative py-20 md:py-32 px-4 md:px-8 flex flex-col items-end justify-center min-h-[70vh] rounded-b-lg shadow-xl overflow-hidden hero-main-bg"> <!-- Changed items-center to items-end -->
        <div class="max-w-4xl text-right z-10 w-full"> <!-- Removed mx-auto -->
            <!-- Single Column: Expert Ironing with fully transparent background -->
            <div class="p-8 md:p-12 rounded-xl shadow-lg">
                <h2 class="text-4xl md:text-5xl font-extrabold leading-tight mb-4 text-white">
                    Expert Ironing
                </h2>
                <p class="text-lg md:text-xl mb-8 opacity-95 text-white">
                    Cleaning Excellence Guaranteed!
                </p>
                <a href="services.php" class="bg-accent-orange text-white px-10 py-4 rounded-lg font-semibold text-xl hover:bg-orange-600 transition duration-300 shadow-lg btn">
                    Order Now
                </a>
            </div>
        </div>
    </section>

            <!-- About Ironing Section -->
    <section class="py-16 px-6 md:px-12 bg-white rounded-lg mt-8 shadow-xl">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center gap-12">
            <!-- Left Image with Badge -->
            <div class="md:w-1/2 relative">
                <img src="images/steam-ironing.png" alt="Steam Ironing" class="rounded-xl shadow-lg w-full h-auto" />
                <div class="absolute bottom-4 left-4 bg-green-600 text-white text-lg md:text-xl font-bold px-6 py-3 rounded-lg shadow-md">
                    25 Years of Experience
                </div>
            </div>
            <!-- Right Text and Features -->
            <div class="md:w-1/2 text-center md:text-left">
                <p class="text-green-600 font-semibold text-lg mb-2">More than 25 Years of Experience</p>
                <h2 class="text-4xl font-bold text-gray-900 mb-6">We Are Passionate About Steam & Style</h2>
                <p class="text-sm text-gray-600 mb-6 leading-relaxed text-justify max-w-prose mx-auto">
                    We deliver more than wrinkle-free garments. Our expert team ensures each piece is steam ironed with precision, care, and 
                    fabric-specific techniques. We use advanced steam technology to preserve fabric quality, color, and texture, especially for delicate and premium wear.
                    With strict hygiene standards and a commitment to excellence, we provide results that look sharp and feel exceptional.
                    At Mr. Fold, steam ironing is not just a task. It is a craft.                
                </p>
                <!-- Features + Contact Grid -->
                <!-- <div class="w-full md:w-[90%] lg:w-[80%] mx-auto px-0"> -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-y-3 md:gap-x-8 items-start"> <!-- Changed md:grid-cols-3 to md:grid-cols-4 -->

                        <!-- Features List -->
                        <div class="md:col-span-2 p-0 m-0"> <!-- md:col-span-2 (50% width) -->
                            <ul class="text-base text-gray-600 space-y-2 list-none pl-0 ml-0">
                                <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-3"></i> 100% Customer Satisfaction
                                </li>
                                <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-3"></i> Free Collection & Delivery
                                </li>
                                <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-3"></i> Affordable Prices
                                </li>
                                <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-3"></i> Best Quality
                                </li>
                            </ul>
                        </div>
                        <!-- Call to Action -->
                        <div class="relative pl-4 md:pl-8 mt-6 md:mt-0 md:col-span-2"> <!-- Added md:col-span-1 -->
                        <div class="absolute left-0 top-0 bottom-0 w-1 bg-accent-gray rounded-full hidden md:block"></div> <!-- Green line for desktop -->
                        <!-- Green line for desktop -->
                        <div class="flex flex-col items-center text-center space-y-2 group"> <!-- Added md:items-start and md:text-left -->
                            <i class="fas fa-phone-alt text-2xl text-green-600"></i> <!-- Changed text-green-600 to text-accent-orange for consistency -->
                                <p class="text-sm font-semibold text-gray-500">Call for Quality Services</p>
                                <p class="text-xl font-bold text-primary-blue transition-colors duration-300 group-hover:text-accent-orange cursor-pointer">
                                    +91 6238-423767
                                </p>
                            </div>
                            <!-- Vertical green line on left (visible on desktop only) -->
                            <div class="hidden md:block absolute left-0 top-0 bottom-0 w-1 bg-green-500 rounded-full"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Why Choose Mr. Fold Section -->
    <section class="py-16 px-6 md:px-12 bg-white rounded-lg mt-8 shadow-xl">
        <h2 class="text-4xl font-bold text-center text-dark-blue mb-12">WHY CHOOSE MR. FOLD?</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
            <!-- Feature Card 1 -->
            <div class="bg-white p-8 rounded-xl shadow-lg transition hover:shadow-xl hover:-translate-y-2">
                <div class="text-primary-blue text-5xl mb-6 text-center"><i class="fas fa-tshirt"></i></div>
                <h3 class="text-2xl font-bold text-dark-blue mb-4 text-center">Steam Ironed by Trained Professionals</h3>
                <p class="text-gray-600 text-center">Our experts use advanced steam ironing techniques for a flawless, fabric-safe finish.</p>
            </div>

            <!-- Feature Card 2 -->
            <div class="bg-white p-8 rounded-xl shadow-lg transition hover:shadow-xl hover:-translate-y-2">
                <div class="text-primary-blue text-5xl mb-6 text-center"><i class="fas fa-bell"></i></div>
                <h3 class="text-2xl font-bold text-dark-blue mb-4 text-center">Smart Messaging Alerts & Updates</h3>
                <p class="text-gray-600 text-center">Stay informed with real-time notifications on your order status, pickup, and delivery.</p>
            </div>

            <!-- Feature Card 3 -->
            <div class="bg-white p-8 rounded-xl shadow-lg transition hover:shadow-xl hover:-translate-y-2">
                <div class="text-primary-blue text-5xl mb-6 text-center"><i class="fas fa-truck-pickup"></i></div>
                <h3 class="text-2xl font-bold text-dark-blue mb-4 text-center">Free and Reliable Pickup/Delivery</h3>
                <p class="text-gray-600 text-center">Enjoy the convenience of complimentary, on-time collection and return of your items.</p>
            </div>

            <!-- Feature Card 4 -->
            <div class="bg-white p-8 rounded-xl shadow-lg transition hover:shadow-xl hover:-translate-y-2">
                <div class="text-primary-blue text-5xl mb-6 text-center"><i class="fas fa-tags"></i></div>
                <h3 class="text-2xl font-bold text-dark-blue mb-4 text-center">Affordable Packages</h3>
                <p class="text-gray-600 text-center">Choose from flexible and budget-friendly plans tailored to your regular fabric care needs.</p>
            </div>

            <!-- Feature Card 5 -->
            <div class="bg-white p-8 rounded-xl shadow-lg transition hover:shadow-xl hover:-translate-y-2">
                <div class="text-primary-blue text-5xl mb-6 text-center"><i class="fas fa-gem"></i></div>
                <h3 class="text-2xl font-bold text-dark-blue mb-4 text-center">Special Care for Designer Wear</h3>
                <p class="text-gray-600 text-center">Entrust your valuable garments to our specialized handling for delicate fabrics.</p>
            </div>

            <!-- Feature Card 6 -->
            <div class="bg-white p-8 rounded-xl shadow-lg transition hover:shadow-xl hover:-translate-y-2">
                <div class="text-primary-blue text-5xl mb-6 text-center"><i class="fas fa-stopwatch"></i></div>
                <h3 class="text-2xl font-bold text-dark-blue mb-4 text-center">Express 24-Hour Steam Ironing</h3>
                <p class="text-gray-600 text-center">Get your clothes professionally steam-ironed and returned within a day.</p>
            </div>
        </div>
    </section>   

    <!-- Why Steam Ironing Section -->
    <section class="py-16 px-6 md:px-12 bg-light-gray rounded-lg mt-8 shadow-inner">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center gap-12">
            <div class="md:w-1/2 text-center md:text-left">
                <h2 class="text-4xl font-bold text-dark-blue mb-6 section-title text-left">WHY STEAM IRONING?</h2>
                <ul class="text-lg text-gray-700 space-y-4 list-none pl-0">
                    <li class="flex items-start"><i class="fas fa-check-circle text-accent-orange mr-3 mt-1"></i> Longer fabric life: No wear and tear</li>
                    <li class="flex items-start"><i class="fas fa-check-circle text-accent-orange mr-3 mt-1"></i> Preserves fabric colour and texture</li>
                    <li class="flex items-start"><i class="fas fa-check-circle text-accent-orange mr-3 mt-1"></i> No burn marks like traditional ironing</li>
                    <li class="flex items-start"><i class="fas fa-check-circle text-accent-orange mr-3 mt-1"></i> Ideal for delicate garments like silk, linen & design wear</li>
                </ul>
                <button class="bg-primary-blue text-white px-8 py-3 rounded-lg font-semibold text-lg hover:bg-blue-700 transition duration-300 shadow-md mt-8 btn">
                    Learn More About Steam Ironing
                </button>
            </div>
            <div class="md:w-1/2">
                <img src="https://placehold.co/600x400/007bff/ffffff?text=Steam+Ironing" alt="Steam Ironing Benefits" class="rounded-xl shadow-lg w-full h-auto">
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="bg-primary-blue text-white py-16 px-6 md:px-12 mt-8 rounded-lg shadow-xl text-center">
        <h2 class="text-4xl font-bold mb-6">Ready for Impeccable Fabric Care?</h2>
        <p class="text-xl mb-8 opacity-90">
            Let MR. FOLD take care of your garments and textiles with precision and care.
        </p>
        <a href="contact.php" class="bg-accent-orange text-white px-10 py-4 rounded-lg font-semibold text-xl hover:bg-orange-600 transition duration-300 shadow-xl btn">
            Book Your Service Now
        </a>
    </section>

<?php include 'includes/footer.php'; ?>

