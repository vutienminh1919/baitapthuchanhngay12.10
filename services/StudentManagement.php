<?php

class StudentManagement
{
    private $students;

    public function __construct()
    {
        $this->students = [];
    }

    public function index() // get all students
    {
        return $this->students;
    }

    public function store($student)
    {
        array_push($this->students,$student);
    }
    public function storeStudents($students=[])  //add student
    {
        foreach ($students as $student){  //add more
            $this->storeStudents($student);
        }
    }
}