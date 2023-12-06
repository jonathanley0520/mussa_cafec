CREATE TABLE login (
id INT PRIMARY KEY AUTO_INCREMENT,
Correo VARCHAR (40),
Contraseña VARCHAR(40)
);
CREATE TABLE feria (  
id INT PRIMARY KEY AUTO_INCREMENT,
nombreInstitucion VARCHAR (155),
nombreProyecto    VARCHAR (100),
numPersonas INT;
archivos   NULL
);
CREATE TABLE  Robotica (
    id INT AUTO_INCREMENT PRIMARY KEY,
    categoria VARCHAR (35),
    nombreInstitucion VARCHAR(255) ,
    nombreParticipantes VARCHAR (35),
    correo  VARCHAR(100) NOT NULL,
    Telefono INT (11)
);
CREATE TABLE ponente(
     id INT AUTO_INCREMENT PRIMARY KEY,
     ejeTematico VARCHAR (155),
     InstituciónParticipación VARCHAR(60),
     nombrePrograma VARCHAR (45),
     fichaPrograma INT (8),
     nombrePonente VARCHAR (35),
     CorreoContacto VARCHAR (45),
     NúmeroTeléfono VARCHAR (12),
     tituloProyecto VARCHAR (45),
     tipoProyecto VARCHAR (50),
     archivos VARCHAR (50)
);
CREATE TABLE poster(
     id INT AUTO_INCREMENT PRIMARY KEY,
     nombreInstitucion VARCHAR (155),
     nombrePonenten VARCHAR(60),
     correo VARCHAR (45),
     telefono INT (12),
     tituloProyecto VARCHAR (45),
     archivos VARCHAR (50)
);