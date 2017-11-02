DROP FUNCTION IF EXISTS bloquear_usuario() cascade;

CREATE OR REPLACE FUNCTION bloquear_usuario() 
RETURNS trigger AS $d$ 
DECLARE
BEGIN
	UPDATE users
	SET estado = 0 
	WHERE id = OLD.id;
	RETURN NULL;
END;
$d$ LANGUAGE plpgsql;

DROP TRIGGER IF EXISTS funcion on usuarios cascade;
  
CREATE TRIGGER funcion BEFORE DELETE ON users FOR EACH ROW
EXECUTE PROCEDURE bloquear_usuario();   
  

-- DELETE FROM users WHERE id = 1;
-- SELECT * FROM users;