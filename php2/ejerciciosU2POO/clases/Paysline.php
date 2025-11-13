<?php 
interface Payslip {
    public function createPayslip(Employee $employee): string;
}
?>