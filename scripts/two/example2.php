<?php

require __DIR__ . '/../../vendor/autoload.php';

$publicHouse = new PublicHouse();
$publicHouse->closed = false;

/**
 * Wszystko jest publiczne.
 * Teraz trzeba się zastanowić, czy jest sens istnienia metod 'close', 'open'
 * gdy można właściwość 'closed' ustawić bezpośrednio
 *
 * Otworzyliśmy nasze mieszkanie odwołując się bezpośrednio do właściwości. Pomijając metody.
 * Z jednej strony można powiedzieć, że wszystko działa i metody są nam niepotrzebne.
 * Jednak użycie metod daje nam dużo większe możliwości.
 *
 * Przede wszystkim ogranicza dostęp do właściwości,
 * oraz daje nam możliwość wykonania pewnych operacji podczas otwierania.
 * Przykładowo mamy zamontowany zamek, który otwiera sie kodem, tak więc w metodzie open
 * jesteśmy w stanie sprawdzić, czy podany kod jest prawidłowy.
 * Możemy też chcieć gdzieś odłożyć informacje że ktoś otworzył nasze mieszkanie lub próbował otworzyć.
 */

$privateHouse = new PrivateHouse();
$privateHouse->open('123');
//$privateHouse->open('123qwe');


/**
 * Teraz widzimy, że jedyny sposób otwarcia naszego mieszkania jest poprzez metodę "open"
 * Nie ma innej możliwości aby to zrobić.
 *
 * DOBRĄ CECHĄ w programowaniu jest dążenie do tego aby ukrywać to co się znajduje wewnątrz klasy,
 * a później obiektu powstałego na podstawie tej klasy. Jednocześnie udostępniając na zewnątrz
 * zbiór metod za pomocą których można używać obiektów danej klasy.
 *
 * Dokładnie to zrobiliśmy w przykładzie powyżej, nie mamy żadnej publicznej właściwości, przez co nie
 * eksponujemy tego jak nasz obiekt wygląda wewnątrz. Udostępniamy tylko metody dzięki którym nasz
 * obiekt może wchodzić w interakcję z otoczeniem.
 *
 * Jednym z powodów dlaczego tak należy robić jest fakt, że w naszej pracy (prawie) nigdy nie będziemy pracować samodzielnie.
 * Będziemy pracować w zespole realizując projekty przypisane do danego zespołu.
 * Tworząc klasę która ma zapewniać pewną funkcjonalność i która będzie używana przez inne osoby skupiamy się nad tym
 * jak ta klasa ma działać. Powodem jest fakt, że osoba która będzie używać obiektów tej klasy generalnie nie interesuje jej
 * wewnętrzna struktura, tylko to jakie zapewnia możliwości, czyli jakie metody udostępnia publicznie i co za ich pomocą można zrobić.
 */
