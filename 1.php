
<?php
class personne {
	protected $id;
	protected $nom;
	protected $prenom;
}

public function getNom{
  return $this->nom;
}

public function getPrenom{
  return $this->prenom;
}

public function setNom($qui){
  return $this->nom=($qui);
}

public function setPrenom($qui){
  return $this->prenom=($qui);
}


?>

