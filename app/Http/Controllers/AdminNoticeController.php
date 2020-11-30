<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminNoticeController extends CBController {


    public function cbInit()
    {
        $this->setTable("notice");
        $this->setPermalink("notice");
        $this->setPageTitle("Notice");

        $this->addDatetime("Created At","created_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Updated At","updated_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addSelectOption("From","from")->options(['manager'=>'manager','director'=>'director','CEO'=>'CEO','employee'=>'employee']);
		$this->addDate("Date","date")->format('2020-12-01');
		$this->addWysiwyg("Notice","notices")->strLimit(150);
		

    }
}
