<?php

namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;


class CalcCtrl {

	private $form;   
	private $result; 

	
	public function __construct(){
		
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
	
	public function getParams(){
		$this->form->money = getFromRequest('money');
		$this->form->year = getFromRequest('year');
		$this->form->per = getFromRequest('per');
	}
	
	
	public function validate() {
		if (! (isset ( $this->form->money) && isset ( $this->form->year ) && isset ( $this->form->per ))) {
			return false;
		}
		
		
		if ($this->form->money == "") {
			getMessages()->addError('Nie podano kwoty');
		}
		if ($this->form->year == "") {
			getMessages()->addError('Nie podano okresu spłaty');
		}
		
		if($this->form->per == ""){
			getMessages()->addError('Nie podano oprocentowania');
		}
	
		if (! getMessages()->isError()) {
			

			if (! is_numeric ( $this->form->money )) {
				getMessages()->addError('Pierwsza wartość nie jest liczbą całkowitą');
			}
			
			if (! is_numeric ( $this->form->year )) {
				getMessages()->addError('Druga wartość nie jest liczbą całkowitą');
			}
			
			if (! is_numeric ( $this->form->per)) {
				getMessages()->addError('Druga wartość nie jest liczbą całkowitą');
			}
		}
		
		return ! getMessages()->isError();
	}
	
	
	public function action_calcCompute(){

		$this->getParams();
		
		if ($this->validate()) {
				
		
			$this->form->money = floatval($this->form->money);
			$this->form->year = intval($this->form->year);
			$this->form->per= intval($this->form->per);
			getMessages()->addInfo('Parametry poprawne.');	
			if (inRole('admin')) {
				$rata = ($this->form->money /($this->form->year*12));
				$rata_procent= $rata * $this->form->per/100;
				$this->result->result=$rata_procent +$rata;
			getMessages()->addInfo('Wykonano obliczenia.');
			}else
				{
					getMessages()->addError('Tylko administrator może wykonać tę operację');
				}
		}
		
		$this->generateView();
	}
	
	public function action_calcShow(){
		getMessages()->addInfo('Witaj w kalkulatorze');
		$this->generateView();
	}
	
	
	public function generateView(){
		global $user;
		getSmarty()->assign('user',$user);
		getSmarty()->assign('page_title','Zadanie 07');
		getSmarty()->assign('page_description','Kalkulator kredytowy');
		getSmarty()->assign('page_header','Ochrona zasobów');
					
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		
		getSmarty()->display('CalcView.tpl'); 
	}
}