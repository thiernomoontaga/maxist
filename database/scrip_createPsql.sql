create type statutCompte as enum('principal','secondaire');
create type typeTransaction as enum('paiement','depot','retrait');
create table typeUtilisateur(
  id SERIAL PRIMARY KEY,
  nom VARCHAR(30)
);

create table utilisateur(
  id SERIAL PRIMARY KEY,
  nom VARCHAR(30),
  prenom VARCHAR(30),
  numeroTelephone  VARCHAR(30) NOT NULL,
  login VARCHAR(30) NOT NULL,
  password  VARCHAR(30) NOT NULL,
  numeroIdentite  VARCHAR(50) NOT NULL,
  photorecto  VARCHAR(40) NOT NULL,
  photoverso  VARCHAR(40) NOT NULL,
  idTypeUtilisateur int,
  Foreign Key (idTypeUtilisateur) REFERENCES typeUtilisateur(id)
);

create table compte(
  id SERIAL PRIMARY KEY ,
  date_creation DATE NOT NULL,
  solde FLOAT NULL,
  numeroCompte INTEGER NOT NULL,
  type statutCompte NOT NULL ,
  idUtilisateur int,
  Foreign Key (idUtilisateur) REFERENCES utilisateur(id)
);

create table transaction(
  id SERIAL PRIMARY KEY,
  montant FLOAT NOT NULL,
  date DATE ,
  type typeTransaction NOT NULL ,
  idCompte int ,
  Foreign Key (idCompte) REFERENCES Compte(id)
);
