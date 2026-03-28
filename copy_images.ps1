$srcDir = "C:\Users\Hashan Kaweeshwara\.gemini\antigravity\brain\1de9efe3-78c9-4995-b5d8-9b7a29be5bd3"
$destDir = "c:\Users\Hashan Kaweeshwara\Desktop\Dental Website\assets"

if (-Not (Test-Path -Path $destDir)) {
    New-Item -ItemType Directory -Path $destDir | Out-Null
}

$files = Get-ChildItem -Path $srcDir -Filter "*.png"

foreach ($file in $files) {
    if ($file.Name -match "^(.+)_\d+\.png$") {
        $newName = $matches[1] + ".png"
        Copy-Item -Path $file.FullName -Destination (Join-Path -Path $destDir -ChildPath $newName) -Force
        Write-Host "Copied and renamed $_ to $newName"
    }
}
