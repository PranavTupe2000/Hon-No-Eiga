DELIMITER //

CREATE PROCEDURE allMoviesTA(
	IN id VARCHAR(10)
)
BEGIN
    SELECT m.movie_id,m.name,m.genre,m.duration,m.dimension,m.image,SUM(p.total_cost) AS earning
    FROM movies m
    JOIN shows s
    ON m.movie_id=s.movie_id
    JOIN purchases p
    ON s.show_id=p.show_id
    WHERE s.theatre_id = id
    GROUP BY m.movie_id;
END //

DELIMITER ;

DELIMITER //

CREATE PROCEDURE monthETA(
	IN id VARCHAR(10)
)
BEGIN
    SELECT SUM(p.total_cost) AS earning
    FROM shows s
    JOIN purchases p
    ON s.show_id=p.show_id
    WHERE s.theatre_id = id AND MONTH(s.show_date)=MONTH(NOW());
END //

DELIMITER ;

DELIMITER //

CREATE PROCEDURE yearETA(
	IN id VARCHAR(10)
)
BEGIN
    SELECT SUM(p.total_cost) AS earning
    FROM  shows s
    JOIN purchases p
    ON s.show_id=p.show_id
    WHERE s.theatre_id = id AND YEAR(s.show_date)=YEAR(NOW());
END //

DELIMITER ;

delimiter /
CREATE PROCEDURE findShowsWithMovie(t_id varchar(10),sn int,sdate DATE)
BEGIN
    SELECT m.name,m.image,s.show_id,s.movie_id,s.dimension,s.show_time,s.language,s.cost,s.visible
    FROM shows s
    JOIN movies m
    ON m.movie_id=s.movie_id
    WHERE s.theatre_id=t_id AND s.screen_no=sn AND s.show_date=sdate;
END;
/
delimiter ;

DELIMITER //

CREATE PROCEDURE makeShowVisible(
	IN id VARCHAR(10)
)
BEGIN
    UPDATE shows SET visible=true 
    WHERE show_id=id;

END //

DELIMITER ;

DELIMITER //

CREATE PROCEDURE makeShowInvisible(
	IN id VARCHAR(10)
)
BEGIN
    UPDATE shows SET visible=false 
    WHERE show_id=id;

END //

DELIMITER ;