CREATE DATABASE recode
default character set utf8
default collate utf8_general_ci;

CREATE TABLE recode.students (
    id int not null PRIMARY KEY AUTO_INCREMENT,
    name varchar(80) not null,
    telphone varchar(30)

) default charset = utf8;