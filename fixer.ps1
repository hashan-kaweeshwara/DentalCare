$path = "c:\Users\Hashan Kaweeshwara\Desktop\Dental Website"
$files = Get-ChildItem -Path $path -Filter "*.html"

foreach ($file in $files) {
    if ($file.Name -eq "template.html") { continue }
    
    $content = Get-Content -Path $file.FullName -Raw

    # Desktop Nav Links
    $content = $content -replace '<a href="#" class="font-medium text-slate-600 hover:text-primary transition-colors pb-1">About</a>', '<a href="about.html" class="font-medium text-slate-600 hover:text-primary transition-colors pb-1">About</a>'
    $content = $content -replace '<a href="#" class="font-medium text-slate-600 hover:text-primary transition-colors pb-1">Specialists</a>', '<a href="specialists.html" class="font-medium text-slate-600 hover:text-primary transition-colors pb-1">Specialists</a>'

    # Mobile Nav Links
    $content = $content -replace '<a href="#" class="font-medium text-slate-600 hover:text-primary">About</a>', '<a href="about.html" class="font-medium text-slate-600 hover:text-primary">About</a>'
    $content = $content -replace '<a href="#" class="font-medium text-slate-600 hover:text-primary">Specialists</a>', '<a href="specialists.html" class="font-medium text-slate-600 hover:text-primary">Specialists</a>'

    # Footer Links
    $content = $content -replace '<a href="#" class="hover:text-primary transition-colors flex items-center gap-2"><i class="fa-solid fa-chevron-right text-xs"></i> About Us</a>', '<a href="about.html" class="hover:text-primary transition-colors flex items-center gap-2"><i class="fa-solid fa-chevron-right text-xs"></i> About Us</a>'
    $content = $content -replace '<a href="#" class="hover:text-primary transition-colors flex items-center gap-2"><i class="fa-solid fa-chevron-right text-xs"></i> Specialists</a>', '<a href="specialists.html" class="hover:text-primary transition-colors flex items-center gap-2"><i class="fa-solid fa-chevron-right text-xs"></i> Specialists</a>'

    # Book Now link in Process section
    $content = $content -replace '<a href="#" class="text-xs font-semibold text-secondary hover:text-primary transition-colors">Book Now &rarr;</a>', '<a href="appointment.html" class="text-xs font-semibold text-secondary hover:text-primary transition-colors">Book Now &rarr;</a>'

    # Appointment Buttons
    # Match various appointment buttons safely and add <a> wrappers if missing.
    # 1. Nav Buttons (Desktop and Mobile)
    $pattern = '(?s)(?<!<a href="appointment\.html">[\r\n\s]*)<button([^>]+)>\s*Appointment\s*</button>'
    $content = [regex]::Replace($content, $pattern, '<a href="appointment.html"><button$1>Appointment</button></a>')

    # 2. Hero Book Appointment
    $pattern = '(?s)(?<!<a href="appointment\.html">[\r\n\s]*)<button([^>]+)>\s*Book Appointment\s*<i class="fa-solid fa-arrow-right text-sm"></i>\s*</button>'
    $content = [regex]::Replace($content, $pattern, '<a href="appointment.html"><button$1>Book Appointment <i class="fa-solid fa-arrow-right text-sm"></i></button></a>')

    # 3. Request Appointment (General CTA)
    $pattern = '(?s)(?<!<a href="appointment\.html">[\r\n\s]*)<button([^>]+)>\s*Request Appointment\s*<i class="fa-solid fa-arrow-right text-sm"></i>\s*</button>'
    $content = [regex]::Replace($content, $pattern, '<a href="appointment.html"><button$1>Request Appointment <i class="fa-solid fa-arrow-right text-sm"></i></button></a>')

    # 4. Select Doctor CTA
    $pattern = '(?s)(?<!<a href="appointment\.html">[\r\n\s]*)<button([^>]+)>\s*Select Doctor\s*<i class="fa-solid fa-calendar-check"></i>\s*</button>'
    $content = [regex]::Replace($content, $pattern, '<a href="appointment.html"><button$1>Select Doctor <i class="fa-solid fa-calendar-check"></i></button></a>')

    # 5. Service sidebar Appointment button
    $pattern = '(?s)(?<!<a href="appointment\.html">[\r\n\s]*)<button([^>]+)>\s*Appointment\s*<i class="fa-solid fa-arrow-right"></i>\s*</button>'
    $content = [regex]::Replace($content, $pattern, '<a href="appointment.html"><button$1>Appointment <i class="fa-solid fa-arrow-right"></i></button></a>')

    
    # Check if there's any remaining <a href="#"> inside specialists or others that indicate "Appointment"
    # Example: specialists buttons. Wait, the pattern #5 covers those. Specialists also use Appointment <i class=arrow>.

    Set-Content -Path $file.FullName -Value $content -Encoding UTF8
    Write-Host "Processed $($file.Name)"
}
