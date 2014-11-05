<?php
echo heading('Students Page', 1);
$this->load->helper("form");
$this->table->set_heading('Name', 'Current Year', 'Graduation Year', 'Action');
$tmp1 = array('table_open' => '<table class="table table-bordered"');
$this->table->set_template($tmp1);
echo form_open('students/add');
$data['first'] = array('name' => 'name', 'value' => set_value('name'));
$data['second'] = array('name' => 'cur_year', 'value' => set_value('cur_year'));
$data['third'] = array('name' => 'grad_year', 'value' => set_value('grad_year'));
$this->table->add_row(form_input($data['first']),
					form_input($data['second']),
					form_input($data['third']),
					form_submit('btnInsert','Insert'));
echo $this->table->generate();
echo form_close();

echo validation_errors();
?>
<div>
<form method="POST" action="">
Add multiple rows <input type="text" placeholder="1" name="numberInserts"/>
<input type="submit" name="btnSubmit" value="Go" />
</form>
<button value="students/add">Save</button>
</div>