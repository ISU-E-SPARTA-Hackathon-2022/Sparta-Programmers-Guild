<?php
  class Connection
  {
    protected $host = 'localhost';
    protected $user = 'root';
    protected $pass = '';
    protected $db = 'sparta';

    public $con = null;

    public function __construct()
    {
      try {
        $this->con = new PDO(
          "mysql:host={$this->host};dbname={$this->db}",
          $this->user,
          $this->pass
        );
        $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch (PDOException $e) {
        echo "Connection Error: " . $e->getMessage();
      }
    }

    public function __destruct()
    {
      $this->CloseConnection();
    }

    protected function CloseConnection()
    {
      if ($this->con != null) {
        $this->con = null;
      }
    }
  }
?>