<?php

/**
 * MODYFIKATORY DOSTĘPU
 *
 * Określają zakres widoczności właściwości bądź metody danej klasy
 *
 * Istnieją trzy rodzaje modyfikatorów dostępu:
 * - public
 * - private
 * - protected
 *
 * Domyślnie, jeśli nie użyjemy żadnego modyfikatora to właściwość/metoda jest automatycznie publiczna.
 * Jednak DOBRĄ PRAKTYKĄ jest zawsze używać modyfikatora dostępu.
 *
 * PUBLIC - właściwość/metoda jest publiczna i dostęp do niej jest zarówno z wnętrza obiektu jak i z poza jej wnętrza
 * PRIVATE - właściwość/metoda jest prywatna i dostęp do niej jest tylko z wnętrza obiektu
 * PROTECTED - właściwość/metoda jest chroniona i nie ma dostępu do niej z poza obiektu. Widoczna jest w klasach potomnych (dzieciach)
 */

class MyClass
{
    public string $foo = 'public';
    private string $bar = 'private';
    protected string $baz = 'protected';

    private function privFoo(): void
    {
        echo "Jestem prywatną metodą \n";
    }

    public function printProperties(): void
    {
        var_dump($this->foo);
        var_dump($this->bar);
        var_dump($this->baz);

        $this->privFoo();
    }
}

class MyChild extends MyClass
{
    public function printChildProperties(): void
    {
        var_dump($this->foo);
        var_dump($this->baz);

        //var_dump($this->bar);
        //$this->privFoo();
    }
}

$object = new MyClass();

//var_dump($object->foo);
//var_dump($object->bar);
//var_dump($object->baz);

//$object->privFoo();
//$object->printProperties();

$childObject = new MyChild();
var_dump($childObject->baz);
//$childObject->printChildProperties();

/**
 * Widzimy, że dostęp z zewnątrz obiektu jest tylko do właściwości publicznej.
 * Próba pobrania właściwości prywatnej lub chronionej kończy się błędem.
 * Podobnie jak wywołanie prywatnej metody.
 *
 * Widzimy za to, że wywołanie publicznej metody, która wyświetla prywatne właściwości
 * i wykonuje prywatną metodę działa bez zarzutu
 *
 * Modyfikatory są po to aby ograniczać i chronić nasz obiekt, a konkretniej jego
 * właściwości i metody przed nieuprawnionym dostępem.
 *
 * Moje zdanie jest takie, że jak tworzymy nową klasę to domyślnie wszystkie metody i właściwości
 * ustawiamy na prywatne, dopiero po przemyśleniu i jeśli są ku temu jakieś powody to wybrane
 * metody (rzadziej właściwości) ustawiam na publiczne.
 *
 * Czy publiczne właściwości są czym złym?
 * Generalnie nie, jednak trzeba mieć uzasadnioną potrzebę aby upublicznić właściwość
 *
 * W internecie krąży pewna anegdota.
 * "Publiczne elementy klasy są jak dzieci, raz stworzone i trzeba je utrzymywać całe życie ;)
 */
