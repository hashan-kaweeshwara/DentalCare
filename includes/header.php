<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($page_title) ? $page_title : 'Dental Hospital - Premium Care' ?></title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Outfit', 'sans-serif'],
                    },
                    colors: {
                        primary: '#0e7490', // cyan-700
                        secondary: '#06b6d4', // cyan-500
                        dark: '#0f172a', // slate-900
                        light: '#f8fafc', // slate-50
                    }
                }
            }
        }
    </script>
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body class="font-sans bg-light text-slate-700 antialiased selection:bg-primary selection:text-white">

    <!-- Top Bar -->
    <div class="bg-primary text-white text-sm py-2 hidden md:block">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <div class="flex space-x-6">
                <span class="flex items-center gap-2"><i class="fa-solid fa-phone"></i> +1 (555) 123-4567</span>
                <span class="flex items-center gap-2"><i class="fa-solid fa-envelope"></i> contact@dentalcare.com</span>
                <span class="flex items-center gap-2"><i class="fa-solid fa-clock"></i> Mon - Sat: 8:00 AM - 6:00 PM</span>
            </div>
            <div class="flex space-x-4">
                <a href="#" class="hover:text-secondary transition-colors"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="hover:text-secondary transition-colors"><i class="fa-brands fa-twitter"></i></a>
                <a href="#" class="hover:text-secondary transition-colors"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <header class="bg-white/90 backdrop-blur-md sticky top-0 z-50 border-b border-gray-100 shadow-sm transition-all duration-300" id="navbar">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <!-- Logo -->
            <a href="index.php" class="flex items-center gap-2 group">
                <div class="w-10 h-10 bg-gradient-to-tr from-primary to-secondary rounded-xl flex items-center justify-center text-white shadow-lg group-hover:scale-105 transition-transform">
                    <i class="fa-solid fa-tooth text-xl"></i>
                </div>
                <span class="text-2xl font-bold text-dark tracking-tight">Dental<span class="text-primary">Care</span></span>
            </a>

            <?php $current_page = basename($_SERVER['PHP_SELF']); ?>
            <!-- Desktop Menu -->
            <nav class="hidden md:flex items-center space-x-8">
                <a href="index.php" class="font-medium <?= ($current_page == 'index.php') ? 'text-primary border-b-2 border-primary' : 'text-slate-600 hover:text-primary transition-colors' ?> pb-1">Home</a>
                <a href="about.php" class="font-medium <?= ($current_page == 'about.php') ? 'text-primary border-b-2 border-primary' : 'text-slate-600 hover:text-primary transition-colors' ?> pb-1">About</a>
                <div class="relative group">
                    <a href="services.php" class="font-medium <?= (strpos($current_page, 'service') === 0) ? 'text-primary border-b-2 border-primary' : 'text-slate-600 hover:text-primary transition-colors' ?> pb-1 flex items-center gap-1">Services <i class="fa-solid fa-chevron-down text-[10px]"></i></a>
                    <div class="absolute top-full left-0 mt-2 w-56 bg-white border border-gray-100 shadow-xl rounded-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0 z-50 flex flex-col py-2">
                        <a href="service-general.php" class="px-4 py-2 text-sm <?= ($current_page == 'service-general.php') ? 'text-primary bg-slate-50' : 'text-slate-600 hover:text-primary hover:bg-slate-50 transition-colors' ?>">General Dentistry</a>
                        <a href="service-cosmetic.php" class="px-4 py-2 text-sm <?= ($current_page == 'service-cosmetic.php') ? 'text-primary bg-slate-50' : 'text-slate-600 hover:text-primary hover:bg-slate-50 transition-colors' ?>">Cosmetic Dentistry</a>
                        <a href="service-implants.php" class="px-4 py-2 text-sm <?= ($current_page == 'service-implants.php') ? 'text-primary bg-slate-50' : 'text-slate-600 hover:text-primary hover:bg-slate-50 transition-colors' ?>">Dental Implants</a>
                        <a href="service-orthodontics.php" class="px-4 py-2 text-sm <?= ($current_page == 'service-orthodontics.php') ? 'text-primary bg-slate-50' : 'text-slate-600 hover:text-primary hover:bg-slate-50 transition-colors' ?>">Orthodontics</a>
                        <a href="service-whitening.php" class="px-4 py-2 text-sm <?= ($current_page == 'service-whitening.php') ? 'text-primary bg-slate-50' : 'text-slate-600 hover:text-primary hover:bg-slate-50 transition-colors' ?>">Teeth Whitening</a>
                        <a href="service-root-canal.php" class="px-4 py-2 text-sm <?= ($current_page == 'service-root-canal.php') ? 'text-primary bg-slate-50' : 'text-slate-600 hover:text-primary hover:bg-slate-50 transition-colors' ?>">Root Canal Therapy</a>
                    </div>
                </div>
                <a href="specialists.php" class="font-medium <?= ($current_page == 'specialists.php') ? 'text-primary border-b-2 border-primary' : 'text-slate-600 hover:text-primary transition-colors' ?> pb-1">Specialists</a>
                <a href="appointment.php"><button class="bg-primary hover:bg-dark text-white px-6 py-2.5 rounded-full font-medium transition-all duration-300 shadow-lg shadow-primary/30 hover:shadow-dark/30 hover:-translate-y-0.5">Appointment</button></a>
            </nav>

            <!-- Mobile Menu Toggle -->
            <button class="md:hidden text-2xl text-slate-600 hover:text-primary focus:outline-none" id="mobile-menu-btn">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div class="md:hidden hidden bg-white border-t border-gray-100 absolute w-full left-0 shadow-xl" id="mobile-menu">
            <div class="flex flex-col px-6 py-4 space-y-4">
                <a href="index.php" class="font-medium <?= ($current_page == 'index.php') ? 'text-primary' : 'text-slate-600 hover:text-primary' ?>">Home</a>
                <a href="about.php" class="font-medium <?= ($current_page == 'about.php') ? 'text-primary' : 'text-slate-600 hover:text-primary' ?>">About</a>
                <div class="flex flex-col">
                    <div class="flex justify-between items-center w-full">
                        <a href="services.php" class="font-medium <?= (strpos($current_page, 'service') === 0) ? 'text-primary' : 'text-slate-600 hover:text-primary' ?>">Services</a>
                        <button onclick="document.getElementById('mobile-services-dropdown').classList.toggle('hidden'); this.querySelector('i').classList.toggle('rotate-180');" class="p-2 text-slate-500 hover:text-primary focus:outline-none">
                            <i class="fa-solid fa-chevron-down text-xs transition-transform duration-300"></i>
                        </button>
                    </div>
                    <div class="hidden flex-col pl-4 mt-2 space-y-3 border-l-2 border-primary/20 text-sm mb-2" id="mobile-services-dropdown">
                        <a href="service-general.php" class="<?= ($current_page == 'service-general.php') ? 'text-primary' : 'text-slate-500 hover:text-primary transition-colors' ?>">General Dentistry</a>
                        <a href="service-cosmetic.php" class="<?= ($current_page == 'service-cosmetic.php') ? 'text-primary' : 'text-slate-500 hover:text-primary transition-colors' ?>">Cosmetic Dentistry</a>
                        <a href="service-implants.php" class="<?= ($current_page == 'service-implants.php') ? 'text-primary' : 'text-slate-500 hover:text-primary transition-colors' ?>">Dental Implants</a>
                        <a href="service-orthodontics.php" class="<?= ($current_page == 'service-orthodontics.php') ? 'text-primary' : 'text-slate-500 hover:text-primary transition-colors' ?>">Orthodontics</a>
                        <a href="service-whitening.php" class="<?= ($current_page == 'service-whitening.php') ? 'text-primary' : 'text-slate-500 hover:text-primary transition-colors' ?>">Teeth Whitening</a>
                        <a href="service-root-canal.php" class="<?= ($current_page == 'service-root-canal.php') ? 'text-primary' : 'text-slate-500 hover:text-primary transition-colors' ?>">Root Canal Therapy</a>
                    </div>
                </div>
                <a href="specialists.php" class="font-medium <?= ($current_page == 'specialists.php') ? 'text-primary' : 'text-slate-600 hover:text-primary' ?>">Specialists</a>
                <a href="appointment.php"><button class="bg-primary text-white px-6 py-2.5 rounded-lg font-medium w-full mt-2">Appointment</button></a>
            </div>
        </div>
    </header>
