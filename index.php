<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Care IT - Your Partner in Digital Innovation</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f7f9fc;
            color: #1a202c;
        }
        .container {
            max-width: 1280px;
        }
        .section-title {
            position: relative;
            padding-bottom: 0.5rem;
            display: inline-block;
        }
        .section-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 75%;
            height: 4px;
            background-color: #4a90e2;
            border-radius: 9999px;
        }
    </style>
</head>
<body class="antialiased">

    <!-- Header & Navigation -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <nav class="container mx-auto px-6 py-4 flex items-center justify-between">
            <a href="#" class="text-2xl font-bold text-gray-800">Care IT</a>
            <div class="space-x-4 hidden md:flex">
                <a href="#services" class="text-gray-600 hover:text-blue-500 transition duration-300">Services</a>
                <a href="#portfolio" class="text-gray-600 hover:text-blue-500 transition duration-300">Portfolio</a>
                <a href="#about" class="text-gray-600 hover:text-blue-500 transition duration-300">About</a>
                <a href="#contact" class="px-4 py-2 bg-blue-500 text-white rounded-full hover:bg-blue-600 transition duration-300">Contact Us</a>
            </div>
            <button id="menu-button" class="md:hidden text-gray-600 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </nav>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white shadow-sm pb-4 px-6">
            <a href="#services" class="block py-2 text-gray-600 hover:text-blue-500 transition duration-300">Services</a>
            <a href="#portfolio" class="block py-2 text-gray-600 hover:text-blue-500 transition duration-300">Portfolio</a>
            <a href="#about" class="block py-2 text-gray-600 hover:text-blue-500 transition duration-300">About</a>
            <a href="#contact" class="block py-2 text-gray-600 hover:text-blue-500 transition duration-300">Contact Us</a>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="bg-gray-100 py-20 md:py-32">
            <div class="container mx-auto px-6 text-center">
                <h1 class="text-4xl md:text-6xl font-extrabold text-gray-900 leading-tight mb-4">
                    Innovate, Create, Grow with <span class="text-blue-500">Care IT</span>
                </h1>
                <p class="text-lg md:text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
                    We specialize in crafting cutting-edge software, mobile applications, and stunning websites that propel your business forward.
                </p>
                <a href="#contact" class="px-8 py-3 bg-blue-600 text-white font-semibold rounded-full hover:bg-blue-700 transition duration-300 transform hover:scale-105 inline-block shadow-lg">
                    Start Your Project
                </a>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="py-20 bg-white">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 section-title mx-auto">Our Services</h2>
                    <p class="text-gray-600 mt-4 max-w-xl mx-auto">
                        We offer a full spectrum of IT solutions tailored to your unique needs.
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Service Card 1: Software Development -->
                    <div class="bg-gray-50 rounded-lg shadow-md p-6 transform hover:scale-105 transition duration-300 flex flex-col items-center text-center">
                        <svg class="w-16 h-16 text-blue-500 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L12 19.25M9.75 17L7.5 19.25M9.75 17L9.75 19.25M17.25 17L15 19.25M17.25 17L19.5 19.25M17.25 17L17.25 19.25M12 5h-1v2h1v-2zm0 4h-1v2h1v-2zm0 4h-1v2h1v-2zm0 4h-1v2h1v-2zm-2.25-10.75L7.5 5h-1v2h1v-2zm-2.25-2.25L5.25 2.75h-1v2h1v-2zm-2.25-2.25L3 0.75h-1v2h1v-2zm12 2.25L17.25 5h-1v2h1v-2zm-2.25-2.25L15 2.75h-1v2h1v-2zm-2.25-2.25L12.75 0.75h-1v2h1v-2zm-2.25 2.25L10.5 5h-1v2h1v-2z" />
                        </svg>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Software Development</h3>
                        <p class="text-gray-600 text-sm">
                            Custom software solutions to streamline your operations, improve efficiency, and solve complex business challenges.
                        </p>
                    </div>
                    <!-- Service Card 2: App Development -->
                    <div class="bg-gray-50 rounded-lg shadow-md p-6 transform hover:scale-105 transition duration-300 flex flex-col items-center text-center">
                        <svg class="w-16 h-16 text-blue-500 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M16 18h.01M21 15V9a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h14a2 2 0 002-2z" />
                        </svg>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Mobile App Development</h3>
                        <p class="text-gray-600 text-sm">
                            Native and cross-platform mobile apps for iOS and Android that are user-friendly, high-performing, and engaging.
                        </p>
                    </div>
                    <!-- Service Card 3: Website Development -->
                    <div class="bg-gray-50 rounded-lg shadow-md p-6 transform hover:scale-105 transition duration-300 flex flex-col items-center text-center">
                        <svg class="w-16 h-16 text-blue-500 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Website & E-commerce</h3>
                        <p class="text-gray-600 text-sm">
                            Professional, responsive websites and powerful e-commerce platforms that drive conversions and build your brand.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portfolio Section -->
        <section id="portfolio" class="py-20 bg-gray-100">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 section-title mx-auto">Our Portfolio</h2>
                    <p class="text-gray-600 mt-4 max-w-xl mx-auto">
                        A showcase of our recent work and successful projects.
                    </p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Portfolio Item 1 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:scale-105 transition duration-300">
                        <img src="https://placehold.co/600x400/1e40af/ffffff?text=Project+Alpha" alt="Project Alpha" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-gray-800">Project Alpha</h3>
                            <p class="text-gray-600 text-sm mt-2">
                                A custom e-commerce platform built for a retail brand, featuring a seamless user experience and powerful backend.
                            </p>
                        </div>
                    </div>
                    <!-- Portfolio Item 2 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:scale-105 transition duration-300">
                        <img src="https://placehold.co/600x400/1e40af/ffffff?text=App+Connect" alt="App Connect" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-gray-800">App Connect</h3>
                            <p class="text-gray-600 text-sm mt-2">
                                A social networking mobile app designed to connect professionals with similar interests. Available on iOS and Android.
                            </p>
                        </div>
                    </div>
                    <!-- Portfolio Item 3 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:scale-105 transition duration-300">
                        <img src="https://placehold.co/600x400/1e40af/ffffff?text=Smart+Analytics" alt="Smart Analytics" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-gray-800">Smart Analytics</h3>
                            <p class="text-gray-600 text-sm mt-2">
                                A data analytics dashboard for businesses, providing real-time insights and customizable reports.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Us Section -->
        <section id="about" class="py-20 bg-white">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 section-title mx-auto">About Us</h2>
                </div>
                <div class="flex flex-col md:flex-row items-center justify-between gap-12">
                    <div class="md:w-1/2">
                        <p class="text-gray-700 text-lg leading-relaxed mb-4">
                            Care IT was founded on the principle of innovation and quality. We believe in building long-lasting partnerships with our clients by providing them with robust, scalable, and user-centric digital solutions. Our team of expert developers, designers, and project managers is dedicated to bringing your vision to life.
                        </p>
                        <p class="text-gray-700 text-lg leading-relaxed">
                            From the initial concept to deployment and beyond, we are committed to delivering excellence every step of the way. We stay ahead of industry trends and use the latest technologies to ensure your project is not only successful but also future-proof.
                        </p>
                    </div>
                    <div class="md:w-1/2">
                        <img src="https://placehold.co/600x400/9ca3af/ffffff?text=Our+Team" alt="Care IT Team" class="rounded-lg shadow-xl">
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-20 bg-gray-100">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 section-title mx-auto">Get in Touch</h2>
                    <p class="text-gray-600 mt-4 max-w-xl mx-auto">
                        Ready to start your project? Fill out the form below and we'll get back to you soon.
                    </p>
                </div>
                <div class="max-w-xl mx-auto bg-white p-8 rounded-lg shadow-md">
                    <!-- Form Container -->
                    <div id="contact-form-container">
                        <form id="contact-form" action="#" method="POST">
                            <div class="mb-4">
                                <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
                                <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                                <input type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            </div>
                            <div class="mb-4">
                                <label for="message" class="block text-gray-700 font-bold mb-2">Message</label>
                                <textarea id="message" name="message" rows="5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required></textarea>
                            </div>
                            <div class="flex items-center justify-between">
                                <button type="submit" id="submit-button" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-300">
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Confirmation Message (hidden by default) -->
                    <div id="confirmation-message" class="hidden text-center py-12">
                        <svg class="mx-auto w-16 h-16 text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <h3 class="text-2xl font-bold text-gray-800 mt-4 mb-2">Message Received!</h3>
                        <p class="text-gray-600">
                        Thank you for starting the journey with us. A member of our team will contact you soon.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-6 text-center">
            <p>&copy; 2024 Care IT. All Rights Reserved.</p>
        </div>
    </footer>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Mobile menu toggle
        const menuButton = document.getElementById('menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        menuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Contact form submission handling
        const contactForm = document.getElementById('contact-form');
        const contactFormContainer = document.getElementById('contact-form-container');
        const confirmationMessage = document.getElementById('confirmation-message');
        const submitButton = document.getElementById('submit-button');

        contactForm.addEventListener('submit', (event) => {
            // Prevent the default form submission
            event.preventDefault();

            // Change button text to indicate loading
            submitButton.textContent = 'Sending...';
            submitButton.classList.add('opacity-50', 'cursor-not-allowed');

            // Simulate form submission success
            setTimeout(() => {
                // Hide the form and show the confirmation message
                contactFormContainer.classList.add('hidden');
                confirmationMessage.classList.remove('hidden');

                // Reset button and form state (optional)
                submitButton.textContent = 'Send Message';
                submitButton.classList.remove('opacity-50', 'cursor-not-allowed');
                contactForm.reset();
            }, 1500); // Wait 1.5 seconds to simulate a network request
        });
    </script>
</body>
</html>
