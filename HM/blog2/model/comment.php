<?php

    class Comment extends BaseModel {
        public function __construct() {
            parent::__construct();
        }

        public function getCommentByPostId($id) {
            $stmt = $this->conn->prepare('SELECT c.author, c.body FROM comments as c WHERE c.post_id = ?');
            $stmt->execute([$id]);

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function countComment($id) {
            $stmt = $this->conn->prepare('SELECT COUNT(c.post_id) FROM comments as c WHERE c.post_id = ?;');
            $stmt->execute([$id]);

            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        public function getLastComments() {
            $stmt = $this->conn->prepare('SELECT c.body, c.author FROM comments as c ORDER BY c.id DESC LIMIT 5');
            $stmt->execute([]);

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function addComment($id) {
            $stmt = $this->conn->prepare('INSERT INTO c.body, c.author FROM comments as c WHERE id = ?;');
            $stmt->execute([]);

            return $this->conn->lastInsertId();
        }

        public function deleteComment($id) {
            $stmt = $this->conn->prepare('DELETE FROM comments as c WHERE id = ?');
            $stmt->execute([$id]);
        }

        public function getLastCommentOnIndex() {
            $stmt = $this->conn->prepare('SELECT c.body, c.author FROM comments as c ORDER BY c.id DESC LIMIT 1');
            $stmt->execute([]);

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
