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
            width: 33%;
        }
        .content2 {
            width: 33%;
            padding-left: 16px;
            align-items: right;
        }
        .content3 {
            width: 33%;
            padding-left: 16px;
            align-items: right;
        }
        .card {
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);


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
            width: 80%;
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
            margin-bottom: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            justify-content: space-between;
            margin-top: 20px;
            padding-left: 20px;
            padding-right: 20px;
            padding-top: 5px;
            padding-bottom: 5px;

        }
        .report {
            margin-top: 20px;
        }
        .textobranco{
            color: white;
        }
        .cardiconescuro{
            background-color: #3c85f6;
            border-radius: 5px;
            padding-left: 20px;
            padding-right: 20px;
            margin-bottom: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            justify-content: space-between;
            margin-top: 20px;
            align-items: center;
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
            <div class="cardicon">
            <div class="report">
            <h3><i class="fa-solid fa-coins"></i> Recebimentos</h3>
            <div class="row">
                <span><span class="color-dot green"></span>Geração</span>
                <span>13.616 kWh</span>
            </div>
            <div class="row">
                <span><span class="color-dot red"></span>Consumida</span>
                <span>100 kWh</span>
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
            <div class="row"></div>
            <div class="row">
                <span><b>Receita da Usina</b></span>
                <span><b>R$ 7.169,24</b></span>
            </div>
        </div>
        </div>

            <div class="cardicon">
            <div class="report">
            <h3><i class="fa-solid fa-piggy-bank"></i> Faturamento</h3>
            <div class="row">
                <span><b>Valor pendente</b></span>
                <span>R$ 230,50</span>
            </div>
            <div class="row">
                <span><b>Valor recebido</b></span>
                <span>R$ 7.168,24</span>
            </div>
            <div class="row">
                <span><b>Rebidos com atraso</b></span>
                <span>R$ 198,02</span>
            </div>
            <div class="row">
                <span><b>Juros e Multas</b></span>
                <span>R$ 5,52</span>
            </div>
            <div class="row"></div>
            <div class="row">
                <span><b>Total</b></span>
                <span><b>R$ 7.372,78</b></span>
            </div>
        </div>
        </div>
        </div>
        <div class="content2">

            <div class="cardicon">
            <div class="report">
            <h3><i class="fa-solid fa-piggy-bank"></i> Despesas do Consórcio</h3>
            <div class="row">
                <span><b>Fatura da Distribuidora</b></span>
                <span>-R$ 113,53</span>
            </div>
            <div class="row">
                <span><b>Gestão e Comerc.</b></span>
                <span>-R$ 952,30</span>
            </div>
            <div class="row"></div>
            <div class="row">
                <span><b>Total</b></span>
                <span><b>-R$ 1.065,83</b></span>
            </div>

        </div></div>

            <div class="cardicon">
            <div class="report">
            <h3><i class="fa-solid fa-coins"></i> Receita Tributável da Usina - SPE</h3>
            <div class="row">
                <span><b>Valor</b></span>
                <span><b>R$ 6.306,95</b></span>
            </div>
        </div>
        </div>

            <div class="cardicon">
            <div class="report">
            <h3><i class="fa-solid fa-wrench"></i> Deduções e Despesas</h3>
            <div class="row">
                <span><b>PIS/CONFINS</b></span>
                <span>R$ 0,00</span>
            </div>
            <div class="row">
                <span><b>Despesas</b></span>
                <span>R$ 0,00 </span>
            </div>
            <div class="row"></div>
            <div class="row">
                <span><b>EBITIDA</b></span>
                <span><b>R$ 6.306,95</b></span>
            </div>

        </div>
        </div>
        </div>


        <div class="content3">
            <div class="cardicon">
            <div class="report">
            <h3><i class="fa-solid fa-landmark"></i> Tributos</h3>
            <div class="row">
                <span><b>CSLL</b></span>
                <span>R$ 0,00</span>
            </div>
            <div class="row">
                <span><b>IRPJ</b></span>
                <span>-R$ 378,41</span>
            </div>
            <div class="row">
                <span><b>IRPJ Adicional</b></span>
                <span>R$ 0,00</span>
            </div>
            <div class="row"></div>
            <div class="row">
                <span><b>Total</b></span>
                <span><b>-R$ 378,00</b></span>
            </div>

        </div></div>

            <div class="cardicon">
            <div class="report">
            <h3><i class="fa-solid fa-coins"></i> Resultado Líquido da Usina</h3>
            <div class="row">
                <span>Total de dividendos</span>
                <span>R$ 5.928,54</span>
            </div>
            <div class="row">
                <span>Dividendos proporcionais (NC)</span>
                <span>R$ 0,00</span>
            </div>
            <div class="row"></div>
            <div class="row card">
                <span>Previsão de pagamento: 29/11</span>
                <span><button>Pago</button></span>
            </div>

        </div>
        </div>
            <div class="cardiconescuro">
            <div class="report">
            <div class="row">
                <span class="textobranco"><h3><b><i class="fa-solid fa-chart-line"></i> Rentabilidade Mensal do Investidor</b></h3></span>
                <span class="textobranco"><h3><b>1,97%</b></h3></span>
            </div>

        </div>
        </div>
        </div>

        </div>
    </div>
    

<script>
    function toggleSidebar() {
        var sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('expanded');
    }

    // Configuração do gráfico de economia
    var options = {
        chart: {
        type: 'bar',
        width: '80%', // Use valores em porcentagem ou pixels
        height: 200    // Ajuste a altura do gráfico
        },
        title: {
            text: 'Geração'
        },
        series: [{
            name: 'Economia',
            data: [16967, 15824, 13825, 12714, 13977, 18178] // Exemplo de dados
        }],
        xaxis: {
            categories: ['Jan/2023', 'Fev/2023', 'Mar/2023', 'Abr/2023', 'Mai/2023', 'Jun/2023']
        },
        colors: ['#006b3c']
    };

    var chart = new ApexCharts(document.querySelector("#economiaChart"), options);
    chart.render();

    var options = {
        chart: {
        type: 'line',
        width: '80%', // Use valores em porcentagem ou pixels
        height: 200    // Ajuste a altura do gráfico
        },
        title: {
            text: ''
        },
        series: [{
            name: 'Rentabilidade',
            data: [1.8, 1.7, 1.1, 1.45, 1.52, 2] // Exemplo de dados
        },
        {
            name: 'Media',
            data: [1.6, 1.6, 1.6, 1.6, 1.6, 1.6] // Exemplo de dados  
        }
        ],
        xaxis: {
            categories: ['Jan/2023', 'Fev/2023', 'Mar/2023', 'Abr/2023', 'Mai/2023']
        },
        colors: ['#006b3c', '#FF5733']
    };

    var chart = new ApexCharts(document.querySelector("#economiaChart2"), options);
    chart.render();
    
    var options = {
        chart: {
        type: 'bar',
        width: '80%', // Use valores em porcentagem ou pixels
        height: 200    // Ajuste a altura do gráfico
        },
        title: {
            text: ''
        },
        series: [{
            name: 'Energia injetada',
            data: [16390, 12661, 12071, 9000, 14250, 14648] // Exemplo de dados
        },
        {
            name: 'Saldo',
            data: [1889, 1126, 4407, 107, 844, 1360] // Exemplo de dados 
        }],
        xaxis: {
            categories: ['Jan/2023', 'Fev/2023', 'Mar/2023', 'Abr/2023', 'Mai/2023', 'Jun/2023']
        },
        colors: ['#006b3c', '#FF5733']
    };

    var chart = new ApexCharts(document.querySelector("#economiaChart3"), options);
    chart.render();
    var options = {
        chart: {
        type: 'bar',
        width: '80%', // Use valores em porcentagem ou pixels
        height: 200    // Ajuste a altura do gráfico
        },
        title: {
            text: ''
        },
        series: [{
            name: 'Energia injetada',
            data: [6234.19, 6064.80, 3830.40, 5137.43, 5388.52, 6975.58] // Exemplo de dados
        }],
        xaxis: {
        categories: ['Jan/2023', 'Fev/2023', 'Mar/2023', 'Abr/2023', 'Mai/2023', 'Jun/2023']
    },



    yaxis: {
        labels: {
            formatter: function (value) {
                return 'R$ ' + value.toFixed(2); // Exibe o valor com duas casas decimais
            }
        }
    },
    tooltip: {
        y: {
            formatter: function (value) {
                return 'R$ ' + value.toFixed(2); // Exibe o valor no tooltip com prefixo
            }
        }
    },
    colors: ['#006b3c']   
    };

    var chart = new ApexCharts(document.querySelector("#economiaChart4"), options);
    chart.render();


    
    
</script>
</body>
</html>