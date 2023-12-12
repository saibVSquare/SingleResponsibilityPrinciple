<?php

require_once '/var/www/html/projects/SingleResponsibilityPrinciple/New-Code/Report.php';

interface ReportFormattable
{
    public function format(Report $report): string;
}
