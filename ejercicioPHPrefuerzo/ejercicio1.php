<?php 
/**
 * @author Adrián Oriola Martos
 */
echo '<!DOCTYPE html> 
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="horarioDAW.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Horario 2ºDAW</title>
    <table class="default">
        <h1>HORARIO 2ºDAW</h1>
        <tr>
          <th></th>
          <th>Lunes</th>
          <th>Martes</th>
          <th>Miércoles</th>
          <th>Jueves</th>
          <th>Viernes</th>
        </tr>
        <tr>
            <!-- hora --><td>14:10-15:05</td>
            <!-- lunes --><td rowspan="2" style="background-color: pink;">Desarrollo WEB en entorno-cliente</td>
            <!-- martes --><td rowspan="2" style="background-color: yellow;">Despliegue de aplicaciones WEB</td>
            <!-- miercoles --><td></td>
            <!-- jueves --><td rowspan="2" style="background-color: pink;">Desarrollo WEB en entorno-cliente</td>
            <!-- viernes --><td rowspan="2" style="background-color: orange;">Desarrollo WEB en entorno-servidor</td>
            
        </tr>
        <tr>
            <!-- hora --><td>15:05-16:00</td>
            <!-- lunes -->
            <!-- martes -->
            <!-- miercoles --><td rowspan="2" style="background-color: orange;">Desarrollo WEB en entorno-servidor</td>
            <!-- jueves -->
            <!-- viernes -->
            
        </tr>
        <tr>
            <!-- hora --><td>16:00-16:55</td>
            <!-- lunes --><td style="background-color: green;">EIE</td>
            <!-- martes --><td style="background-color: green;">EIE</td>
            <!-- miercoles -->
            <!-- jueves --><td style="background-color: orange;">Desarrollo WEB en entorno-servidor</td>
            <!-- viernes --><td style="background-color: green;">EIE</td>

        </tr>
        <tr>
            <!-- hora --><td></td>
            <!-- recreo --><td colspan="5">RECREO</td>
        </tr>
        <tr>
            <!-- hora --><td>17:15-18-10</td>
            <!-- lunes --><td rowspan="2" style="background-color: orange;">Desarrollo WEB en entorno-servidor</td>
            <!-- martes --><td style="background-color: lightsteelblue;">TUTORIA</td>
            <!-- miercoles --><td rowspan="2" style="background-color: blue;">Diseño de interfaces</td>
            <!-- jueves --><td style="background-color: orange;">Desarrollo WEB en entorno-servidor</td>
            <!-- viernes --><td rowspan="2" style="background-color: blue;">Diseño de interfaces WEB</td>

        </tr>
        <tr>
            <!-- hora --><td>18:10-19:05</td>
            <!-- lunes -->
            <!-- martes --><td rowspan="3" style="background-color: pink;">Desarrollo WEB en entorno-cliente</td>
            <!-- miercoles -->
            <!-- jueves --><td rowspan="2" style="background-color: yellow;">Despliegue de aplicaciones WEB</td>
            <!-- viernes -->
        </tr>
        <tr>
            <!-- hora --><td>19:05-20:00</td>
            <!-- lunes --><td rowspan="2" style="background-color: blue;">Diseño de interfaces WEB</td>
            <!-- martes -->
            <!-- miercoles --><td rowspan="2" style="background-color: yellow;">Despliegue de aplicaciones WEB</td>
            <!-- jueves -->
            <!-- viernes -->
        </tr>
        <tr>
            <!-- hora --><td>20:00-20:55</td>
            <!-- lunes -->
            <!-- martes -->
            <!-- miercoles -->
            <!-- jueves -->
            <!-- viernes -->
        </tr>
        
        
    </table>
  </head>
  <body></body>
</html>
'
?>