INSERT INTO tipo_usuario (nome)
VALUES ("admin");

INSERT INTO tipo_usuario (nome)
VALUES ("professor"), ("aluno");

SELECT * FROM tipo_usuario;

INSERT INTO usuarios (nome, email, senha, cpf, foto, tipo_usuario_fk)
VALUES ("Marcio", "mmmm@mmm.com.br", "123", 12345678901, "foto.png", 2);

ALTER TABLE usuarios
CHANGE cpf cpf BIGINT(12);

INSERT INTO usuarios (nome, email, senha, cpf, foto, tipo_usuario_fk)
VALUES ("Marcio", "mert@mmm.com.br", "1234", 12345678955, "foto.png", 3);

SELECT * FROM usuarios;

INSERT INTO usuarios (nome, email, senha, cpf, foto, tipo_usuario_fk)
VALUES ("Bezerra", "moh@mmm.com.br", "1234", 12345673455, "foto.png", 1);

INSERT INTO usuarios (nome, email, senha, cpf, foto, tipo_usuario_fk)
VALUES ("Abutre", "abrt@mmm.com.br", "1234", 12345678955, "abtr.png", 3);

INSERT INTO usuarios (nome, email, senha, cpf, foto, tipo_usuario_fk)
VALUES ("Eduardo", "Edu@mmm.com.br", "1234", 12345678955, "ed.png", 2);

INSERT INTO usuarios (nome, email, senha, cpf, foto, tipo_usuario_fk)
VALUES ("Leon", "leon@mmm.com.br", "1234", 12345678325, "leon.png", 3);

SELECT * FROM usuarios;

SELECT nome, email, tipo_usuario_fk FROM usuarios;

SELECT * FROM usuarios
WHERE tipo_usuario_fk = 2;

SELECT * FROM usuarios
WHERE nome LIKE 'M%';

SELECT * FROM usuarios
WHERE nome LIKE 'r%' or tipo_usuario_fk = 3;

SELECT * FROM usuarios
WHERE nome IN ('Marcio', 'Abutre', 'Eduardo');

SELECT nome, email FROM usuarios
WHERE tipo_usuario_fk = 3
ORDER BY nome DESC;

UPDATE usuarios
SET email = "marcio@gmail.com.br"
WHERE nome = "Abutre";

SET sql_safe_updates = 0;

UPDATE usuarios
SET foto = 'nicolascage.png'
WHERE tipo_usuario_fk = 3;

INSERT INTO `projeto_cursos`.`usuarios`
(`nome`,
`email`,
`senha`,
`cpf`,
`foto`,
`tipo_usuario_fk`)
VALUES
('Marcio',
'mmm@mmm.com.br',
123,
12345678901,
'foto123.png',
3);

DELETE FROM usuarios
WHERE nome = 'Abutre';

