<?php

class Slider extends Database 
{
    private $conn; 

    public $id;
    public $title;
    public $videoId;
    public $isActive;
    public $createdAt;
    public $updatedAt;

    public function __construct($id)
    {
        $this->conn = $this->connect();

        $id = $this->conn->real_escape_string(htmlspecialchars($id));

        if ($id) {
            $stmt = $this->conn->prepare("SELECT `id`, `title`, `video_id`, `is_active`, `created_at`, `updated_at` FROM `slider` WHERE `id`=? ");

            $stmt->bind_param("i",$id);

            $this->readStmt($stmt);

            $result = $stmt->get_result();

            if ($result->num_rows === 1) {
                $result = $result->fetch_assoc();
                $this->id = $result['id'];
                $this->title = $result['title'];
                $this->videoId = $result['video_id'];
                $this->isActive = $result['is_active'];
                $this->createdAt = $result['created_at'];
                $this->updatedAt = $result['updated_at'];
                return $result;
            } else { 
                $this->error = "No Records";
                return false;
            }
        }
    }

    public function create($title, $videoId, $isActive)
    {
        date_default_timezone_set('Asia/Colombo');

        $stmt = $this->conn->prepare("INSERT INTO `slider` (title, video_id, is_active, created_at, updated_at) VALUES  (?,?,?,?,?)");

        $title = $this->conn->real_escape_string(htmlspecialchars($title));
        $videoId = $this->conn->real_escape_string(htmlspecialchars($videoId));
        $isActive = $this->conn->real_escape_string(htmlspecialchars($isActive));
        $createdAt = date('Y-m-d H:i:s');
        $updatedAt = date('Y-m-d H:i:s');

        if (!$this->videoExists($videoId)) {
            if (!$stmt->bind_param("ssiss", $title, $videoId, $isActive, $createdAt, $updatedAt)) {
                $this->error = $stmt->error;
                return false;
            }
            if ($stmt->execute()) { 
                $last_id = $stmt->insert_id;
                $this->__construct($last_id);
                $this->error = 'Video Added successfully.!';
                return true;
            } else { 
                $this->error = $stmt->error; 
                return false;
            }
        } else {
            $this->error = "Already added this video: " . $videoId; 
            return false;
        }
        $stmt->close();
        $this->conn->close();
    }

    private function videoExists($videoId)
    {
        $stmt = $this->conn->prepare("SELECT `id` FROM `slider` WHERE `video_id`= ?");
        $stmt->bind_param("s", $videoId);
        $this->readStmt($stmt);
        $result = $stmt->get_result();
        if ($result->num_rows == 1 ) {
            return true;
        } else {
            return false;
        }
    }

    public function update()
    {
        $title = $this->conn->real_escape_string(htmlspecialchars($this->title));
        $videoId = $this->conn->real_escape_string(htmlspecialchars($this->videoId));
        $isActive = $this->conn->real_escape_string(htmlspecialchars($this->isActive));
        $updatedAt = date('Y-m-d H:i:s');
        $id = $this->conn->real_escape_string(htmlspecialchars($this->id));

        $stmt = $this->conn->prepare("UPDATE  `slider` SET  `title` =?,  `video_id` =?,  `is_active` =?, `updated_at` =? WHERE `id` = ?");

        $stmt->bind_param("ssisi", $title, $videoId, $isActive, $updatedAt, $id);

        if ($stmt->execute()) {
            $last_id = $stmt->insert_id;
            $this->__construct($last_id);
            $this->error = 'Video Updated successfully.!';
            return true;
        } else {
            $this->error = $stmt->error;
            return false;
        }
        $stmt->close();
        $this->conn->close();
    }

    public function getAll()
    {
        $result = $this->readQuery("SELECT * FROM `slider` ORDER BY `updated_at` DESC");
        $all_records = array();

        while ($row = $result->fetch_assoc()) {
            array_push($all_records, $row);
        }
        return $all_records;
        $this->conn->close();
    }

    public function getActiveSlides()
    {
        $result = $this->readQuery("SELECT * FROM `slider` WHERE `is_active` = 1 ORDER BY `updated_at` DESC");
        $all_records = array();

        while ($row = $result->fetch_assoc()) {
            array_push($all_records, $row);
        }
        return $all_records;
        $this->conn->close();
    }

    public function delete()
    {
        $id = $this->conn->real_escape_string(htmlspecialchars($this->id));

        $stmt = $this->conn->prepare("DELETE FROM `slider` WHERE `id` =? ");

        $stmt->bind_param("i", $id);
        $result = $this->readStmt($stmt);

        if ($result) {
            return true;
        } else {
            return false;
        }
        $stmt->close();
        $this->conn->close();
    }

}
