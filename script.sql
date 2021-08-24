drop database supermarche;
create database supermarche;
use supermarche;

create table categorie(
	id int not null auto_increment primary key,
	nom varchar(100)
)ENGINE=InnoDB;

create table caisse(
	id int not null auto_increment primary key,
	nom varchar(100)
)ENGINE=InnoDB;

create table utilisateur(
	id int not null auto_increment primary key,
	nom varchar(100),
	email varchar(200),
	mdp varchar(200)
)ENGINE=InnoDB;

create table produit(
	id int not null auto_increment primary key,
	designation varchar(100),
	prix int,
	idCate int,
	foreign key (idCate) references categorie(id)
)ENGINE=InnoDB;

create table achat(
	id int not null auto_increment primary key,
	dateAchat date,
	idCaisse int,
	foreign key (idCaisse) references caisse(id)
)ENGINE=InnoDB;

create table achatProduit(
	id int not null auto_increment primary key,
	idAchat int,
	idProd int,
	qte int,
	foreign key (idAchat) references achat(id)
)ENGINE=InnoDB;

create table vente(
	id int not null auto_increment primary key,
	dateVente date,
	idCaisse int,
	idAchat int,
	foreign key (idCaisse) references caisse(id),
	foreign key (idAchat) references achat(id)
)ENGINE=InnoDB;

create table venteProduit(
	id int not null auto_increment primary key,
	idVente int,
	idProd int,
	qte int,
	foreign key (idVente) references vente(id),
	foreign key (idProd) references produit(id)
)ENGINE=InnoDB;

create table image(
	id int not null auto_increment primary key,
	idProd int,
	nom varchar(100),
	foreign key (idProd) references produit(id)
)ENGINE=InnoDB;


insert into categorie values(null,'nourriture'),
(null,'fourniture'),
(null,'accessoire');

insert into produit values(null,'tomate',2000,1),
(null,'haricot vert',1500,1),
(null,'mortadelle',4000,1),
(null,'pain',1000,1),
(null,'pomme',5000,1);

insert into produit values(null,'stylo',900,2),
(null,'cahier',10000,2),
(null,'gomme',1000,2),
(null,'classeur',20000,2),
(null,'bloc note',4000,2);


insert into produit values(null,'ceinture',15000,3),
(null,'collier',8000,3),
(null,'monture',12000,3),
(null,'souris',14000,3),
(null,'cable',6000,3);


insert into caisse values(null,'caisse 1'),(null,'caisse 2'),(null,'caisse 3');

insert into utilisateur values(null,'mendrika','mendrika@gmail.com','123456');
insert into utilisateur values(null,'sarobidy','sarobidy@gmail.com','123456');
