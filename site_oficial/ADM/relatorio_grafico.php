<?php	
    $arquivocss = 'estilos'; // Não colocar extensão
    $titulo = "Produtos mais comprados";

    require "dados_relatorio.php";
?>
<link rel="stylesheet" href="../css/menuLateral.css">
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Produtos', 'Qtde']
        
          <?php 
            if($qtde>0)
                while($linha = pg_fetch_array($res)) {
                    echo ",['".$linha['descricao']."', ".$linha['qtdevendida']."]";
                }
          ?>
        ]);

        var options = {
          title: "<?php echo $titulo; ?>",
          is3D: false,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }

      function imprimir() {
          print();
      }
    </script>
  </head>
  <body>
  <header>
            
            <abbr class="header-adm" title="Perline"><img src="../img/PERLINE.png" width="70%"></abbr>
            
            <div class="header-btn">
                <abbr title="Home"><a href="../ADM/indexadm.php"><img class="header-btn-home" src="../img/icon_menu_home.png"></a></abbr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <abbr title="Local"><a href="#"><img class="header-btn-local" src="../img/icon_menu_mapa.png"></a></abbr>
                <?php
                    if($_SESSION['usuariologado']){
                        echo "<abbr title='Login'><a href='../usuario/logoff_back.php'><img class='header-btn-login' src='../img/icon_logoff.png' width='40px' height='40px'></a></abbr>&nbsp;&nbsp;&nbsp;&nbsp;";
                    }
                    else
                    {
                        echo "<abbr title='Login'><a href='../usuario/login.html'><img class='header-btn-login' src='../img/icon_menu_login.png'></a></abbr>&nbsp;&nbsp;&nbsp;&nbsp;";
                    }
                ?>

            </div>  
        </header>

    <div class="tpfix2">
                
                <div class="tpfix2-btn">
                    <center>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="prod" id="home-btn" title="Home" href="../ADM/indexadm.php">Home</a> 
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="prod" title="Produtos" href="../ADM/tabelaprodutos.php">Produtos</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="prod" title="Usuários" href="../ADM/tabelausuarios.php">Usuários</a>
                        <a class="prod" id="prod-sublinhado" title="Relatórios" href="relatorio_grafico.php">Relatórios</a>
                    </center>
                </div>
                </div>
      <div class="cada_prodindexfinal2">    
                        <div>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
    <a href="javascript:imprimir();">Imprimir</a>
          </div></div>
  </body>
</html>