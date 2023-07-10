CREATE database regime;
use regime;
CREATE table Picture(
    id int PRIMARY KEY AUTO_INCREMENT,
    pic1 VARCHAR(255) NOT NULL,
    pic2 VARCHAR(255) ,
    pic3 VARCHAR(255) ,
    pic4 VARCHAR(255)
);
-- User
create Table User(
    id int PRIMARY KEY AUTO_INCREMENT,
    user VARCHAR(50) NOT NULL,
    birthday DATE NOT NULL,
    email VARCHAR(50) NOT NULL,
    key_password VARCHAR(50) NOT NULL,
    user_status int NOT NULL
    -- 1 if simple user else 11 is Admin
);
-- User not confirmed

create Table User_not_confirmed(
    id int PRIMARY KEY AUTO_INCREMENT,
    user VARCHAR(50) NOT NULL,
    birthday DATE NOT NULL,
    email VARCHAR(50) NOT NULL,
    key_password VARCHAR(50) NOT NULL,
    user_status int NOT NULL DEFAULT 1
);

INSERT INTO User VALUES( null ,'tes',now(),'h@gmail.com','123',1);
