<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,100..900;1,100..900&family=Inter:wght@100..900&display=swap" rel="stylesheet">
    
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            padding-top: 45px; /* Garante espaço abaixo da topbar */
        }
        a,p {
            font-family: Epilogue !important;
        }
        .sidebar {
            width: 60px;
            background-color: #006b3c;
            transition: width 0.3s;
            overflow: hidden;
            position: fixed; /* Torna a sidebar fixa */
            z-index: 2; /* Mantém a sidebar acima de outros elementos */
            height: 100vh; /* Altura total da tela */
            top: 0; /* Começa do topo */
            left: 0; /* Fixa na lateral esquerda */
        }

        .sidebar:hover {
            width: 200px;

        }
        .sidebar a {
            display: flex; /* Ativa o layout flexível */
            align-items: center; /* Centraliza verticalmente o conteúdo */
            justify-content: flex-start; /* Centraliza horizontalmente (altere para `center` se necessário) */
            padding: 10px; /* Ajusta o espaçamento interno */
            color: #333;
            text-decoration: none;
            position: relative;
            z-index: 2;
            gap: 10px; /* Espaço entre ícone e texto */
            margin-left: 8px;
            margin-top: 24px;
        }
        .sidebar a:hover {
            background-color: #ddd;
        }
        .sidebar a .text {
            display: none; /* Oculta o texto por padrão */
            margin-left: 10px; /* Adiciona espaçamento entre ícone e texto */
        }
        .sidebar:hover a .text {
            display: inline-block; /* Exibe o texto quando a barra está em hover */ 
            color: white; /* Cor branca */
        }
        .sidebar:hover .span {
            text-decoration: none;
            text-align: center;
            margin: 0;
        }
        .sidebar img {
            width: 100%; /* Adapta a largura ao contêiner */
            height: 40px; /* Mantém a proporção da altura */
            transition: transform 0.3s, filter 0.3s; /* Suaviza a transição */
            object-fit: contain; /* Garante que a imagem seja ajustada sem distorção */
        }

        .sidebar:hover img {
            content: url('logohover.png'); /* Substitui a imagem por outra */
            filter: brightness(1.2); /* Torna a imagem um pouco mais brilhante (opcional) */
            transform: scale(1.9); /* Aumenta a imagem de forma proporcional (opcional) */
        }
        .sidebar:hover ~ .topbar {
            margin-left: 200px; /* Alinha com a sidebar expandida */
            width: calc(100% - 200px); /* Ajusta a largura para o novo espaço disponível */
        }
        .sidebar:hover ~ .content {
            margin-left: 250px; /* Ajusta para acompanhar a largura expandida da sidebar */
        }
        .toggle-btn {
            position: absolute;
            top: 10px;
            right: -30px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            border-radius: 5px;
            cursor: pointer;
            padding: 5px;
            text-align: center;
        }
        .content {
            flex-grow: 1;
            padding: 20px;
            transition: margin-left 0.3s ease; /* Transição suave */
            margin-left: 60px;
            display: flex;
        }
        .content1 {
            width: 30%;
        }
        .content2 {
            width: 70%;
            padding-left: 16px;
            align-items: right;
        }
        .card {
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            justify-content: space-between;
            align-items: center;
            display: flex;
        }
        .card i{
            padding-left: 20;
        }
        .card p {
            margin: 10px 0;
            font-size: 16px;
        }
        .subcard {
            display: flex;
            justify-content: space-between;
        }

        
        .chart {
            height: 300px;
            background-color: #f8f8f8;
            border-radius: 5px;
            margin-top: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .logo {
            width: 40px; /* Define o tamanho inicial da logo */
            height: 40px; /* Ajuste as dimensões conforme necessário */
            margin: 10px 0;
            transition: width 0.3s, height 0.3s;
            padding: 0px;
            padding-top: 8px;

        }
        .sidebar:hover .logo {
            width: 80px; /* Tamanho maior quando expandido */
            height: 80px;
            padding: 8px;
        }

        .topbar {
            width: calc(100% - 60px); /* Largura inicial, descontando a largura inicial da sidebar */
            height: 45px;
            background-color: #F5F5F5;
            color: black;
            justify-content: space-between;
            padding: 10px 20px;
            position: fixed;
            top: 0;
            z-index: 3; /* Garante que esteja acima da sidebar */
            margin-left: 60px; /* Inicialmente alinhado com a sidebar retraída */
            display: flex;
            align-items: center;
            transition: margin-left 0.3s ease, width 0.3s ease; /* Transições suaves */
            font-weight: bold; /* Negrito */

        }
        .topbar a {
            color: black;
            padding: 15px 0px;
            text-decoration: none;
            text-align: center;
            font-weight: bold; /* Negrito */
            font-size: 13px;
            margin-right: 40px;
            
        }
        

        .formcrud {
            padding-top: 30px;
        }
        .chart2 {
            display: flex;
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .containerlogo{
            width: 100%; /* Define o tamanho inicial da logo */
            height: 130px; /* Ajuste as dimensões conforme necessário */
            display: flex;
            justify-content: center;
            align-items: center;

        }
        .icon{
            color: white;
        }
        .formcrud{
            margin-top: 30px;
        }
        table {
            width: 100%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f4f4f4;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .color-dot {
            height: 12px;
            width: 12px;
            border-radius: 50%;
            display: inline-block;
            margin-right: 8px;
        }
        .green { background-color: #66c6a3; }
        .red { background-color: #e45a67; }
        .blue { background-color: #3c85f6; }
        .yellow { background-color: #f1c40f; }
        .row {
            display: flex;
            justify-content: space-between;
            padding: 4px 0;
            font-family: Arial, sans-serif;
            font-size: 14px;
        }
        .cardicon{
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            justify-content: space-between;

        }
        .progress-bar {
            width: 100%;        /* Largura da barra */
            background-color: #e0e0e0; /* Cor do fundo da barra */
            border-radius: 8px; /* Bordas arredondadas */
            overflow: hidden;   /* Garante que o progresso não "vaze" */
            height: 10px;       /* Altura da barra */
            margin-top: 5px;
        }

        .progress {
            width: 0%;               /* Largura inicial da barra de progresso */
            height: 100%;            /* Preenche toda a altura do contêiner */
            background-color: #4caf50; /* Cor do progresso */
            transition: width 0.3s ease; /* Animação suave ao alterar o progresso */
        }



    </style>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<body>
    <div class="sidebar" id="sidebar">
        <div class="toggle-btn" onclick="toggleSidebar()">☰</div>
        <div class="containerlogo"> 
            <img src="logo.png" alt="Logo" class="logo"> 
        </div> 
        <a href="painel.php" class="home">
            <i class="fa-solid fa-coins icon"></i> <span class="text">DRE</span>
        </a>
        <a href="reports.php">
            <i class="fa-solid fa-solar-panel icon"></i><span class="text">Usinas</span>
        </a>
        <a href="calendar.php">
            <i class="fa-solid fa-gauge icon"></i> <span class="text">Dashboard</span>
        </a>
        <a href="help.php">
            <i class="fa-solid fa-paste icon"></i><span class="text">Documentos</span>
        </a>
    </div>
    <div class="topbar">
        <div><i class="fa-regular fa-lightbulb"></i>  Pedro Mascarenhas Bastos</div>
        <div>
            <a href="#uc"><i class="fa-regular fa-sun"></i> Usina: <select name="UC">
                <option value="sim">UC: 41456511</option>
                <option value="nao">UC: 11466522</option>
            </select></a>
            <a href="#about"><i class="fa-solid fa-chart-pie"></i> Percentual: 100%</a>
            <a href="#contact"><i class="fa-solid fa-plug"></i> UC: 123456789</a>
            <a href="#contact"><i class="fa-solid fa-leaf"></i> Cap. instalada: 75 kW</a>
            <a href="#about"><i class="fa-solid fa-location-dot"></i> Localização: Maringá, PR</a>
            <a href="#contact">Sair <i class="fa-solid fa-door-open"></i> </a>
        </div>
    </div>
    <div class="content">
        
        <div class="content1">
            <h4>Selecione o mês: <select name="UC">
                <option value="sim">Jan/2023</option>
                <option value="nao">Fev/2023</option>   
                <option value="sim">Abr/2023</option>
                <option value="nao">Mai/2023</option>
                <option value="sim">Jun/2023</option>

            </select></a></h4>
            <h2><i class="fa-regular fa-chart-bar"></i> Movimentações</h2>
            <div class="cardicon">
            <div class="report">
            <div class="row">
                <span><span class="color-dot green"></span>Geração</span>
                <span>13.616 kWh</span>
            </div>
            <div class="row">
                <span><span class="color-dot red"></span>Consumo da usina</span>
                <span>100 kWh</span>
            </div>
            <div class="row">
                <span><span class="color-dot red"></span>Energia retida</span>
                <span>100 kWh</span>
            </div>
            <div class="row">
                <span><span class="color-dot green"></span>Injetada</span>
                <span>13.407 kWh</span>
            </div>
            <div class="row">
                <span><span class="color-dot blue"></span>Compensada</span>
                <span>13.048 kWh / 13.787 kWh</span>
            </div>
            <div class="row">
                <span><span class="color-dot yellow"></span>Saldo</span>
                <span>739 kWh</span>
            </div>
        </div>
        </div>

            <h2><i class="fa-regular fa-chart-bar"></i> Beneficiárias</h2>
            <div class="cardicon">
            <div class="report">
            <div class="row">
                <span><span class="color-dot green"></span>Geração</span>
                <span>13.616 kWh</span>
            </div>
            <div class="row">
                <span><span class="color-dot red"></span>Consumo da usina</span>
                <span>100 kWh</span>
            </div>
            <div class="progress-bar">
                <div class="progress" style="width: 75%;"></div>
            </div>

        </div>
        </div>
        </div>
        <div class="content2">
            <h4 class="ajuda"><button><i class="fa-solid fa-circle-info"></i> Ajuda</button></h4>
            <h2><i class="fa-solid fa-chart-line"></i>Rentabilidade</h2>
            <table>
                <thead>
                    <tr>
                        <th>U.C.</th>
                        <th>Consumo (kWh)</th>
                        <th>Injetada</th>
                        <th>Injeção (R$)</th>
                        <th>Saldo (kWh)</th>
                        <th>Saldo (R$)</th>
                        <th>Saldo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>285210</td>
                        <td>3.492 kWh</td>
                        <td>3.645 kWh</td>
                        <td>R$ 1979,96</td>
                        <td>153 kWh kWh</td>
                        <td>R$ 86,75</td>
                        <td>botão</td>
                    </tr>
                    <tr>
                        <td>635003</td>
                        <td>1.461 kWh</td>
                        <td>1.548 kWh</td>
                        <td>R$ 828,39</td>
                        <td>87 kWh</td>
                        <td>R$ 49,33</td>
                        <td>botão</td>
                    </tr>
                    <tr>
                        <td>648138</td>
                        <td>1.245 kWh</td>
                        <td>1.365 kWh</td>
                        <td>R$ 705,92</td>
                        <td>120 kWh</td>
                        <td>R$ 68,04</td>
                        <td>botão</td>
                    </tr>
                    <tr>
                        <td>752033</td>
                        <td>2.350 kWh</td>
                        <td>2.500 kWh</td>
                        <td>R$ 1332,45</td>
                        <td>150 kWh</td>
                        <td>R$ 85,05</td>
                        <td>botão</td>
                    </tr>
                    <tr>
                        <td>884149</td>
                        <td>4.500 kWh</td>
                        <td>4.729 kWh</td>
                        <td>R$ 2.551,50</td>
                        <td>229 kWh</td>
                        <td>R$ 129,84</td>
                        <td>botão</td>
                    </tr>

                </tbody>
            </table>

 

            </div>

        </div>
    </div>

<script>
    function toggleSidebar() {
        var sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('expanded');
    }

    // Configuração do gráfico de economia

</script>
</body>
</html>