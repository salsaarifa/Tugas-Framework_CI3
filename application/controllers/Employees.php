<?php

class  Employees extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('EmployeesModel');
    }

    // Menampilkan data karyawan
    function index(){
        $data['Judul'] = "Data Karyawan";
        // Mengambil data karyawan dari model
        $data['employees'] = $this->EmployeesModel->get_employees();
        // Mengambil template tampilan dari view
        $this->load->view('V_employees', $data);
    }

    function insert(){
        if ($this->input->post()){
            $data_input = $this->input->post();
            $result = $this->EmployeesModel->insert_employees($data_input);

            if($result > 0){
                //sukses
                $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">
                Succes!!
              </div>');
            }
            else{
                //err
                $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
                Error!!
              </div>');
            }
            redirect('employees/index');
        }
        else{
            $data['Judul'] = "Input Data Karyawan";
            $this->load->view('V_Form', $data);
        }
    }

    public function update($EMPLOYEE_ID = null){
        if ($this->input->post()){
            //proses update
            $update_data = $this->input->post();
            $this->EmployeesModel->update($update_data);
            redirect('employees');
        }
        else{
            $data['Judul'] = "UPDATE DATA KARYAWAN";
            $data['employees'] = $this->EmployeesModel->get_one($EMPLOYEE_ID);
            $this->load->view('V_update', $data);
            
        }
    }

    function delete($EMPLOYEE_ID){
        $this->EmployeesModel->delete($EMPLOYEE_ID);
        redirect('employees');
    }
}