drop database if exists shop_php;
create database shop_php character set utf8 collate utf8_general_ci;

drop  table if exists product_img;
create table product_img (
	id serial primary key,
	title varchar(255) not null,
	route varchar(255) not null,
	views int default 0
);

insert into product_img (title, route) values 
('shirt', '1.png'), ('blond', '2.png'), ('tail', '3.png'), ('brunette', '4.png'), ('peroxid', '5.png'), ('hat', '6.png'),
('pants', '7.png'), ('shorts', '8.png'), ('sad', '9.png'), ('coat', '10.png'), ('beard', '11.png'), ('bearded man', '12.png');

