<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    // Verify nonce
    if (isset($_POST['contact_form_nonce']) && wp_verify_nonce($_POST['contact_form_nonce'], 'contact_form_nonce')) {
        // Process form data
        $full_name = sanitize_text_field($_POST['full-name']);
        $email = sanitize_email($_POST['email']);
        $message = wp_kses_post($_POST['message']); // Allow HTML in the message

        // Validate data
        if (empty($full_name) || empty($email) || empty($message)) {
            // Handle validation errors
            echo '<div class="msg-contact-form error">Please fill in all required fields.</div>';
        } else {
            // Set the "From" name in the email
            add_filter('wp_mail_from_name', function ($from_name) use ($full_name) {
                return $full_name;
            });

            // Example: Send an email
            $to = 'boris.galac@gmail.com';
            $subject = 'Nova poruka od Zošak Consulting';
            $headers = array('Content-Type: text/html; charset=UTF-8');

            // Format the email body
            $mail_body = "<strong style='font-size:17px;'>Ime i prezime:</strong> $full_name<br><br>";
            $mail_body .= "<strong style='font-size:17px;'>Email:</strong> $email<br><br>";
            $mail_body .= "<strong style='font-size:17px;'>Poruka:</strong> $message<br><br>";

            wp_mail($to, $subject, $mail_body, $headers);

            // Remove the filter after sending the email
            remove_filter('wp_mail_from_name', 'custom_wp_mail_from_name');

            // Redirect after successful form submission
            wp_redirect(get_permalink());
            exit();
        }
    } else {
        // Invalid nonce
        echo '<div class="msg-contact-form error">Security check failed. Please try again.</div>';
    }
}
?>

<form class="contact-form" method="POST" name="contact-form">
    <div class="contact__form-input">
        <label for="full-name">Ime i Prezime</label>
        <input type="text" id="full-name" name="full-name" required aria-required="true" />
    </div>
    <div class="contact__form-input">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required aria-required="true" />
    </div>
    <div class="contact__form-input">
        <label for="message">Vaša poruka:</label>
        <textarea id="message" name="message" rows="4" required role="textbox" aria-required="true"></textarea>
    </div>
    <!-- Add a hidden field for security -->
    <?php wp_nonce_field('contact_form_nonce', 'contact_form_nonce'); ?>
    <button class="contact-submit-btn" type="submit" name="submit">
        Pošalji poruku
    </button>
</form>