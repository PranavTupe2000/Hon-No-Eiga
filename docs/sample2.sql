DROP DATABASE IF EXISTS hon_no_eiga;

CREATE DATABASE hon_no_eiga;
USE hon_no_eiga;

-- CREATING BASIC TABLES --

CREATE TABLE admins(
    admin_id INT AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    password VARCHAR(50) NOT NULL,
    PRIMARY KEY(admin_id)
);

CREATE TABLE users(
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(30) NOT NULL,
    PRIMARY KEY(email)
);

CREATE TABLE theatres(
    theatre_id VARCHAR(10) NOT NULL,
    name VARCHAR(100) NOT NULL,
    location VARCHAR(100),
    total_screens INT NOT NULL,
    PRIMARY KEY(theatre_id)
);

CREATE TABLE theatres_admins(
    theatre_id VARCHAR(10) NOT NULL,
    tadmin_id VARCHAR(10),
    name VARCHAR(30) NOT NULL,
    password VARCHAR(50) NOT NULL,
    PRIMARY KEY(tadmin_id),
    FOREIGN KEY (theatre_id) REFERENCES theatres(theatre_id)
);

CREATE TABLE distributers(
    distributer_id VARCHAR(10) NOT NULL,
    name VARCHAR(100) NOT NULL,
    password VARCHAR(50) NOT NULL,
    PRIMARY KEY(distributer_id)
);

CREATE TABLE movies(
    movie_id VARCHAR(10) NOT NULL,
    distributer_id VARCHAR(10) ,
    name VARCHAR(30) NOT NULL,
    genre VARCHAR(50),
    duration VARCHAR(20),
    dimension VARCHAR(5) NOT NULL,
    trailer VARCHAR(100),
    image VARCHAR(30),
    PRIMARY KEY(movie_id),
    FOREIGN KEY (distributer_id) REFERENCES distributers(distributer_id)
);



-- CREATING COMPLEX TABLES --

CREATE TABLE shows(
    show_id INT AUTO_INCREMENT,
    movie_id VARCHAR(10) NOT NULL,
    theatre_id VARCHAR(10) NOT NULL,
    screen_no INT NOT NULL,
    language VARCHAR(30) NOT NULL,
    dimension VARCHAR(5) NOT NULL,
    show_date DATE NOT NULL,
    show_time TIME NOT NULL,
    cost INT NOT NULL,
    visible BOOLEAN NOT NULL,
    PRIMARY KEY(show_id),
    FOREIGN KEY (movie_id) REFERENCES movies(movie_id),
    FOREIGN KEY (theatre_id) REFERENCES theatres(theatre_id)
);

CREATE TABLE purchases(
    purchase_id VARCHAR(40) NOT NULL,
    show_id INT NOT NULL,
    user_email VARCHAR(50) NOT NULL,
    seats VARCHAR(50) NOT NULL,
    total_cost INT NOT NULL,
    PRIMARY KEY(purchase_id),
    FOREIGN KEY (show_id) REFERENCES shows(show_id),
    FOREIGN KEY (user_email) REFERENCES users(email)
);

CREATE VIEW visible_shows
AS 
SELECT 
    show_id,
    movie_id,
    theatre_id,
    screen_no,
    language,
    dimension,
    show_date,
    show_time,
    cost
FROM
    shows
WHERE
	visible=true AND show_date>=DATE(NOW());


-- ADMIN
INSERT INTO admins(name,password) VALUES("root","iamroot");

INSERT INTO distributers VALUES
("DIS","Disney","disneyRocks"),
("LSG","Lionsgate","pencil"),
("ARK","Arka Media","Kattapa");

INSERT INTO movies(movie_id,distributer_id,name,genre,duration,dimension,trailer,image) VALUES
("AVE101","DIS","Avengers Endgame","Action/Sci-Fi","3Hrs 2mins","2D/3D","https://www.youtube.com/embed/TcMBFSGVi1c","posters/AVE101"),
("JWP102","LSG","John Wick","Action/Thriller","1Hrs 42mins","2D","https://www.youtube.com/embed/C0BMx-qxsP4","posters/JWP102"),
("THR103","DIS","Thor Ragnarok","Comedy/Sci-Fi","2Hrs 10mins","3D","https://www.youtube.com/embed/ue80QwXMRHg","posters/THR103"),
("POC104","DIS","Pirates of the Carribean","Action/Adventure","2Hrs 23mins","2D/3D","https://www.youtube.com/embed/-9HT0l9HV4c","posters/POC104"),
("BTC105","ARK","Baahubali 2: The Conclusion","Action/Adventure","3Hrs 17mins","2D","https://www.youtube.com/embed/G62HrubdD6o","posters/BTC105");


INSERT INTO theatres(theatre_id,name,location,total_screens) VALUES
("CPWE01","Cinepolis Westend","https://goo.gl/maps/f6gjM8VMoZv1CJGr6",4),
("PPMC02","PVR Phoenix Market City","https://goo.gl/maps/ADFzpR4ZDMS8X3QB6",3),
("IBGR03","INOX: Bund Garden Road","https://goo.gl/maps/zwfKiYDzBR9Hm31A6",2);


