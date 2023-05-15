<?php  
    class Event{
        private $conn;
        private $table = 'event';

        public $id;
        public $heading;
        public $tripdate;
        public $duration;
        public $summary;
    

        public function __construct($db){
            $this->conn = $db;
        }

        public function read(){
            //create query
            $query = 'SELECT e.id, e.heading, e.tripdate, e.duration, e.summary FROM ' . $this->table . ' e ORDER BY e.tripdate DESC';

            //prepare statement
            $stmt = $this->conn->prepare($query);

            //execute query
            $stmt->execute();

            return $stmt;
        }

        public function create(){
            //create query
            $query = 'INSERT INTO ' . $this->table . ' SET heading = :heading, tripdate = :tripdate, duration = :duration, summary = :summary';
            
            //prepare statement
            $stmt = $this->conn->prepare($query);

            //clean data
            $this->heading = htmlspecialchars(strip_tags($this->heading));
            $this->tripdate = htmlspecialchars(strip_tags($this->tripdate));    
            $this->duration = htmlspecialchars(strip_tags($this->duration));
            $this->summary = htmlspecialchars(strip_tags($this->summary));

            //bind data
            $stmt->bindParam(':heading', $this->heading);
            $stmt->bindParam(':tripdate', $this->tripdate);
            $stmt->bindParam(':duration', $this->duration);
            $stmt->bindParam(':summary', $this->summary);

            //execute query
            if($stmt->execute()){
                return true;
            }

            //print error if something goes wrong
            printf("Error: %s.\n", $stmt->error);

            return false;
        }
    }
?>