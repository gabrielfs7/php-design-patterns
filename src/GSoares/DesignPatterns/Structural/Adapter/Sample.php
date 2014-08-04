<?php
namespace GSoares\DesignPatterns\Structural\Adapter;

/**
 * Sample 1
 *
 * Adapt an old phone number class to a new one that provides separate phone number codes.
 */

class LegacyPhoneNumber
{
    private $number;

    public function __construct($number)
    {
        $this->number = $number;
    }

    public function getNumber()
    {
        return $this->number;
    }
}

class PhoneNumberAdapter
{
    private $legacyNumber;

    public function __construct(LegacyPhoneNumber $legacyPhoneNumber)
    {
        $this->legacyNumber = preg_replace('/[^0-9]/', '', $legacyPhoneNumber->getNumber());
    }

    public function getAreaCode()
    {
        return substr($this->legacyNumber, 2, 2);
    }

    public function getCountryCode()
    {
        return substr($this->legacyNumber, 0, 2);
    }

    public function getNumber()
    {
        return substr($this->legacyNumber, 4);
    }
}

function runAdapter()
{
    echo "Sample 1 - PhoneNumberAdapter\n\n";

    $legacyNumber = new LegacyPhoneNumber('+55 (48) 3222-2222');

    echo "Set legacy phone number " . $legacyNumber->getNumber() . "\n";

    $newNumber = new PhoneNumberAdapter($legacyNumber);

    echo "After adapter we can get: \n";
    echo "Country code: " . $newNumber->getCountryCode() . "\n";
    echo "Area code: " . $newNumber->getAreaCode() . "\n";
    echo "Number: " . $newNumber->getNumber();
}