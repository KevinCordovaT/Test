create database TestGit;
use TestGit;
create table cliente(
idCliente int auto_increment not null,
name varchar(30),
email varchar(30),
password varchar(30),
primary key (idCliente)
);

DELIMITER //
create procedure insertClientes(_name varchar(30), _email varchar(30),_password varchar(30))
begin
insert into cliente(name,email,password)
values (_name,_email,_password);
end//
DELIMITER ;

DELIMITER //
create procedure loginCliente(_email varchar(30),_password varchar(30))
begin
select * from cliente where email = _email and password = _password;
end//
DELIMITER ;