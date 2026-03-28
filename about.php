<?php
$page_title = 'About Us | Dental Hospital';
include 'includes/header.php';
?>


    <!-- Page Header (Banner) -->
    
<?php
$banner_title = 'About DentalCare';
$banner_subtitle = '<path d="M 40 0 L 0 0 0 40" stroke="white" stroke-width="0.5"/></pattern><rect width="100%" height="100%" fill="url(#grid)" /></svg></div>
        <div class="absolute top-0 right-0 w-64 h-64 bg-secondary rounded-full blur-3xl opacity-50 z-0 transform translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-dark rounded-full blur-3xl opacity-20 z-0 transform -translate-x-1/2 translate-y-1/2"></div>

        <div class="container mx-auto px-6 relative z-10 text-center animate-fade-in-up">
            <p class="text-blue-100 text-lg max-w-2xl mx-auto">Discover the passion, medical excellence, and patient-first philosophy driving our clinic\'s monumental success story.';
include 'includes/banner.php';
?>


    <!-- Our Story Section -->
    <section class="py-24 bg-white relative">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div class="relative animate-fade-in-up" style="animation-delay: 0.1s;">
                    <!-- Split Image Layout -->
                    <div class="grid grid-cols-2 gap-4 relative z-10">
                        <img src="assets/clinic_care.png" alt="Clinic Office" class="rounded-2xl shadow-lg w-full h-[300px] object-cover mt-12">
                        <img src="assets/clinic_hallway.png" alt="Clinic Hallway" class="rounded-2xl shadow-lg w-full h-[300px] object-cover">
                    </div>
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[110%] h-[110%] bg-secondary/10 rounded-full blur-3xl z-0"></div>
                    <div class="absolute -bottom-8 -left-8 bg-white p-6 rounded-2xl shadow-xl z-20 border border-gray-100 flex items-center gap-4 animate-float">
                        <div class="w-16 h-16 bg-primary text-white rounded-full flex flex-col items-center justify-center font-bold text-xl leading-none">
                            <span>15</span>
                            <span class="text-xs font-normal opacity-80 mt-0.5">Years</span>
                        </div>
                        <div>
                            <p class="font-bold text-dark text-lg leading-tight">Of Combined</p>
                            <p class="text-slate-500 text-sm">Clinical Excellence</p>
                        </div>
                    </div>
                </div>
                
                <div class="animate-fade-in-up" style="animation-delay: 0.2s;">
                    <span class="text-secondary font-bold tracking-wider uppercase text-sm">Our Story</span>
                    <h2 class="text-4xl md:text-5xl font-bold text-dark mt-2 mb-6">Changing Lives, One Perfect Smile at a Time.</h2>
                    <p class="text-slate-600 text-lg mb-6 leading-relaxed">Founded in 2011, DentalCare began with a simple yet ambitious vision: to entirely remove the anxiety traditionally associated with dentistry by creating a truly modern, comfortable, and highly advanced medical environment.</p>
                    <p class="text-slate-600 text-lg mb-8 leading-relaxed">Today, we are honored to have treated over 10,000+ happy patients natively from within our local community. Our team continuously researches emerging dental technology to ensure our patient's care remains the absolute highest possible standard.</p>
                    
                    <div class="grid grid-cols-2 gap-8 pt-6 border-t border-gray-100">
                        <div>
                            <h4 class="text-primary font-bold text-xl mb-2"><i class="fa-solid fa-bullseye text-secondary mr-2"></i> Our Mission</h4>
                            <p class="text-slate-500 text-sm">To provide unparalleled ethical dental care while delivering flawlessly beautiful aesthetic results safely.</p>
                        </div>
                        <div>
                            <h4 class="text-primary font-bold text-xl mb-2"><i class="fa-solid fa-eye text-secondary mr-2"></i> Our Vision</h4>
                            <p class="text-slate-500 text-sm">To structurally redefine community dentistry standardizing painless, transparent clinical approaches exclusively.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values -->
    <section class="py-24 bg-slate-50 relative">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-16 animate-fade-in-up" style="animation-delay: 0.1s;">
                <span class="text-secondary font-bold tracking-wider uppercase text-sm">What Drives Us</span>
                <h2 class="text-4xl font-bold text-dark mt-2 mb-4">Our Core Philosophy</h2>
                <p class="text-slate-600 border-b border-gray-200 pb-8">Everything we do inside our clinic revolves precisely around four fundamental patient-first pillars of care.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Value 1 -->
                <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border border-gray-100 text-center animate-fade-in-up" style="animation-delay: 0.2s;">
                    <div class="w-20 h-20 bg-primary/10 rounded-full flex items-center justify-center text-primary text-3xl mx-auto mb-6">
                        <i class="fa-solid fa-heart-pulse"></i>
                    </div>
                    <h3 class="text-xl font-bold text-dark mb-3">Absolute Comfort</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">We utilize profound local anesthesia combinations generating completely painless dental treatments safely.</p>
                </div>

                <!-- Value 2 -->
                <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border border-gray-100 text-center animate-fade-in-up" style="animation-delay: 0.3s;">
                    <div class="w-20 h-20 bg-primary/10 rounded-full flex items-center justify-center text-primary text-3xl mx-auto mb-6">
                        <i class="fa-solid fa-microchip"></i>
                    </div>
                    <h3 class="text-xl font-bold text-dark mb-3">Advanced Tech</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Integrated 3D-Scanners & digital X-Rays drastically minimizing radiation exposure maximizing scanning efficiency.</p>
                </div>

                <!-- Value 3 -->
                <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border border-gray-100 text-center animate-fade-in-up" style="animation-delay: 0.4s;">
                    <div class="w-20 h-20 bg-primary/10 rounded-full flex items-center justify-center text-primary text-3xl mx-auto mb-6">
                        <i class="fa-solid fa-hand-holding-dollar"></i>
                    </div>
                    <h3 class="text-xl font-bold text-dark mb-3">Transparent Cost</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Never any hidden or surprise clinical fees; total billing clarity provided priorly to every scheduled treatment.</p>
                </div>

                <!-- Value 4 -->
                <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border border-gray-100 text-center animate-fade-in-up" style="animation-delay: 0.5s;">
                    <div class="w-20 h-20 bg-primary/10 rounded-full flex items-center justify-center text-primary text-3xl mx-auto mb-6">
                        <i class="fa-solid fa-people-group"></i>
                    </div>
                    <h3 class="text-xl font-bold text-dark mb-3">Community First</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">We deeply sponsor local charities effectively giving back healthy smiles to those immediately in need locally.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Clinic Gallery / Facility Showcase -->
    <section class="py-24 bg-white relative">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center justify-between mb-12">
                <div class="mb-6 md:mb-0 animate-fade-in-up" style="animation-delay: 0.1s;">
                    <span class="text-secondary font-bold tracking-wider uppercase text-sm">Inside Our Clinic</span>
                    <h2 class="text-4xl font-bold text-dark mt-2">A Modern Restful Facility</h2>
                </div>
                <div class="animate-fade-in-up" style="animation-delay: 0.2s;">
                    <a href="appointment.php"><button class="bg-dark hover:bg-primary text-white px-8 py-3.5 rounded-full font-semibold transition-all duration-300 shadow-md">Visit Us In Person</button></a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 animate-fade-in-up" style="animation-delay: 0.3s;">
                <div class="group relative overflow-hidden rounded-2xl h-72">
                    <img src="assets/clinic_reception.png" alt="Reception" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-dark/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <p class="text-white font-bold text-xl transform translate-y-4 group-hover:translate-y-0 transition-transform">Welcoming Reception</p>
                    </div>
                </div>
                <div class="group relative overflow-hidden rounded-2xl h-72 md:col-span-2">
                    <img src="assets/hero_dentist.png" alt="Treatment Room" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-dark/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <p class="text-white font-bold text-xl transform translate-y-4 group-hover:translate-y-0 transition-transform">State-of-the-Art Treatment Rooms</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>



