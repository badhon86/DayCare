<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminBabyController extends CBController {


    public function cbInit()
    {
        $this->setTable("baby");
        $this->setPermalink("baby");
        $this->setPageTitle("Baby");

        $this->addDatetime("Created At","created_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Updated At","updated_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addText("Baby Name","baby_name")->showEdit(false)->strLimit(150)->maxLength(255);
		$this->addImage("Birth Certificate","birth_certificate")->showEdit(false)->encrypt(true);
		$this->addCheckbox("Gender","gender")->options(['male'=>'male','female'=>'female'])->showEdit(false);
		$this->addText("Father","father")->showEdit(false)->strLimit(150)->maxLength(255);
		$this->addText("Mother","mother")->showEdit(false)->strLimit(150)->maxLength(255);
		$this->addEmail("Email","email");
		$this->addNumber("Phone","phone");
		$this->addText("Address","address")->strLimit(150)->maxLength(255);
		

    }
}
