# ut-tasks
Recruitment tasks

Zadanie 1. - rozwiązanie na branchu virtual zoo
Zaprojektuj system klas wirtualnego ZOO, który spełnia następujące wymagania:
• Każde zwierze w ZOO ma swoje imię. Kiedy użyjemy obiektu zwierzęcia jako ciąg znaków,
powinien on zwrócić gatunek oraz jego imię, np:
$dog = new Dog(/* ... */);
//...
echo $dog;
Powinno przykładowo wypisać:
Pies Duke
• Zwierzęta powinny móc być umieszczone w ZOO (dla uproszczenia zakładamy, że
zwierzęta nie zjedzą się nawzajem i nie muszą przebywać w różnych boksach).
• Zwierzęta dzielą się na mięsożerne, roślinożerne, wszystkożerne. Dlatego powinny one
przyjmować różne typy posiłków. Zwierzęta mięsożerne powinny przyjmować posiłki
mięsne, zwierzęta roślinożerne posiłki roślinne, a zwierzęta wszystkożerne powinny
przyjmować oba typy posiłków.
• Niektóre zwierzęta posiadają futro, które należy czesać by dobrze się prezentowały. Klasy
zwierząt posiadających futro powinny zawierać metodę pozwalającą na ich czesanie.
• System klas powinien obejmować następujące gatunki: tygrys, słoń, nosorożec, lis, irbis
śnieżny, królik.
Ocenie podlega sposób podejścia do wykonania zadania, przejrzystość oraz czytelność kodu,
możliwość ewentualnej rozbudowy.


Zadanie 2. - rozwiązanie na branchu library
Zaprojektuj schemat bazy danych dla PostgreSQL 14, który będzie przechowywał autorów
książek, książki i recenzje, spełniający następujące wymagania:
• Tabela autorów powinna zawierać pola imię i nazwisko,
• Tabela książek powinna zawierać tytuł, rok publikacji oraz numer ISBN,
• Tabela recenzji powinna zawierać ocenę w skali 1-10 oraz treść.
1. Zapisz zapytanie SQL tworzące schemat.
2. Zapisz zapytanie zwracające imiona i nazwiska autorów, wraz z liczbą napisanych przez
nich książek.
3. Zapisz zapytanie tworzące perspektywę (widok) zawierający 5-ciu autorów, których średnia
ocen wszystkich książek jest najwyższa.
