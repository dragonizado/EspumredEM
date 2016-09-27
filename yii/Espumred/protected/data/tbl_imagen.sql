CREATE TABLE IF NOT EXISTS `espumred`.`tbl_imagen`  (
    id_imagen INTEGER NOT NULL  AUTO_INCREMENT,
    id_user VARCHAR(128) NOT NULL,
    title VARCHAR(128) NOT NULL,
    folder VARCHAR(128) NOT NULL,
    image VARCHAR(128) NOT NULL,
    PRIMARY KEY (id_imagen)
);