<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminApplyForRegisterYourBabyController extends CBController {


    public function cbInit()
    {
        $this->setTable("registration");
        $this->setPermalink("apply_for_register_your_baby");
        $this->setPageTitle("Apply for register your baby");

        $this->addDatetime("Created At","created_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Updated At","updated_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addText("Baby Name","baby_name")->help("please enter your baby's name")->strLimit(150)->maxLength(255);
		$this->addSelectOption("Gender","gender")->options(['male'=>'male','female'=>'female'])->showIndex(false)->help("please select your child's gender");
		$this->addImage("Picture of your baby","baby_image")->showIndex(false)->help("please upload your kid's picture. maximum size 1.0 MB")->encrypt(true);
		$this->addImage("Picture of birth certificate","birth_certificate")->showIndex(false)->help("please upload your kid's birth certificate. maximum size 1.0 MB")->encrypt(true);
		$this->addText("Father's Name","father_name")->showIndex(false)->strLimit(150)->maxLength(255);
		$this->addText("Mother's Name","mother_name")->showIndex(false)->strLimit(150)->maxLength(255);
		$this->addEmail("Email","email")->showIndex(false)->help("please enter parent's email here");
		$this->addNumber("Mobile No 1","mobile_no1")->showIndex(false);
		$this->addNumber("Mobile No 2","mobile_no2")->required(false)->showIndex(false);
		$this->addNumber("Telephone","tel")->required(false)->showIndex(false);
		$this->addText("Present Address","present_address")->showIndex(false)->strLimit(150)->maxLength(255);
		$this->addText("Parmanant Address","parmanant_address")->showIndex(false)->strLimit(150)->maxLength(255);
		$this->addSelectOption("Father's Occupation","father_occupation")->options(['business'=>'business','Farmer'=>'Farmer','Teacher'=>'Teacher','Doctor'=>'Doctor','Employee'=>'Employee','other'=>'other'])->showIndex(false);
		$this->addSelectOption("Mother's Occupation","mother_occupation")->options(['business'=>'business','House wife'=>'House wife','Teacher'=>'Teacher','Doctor'=>'Doctor','Employee'=>'Employee','other'=>'other'])->showIndex(false);
		$this->addRadio("Dear Visitor ,","dear visitor ,")->options(['i agree'=>'i agree'])->showIndex(false)->help("after apply for your kid's registration it will take less or more 15 minutes for validation check. after verifying we will contact with you. And we will provide you new user and password. Thank you.");
		

    }
}
