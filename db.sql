

CREATE database music_application;
use music_application;

CREATE TABLE login_details(
    id int not null AUTO_INCREMENT,
    user_name varchar(255),
    email varchar(255),
    password varchar (255),
    is_admin int  not null,
    is_premium_user int  not null,
    created_at timestamp,
    updated_at timestamp,
    PRIMARY KEY(id)
);

INSERT INTO login_details (user_name,email,password,is_admin,is_premium_user,created_at,updated_at)
VALUES("admin","admin@gmail.com","admin@123",1,1,now(),now());

INSERT INTO login_details (user_name,email,password,is_admin,is_premium_user,created_at,updated_at)
VALUES("vinith","vinu@gmail.com","vinu@2526",0,0,now(),now());


CREATE TABLE artist (
    id int not null auto_increment,
    artist_name varchar(255)  not null,
    created_at timestamp,
    updated_at timestamp,
    PRIMARY KEY (id)

);

create table playLists(
    id int not null auto_increment,
    playList_name varchar(255),
    playList_artist varchar (255) ,
    primary key(id),
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE images (
    id int not null AUTO_INCREMENT,
    image_path varchar(255),
    artist_id int null,
    playList_id int null,
    PRIMARY key (id),
    FOREIGN key (artist_id) REFERENCES artist(id),
    FOREIGN key (playList_id) REFERENCES playLists(id),
    created_at timestamp,
    updated_at timestamp
    );

CREATE TABLE songLists(
    id int not null AUTO_INCREMENT,
    artist_id int,
    playList_id int,
    created_at timestamp,
    updated_at timestamp,
    PRIMARY KEY (id),
    FOREIGN key(artist_id) REFERENCES artist(id),
    FOREIGN key(playList_id) REFERENCES playLists(id)

);


CREATE TABLE premium_request(
    id INT NOT null AUTO_INCREMENT,
    user_id int,
    is_approved int,
    PRIMARY key (id),
    FOREIGN KEY(user_id) REFERENCES login_details(id));