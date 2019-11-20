<?php

class Employee
{
    public $employee_name;
    public $wage_per_hour;
    public $full_day_hour;
    public $part_time_hour;
    public $max_working_hour_permonth;
    public $max_working_day_permonth;

    public function __construct()
    {
        $this->employee_name=null;
        $this->wage_per_hour=20;
        $this->full_day_hour=8;
        $this->part_time_hour=8;
        $this->max_working_hour_permonth=100;
        $this->max_working_day_permonth=20;
    }

    public function employee_Attendance()
    {
        echo "Enter the name of employee:";
        fscanf(STDIN,"%s",$this->employee_name);
        //random function 1 for present 0 for absent
        $attendance=rand(0,3);
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
            case 3:
                echo "Store daily wages along with total wage:\n";
                self::Store_daily_Wage();
            break;
        }
    }

    public function Monthly_Fulltime_EmployeeWage()
    {
        //calculate daily wage of employee
        echo "How many hours you work this month?\n";
        fscanf(STDIN,"%d",$this->max_working_hour_permonth);
        echo "How many days you work this month?\n";
        fscanf(STDIN,"%d",$this->max_working_day_permonth);

        if($this->max_working_hour_permonth>100 || $this->max_working_day_permonth>20)
        {
            echo "Total working hours/days reached..\n";
        }
        else
        {
            $wages_per_month = $this->max_working_hour_permonth*$this->wage_per_hour;
            echo "Monthly Wages of ".$this->employee_name." is:".$wages_per_month."\n";
        }
    }

    public function Monthly_Parttime_EmployeeWage()
    {
        //calculate daily wage of part time employee
        echo "How many hours you work this month?\n";
        fscanf(STDIN,"%d",$this->max_working_hour_permonth);
        echo "How many days you work this month?\n";
        fscanf(STDIN,"%d",$this->max_working_day_permonth);

        if($this->max_working_hour_permonth>100 || $this->max_working_day_permonth>20)
        {
            echo "Total working hours/days reached..\n";
        }
        else
        {
            $wages_per_month = $this->max_working_hour_permonth*$this->wage_per_hour;
            echo "Monthly Wages of ".$this->employee_name." is:".$wages_per_month."\n";
        }
    }

    public function Store_daily_Wage()
    {
        $total_wage=0;
        $max_day_work=0;
        
        for($i=1;$i<21;$i++)
        {
            echo "How many hours do you work on day ".$i." ?\n";
            fscanf(STDIN,"%d",$this->full_day_hour);
            if($this->full_day_hour>8)
            {
                echo "Maximum working hour per day is 8..Enter again\n";
                $i--;
                continue;
            }
            $wage_per_day=$this->full_day_hour*$this->wage_per_hour;
            $total_wage=$total_wage+$wage_per_day;
            if($total_wage>2000)
            {
                print_r($temp_array);
                echo "You have reached your working hour limit\n";
                $max_day_work=$i;
            break;
            }
            $temp_array[$i]=array($wage_per_day,$total_wage);
        }

        for($i=1;$i<$max_day_work;$i++)
        {
            echo "Day ".$i."\n";
            echo "Wage:";
            print_r($temp_array[$i][0]);
            echo "\nTotal wage:";
            print_r($temp_array[$i][1]);
            echo "\n";
        }
    }
}

$object=new Employee;
$object->employee_Attendance();

?>