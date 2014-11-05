<?php
echo heading('Students Page', 1);
$this->table->set_heading('ID', 'Name', 'Current Year', 'Graduation Year', 'Action');
$tmp1 = array('table_open' => '<table class="table table-bordered"');
$this->table->set_template($tmp1);
echo $this->table->generate($stds);
?>
<div>
<a href="add">Add new</a>
<a href="students/">Batch Update</a>
<a href="students/">Batch Delete</a>
</div>