<?php

namespace app\models;
use yii;
use yii\base\Model;

class EntryForm extends Model
{
	public $name;
	public $phone;
	public $addr;
	public $age;
	public $email;

	public function rules()
	{
		return [
			[['name', 'email', 'addr', 'age', 'phone'], 'required'],
			[['age', 'phone'], 'number'],

			['email', 'email'],
		];
	}
}
?>