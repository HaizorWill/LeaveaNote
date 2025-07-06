<?php
namespace App\Models;

use App\Core\DatabaseManager;
use App\Core\Model;

class NoteModel extends Model {
    public $name;
    public $message;

    public function __construct(){
        $this->dbManager = DatabaseManager::getInstance();
        $this->collection = 'notes';
    }

    public function create(array $query) {
        $this->fromArray($query);
        $query = $this->toArray();
        $this->queryCollection()->insertOne($query);
    }

    public function read(array $query = []) {
        $cursor = $this->queryCollection()->find($query);
        $dataArray = [];
        foreach ($cursor as $entry) {
            $this->fromArray($entry);
            $result = $this->toArray();
            $dataArray[] = $result;
        }
        return $dataArray;
    }
}
?>