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
		$this->addText("Imgid","imgID")->strLimit(150)->maxLength(255);
		$this->addImage("Img","img")->encrypt(true);
		

    }
}
