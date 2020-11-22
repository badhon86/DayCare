<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminBabyRegistrationController extends CBController {


    public function cbInit()
    {
        $this->setTable("baby_registration");
        $this->setPermalink("baby_registration");
        $this->setPageTitle("Baby Registration");

        $this->addDatetime("Created At","created_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Updated At","updated_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addNumber("Baby_id","baby_id");
		$this->addText("Baby Name","baby_name")->strLimit(150)->maxLength(255);
		$this->addDate("Birthdate","birthdate");
		$this->addCheckbox("Gender","gender")->options([1=>'male',2=>'female']);
		$this->addText("Mother Name","mother name")->strLimit(150)->maxLength(255);
		$this->addText("Father Name","father name")->strLimit(150)->maxLength(255);
		$this->addEmail("Email","email");
		$this->addNumber("Phone","phone");
		$this->addText("Address","address")->strLimit(150)->maxLength(255);
		

    }
}
