<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminGalleryController extends CBController {


    public function cbInit()
    {
        $this->setTable("gallery");
        $this->setPermalink("gallery");
        $this->setPageTitle("Gallery");

        $this->addDatetime("Created At","created_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Updated At","updated_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addImage("Image","image")->encrypt(true);
		

    }
}
