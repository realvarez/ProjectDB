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

DROP TRIGGER IF EXISTS funcion on users cascade;
  
CREATE TRIGGER funcion BEFORE DELETE ON users FOR EACH ROW
EXECUTE PROCEDURE bloquear_usuario();   
  

-- DELETE FROM users WHERE id = 1;
-- SELECT * FROM users;

DROP FUNCTION IF EXISTS sumar() cascade;

CREATE OR REPLACE FUNCTION sumar() 
RETURNS trigger AS $$ 
DECLARE
BEGIN
    UPDATE apoyo_economicos 
    SET actual = (
        select sum(cantidad) as cosa
        from depositos,apoyo_economicos
        where depositos.medida_id = apoyo_economicos.id and
        apoyo_economicos.id = NEW.medida_id)
    FROM depositos
    WHERE depositos.medida_id=NEW.medida_id and 
        apoyo_economicos.id=depositos.medida_id;
    RETURN NULL;
END;
$$ LANGUAGE plpgsql;

DROP TRIGGER IF EXISTS funcion on apoyo_economicos cascade;
CREATE TRIGGER funcion after insert ON depositos for each row
EXECUTE PROCEDURE sumar();