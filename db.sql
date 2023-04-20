# Create database
create database apiPHP;

# use database

use apiPHP;

# Create Table Student

create table etudiant(
    id int auto_increment,
    name varchar(255) not null,
    age int(11) not null,
    email varchar(255) not null,
    password varchar(255) not null,
    PRIMARY KEY(id)
)ENGINE=InnoDB;
