<?php
    $data = array(
        'heading' => $_POST['heading'],
        'tripdate' => $_POST['tripdate'],
        'duration' => $_POST['duration'],
        'summary' => $_POST['summary']
    );

    //curl post
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://jswc.000webhostapp.com/api/event_create.php');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    $response = curl_exec($ch);
    $error_msg = curl_error($ch);
    echo $error_msg;

    $response = json_decode($response, true);
    curl_close($ch);
?>

<html>
    <head>
        <link rel="stylesheet" href="main.css">
        <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script> 
        <title>Assignment 3</title>       
    </head>
    
    <body>
        <!--Header section-->
        <Div class="header">
            <div><img id="img_logo" src="images/paddle-white.png"></div>
            <!--div><img id="img_menu" src="images/hamburger.png"></div--->
            <div><img id="img_menu" src="images/hamburger.png"></div>
            <div class="header_text"><h1>Halifax Canoe and Kayak</h1></Div>
            <Nav class="menu_naV">
                <ul class="menu_list">
                    <li>Home</li>
                    <li>Book a trip</li>
                    <li>Admin login</li>
                </ul>
            </Nav>
        </Div>

        <!--Main Content-->
        <div class="main_content">
            <div id="main_image" >
                <!--img  src="images/canoe.jpg"-->
                <div class="main_image_text">Come Experence Canada</div>
            </div>

            <div class="main_text">
                <div>
                    <h1><?=$response['message']?></h1>
                </div>    
                <Div class="event_header"><h2><a href='admin-add.php'> Admin - Add more Adventures </a></h2></Div>
                <Div class="event_header"><h2><a href='all-adventures.php'> View all Adventures</a></h2></Div>
            </div>
        </div>

        <script src="script.js"></script>
    </body>
</html>