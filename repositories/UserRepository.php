<?php
require_once __DIR__ . "/../db/Database.php";
require_once __DIR__ . "/../models/User.php";
class UserRepository
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    public function create($name, $email, $address)
    {
        $stmt = $this->db->prepare("INSERT INTO users (name, email, address) VALUES(?, ?, ?)");
        return $stmt->execute([$name, $email, $address]);
    }

    public function getAll()
    {
        $stmt = $this->db->query("SELECT * FROM users");
        return $stmt->fetchAll(PDO::FETCH_CLASS, "User");
    }

    public function findById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM user WHERE id = ? ");
        $stmt->execute([$id]);
        return $stmt->fetchObject("User");
    }
    public function update($id, $name, $email, $address)
    {
        $stmt = $this->db->prepare("UPDATE users SET name = ?, email = ?, address = ? WHERE id = ?");
        return $stmt->execute([$name, $email, $address, $id]);
    }
    public function delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM users WHERE id=?");
        return $stmt->execute([$id]);
    }
}
?>