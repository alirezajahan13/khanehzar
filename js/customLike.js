var $ = jQuery;

function likePost() {
    var postId = '<?php echo get_the_ID(); ?>'; // Get the post ID

    // AJAX request to update the like count
    jQuery.ajax({
        type: 'post',
        url: ajax_object.ajax_url,
        data: {
            action: 'update_likes',
            post_id: postId
        },
        success: function(response) {
            // Update the like count on success
            document.getElementById('likeCounter').innerHTML = response;
        }
    });
}

// Fetch initial like count on page load
document.addEventListener("DOMContentLoaded", function() {
    var postId = '<?php echo get_the_ID(); ?>'; // Get the post ID

    // AJAX request to get the initial like count
    jQuery.ajax({
        type: 'post',
        url: ajax_object.ajax_url,
        data: {
            action: 'get_initial_likes',
            post_id: postId
        },
        success: function(response) {
            // Update the initial like count on success
            document.getElementById('likeCounter').innerHTML = response;
        }
    });
});