<?php
include_once "models/Employee.php";
include_once "services/EmployeeManager.php";

$employeeManager = new EmployeeManager();
$employee1 = new Employee("nguyen","thanh",'1/1/2001',"viet tri","sinh vien");
$employee2 = new Employee("nguyen","xuan anh",'1/1/2001',"viet tri","sinh vien");
$employee3 = new Employee("nguyen","minh",'1/1/2001',"viet tri","giam doc");
$employee4 = new Employee("nguyen","hoang",'1/1/2001',"viet tri","hoc sinh");

$employeeManager->storeEmployee($employee1);
$employeeManager->storeEmployee($employee2);
$employeeManager->storeEmployee($employee3);
$employeeManager->storeEmployee($employee4);
echo "<pre>";


