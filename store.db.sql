drop table if exists Client;
create table Client
(
	Client_id int auto_increment,
	Client_fname varchar(255) not null,
	Client_sname varchar(255) not null,
    constraint Client_pk
		primary key (Client_id)
);

