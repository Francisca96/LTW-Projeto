pragma foreign_keys = ON;

DROP TABLE IF EXISTS user;
DROP TABLE IF EXISTS client;
DROP TABLE IF EXISTS owner;
DROP TABLE IF EXISTS ownerRestaurant;
DROP TABLE IF EXISTS review;
DROP TABLE IF EXISTS restaurant;
DROP TABLE IF EXISTS restaurantImage;

CREATE TABLE user (
 	username TEXT PRIMARY KEY UNIQUE,
  	password TEXT,
  	name TEXT,
  	email TEXT,
  	gender TEXT,
  	user_type TEXT
);

CREATE TABLE client (
	username TEXT PRIMARY KEY REFERENCES user(username)
);

CREATE TABLE owner (
	username TEXT PRIMARY KEY REFERENCES user(username)
);


CREATE TABLE review (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	id_restaurant INTEGER REFERENCES restaurant(id),
	username TEXT REFERENCES client(username),
	text TEXT,
	value INTEGER
);

CREATE TABLE ownerRestaurant(
	ownerName TEXT REFERENCES user(username),
	id_restaurant INTEGER REFERENCES restaurant(id),
	PRIMARY KEY(ownerName, id_restaurant)
);

CREATE TABLE restaurant (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	name TEXT,
	location TEXT,
  	type TEXT,
  	description TEXT,
	phone TEXT,
	price TEXT
);

CREATE TABLE restaurantImage (
	id INTEGER PRIMARY KEY AUTOINCREMENT ,
	id_restaurant INTEGER REFERENCES restaurant(id),
	file_path TEXT
);
