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
		$this->addText("Name","name")->strLimit(150)->maxLength(255);
		$this->addEmail("Email","email");
		$this->addTextArea("Message","message")->strLimit(150);
		

    }
}
