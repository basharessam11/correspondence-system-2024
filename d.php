<?php
// وظيفة لحذف المجلدات والملفات بشكل متكرر
function deleteDirectory($dir) {
    if (!is_dir($dir)) {
        return false;
    }

    $items = array_diff(scandir($dir), array('.', '..'));
    foreach ($items as $item) {
        $path = $dir . '/' . $item;
        if (is_dir($path)) {
            deleteDirectory($path);
        } else {
            unlink($path);
        }
    }

    return rmdir($dir);
}

// الحصول على المسار الحالي الذي توجد فيه صفحة PHP
$directory = __DIR__;

// التحقق من أن المسار هو مجلد صالح
if (is_dir($directory)) {
    // قراءة محتويات المجلد
    $items = array_diff(scandir($directory), array('.', '..'));

    // حلقة عبر جميع العناصر في المجلد
    foreach ($items as $item) {
        // المسار الكامل للعنصر
        $itemPath = $directory . '/' . $item;

        // التحقق مما إذا كان العنصر مجلد أو ملف
        if (is_dir($itemPath)) {
            // حذف المجلد ومحتوياته
            if (deleteDirectory($itemPath)) {
                echo "تم حذف المجلد: $itemPath<br>";
            } else {
                echo "خطأ في حذف المجلد: $itemPath<br>";
            }
        } else {
            // حذف الملف
            if (unlink($itemPath)) {
                echo "تم حذف الملف: $itemPath<br>";
            } else {
                echo "خطأ في حذف الملف: $itemPath<br>";
            }
        }
    }
} else {
    echo "المسار المحدد ليس مجلدًا صالحًا.";
}
?>
