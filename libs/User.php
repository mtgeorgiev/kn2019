<?php

require_once "Db/Connection.php";

//use libs\Db\Connection;

class User
{
    private $username;
    
    private $email;
    
    private $password;
    
    public function __construct(string $username, string $password)
    {
        $this->username = $username;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }
    
    public function getUsername(): string
    {
        return $this->username;
    }
    
    public function getEmail(): string
    {
        return $this->email;
    }
    
    public function setEmail($email)
    {
        $this->email = $email;
    }
    
    public function toString(): string
    {
        return json_encode([
            'username' => $this->username,
            'email' => $this->email,
            'password' => $this->password,
        ]);
    }
    
    public function save()
    {
        $connection = Connection::get();
        
        $statement = $connection->prepare(
            "INSERT INTO users (username, email, password)
                VALUES (:username, :email, :password)");

        $result = $statement->execute([
            'username' => $this->username,
            'email' => $this->email,
            'password' => $this->password,
        ]);
        
        if (!$result)
        {
            $errorInfo = $statement->errorInfo();
            throw new Exception($errorInfo[2]);
        }
    }
    
    public static function getUserById(string $id): User
    {
        $connection = Connection::get();
        $sql = "SELECT * FROM users WHERE id = :id";

        $statement = $connection->prepare($sql);
        $statement->execute(['id' => $id]);
        
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        
        if (!$row)
        {
            return null;
        }
        
        $user = new User($row['username'], $row['password']);
        $user->setEmail($row['email']);
        
        return $user;
        
    }
}
