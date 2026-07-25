<?php

class SpeedSensor {
    public function getSpeedLevel(int $speed) : string{
        if ($speed <= 0){
            return "Invalid speed";
        } elseif ($speed < 30){
            return "The speed is very slow";
        } elseif ($speed <= 60){
            return "The speed is good";
        } elseif ($speed <= 80){
            return "The speed is a little fast";
        } elseif ($speed <= 100){
            return "The speed is very fast";
        } else {
            return "The speed is extremely fast";
        }
    }

}