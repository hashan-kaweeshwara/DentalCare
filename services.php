<?php
$page_title = 'Our Services | Dental Hospital';
include 'includes/header.php';
?>


    <!-- Page Header (Banner) -->
    
<?php
$banner_title = 'Our Premium Services';
$banner_subtitle = '<path d="M 40 0 L 0 0 0 40" fill="none" stroke="white" stroke-width="0.5"/>
                </pattern>
                <rect width="100%" height="100%" fill="url(#grid)" />
            </svg>
        </div>
        <div class="absolute top-0 right-0 w-64 h-64 bg-secondary rounded-full blur-3xl opacity-50 z-0 transform translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-dark rounded-full blur-3xl opacity-20 z-0 transform -translate-x-1/2 translate-y-1/2"></div>

        <div class="container mx-auto px-6 relative z-10 text-center animate-fade-in-up">
            
            <p class="text-blue-100 text-lg max-w-2xl mx-auto">Comprehensive dental care tailored to your unique smile. Discover our wide range of professional treatments and services below.';
include 'includes/banner.php';
?>


    <!-- Main Services Grid -->
    <section class="py-24 bg-light relative">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Service Card 1 -->
                <div class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-gray-100 flex flex-col">
                    <div class="relative h-60 overflow-hidden">
                        <img src="assets/service_general.png" alt="General Dentistry" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-dark/80 to-transparent"></div>
                        <div class="absolute bottom-4 left-6">
                            <div class="w-12 h-12 bg-white/20 backdrop-blur-md rounded-xl flex items-center justify-center text-white mb-2">
                                <i class="fa-solid fa-tooth text-xl"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-8 flex-1 flex flex-col">
                        <h3 class="text-2xl font-bold text-dark mb-3">General Dentistry</h3>
                        <p class="text-slate-600 mb-6 flex-1">Routine checkups, professional cleanings, fillings, and extractions to keep your mouth healthy and disease-free.</p>
                        <a href="service-general.php" class="inline-flex items-center justify-between w-full font-semibold text-primary hover:text-dark transition-colors group/link mt-auto pt-4 border-t border-gray-100">
                            View Details 
                            <span class="w-8 h-8 rounded-full bg-blue-50 flex items-center justify-center group-hover/link:bg-primary group-hover/link:text-white transition-colors">
                                <i class="fa-solid fa-arrow-right text-sm"></i>
                            </span>
                        </a>
                    </div>
                </div>

                <!-- Service Card 2 -->
                <div class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-gray-100 flex flex-col">
                    <div class="relative h-60 overflow-hidden">
                        <img src="assets/service_cosmetic.png" alt="Cosmetic Dentistry" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-dark/80 to-transparent"></div>
                        <div class="absolute bottom-4 left-6">
                            <div class="w-12 h-12 bg-white/20 backdrop-blur-md rounded-xl flex items-center justify-center text-white mb-2">
                                <i class="fa-solid fa-face-smile text-xl"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-8 flex-1 flex flex-col">
                        <h3 class="text-2xl font-bold text-dark mb-3">Cosmetic Dentistry</h3>
                        <p class="text-slate-600 mb-6 flex-1">Enhance your smile with premium porcelain veneers, composite bonding, and full smile makeovers tailored to you.</p>
                        <a href="service-cosmetic.php" class="inline-flex items-center justify-between w-full font-semibold text-primary hover:text-dark transition-colors group/link mt-auto pt-4 border-t border-gray-100">
                            View Details 
                            <span class="w-8 h-8 rounded-full bg-blue-50 flex items-center justify-center group-hover/link:bg-primary group-hover/link:text-white transition-colors">
                                <i class="fa-solid fa-arrow-right text-sm"></i>
                            </span>
                        </a>
                    </div>
                </div>

                <!-- Service Card 3 -->
                <div class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-gray-100 flex flex-col">
                    <div class="relative h-60 overflow-hidden">
                        <img src="assets/service_implants.png" alt="Dental Implants" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-dark/80 to-transparent"></div>
                        <div class="absolute bottom-4 left-6">
                            <div class="w-12 h-12 bg-white/20 backdrop-blur-md rounded-xl flex items-center justify-center text-white mb-2">
                                <i class="fa-solid fa-teeth-open text-xl"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-8 flex-1 flex flex-col">
                        <h3 class="text-2xl font-bold text-dark mb-3">Dental Implants</h3>
                        <p class="text-slate-600 mb-6 flex-1">Permanent, natural-looking tooth replacements that restore full strength, function, and aesthetics.</p>
                        <a href="service-implants.php" class="inline-flex items-center justify-between w-full font-semibold text-primary hover:text-dark transition-colors group/link mt-auto pt-4 border-t border-gray-100">
                            View Details 
                            <span class="w-8 h-8 rounded-full bg-blue-50 flex items-center justify-center group-hover/link:bg-primary group-hover/link:text-white transition-colors">
                                <i class="fa-solid fa-arrow-right text-sm"></i>
                            </span>
                        </a>
                    </div>
                </div>

                <!-- Service Card 4 -->
                <div class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-gray-100 flex flex-col">
                    <div class="relative h-60 overflow-hidden">
                        <img src="assets/service_orthodontics.png" alt="Orthodontics" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-dark/80 to-transparent"></div>
                        <div class="absolute bottom-4 left-6">
                            <div class="w-12 h-12 bg-white/20 backdrop-blur-md rounded-xl flex items-center justify-center text-white mb-2">
                                <i class="fa-solid fa-teeth text-xl"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-8 flex-1 flex flex-col">
                        <h3 class="text-2xl font-bold text-dark mb-3">Orthodontics</h3>
                        <p class="text-slate-600 mb-6 flex-1">Clear aligners (Invisalign) and traditional braces helping patients achieve perfectly straight, aligned teeth.</p>
                        <a href="service-orthodontics.php" class="inline-flex items-center justify-between w-full font-semibold text-primary hover:text-dark transition-colors group/link mt-auto pt-4 border-t border-gray-100">
                            View Details 
                            <span class="w-8 h-8 rounded-full bg-blue-50 flex items-center justify-center group-hover/link:bg-primary group-hover/link:text-white transition-colors">
                                <i class="fa-solid fa-arrow-right text-sm"></i>
                            </span>
                        </a>
                    </div>
                </div>

                <!-- Service Card 5 -->
                <div class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-gray-100 flex flex-col">
                    <div class="relative h-60 overflow-hidden">
                        <img src="assets/service_whitening.png" alt="Teeth Whitening" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-dark/80 to-transparent"></div>
                        <div class="absolute bottom-4 left-6">
                            <div class="w-12 h-12 bg-white/20 backdrop-blur-md rounded-xl flex items-center justify-center text-white mb-2">
                                <i class="fa-regular fa-face-smile-beam text-xl"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-8 flex-1 flex flex-col">
                        <h3 class="text-2xl font-bold text-dark mb-3">Teeth Whitening</h3>
                        <p class="text-slate-600 mb-6 flex-1">Professional laser and at-home whitening systems to safely eliminate stains and dramatically brighten your smile.</p>
                        <a href="service-whitening.php" class="inline-flex items-center justify-between w-full font-semibold text-primary hover:text-dark transition-colors group/link mt-auto pt-4 border-t border-gray-100">
                            View Details 
                            <span class="w-8 h-8 rounded-full bg-blue-50 flex items-center justify-center group-hover/link:bg-primary group-hover/link:text-white transition-colors">
                                <i class="fa-solid fa-arrow-right text-sm"></i>
                            </span>
                        </a>
                    </div>
                </div>

                <!-- Service Card 6 -->
                <div class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-gray-100 flex flex-col">
                    <div class="relative h-60 overflow-hidden">
                        <img src="assets/service_rootcanal.png" alt="Root Canal Therapy" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-dark/80 to-transparent"></div>
                        <div class="absolute bottom-4 left-6">
                            <div class="w-12 h-12 bg-white/20 backdrop-blur-md rounded-xl flex items-center justify-center text-white mb-2">
                                <i class="fa-solid fa-bacteria text-xl"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-8 flex-1 flex flex-col">
                        <h3 class="text-2xl font-bold text-dark mb-3">Root Canal Therapy</h3>
                        <p class="text-slate-600 mb-6 flex-1">Painless, advanced endodontic treatment to save infected or severely decayed teeth right at our clinc.</p>
                        <a href="service-root-canal.php" class="inline-flex items-center justify-between w-full font-semibold text-primary hover:text-dark transition-colors group/link mt-auto pt-4 border-t border-gray-100">
                            View Details 
                            <span class="w-8 h-8 rounded-full bg-blue-50 flex items-center justify-center group-hover/link:bg-primary group-hover/link:text-white transition-colors">
                                <i class="fa-solid fa-arrow-right text-sm"></i>
                            </span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Additional Info / Working Steps -->
    <section class="py-24 bg-white border-y border-gray-100">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div class="space-y-8">
                    <div>
                        <span class="text-secondary font-bold tracking-wider uppercase text-sm">How It Works</span>
                        <h2 class="text-4xl font-bold text-dark mt-2 mb-4">A Simple Process To Treat Your Teeth</h2>
                        <p class="text-slate-600 text-lg">We've designed our entire clinic process around patient comfort and ease, ensuring every step of your journey is completely stress-free.</p>
                    </div>

                    <div class="space-y-6">
                        <div class="flex items-start gap-6">
                            <div class="w-14 h-14 rounded-full bg-primary text-white flex items-center justify-center text-2xl font-bold shrink-0 shadow-lg shadow-primary/30">1</div>
                            <div>
                                <h4 class="text-xl font-bold text-dark mb-2">Schedule An Appointment</h4>
                                <p class="text-slate-600">Contact us online or via phone to choose a time that perfectly fits your schedule.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-6">
                            <div class="w-14 h-14 rounded-full bg-primary text-white flex items-center justify-center text-2xl font-bold shrink-0 shadow-lg shadow-primary/30">2</div>
                            <div>
                                <h4 class="text-xl font-bold text-dark mb-2">Visit & Examination</h4>
                                <p class="text-slate-600">Our expert team will evaluate your oral health using state-of-the-art diagnostic equipment.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-6">
                            <div class="w-14 h-14 rounded-full bg-primary text-white flex items-center justify-center text-2xl font-bold shrink-0 shadow-lg shadow-primary/30">3</div>
                            <div>
                                <h4 class="text-xl font-bold text-dark mb-2">Get Healthy Smile</h4>
                                <p class="text-slate-600">Following personalized treatment, you will walk out with a newly restored, perfect smile.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="relative">
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[110%] h-[110%] bg-secondary/10 rounded-full blur-3xl -z-10"></div>
                    <img src="assets/clinic_care.png" alt="Process" class="rounded-3xl shadow-xl z-10 relative">
                    <div class="absolute bottom-8 right-8 bg-white p-5 rounded-2xl shadow-xl z-20 animate-float border border-gray-100 flex items-center gap-4">
                        <div class="w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center text-xl">
                            <i class="fa-solid fa-calendar-check"></i>
                        </div>
                        <div>
                            <p class="font-bold text-dark mb-0.5">Easy Booking</p>
                            <a href="appointment.php" class="text-xs font-semibold text-secondary hover:text-primary transition-colors">Book Now &rarr;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 relative overflow-hidden bg-dark">
        <div class="absolute inset-0 z-0">
            <img src="assets/hero_dentist.png" alt="Background" class="w-full h-full object-cover opacity-10">
        </div>
        <div class="container mx-auto px-6 relative z-10 text-center">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Ready to improve your smile?</h2>
            <p class="text-slate-300 max-w-2xl mx-auto mb-10 text-lg">Contact our team of specialists today. Don't let your dental problems progress; early detection makes all the difference.</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="appointment.php"><button class="bg-primary hover:bg-secondary text-white px-8 py-4 rounded-full font-semibold transition-all duration-300 shadow-xl shadow-primary/30 hover:-translate-y-1 flex items-center gap-2">Request Appointment <i class="fa-solid fa-arrow-right text-sm"></i></button></a>
                <button class="bg-white/10 hover:bg-white/20 backdrop-blur-md text-white border border-white/20 px-8 py-4 rounded-full font-semibold transition-all duration-300 shadow-sm flex items-center gap-2">
                    <i class="fa-solid fa-phone text-sm"></i> +1 (555) 123-4567
                </button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>



