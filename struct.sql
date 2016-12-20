CREATE TABLE /*TABLE_PREFIX*/t_rslides(
id int( 10 ) UNSIGNED NOT NULL AUTO_INCREMENT ,
uniqname VARCHAR(100) NOT NULL,
imagename VARCHAR(100) NOT NULL,
caption VARCHAR(200) NOT NULL,
description VARCHAR(600) NOT NULL,
link VARCHAR(100) NOT NULL,
PRIMARY KEY ( id )
) ENGINE = InnoDB DEFAULT CHARACTER SET 'UTF8' COLLATE 'UTF8_GENERAL_CI';