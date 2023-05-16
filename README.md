# &#128218; bokrejset-php &#128218;

A simple OOP demo with PHP and MySQL for students. All comments and readme in swedish.

## Beskrivning av BokRejset

Vi vill bygga en webbtjänst där användare kan logga böcker de läst, antal sidor och recension för boken. En användares totala antal lästa sidor ska visas i en high-score-tabell. Syftet är att uppmuntra personer att läsa böcker.

Utöver denna grundidé kan man bygga flera ytterligare funktioner beroende på målgrupp och en mer utförlig beskrivning av syftet med tjänsten. Utmaningen är att bygga vidare på databasen, utöka koden med fler klasser och skala upp systemet men samtidigt arbeta smart, snyggt och OOP.

## En första version av databasen

Vi behöver lagra användare och vilka böcker de läst dvs tre tabeller. Vi börjar där: User, Book, Review.

### Users

| id  | name        |
| --- | ----------- |
| int | varchar(32) |

### Books

| id  | title       | year |
| --- | ----------- | ---- |
| int | varchar(32) | int  |

### Reviews

| id  | title       | review | user_id | book_id |
| --- | ----------- | ------ | ------- | ------- |
| int | varchar(32) | text   | int     | int     |

Du får så klart lägga till fler kolumner för dina tabeller men detta kan vara en start.

## En andra version av databasen

Nu lägger vi till författare.

### Books

| id  | title       | year | author_id |
| --- | ----------- | ---- | --------- |
| int | varchar(32) | int  | int       |

### Authors

| id  | first_name  | last_name   |
| --- | ----------- | ----------- |
| int | varchar(32) | varchar(32) |

Tips: skapa en första författare. Lägg till den på alla böcker. Sen ändra author_id till att vara en foreign key med ALTER TABLE.
