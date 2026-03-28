<?php
$page_title = 'General Dentistry | Dental Hospital';
include 'includes/header.php';
?>


    <!-- Page Header (Banner) -->
    
<?php
$banner_title = 'General Dentistry';
$banner_subtitle = '';
include 'includes/banner.php';
?>


    <!-- Detail Content -->
    <section class="py-24 bg-white relative">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row gap-12">
                <!-- Left Main -->
                <div class="lg:w-2/3 animate-fade-in-up" style="animation-delay: 0.1s;">
                    <img src="assets/service_general.png" class="w-full rounded-3xl shadow-lg mb-8" alt="General Dentistry">
                    <h2 class="text-3xl font-bold text-dark mb-4">Comprehensive Care for Your Smile</h2>
                    <p class="text-slate-600 mb-6 leading-relaxed text-lg">General dentistry is the foundation of a healthy, beautiful smile. From routine check-ups and cleanings to preventative treatments, we cover all aspects of maintaining your oral health permanently.</p>
                    <p class="text-slate-600 mb-8 leading-relaxed">Our clinical experts utilize advanced diagnostic equipment to identify emerging issues before they become problematic. Emphasizing preventative measures completely shifts standard reactive dental care towards a proactive approach.</p>
                    
                    <h3 class="text-2xl font-bold text-dark mb-4 mt-10">Benefits of General Dentistry</h3>
                    <ul class="space-y-4 mb-8 bg-slate-50 p-6 rounded-2xl border border-gray-100">
                        <li class="flex items-start gap-4"><div class="text-secondary mt-1"><i class="fa-solid fa-circle-check text-xl"></i></div> <span class="text-slate-600 font-medium">Prevents tooth decay, cavities, and painful gum disease from forming.</span></li>
                        <li class="flex items-start gap-4"><div class="text-secondary mt-1"><i class="fa-solid fa-circle-check text-xl"></i></div> <span class="text-slate-600 font-medium">Early detection of oral health issues saving both time and extensive costs.</span></li>
                        <li class="flex items-start gap-4"><div class="text-secondary mt-1"><i class="fa-solid fa-circle-check text-xl"></i></div> <span class="text-slate-600 font-medium">Maintains strong teeth, promoting a beautiful, confident aesthetic smile.</span></li>
                    </ul>

                    <h3 class="text-2xl font-bold text-dark mb-4">What to Expect During the Procedure</h3>
                    <p class="text-slate-600 leading-relaxed mb-4">During a standard checkup, our hygienists will professionally clean and polish your teeth to remove built-up plaque and tartar. Afterward, one of our experienced dentists will conduct a thorough examination of your teeth, bite, and gums.</p>
                    <p class="text-slate-600 leading-relaxed">If necessary, highly-accurate digital X-rays will be taken directly inside the office block for precise unseen structural review. Following the exam, you will receive a straightforward comprehensive plan detailing any necessary follow-up work.</p>
                </div>
                
                <!-- Right Sidebar -->
                <div class="lg:w-1/3 animate-fade-in-up" style="animation-delay: 0.3s;">
                    <div class="bg-light p-8 rounded-2xl border border-gray-100 mb-8 sticky top-32">
                        <h4 class="text-xl font-bold text-dark mb-6">Other Services</h4>
                        <ul class="space-y-4">
                            <li><a href="service-general.php" class="flex justify-between items-center group text-primary font-bold"><span class="font-medium">General Dentistry</span> <i class="fa-solid fa-arrow-right text-xs"></i></a></li>
                            <li class="border-t border-gray-200 pt-3"><a href="service-cosmetic.php" class="flex justify-between items-center group"><span class="text-slate-600 group-hover:text-primary transition-colors font-medium">Cosmetic Dentistry</span> <i class="fa-solid fa-chevron-right text-xs text-slate-400 group-hover:text-primary"></i></a></li>
                            <li class="border-t border-gray-200 pt-3"><a href="service-implants.php" class="flex justify-between items-center group"><span class="text-slate-600 group-hover:text-primary transition-colors font-medium">Dental Implants</span> <i class="fa-solid fa-chevron-right text-xs text-slate-400 group-hover:text-primary"></i></a></li>
                            <li class="border-t border-gray-200 pt-3"><a href="service-orthodontics.php" class="flex justify-between items-center group"><span class="text-slate-600 group-hover:text-primary transition-colors font-medium">Orthodontics</span> <i class="fa-solid fa-chevron-right text-xs text-slate-400 group-hover:text-primary"></i></a></li>
                            <li class="border-t border-gray-200 pt-3"><a href="service-whitening.php" class="flex justify-between items-center group"><span class="text-slate-600 group-hover:text-primary transition-colors font-medium">Teeth Whitening</span> <i class="fa-solid fa-chevron-right text-xs text-slate-400 group-hover:text-primary"></i></a></li>
                            <li class="border-t border-gray-200 pt-3"><a href="service-root-canal.php" class="flex justify-between items-center group"><span class="text-slate-600 group-hover:text-primary transition-colors font-medium">Root Canal Therapy</span> <i class="fa-solid fa-chevron-right text-xs text-slate-400 group-hover:text-primary"></i></a></li>
                        </ul>

                        <div class="mt-10 bg-gradient-to-br from-primary to-secondary rounded-xl p-8 text-white text-center shadow-lg shadow-primary/30 relative overflow-hidden">
                            <i class="fa-solid fa-headset text-6xl mb-4 opacity-20 absolute -right-4 -bottom-4"></i>
                            <h4 class="text-2xl font-bold mb-2 relative z-10">Need Help?</h4>
                            <p class="text-sm text-blue-50 mb-6 relative z-10">Contact us to schedule an initial consultation today.</p>
                            <button class="bg-white text-primary w-full py-3 rounded-lg font-bold hover:bg-dark hover:text-white transition-colors relative z-10 shadow-md">Book Appointment</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>



