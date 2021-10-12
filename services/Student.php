<?php

class Student
{
    private $name;
    private $math;
    private $physic;
    private $chemistry;

    public function __construct($name)
    {
        $this->name = $name;
        $this->math = 0;
        $this->physic= 0;
        $this->chemistry= 0;
    }

    /**
     * @return int
     */
    public function getMath(): int
    {
        return $this->math;
    }

    /**
     * @param int $math
     */
    public function setMath(int $math): void
    {
        $this->math = $math;
    }

    /**
     * @return int
     */
    public function getPhysic(): int
    {
        return $this->physic;
    }

    /**
     * @param int $physic
     */
    public function setPhysic(int $physic): void
    {
        $this->physic = $physic;
    }

    /**
     * @return int
     */
    public function getChemistry(): int
    {
        return $this->chemistry;
    }

    /**
     * @param int $chemistry
     */
    public function setChemistry(int $chemistry): void
    {
        $this->chemistry = $chemistry;
    }

    public function setPoint($math,$physic,$chemistry)
    {
        $this->setMath($math);
        $this->setMath($physic);
        $this->setMath($chemistry);
    }

    public function getAvg()
    {
        $avg = ($this->math+$this->physic+$this->chemistry)/3;
        return $avg;
    }
}