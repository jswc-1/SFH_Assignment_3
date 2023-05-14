<?php   
    //headers
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    include_once '../core/initialize.php';

    //instantiate post
    $post = new Post($db);

    $post->id = isset($_GET['id']) ? $_GET['id'] : die();

    //blog post query
    $post->read_single();

    $post_arr = array(
        'id' => $post->id,
        'title' => $post->title,
        'body' => $post->body,
        'author' => $post->author,
        'category_id' => $post->category_id,
        'category_name' => $post->category_name,
        'created_at' => $post->created_at
    );

    //make JSON
    print_r(json_encode($post_arr));
    
?>