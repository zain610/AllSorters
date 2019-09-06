drop table if exists products cascade;

create table products
(
	id int auto_increment
		primary key,
	name varchar(255) not null,
	description varchar(1000) not null
);

create table categories
(
    id int auto_increment,
    name varchar(255) not null,
    constraint categories_pk
        primary key (id)
);

insert into products (id,name,description)
values (1,'Orange juice',''),
        (2,'Milo',''),
        (3,'Sandwich','');

insert into categories (id,name)
values (1,'Food'),
       (2,'Drink');

create table categories_products
(
    product_id int not null,
    category_id int not null,
    constraint categories_products_pk
        primary key (product_id, category_id),
    constraint categories_products_categories_id_fk
        foreign key (category_id) references categories (id),
    constraint categories_products_products_id_fk
        foreign key (product_id) references products (id)
);


insert into categories_products (product_id, category_id)
values (1,2),
       (2,1),
       (2,2),
       (3,1);

