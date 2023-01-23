CREATE DATABASE IF NOT EXISTS appDB;
CREATE USER IF NOT EXISTS 'user'@'%' IDENTIFIED BY 'password';
GRANT SELECT,UPDATE,INSERT,DELETE ON appDB.* TO 'user'@'%';
FLUSH PRIVILEGES;

USE appDB;

CREATE TABLE IF NOT EXISTS logine(
	id_login INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
  	person_name VARCHAR(50) NOT NULL,
  	pasword VARCHAR(50) NOT NULL
);

INSERT INTO logine (person_name, pasword) VALUES ('admin', 'admin');
INSERT INTO logine (person_name, pasword) VALUES ('user1', 'admin');
INSERT INTO logine (person_name, pasword) VALUES ('user2', 'admin');

CREATE TABLE IF NOT EXISTS menu (
	id_list INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
  	name_event VARCHAR(200) NOT NULL,
  	datey DATE NOT NULL
);

INSERT INTO menu (name_event, datey) VALUES ('Christmas Tree cycle', '2023-01-23');
INSERT INTO menu (name_event, datey) VALUES ('EcoBazar', '2023-02-08');
INSERT INTO menu (name_event, datey) VALUES ('Planting trees in the forest', '2023-02-19');
INSERT INTO menu (name_event, datey) VALUES ('Master class "Create your own mailbox"', '2023-04-13');

ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'password'; 