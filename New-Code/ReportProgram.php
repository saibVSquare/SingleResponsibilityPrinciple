<?php

require_once '/var/www/html/projects/SingleResponsibilityPrinciple/New-Code/Report.php';
require_once '/var/www/html/projects/SingleResponsibilityPrinciple/New-Code/ReportFormattable.php';
require_once '/var/www/html/projects/SingleResponsibilityPrinciple/New-Code/PDFFormatter.php';

class ReportProgram
{
    public function report(Report $report, ReportFormattable $formatter): string
    {
        return $formatter->format($report);
    }
}


echo "Hello, world!";
$report = new Report("My Report", 23);
echo "<br>";
var_dump($report);

$pdf = new PDFFormatter();

$reportProgram = new ReportProgram();
$wordReport = $reportProgram->report($report, $pdf);
echo "<br>".$wordReport;
