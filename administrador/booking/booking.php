<?php session_start() ?>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema de reserva de ticket tusolutionweb</title>

  <link rel="stylesheet" type="text/css" href="semantic/semantic.min.css">
  <script src="semantic/jquery.min.js"> </script>
  <script src="semantic/semantic.min.js"></script>
  <link href="semantic/datepicker.css" rel="stylesheet" type="text/css">
  <script src="semantic/datepicker.js"></script>
  <script src="nav.js"></script>

  <style>
    body {
      background-color: f1f1f1;
    }
    a {
      cursor: pointer;
    }
  </style>
</head>

<body>
  <div class="ui inverted huge borderless fixed fluid menu">
    <a class="header item">SISTEMA DE RESERVA DE BOLETOS tusolutionweb</a>
  </div><br>


  <div class="ui fluid container center aligned" style="cursor:pointer;margin-top:40px">
    <div class="ui unstackable tiny steps">
      <div class="step" onclick="booking()">
        <i class="plane icon"></i>
        <div class="content">
          <div class="title">Detalles de reserva</div>
          <div class="description">Información de viaje y reserva</div>
        </div>
      </div>
      <div class="step disabled" onclick="contact()" id="contactbtn">
        <i class="truck icon"></i>
        <div class="content">
          <div class="title">Detalles</div>
          <div class="description">Información del contacto</div>
        </div>
      </div>
      <div class="disabled step" id="billingbtn" onclick="billing()">
        <i class="money icon"></i>
        <div class="content">
          <div class="title">Facturación</div>
          <div class="description">Pago y verificación </div>
        </div>
      </div>
      <div class="disabled step" onclick="confirmdetails()" id="confimationbtn">
        <i class="info icon"></i>
        <div class="content">
          <div class="title">Confirmar detalles</div>
          <div class="description"> Verificar detalles de la orden
          </div>
        </div>
      </div>
      <div class="disabled step" id="finishbtn">
        <i class="info icon"></i>
        <div class="content">
          <div class="title">Terminar e imprimir</div>
          <div class="description">Ticket de impresión</div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <div id="dynamic">

    <div class="ui container text" id="booking-page">
      <div class="ui attached message">
        <div class="header">Información de reserva</div>
        <div class="header">Solicitar Ref: <span style="color:red;font-size:15px"><?php echo $_SESSION['ORDERREF'] ?> <a href='index.php'>Cancelar orden
            </a></span> </div>
        <p>Ingrese la información de reserva de viaje</p>
      </div>

      <form class="ui form attached fluid loading segment" onsubmit="return contact(this)">
        <div class="field">
          <label>Destino</label>
          <div class="field">
            <select required id="destination">
              <option value="" selected disabled>--Destino de viaje--</option>
              <option>MOMBASA to NAKURU</option>
              <option>NAKURU to MOMBASA</option>
              <option>NAIROBI to NAKURU</option>
              <option>NAKURU to NAIROBI</option>
            </select>
          </div>
        </div>
        <div class="field">
          <label>Clase de viaje</label><span><a href="home.php">Learn more</a><i> sobre clases de viaje</i></span>
          <div class="field">
            <select name="gender" required id="travelclass">
              <option value="" selected disabled>--Clase de viaje--</option>
              <option>Viajes de alta clase</option>
              <option>Viajes de clase media</option>
              <option>Viajes de clase baja</option>
              <option>Necesidades especiales de viaje</option>
            </select>
          </div>
        </div>
        <div class="two fields">
          <div class="field">
            <label>Numero de asientos</label>
            <input placeholder="Number of Seats" type="number" id="seats" min="1" max="72" value="1" required>
          </div>
          <div class="field">
            <label>Fecha de viaje</label>
            <input type="text" readonly required id="traveldate" class="datepicker-here form-control" placeholder="ex. August 03, 1998">
          </div>
        </div>
        <div style="text-align:center">
          <div><label>Asegúrese de que todos los detalles se hayan llenado correctamente</label></div>
          <button class="ui green submit button">Enviar detalles</button>
        </div>
      </form>
    </div>


    <div class="ui container text" id="contact-page" style="display:none">
      <div class="ui attached message">
        <div class="header">Ingrese sus detalles del cliente! </div>
        <div class="header">Order Ref: <span style="color:red;font-size:15px"><?php echo $_SESSION['ORDERREF'] ?> <a href='index.php'> Cancelar orden</a></span> </div>
        <p>Complete los campos requeridos</p>
      </div>
      <form class="ui form attached fluid loading segment" onsubmit="return billing(this)">
        <div class="field">
          <label>Nombre completo</label>
          <input placeholder="Full name" type="text" id="fullname" required>
        </div>

        <div class="field">
          <label>Contacto / Móvil o dirección de correo electrónico</label>
          <input placeholder="Mobile No/Contact or Email address" type="text" id="contact" required>
        </div>

        <div class="field">
          <label>Género</label>
          <div class="field">
            <select name="gender" required id="gender">
              <option value="" selected disabled>--Elige género--</option>
              <option value="MALE">Masculino</option>
              <option value="FEMALE">Femenino</option>
            </select>
          </div>
        </div>

        <div style="text-align:center">
          <div><label>Asegúrese de que todos los detalles se hayan llenado correctamente</label></div>
          <button class="ui green submit button">Enviar detalles</button>
        </div>

      </form>
    </div>

    <div class="ui container text" id="billing-page" style="display:none">
      <div class="ui attached message">
        <div class="header">Validar información de pago</div>
        <div class="header">Solicitar Ref: <span style="color:red;font-size:15px"><?php echo $_SESSION['ORDERREF'] ?> <a href='index.php'>Cancel Order</a></span> </div>
        <p>Ingrese Detalles de pago para continuar</p>
      </div>

      <form class="ui form attached fluid loading segment" onsubmit="return confirmdetails(this)">
        <div class="field">
          <label>Payment</label>
          <select name="gender" required id="paymentmethod">
            <option value="" selected disabled>Forma de pago</option>
            <option value="MPESA">MPESA</option>
            <option value="KCD_BANK">KCB</option>
            <option value="EQUITY_BANK">EQUITY BANK</option>
          </select>
        </div>
        <div class="field">
          <label>ID de transacción</label>
          <div class="ui icon input">
            <input placeholder="Transaction Code" type="text" required id="codebox">
            <i class="payment icon"></i>
          </div>
        </div>

        <div class="field">
          <label>Confirmar cantidad (Ksh)</label>

          <div class="ui icon input">
            <input value="52.03" type="text" id="amount" readonly>
          </div>
        </div>
        <div style="text-align:center">
          <button class="ui green submit button">Proceder</button>
        </div>
      </form>
      <div class="ui bottom attached warning message"><i class="icon help"></i><b id="payment-info"></b></div>
    </div>


    <div class="ui text container" id="confirmdetails-page" style="display:none">
      <div class="ui positive message">
        <b>Antes de continuar, vuelva a verificar los siguientes detalles que proporcionó</b><br>
        <i>Es posible que no se vuelva a imprimir el ticket, por lo tanto, los detalles que proporcionó deben ser válidos.</i>
        <br>
        <div class="ui horizontal divider">Los detalles proporcionados</div>
        <div id="details"></div>
        <div class="ui horizontal divider">Confirmar detalles</div>
        <div class="ui fluid container center aligned">
          <a class="ui button green" onclick="senddata()">SÍ | Confirmar</a>
        </div>
      </div>
    </div>

  </div>
</body>

</html>