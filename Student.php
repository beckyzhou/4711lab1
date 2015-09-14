<?php

/**
 * Represents a Student
 * 
 * @author Becky Zhou
 */
class Student {
    
    /**
     * Instantiates a Student object.
     * Creates instance variables like:
     * surname, firstname, emails, and grades
     */
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    /** 
     * Adds an email to a student's array of emails
     * 
     * @param type $which Key of an email
     * @param type $address Email address
     */
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }
    
    /**
     * Adds an email to a student's array of grades
     * 
     * @param type $grade A grade that student has receieved
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    /**
     * Calculates a student's average grade and returns it
     * 
     * @return type
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value) {
            $total += $value;
        }
        return $total / count($this->grades);
    }
    
    /**
     * Returns strings describing a student
     * 
     * @return type
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' (' . $this->average() . ")\n";
        foreach($this->emails as $which => $what) {
                $result .= $which . ': '. $what . "\n";
            $result .= "\n";
        }
        return '<pre>' . $result .'</pre>';
    }
    
}