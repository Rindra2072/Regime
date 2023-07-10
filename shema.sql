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


INSERT INTO Objective VALUE(null,'Augmenter');
INSERT INTO Objective VALUE(null,'Diminuer');



CREATE TABLE Regime(
	id INT  PRIMARY KEY AUTO_INCREMENT,
	regime VARCHAR(50) NOT NULL,
	id_picture REFERENCES Picture (id),
	description VARCHAR(255),
	id_Objective INT REFERENCES Objective (id),
	weight DOUBLE NOT  NULL,
	id_Activity INT REFERENCES Activity(id),
	-- 7 days
	price DOUBLE NOT  NULL
);


CREATE TABLE Regime_User(
	id_User INT REFERENCES User(id),
	id_Regime INT REFERENCES Regime (id),
	objective_weight DOUBLE NOT  NULL,
	duration INT --number of days
);

--Activity
CREATE TABLE Activity(
	id_Activity INT PRIMARY KEY AUTO_INCREMENT,
	name_Activity VARCHAR(50) NOT  NULL,
	description VARCHAR(255)
);


-- User
create Table User(
    id int PRIMARY KEY AUTO_INCREMENT,
    user VARCHAR(50) NOT NULL,
    birthday DATE NOT NULL,
	gender int NOT NULL,
	size DOUBLE ,
	weight DOUBLE ,
	address VARCHAR(50) NOT  NULL,
	contact VARCHAR(50) NOT  NULL,
    email VARCHAR(50) NOT NULL,
    key_password VARCHAR(50) NOT NULL,
    user_status int NOT NULL
    -- 1 if simple user else 11 is Admin
);
-- User not confirmed



INSERT INTO User VALUES( null ,'tes',now(),'h@gmail.com','123',1);
