<!DOCTYPE html>
<html>
<head>
	<title>Pies</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
	<header>
		<div class="logo">
                    <a href="index.php"><img src="img/menu_.png" alt="Logo"></a>
		</div>
		<div class="header-images1">
			<img src="img/logo.png" alt="Header Image 1">
			
		</div>
            <div class="header-images2">
			<img src="img/cita-romantica.png" alt="Header Image 1">
			
		</div>
	</header>
   

		 
		<div class="container1">

 <div class="form-container">
    <h2>Contacto</h2>
    <form>
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" required>
      
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      
      <label for="precedimiento">procedimiento estetico:</label>
      <select name="procedimiento" >  
          <option value="1">
              Depilado de cejas 
          </option>
                    <option value="1">
              Manucura acrilica
          </option>
          
      </select>      
            <label for="precedimiento">Profesional:</label>
      <select name="procedimiento" >  
          <option value="1">
              Juanito 
          </option>
                    <option value="1">
              Diana 
          </option>
          
      </select> 
      
      
      <label for="date">fechas disponibles:</label>
      <input type="date" id="date" name="date" required>
      
      
      
      <button type="submit">Enviar</button>
    </form>
  </div>
  
  <div class="image-container">
    <img src="img/contacto.jpg" alt="Imagen">
  </div>
</div>

</body>
</html>