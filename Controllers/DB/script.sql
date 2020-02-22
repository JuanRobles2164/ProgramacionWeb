CREATE TABLE IF NOT EXISTS grado (
  idgrado INT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(13) NOT NULL,
  tipo VARCHAR(30) NOT NULL COMMENT 'En tipo se define si el grado es preescolar, primaria, secundaria o  media vocacional',
  PRIMARY KEY (`idGrado`));

CREATE TABLE IF NOT EXISTS curso (
  idcurso INT NOT NULL AUTO_INCREMENT,
  `nombrecurso` VARCHAR(25) NOT NULL COMMENT 'I.E: 8-1,8-2 ó Tercero A, Tercero B',
  `cupocurso` TINYINT(60) NOT NULL,
  `jornada` VARCHAR(20) NOT NULL COMMENT 'Aqui, al curso se le asigna una jornada (mañana,tarde,noche)',
  `grado_idgrado` INT NOT NULL,
  PRIMARY KEY (`idcurso`),
  INDEX `fk_curso_grado_idx` (`grado_idgrado` ASC) VISIBLE,
  CONSTRAINT `fk_curso_grado`
    FOREIGN KEY (`grado_idgrado`)
    REFERENCES `Grado` (`idgrado`));

CREATE TABLE notas_materia_estudiante(
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_estudiante INT
);
