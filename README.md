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

# :muscle: Att göra :muscle:

Lite förslag på saker man kan lägga till baserat på senaste versionen av main.

## Navigering

- Lägg till en länk till Författare.

## Hem

### Sökfält

Här på startsidan kan vi ha ett sökfält på böcker. Gör listan klickbar så när man klickar på en bok så får man upp alla recensioner på den boken.

## Bokrejsare

Utöka tabellen så den har user_name, first_name och last_name för användare. Se till att denna data visas snyggt på sidan.

### Klickbar lista med användare

Istället för att bara lista namnen vill vi att varje namn är klickbart och visar en info-box för den valda användaren samt alla recensioner den personen skrivit.

## Böcker

### Klickbar lista med böcker

Istället för att bara lista böckerna vill vi att varje bok är klickbar och då visas en info-box för den valda boken samt alla recensioner om den boken.

## Recensioner

- Lista recensioner på dess sida
- Klickbar lista som visar upp all info om vald recension
- Formulär för att lägga till recensioner (med dropdown för att välja user och book)

## Författare

- Lista författare på dess sida
- Klickbar lista som visar upp all info om vald författare (inkl vilka böcker hen skrivit)
- Formulär för att lägga till författare
