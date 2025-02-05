# ut-tasks
Recruitment task 2

Kolejność odpalania:
schema
add_test_data
a potem juz dowolnie :)
query_autors
query_top5_view

Chciałbym zwrócić uwagę, że w zadaniu trzymałem się ściśle wymagań, które mówiły o trzech tabelach, ale w rzeczywistości dla pełnej elastyczności i poprawności modelu bazy danych, w przypadku, gdy jedna książka może mieć wielu autorów (a autor może napisać wiele książek), bardziej odpowiednie będzie użycie tabeli pośredniczącej, tzw. tabeli asocjacyjnej. Taka tabela zapewnia, że relacja między książkami a autorami będzie poprawnie odwzorowana, umożliwiając wielu autorom przypisanie do jednej książki. Dopisałem tą wersje zapytań z końcówką ver2 czyli w takim przypadku odpalamy jeszcze:

query_book_authors_ver2
add_test_data_ver2
query_top5_view_ver2

W takim wypadku oczywiście nie potrzebujemy w book author_id chyba że traktujemy to pole jako oznaczenie głównego autora książki.