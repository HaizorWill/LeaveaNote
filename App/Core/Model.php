<?php
namespace App\Core;

class Model {
    protected DatabaseManager $dbManager;
    protected string $collection;

    public function queryCollection() {
        return $this->dbManager::getDatabase()->selectCollection($this->collection);
    }

    public function fromArray($data) {
        foreach ($data as $key => $value) {
            if(property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
    }
    public function toArray() {
        $dataArray = get_object_vars($this);
        return array_filter($dataArray, fn($value, $key) => $key !== 'collection' && !is_object($value), ARRAY_FILTER_USE_BOTH);
    }
}
?>