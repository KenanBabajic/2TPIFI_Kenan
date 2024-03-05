create or replace database Test2024;

use Test2024;

create table Clients (
ClientId int not null auto_increment primary key,
ClientName varchar(50)
);

insert into Clients(ClientName) VALUES ("Jojo");
insert into Clients(ClientName) VALUES ("ElSalimMowafuck");