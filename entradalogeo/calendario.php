<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario Simple</title>
    <link rel="stylesheet" href="css/calendario style.css">
    <link rel="website icon" type="png"
    href="img/logo_on_board_2-removebg-preview.png">
    <script src="javascript/calendario funcionamiento.js"></script>
</head>
<body>
<div class="buscador">
    <input type="text" id="clases" placeholder="Buscar...">
    <button onclick="search()">Buscar</button>
    <ul id="resultados"></ul>
</div>
    <div class="contenedor-lista-mes">
        <details>
            <summary>Mes</summary>
            
            <p>Enero</p>
            <p>Febrero</p>
            <p>Marzo</p>
            <p>Abril</p>
            <p>Mayo</p>
            <p>Junio</p>
            <p>Julio</p>
            <p>Agosto</p>
            <p>Septiembre</p>
            <p>Octubre</p>
            <p>Noviembre</p>
            <p>Diciembre</p>
        </details>
    </div>
    <table class="calendar">
        <thead>
            <tr>
                <th class="header">Lu</th>
                <th class="header">Mar</th>
                <th class="header">Mié</th>
                <th class="header">Jue</th>
                <th class="header">Vie</th>
                <th class="header">Sáb</th>
                <th class="header">Dom</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="empty"></td>
                <td class="empty"></td>
                <td class="empty"></td>
                <td class="day">1</td>
                <td class="day">2</td>
                <td class="day">3</td>
                <td class="day">4</td>
            </tr>
            <tr>
                <td class="day">5</td>
                <td class="day">6</td>
                <td class="day">7</td>
                <td class="day">8</td>
                <td class="day">9</td>
                <td class="day">10</td>
                <td class="day">11</td>
            </tr>
            <tr>
                <td class="day">12</td>
                <td class="day">13</td>
                <td class="day">14</td>
                <td class="day">15</td>
                <td class="day">16</td>
                <td class="day">17</td>
                <td class="day">18</td>
            </tr>
            <tr>
                <td class="day">19</td>
                <td class="day">20</td>
                <td class="day">21</td>
                <td class="day">22</td>
                <td class="day">23</td>
                <td class="day">24</td>
                <td class="day">25</td>
            </tr>
            <tr>
                <td class="day">26</td>
                <td class="day">27</td>
                <td class="day">28</td>
                <td class="day">29</td>
                <td class="day">30</td>
                <td class="day">31</td>
                <td class="empty"></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
