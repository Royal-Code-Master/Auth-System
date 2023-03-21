CREATE TABLE `signup` (
 `id` int(10) NOT NULL AUTO_INCREMENT,
 `username` varchar(100) NOT NULL,
 `mail` varchar(100) NOT NULL,
 `passwords` varchar(100) NOT NULL,
 `dt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4
