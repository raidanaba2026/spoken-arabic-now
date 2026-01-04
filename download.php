<?php
$allowedFiles = [
    '30_Airport_Phrases.pdf',
    '30_Restaurant_Phrases_Egyptian_Arabic.pdf'
];

$file = $_GET['file'] ?? '';

if(in_array($file, $allowedFiles)){
    $filepath = __DIR__ . '/protected/' . $file;
    if(file_exists($filepath)){
        // رسالة Gate
        echo "<script>
                if(confirm('يرجى الاشتراك في قناتنا على YouTube قبل التحميل! اضغط OK بعد الاشتراك.')){
                    window.location.href='protected/$file';
                } else { window.history.back(); }
              </script>";
        exit;
    }
}

echo "الملف غير متاح للتحميل!";
?>
