<?php

/**
 * INTERFEJS
 *
 * Generalnie - zawiera jedynie deklaracje metod (nie definicje - czyli ich ciało)
 *
 * Interfejs nie może posiadać właściwości (ale może zawierać stałe)
 * Używa tylko publicznych modyfikatorów widoczności
 *
 * KLASA ABSTRAKCYJNA
 *
 * Nie można jej zinstnacjonować, czyli utworzyć z niej obiektu !!!
 * Może deklarować metody (musi je oznaczać jako abstrakcyjne)
 * Może implementować interfejsy :)
 * Może posiadać konstruktor, oraz definicje metod.
 * Może definiować właściwości
 * Używa wszystkie rodzaje modyfikatorów widoczności
 *
 *
 * Interfejs to tak naprawdę publiczny kontrakt, który jest nakładany na klasę go implementującą.
 * Klasa implementująca musi spełnić ten kontrakt, czyli zaimplementować metody z interfejsu
 *
 * W uproszczeniu możemy powiedzieć, że interfejsów używamy gdy chcemy narzucić programistom (również sobie) zbiór metod, które powinny być zaimplementowane w danej klasie.
 *
 * Pierwszą myślą która nam przychodzi kiedy warto by było użyć interfejsu, to dziedziczenie w przypadku, gdy chcemy wymusić aby każde dziecko miało pewien określony zbiór metod.
 *
 * Dla osób trochę bardziej zaawansowanych.
 *
 * Drugą trochę "nie oczywistą" dla osób bardziej początkujących jest sytuacja gdy tworzymy jakiś serwis/bibliotekę i dopuszczamy możliwość stworzenie jej zupełnie nowej implementacji, na przykład w innej technologi.
 * Dobrym przykładem jest np serwis do zapisu danych, możemy dane zapisywać w pliku, bazie danych, pamięci w jakimś zewnętrznym serwisie z którym komunikujemy się na przykład przez http. Każdy taki serwis musi spełniać ten sam "kontrakt" jednak nie muszą one dziedziczyć po wspólnym rodzicu (pamiętamy, kompozycja ponad dziedziczenie)
 * Np. mamy interfejs:
 * Storage
 * i jego implementacje
 * FileStorage
 * MemoryStorage
 * MySqlStorage
 * MongoStorage
 * ...
 *
 * Interfejsy są podstawą kompozycji w myśl zasady kompozycja ponad dziedziczenie.
 * Mają również zastosowanie praktycznie w każdej literce z SOLID'u
 *
 *
 * Klasy abstrakcyjne wychodzą poza interfejs ponieważ dopuszczają implementację samej metody czyli jej definicję.
 * Tak więc jeśli mamy jakiś wspólny zbiór metod/właściwości dla wszystkich dzieci to możemy je wyciągnąć do klasy abstrakcyjnej, a metody które wiemy, że ich definicja czyli ciało metody będzie się różnić w zależności od rodzaju dziecka pozostawiamy do implementacji już w samych dzieciach, czyli klasach dziedziczących po klasie abstrakcyjnej
 *
 * Dobrym pomysłem jest aby klasa abstrakcyjna implementowała interfejs (czyli "kontrakt", który musi spełnić).
 * W samej klasie jak już zostało wspomniane implementujemy część wspólną kontraktu dla wszystkich dzieci, a metody, których implementacja będzie się różnić w zależności od dziecka pozostawiamy już do implementacji w dzieciach
 *
 * Kiedy używać klasy abstrakcyjnej (patrz wyżej)
 */

require_once __DIR__ . '/../../src/one/Contractor.php';
require_once __DIR__ . '/../../src/one/FullTimeEmployee.php';

$contractorEmployee = new Contractor('Robert', 'IT', 100);
$fullTimeEmployee = new FullTimeEmployee('John', 'QA', 10000);

$contractorEmployee->worked(21 * 8);
$contractorSallary = $contractorEmployee->salary();

$fullTimeSallary = $fullTimeEmployee->salary();

var_dump($contractorSallary);
var_dump($fullTimeSallary);