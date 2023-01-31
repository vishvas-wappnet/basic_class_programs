<?php
    class bank
    {
        public $account_name="Ronak";
        public $account_number=3002;
        public function show_data(){
            echo"welcome : ".$this->account_name."your account number is : ".$this->account_number;
        }
    }
    $user1=new bank();
    $user1->show_data();
 //added some feeature by vishvas
?>
