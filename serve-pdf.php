<?php
$file = 'private/resume.pdf';

if (file_exists($file)) {
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="TejasChandraResume.pdf"');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
} else {
    header("HTTP/1.0 404 Not Found");
    echo "File not found.";
}
?>
