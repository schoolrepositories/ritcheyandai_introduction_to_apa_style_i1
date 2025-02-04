<?php
# Build.php
## Dependencies: PHP, Chromium (web browser)
$location = realpath(dirname(__FILE__));
require_once $location . '/dependencies/ritchey_markup_to_html_i1_v22/ritchey_markup_to_html_i1_v22.php';
$return = ritchey_markup_to_html_i1_v22("{$location}/working_files/Introduction to APA Style v0.1.txt", "{$location}/working_files/Introduction to APA Style v0.1.html", "{$location}/dependencies/ritchey_markup_to_html_i1_v22/assets/ebook-theme-v1.css", TRUE, TRUE);
if ($return === TRUE){
	echo "TRUE" . PHP_EOL;
} else {
	echo "FALSE" . PHP_EOL;
}
/////////////////////////// Check if Chromium is installed
exec("chromium --headless --print-to-pdf=\"{$location}/content/Introduction to APA Style v0.1.pdf\" \"{$location}/working_files/Introduction to APA Style v0.1.html\"");
//////////////////////////// Check if command ran successfully, and file was created successfully
?>