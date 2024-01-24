<?php
class Aircraft
{
	public $id;
	public $name;
	public $type;

	public function __construct($id, $name, $type)
	{
		$this->id = $id;
		$this->name = $name;
		$this->type = $type;
	}

	public function showInfo()
	{
		echo $this->id . '<br>';
		echo $this->name . '<br>';
		echo $this->type . '<br>';
	}
}

$aircraft = new Aircraft(1, 'B737', 'Airliner');
print_r($aircraft->showInfo());
?>
