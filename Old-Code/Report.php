<?php

require_once '/var/www/html/projects/SingleResponsibilityPrinciple/Old-Code/ReportProgram.php';

class Report
{
    private string $name;
    private int $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getTitle()
    {
        return  $this->name;
    }

    public function getDate()
    {
        return  $this->age;
    }

    public function formatWord()
    {
        $title = $this->getTitle();
        $age = $this->getDate();
        return <<<EOD
           Word Format
           $title
           $age
        EOD;
    }

    public function formatPDF()
    {
        $title = $this->getTitle();
        $age = $this->getDate();
        return <<<EOD
           PDF Format
           $title
           $age
        EOD;
    }
}


echo "Hello, world!";
$report = new Report("My Report", 23);
echo "<br>";
var_dump($report);

$reportProgram = new ReportProgram();
$wordReport = $reportProgram->report($report, "Word");
echo "<br>".$wordReport;

$wordReport = $reportProgram->report($report, "PDF");
echo "<br>".$wordReport;
