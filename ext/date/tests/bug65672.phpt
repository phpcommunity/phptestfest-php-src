--TEST--
Bug #65672
--CREDITS--
Yulia Kostrikova <yuliakostrikova@gmail.com>
# TestFest 2017 -  Kharkiv PHP UG 2017-10-29
--FILE--
<?php
class Period extends \DatePeriod
{
    protected $testProperty;

    public function setTestProperty($value)
    {
        $this->testProperty = $value;
    }

    public function getTestProperty()
    {
        return $this->testProperty;
    }
}

$p = new Period(new \DateTime('now'), new \DateInterval('P1Y'), new \DateTime('tomorrow'));
$p->setTestProperty(1);
echo $p->getTestProperty();
?>
--XFAIL--
Writing to DatePeriod properties is unsupported.
--EXPECTF--
1