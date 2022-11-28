<?php 
  class registerproduct {
    // DB stuff
    private $conn;
    private $table = 'register_login';

    // registerlogin Properties
    public $userId;
    public $userName;
    public $userEmail;
    public $userPassword;
    public $userContact;
    public $memberType;
    public $startDate;
    public $endDate;

    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }
    
    
    function read(){
    $query = "SELECT
              *
            FROM
                " . $this->table. " ";
  
    // prepare query statement
// execute the sqlquery
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
  
    return $stmt;
    }//end for read
    
    



    

    // Create Post
    function create(){
          // Create query
          $query = 'INSERT INTO ' . $this->table . ' SET userName = :userName, userEmail = :userEmail, userPassword = :userPassword, userContact = :userContact,memberType = :memberType';

          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Clean data
          $this->userName = htmlspecialchars(strip_tags($this->userName));
          $this->userEmail = htmlspecialchars(strip_tags($this->userEmail));
          $this->userPassword = htmlspecialchars(strip_tags($this->userPassword));
          $this->userContact = htmlspecialchars(strip_tags($this->userContact));
          $this->memberType = htmlspecialchars(strip_tags($this->memberType)
                  
                  );

          // Bind data
          $stmt->bindParam(':userName', $this->userName);
          $stmt->bindParam(':userEmail', $this->userEmail);
          $stmt->bindParam(':userPassword', $this->userPassword);
          $stmt->bindParam(':userContact', $this->userContact);
          $stmt->bindParam(':memberType', $this->memberType);

          // Execute query
          if($stmt->execute()) {
            return true;
      }

      // Print error if something goes wrong
      printf("Error: %s.\n", $stmt->error);

      return false;
    }

    

    
    
  }
  
  ?>