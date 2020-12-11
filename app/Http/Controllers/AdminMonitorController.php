<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminMonitorController extends CBController {


    public function cbInit()
    {
        $this->setTable("monitor");
        $this->setPermalink("monitor");
        $this->setPageTitle("Monitor");

        $this->addDatetime("Created At","created_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Updated At","updated_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addNumber("Serial","serial");
		$this->addText("Baby Idt","idt")->strLimit(150)->maxLength(255);
		$this->addText("Name","name")->strLimit(150)->maxLength(255);
		$this->addRadio("Attendance","attendance")->options(['present'=>'present','absent'=>'absent']);
		$this->addWysiwyg("Activity","activity")->strLimit(200);
		$this->addDate("Date","date")->format('2020-12-11');
		

    }
}
