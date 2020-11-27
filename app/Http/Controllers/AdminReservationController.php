<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminReservationController extends CBController {


    public function cbInit()
    {
        $this->setTable("reservation");
        $this->setPermalink("reservation");
        $this->setPageTitle("Reservation");

        $this->addDatetime("Created At","created_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Updated At","updated_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addText("Baby Idt","baby_idt")->strLimit(150)->maxLength(255);
		$this->addText("Baby Name","baby_name")->strLimit(150)->maxLength(255);
		$this->addImage("Baby Image","baby_image")->encrypt(true);
		$this->addRadio("Package","Package")->options(['daily package'=>'daily package(799BDT)','weekly package'=>'weekly package(3599BDT)','monthly package'=>'monthly package(11000BDT)']);
		$this->addRadio("Payment","Payment")->options(['physical payment'=>'physical payment','payment by bkash'=>'payment by bkash'])->help("for bkash pay, go to payment on bkash app search daycare and submit payment.");
		$this->addText("Transaction Id","Transaction_id")->required(false)->help("write the transaction id")->strLimit(150)->maxLength(255);
		$this->addDate("Reservation Date","Reservation_date")->help("select reservation date")->format('2020-11-28');
		

    }
}
