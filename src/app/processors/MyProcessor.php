<?php

namespace App\Processor;

class MyProcessor
{
    public function process($str)
    {
        try {
            return(ucfirst(strtolower($str)));
        } catch (Exception $ex) {
              // Not catched
        }
    }

//    public function succeedToCatch()
//    {
//        try {
//            $thing = somethingThrowingAnException();
//        } catch (\Exception $ex) {
//              // This is now catched
//       }
//    }

}