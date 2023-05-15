<?php   
    //headers
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: GET');

    include_once 'initialize.php';

    //instantiate event
    $event = new event($db);

    //blog event query
    $result = $event->read();
    //get row count
    $num = $result->rowCount();

    //check if any event
    if($num > 0){
        //event array
        $event_arr = array();
        $event_arr['data'] = array();

        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $post_item = array(
                'id' => $id,
                'heading' => $heading,
                'tripdate' => $tripdate,
                'duration' => $duration,
                'summary' => $summary
            );

            //push to "data"
            array_push($event_arr['data'], $post_item);
        }

        //turn to JSON & output
        echo json_encode($event_arr);

    } else {
        //no event
        echo json_encode(
            array('message' => 'No Event Found')
        );
    }

    
?>