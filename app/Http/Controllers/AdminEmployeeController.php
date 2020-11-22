<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminEmployeeController extends CBController {


    public function cbInit()
    {
        $this->setTable("employee");
        $this->setPermalink("employee");
        $this->setPageTitle("Employee");

        $this->addDatetime("Created At","created_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Updated At","updated_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addText("Name","name")->strLimit(150)->maxLength(255);
		$this->addText("Position","position")->strLimit(150)->maxLength(255);
		$this->addImage("Thumb Image","thumb_image")->help("dimension 1000 * 1000")->encrypt(true);
		$this->addImage("Image","image")->help("dimension 248*248")->encrypt(true);
		$this->addText("Linkedin","linkedin")->help("plz upload the link")->strLimit(150)->maxLength(255);
		$this->addText("Facebook","facebook")->help("plz upload the link")->strLimit(150)->maxLength(255);
		$this->addText("Twitter","twitter")->help("plz upload the link")->strLimit(150)->maxLength(255);
		

    }
}
