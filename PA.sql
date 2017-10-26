CREATE OR REPLACE FUNCTION actualizar_avance(tipo integer, avanceActual integer, id_medida_new integer) RETURNS void AS $q$ 
DECLARE 
meta integer;
BEGIN
	case tipo
			when 1 then 
				select into meta metamin from bingos_fiestas_a_beneficio where id_medida = id_medida_new;

				UPDATE bingos_fiestas_a_beneficio set cantActual = avanceActual where id_medida = id_medida_new;

				UPDATE bingos_fiestas_a_beneficio set avance = (avanceActual*100)/meta where id_medida = id_medida_new;
			

			when 2 then
				select into meta metamin from apoyo_economico where id_medida= id_medida_new;
				
				UPDATE apoyo_economico set metaactual = avanceActual where id_medida = id_medida_new;

				UPDATE apoyo_economico set avance = (avanceActual*100)/meta where id_medida = id_medida_new;

			when 3 then
				select into meta cantmax_personas from voluntariados where id_medida = id_medida_new;

				UPDATE voluntariados set cantactual_personas = avanceActual where id_medida = id_medida_new;

				UPDATE voluntariados set avance = (avanceActual*100)/meta where id_medida= id_medida_new;

			when 4 then
				select into meta recoleccionmin from recolecciones where id_medida = id_medida_new;

				UPDATE recolecciones set recoleccionactual = avanceActual where id_medida = id_medida_new;

				UPDATE recolecciones set avance = (avanceActual*100)/meta where id_medida = id_medida_new;
			end case;



END;
$q$ LANGUAGE plpgsql;
