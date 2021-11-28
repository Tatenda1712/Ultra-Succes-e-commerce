

CREATE TABLE`cart`(
`cart_id` int(11)NOT NULL,
`user_id` int(11)NOT NULL,
`item_id` int(11)NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



CREATE TABLE`product`(
`item_id` int(11) NOT NULL,
`item_brand`varchar(200) NOT NULL,
`item_name` varchar(255) NOT NULL,
`item_price` double(10,2) NOT NULL,
`item_image` varchar(255) NOT NULL,
`item_register` datetime DEFAULT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO`product`(`item_id`,`item_brand`,`item_name`,`item_price`,`item_image`,`item_register`)VALUES
(1,'Ultra Success','Tatenda Musodza',55.675,'images/tatenda musodza.png','2021-03-28 11:08:57'),
(2,'Ultra Success','Musodza Tatenda',567.675,'images/musodza tatenda.png','2021-04-17 10:56:57');



CREATE TABLE `user`(
`user_id`int(11)NOT NULL,
`first_name`varchar(100)NOT NULL,
`last_name`varchar(100)NOT NULL,
`register_date`datetime DEFAULT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO`user`(`user_id`,`first_name`,`last_name`,`register_date`)VALUES
(1,'Tatenda','Musodza','2020-12-17 11:08:57'),
(2,'Musodza','Tatenda','2020-12-31 10:56:57');


CREATE TABLE `wishlist`(
`cart_id`int(11)NOT NULL,
`user_id`varchar(100)NOT NULL,
`item_id`varchar(100)NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



    