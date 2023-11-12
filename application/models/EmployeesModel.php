<?php

class EmployeesModel extends CI_Model{
    function __construct(){
        parent:: __construct();
    }

    function get_employees(){
        // pakai raw sql
        // $sql = "SELECT * FROM employees";
        // $data = $this->db->query($sql);
        // return $data->result();

        //pakai query builder
        return $this->db->get('employees')->result();
    }

    function insert_employees($data){
        // $sql = "INSERT INTO employees VALUES (?,?,?,?)";
        // $this->db->query($sql, array($data['EMPLOYEE_ID'], $data['FIRST_NAME'], $data['LAST_NAME'], $data['DEPARTMENT_ID']));

        $insert_data = array(
            'EMPLOYEE_ID' => $data['EMPLOYEE_ID'],
            'FIRST_NAME' => $data['FIRST_NAME'],
            'LAST_NAME' => $data['LAST_NAME'], 
            'DEPARTMENT_ID' => $data['DEPARTMENT_ID']
        );
        $this->db->insert('employees', $insert_data);
        return $this->db->affected_rows();
    }

    function get_one($EMPLOYEE_ID){
        // $sql = "SELECT * FROM employees WHERE EMPLOYEE_ID = ?";
        // $data = $this->db->query($sql, array($EMPLOYEE_ID));
        // return $data->result();

        //return $this->db->get_where('employee', array('EMPLOYEE_ID' => $EMPLOYEE_ID))->result();
        $this->db->where('EMPLOYEE_ID', $EMPLOYEE_ID);
        return $this->db->get('employees')->result();
    }

    function update($data){
        // $sql = "UPDATE employees SET FIRST_NAME = ?, LAST_NAME = ?, DEPARTMENT_ID = ? WHERE EMPLOYEE_ID = ?";
        // $this->db->query($sql, array($data['FIRST_NAME'], $data['LAST_NAME'], $data['DEPARTMENT_ID'], $data['EMPLOYEE_ID']));

        $data_update = array(
            'FIRST_NAME' => $data['FIRST_NAME'],
            'LAST_NAME' => $data['LAST_NAME'],
            'DEPARTMENT_ID' => $data['DEPARTMENT_ID']
        );
        $this->db->where('EMPLOYEE_ID', $data['EMPLOYEE_ID']);
        $this->db->update('employees', $data_update);
    }

    function delete($EMPLOYEE_ID){
        // $sql = "DELETE FROM employees WHERE EMPLOYEE_ID = ?";
        // $this->db->query($sql, array($EMPLOYEE_ID));

        $this->db->where('EMPLOYEE_ID', $EMPLOYEE_ID);
        $this->db->delete('employees');
    }
}