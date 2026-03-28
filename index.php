<?php
$page_title = 'Dental Hospital - Premium Care';
include 'includes/header.php';
?>


    <!-- Hero Section -->
    <section id="home" class="relative pt-20 pb-32 overflow-hidden items-center flex min-h-[90vh]">
        <div class="absolute top-0 right-0 -z-10 w-1/2 h-full bg-slate-50 rounded-bl-[100px] md:rounded-bl-[200px] border-b border-l border-gray-100/50"></div>
        <div class="absolute -top-20 -right-20 w-96 h-96 bg-secondary/10 rounded-full blur-3xl -z-10"></div>
        <div class="absolute bottom-10 left-10 w-72 h-72 bg-primary/10 rounded-full blur-3xl -z-10"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <!-- Text Content -->
                <div class="space-y-8 animate-fade-in-up">
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-50 text-primary font-medium text-sm border border-blue-100">
                        <span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
                        Trusted by 10,000+ Happy Patients
                    </div>
                    <h1 class="text-5xl md:text-6xl lg:text-7xl font-extrabold text-dark leading-tight">
                        Modern <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary">Dentistry</span><br>
                        in a Calming<br>Environment.
                    </h1>
                    <p class="text-lg text-slate-600 max-w-lg leading-relaxed">
                        Experience world-class dental care with our team of specialists. We blend advanced technology with compassionate care to bring you the best smile possible.
                    </p>
                    <div class="flex flex-wrap gap-4 pt-2">
                        <a href="appointment.php"><button class="bg-primary hover:bg-dark text-white px-8 py-4 rounded-full font-semibold transition-all duration-300 shadow-xl shadow-primary/30 hover:shadow-dark/30 hover:-translate-y-1 flex items-center gap-2">Book Appointment <i class="fa-solid fa-arrow-right text-sm"></i></button></a>
                        <a href="about.php"><button class="bg-white hover:bg-slate-50 text-dark border border-gray-200 px-8 py-4 rounded-full font-semibold transition-all duration-300 shadow-sm hover:shadow-md flex items-center gap-2">
                            Learn More
                        </button></a>
                    </div>
                    
                    <div class="flex items-center gap-8 pt-6 border-t border-gray-200/60 mt-8">
                        <div>
                            <p class="text-3xl font-bold text-dark">15+</p>
                            <p class="text-sm text-slate-500 font-medium">Years Experience</p>
                        </div>
                        <div class="w-px h-10 bg-gray-200"></div>
                        <div>
                            <p class="text-3xl font-bold text-dark">20+</p>
                            <p class="text-sm text-slate-500 font-medium">Specialists</p>
                        </div>
                        <div class="w-px h-10 bg-gray-200"></div>
                        <div>
                            <p class="text-3xl font-bold text-dark">4.9</p>
                            <p class="text-sm text-slate-500 font-medium">Google Rating</p>
                        </div>
                    </div>
                </div>

                <!-- Image Grid -->
                <div class="relative hidden md:block">
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl border-4 border-white transform rotate-3 z-10 hover:rotate-0 transition-transform duration-500">
                        <img src="assets/hero_dentist.png" alt="Dentist Patient" class="w-full h-[500px] object-cover">
                    </div>
                    
                    <div class="absolute -bottom-10 -left-10 bg-white p-6 rounded-2xl shadow-xl z-20 animate-float border border-gray-100 flex items-center gap-4">
                        <div class="w-12 h-12 bg-green-100 text-green-600 rounded-full flex items-center justify-center text-xl">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <div>
                            <p class="font-bold text-dark">Top Security</p>
                            <p class="text-xs text-slate-500">Safe treatments</p>
                        </div>
                    </div>
                    
                    <div class="absolute -top-10 -right-10 bg-white p-4 rounded-2xl shadow-xl z-20 animate-float-delayed border border-gray-100">
                        <div class="flex items-center gap-2 mb-2">
                            <div class="flex text-yellow-400 text-xs">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <span class="text-xs font-bold">5.0</span>
                        </div>
                        <p class="text-xs text-slate-600 font-medium">"Best clinic in town!"</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-24 bg-white relative">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-secondary font-bold tracking-wider uppercase text-sm">Our Services</span>
                <h2 class="text-4xl md:text-5xl font-bold text-dark mt-2 mb-4">High-Quality Services for Your Smile</h2>
                <p class="text-slate-600">We offer a wide range of dental services, from preventative care to restorative dentistry, tailored to meet your unique needs.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="group bg-light rounded-2xl p-8 hover:bg-primary transition-all duration-300 hover:shadow-xl hover:-translate-y-2 cursor-pointer border border-gray-100">
                    <div class="w-16 h-16 bg-white rounded-xl flex items-center justify-center shadow-sm group-hover:scale-110 transition-transform duration-300 mb-6 group-hover:shadow-lg">
                        <i class="fa-solid fa-tooth text-3xl text-primary"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-dark mb-4 group-hover:text-white transition-colors">General Dentistry</h3>
                    <p class="text-slate-600 group-hover:text-blue-50 transition-colors mb-6">Comprehensive evaluations, cleanings, extractions, and regular checkups to maintain oral health.</p>
                    <a href="service-general.php" class="inline-flex items-center gap-2 font-semibold text-primary group-hover:text-white transition-colors">
                        Learn More <i class="fa-solid fa-arrow-right-long"></i>
                    </a>
                </div>

                <!-- Service 2 -->
                <div class="group bg-light rounded-2xl p-8 hover:bg-primary transition-all duration-300 hover:shadow-xl hover:-translate-y-2 cursor-pointer border border-gray-100 relative overflow-hidden">
                    <div class="w-16 h-16 bg-white rounded-xl flex items-center justify-center shadow-sm group-hover:scale-110 transition-transform duration-300 mb-6 group-hover:shadow-lg">
                        <i class="fa-solid fa-teeth-open text-3xl text-primary"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-dark mb-4 group-hover:text-white transition-colors">Cosmetic Dentistry</h3>
                    <p class="text-slate-600 group-hover:text-blue-50 transition-colors mb-6">Teeth whitening, veneers, and bonding to enhance the appearance of your bright smile.</p>
                    <a href="service-cosmetic.php" class="inline-flex items-center gap-2 font-semibold text-primary group-hover:text-white transition-colors">
                        Learn More <i class="fa-solid fa-arrow-right-long"></i>
                    </a>
                </div>

                <!-- Service 3 -->
                <div class="group bg-light rounded-2xl p-8 hover:bg-primary transition-all duration-300 hover:shadow-xl hover:-translate-y-2 cursor-pointer border border-gray-100">
                    <div class="w-16 h-16 bg-white rounded-xl flex items-center justify-center shadow-sm group-hover:scale-110 transition-transform duration-300 mb-6 group-hover:shadow-lg">
                        <i class="fa-solid fa-teeth text-3xl text-primary"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-dark mb-4 group-hover:text-white transition-colors">Dental Implants</h3>
                    <p class="text-slate-600 group-hover:text-blue-50 transition-colors mb-6">Permanent replacement of missing teeth that look, feel, and function like natural teeth.</p>
                    <a href="service-implants.php" class="inline-flex items-center gap-2 font-semibold text-primary group-hover:text-white transition-colors">
                        Learn More <i class="fa-solid fa-arrow-right-long"></i>
                    </a>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="services.php"><button class="bg-dark hover:bg-slate-800 text-white px-8 py-4 rounded-full font-semibold transition-all shadow-lg hover:shadow-xl">
                    View All Services
                </button></a>
            </div>
        </div>
    </section>

    <!-- Why Choose Us / About Section -->
    <section id="about" class="py-24 bg-slate-50 relative overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div class="relative">
                    <div class="absolute inset-0 bg-primary/20 rounded-3xl transform -rotate-6 scale-105 z-0"></div>
                    <img src="assets/clinic_care.png" alt="Dental Care" class="rounded-3xl shadow-xl relative z-10 outline outline-8 outline-white">
                </div>
                
                <div class="space-y-8">
                    <div>
                        <span class="text-secondary font-bold tracking-wider uppercase text-sm">Why Choose Us</span>
                        <h2 class="text-4xl md:text-5xl font-bold text-dark mt-2 mb-4">We Care About Your Dental Health</h2>
                        <p class="text-slate-600 text-lg">Our commitment is to provide customized, comfortable, and comprehensive dental care for patients of all ages.</p>
                    </div>
                    
                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-primary shadow-sm shrink-0">
                                <i class="fa-solid fa-user-doctor text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-dark mb-1">Expert Dentists</h4>
                                <p class="text-slate-600">Highly qualified team with years of experience across all major dental specialties.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-primary shadow-sm shrink-0">
                                <i class="fa-solid fa-microscope text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-dark mb-1">Modern Equipment</h4>
                                <p class="text-slate-600">Utilizing state-of-the-art technology for accurate diagnosis and painless treatments.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-primary shadow-sm shrink-0">
                                <i class="fa-solid fa-truck-medical text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-dark mb-1">Emergency Services</h4>
                                <p class="text-slate-600">24/7 availability for dental emergencies requiring immediate attention.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>



