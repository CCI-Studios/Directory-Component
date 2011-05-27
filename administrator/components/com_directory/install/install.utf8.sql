CREATE TABLE `#__directory_companies` (
  `directory_company_id` SERIAL,
  `title` VARCHAR(250) NOT NULL,
  `description` TEXT NOT NULL,
  PRIMARY KEY (`directory_company_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;