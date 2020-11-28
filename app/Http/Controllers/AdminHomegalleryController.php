<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminHomegalleryController extends CBController {


    public function cbInit()
    {
        $this->setTable("homegallery");
        $this->setPermalink("homegallery");
        $this->setPageTitle("Homegallery");

        $this->addDatetime("Created At","created_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Updated At","updated_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addImage("Image","image")->encrypt(true);
		

    }
}
