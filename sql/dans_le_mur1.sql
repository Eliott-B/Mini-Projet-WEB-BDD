-- CREATION DES TABLES

CREATE TABLE IF NOT EXISTS voitures (
    nom_voiture VARCHAR(40) PRIMARY KEY,
    couleur VARCHAR(40),
    prix INT DEFAULT 0,
    photo VARCHAR(40)
);

CREATE TABLE IF NOT EXISTS options (
    nom_option VARCHAR(40) PRIMARY KEY,
    prix_option INT
);

CREATE TABLE IF NOT EXISTS commandes (
    id INT PRIMARY KEY,
    email VARCHAR(40),
    id_voiture VARCHAR(40),
    FOREIGN KEY (id_voiture) REFERENCES voitures(nom_voiture),
    options VARCHAR(40) DEFAULT NULL,
    FOREIGN KEY (options) REFERENCES options(nom_option),
    etat NVARCHAR(40) DEFAULT "En cours d'analyse"
);


-- VOITURES
INSERT INTO voitures VALUES ("PORSCHE 911 GT3 RS","Rouge",150000,"porsche-911-gt3-rs.png");
INSERT INTO voitures VALUES ("MASERATI GranCabrio MC","Noir",75000,"maserati-grancabrio-mc.png");
INSERT INTO voitures VALUES ("FERRARI 488 Pista","Rouge",283000,"ferrari-488-pista.png");
INSERT INTO voitures VALUES ("LAMBORGHINI Urus","Noir",350000,"lamborghini-urus.png");
INSERT INTO voitures VALUES ("TOYOTA Supra","Noir",350000,"toyota-supra.png");

-- OPTIONS
INSERT INTO options VALUES ("Pack Carbon",1500);
INSERT INTO options VALUES ("Pack Alcantara",975);
INSERT INTO options VALUES ("Jante Noir",350);
INSERT INTO options VALUES ("Ailerons",1340);
INSERT INTO options VALUES ("Echappement",3500);

-- COMMANDES
INSERT INTO commandes VALUES (1,"noreply@alliot.fr","PORSCHE 911 GT3 RS","Pack Carbon","En cours d'analyse");
INSERT INTO commandes VALUES (2,"noreply@alliot.fr","PORSCHE 911 GT3 RS","Pack Carbon","En cours de fabrication");
INSERT INTO commandes VALUES (3,"noreply@alliot.fr","PORSCHE 911 GT3 RS","Pack Carbon","En cours d'expedition");
INSERT INTO commandes VALUES (4,"noreply@alliot.fr","PORSCHE 911 GT3 RS","Pack Carbon","Expedie");
INSERT INTO commandes VALUES (5,"noreply@alliot.fr","PORSCHE 911 GT3 RS","Pack Carbon","Livre");
