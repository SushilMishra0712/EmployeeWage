<?php

class Employee
{
    public $employee_name;
    public function __construct()
    {
        $this->employee_name="";
    }
    public function employee_Attendance()
    {
        echo "Enter the name of employee:";
        fscanf(STDIN,"%s",$this->employee_name);
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
}
$object=new Employee;
$object->employee_Attendance();

?>