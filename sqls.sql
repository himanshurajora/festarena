CREATE TABLE `username_fests`.(
   `id` INT NOT NULL AUTO_INCREMENT,
    `type` VARCHAR(20) NOT NULL,
    `name` VARCHAR(40) NOT NULL,
    `date` VARCHAR(20) NOT NULL,
    `duration` VARCHAR(20) NOT NULL,
    `fee` VARCHAR(10) NOT NULL,
    `lastdate` VARCHAR(20) NOT NULL,
    `url` VARCHAR(30) NOT NULL,
    `image` VARCHAR(40) NOT NULL,
    , PRIMARY KEY (`id`)
) ENGINE = InnoDB;


$q1 = "SELECT FROM members WHERE username = '".$username."'";

