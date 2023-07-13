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

insert into Objective(objective) VALUES ("Augmenter");
insert into Objective(objective) VALUES ("diminuer");


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


CREATE TABLE Aliment(
	id INT  PRIMARY KEY AUTO_INCREMENT,
	id_Regime int REFERENCES Regime(id),
	id_picture int REFERENCES Picture (id),
	description VARCHAR(255)
);




CREATE TABLE Regime_Activity(
	id_Regime int REFERENCES Regime(id),
	id_Activity int REFERENCES Activity (id)
);

INSERT INTO Regime (regime,id_Objective,weight,price) VALUES ('regime proteine',1,5,10000);
INSERT INTO Regime (regime,id_Objective,weight,price) VALUES ('regime mampitombo',1,3,1,8000);

INSERT INTO Regime_Activity (id_Regime,id_Activity) VALUES (1,1);
INSERT INTO Regime_Activity (id_Regime,id_Activity) VALUES (1,2);
INSERT INTO Regime_Activity (id_Regime,id_Activity) VALUES (2,2);
INSERT INTO Regime_Activity (id_Regime,id_Activity) VALUES (1,3);


INSERT INTO Regime_Activity (id_Regime,id_Activity) VALUES (3,1);
INSERT INTO Regime_Activity (id_Regime,id_Activity) VALUES (5,2);


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
	sold DOUBLE DEFAULT 0
);

CREATE TABLE Historical(
	date_transaction date,
	id_User INT REFERENCES User(id),
	description VARCHAR(50),
	sold DOUBLE,
	status_sold int
);


create table Detail_Regime(
	id_Regime int REFERENCES Regime(id),
	viande double ,
	poisson double ,
	volaille double
);


INSERT into Detail_Regime (id_Regime,viande,poisson,volaille) values (1,60,70,40);
INSERT into Detail_Regime (id_Regime,viande,poisson,volaille) values (2,30,60,40);

INSERT into Detail_Regime (id_Regime,viande,poisson,volaille) values (3,0,0,0);
INSERT into Detail_Regime (id_Regime,viande,poisson,volaille) values (5,0,0,0);
INSERT into Detail_Regime (id_Regime,viande,poisson,volaille) values (4,10,70,40);
INSERT into Detail_Regime (id_Regime,viande,poisson,volaille) values (6,30,60,20);

INSERT INTO User VALUES( null ,'tes',now(),'h@gmail.com','123',1);

INSERT INTO User (user,birthday,gender,address,contact,email,key_password,user_status) VALUES('admin',now(),1,'malaza','1234','admin@gmail.com','admin',11);

create table Code(
	code VARCHAR(4) PRIMARY key,
	price double,
	status int 
);

create table Validation_Code(
	code int REFERENCES Code(code),
	id_User int REFERENCES User(id)
);


INSERT into Code (code,price,status) values ('2072',50000,1);
INSERT into Code (code,price,status) values ('1234',70000,1);
INSERT into Code (code,price,status) values ('1931',20000,1);
INSERT into Code (code,price,status) values ('2003',40000,1);
INSERT into Code (code,price,status) values ('2010',15000,1);
INSERT into Code (code,price,status) values ('3045',80000,1);
INSERT into Code (code,price,status) values ('4578',100000,1);
INSERT into Code (code,price,status) values ('6142',35000,1);
INSERT into Code (code,price,status) values ('6521',60000,1);
INSERT into Code (code,price,status) values ('1111',5000,1);
INSERT into Code (code,price,status) values ('2222',7000,1);
INSERT into Code (code,price,status) values ('3333',12000,1);
INSERT into Code (code,price,status) values ('4444',3000,1);
INSERT into Code (code,price,status) values ('5555',9000,1);
INSERT into Code (code,price,status) values ('6666',16000,1);
