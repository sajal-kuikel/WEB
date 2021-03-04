<?php

    require 'connect.php';
    require 'DatabaseTable.php';

    class UserTest extends \PHPunit\Framework\TestCase {
        public function testNoDOB(){
            $users = new DatabaseTable();
            $testdata = [
                'firtname' => 'Ram',
                'surname' => 'Sharma',
                'email'=> 'sharma@ram.com',
                'birthday' => '',

            ];
            $check = $users-> save($pdo, 'person', $testdata);
            $this->assertTrue($check);
        }
    }

?>