<header class="site-header">
  <div class="header-inner container">
    <a href="/">
      <img src="{{asset('/img/logo_beta.svg')}}" class="logo" alt="Ir al Home">
    </a>
    <a class="btn-highlight window-trigger" href="#">Pruébalo Gratis</a>
  </div>
</header>

<div class="window">
  <div class="window-inner">
    <div class="data">
      <img src="{{asset('/img/logo_beta.svg')}}">
      <h1>Reserva tu Cupo</h1>
      <p>Cras a est nisl. Nam congue eros vitae massa ultrices sagittis. Integer pharetra et tellus at luctus.</p>
      <form class="" action="index.html" method="post">
        <input type="text" name="" value="" placeholder="Ingresa tu Nombre">
        <input type="email" name="" placeholder="Ingresa tu Correo">
        <input type="text" name="" placeholder="Nombre del Centro deportivo">
        <input type="text" name="" placeholder="Ciudad">
        <input type="text" name="" placeholder="Cantidad de alumnos (aprox)">
        <input type="button" name="" value="Enviar">
      </form>
    </div>
    <div class="img" style="background-image: url('{{asset('/img/reserva_img.jpg')}}')">
    </div>
    <div class="close" id="close-trigger"></div>
  </div>
</div>
