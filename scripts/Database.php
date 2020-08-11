<?php
class Database {
	private $server;
	private $username; 
	private $password;
	private $database; 
	
	public function __construct($server, $username, $password, $database) {
		$this->server = $server;
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;
	}

	public function connect() {
		try {
			return new mysqli($this->server, $this->username, $this->password, $this->database);
		} catch (mysqli_sql_exception $ex1) {
			throw new Exception("Connection to database failed! " . $ex1);
		}
	}
	
	public function disconnect($link) {
		mysqli_close($link);
	}
	
	public function insert($link, $table, $column, $value) {
		try {
			for($i = 0; $i < count($value); $i++) {
				if(is_string($value[$i])) {
					$value[$i] = '"'.$value[$i].'"';
				}
				
			}
			$column = implode(',', $column);
			$value = implode(',', $value);
			
			$query = "INSERT INTO " . $table .  " (". $column .") " . " VALUES " . " (" . $value . ") ";

			
			return mysqli_query($link, $query);
		} catch (mysqli_sql_exception $ex2) {
			throw new Exception("Query Failed! " . $ex2);
		}
	}
	
	public function delete($link, $table, $column) {
		try {
			$query = "DELETE FROM " . $table . " WHERE id=" . $column;
			mysqli_query($link, $query);
		} catch (mysqli_sql_exception $ex3) {
			throw new Exception("Query Failed! " . $ex3);
		}

	}
	
	
	public function select($link, $table, $column) {
		try {
			$column = implode(',', $column);
			$query = "SELECT " . $column . " FROM " . $table;
			$result = mysqli_query($link, $query);
			return $result;
			
		} catch (mysqli_sql_exception $ex4) {
			throw new Exception("Query Failed! " . $ex4);
		}
	}
	
	public function selectByType($link, $table, $type) {
		try {
			$query = "SELECT * FROM " . $table ." WHERE type ='" . $type . "'";
			$result = mysqli_query($link, $query);
			return $result;
			
		} catch (mysqli_sql_exception $ex4) {
			throw new Exception("Query Failed! " . $ex4);
		}
	}
	
	public function update($link, $table, $column, $value, $id) {
		try {
			for ($i = 0; $i < count($column); $i++) {
				$query = "UPDATE " . $table . " SET " . $column[$i] . "='" . $value[$i] . "' WHERE id=" . $id;
				mysqli_query($link, $query);
			}
		} catch (mysqli_sql_exception $ex5) {
			throw new Exception("Query Failed! " . $ex5);
		}
		
	}
	// Checks on uploaded images. Returns false if one of the tests fails.
	public function imageChecker($upload_file, $uploadFileType, $imageurl) {
		// Check if image file is an actual or fake image.
		$check = getimagesize ( $_FILES ["image"] ["tmp_name"] );
		if ($check !== false) {
			//echo "File is an image - " . $check ["mime"] . ".";
		} else {
			//echo "File is not an image.";
			return false;
		}

		// Check if file already exists
		if (file_exists ( $upload_file )) {
			//echo "Sorry, file already exists.";
			return false;
		}

		// Allow certain file formats
		if ($uploadFileType != "jpg" && $$uploadFileType != "png" && $uploadFileType != "jpeg") {
			//echo "Sorry, only JPG, JPEG and PNG files are allowed.";
			return false;
		}

		return true;
	}
}

?>