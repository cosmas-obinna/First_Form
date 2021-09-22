<?php
    class crud {
        // Private database object
        private  $db;

        // Constructor to initialize private variable to the database connection
        function __construct($conn){
            $this -> db = $conn;
        }
        // Function to insert a record into the attendees database
        public function insert($fname, $lname, $dob, $email, $designation, $phone){
            try {
                // define sgl statement to be executed

                $sql = "INSERT INTO attendees VALUE (:fname, :lname, :dob, :email, :phone, :designation)";
                // prepare the sql statement to be executed

                $statement = $this->db->prepare($sql);
                // bind all placeholders to the actual values

                $statement->bindparam(':lname',$lname);
                $statement->bindparam(':dob',$dob);
                $statement->bindparam(':email',$email);
                $statement->bindparam(':phone',$phone);
                $statement->bindparam(':designation',$designation);
                // then execute your sql querry

                $statement->execute();
                Return TRUE;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }
?>