-- 30: Create a MySQL Table in Database | PHP Tutorial | Learn PHP Programming | PHP for Beginners

CREATE TABLE posts  (
    id int(11) not null PRIMARY KEY AUTO_INCREMENT,
    subject varchar(128),
    content varchar(1000),
    date datetime not null   -- don't include comma the last column because commas is just to separate columns
);