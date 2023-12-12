<?php

require_once '/var/www/html/projects/SingleResponsibilityPrinciple/New-Code/Report.php';

class PDFFormatter implements ReportFormattable
{
    public function format(Report $report): string
    {
        $title = $report->getTitle();
        $date = $report->getDate();
        return <<<EOD
           PDF Format
           $title
           $date
        EOD;
    }
}
