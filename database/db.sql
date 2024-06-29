CREATE TABLE usuarios (
                          id_usuario  INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                          nombres     VARCHAR (255) NOT NULL,
                          cargo       VARCHAR (255) NOT NULL,
                          email       VARCHAR (255) NOT NULL UNIQUE KEY,
                          password    TEXT NOT NULL,

                          fyh_creacion DATETIME NULL,
                          fyh_actualizacion DATETIME NULL,
                          estado      VARCHAR (11)

)ENGINE=INNODB;
insert INTO usuarios (nombres,cargo,email,password,fyh_creacion,estado)
VALUES ('Edgar Enrique García De La Cruz','Adminitrador','kalli-551@live.com.mx','12345','2024-05-28 3:30:45','1');


CREATE TABLE roles (
                          id_rol  INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                          nombre_rol   VARCHAR (255) NOT NULL UNIQUE KEY,

                          fyh_creacion DATETIME NULL,
                          fyh_actualizacion DATETIME NULL,
                          estado      VARCHAR (11)

)ENGINE=INNODB;
INSERT INTO roles (nombre_rol,fyh_creacion,estado) VALUES ('ADMINISTRADOR','2024-06-20 12:25:50', '1');
INSERT INTO roles (nombre_rol,fyh_creacion,estado) VALUES ('DIRECTOR ACADEMICO','2024-06-20 12:25:50', '1');
INSERT INTO roles (nombre_rol,fyh_creacion,estado) VALUES ('DIRECTOR ADMINISTRATIVO','2024-06-20 12:25:50', '1');
INSERT INTO roles (nombre_rol,fyh_creacion,estado) VALUES ('CONTADOR','2024-06-20 12:25:50', '1');
INSERT INTO roles (nombre_rol,fyh_creacion,estado) VALUES ('SECRETARIA','2024-06-20 12:25:50', '1');