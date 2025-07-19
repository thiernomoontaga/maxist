CREATE TABLE typeUtilisateur(
  id INT AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(30)
);

CREATE TABLE utilisateur(
  id INT AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(30),
  prenom VARCHAR(30),
  numeroTelephone VARCHAR(30) NOT NULL,
  login VARCHAR(30) NOT NULL,
  password VARCHAR(30) NOT NULL,
  numeroIdentite VARCHAR(50) NOT NULL,
  photorecto VARCHAR(40) NOT NULL,
  photoverso VARCHAR(40) NOT NULL,
  idTypeUtilisateur INT,
  FOREIGN KEY (idTypeUtilisateur) REFERENCES typeUtilisateur(id)
);

CREATE TABLE compte(
  id INT AUTO_INCREMENT PRIMARY KEY,
  date_creation DATE NOT NULL,
  solde FLOAT NULL,
  numeroCompte INT NOT NULL,
  type ENUM('principal','secondaire') NOT NULL,
  idUtilisateur INT,
  FOREIGN KEY (idUtilisateur) REFERENCES utilisateur(id)
);

CREATE TABLE transaction(
  id INT AUTO_INCREMENT PRIMARY KEY,
  montant FLOAT NOT NULL,
  date DATE,
  type ENUM('paiement','depot','retrait') NOT NULL,
  idCompte INT,
  FOREIGN KEY (idCompte) REFERENCES compte(id)
);