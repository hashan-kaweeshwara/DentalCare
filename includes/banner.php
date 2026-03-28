<!-- includes/banner.php -->
<section class="relative pt-24 pb-20 bg-primary overflow-hidden">
    <div class="absolute inset-0 z-0 opacity-20">
        <svg width="100%" height="100%" fill="none" viewBox="0 0 100 100" preserveAspectRatio="none">
            <pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse">
                <path d="M 40 0 L 0 0 0 40" stroke="white" stroke-width="0.5"/>
            </pattern>
            <rect width="100%" height="100%" fill="url(#grid)" />
        </svg>
    </div>
    <div class="absolute top-0 right-0 w-64 h-64 bg-secondary/30 rounded-full blur-3xl -z-10"></div>
    <div class="absolute bottom-0 left-10 w-40 h-40 bg-dark/20 rounded-full blur-2xl -z-10"></div>
    
    <div class="container mx-auto px-6 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4 animate-fade-in-up"><?= isset($banner_title) ? $banner_title : 'Dental Services' ?></h1>
        <p class="text-blue-50 max-w-2xl mx-auto text-lg animate-fade-in-up" style="animation-delay: 0.1s;"><?= isset($banner_subtitle) ? $banner_subtitle : '' ?></p>
    </div>
</section>
