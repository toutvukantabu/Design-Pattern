<?php

namespace Factory;

/**
 * AbstractVehicule comprend toutes les caractériqtiques génerique d'une classe de type vehicule
 */
abstract class AbstractVehicule
{

    private string $marque;
    private string $moteur;
    private ?int $roue;
    private int $place;
    private int $vitesse;
    private ?bool $voler = false;



    /**
     * Get the value of marque
     *
     * @return string
     */
    public function getMarque(): string
    {
        return $this->marque;
    }

    /**
     * Set the value of marque
     *
     * @param string $marque
     *
     * @return self
     */
    public function setMarque(string $marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get the value of moteur
     *
     * @return string
     */
    public function getMoteur(): string
    {
        return $this->moteur;
    }

    /**
     * Set the value of moteur
     *
     * @param string $moteur
     *
     * @return self
     */
    public function setMoteur(string $moteur): self
    {
        $this->moteur = $moteur;

        return $this;
    }

    /**
     * Get the value of roue
     *
     * @return ?int
     */
    public function getRoue(): ?int
    {
        return $this->roue;
    }

    /**
     * Set the value of roue
     *
     * @param ?int $roue
     *
     * @return self
     */
    public function setRoue(?int $roue): self
    {
        $this->roue = $roue;

        return $this;
    }

    /**
     * Get the value of place
     *
     * @return int
     */
    public function getPlace(): int
    {
        return $this->place;
    }

    /**
     * Set the value of place
     *
     * @param int $place
     *
     * @return self
     */
    public function setPlace(int $place): self
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get the value of vitesse
     *
     * @return int
     */
    public function getVitesse(): int
    {
        return $this->vitesse;
    }

    /**
     * Set the value of vitesse
     *
     * @param int $vitesse
     *
     * @return self
     */
    public function setVitesse(int $vitesse): self
    {
        $this->vitesse = $vitesse;

        return $this;
    }

    /**
     * Get the value of voler
     *
     * @return ?bool
     */
    public function getVoler(): ?bool
    {
        return $this->voler;
    }

    /**
     * Set the value of voler
     *
     * @param ?bool $voler
     *
     * @return self
     */
    public function setVoler(?bool $voler): self
    {
        $this->voler = $voler;

        return $this;
    }
}
