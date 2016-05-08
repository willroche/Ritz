<?php 
// function to capture post views
function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

function wpb_track_post_views ($post_id) {
    if ( !is_single() ) return;
    if ( empty ( $post_id) ) {
        global $post;
        $post_id = $post->ID;    
    }
    wpb_set_post_views($post_id);
}

function wpb_get_post_views($postID){
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}

//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
add_theme_support( 'post-thumbnails' );
add_filter( 'admin_post_thumbnail_html', 'add_featured_image_instruction');
function add_featured_image_instruction( $content ) {
    return $content .= '<p>Article hero image (2048 x 1114)</p>';
}
// Hooking up our function to theme setup
add_action( 'wp_head', 'wpb_track_post_views');
add_action( 'init', 'create_posttype' );
add_action( 'init', 'register_my_post_type', 0 );
?>