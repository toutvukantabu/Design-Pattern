<?php
namespace App\Vehicule;

Abstract class Vehicule
{
    
private $marque;
private $moteur;
private $roue;
private $place;
private $vitesse;

/**
 * Get the value of moteur
 */
public function getMoteur()
{
return $this->moteur;
}

/**
 * Set the value of moteur
 */
public function setMoteur($moteur): self
{
$this->moteur = $moteur;

return $this;
}

/**
 * Get the value of roue
 */
public function getRoue()
{
return $this->roue;
}

/**
 * Set the value of roue
 */
public function setRoue($roue): self
{
$this->roue = $roue;

return $this;
}

/**
 * Get the value of place
 */
public function getPlace()
{
return $this->place;
}

/**
 * Set the value of place
 */
public function setPlace($place): self
{
$this->place = $place;

return $this;
}

/**
 * Get the value of vitesse
 */
public function getVitesse()
{
return $this->vitesse;
}

/**
 * Set the value of vitesse
 */
public function setVitesse($vitesse): self
{
$this->vitesse = $vitesse;

return $this;
}

/**
 * Get the value of marque
 */
public function getMarque()
{
return $this->marque;
}

/**
 * Set the value of marque
 */
public function setMarque($marque): self
{
$this->marque = $marque;

return $this;
}
}


?>