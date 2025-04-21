CREATE TABLE IF NOT EXISTS `water_tank` (
	`id` int AUTO_INCREMENT NOT NULL UNIQUE,
	`location` text NOT NULL,
	`water_level` int NOT NULL,
	PRIMARY KEY (`id`)
);


CREATE TABLE IF NOT EXISTS `dustbin` (
	`id` int AUTO_INCREMENT NOT NULL UNIQUE,
	`location` text NOT NULL,
	`level` int NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `transformer` (
	`id` int AUTO_INCREMENT NOT NULL UNIQUE,
	`location` text NOT NULL,
	`status` text NOT NULL,
	PRIMARY KEY (`id`)
);