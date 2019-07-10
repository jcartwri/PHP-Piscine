CREATE TABLE ft_table(`id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
					`login` VARCHAR(8) NOT NULL DEFAULT 'toto',
					`group` ENUM("staff",  "student", "other"),
					`creation_date` DATE);