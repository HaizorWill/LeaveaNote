<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Models\NoteModel;

class NoteController extends Controller {

    public function handlePOST() {
        $body = $this->prepareRequest();
        $noteModel = new NoteModel;
        $noteModel->create($body);
    }

    public function handleGET($request) {
        $noteModel = new NoteModel;
        return $noteModel->read($request);
    }
}
?>