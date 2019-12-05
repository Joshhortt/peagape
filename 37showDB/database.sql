-- 37: How to show database data on a website using MySQLi --

CREATE TABLE users  (
    user_id int(11) not null PRIMARY KEY AUTO_INCREMENT,
    user_first varchar(256) not null,
    user_last varchar(256) not null,
    user_email varchar(256 )not null,
    user_uid varchar(256) not null,
    user_pwd varchar(256) not null
);
-- No need to include users_id because it has AUTO_INCREMENT
INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) 
VALUES ('Jose', 'Calvario', 'josecalvario@gmail.com', 'Admin', 'test123');

INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) 
VALUES ('Carmen', 'Simao', 'cdeus@gmail.com', 'csimdeus', 'test1234');