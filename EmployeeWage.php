<?php

class Employee
{
    public $employee_name;
    public function __construct()
    {
        $this->employee_name=null;
    }
    public function employee_Attendance()
    {
        echo "Enter the name of employee:";
        fscanf(STDIN,"%s",$this->employee_name);
        //random function 1 for present 0 for absent
        $attendance=rand(0,1);
        if($attendance==1)
        {
            echo $this->employee_name." is present\n";
        }
        else
        {
            echo $this->employee_name." is absent\n";
        }
    }
    public function daily_EmployeeWage()
    {
        echo "Enter the name of employee:";
        fscanf(STDIN,"%s",$this->employee_name);
        $wage_per_hour=20;
        $full_day_hour=8;
        //calculate daily wage of employee
        $wage_per_day=$wage_per_hour*$full_day_hour;
        echo "Daily Wages of ".$this->employee_name." is:".$wage_per_day."\n";
    }
}
$object=new Employee;
$object->daily_EmployeeWage();

?>