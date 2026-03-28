<?php
$page_title = 'Our Specialists | Dental Hospital';
include 'includes/header.php';
?>


    <!-- Page Header (Banner) -->
    
<?php
$banner_title = 'Meet Our Specialists';
$banner_subtitle = '<path d="M 40 0 L 0 0 0 40" stroke="white" stroke-width="0.5"/></pattern>
                <rect width="100%" height="100%" fill="url(#grid)" />
            </svg>
        </div>
        <div class="absolute top-0 right-0 w-64 h-64 bg-secondary rounded-full blur-3xl opacity-50 z-0 transform translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-dark rounded-full blur-3xl opacity-20 z-0 transform -translate-x-1/2 translate-y-1/2"></div>

        <div class="container mx-auto px-6 relative z-10 text-center animate-fade-in-up">
            <p class="text-blue-100 text-lg max-w-2xl mx-auto">Our extremely dedicated board-certified expert doctors bring decades of combined clinical experience, providing world-class dentistry for you.';
include 'includes/banner.php';
?>


    <!-- Main Specialists Grid -->
    <section class="py-24 bg-white relative">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-16 animate-fade-in-up" style="animation-delay: 0.1s;">
                <span class="text-secondary font-bold tracking-wider uppercase text-sm">Our Team</span>
                <h2 class="text-4xl md:text-5xl font-bold text-dark mt-2 mb-4">Dedicated Dental Professionals</h2>
                <p class="text-slate-600">Every single member of our clinical staff continuously participates in further medical education guaranteeing our clinic sets highest regional standards of care.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                <!-- Specialist 1 -->
                <div class="bg-light rounded-3xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-300 border border-gray-100 flex flex-col group animate-fade-in-up" style="animation-delay: 0.2s;">
                    <div class="relative h-80 overflow-hidden bg-slate-200">
                        <img src="assets/doctor_sarah.png" alt="Dr. Sarah Miller" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-dark/90 via-dark/20 to-transparent opacity-80"></div>
                        <div class="absolute bottom-6 left-6 right-6">
                            <h3 class="text-2xl font-bold text-white mb-1">Dr. Sarah Miller</h3>
                            <p class="text-secondary font-medium">Lead General Dentist</p>
                        </div>
                    </div>
                    <div class="p-8 flex-1 flex flex-col">
                        <p class="text-slate-600 mb-6 flex-1 text-sm leading-relaxed">Dr. Miller brings over 15 years of general clinical experience, focusing heavily upon painless restorative treatments and absolute patient comfort.</p>
                        <div class="flex items-center justify-between border-t border-gray-200 pt-6 mt-auto">
                            <div class="flex space-x-3">
                                <a href="#" class="w-8 h-8 rounded-full bg-blue-50 text-primary flex items-center justify-center hover:bg-primary hover:text-white transition-colors"><i class="fa-brands fa-linkedin-in text-sm"></i></a>
                                <a href="#" class="w-8 h-8 rounded-full bg-blue-50 text-primary flex items-center justify-center hover:bg-primary hover:text-white transition-colors"><i class="fa-brands fa-twitter text-sm"></i></a>
                            </div>
                            <a href="appointment.php"><button class="text-primary font-bold text-sm hover:text-dark transition-colors flex items-center gap-1">Appointment <i class="fa-solid fa-arrow-right"></i></button></a>
                        </div>
                    </div>
                </div>

                <!-- Specialist 2 -->
                <div class="bg-light rounded-3xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-300 border border-gray-100 flex flex-col group animate-fade-in-up" style="animation-delay: 0.3s;">
                    <div class="relative h-80 overflow-hidden bg-slate-200">
                        <img src="assets/doctor_james.png" alt="Dr. James Wilson" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-dark/90 via-dark/20 to-transparent opacity-80"></div>
                        <div class="absolute bottom-6 left-6 right-6">
                            <h3 class="text-2xl font-bold text-white mb-1">Dr. James Wilson</h3>
                            <p class="text-secondary font-medium">Head Orthodontist</p>
                        </div>
                    </div>
                    <div class="p-8 flex-1 flex flex-col">
                        <p class="text-slate-600 mb-6 flex-1 text-sm leading-relaxed">Specializing dynamically in clear aligners and comprehensive interceptive physical orthodontics, Dr. Wilson crafts flawlessly straight smiles consistently.</p>
                        <div class="flex items-center justify-between border-t border-gray-200 pt-6 mt-auto">
                            <div class="flex space-x-3">
                                <a href="#" class="w-8 h-8 rounded-full bg-blue-50 text-primary flex items-center justify-center hover:bg-primary hover:text-white transition-colors"><i class="fa-brands fa-linkedin-in text-sm"></i></a>
                                <a href="#" class="w-8 h-8 rounded-full bg-blue-50 text-primary flex items-center justify-center hover:bg-primary hover:text-white transition-colors"><i class="fa-brands fa-twitter text-sm"></i></a>
                            </div>
                            <a href="appointment.php"><button class="text-primary font-bold text-sm hover:text-dark transition-colors flex items-center gap-1">Appointment <i class="fa-solid fa-arrow-right"></i></button></a>
                        </div>
                    </div>
                </div>

                <!-- Specialist 3 -->
                <div class="bg-light rounded-3xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-300 border border-gray-100 flex flex-col group animate-fade-in-up" style="animation-delay: 0.4s;">
                    <div class="relative h-80 overflow-hidden bg-slate-200">
                        <img src="assets/doctor_emily.png" alt="Dr. Emily Chen" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-dark/90 via-dark/20 to-transparent opacity-80"></div>
                        <div class="absolute bottom-6 left-6 right-6">
                            <h3 class="text-2xl font-bold text-white mb-1">Dr. Emily Chen</h3>
                            <p class="text-secondary font-medium">Cosmetic Technician</p>
                        </div>
                    </div>
                    <div class="p-8 flex-1 flex flex-col">
                        <p class="text-slate-600 mb-6 flex-1 text-sm leading-relaxed">Renowned nationwide for highly aesthetic porcelain veneer makeovers, Dr. Chen perfectly balances beautiful symmetry with lasting dental function.</p>
                        <div class="flex items-center justify-between border-t border-gray-200 pt-6 mt-auto">
                            <div class="flex space-x-3">
                                <a href="#" class="w-8 h-8 rounded-full bg-blue-50 text-primary flex items-center justify-center hover:bg-primary hover:text-white transition-colors"><i class="fa-brands fa-linkedin-in text-sm"></i></a>
                                <a href="#" class="w-8 h-8 rounded-full bg-blue-50 text-primary flex items-center justify-center hover:bg-primary hover:text-white transition-colors"><i class="fa-solid fa-envelope text-sm"></i></a>
                            </div>
                            <a href="appointment.php"><button class="text-primary font-bold text-sm hover:text-dark transition-colors flex items-center gap-1">Appointment <i class="fa-solid fa-arrow-right"></i></button></a>
                        </div>
                    </div>
                </div>

                <!-- Specialist 4 -->
                <div class="bg-light rounded-3xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-300 border border-gray-100 flex flex-col group animate-fade-in-up" style="animation-delay: 0.5s;">
                    <div class="relative h-80 overflow-hidden bg-slate-200">
                        <img src="assets/doctor_michael.png" alt="Dr. Michael Brown" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-dark/90 via-dark/20 to-transparent opacity-80"></div>
                        <div class="absolute bottom-6 left-6 right-6">
                            <h3 class="text-2xl font-bold text-white mb-1">Dr. Michael Brown</h3>
                            <p class="text-secondary font-medium">Oral Surgeon</p>
                        </div>
                    </div>
                    <div class="p-8 flex-1 flex flex-col">
                        <p class="text-slate-600 mb-6 flex-1 text-sm leading-relaxed">Specializing extensively in complex wisdom tooth extraction alongside highly stable digital implant integration, prioritizing totally infection-free healing.</p>
                        <div class="flex items-center justify-between border-t border-gray-200 pt-6 mt-auto">
                            <div class="flex space-x-3">
                                <a href="#" class="w-8 h-8 rounded-full bg-blue-50 text-primary flex items-center justify-center hover:bg-primary hover:text-white transition-colors"><i class="fa-brands fa-linkedin-in text-sm"></i></a>
                                <a href="#" class="w-8 h-8 rounded-full bg-blue-50 text-primary flex items-center justify-center hover:bg-primary hover:text-white transition-colors"><i class="fa-brands fa-twitter text-sm"></i></a>
                            </div>
                            <a href="appointment.php"><button class="text-primary font-bold text-sm hover:text-dark transition-colors flex items-center gap-1">Appointment <i class="fa-solid fa-arrow-right"></i></button></a>
                        </div>
                    </div>
                </div>

                <!-- Specialist 5 -->
                <div class="bg-light rounded-3xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-300 border border-gray-100 flex flex-col group animate-fade-in-up" style="animation-delay: 0.6s;">
                    <div class="relative h-80 overflow-hidden bg-slate-200">
                        <img src="assets/doctor_rebecca.png" alt="Dr. Rebecca Davis" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-dark/90 via-dark/20 to-transparent opacity-80"></div>
                        <div class="absolute bottom-6 left-6 right-6">
                            <h3 class="text-2xl font-bold text-white mb-1">Dr. Rebecca Davis</h3>
                            <p class="text-secondary font-medium">Endodontist</p>
                        </div>
                    </div>
                    <div class="p-8 flex-1 flex flex-col">
                        <p class="text-slate-600 mb-6 flex-1 text-sm leading-relaxed">Our advanced root canal expert, managing intricate internal infection procedures seamlessly without localized discomfort safely preventing future decay.</p>
                        <div class="flex items-center justify-between border-t border-gray-200 pt-6 mt-auto">
                            <div class="flex space-x-3">
                                <a href="#" class="w-8 h-8 rounded-full bg-blue-50 text-primary flex items-center justify-center hover:bg-primary hover:text-white transition-colors"><i class="fa-brands fa-linkedin-in text-sm"></i></a>
                                <a href="#" class="w-8 h-8 rounded-full bg-blue-50 text-primary flex items-center justify-center hover:bg-primary hover:text-white transition-colors"><i class="fa-solid fa-envelope text-sm"></i></a>
                            </div>
                            <a href="appointment.php"><button class="text-primary font-bold text-sm hover:text-dark transition-colors flex items-center gap-1">Appointment <i class="fa-solid fa-arrow-right"></i></button></a>
                        </div>
                    </div>
                </div>

                <!-- Specialist 6 -->
                <div class="bg-light rounded-3xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-300 border border-gray-100 flex flex-col group animate-fade-in-up" style="animation-delay: 0.7s;">
                    <div class="relative h-80 overflow-hidden bg-slate-200">
                        <img src="assets/doctor_david.png" alt="Dr. David Thompson" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-700" style="filter: hue-rotate(15deg) brightness(0.9);">
                        <div class="absolute inset-0 bg-gradient-to-t from-dark/90 via-dark/20 to-transparent opacity-80"></div>
                        <div class="absolute bottom-6 left-6 right-6">
                            <h3 class="text-2xl font-bold text-white mb-1">Dr. Lisa Thompson</h3>
                            <p class="text-secondary font-medium">Pediatric Dentist</p>
                        </div>
                    </div>
                    <div class="p-8 flex-1 flex flex-col">
                        <p class="text-slate-600 mb-6 flex-1 text-sm leading-relaxed">Providing a warmly calming, fun, and extremely safe environment for younger children ensuring they establish a lifelong positive association with oral health.</p>
                        <div class="flex items-center justify-between border-t border-gray-200 pt-6 mt-auto">
                            <div class="flex space-x-3">
                                <a href="#" class="w-8 h-8 rounded-full bg-blue-50 text-primary flex items-center justify-center hover:bg-primary hover:text-white transition-colors"><i class="fa-brands fa-linkedin-in text-sm"></i></a>
                                <a href="#" class="w-8 h-8 rounded-full bg-blue-50 text-primary flex items-center justify-center hover:bg-primary hover:text-white transition-colors"><i class="fa-solid fa-envelope text-sm"></i></a>
                            </div>
                            <a href="appointment.php"><button class="text-primary font-bold text-sm hover:text-dark transition-colors flex items-center gap-1">Appointment <i class="fa-solid fa-arrow-right"></i></button></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Join Team CTA / Trust Indicator -->
    <section class="py-20 bg-slate-50 border-t border-gray-100 relative">
        <div class="container mx-auto px-6">
            <div class="bg-white rounded-3xl p-10 md:p-16 shadow-2xl border border-gray-100 relative overflow-hidden">
                <div class="absolute -right-20 -top-20 w-80 h-80 bg-secondary/10 rounded-full blur-3xl z-0"></div>
                <div class="absolute -left-20 -bottom-20 w-80 h-80 bg-primary/10 rounded-full blur-3xl z-0"></div>
                
                <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-10">
                    <div class="md:w-2/3">
                        <span class="text-secondary font-bold tracking-wider uppercase text-sm mb-2 block">Top Rated Reliability</span>
                        <h3 class="text-3xl md:text-4xl font-bold text-dark mb-4">Want to book an appointment with a specific doctor?</h3>
                        <p class="text-slate-600 text-lg">Our booking portal intelligently routes you to our scheduling system. You can effortlessly request exactly which specialist perfectly treats your condition.</p>
                    </div>
                    <div class="md:w-1/3 flex justify-end">
                        <a href="appointment.php"><button class="bg-primary hover:bg-dark text-white px-8 py-4 rounded-full font-semibold transition-all duration-300 shadow-xl shadow-primary/30 hover:shadow-dark/30 hover:-translate-y-1 w-full md:w-auto text-lg flex items-center justify-center gap-2">Select Doctor <i class="fa-solid fa-calendar-check"></i></button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>



