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
    // Get Single Post
    public function read_one() {
          // Create query
          $query = 'SELECT c.userId as userId, p.userName, p.userEmail, p.userPassword, p.userContact, p.memberType
                                    FROM ' . $this->table . ' p
                                    LEFT JOIN
                                      register_login c ON p.userId = c.userId
                                    WHERE
                                      p.userId = ?
                                    LIMIT 0,1';

          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Bind ID
          $stmt->bindParam(1, $this->userId);

          // Execute query
          $stmt->execute();

          $row = $stmt->fetch(PDO::FETCH_ASSOC);

          // Set properties
          $this->userId = $row['userId'];
          $this->userName = $row['userName'];
          $this->userEmail = $row['userEmail'];
          $this->userPassword = $row['userPassword'];
          $this->userContact = $row['userContact'];
          $this->memberType = $row['memberType'];
    }

    



    

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