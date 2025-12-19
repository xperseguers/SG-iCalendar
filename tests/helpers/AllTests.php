<?php

require_once 'PHPUnit/Framework.php';
require_once __DIR__ . '/FreqTest.php';
require_once __DIR__ . '/RecurrenceTest.php';
require_once __DIR__ . '/DurationTest.php';

class Helpers_AllTests
{
    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite('Helpers');
        $suite->addTestSuite('FreqTest');
        $suite->addTestSuite('RecurrenceTest');
        $suite->addTestSuite('DurationTest');

        return $suite;
    }

}