{{range .}}
INSERT INTO shows(movie_id,theatre_id,screen_no,language,dimension,show_date,visible,show_time,cost) VALUES
("AVE101","CPWE01",1,"ENG","3D",{{.}},true,"10:00:00",700),
("JWP102","CPWE01",1,"ENG","2D",{{.}},true,"14:00:00",200),
("THR103","CPWE01",1,"HIN","3D",{{.}},true,"16:00:00",350),
("POC104","CPWE01",1,"ENG","3D",{{.}},true,"19:00:00",250),
("BTC105","CPWE01",1,"HIN","2D",{{.}},true,"22:00:00",400);


INSERT INTO shows(movie_id,theatre_id,screen_no,language,dimension,show_date,visible,show_time,cost) VALUES
("THR103","CPWE01",2,"ENG","3D",{{.}},true,"09:00:00",200),
("BTC105","CPWE01",2,"ENG","2D",{{.}},true,"12:00:00",350),
("THR103","CPWE01",2,"HIN","3D",{{.}},true,"15:00:00",350),
("POC104","CPWE01",2,"ENG","3D",{{.}},true,"19:00:00",300),
("JWP102","CPWE01",2,"HIN","2D",{{.}},true,"22:00:00",250);


INSERT INTO shows(movie_id,theatre_id,screen_no,language,dimension,show_date,visible,show_time,cost) VALUES
("AVE101","CPWE01",3,"ENG","3D",{{.}},true,"09:00:00",650),
("POC104","CPWE01",3,"ENG","3D",{{.}},true,"13:00:00",300),
("AVE101","CPWE01",3,"HIN","3D",{{.}},true,"16:00:00",750),
("JWP102","CPWE01",3,"HIN","2D",{{.}},true,"20:00:00",250),
("BTC105","CPWE01",3,"HIN","2D",{{.}},true,"22:30:00",450);


INSERT INTO shows(movie_id,theatre_id,screen_no,language,dimension,show_date,visible,show_time,cost) VALUES
("AVE101","CPWE01",4,"HIN","3D",{{.}},true,"11:00:00",700),
("JWP102","CPWE01",4,"ENG","2D",{{.}},true,"15:00:00",200),
("THR103","CPWE01",4,"HIN","3D",{{.}},true,"17:00:00",350),
("POC104","CPWE01",4,"ENG","2D",{{.}},true,"20:00:00",250),
("BTC105","CPWE01",4,"HIN","2D",{{.}},true,"23:00:00",400);


INSERT INTO shows(movie_id,theatre_id,screen_no,language,dimension,show_date,visible,show_time,cost) VALUES
("THR103","PPMC02",1,"HIN","3D",{{.}},true,"10:30:00",200),
("BTC105","PPMC02",1,"HIN","2D",{{.}},true,"13:30:00",350),
("THR103","PPMC02",1,"HIN","3D",{{.}},true,"17:30:00",300),
("POC104","PPMC02",1,"HIN","3D",{{.}},true,"20:30:00",250),
("JWP102","PPMC02",1,"ENG","2D",{{.}},true,"23:30:00",300);


INSERT INTO shows(movie_id,theatre_id,screen_no,language,dimension,show_date,visible,show_time,cost) VALUES
("AVE101","PPMC02",2,"ENG","2D",{{.}},true,"08:00:00",650),
("POC104","PPMC02",2,"ENG","2D",{{.}},true,"12:00:00",300),
("AVE101","PPMC02",2,"HIN","3D",{{.}},true,"15:00:00",750),
("JWP102","PPMC02",2,"ENG","2D",{{.}},true,"19:00:00",250),
("BTC105","PPMC02",2,"HIN","2D",{{.}},true,"21:30:00",450);


INSERT INTO shows(movie_id,theatre_id,screen_no,language,dimension,show_date,visible,show_time,cost) VALUES
("AVE101","PPMC02",3,"ENG","2D",{{.}},true,"10:30:00",700),
("JWP102","PPMC02",3,"HIN","2D",{{.}},true,"14:30:00",200),
("THR103","PPMC02",3,"ENG","3D",{{.}},true,"16:30:00",350),
("POC104","PPMC02",3,"ENG","3D",{{.}},true,"19:30:00",250),
("BTC105","PPMC02",3,"HIN","2D",{{.}},true,"22:30:00",400);


INSERT INTO shows(movie_id,theatre_id,screen_no,language,dimension,show_date,visible,show_time,cost) VALUES
("THR103","IBGR03",1,"ENG","3D",{{.}},true,"10:00:00",200),
("BTC105","IBGR03",1,"HIN","2D",{{.}},true,"13:00:00",350),
("THR103","IBGR03",1,"ENG","3D",{{.}},true,"17:00:00",350),
("POC104","IBGR03",1,"ENG","3D",{{.}},true,"20:00:00",300),
("JWP102","IBGR03",1,"ENG","2D",{{.}},true,"23:00:00",250);


INSERT INTO shows(movie_id,theatre_id,screen_no,language,dimension,show_date,visible,show_time,cost) VALUES
("AVE101","IBGR03",2,"ENG","3D",{{.}},true,"08:30:00",650),
("POC104","IBGR03",2,"HIN","3D",{{.}},true,"12:30:00",300),
("AVE101","IBGR03",2,"ENG","3D",{{.}},true,"15:30:00",750),
("JWP102","IBGR03",2,"ENG","2D",{{.}},true,"19:30:00",250),
("BTC105","IBGR03",2,"ENG","2D",{{.}},true,"21:00:00",450);

{{end}}