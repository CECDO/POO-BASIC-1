<?php

class Car
{
    private int $wheelsCount = 4;

    private int $currentSpeed;

    private string $color;

    private int $seatsCount;

    private string $fuelType;

    private int $currentFuelLevel = 100;

    public function __construct(string $color, int $seatsCount, string $fuelType)
    {
        $this->color = $color;
        $this->seatsCount = $seatsCount;
        $this->fuelType = $fuelType;
    }

    public function start()
    {
        $this->currentSpeed = 0;

        return "Engine started ";
    }

    public function forward(): string
    {
        $this->currentSpeed = 70;

        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped ";
        return $sentence;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function getFuelType(): string
    {
        return $this->fuelType;
    }
}
