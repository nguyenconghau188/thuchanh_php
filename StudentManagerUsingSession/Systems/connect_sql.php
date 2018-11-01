<?php 
class DB
{
	private $servername, $username, $password, $dbname;
	public $conn = null;

	public function __construct()
	{
		$this->servername = "localhost";
		$this->username = "root";
		$this->password = "";
		$this->dbname = "student_manager";
	}

	public function connectdb()
	{
		$this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
		if($this->conn->connect_error)
		{
			die("connection fail: ".$conn->connect_error);
		}
	}

	public function disconnectdb()
	{
		$this->conn->close();
	}

	public function getData($sql)
	{
		if ($this->conn) 
		{
			$data = array();
			$result = $this->conn->query($sql);
			if ($result->num_rows >0) 
			{
				while ($row = $result->fetch_assoc()) 
				{
					array_push($data, $row);
				}	
			}
			return $data;	
		}
		else 
		{
			return 'no connection';
		}
	}

	public function insertData($sql)
	{
		if ($this->conn) 
		{
			if ($this->conn->query($sql) === TRUE) {
				return TRUE;
			}
		}
		return FALSE;
	}
}
	

?>