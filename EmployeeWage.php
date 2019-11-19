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
       
        //calculate daily wage of employee
        $wages_per_day = $this->wage_per_hour*$this->full_day_hour;
        echo "Daily Wages of ".$this->employee_name." is:".$wages_per_day."\n";
    }

    public function partTime_EmployeeWage()
    {
        echo "Enter name of part time employee:";
        fscanf(STDIN,"%s",$this->employee_name);

        //calculate daily wage of part time employee
        $wages_per_day = $this->wage_per_hour*$this->part_time_hour;
        echo "Daily Wages of ".$this->employee_name." is:".$wages_per_day."\n";
    }
}
$object=new Employee;
$object->partTime_EmployeeWage();

?>