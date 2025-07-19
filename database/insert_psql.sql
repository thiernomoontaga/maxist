BEGIN;
INSERT INTO typeUtilisateur(nom) VALUES('client');
INSERT INTO utilisateur(nom,prenom,numeroTelephone,login,password,NumeroIdentite,photoRecto,photoVerso,idTypeUtilisateur) VALUES(
  'Segnane','Thierno','777732762','thiernosegnane316@gmail.com','passer','349458284302443','photoRecto.jpeg','photoVerso.jpeg', (SELECT id from typeUtilisateur where nom = 'client')
) 
RETURNING id;

INSERT INTO compte(date_creation,solde,numeroCompte,type,idUtilisateur) VALUES(
  CURRENT_DATE,'45837644','777732762','principal',currval('utilisateur_id_seq')
);

INSERT INTO transaction(montant,date,type,idCompte) values(
  '3467437',CURRENT_DATE,'depot',currval('compte_id_seq')
);

commit;


BEGIN;
INSERT INTO compte(date_creation,solde,numeroCompte,type,idUtilisateur) VALUES(
  CURRENT_DATE,'0','773773324','secondaire',1
);
INSERT INTO compte(date_creation,solde,numeroCompte,type,idUtilisateur) VALUES(
  CURRENT_DATE,'0','778997332','secondaire',1
);

COMMIT;
