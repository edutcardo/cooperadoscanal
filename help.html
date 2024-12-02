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
        }
        .card {
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            

        }
        .card i {
            padding-left: 10px;
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
    </style>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
        <div><h2>Selecione o mês: <select name="UC">
                <option value="1">Jan/2023</option>
                <option value="2">Fev/2023</option>
                <option value="3">Mar/2023</option>
                <option value="4">Abr/2023</option>
                <option value="5">Mai/2023</option></select></h2></div>

        <div class="card"><div><p>Fatura da usina janeiro/2023</p></div><div><i class="fa-solid fa-magnifying-glass"></i><i class="fa-solid fa-print"></i><i class="fa-solid fa-download"></i></div></div>
        <div class="card"><div><p>Demonstrativo janeiro/2023</p></div><div><i class="fa-solid fa-magnifying-glass"></i><i class="fa-solid fa-print"></i><i class="fa-solid fa-download"></i></div></div>
        <div class="card"><div><p>Comprovante de pagamento dividendos janeiro/2023</p></div><div><i class="fa-solid fa-magnifying-glass"></i><i class="fa-solid fa-print"></i><i class="fa-solid fa-download"></i></div></div>
        <h2>Contratos</h2>
        <div class="card"><div><p>Contrato de locação Canal Verde</p></div><div><i class="fa-solid fa-magnifying-glass"></i><i class="fa-solid fa-print"></i><i class="fa-solid fa-download"></i></div></div>
        <div class="card"><div><p>Contrato de comodato Canal Verde</p></div><div><i class="fa-solid fa-magnifying-glass"></i><i class="fa-solid fa-print"></i><i class="fa-solid fa-download"></i></div></div>

    </div>

    <script>
        function toggleSidebar() {
            var sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('expanded');
        }
    
    </script>
</body>
</html>