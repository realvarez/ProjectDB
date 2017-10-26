INSERT OR REPLACE INTO "regions" ( "id", "nombre") 
VALUES 	( 1, 'Tarapaca' ),( 2, 'Antofagasta' ),( 3,'Atacama' ),
		( 4, 'Coquimbo' ),( 5, 'Valparaiso' ),( 6,'O\'Higgins' ),
		( 7, 'Maule' ),	( 8, 'Biobío ' ),( 9, 'Araucanía' ),( 10, 'Los Lagos ' ),
		( 11, 'Aysén ' ),( 12, 'Magallanes' ),( 13, 'Metropolitana de Santiago' ),
		( 14, 'Los Ríos'),( 15, 'Arica y Parinacota');

INSERT INTO ROL VALUES (1,'Administrador'),(2,'Personal Gobierno'),(3,'Usuario');

CREATE OR REPLACE FUNCTION bloquear_usuario() RETURNS trigger AS $d$ 
	BEGIN
		UPDATE users SET estado = 0 WHERE id = OLD.id;
		CREATE RULE bloquear AS ON DELETE TO persona DO INSTEAD NOTHING;
		RETURN NULL;
        END;
 $d$ LANGUAGE plpgsql;

  
CREATE TRIGGER funcion  BEFORE DELETE ON users FOR EACH ROW
EXECUTE PROCEDURE bloquear_usuario();
  
-- delete from users where id_Persona = 1;
-- SELECT * FROM users;