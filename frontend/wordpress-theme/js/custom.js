jQuery(document).ready(function($) {
    'use strict';
    
    // Smooth scrolling for anchor links
    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        var target = this.hash;
        var $target = $(target);
        if ($target.length) {
            $('html, body').stop().animate({
                'scrollTop': $target.offset().top - 80
            }, 800, 'swing');
        }
    });
    
    // Contact form submission
    $('#flavia-contact-form').on('submit', function(e) {
        e.preventDefault();
        var $form = $(this);
        var $submit = $form.find('button[type="submit"]');
        var originalText = $submit.text();
        
        $submit.text('Sending...').prop('disabled', true);
        
        var formData = {
            action: 'flavia_contact_form',
            flavia_nonce: $form.find('input[name="flavia_nonce"]').val(),
            name: $form.find('input[name="first_name"]').val() + ' ' + $form.find('input[name="last_name"]').val(),
            email: $form.find('input[name="email"]').val(),
            phone: $form.find('input[name="phone"]').val(),
            service: $form.find('select[name="service"]').val(),
            message: $form.find('textarea[name="message"]').val()
        };
        
        $.ajax({
            url: flavia_ajax.ajax_url,
            type: 'POST',
            data: formData,
            success: function(response) {
                if (response.success) {
                    showMessage('Thank you! Your message has been sent successfully.', 'success');
                    $form[0].reset();
                } else {
                    showMessage('Sorry, there was an error. Please try again.', 'error');
                }
            },
            error: function() {
                showMessage('Sorry, there was an error. Please try again.', 'error');
            },
            complete: function() {
                $submit.text(originalText).prop('disabled', false);
            }
        });
    });
    
    function showMessage(message, type) {
        var messageClass = type === 'success' ? 'success-message' : 'error-message';
        var messageHTML = '<div class="form-message ' + messageClass + '">' + message + '</div>';
        $('.form-message').remove();
        $('#flavia-contact-form').prepend(messageHTML);
        setTimeout(function() {
            $('.form-message').fadeOut(500, function() { $(this).remove(); });
        }, 5000);
    }
    
    // Add dynamic CSS
    var css = '<style>.form-message{padding:1rem;border-radius:0.5rem;margin-bottom:1.5rem;font-weight:500}.success-message{background:rgba(34,197,94,0.1);border:1px solid rgba(34,197,94,0.3);color:#166534}.error-message{background:rgba(239,68,68,0.1);border:1px solid rgba(239,68,68,0.3);color:#991b1b}</style>';
    $('head').append(css);
});
