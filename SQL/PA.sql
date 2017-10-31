CREATE OR REPLACE FUNCTION actualizar_avance(tipo integer, avanceActual integer, id_medida_new integer) RETURNS void AS $q$ 
DECLARE
	meta integer;
BEGIN
	case tipo
			when 1 then 
				select into meta "metaDinero" from eventos where id_medida = id_medida_new;

				UPDATE eventos set "actualDinero" = avanceActual where id_medida = id_medida_new;
 
				UPDATE "medidas" set avance = (avanceActual*100)/meta where id = id_medida_new;
			

			when 2 then
				select into meta "metaMinima" from "apoyo_economicos" where id_medida= id_medida_new;
				
				UPDATE "apoyo_economicos" set actual = avanceActual where id_medida = id_medida_new;

				UPDATE "medidas" set avance = (avanceActual*100)/meta where id = id_medida_new;

			when 3 then
				select into meta metaVoluntarios from voluntariados where id_medida = id_medida_new;

				UPDATE voluntariados set voluntariosActuales = avanceActual where id_medida = id_medida_new;

				UPDATE "medidas" set avance = (avanceActual*100)/meta where id= id_medida_new;

			when 4 then
				select into meta "metaRecoleccion" from recolecciones where id_medida = id_medida_new;

				UPDATE recolecciones set "recoleccionActual" = avanceActual where id_medida = id_medida_new;

				UPDATE "medidas" set avance = (avanceActual*100)/meta where id = id_medida_new;
			end case;
END;
$q$ LANGUAGE plpgsql;
