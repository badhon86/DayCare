<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminPriceController extends CBController {


    public function cbInit()
    {
        $this->setTable("price");
        $this->setPermalink("price");
        $this->setPageTitle("Price");

        $this->addDatetime("Created At","created_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Updated At","updated_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addMoney("D Price","d_price");
		$this->addMoney("W Price","w_price");
		$this->addMoney("M Price","m_price");
		

    }
}
