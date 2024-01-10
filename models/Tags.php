<?php


class Tag {
    private $db;

    public function __construct() {
        $this->db = new DB;
    }

    public function addTag($name, $categoryId) {
        // $this->db->query('INSERT INTO tag (name, categoryId) VALUES (:name, :categoryId)');
        // $this->db->bind(':name', $name);
        // $this->db->bind(':categoryId', $categoryId);

        // return $this->db->execute();
       $strm = DB::connect()->prepare('INSERT INTO tag (name, categoryId) VALUES (:name, :categoryId)');
       $strm->bindParam(':name', $name);
       $strm->bindParam(':categoryId', $categoryId);
    }

    public function editTag($tagId, $name) {
        // $this->db->query('UPDATE tag SET name = :name WHERE tagId = :tagId');
        // $this->db->bind(':name', $name);
        // $this->db->bind(':tagId', $tagId);

        // return $this->db->execute();
        $strm = DB::connect()->prepare('UPDATE tag SET name = :name WHERE tagId = :tagId');
        $strm->bindParam(':name', $name);
        $strm->bindParam(':tagId', $tagId);
    }

    public function deleteTag($tagId) {
        $this->db->query('DELETE FROM tag WHERE tagId = :tagId');
        $this->db->bind(':tagId', $tagId);

        return $this->db->execute();
    }

    public function getTagsByCategory($categoryId) {
        $this->db->query('SELECT * FROM tag WHERE categoryId = :categoryId');
        $this->db->bind(':categoryId', $categoryId);

        return $this->db->resultSet();
    }

    public function getTagById($tagId) {
        $this->db->query('SELECT * FROM tag WHERE tagId = :tagId');
        $this->db->bind(':tagId', $tagId);
        return $this->db->single();
    }
}