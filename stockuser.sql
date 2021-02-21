CREATE TABLE stockUser(
user_id INT AUTO_INCREMENT ,
user_number VARCHAR(10) NOT NULL ,
user_name TEXT NOT NULL ,
user_password VARCHAR(20) NOT NULL ,
enable TINYINT(1) NOT NULL ,

PRIMARY KEY(user_id) ,
UNIQUE KEY(user_number)
);