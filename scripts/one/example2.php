<?php

require __DIR__ . '/../../vendor/autoload.php';

/**
 * Może to nie jest oczywiste ale interfejsy obsługuję dziedziczenie oraz wielodziedziczenie (wielodzedziczenie - w przeciwieństwie do klas)
 */

interface PersonalName
{
    public function name(): string;
}

interface PersonalNick
{
    public function nick(): string;
}

interface PersonalEmail
{
    public function email(): string;
}

/**
 * Możemy zaimplementować w klasie wszystkie interfejsy
 */

class UserExampleOne implements PersonalName, PersonalNick, PersonalEmail
{
    public function name(): string {
        return 'user name';
    }

    public function nick(): string
    {
        return 'user nick';
    }

    public function email(): string
    {
        return 'useremail@example.com';
    }
}

$userOne = new UserExampleOne();
echo $userOne->name();
echo $userOne->nick();
echo $userOne->email();


/**
 * Lub użyć dziedziczenia interfejsów
 */

interface Personal extends PersonalEmail, PersonalNick, PersonalName
{}

class UserExampleTwo implements Personal
{
    public function name(): string {
        return 'user name';
    }

    public function nick(): string
    {
        return 'user nick';
    }

    public function email(): string
    {
        return 'useremail@example.com';
    }
}

$userTwo = new UserExampleTwo();
//echo $userTwo->name();
//echo $userTwo->nick();
//echo $userTwo->email();