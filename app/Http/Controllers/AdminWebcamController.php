<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminWebcamController extends CBController {


    public function cbInit()
    {
        $this->setTable("webcam");
        $this->setPermalink("webcam");
        $this->setPageTitle("Webcam");

        $this->addDatetime("Created At","created_at")->required(false)->showIndex(false)->showDetail(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Updated At","updated_at")->required(false)->showIndex(false)->showDetail(false)->showAdd(false)->showEdit(false);
		$this->addWysiwyg("Webcam","webcam")->strLimit(150);
		

    }
}
