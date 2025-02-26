<?php
require_once 'php/config/db.php';
require_once 'fetch_testimonials.php';

$db = new Database();
$testimonialObj = new Testimonial($db);
$testimonial = $testimonialObj->getHomePageTestimonials();

foreach ($testimonial as $testimonials) {
    echo '<div class="testimonial">';
    echo '<div class="content">';
    echo '<p>' . htmlspecialchars($twit['content']) . '</p>';
    echo '</div>';
    echo '<div class="user-name">';
    echo '<p>' . htmlspecialchars($twit['username']) . '</p>';
    echo '</div>';
    echo '</div>';
}
?>
