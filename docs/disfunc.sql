DELIMITER //

CREATE PROCEDURE allMovies(
	IN id VARCHAR(10)
)
BEGIN
    SELECT m.movie_id,m.name,m.genre,m.duration,m.dimension,m.image,SUM(p.total_cost) AS earning
    FROM movies m
    JOIN shows s
    ON m.movie_id=s.movie_id
    JOIN purchases p
    ON s.show_id=p.show_id
    WHERE m.distributer_id = id
    GROUP BY m.movie_id;
END //

DELIMITER ;

DELIMITER //

CREATE PROCEDURE monthE(
	IN id VARCHAR(10)
)
BEGIN
    SELECT SUM(p.total_cost) AS earning
    FROM movies m
    JOIN shows s
    ON m.movie_id=s.movie_id
    JOIN purchases p
    ON s.show_id=p.show_id
    WHERE m.distributer_id = id AND MONTH(s.show_date)=MONTH(NOW());
END //

DELIMITER ;

DELIMITER //

CREATE PROCEDURE yearE(
	IN id VARCHAR(10)
)
BEGIN
    SELECT SUM(p.total_cost) AS earning
    FROM movies m
    JOIN shows s
    ON m.movie_id=s.movie_id
    JOIN purchases p
    ON s.show_id=p.show_id
    WHERE m.distributer_id = id AND YEAR(s.show_date)=YEAR(NOW());
END //

DELIMITER ;