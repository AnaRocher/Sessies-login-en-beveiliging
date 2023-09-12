CREATE TABLE users (
    id INT NOT NULL AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE gastenboek (
    id INT NOT NULL AUTO_INCREMENT,
    user_id INT NOT NULL,
    score INT NOT NULL,
    beschrijving TEXT NOT NULL,
    hotel_id INT NOT NULL,
    aangemaakt_op TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
    PRIMARY KEY (id)
);  

CREATE TABLE hotels (
    id INT NOT NULL AUTO_INCREMENT,
    naam VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO hotels (naam) VALUES 
('Het Centrum'), ('In De Boogstraat'), ("Aan't Station");
