create database olympiade;
use olympiade;

create user olympiade identified by "olympiade";
grant select, update, delete on olympiade.* to olympiade;

drop table billet if exist;
drop table tarifs if exist;
drop table attraction if exist;
drop table attente if exist;



CREATE TABLE attente(
   id_time INT AUTO_INCREMENT,
   id_attraction INT,
   time_ VARCHAR(50),
   heure DATETIME,
   PRIMARY KEY(id_time)
);

CREATE TABLE tarifs(
   id_tarif INT AUTO_INCREMENT,
   type VARCHAR(50),
   prix INT NOT NULL,
   PRIMARY KEY(id_tarif)
);

CREATE TABLE attraction(
   id INT AUTO_INCREMENT,
   desc_ VARCHAR(144) NOT NULL,
   image VARCHAR(255) NOT NULL,
   taille_min_visiteur INT,
   status VARCHAR(8),
   univers VARCHAR(50),
   PRIMARY KEY(id)
);

CREATE TABLE billet(
   id INT AUTO_INCREMENT,
   date_ DATE,
   email VARCHAR(255) NOT NULL,
   status VARCHAR(20),
   code VARCHAR(255),
   id_tarif INT NOT NULL,
   PRIMARY KEY(id),
   FOREIGN KEY(id_tarif) REFERENCES tarifs(id_tarif)
);

insert into attente (id_attraction,time_,heure) value (1,2,"2026-10-17 8:12:25");
insert into attente (id_attraction,time_,heure) value (2,2,"2026-10-17 8:12:25");
insert into attente (id_attraction,time_,heure) value (3,0,"2026-10-17 8:12:25");
insert into attente (id_attraction,time_,heure) value (4,2,"2026-10-17 8:12:25");

insert into tarifs (type,prix) value (1,12);
insert into tarifs (type,prix) value (2,9);
insert into tarifs (type,prix) value (3,0);

insert into attraction (desc_,image,taille_min_visiteur,status,univers) value ("dragon_flight","/images/dragon_flight",120,"ouvert","fantasy");
insert into attraction (desc_,image,taille_min_visiteur,status,univers) value ("crystal_cave","/images/crystal_cave",150,"ouvert","fantasy");
insert into attraction (desc_,image,taille_min_visiteur,status,univers) value ("knight_tournament","/images/knight_tournament",0,"fermé","medival");
insert into attraction (desc_,image,taille_min_visiteur,status,univers) value ("forgotten_fortress","/images/forgotten_fortress",120,"ouvert","medival");
