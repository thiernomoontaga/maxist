START TRANSACTION;
INSERT INTO typeUtilisateur(nom) VALUES('client');
SET @typeUserId = LAST_INSERT_ID();

INSERT INTO utilisateur(nom,prenom,numeroTelephone,login,password,NumeroIdentite,photoRecto,photoVerso,idTypeUtilisateur) VALUES(
  'Segnane', 'Thierno', '777732762', 'thiernosegnane316@gmail.com', 'passer', '349458284302443', 'photoRecto.jpeg', 'photoVerso.jpeg', @typeUserId
);
SET @userId = LAST_INSERT_ID();

INSERT INTO compte(date_creation,solde,numeroCompte,type,idUtilisateur) VALUES(
  CURRENT_DATE, '45837644', '777732762', 'principal', @userId
);
SET @compteId = LAST_INSERT_ID();

INSERT INTO transaction(montant,date,type,idCompte) VALUES(
  '3467437', CURRENT_DATE, 'depot', @compteId
);
COMMIT;

START TRANSACTION;
INSERT INTO compte(date_creation,solde,numeroCompte,type,idUtilisateur) VALUES(
  CURRENT_DATE, '0', '773773324', 'secondaire', 1
);
INSERT INTO compte(date_creation,solde,numeroCompte,type,idUtilisateur) VALUES(
  CURRENT_DATE, '0', '778997332', 'secondaire', 1
);
COMMIT;