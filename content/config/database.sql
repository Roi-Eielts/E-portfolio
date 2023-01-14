drop database if exists roi_database;
create database if not exists roi_database; 

USE roi_database;

CREATE TABLE werk (
id int primary key AUTO_INCREMENT,
periode text not null,
als_wat text not null,
taak text not null
);

INSERT INTO `roi_database`.`werk` (`periode`, `als_wat`, `taak`) VALUES ('7 december 2020 t/m 13 september 2021', 'Slagerij medewerker', 'Ik vul de slagerij schappen en ik zorg ervoor dat de winkel er verzorgd en uitnodigend uitziet voor klanten. ik help klanten bij het vinden van producten en als iets niet voorhanden is dan bied ik klanten een alternatief. ik doet dit samen in een team.');
INSERT INTO `roi_database`.`werk` (`periode`, `als_wat`, `taak`) VALUES ('13 september 2021 t/m 12 september 2022', 'DKW medewerker', 'Als verkoopmedewerker DKW, maak ik het onze klanten naar de zin. Samen met mijn collega\`s, stel ik de klanten centraal en vervul ik hun wensen. Ik zorg voor voldoende producten, perfecte presentatie en kennis van elk product.');
INSERT INTO `roi_database`.`werk` (`periode`, `als_wat`, `taak`) VALUES ('12 september 2022 t/m heden', 'AGF medewerker', 'Ik ben een specialist op de groente en fruit afdeling, klanten verwachten van mij productkennis en het beste advies. Samen met mijn collega`s zorg ik dat de afdeling goed draait.');
