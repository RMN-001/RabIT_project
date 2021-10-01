<?php
   
    class UsersModel {
        // db config -> mysql
        function __construct($config){
            $this -> host = $config -> host;
            $this -> user = $config -> user;
			$this -> pass =  $config -> pass;
			$this -> db = $config -> db;
        }
        // adatbázis nyitása
        public function openDatabase() {
            $this -> database = new mysqli($this -> host, $this -> user, $this -> pass, $this -> db);
            if ($this -> database -> connect_error) {
                die("Error in connection: ".$this -> condb -> connect_error);
            } 
        }
        // adatbázis zárása
        public function closeDatabase()
		{
			$this -> database -> close();
        }
        // mysql lekérés: users
        public function getUsers() {
            try {
                $this -> openDatabase();
                $query = $this -> database ->prepare("SELECT * FROM users");
                $query -> execute();
                $result = $query -> get_result();
                $query -> close();
                $this -> closeDatabase();
                return $result;
            }
            catch(Exception $exception){
                $this -> closeDatabase();
				throw $exception;
            }
        }	
    }
?>