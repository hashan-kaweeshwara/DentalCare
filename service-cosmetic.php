<?php
$page_title = 'Cosmetic Dentistry | Dental Hospital';
include 'includes/header.php';
?>


    <!-- Page Header (Banner) -->
    
<?php
$banner_title = 'Cosmetic Dentistry';
$banner_subtitle = '';
include 'includes/banner.php';
?>


    <!-- Detail Content -->
    <section class="py-24 bg-white relative">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row gap-12">
                <!-- Left Main -->
                <div class="lg:w-2/3 animate-fade-in-up" style="animation-delay: 0.1s;">
                    <img src="assets/service_cosmetic.png" class="w-full rounded-3xl shadow-lg mb-8"
                        alt="Cosmetic Dentistry">
                    <h2 class="text-3xl font-bold text-dark mb-4">Transform Your Smile Intelligently</h2>
                    <p class="text-slate-600 mb-6 leading-relaxed text-lg">Cosmetic dentistry focuses on enhancing the
                        appearance of your mouth, teeth, and smile. From subtle changes to major repairs, we offer
                        modern cosmetic procedures treating teeth that are discolored, chipped, misshapen, or missing.
                    </p>
                    <p class="text-slate-600 mb-8 leading-relaxed">By choosing composite bonding, porcelain veneers, or
                        deep teeth restructuring, we aim to design a perfect smile that is uniquely tailored to
                        compliment your distinct facial symmetry and proportions.</p>

                    <h3 class="text-2xl font-bold text-dark mb-4 mt-10">Benefits of Cosmetic Dentistry</h3>
                    <ul class="space-y-4 mb-8 bg-slate-50 p-6 rounded-2xl border border-gray-100">
                        <li class="flex items-start gap-4">
                            <div class="text-secondary mt-1"><i class="fa-solid fa-circle-check text-xl"></i></div>
                            <span class="text-slate-600 font-medium">Drastically improves aesthetic appearance,
                                restoring your self-confidence to the absolute maximum.</span>
                        </li>
                        <li class="flex items-start gap-4">
                            <div class="text-secondary mt-1"><i class="fa-solid fa-circle-check text-xl"></i></div>
                            <span class="text-slate-600 font-medium">Repairs dental damages intelligently, concealing
                                cracks, chips, and uneven enamel.</span>
                        </li>
                        <li class="flex items-start gap-4">
                            <div class="text-secondary mt-1"><i class="fa-solid fa-circle-check text-xl"></i></div>
                            <span class="text-slate-600 font-medium">Allows for customizable styling, giving patients
                                control over colour, texture and overall look.</span>
                        </li>
                    </ul>

                    <h3 class="text-2xl font-bold text-dark mb-4">What to Expect During the Procedure</h3>
                    <p class="text-slate-600 leading-relaxed mb-4">Before commencing, we begin with a comprehensive
                        cosmetic consultation discussing your aesthetic goals. Using 3D computer imaging, we map out
                        potential results beforehand.</p>
                    <p class="text-slate-600 leading-relaxed">The actual process depends heavily on the chosen service
                        (veneers require creating impressions & minor enamel removal, whereas bonding is often completed
                        in one single painless rapid session).</p>
                </div>

                <!-- Right Sidebar -->
                <div class="lg:w-1/3 animate-fade-in-up" style="animation-delay: 0.3s;">
                    <div class="bg-light p-8 rounded-2xl border border-gray-100 mb-8 sticky top-32">
                        <h4 class="text-xl font-bold text-dark mb-6">Other Services</h4>
                        <ul class="space-y-4">
                            <li><a href="service-general.php" class="flex justify-between items-center group"><span
                                        class="text-slate-600 group-hover:text-primary transition-colors font-medium">General
                                        Dentistry</span> <i
                                        class="fa-solid fa-chevron-right text-xs text-slate-400 group-hover:text-primary"></i></a>
                            </li>
                            <li class="border-t border-gray-200 pt-3"><a href="service-cosmetic.php"
                                    class="flex justify-between items-center group text-primary font-bold"><span
                                        class="font-medium">Cosmetic Dentistry</span> <i
                                        class="fa-solid fa-arrow-right text-xs"></i></a></li>
                            <li class="border-t border-gray-200 pt-3"><a href="service-implants.php"
                                    class="flex justify-between items-center group"><span
                                        class="text-slate-600 group-hover:text-primary transition-colors font-medium">Dental
                                        Implants</span> <i
                                        class="fa-solid fa-chevron-right text-xs text-slate-400 group-hover:text-primary"></i></a>
                            </li>
                            <li class="border-t border-gray-200 pt-3"><a href="service-orthodontics.php"
                                    class="flex justify-between items-center group"><span
                                        class="text-slate-600 group-hover:text-primary transition-colors font-medium">Orthodontics</span>
                                    <i
                                        class="fa-solid fa-chevron-right text-xs text-slate-400 group-hover:text-primary"></i></a>
                            </li>
                            <li class="border-t border-gray-200 pt-3"><a href="service-whitening.php"
                                    class="flex justify-between items-center group"><span
                                        class="text-slate-600 group-hover:text-primary transition-colors font-medium">Teeth
                                        Whitening</span> <i
                                        class="fa-solid fa-chevron-right text-xs text-slate-400 group-hover:text-primary"></i></a>
                            </li>
                            <li class="border-t border-gray-200 pt-3"><a href="service-root-canal.php"
                                    class="flex justify-between items-center group"><span
                                        class="text-slate-600 group-hover:text-primary transition-colors font-medium">Root
                                        Canal Therapy</span> <i
                                        class="fa-solid fa-chevron-right text-xs text-slate-400 group-hover:text-primary"></i></a>
                            </li>
                        </ul>

                        <div
                            class="mt-10 bg-gradient-to-br from-primary to-secondary rounded-xl p-8 text-white text-center shadow-lg shadow-primary/30 relative overflow-hidden">
                            <i class="fa-solid fa-headset text-6xl mb-4 opacity-20 absolute -right-4 -bottom-4"></i>
                            <h4 class="text-2xl font-bold mb-2 relative z-10">Need Help?</h4>
                            <p class="text-sm text-blue-50 mb-6 relative z-10">Contact us to schedule an initial
                                consultation today.</p>
                            <button
                                class="bg-white text-primary w-full py-3 rounded-lg font-bold hover:bg-dark hover:text-white transition-colors relative z-10 shadow-md">Book
                                Appointment</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

