<?php
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'http://localhost/api/event_read.php');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

    $response = curl_exec($ch);
    $response = json_decode($response, true);
    
    curl_close($ch);

    $events = $response['data'];
    
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
                <Div class="event_header"><h1>Upcoming Adventures</h1></Div>

                <?php foreach ($events as $event) { ?>
                    <Div class="event">
                        <Div class="event_location"><?=$event['heading']?></Div>
                        <Div class="event_date">Date: <?=$event['tripdate']?></Div>
                        <Div class="event_date">Duration: <?=$event['duration']?> Days</Div>
                        <Div class="event_desc"><h3>Summary</h3><?=$event['summary']?></Div>
                    </Div>
                <?php } ?>      
            </div>
        </div>

        <script src="script.js"></script>
    </body>
</html>