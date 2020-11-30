<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminMessageController extends CBController {


    public function cbInit()
    {
        $this->setTable("message");
        $this->setPermalink("message");
        $this->setPageTitle("Message");

        $this->addDatetime("Created At","created_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Updated At","updated_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addWysiwyg("Notice","notice")->strLimit(500);
		

    }
}
