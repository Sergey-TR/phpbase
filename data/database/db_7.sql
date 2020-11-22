drop database if exists shop_php;
create database shop_php character set utf8 collate utf8_general_ci;

drop  table if exists product_img;
create table product_img (
	id serial primary key,
	title varchar(255) not null,
	route varchar(255) not null,
	views int default 0
);

alter table product_img 
	add column price decimal (10, 2) not null,
	add column description text character set utf8;
	
insert into product_img (title, route, price, description) values
('shirt', '1.png', 100, 'Какое-то описание товара надетое на этом кадре, майка'), 
('blond', '2.png', 110, 'Какое-то описание товара надетое на этом кадре, это блондинка'),
('tail', '3.png', 120, 'Какое-то описание товара надетое на этом кадре, это чувак с хвостиком'),
('brunette', '4.png', 130, 'Какое-то описание товара надетое на этом кадре, это брюнетка или шатенка, в общем х.з.'),
('peroxid', '5.png', 140, 'Какое-то описание товара надетое на этом кадре, это пироксидная'),
('hat', '6.png', 150, 'Какое-то описание товара надетое на этом кадре, чувак в шляпе'),
('pants', '7.png', 160, 'Какое-то описание товара надетое на этом кадре, коротенькие штанишки'),
('shorts', '8.png', 170, 'Какое-то описание товара надетое на этом кадре, шорты'),
('sad', '9.png', 180, 'Какое-то описание товара надетое на этом кадре, грусный мальчик'),
('coat', '10.png', 190, 'Какое-то описание товара надетое на этом кадре, пальтишко'),
('beard', '11.png', 200, 'Какое-то описание товара надетое на этом кадре, бородатый мужик'),
('bearded man', '12.png', 210, 'Какое-то описание товара надетое на этом кадре, переодетый бородач');

drop table if exists review;
create table review (
	id serial primary key,
	id_product bigint unsigned not null,
	body text,
	created_at datetime default current_timestamp,
	foreign key (id_product) references product_img(id)
);

CREATE TABLE `users` (
  `id` serial primary key,
  `login` varchar(255) NOT null unique,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT null unique,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `visited_at` timestamp NULL DEFAULT NULL,
  `auth_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;