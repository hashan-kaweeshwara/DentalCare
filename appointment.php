<?php
$page_title = 'Request Appointment | Dental Hospital';
include 'includes/header.php';
?>


    <!-- Page Header (Banner) -->
    
<?php
$banner_title = 'Book An Appointment';
$banner_subtitle = '<path d="M 40 0 L 0 0 0 40" stroke="white" stroke-width="0.5"/></pattern><rect width="100%" height="100%" fill="url(#grid)" /></svg></div>
        <div class="absolute top-0 right-0 w-64 h-64 bg-secondary rounded-full blur-3xl opacity-50 z-0 transform translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-dark rounded-full blur-3xl opacity-20 z-0 transform -translate-x-1/2 translate-y-1/2"></div>

        <div class="container mx-auto px-6 relative z-10 text-center animate-fade-in-up">
            <p class="text-blue-100 text-lg max-w-2xl mx-auto">Fill out the form perfectly tailored to your needs below. We will routinely confirm your appointment right away to give you that beautiful smile safely.';
include 'includes/banner.php';
?>


    <!-- Booking Content -->
    <section class="py-24 bg-white relative">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row gap-16">
                
                <!-- Appointment Form -->
                <div class="lg:w-2/3 animate-fade-in-up" style="animation-delay: 0.1s;">
                    <div class="bg-white p-10 rounded-3xl shadow-[0_0_50px_rgba(0,0,0,0.05)] border border-gray-100">
                        <div class="mb-8 border-b border-gray-100 pb-6">
                            <h2 class="text-3xl font-bold text-dark mb-2">Request Your Visit</h2>
                            <p class="text-slate-500">Please provide all specific details realistically so we can serve you better.</p>
                        </div>
                        
                        <form action="#" method="POST">
                            <div class="grid md:grid-cols-2 gap-6 mb-6">
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">First Name <span class="text-red-500">*</span></label>
                                    <input type="text" placeholder="John" class="w-full px-5 py-3 rounded-xl bg-slate-50 border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all" required>
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">Last Name <span class="text-red-500">*</span></label>
                                    <input type="text" placeholder="Doe" class="w-full px-5 py-3 rounded-xl bg-slate-50 border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all" required>
                                </div>
                            </div>

                            <div class="grid md:grid-cols-2 gap-6 mb-6">
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">Email Address <span class="text-red-500">*</span></label>
                                    <input type="email" placeholder="john.doe@example.com" class="w-full px-5 py-3 rounded-xl bg-slate-50 border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all" required>
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">Phone Number <span class="text-red-500">*</span></label>
                                    <input type="tel" placeholder="+1 (555) 000-0000" class="w-full px-5 py-3 rounded-xl bg-slate-50 border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all" required>
                                </div>
                            </div>

                            <div class="grid md:grid-cols-2 gap-6 mb-6">
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">Preferred Date <span class="text-red-500">*</span></label>
                                    <input type="date" class="w-full px-5 py-3 rounded-xl bg-slate-50 border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all text-slate-600" required>
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">Preferred Time <span class="text-red-500">*</span></label>
                                    <select class="w-full px-5 py-3 rounded-xl bg-slate-50 border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all text-slate-600" required>
                                        <option value="" disabled selected>Select a time</option>
                                        <option value="morning">Morning (8:00 AM - 12:00 PM)</option>
                                        <option value="afternoon">Afternoon (1:00 PM - 5:00 PM)</option>
                                        <option value="evening">Evening (5:00 PM - 6:00 PM)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="grid md:grid-cols-2 gap-6 mb-6">
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">Service Needed</label>
                                    <select class="w-full px-5 py-3 rounded-xl bg-slate-50 border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all text-slate-600">
                                        <option value="general">General Dentistry</option>
                                        <option value="cosmetic">Cosmetic Dentistry</option>
                                        <option value="implants">Dental Implants</option>
                                        <option value="orthodontics">Orthodontics</option>
                                        <option value="whitening">Teeth Whitening</option>
                                        <option value="root-canal">Root Canal Therapy</option>
                                        <option value="other">Other / Consultation</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">Preferred Doctor</label>
                                    <select class="w-full px-5 py-3 rounded-xl bg-slate-50 border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all text-slate-600">
                                        <option value="any">Any Available Doctor</option>
                                        <option value="miller">Dr. Sarah Miller</option>
                                        <option value="wilson">Dr. James Wilson</option>
                                        <option value="chen">Dr. Emily Chen</option>
                                        <option value="brown">Dr. Michael Brown</option>
                                        <option value="davis">Dr. Rebecca Davis</option>
                                        <option value="thompson">Dr. David Thompson</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="mb-8">
                                <label class="block text-sm font-semibold text-slate-700 mb-2">Additional Messages</label>
                                <textarea rows="4" placeholder="Tell us briefly about any symptoms, dental history, or special requirements..." class="w-full px-5 py-3 rounded-xl bg-slate-50 border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all resize-none"></textarea>
                            </div>

                            <button type="button" class="bg-primary hover:bg-dark text-white w-full py-4 flex items-center justify-center gap-3 rounded-xl font-bold text-lg transition-all duration-300 shadow-xl shadow-primary/30 hover:shadow-dark/30 hover:-translate-y-1">
                                Confirm Appointment <i class="fa-solid fa-paper-plane text-sm"></i>
                            </button>
                        </form>
                    </div>
                </div>
                
                <!-- Contact Info Sidebar -->
                <div class="lg:w-1/3 animate-fade-in-up" style="animation-delay: 0.3s;">
                    <div class="space-y-8">
                        
                        <!-- Info Card -->
                        <div class="bg-dark p-8 rounded-3xl text-white shadow-xl">
                            <h3 class="text-2xl font-bold mb-6">Contact Info</h3>
                            <ul class="space-y-6">
                                <li class="flex items-start gap-4">
                                    <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center shrink-0">
                                        <i class="fa-solid fa-location-dot text-primary text-xl"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold mb-1">Our Location</h4>
                                        <p class="text-slate-300 text-sm leading-relaxed">123 Dental Avenue, Medical District,<br>NY 10001, United States</p>
                                    </div>
                                </li>
                                <li class="flex items-start gap-4">
                                    <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center shrink-0">
                                        <i class="fa-solid fa-phone text-primary text-xl"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold mb-1">Call Us</h4>
                                        <p class="text-slate-300 text-sm mb-1">+1 (555) 123-4567</p>
                                        <p class="text-slate-300 text-sm">+1 (555) 987-6543</p>
                                    </div>
                                </li>
                                <li class="flex items-start gap-4">
                                    <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center shrink-0">
                                        <i class="fa-solid fa-envelope text-primary text-xl"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold mb-1">Email Us</h4>
                                        <p class="text-slate-300 text-sm">contact@dentalcare.com</p>
                                        <p class="text-slate-300 text-sm">support@dentalcare.com</p>
                                    </div>
                                </li>
                            </ul>
                            
                            <!-- Hours -->
                            <div class="mt-8 pt-8 border-t border-white/10">
                                <h4 class="font-bold text-lg mb-4">Working Hours</h4>
                                <div class="space-y-2 text-sm">
                                    <div class="flex justify-between text-slate-300"><span class="font-medium text-white">Monday - Friday:</span> <span>8:00 AM - 6:00 PM</span></div>
                                    <div class="flex justify-between text-slate-300"><span class="font-medium text-white">Saturday:</span> <span>8:00 AM - 2:00 PM</span></div>
                                    <div class="flex justify-between text-slate-300"><span class="font-medium text-white">Sunday:</span> <span class="text-primary font-bold">Closed</span></div>
                                </div>
                            </div>
                        </div>

                        <!-- Map Placeholder Image -->
                        <div class="bg-light rounded-3xl overflow-hidden shadow-sm border border-gray-100 h-64 relative group cursor-pointer">
                            <img src="assets/clinic_map.png" alt="Map Location" class="w-full h-full object-cover opacity-80 group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute inset-0 bg-dark/20 group-hover:bg-dark/40 transition-colors flex items-center justify-center">
                                <div class="w-14 h-14 bg-white text-primary rounded-full flex items-center justify-center shadow-xl animate-bounce">
                                    <i class="fa-solid fa-location-dot text-2xl"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>



