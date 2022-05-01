create database cakes;
use cakes;

create table if not exists tb_cakes
(
    id    int auto_increment primary key,
    name_cake  varchar(255), 
    dicription varchar(255),
    price INT not NULL,
    image_path varchar(255) not null
    
)DEFAULT CHARSET=utf8;

INSERT INTO tb_cakes(name_cake, dicription, price, image_path)
VALUES ('cheesecake', 'cake from chesecream', 1000, 'cheesecake.jpg'),
('napoleon', 'russion cake', 1200, 'napoleon.jpg'),
('medovik', 'cake with honey', 1300, 'medovik.jpg');


