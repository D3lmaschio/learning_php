<?php

namespace LI2\Bank\Model;

/**
 * Class Address
 *
 * @package LI2\Bank\Model
 * @property string $street
 * @property string $number
 * @property string $country
 * @property string $city
 * @property string $zip
 */
class Address
{
    public function __construct(
        private string $street,
        private string $number,
        private string $country,
        private string $city,
        private string $zip,
    )
    {
    }

    public function __destruct()
    {
        echo 'Objeto Address destruído.' . PHP_EOL;
    }

    /**
     * @param string $street
     */
    public function setStreet(string $street): void
    {
        $this->street = $street;
    }

    /**
     * @param string $number
     */
    public function setNumber(string $number): void
    {
        $this->number = $number;
    }

    /**
     * @param string $city
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    /**
     * @param string $country
     */
    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    /**
     * @param string $zip
     */
    public function setZip(string $zip): void
    {
        $this->zip = $zip;
    }

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getZip(): string
    {
        return $this->zip;
    }

    public function getAddress(): array
    {
        return [
            'street' => $this->street,
            'number' => $this->number,
            'city' => $this->city,
            'country' => $this->country,
            'zip' => $this->zip
        ];
    }

    public function __toString(): string
    {
        return "$this->street, $this->number, $this->city, $this->country, $this->zip";
    }

    public function __get(string $attribute): string
    {
        $method = 'get' . ucfirst($attribute);
        return $this->$method();
    }

    public function __set(string $name, $value): void
    {
        $this->$name = $value;
    }
}