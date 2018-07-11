<?php

namespace app\models;

use Yii;
use yii\base\Model;


class CalcForm extends Model
{
    public $number;
    public $button;
    public $result = 0;
    public $button1 = "button1";
    public $button2 = "button2";
    public $button3 = "button3";

    public function rules() {

        return [
            [['number', 'button'], 'required'],
            ['number', 'number', 'min' => 1],
        ];

    }

    private function isEven ($val)
    {
        if ($val % 2 == 0)
            return true;

        return false;
    }

    private function oddDigitsSum ($number) {

        $sum = 0;
        $arVal = str_split($number);
        foreach ($arVal as $val)
        {
            if (!$this->isEven($val))
                $sum += $val;
        }

        return $sum;

    }



    private function evenDigitsSum ($number) {

        $sum = 0;
        $arVal = str_split($number);
        foreach ($arVal as $val)
        {
            if ($this->isEven($val))
                $sum += $val;
        }

        return $sum;

    }

    private function digitsSum ($number) {

        return (($number * ($number + 1)) / 2);

    }

    public function calc($number) {

        $button = $this->button;

        if ($this->validate()) {

            switch ($button) {

                case ($this->button1):
                    $this->result = $this->oddDigitsSum($number);
                    break;
                case ($this->button2):
                    $this->result = $this->evenDigitsSum($number);
                    break;
                case ($this->button3):
                    $this->result = $this->digitsSum($number);
                    break;

            }
            return true;
        }

        return false;

    }

}