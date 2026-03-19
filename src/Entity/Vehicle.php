<?php

class Vehicle
{
    //Attributs
    private string $vehicleName;
    private int $nbrWheels;
    private float $speed;

    public function __construct(string $vehicleName, int $nbrWheels, float $speed) 
    {
        $this->vehicleName = $vehicleName;
        $this->speed = $speed;
        $this->nbrWheels = $nbrWheels;
    }

    //Getters et Setters
    public function getVehicleName(): string {
        return $this->vehicleName;
    } 

    public function setVehicleName(string $vehicleName): void {
        $this->vehicleName = $vehicleName;
    }

    
    public function getNbrWheels(): int {
        return $this->nbrWheels;
    }

    public function setNbrWheels(int $nbrWheels): void {
        $this->nbrWheels = $nbrWheels;
    }

    public function getSpeed(): float {
        return $this->speed;
    } 

    public function setSpeed(float $speed): void {
        $this->speed = $speed;
    } 

    //Méthode 
    public function detect(): string {
        switch ($this->nbrWheels) {
            case 2:
                return "moto";
            case 4:
                return "voiture";
            default:
                return "véhicule non défini.";
        }
    }

    public function boost(): void {
        $this->speed += 50; 
    }

    public function fastest(Vehicle $vehicle) {
        if ($vehicle->getSpeed() > $this->speed) {
            return "le véhicule " . $vehicle->getVehicleName() . " est le plus rapide";
        } else if ($vehicle->getSpeed() < $this->speed) {
            return "le véhicule " . $this->vehicleName . " est le plus rapide";
        } else {
            return "les deux véhicules ont la même vitesse.";
        }
    } 

}
