DELIMITER //

CREATE PROCEDURE purchaseHistory(
	IN id VARCHAR(50)
)
BEGIN
	SELECT p.purchase_id,p.total_cost,p.seats,s.show_date,s.language,s.dimension,s.show_time,s.screen_no,t.name as tname,m.name
    FROM purchases p 
    JOIN shows s
    ON p.show_id = s.show_id
    JOIN theatres t
    on s.theatre_id = t.theatre_id
    JOIN movies m
    on s.movie_id = m.movie_id
    WHERE p.user_email = id;
END //

DELIMITER ;


DELIMITER //

CREATE PROCEDURE checkTicket(
	IN u_id VARCHAR(50),
    IN p_id VARCHAR(40)
)
BEGIN
	SELECT p.purchase_id,p.total_cost,p.seats,s.show_date,s.language,s.dimension,s.show_time,s.screen_no,t.name as tname,m.name,m.image
    FROM purchases p 
    JOIN shows s
    ON p.show_id = s.show_id
    JOIN theatres t
    on s.theatre_id = t.theatre_id
    JOIN movies m
    on s.movie_id = m.movie_id
    WHERE p.user_email = u_id AND p.purchase_id = p_id ;
END //

DELIMITER ;


DELIMITER //

CREATE PROCEDURE timing(
	IN m_id VARCHAR(10),
    IN m_l VARCHAR(30),
    IN m_d VARCHAR(5)
)
BEGIN
	SELECT s.show_id,s.show_date,s.show_time,t.name as tname,t.location AS loc
    FROM  shows s
    JOIN theatres t
    on s.theatre_id = t.theatre_id
    JOIN movies m
    on s.movie_id = m.movie_id
    WHERE s.movie_id=m_id 
          AND ( show_DATE!=DATE(NOW()) OR show_time>=TIME(NOW()))
          AND s.language= m_l AND s.dimension = m_d 
          AND s.visible=true AND s.show_date>=DATE(NOW());
END //

DELIMITER ;


delimiter /
create procedure newTheatreAdmin(t_id varchar(10),tad_id varchar(10),NAME varchar(30),Passwd varchar(50))
begin
insert into theatres_admins(theatre_id,tadmin_id,name,password)values(t_id,tad_id,NAME,Passwd);
end;
/
delimiter ;




delimiter /
create procedure findtheatreAdmin(tadid varchar(10))
begin
select * from theatres_admins where tadmin_id=tadid;
end;
/
delimiter ;




delimiter /
create procedure updateTheatreAdmin(old_tadmin_id varchar(10),new_tadmin_id varchar(10),new_name varchar(30),new_password varchar(50))
begin
update theatres_admins set  tadmin_id=new_tadmin_id,name=new_name,password=new_password where tadmin_id=old_tadmin_id;
end;
/
delimiter ;




delimiter / 
create procedure deleteTheatreAdmin(tad_id varchar(10))
begin
delete from theatres_admins where tadmin_id=tad_id;
end;
/
delimiter ;





delimiter /
create procedure newDistibuter(dis_id varchar(10),NAME varchar(100),passwd varchar(50))
begin
insert into distributers(distributer_id,name,password)values(dis_id,NAME,passwd);
end;
/
delimiter ;




delimiter /
create procedure findDistibuter(dis_id varchar(10))
begin
select * from distributers where distributer_id=dis_id;
end;
/
delimiter ;




delimiter /
create procedure updateDistibuter(old_dis_id varchar(10),new_dis_id varchar(10),new_name varchar(100),new_password varchar(50))
begin
update distributers set  distributer_id=new_dis_id,name=new_name,password=new_password where distributer_id=old_dis_id;
end;
/
delimiter ;




delimiter / 
create procedure deleteDistibuter(dis_id varchar(10))
begin
delete from distributers where distributer_id=dis_id;
end;
/
delimiter ;



delimiter /
create procedure newtheatre(t_id varchar(10),NAME varchar(100),locat varchar(100),ts int)
begin
insert into theatres(theatre_id,name,location,total_screens)values(t_id,NAME,locat,ts);
end;
/
delimiter ;




delimiter /
create procedure findtheatre(t_id varchar(10))
begin
select * from theatres where theatre_id=t_id;
end;
/
delimiter ;




delimiter /
create procedure updatetheatre(old_t_id varchar(10),new_t_id varchar(10),new_name varchar(30),new_l varchar(50),new_ts int)
begin
update theatres set  theatre_id=new_t_id,name=new_name,location=new_l,total_screens=new_ts where theatre_id=old_t_id;
end;
/
delimiter ;




delimiter / 
create procedure deletetheatre(t_id varchar(10))
begin
delete from theatres where theatre_id=t_id;
end;
/
delimiter ;



delimiter /
create procedure newmovie(m_id varchar(10),dis_id varchar(10),NAME varchar(30),gen varchar(50),dur varchar(20),dim varchar(5),trail varchar(100),img varchar(30))
begin
insert into movies(movie_id,distributer_id,name,genre,duration,dimension,trailer,image)values(m_id,dis_id,NAME,gen,dur,dim,trail,img);
end;
/
delimiter ;




delimiter /
create procedure findmovie(m_id varchar(10))
begin
select * from movies where movie_id=m_id;
end;
/
delimiter ;



delimiter /
create procedure updatemovie(old_m_id varchar(10),new_m_id varchar(10),new_dis_id varchar(10),new_NAME varchar(30),new_gen varchar(50),new_dur varchar(20),new_dim varchar(5),new_trail varchar(100),new_img varchar(30))
begin
update movies set movie_id=new_m_id,distributer_id=new_dis_id,name=new_NAME,genre=new_gen,duration=new_dur,dimension=new_dim,trailer=new_trail,image=new_img where movie_id=old_m_id;
end;
/
delimiter ;



delimiter /
create procedure deletemovie(m_id varchar(10))
begin
delete from movies where movie_id=m_id;
end;
/
delimiter ;


delimiter /
create procedure newshow(m_id varchar(10),t_id varchar(10),sn int,lang varchar(30),dim varchar(5),sdate DATE,stime TIME,cst int,visi BOOLEAN)
begin
insert into shows(movie_id,theatre_id,screen_no,language,dimension,show_date,show_time,cost,visible)values(m_id,t_id,sn,lang,dim,sdate,stime,cst,visi);
end;
/
delimiter ;


delimiter /
create procedure findShows(t_id varchar(10),sn int,sdate DATE)
begin
select * from shows where theatre_id=t_id AND screen_no=sn AND show_date=sdate;
end;
/
delimiter ;



delimiter /
create procedure findShow(m_id varchar(10),t_id varchar(10),sn int,sdate DATE,stime TIME)
begin
select * from shows where movie_id=m_id AND theatre_id=t_id AND screen_no=sn AND show_date=sdate AND show_time=stime;
end;
/
delimiter ;

delimiter /
create procedure updateshow(old_m_id varchar(10),m_id varchar(10),t_id varchar(10),sn int,lang varchar(30),dim varchar(5),sdate DATE,stime TIME,cst int)
begin
update shows set movie_id=m_id,theatre_id=t_id,screen_no=sn,language=lang,dimension=dim,show_date=sdate,show_time=stime,cost=cst where show_id=old_m_id;
end;
/
delimiter ;


delimiter /
create procedure deleteShow(m_id varchar(10),t_id varchar(10),sn int,sdate DATE,stime TIME)
begin
delete from shows where movie_id=m_id AND theatre_id=t_id AND screen_no=sn AND show_date=sdate AND show_time=stime;
end;
/
delimiter ;



