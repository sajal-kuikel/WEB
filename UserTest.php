<?php

    require 'connect.php';
    require 'DatabaseTable.php';

    class UserTest extends TestCase {
        public function testNoDOB(){
            $users = new DatabaseTable('person');
            $testdata = [
                'firtname' => 'Ram',
                'surname' => 'Sharma',
                'email'=> 'sharma@ram.com',
                'birthday' => '',

            ];
            $check = $users-> insert($testdata);
            $this->assertTrue($check);
        }
    }

?>