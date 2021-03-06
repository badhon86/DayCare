<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminContactsController extends CBController {


    public function cbInit()
    {
        $this->setTable("contacts");
        $this->setPermalink("contacts");
        $this->setPageTitle("Contacts");

        $this->addDatetime("Created At","created_at")->required(false)->showIndex(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Updated At","updated_at")->required(false)->showIndex(false)->showAdd(false)->showEdit(false);
		$this->addText("Name","name")->strLimit(150)->maxLength(255);
		$this->addEmail("Email","email");
		$this->addTextArea("Text","text")->strLimit(150);
		

    }
}
