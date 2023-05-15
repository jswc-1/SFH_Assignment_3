<?php

    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

    include_once 'initialize.php';

    //instantiate event
    $event = new event($db);

    //get raw posted data
    $data = json_decode(file_get_contents("php://input"));

    $event->heading = $data->heading;
    $event->tripdate = $data->tripdate;
    $event->duration = $data->duration;
    $event->summary = $data->summary;

    //create event
        echo json_encode(
            array('message' => 'Event has added successfully to DB')
        );
    } else {
        echo json_encode(
            array('message' => 'Event Cannot be Created!')
        );
    }

?>
