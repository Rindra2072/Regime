CREATE database regime;
use regime;
CREATE table Picture(
    id int PRIMARY KEY AUTO_INCREMENT,
    pic1 VARCHAR(255) NOT NULL,
    pic2 VARCHAR(255),
    pic3 VARCHAR(255),
    pic4 VARCHAR(255)
);

CREATE TABLE Objective(
	id int PRIMARY KEY AUTO_INCREMENT,
    objective VARCHAR(50) NOT NULL,
	description VARCHAR(255)
);


CREATE TABLE Activity(
	id_Activity INT PRIMARY KEY AUTO_INCREMENT,
	name_Activity VARCHAR(50) NOT  NULL,
	description VARCHAR(255)
);

INSERT Activity (name_Activity) VALUES ('pompe');
INSERT Activity (name_Activity) VALUES ('jogging');
INSERT Activity (name_Activity) VALUES ('marche');


CREATE TABLE Regime(
	id INT  PRIMARY KEY AUTO_INCREMENT,
	regime VARCHAR(50) NOT NULL,
	id_picture int REFERENCES Picture (id),
	description VARCHAR(255),
	id_Objective INT REFERENCES Objective (id),
	weight DOUBLE NOT  NULL,
	price DOUBLE NOT  NULL
);





CREATE TABLE Regime_Activity(
	id_Regime int REFERENCES Regime(id),
	id_Activity int REFERENCES Activity (id)
);

INSERT INTO Regime (regime,id_Objective,weight,price) VALUES ('regime proteine',1,5,1,10000);
INSERT INTO Regime (regime,id_Objective,weight,price) VALUES ('regime mampitombo',1,3,1,8000);

INSERT INTO Regime_Activity (id_Regime,id_Activity) VALUES (1,1);
INSERT INTO Regime_Activity (id_Regime,id_Activity) VALUES (1,2);
INSERT INTO Regime_Activity (id_Regime,id_Activity) VALUES (2,2);
INSERT INTO Regime_Activity (id_Regime,id_Activity) VALUES (1,3);



CREATE TABLE Regime_User(
	id_User INT REFERENCES User(id),
	id_Regime INT REFERENCES Regime (id),
	objective_weight DOUBLE NOT  NULL,
	duration INT
);

INSERT INTO Objective VALUE(null,'Augmenter');
INSERT INTO Objective VALUE(null,'Diminuer');





CREATE TABLE Regime_User(
	id_User INT REFERENCES User(id),
	id_Regime INT REFERENCES Regime (id),
	objective_weight DOUBLE NOT  NULL,
	duration INT,
	price DOUBLE
);



-- User
create Table User(
    id int PRIMARY KEY AUTO_INCREMENT,
    user VARCHAR(50) NOT NULL,
    birthday DATE NOT NULL,
	gender int NOT NULL,
	size DOUBLE DEFAULT NULL ,
	weight DOUBLE DEFAULT NULL ,
	address VARCHAR(50) NOT  NULL,
	contact VARCHAR(50) NOT  NULL,
    email VARCHAR(50) NOT NULL,
    key_password VARCHAR(50) NOT NULL,
    user_status int NOT NULL,
	sold DOUBLE
);

CREATE TABLE Historical(
	date_transaction date,
	id_User INT REFERENCES User(id),
	description VARCHAR(50),
	sold DOUBLE,
	status_sold int
);



INSERT INTO User VALUES( null ,'tes',now(),'h@gmail.com','123',1);
