CREATE TABLE users (
	id int(11) NOT NULL AUTO_INCREMENT,
	email varchar(128) NOT NULL UNIQUE,
	username varchar(128) NOT NULL UNIQUE,
	name varchar(128),
	surname varchar(128),
	password varchar(64) NOT NULL,
	avatar varchar(128),
	PRIMARY KEY(id)
);