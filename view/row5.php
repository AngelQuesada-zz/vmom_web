<div class="row row5">
  <div class="col-lg-4 col-lg-offset-2 col-md-6 col-xs-12 col-sm-12">
    <form action="" method="POST"  role="form" class="col-md-9 go-right">
			<h2>CUÉNTAME TU PROYECTO</h2>
            <p>Deja tu consulta y te llamo gratis</p>
		<div class="form-group">
			<input id="nombre" name="nombre" type="text" class="form-control" placeholder="TU NOMBRE..." onfocus="this.placeholder = ''" onblur="this.placeholder = 'TU NOMBRE...'" required>
			<label for="nombre">TU NOMBRE</label>
		</div>
    <div class="form-group">
			<input id="email" name="email" type="email" class="form-control" placeholder="TU CORREO..." onfocus="this.placeholder = ''" onblur="this.placeholder = 'TU CORREO...'" required>
			<label for="email">TU CORREO</label>
		</div>
		<div class="form-group">
			<input id="telefono" name="telefono" type="tel" class="form-control" placeholder="TU TELÉFONO" onfocus="this.placeholder = ''" onblur="this.placeholder = 'TU TELÉFONO...'" required>
			<label for="telefono">TU TELÉFONO</label>
		</div>
		<div class="form-group">
			<textarea id="message" name="message" class="form-control" placeholder="ESCRIBE AQUÍ TU MENSAJE..." required></textarea>
		</div>
     <button type="submit" class="btn botonFormulario" name="submit" value="Submit">Enviar</button>
		</form>
  </div>

  <?php

  if(isset($_POST['submit'])){
      $to = "info@vmom.es"; // this is your Email address
      $from = $_POST['email']; // this is the sender's Email address
      $nombre = $_POST['nombre'];
      $telefono = $_POST['telefono'];
      $subject = "Mensaje desde desde www.vmom.es";
      $subject2 = "Copia de tu mensaje a vmom.es";
      $message = $nombre . "  con número ".$telefono." escribió lo siguiente:" . "\n\n"
      . $_POST['message'];
      $message2 = "Te dejo una copia del mensaje que me has enviado,  " . $nombre . ":\n\n"
      . $_POST['message'];

      $headers = 'Content-type: text/html; charset=utf-8' . "\r\n";
      $headers2 = 'Content-type: text/html; charset=utf-8' . "\r\n";
      mail($to,$subject,$message,$headers);
      mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
      echo"<script>alert('Gracias por tu mensaje! Me pondré en contacto contigo lo antes posible');</script>";
      header("Location: index.php");
      }
  ?>

  <div class="col-lg-4 col-md-6 col-xs-12 col-sm-12">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12709.339264104341!2d-3.480905!3d37.216026!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1eb5ab60fe21ea30!2sVMOM+ARQUITECTO+T%C3%89CNICO!5e0!3m2!1ses!2ses!4v1453032826562"
    width="100%" class="mapa" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
</div>
