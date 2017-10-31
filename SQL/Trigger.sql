CREATE OR REPLACE FUNCTION bloquear_usuario() RETURNS trigger AS $d$ 
	BEGIN
		UPDATE users SET estado = 0 WHERE id = OLD.id;
		CREATE OR REPLACE RULE bloquear AS ON DELETE TO users DO INSTEAD NOTHING;
		RETURN NULL;
        END;
 $d$ LANGUAGE plpgsql;

  
CREATE TRIGGER funcion BEFORE DELETE ON users FOR EACH ROW
EXECUTE PROCEDURE bloquear_usuario();   
  

DELETE FROM users WHERE id = 1;
SELECT * FROM users;