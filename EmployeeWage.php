<?php

class Employee
{
    public $employee_name;
    public $wage_per_hour;
    public $full_day_hour;
    public $part_time_hour;
    public $working_day_per_month;

    public function __construct()
    {
        $this->employee_name=null;
        $this->wage_per_hour=20;
        $this->full_day_hour=8;
        $this->part_time_hour=8;
        $this->working_day_per_month=20;
    }

    public function employee_Attendance()
    {
        echo "Enter the name of employee:";
        fscanf(STDIN,"%s",$this->employee_name);
        //random function 1 for present 0 for absent
        $attendance=rand(0,2);
        switch($attendance)
        {
            case 0:
                echo $this->employee_name." is Absent\n";
            break;
            case 1:
                echo $this->employee_name." is Present\n";
                echo $this->employee_name." is Full-time employee\n";
                self::Monthly_Fulltime_EmployeeWage();
            break;
            case 2:
                echo $this->employee_name." is Present\n";
                echo $this->employee_name." is Part-time employee\n";
                self::Monthly_Parttime_EmployeeWage();
            break;
        }
    }

    public function Monthly_Fulltime_EmployeeWage()
    {
        //calculate daily wage of employee
        $wages_per_day = $this->wage_per_hour*$this->full_day_hour;
        echo "Daily Wages of ".$this->employee_name." is:".$wages_per_day."\n";
        $wages_per_month = $this->working_day_per_month*$wages_per_day;
        echo "Monthly Wages of ".$this->employee_name." is:".$wages_per_month."\n";
    }

    public function Monthly_Parttime_EmployeeWage()
    {
        //calculate daily wage of part time employee
        $wages_per_day = $this->wage_per_hour*$this->part_time_hour;
        echo "Daily Wages of ".$this->employee_name." is:".$wages_per_day."\n";
        $wages_per_month = $this->working_day_per_month*$wages_per_day;
        echo "Monthly Wages of ".$this->employee_name." is:".$wages_per_month."\n";
    }
}
$object=new Employee;
$object->employee_Attendance();

?>