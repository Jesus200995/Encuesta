<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Anexo 10</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="card shadow">
      <div class="card-header bg-primary text-white">
        <h4>FORMATO DE REPORTE DE ASISTENCIA A DOMICILIO</h4>
        <h6>Este formato corresponde a lo contenido dentro del apartado de personas candidatas a personas sujetas de derecho y validación para el empadronamiento del Programa Sembrando Vida.</h6>
      </div>
      <div class="card-body">
        <form action="procesar.php" method="POST">
          <div class="mb-3">
            <h5>I)DATOS DE IDENTIFICACIÓN Y DOMICILIO</h5>
            <label for="nombre" class="form-label">1.CURP</label>
            <input type="text" class="form-control" id="curp" name="curp" required>
          </div>

          <div class="mb-3">
            <label for="correo" class="form-label">2.Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
          </div>

          <div class="mb-3">
            <label for="correo" class="form-label">Apellido Paterno</label>
            <input type="text" class="form-control" id="ap" name="ap" required>
          </div>

          <div class="mb-3">
            <label for="correo" class="form-label">Apellido Materno</label>
            <input type="text" class="form-control" id="am" name="am" required>
          </div>

          <div class="mb-3">
            <label for="fecha" class="form-label">3.Fecha de nacimiento</label>
            <input type="date" class="form-control" id="fecha" name="fecha" required>
          </div>

          <div class="mb-3">
            <label for="edad" class="form-label">4.¿Cuentos años cumplidos tienes?</label>
            <input type="number" class="form-control" id="edad" name="edad" min="0" max="120" required>
          </div>

          <div class="mb-3">
            <label for="correo" class="form-label">5.Sexo</label>
            <input type="text" class="form-control" id="sexo" name="sexo" required>
          </div>

          <div class="mb-3">
            <label class="form-label d-block">7. ¿Cuál es su rol dentro de su núcleo familiar? ¿Es usted…?</label>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rol_familiar" id="padre_madre" value="padre_madre" required>
                <label class="form-check-label" for="padre_madre">El Padre/la madre</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rol_familiar" id="hijo_hija" value="hijo_hija">
                <label class="form-check-label" for="hijo_hija">El hijo/la hija</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rol_familiar" id="abuelo_abuela" value="abuelo_abuela">
                <label class="form-check-label" for="abuelo_abuela">El abuelo/la abuela</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rol_familiar" id="otro" value="otro">
                <label class="form-check-label" for="otro">Otro, especificar cuál</label>
            </div>

            <!-- Este input aparecerá solo si se selecciona "otro" -->
            <div id="otro_texto_container" class="mt-2" style="display: none;">
                <input type="text" class="form-control" name="rol_familiar_otro" placeholder="Especifique su rol">
            </div>
        </div>


        <div class="mb-3">
            <h6>8. Domicilio de residencia:</h2>
            <label for="correo" class="form-label">Código postal:</label>
            <input type="email" class="form-control" id="cp" name="cp" required>

            <label for="correo" class="form-label">Estado:</label>
            <input type="email" class="form-control" id="estado" name="estado" required>

             <label for="correo" class="form-label">Municipio:</label>
            <input type="email" class="form-control" id="municipio" name="municipio" required>

             <label for="correo" class="form-label">Estado:</label>
            <input type="email" class="form-control" id="estado" name="estado" required>

             <label for="correo" class="form-label">Localidad:</label>
            <input type="email" class="form-control" id="localidad" name="localidad" required>

             <label for="correo" class="form-label">Calle/ejido:</label>
            <input type="email" class="form-control" id="calle" name="calle" required>

             <label for="correo" class="form-label">Número exterior:</label>
            <input type="number" class="form-control" id="numero" name="numero">
        </div>

    <h5>II) IDENTIDAD CULTURAL Y ESTUDIOS</h5>


        <div class="mb-3">
            <label class="form-label d-block">9. De acuerdo a su cultura, historia y tradiciones, ¿usted se considera…?</label>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="etnia" id="indigena" value="indigena" required>
                <label class="form-check-label" for="indigena">Indígena</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="etinia" id="afro" value="afro">
                <label class="form-check-label" for="afro">Afroamericano (a) o afrodescendiente</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="etinia" id="ninguna" value="ninguna">
                <label class="form-check-label" for="ninguna">Ninguno de los anteriores</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="etinia" id="no_sabe" value="no_sabe">
                <label class="form-check-label" for="no_sabe">No sabe/ No responde</label>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label d-block">10A. ¿Habla alguna lengua indígena?</label>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="lengua" id="si" value="si">
                <label class="form-check-label" for="si">Sí</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="lengua" id="no" value="no">
                <label class="form-check-label" for="no">No (PASE a 11)</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="lengua" id="no_responde" value="no_responde">
                <label class="form-check-label" for="no_responde">No responde (PASE a 11)</label>
            </div>
        </div>

         <div class="mb-3">
            <label class="form-label d-block">10B. ¿Cuál lengua indígena habla?</label>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="lengua_indigena" id="chinanteco" value="chinanteco">
                <label class="form-check-label" for="chinanteco">Chinanteco</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="lengua_indigena" id="chol" value="chol">
                <label class="form-check-label" for="chol">Chol</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="lengua_indigena" id="chontal" value="chontal">
                <label class="form-check-label" for="chontal">Chontal</label>
            </div>

             <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="lengua_indigena" id="huasteco" value="huasteco">
                <label class="form-check-label" for="huasteco">Huasteco</label>
            </div>

             <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="lengua_indigena" id="huichol" value="huichol">
                <label class="form-check-label" for="huichol">Huichol</label>
            </div>

             <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="lengua_indigena" id="maya" value="maya">
                <label class="form-check-label" for="maya">Maya</label>
            </div>

             <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="lengua_indigena" id="mazahua" value="mazahua">
                <label class="form-check-label" for="mazahua">Mazahua</label>
            </div>

             <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="lengua_indigena" id="mazateco" value="mazateco">
                <label class="form-check-label" for="mazateco">Mazateco</label>
            </div>

             <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="lengua_indigena" id="mixe" value="mixe">
                <label class="form-check-label" for="mixe">Mixe</label>
            </div>

             <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="lengua_indigena" id="mixteco" value="mixteco">
                <label class="form-check-label" for="mixteco">Mixteco</label>
            </div>

             <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="lengua_indigena" id="náhuatl" value="náhuatl">
                <label class="form-check-label" for="náhuatl">Náhuatl</label>
            </div>

             <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="lengua_indigena" id="otomí" value="otomí">
                <label class="form-check-label" for="otomí">Otomí</label>
            </div>

             <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="lengua_indigena" id="tepehuano" value="tepehuano">
                <label class="form-check-label" for="tepehuano">Tepehuano del sur</label>
            </div>

             <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="lengua_indigena" id="tojolabal" value="tojolabal">
                <label class="form-check-label" for="tojolabal">Tojolabal</label>
            </div>

             <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="lengua_indigena" id="totonaca" value="totonaca">
                <label class="form-check-label" for="totonaca">Totonaca</label>
            </div>

             <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="lengua_indigena" id="tzetzal" value="tzetzal">
                <label class="form-check-label" for="tzetzal">Tzetzal</label>
            </div>


             <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="lengua_indigena" id="tzotzil" value="tzotzil">
                <label class="form-check-label" for="tzotzil">Tzotzil</label>
            </div>

             <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="lengua_indigena" id="zapoteco" value="zapoteco">
                <label class="form-check-label" for="zapoteco">Zapoteco</label>
            </div>

             <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="lengua_indigena" id="zoque" value="zoque">
                <label class="form-check-label" for="zoque">Zoque</label>
            </div>

             <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="lengua_indigena" id="otro" value="otro">
                <label class="form-check-label" for="otro">Otro ¿Cuál?</label>
            </div>

             <!-- Este input aparecerá solo si se selecciona "otro" -->
            <div id="otro_container" class="mt-2" style="display: none;">
                <input type="text" class="form-control" name="lengua_indigena" placeholder="¿Cual?">
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label d-block">11. ¿Habla español?</label>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="habla_español" id="si" value="si" required>
                <label class="form-check-label" for="si">Si</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="habla_español" id="no" value="no">
                <label class="form-check-label" for="no">No</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="habla_español" id="no_responde" value="no_responde">
                <label class="form-check-label" for="no_responde">No responde</label>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label d-block">12. ¿Sabe leer y escribir un recado?</label>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sabe_leer" id="si" value="si" required>
                <label class="form-check-label" for="si">Si</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sabe_leer" id="no" value="no">
                <label class="form-check-label" for="no">No</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sabe_leer" id="no_responde" value="no_responde">
                <label class="form-check-label" for="no_responde">No responde</label>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label d-block">13. ¿Cuál es su último año o grado de estudios?</label>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grado_estudios" id="ninguna" value="ninguna" required>
                <label class="form-check-label" for="ninguna">Ninguna</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grado_estudios" id="primaria_inco" value="primaria_inco">
                <label class="form-check-label" for="primaria_inco">Primaria incompleta</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grado_estudios" id="primaria_comp" value="primaria_comp">
                <label class="form-check-label" for="primaria_comp">Primaria completa</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grado_estudios" id="Sec_inco" value="Sec_inco">
                <label class="form-check-label" for="Sec_inco">Secundaria incompleta</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grado_estudios" id="Secu_com" value="Secu_com">
                <label class="form-check-label" for="Secu_com">Secundaria completa</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grado_estudios" id="Bachi_inco" value="Bachi_inco">
                <label class="form-check-label" for="Bachi_inco">Bachillerato o su equivalente incompleto</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grado_estudios" id="Bachi_com" value="Bachi_com">
                <label class="form-check-label" for="Bachi_com">Bachillerato o su equivalente completo</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grado_estudios" id="tec_supe" value="tec_supe">
                <label class="form-check-label" for="tec_supe">Técnico superior</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grado_estudios" id="licenciatura" value="licenciatura">
                <label class="form-check-label" for="licenciatura">Licenciatura</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grado_estudios" id="Posgrado" value="Posgrado">
                <label class="form-check-label" for="Posgrado">Posgrado o más</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grado_estudios" id="no_responde" value="no_responde">
                <label class="form-check-label" for="no_responde">No responde</label>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label d-block">14. ¿Actualmente asiste a la escuela?</label>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="asiste_escuela" id="si" value="si" required>
                <label class="form-check-label" for="si">Si</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="asiste_escuela" id="no" value="no">
                <label class="form-check-label" for="no">No</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="asiste_escuela" id="no_responde" value="no_responde">
                <label class="form-check-label" for="no_responde">No responde</label>
            </div>
        </div>

        <h5>III) INFORMACIÓN SOCIOECONÓMICA</h5>

         <div class="mb-3">
            <label for="nombre" class="form-label">15. ¿Cuántas personas, incluida usted, viven en la vivienda que habita, contando a los niños pequeños, ancianos y personas con discapacidad?</label>
            <input type="number" class="form-control" id="discapasidad" name="discapasidad" required>
          </div>

          <h6>16. “Considerando que el hogar es un conjunto de personas que hacen vida en común dentro de una misma vivienda, unidos o no por parentesco, que comparten los gastos de manutención y preparan los alimentos en la misma cocina.”</h6>

          <div class="mb-3">
            <label for="nombre" class="form-label">¿Cuántos hogares hay en su vivienda, incluyendo el suyo?</label>
            <input type="number" class="form-control" id="hogares" name="hogares" required>
          </div>  
          
          <div class="mb-3">
            <label for="nombre" class="form-label">17. ¿Cuántas personas forman parte de su hogar, incluyéndose usted, niños pequeños, ancianos y personas con discapacidad?</label>
            <input type="number" class="form-control" id="forman_hogar" name="forman_hogar" required>
          </div>  


            <div class="container mt-4">
                <h6>18. ¿Cuántas personas de este hogar están dentro de cada uno de los siguientes rangos de edad? (VALIDAR QUE EL TOTAL DE PERSONAS MENCIONADAS COINCIDA CON LA RESPUESTA DE LA PREGUNTA 17)</h6>
                <h6>Distribución por rango de edad</h6>
                <table class="table table-bordered">
                    <thead class="table-light">
                    <tr>
                        <th>Letra</th>
                        <th>Rango de edad</th>
                        <th>Número de personas</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>A</td>
                        <td>Niños y niñas de 0 a 3</td>
                        <td><input type="number" class="form-control" name="rango_a" min="0"></td>
                    </tr>
                    <tr>
                        <td>B</td>
                        <td>Niños y niñas de 4 a 12</td>
                        <td><input type="number" class="form-control" name="rango_b" min="0"></td>
                    </tr>
                    <tr>
                        <td>C</td>
                        <td>Jóvenes de 13 a 18</td>
                        <td><input type="number" class="form-control" name="rango_c" min="0"></td>
                    </tr>
                    <tr>
                        <td>D</td>
                        <td>Adultos de 19 a 45</td>
                        <td><input type="number" class="form-control" name="rango_d" min="0"></td>
                    </tr>
                    <tr>
                        <td>E</td>
                        <td>Adultos de 46 a 64</td>
                        <td><input type="number" class="form-control" name="rango_e" min="0"></td>
                    </tr>
                    <tr>
                        <td>F</td>
                        <td>De 65 o más</td>
                        <td><input type="number" class="form-control" name="rango_f" min="0"></td>
                    </tr>
                    </tbody>
                </table>
            </div>

         <div class="mb-3">
            <label for="nombre" class="form-label">19. ¿Cuántos cuartos para dormir hay en su hogar, sin contar pasillos y baños?</label>
            <input type="number" class="form-control" id="cuartos" name="cuartos" required>
        </div> 


        <div class="mb-3">
            <label class="form-label d-block">20. ¿Tiene luz eléctrica en su vivienda?</label>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="luz_vivienda" id="si" value="si" required>
                <label class="form-check-label" for="si">Si</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="luz_vivienda" id="no" value="no">
                <label class="form-check-label" for="no">No</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="luz_vivienda" id="no_responde" value="no_responde">
                <label class="form-check-label" for="no_responde">No responde</label>
            </div>
        </div>

         <div class="mb-3">
            <label class="form-label d-block">21. En su vivienda tienen…</label>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="vivienda_tiene" id="agua_tubo" value="agua_tubo" required>
                <label class="form-check-label" for="agua_tubo">Agua entubada dentro de la vivienda</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="vivienda_tiene" id="agua_fuera" value="agua_fuera">
                <label class="form-check-label" for="agua_fuera">Agua entubada fuera de la vivienda, pero dentro de su terreno</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="vivienda_tiene" id="agua_publica" value="agua_publica">
                <label class="form-check-label" for="agua_publica">Agua entubada de llave pública (o hidrante)</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="vivienda_tiene" id="agua_acarreada" value="agua_acarreada">
                <label class="form-check-label" for="agua_acarreada">Agua entubada que acarrean de otra vivienda</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="vivienda_tiene" id="agua_pipa" value="agua_pipa">
                <label class="form-check-label" for="agua_pipa">Agua de pipa</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="vivienda_tiene" id="agua_pozo" value="agua_pozo">
                <label class="form-check-label" for="agua_pozo">Agua de pozo, río, lago, arroyo</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="vivienda_tiene" id="agua_lluvia" value="agua_lluvia">
                <label class="form-check-label" for="agua_lluvia">Agua captada de lluvia u otro medio</label>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label d-block">22. ¿Qué tratamiento le dan al agua para beberla?</label>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tratamiento_agua" id="sin_trata" value="sin_trata" required>
                <label class="form-check-label" for="sin_trata">La beben sin ningún tratamiento previo</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tratamiento_agua" id="hierven" value="hierven">
                <label class="form-check-label" for="hierven">La hierven</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tratamiento_agua" id="cloro" value="cloro">
                <label class="form-check-label" for="cloro">Le echan cloro</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tratamiento_agua" id="filtro" value="filtro">
                <label class="form-check-label" for="filtro">Usan un filtro</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tratamiento_agua" id="otro" value="otro">
                <label class="form-check-label" for="otro">Otro, ¿cuál?</label>
            </div>

            <!-- Este input aparecerá solo si se selecciona "otro" -->
            <div id="otro_container2" class="mt-2" style="display: none;">
                <input type="text" class="form-control" name="tratamiento_agua" placeholder="¿Cual?">
            </div>

        </div>

        <div class="mb-3">
            <label class="form-label d-block">23. ¿De qué material es la mayor parte del techo de su vivienda?</label>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="material_vivienda" id="concreto" value="concreto" required>
                <label class="form-check-label" for="concreto">Concreto</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="material_vivienda" id="carton" value="carton">
                <label class="form-check-label" for="carton">Lámina de cartón</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="material_vivienda" id="aluminio" value="aluminio">
                <label class="form-check-label" for="aluminio">Lámina de aluminio o metálica</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="material_vivienda" id="asbesto" value="asbesto">
                <label class="form-check-label" for="asbesto">Lámina de asbesto</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="material_vivienda" id="madera" value="madera">
                <label class="form-check-label" for="madera">Madera</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="material_vivienda" id="palma" value="palma">
                <label class="form-check-label" for="palma">Palma o paja</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="material_vivienda" id="otro" value="otro">
                <label class="form-check-label" for="otro">Otro, ¿cuál?</label>
            </div>

            <!-- Este input aparecerá solo si se selecciona "otro" -->
            <div id="otro_container3" class="mt-2" style="display: none;">
                <input type="text" class="form-control" name="material_vivienda" placeholder="¿Cual?">
            </div>

        </div>


         <div class="mb-3">
            <label class="form-label d-block">24. ¿De qué material es la mayor parte del piso de su vivienda?</label>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="mayor_vivienda" id="cemento" value="cemento" required>
                <label class="form-check-label" for="cemento">Cemento</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="mayor_vivienda" id="tierra" value="tierra">
                <label class="form-check-label" for="tierra">Tierra</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="mayor_vivienda" id="moza_azul" value="moza_azul">
                <label class="form-check-label" for="moza_azul">Mosaico o azuleo</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="mayor_vivienda" id="maderas" value="maderas">
                <label class="form-check-label" for="maderas">Madera</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="mayor_vivienda" id="otro" value="otro">
                <label class="form-check-label" for="otro">Otro, ¿cuál?</label>
            </div>

            <!-- Este input aparecerá solo si se selecciona "otro" -->
            <div id="otro_container4" class="mt-2" style="display: none;">
                <input type="text" class="form-control" name="mayor_vivienda" placeholder="¿Cual?">
            </div>

        </div>

        <div class="mb-3">
            <label class="form-label d-block">25. ¿De qué material son las paredes o muros de su vivienda, principalmente?</label>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="metarial_paredes" id="con_ladri_tabi" value="con_ladri_tabi" required>
                <label class="form-check-label" for="con_ladri_tabi">Concreto, ladrillo o tabique</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="metarial_paredes" id="lami_carton" value="lami_carton">
                <label class="form-check-label" for="lami_carton">Lámina de cartón</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="metarial_paredes" id="lami_alu" value="lami_alu">
                <label class="form-check-label" for="lami_alu">Lámina de aluminio o metálica</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="metarial_paredes" id="maderas1" value="maderas1">
                <label class="form-check-label" for="maderas1">Madera</label>
            </div>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="metarial_paredes" id="adobe" value="adobe">
                <label class="form-check-label" for="adobe">Adobe</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="metarial_paredes" id="otro" value="otro">
                <label class="form-check-label" for="otro">Otro, ¿cuál?</label>
            </div>

            <!-- Este input aparecerá solo si se selecciona "otro" -->
            <div id="otro_container5" class="mt-2" style="display: none;">
                <input type="text" class="form-control" name="metarial_paredes" placeholder="¿Cual?">
            </div>

        </div>

        <div class="mb-3">
            <label class="form-label d-block">26. ¿Qué tipo de baño o escusado tiene su vivienda?</label>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="baños" id="conex_agua" value="conex_agua" required>
                <label class="form-check-label" for="conex_agua">Con conexión de agua</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="baños" id="agua_cubeta" value="agua_cubeta">
                <label class="form-check-label" for="agua_cubeta">Le echan agua con cubeta</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="baños" id="letrina" value="letrina">
                <label class="form-check-label" for="letrina">Letrina seca o húmeda</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="baños" id="pozo" value="pozo">
                <label class="form-check-label" for="pozo">Pozo u hoyo negro</label>
            </div>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="baños" id="no_tiene" value="no_tiene">
                <label class="form-check-label" for="no_tiene">No tiene</label>
            </div>
        </div>

          <div class="mb-3">
            <label class="form-label d-block">27. ¿Cuál es el combustible que más usan para cocinar?</label>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="combustible" id="gas_cilindro" value="gas_cilindro" required>
                <label class="form-check-label" for="gas_cilindro">Gas de cilindro o tanque</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="combustible" id="gas_natural" value="gas_natural">
                <label class="form-check-label" for="gas_natural">Gas natural o de tubería</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="combustible" id="electricidad" value="electricidad">
                <label class="form-check-label" for="electricidad">Electricidad</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="combustible" id="leña" value="leña">
                <label class="form-check-label" for="leña">Leña o carbón sin chimenea o fogón</label>
            </div>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="combustible" id="otro" value="otro">
                <label class="form-check-label" for="otro">Otro, ¿cuál?</label>
            </div>

             <!-- Este input aparecerá solo si se selecciona "otro" -->
            <div id="otro_container6" class="mt-2" style="display: none;">
                <input type="text" class="form-control" name="combustible" placeholder="¿Cual?">
            </div>
        </div>

        <table class="table table-bordered text-center align-middle">
            <thead class="table-light">
                <tr>
                <th> </th>
                <th>Artículo</th>
                <th>Sí (1)</th>
                <th>No (2)</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $articulos = [
                    'A' => 'Refrigerador',
                    'B' => 'Lavadora automática',
                    'C' => 'VHS, DVD, BLU-RAY',
                    'D' => 'Vehículo (carro, camioneta o camión)',
                    'E' => 'Motocicleta o motoneta',
                    'F' => 'Bicicleta que se utilice como medio de transporte',
                    'G' => 'Horno (microondas o eléctrico)',
                    'H' => 'Computadora, laptop o tablet',
                    'I' => 'Estufa/parrilla de gas',
                    'J' => 'Calentador de agua/boiler (gas/solar)',
                    'K' => 'Aparato de televisión',
                    'L' => 'Aparato de televisión digital',
                    'M' => 'Servicio de televisión de paga (antena parabólica, SKY o TV por cable)',
                    'N' => 'Tinaco',
                    'O' => 'Aparato para regular la temperatura (ventilador, enfriador, clima, calefactor)',
                    'P' => 'Internet',
                    'Q' => 'Línea telefónica fija',
                    'R' => 'Teléfono celular'
                ];

                foreach ($articulos as $letra => $nombre) {
                    echo '<tr>';
                    echo "<td><strong>$letra</strong></td>";
                    echo "<td class='text-start' style='color:red;'>$nombre</td>";

                    // Radios Sí y No
                    echo "<td>
                            <input type='radio' class='form-check-input' name='articulo_$letra' value='1' required>
                        </td>";
                    echo "<td>
                            <input type='radio' class='form-check-input' name='articulo_$letra' value='2'>
                        </td>";
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>

        <div class="mb-3">
            <label for="nombre" class="form-label">29A. ¿Cuántos teléfonos celulares tienen en su hogar?</label>
            <input type="number" class="form-control" id="tele_cel" name="tele_cel" required>
        </div>

        <div class="mb-3">
            <label for="nombre" class="form-label">29B. ¿Cuál es el número de su celular o en cuál número lo (la) puedo contactar? (CORROBORAR QUE SEA DE 10 DÍGITOS CONSIDERANDO LADA):</label>
            <input type="number" class="form-control" id="numero_cel" name="numero_cel" required>
        </div>

        <h5>IV)OCUPACIÓN Y EMPLEO</h5>

        <div class="mb-3">
            <label class="form-label d-block">30. ¿Durante 2024 tuvo trabajo remunerado?</label>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="trabajo" id="conex_agua" value="conex_agua" required>
                <label class="form-check-label" for="conex_agua">Con conexión de agua</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="trabajo" id="si_todo" value="si_todo">
                <label class="form-check-label" for="si_todo">Sí, durante todo el año</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="trabajo" id="si_6_12_m" value="si_6_12_m">
                <label class="form-check-label" for="si_6_12_m">Sí, entre 6 y 12 meses</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="trabajo" id="si_menos_6" value="si_menos_6">
                <label class="form-check-label" for="si_menos_6">Sí, por menos de 6 meses</label>
            </div>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="trabajo" id="no_trabajo" value="no_trabajo">
                <label class="form-check-label" for="no_trabajo">No tuvo trabajo remunerado (PASE A 33)</label>
            </div>
        </div>

        <div class="mb-3">
            <label for="ocupacion" class="form-label">31. ¿Qué actividad desempeñó en su último trabajo remunerado de 2024?</label>
            
            <select class="form-select" id="ocupacion" name="ocupacion" required>
                <option value="">Seleccione una opción</option>
                <option value="1">Albañil</option>
                <option value="2">Artesano</option>
                <option value="3">Ayudante de un oficio</option>
                <option value="4">Ayudante en rancho (peón) o negocio no familiar</option>
                <option value="5">Chofer</option>
                <option value="6">Ejidatario o comunero</option>
                <option value="7">Empleado de gobierno</option>
                <option value="8">Empleado del sector privado</option>
                <option value="9">Empleado doméstico</option>
                <option value="10">Jornalero agrícola/campesino</option>
                <option value="11">Miembro de un grupo u organización de productores</option>
                <option value="12">Miembro de una cooperativa de producción o servicios</option>
                <option value="13">Obrero</option>
                <option value="14">Patrón o empleador de un negocio</option>
                <option value="15">Profesionista independiente</option>
                <option value="16">Promotor de desarrollo humano o gestor social</option>
                <option value="17">Trabajador por cuenta propia</option>
                <option value="18">Vendedor ambulante</option>
                <option value="19">Otra ocupación</option>
            </select>
            </div>

            <!-- Campo adicional para "Otra ocupación" -->
            <div class="mb-3" id="otra_ocupacion_container" style="display: none;">
            <label for="otra_ocupacion_texto" class="form-label">¿Cuál?</label>
            <input type="text" class="form-control" id="otra_ocupacion_texto" name="otra_ocupacion_texto">
        </div>

        <div class="mb-3">
            <label class="form-label d-block">32. ¿Qué tipo de contratación tuvo en ese trabajo? (PASE A 34)</label>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="contratacion" id="contra_fijo" value="contra_fijo" required>
                <label class="form-check-label" for="contra_fijo">Contrato fijo</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="contratacion" id="contra_even" value="contra_even">
                <label class="form-check-label" for="contra_even">Contrato eventual o por meta</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="contratacion" id="sin_contrato" value="sin_contrato">
                <label class="form-check-label" for="sin_contrato">Sin contrato</label>
            </div>
        </div>


        <div class="mb-3">
            <label class="form-label d-block">33. ¿Cuál fue su principal ocupación en 2024? (PASAR A PREGUNTA 37)</label>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="prin_ocupacion" id="cuidado_niños" value="cuidado_niños" required>
                <label class="form-check-label" for="cuidado_niños">Cuidado de niños, enfermos, adultos mayores o discapacitados</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="prin_ocupacion" id="tra_volun" value="tra_volun">
                <label class="form-check-label" for="tra_volun">Trabajo comunitario o voluntario</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="prin_ocupacion" id="labores_hogar" value="labores_hogar">
                <label class="form-check-label" for="labores_hogar">Realizar el quehacer o labores del hogar (limpieza, acarrear agua, leña)</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="prin_ocupacion" id="otro" value="otro">
                <label class="form-check-label" for="otro">Trabajo en campo o parcela familiar Otro, ¿cuál?</label>
            </div>


            <!-- Este input aparecerá solo si se selecciona "otro" -->
            <div id="otro_container7" class="mt-2" style="display: none;">
                <input type="text" class="form-control" name="prin_ocupacion" placeholder="¿Cual?">
            </div>
        </div>

        <h5>V) INGRESOS</h5>

         <div class="mb-3">
            <label class="form-label d-block">34. En 2024, ¿Cuál fue su ingreso promedio mensual?</label>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="ingreso_2024" id="entre_0_500" value="entre_0_500" required>
                <label class="form-check-label" for="entre_0_500">Entre $0 y $500</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="ingreso_2024" id="entre_501_900" value="entre_501_900">
                <label class="form-check-label" for="entre_501_900">Entre$501 y $900</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="ingreso_2024" id="entre_901_1800" value="entre_901_1800">
                <label class="form-check-label" for="entre_901_1800">Entre $901 y $1,800</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="ingreso_2024" id="entr_1801_2600" value="entr_1801_2600">
                <label class="form-check-label" for="entr_1801_2600">Entre $1,801 y $2,600</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="ingreso_2024" id="mas_3501_5000" value="mas_3501_5000">
                <label class="form-check-label" for="mas_3501_5000">Más $3,501 y $5000</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="ingreso_2024" id="mas_5001" value="mas_5001">
                <label class="form-check-label" for="mas_5001">Másde $5,001</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="ingreso_2024" id="no_sabe" value="no_sabe">
                <label class="form-check-label" for="no_sabe">No sabe/norespondió</label>
            </div>
        </div>


        <div class="mb-3">
            <label for="correo" class="form-label">35. En 2024, ¿Cuántas personas dependían económicamente de usted?</label>
            <input type="number" class="form-control" id="depe_eco" name="depe_eco" required>
        </div>

        <div class="mb-3">
            <label class="form-label d-block">36. ¿Usted fue la persona que más aportó al ingreso de su hogar en 2024?</label>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="persona_aporto" id="si" value="si" required>
                <label class="form-check-label" for="si">Sí (PASE A 38)</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="persona_aporto" id="no" value="no">
                <label class="form-check-label" for="no">No (continuar con 37)</label>
            </div>
        </div>

          <div class="mb-3">
            <label class="form-label d-block">37. ¿Qué parentesco tiene con usted la persona que más aportó al ingreso de su hogar el año pasado?</label>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="parentesco_persona" id="esposo_pareja" value="esposo_pareja" required>
                <label class="form-check-label" for="esposo_pareja">Esposo (a)/pareja</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="parentesco_persona" id="padre" value="padre">
                <label class="form-check-label" for="padre">Padre</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="parentesco_persona" id="madre" value="madre">
                <label class="form-check-label" for="madre">Madre</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="parentesco_persona" id="hijo_hija" value="hijo_hija">
                <label class="form-check-label" for="hijo_hija">Hijo/Hija</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="parentesco_persona" id="hermana_hermano" value="hermana_hermano">
                <label class="form-check-label" for="hermana_hermano">Hermana/Hermano</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="parentesco_persona" id="otro" value="otro">
                <label class="form-check-label" for="otro">Otro, ¿quién?</label>
            </div>

                <!-- Este input aparecerá solo si se selecciona "otro" -->
            <div id="otro_container8" class="mt-2" style="display: none;">
                <input type="text" class="form-control" name="parentesco_persona" placeholder="¿Cual?">
            </div>

        </div>

          <div class="mb-3">
            <label for="correo" class="form-label">38. ¿Cuántas personas aportaron al ingreso de su hogar en 2024? Inclúyase usted en caso de haber aportado.</label>
            <input type="number" class="form-control" id="aporta_2024" name="aporta_2024" required>
          </div>

          <div class="container mt-4">
            <h5>32. ¿Cuáles fueron las fuentes de ingreso de su hogar durante el 2024?</h5>
            <table class="table table-bordered">
                <thead class="table-light">
                <tr>
                    <th>Letra</th>
                    <th>Fuente de ingreso</th>
                    <th>Sí </th>
                    <th>No </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>A</td>
                    <td>Pagos o salarios por trabajo remunerado</td>
                    <td><input type="radio" name="ingreso_a" value="1"></td>
                    <td><input type="radio" name="ingreso_a" value="2"></td>
                </tr>
                <tr>
                    <td>B</td>
                    <td>Pensión o jubilación</td>
                    <td><input type="radio" name="ingreso_b" value="1"></td>
                    <td><input type="radio" name="ingreso_b" value="2"></td>
                </tr>
                <tr>
                    <td>C</td>
                    <td>Remesas o envío de dinero del extranjero</td>
                    <td><input type="radio" name="ingreso_c" value="1"></td>
                    <td><input type="radio" name="ingreso_c" value="2"></td>
                </tr>
                <tr>
                    <td>D</td>
                    <td>Apoyo o pensión de algún programa de gobierno</td>
                    <td><input type="radio" name="ingreso_d" value="1"></td>
                    <td><input type="radio" name="ingreso_d" value="2"></td>
                </tr>
                <tr>
                    <td>E</td>
                    <td>
                    Otros, ¿cuál?
                    <div id="otro_ingreso_container" style="display: none;" class="mt-2">
                        <input type="text" class="form-control" name="otro_ingreso_texto" placeholder="Especificar otro ingreso">
                    </div>
                    </td>
                    <td><input type="radio" name="ingreso_e" value="1" id="otro_ingreso_si"></td>
                    <td><input type="radio" name="ingreso_e" value="2" id="otro_ingreso_no"></td>
                </tr>
                </tbody>
            </table>
        </div>






        <script>
    document.addEventListener('DOMContentLoaded', function () {
        function activarCampoOtro(nombreRadio, idCampoTexto) {
            const inputs = document.querySelectorAll(`input[name="${nombreRadio}"]`);
            const campoTexto = document.getElementById(idCampoTexto);

            inputs.forEach(function (input) {
                input.addEventListener('change', function () {
                    if (this.value === 'otro') {
                        campoTexto.style.display = 'block';
                    } else {
                        campoTexto.style.display = 'none';
                        campoTexto.querySelector('input').value = '';
                    }
                });
            });
        }

        // Radios que muestran campo "otro"
        activarCampoOtro('lengua_indigena', 'otro_container');
        activarCampoOtro('tratamiento_agua', 'otro_container2');
        activarCampoOtro('rol_familiar', 'otro_texto_container');
        activarCampoOtro('material_vivienda', 'otro_container3');
        activarCampoOtro('mayor_vivienda', 'otro_container4');
        activarCampoOtro('metarial_paredes', 'otro_container5');
        activarCampoOtro('combustible', 'otro_container6');
        activarCampoOtro('prin_ocupacion', 'otro_container7');
        activarCampoOtro('parentesco_persona', 'otro_container8');

        // Select que muestra campo "otra ocupación"
        const ocupacionSelect = document.getElementById('ocupacion');
        const otraOcupacionContainer = document.getElementById('otra_ocupacion_container');
        const otraOcupacionInput = document.getElementById('otra_ocupacion_texto');

        if (ocupacionSelect) {
            ocupacionSelect.addEventListener('change', function () {
                if (this.value === '19') {
                    otraOcupacionContainer.style.display = 'block';
                } else {
                    otraOcupacionContainer.style.display = 'none';
                    otraOcupacionInput.value = '';
                }
            });
        }

        // Mostrar campo de texto en opción "Otros" de ingresos (tabla)
        const otroIngresoSi = document.getElementById('otro_ingreso_si');
        const otroIngresoNo = document.getElementById('otro_ingreso_no');
        const otroIngresoContainer = document.getElementById('otro_ingreso_container');

        if (otroIngresoSi && otroIngresoNo && otroIngresoContainer) {
            otroIngresoSi.addEventListener('change', function () {
                if (this.checked) {
                    otroIngresoContainer.style.display = 'block';
                }
            });

            otroIngresoNo.addEventListener('change', function () {
                if (this.checked) {
                    otroIngresoContainer.style.display = 'none';
                    otroIngresoContainer.querySelector('input').value = '';
                }
            });
        }
    });
</script>



        



          

 

          <button type="submit" class="btn btn-success">Enviar</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
<script src="scripts.js"></script>

