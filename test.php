<?php
session_start();

// تحديد وقت انتهاء الجلسة بالثواني (هنا 5 دقائق = 300 ثانية)
$session_timeout = 400;
echo   time() -$_SESSION['LAST_ACTIVITY'];
// تحديث وقت النشاط الأخير في الجلسة
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > $session_timeout)) {
    // إذا تجاوز وقت الخمول المهلة المحددة، يتم إنهاء الجلسة
    session_unset();
    session_destroy();
    header("Location: logout.php");
    exit();
}
// $_SESSION['LAST_ACTIVITY'] = time(); // تحديث وقت النشاط الأخير
?>