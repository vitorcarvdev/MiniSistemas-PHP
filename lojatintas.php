<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Calculadora</title>
<meta name="keywords" content="Calculo de tinta, tinta por metro quadrado, online">
<script src="js/script.js"></script>
<link rel="stylesheet" type="text/css" href="styles/style.css" />
</head>

<body>

<?php

?>

<div id="conteudo">
    <h1>Calculo de uso de tinta por metro quadrado</h1>

    <p>Olá, estou disponibilizando este sistema online para lojas de tintas com o objetivo de calcular a quantidade de tinta por metros quadrados, você possa usar gratuitamente em caso de melhorias por favor envie para <a href="mailto:programador@vitorcarvalho.dev.br">programador@vitorcarvalho.dev.br</a><br/></p>
    
    <!-- 

    Manual

    Considere que a cobertura da tinta é de 1 litro para cada 6 metros quadrados e que a tinta é vendida em latas de 18 litros , que custam R$ 80,00

    Informe ao usuário as quantidades de tinta a serem compradas

    1 litro pinta = 6 metros
    18L pinta - 108 m2
    1,6 pinta - 21,6 m2

    Exemplo:
    200 m2 = 200 / 6 = 33,33 litros + 10% para sobrar um pouco de tinta

    Tinta
    33,3 / 18L = 1,85 latas (arredondar para cima = 2) 2 * R$80 = 160
    33,3 / 3,6 = 9,25 latas (arredondar para cima = 10) 10 * R$25 = 250

     -->
    
<p><a href="https://www.php.net/manual/en/index.php" target="_blank">Manual do PHP</a> | <a href="index.php">Voltar para o Início</a></p>

    <div id="faixa-exercicio">
        <form id="form-caculadora" method="post" style="text-align:center;">

            <input name="MTdaarea" type="text" placeholder="Tamanho em M² da Área" /><br/>
            <p>Informações da tinta</p>
            <input name="vrdalata" type="text" placeholder="Valor da lata" /><br/>
            <input name="ltdalata" type="text" placeholder="Quantidade de litros na lata" /><br/>
            <input name="quantdemao" type="text" placeholder="Quantidade de demãos" /><br/>
            <input type="submit" value="Mostrar Resultado" /><br/>
        </form>

        <div id="faixa-resultado"  style="text-align:center; color:#fff; margin:20px auto;">
            É nessessário XX latas para pintar esta área<br/> Incluso 10% a mais que o calculado de tinta para ter uma sobra<br/>Valor total: XXX
        </div>
    </div>    
</div>
</body>
</html>
