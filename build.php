<?php
# Build.php
## Dependencies: PHP, Chromium (web browser)
$location = realpath(dirname(__FILE__));
require_once $location . '/dependencies/ritchey_markup_to_html_i1_v23/ritchey_markup_to_html_i1_v23.php';
$return = ritchey_markup_to_html_i1_v23("{$location}/working_files/Introduction to APA Style v0.2.txt", "{$location}/working_files/Introduction to APA Style v0.2.html", "{$location}/dependencies/ritchey_markup_to_html_i1_v23/assets/ebook-theme-v3.css", TRUE, TRUE, TRUE);
if ($return === TRUE){
	echo "TRUE" . PHP_EOL;
} else {
	echo "FALSE" . PHP_EOL;
}
/////////////////////////// Check if Chromium is installed
exec("chromium --headless --print-to-pdf=\"{$location}/content/Introduction to APA Style v0.2.pdf\" \"{$location}/working_files/Introduction to APA Style v0.2.html\"");
//////////////////////////// Check if command ran successfully, and file was created successfully
?>