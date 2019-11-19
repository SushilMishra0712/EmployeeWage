<?php

class Employee
{
    public $employee_name;
    public $wage_per_hour;
    public $full_day_hour;
    public $part_time_hour;

    public function __construct()
    {
        $this->employee_name=null;
        $this->wage_per_hour=20;
        $this->full_day_hour=8;
        $this->part_time_hour=8;
    }

    public function employee_Attendance()
    {
        echo "Enter the name of employee:";
        fscanf(STDIN,"%s",$this->employee_name);
        //random function 1 for present 0 for absent
        $attendance=rand(0,2);
        if($attendance==0)
        {
            echo $this->employee_name." is Absent\n";
        }
        else if($attendance==1)
        {
            echo $this->employee_name." is Present\n";
            echo $this->employee_name." is Full-time employee\n";
            self::daily_EmployeeWage();
        }
        else 
        {
            echo $this->employee_name." is Present\n";
            echo $this->employee_name." is Part-time employee\n";
            self::partTime_EmployeeWage();
        }
    }

    public function daily_EmployeeWage()
    {
        //calculate daily wage of employee
        $wages_per_day = $this->wage_per_hour*$this->full_day_hour;
        echo "Daily Wages of ".$this->employee_name." is:".$wages_per_day."\n";
    }

    public function partTime_EmployeeWage()
    {
        //calculate daily wage of part time employee
        $wages_per_day = $this->wage_per_hour*$this->part_time_hour;
        echo "Daily Wages of ".$this->employee_name." is:".$wages_per_day."\n";
    }
}
$object=new Employee;
$object->employee_Attendance();

?>