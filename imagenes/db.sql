create table files(
    id int AUTO_INCREMENT NOT NULL,
    nombre varchar(45) NULL,
    url varchar(250) NULL,
    file varchar(250) NULL,
    type varchar(50) NULL,
    size float(10) NULL,
    fecha_creacion datetime DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(id) 
);