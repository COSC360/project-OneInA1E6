<?php

class LoginTest extends \PHPUnit\Framework\TestCase {
    public function testFindUser(){
        
        $user = new code\testing;
        $result = $user->findUser("kenny");

        $this->assertEquals(true, $result);

    }
}