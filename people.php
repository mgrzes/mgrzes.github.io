<?php

class People {
	public $data;
	
	public function __construct() {  
		$this->data = array();
		$this->data['Hannan Azhar'] = '<a href="https://www.researchgate.net/profile/M_A_Hannan_Bin_Azhar2">Hannan Azhar</a>';
		$this->data['Mohamed Sakel'] = '<a href="http://uk.linkedin.com/pub/mohamed-sakel/25/267/690">Mohamed Sakel</a>';
		$this->data['Howard Bowman'] = '<a href="https://www.cs.kent.ac.uk/people/staff/hb5/">Howard Bowman</a>';
		$this->data['Theophile Champion'] = '<a href="https://www.cs.kent.ac.uk/people/rpg/tmac3/">Theophile Champion</a>';
		$this->data['Piotr Sawicki'] = '<a href="https://www.cs.kent.ac.uk/people/rpg/ps564/">Piotr Sawicki</a>';
		$this->data['Lisa Bonheme'] = '<a href="https://www.cs.kent.ac.uk/people/rpg/lb732/">Lisa Bonheme</a>';
		$this->data['Lee Harris'] = '<a href="https://www.cs.kent.ac.uk/people/rpg/lh558/">Lee Harris</a>';
		$this->data['Rogerio de Lemos'] = '<a href="https://www.cs.kent.ac.uk/people/staff/rdl/">Rogerio de Lemos</a>';
		$this->data['Farhana Ferdousi Liza'] = '<a href="https://research-portal.uea.ac.uk/en/persons/farhana-ferdousi-liza">Farhana Ferdousi Liza</a>';
		$this->data['Marek Grzes'] = '<strong>Marek Grzes</strong>';
		$this->data['Daniel Kudenko'] = '<a href="http://www-users.cs.york.ac.uk/~kudenko/">Daniel Kudenko</a>';
		$this->data['Jesse Hoey'] = '<a href="http://www.cs.uwaterloo.ca/~jhoey/">Jesse Hoey</a>';
		$this->data['Pascal Poupart'] = '<a href="http://www.cs.uwaterloo.ca/~ppoupart/">Pascal Poupart</a>';
		$this->data['Marek Kretowski'] = '<a href="http://aragorn.pb.bialystok.pl/~mkret/">Marek Kretowski</a>';
		$this->data['Sam Devlin'] = '<a href="http://www.cs.york.ac.uk/~devlin/">Sam Devlin</a>';
		$this->data['Andrew Monk'] = '<a href="http://www-users.york.ac.uk/~am1/">Andrew Monk</a>';
		$this->data['Alex Mihailidis'] = '<a href="http://www.ot.utoronto.ca/iatsl/people/amihailidis.htm">Alex Mihailidis</a>';
		$this->data['Shehroz Khan'] = '<a href="http://uwaterloo.academia.edu/ShehrozKhan">Shehroz Khan</a>';
		$this->data['Peter Vrancx'] = '<a href="http://como.vub.ac.be/members:peter_vrancx">Peter Vrancx</a>';
		$this->data['Matthew E. Taylor'] = '<a href="http://www.cs.lafayette.edu/~taylorm/">Matthew E. Taylor</a>';
		$this->data['Marcin Czajkowski'] = '<a href="http://aragorn.pb.bialystok.pl/~mczajk/">Marcin Czajkowski</a>';
	} 
	
	public function get($name) {
		if ( !isset($this->data[$name]) ) {
			echo $name;
			return;
		}
		echo $this->data[$name];
	}
}

?>

