<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="bnt.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    

  <title>Pesquisa de Academias</title>

</head>
<body>
  
<div id="search-form">
   
  <div id="header">
    <h1>Pesquisa de Academias</h1>
      <form>

    <div>
      
  </div>
    <input type="submit" value="Pesquisar">
      <input type="text" placeholder="Digite o nome da Academia">

    </form>
</div>

  <div id="search-form">
    
    <div id="results">
      <div class="hotel">

    <div class="container-slider">
      <button id="prev-button"><img src="./arrow.png" alt="prev-button"></button>
        <div class="container-images">
          <img src="./imagem 2.PNG" alt="girl" class="slider">
            <img src="./img01.png" alt="girl" class="slider on">

    </div>
      <button id="next-button"><img src="./arrow.png" alt="next-button"></button>
        </div>

        <h2><a href="https://www.instagram.com/smartfit/">Visite a SmartFit</a></h2>
            <p>Descrição da academia.</p>
            <p>Preço: Plano Smart R$ 89,90 / mês</p>
            <p>Preço: Plano Black R$ 129,90 / mês</p><br>
            <div class="estrelas">
                <input type="radio" id="vazio" name="estrela" value="" checked>
                <label for="estrela_um"><i class="fa"></i></label>
                <input type="radio" id="estrela_um" name="estrela" value="1">
                <label for="estrela_dois"><i class="fa"></i></label>
                <input type="radio" id="estrela_dois" name="estrela" value="2">
                <label for="estrela_tres"><i class="fa"></i></label>
                <input type="radio" id="estrela_tres" name="estrela" value="3">
                <label for="estrela_quatro"><i class="fa"></i></label>
                <input type="radio" id="estrela_quatro" name="estrela" value="4">
                <label for="estrela_cinco"><i class="fa"></i></label>
                <input type="radio" id="estrela_cinco" name="estrela" value="5"><br><br>
            </div>
            
            <button onclick="enviar()">Enviar Feedback</button><br>
             
    </div> 
    
    
    <div class="hotel">
      <h2>Hotel 2</h2>
        <p>Descrição do hotel 2.</p><br>
       
        

        
      
  <?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg']."<br><br>";
			  unset($_SESSION['msg']);
		}
	?>
		
			<div class="estrelas">
				<input type="radio" id="vazio" name="estrela" value="" checked>
				
				<label for="estrela_um"><i class="fa"></i></label>
				<input type="radio" id="estrela_um" name="estrela" value="1">
				
				<label for="estrela_dois"><i class="fa"></i></label>
				<input type="radio" id="estrela_dois" name="estrela" value="2">
				
				<label for="estrela_tres"><i class="fa"></i></label>
				<input type="radio" id="estrela_tres" name="estrela" value="3">
				
				<label for="estrela_quatro"><i class="fa"></i></label>
				<input type="radio" id="estrela_quatro" name="estrela" value="4">
				
				<label for="estrela_cinco"><i class="fa"></i></label>
				<input type="radio" id="estrela_cinco" name="estrela" value="5"><br><br>

        
			


        
        <button onclick="enviar()">Enviar Feedback</button><br>
<script>

let resultado = enviar();
  function enviar() {
    var estrelas = document.getElementsByName("estrela");
    var valorTotal = 0;

    for (var i = 0; i < estrelas.length; i++) {
      if (estrelas[i].checked) {
        valorTotal += parseInt(estrelas[i].value);
      }
    }

    ("Valor total das estrelas: " + valorTotal);
  }
</script>
        


        
      </div>
    </div>

    </label>

  
    <button onclick="cadastrar()">Cadastrar</button><br>

    <button onclick="redirecionar()">Login</button>
  
    <script>

  
      function redirecionar() {
        // Redireciona para a outra página
        window.location.href = 'login.php';
      }

      function cadastrar() {
    // Redireciona para a outra tela
    window.location.href = 'cadastro.php';
  }

    </script>


<script src="slide.js" ></script>
<script src="script.js"></script>

  </div>
</body>
</html>