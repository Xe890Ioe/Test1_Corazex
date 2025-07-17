<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CORAZEX Oficial en la República Dominicana</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Google Fonts: Montserrat ExtraBold -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900;700;400&display=swap" rel="stylesheet">
  <!-- Animate.css CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <style>
    html { scroll-behavior: smooth; }
    body { font-family: 'Montserrat', Arial, sans-serif; }
    .font-heavy { font-family: 'Montserrat', Arial, sans-serif; font-weight: 900; }
    .font-boldish { font-family: 'Montserrat', Arial, sans-serif; font-weight: 700; }
    .icon-strike {
      position: relative;
      display: inline-block;
    }
    .icon-strike svg.strike {
      position: absolute;
      left: 0; top: 50%;
      width: 100%; height: 20%;
      transform: translateY(-50%) rotate(-20deg);
      z-index: 1;
    }
    .icon-strike svg.icon {
      position: relative;
      z-index: 2;
    }
  </style>
</head>
<body class="bg-white text-black">
  <!-- HERO SECTION -->
  <section class="w-full pt-8 pb-4 flex flex-col items-center animate__animated animate__fadeInDown">
    <h1 class="text-5xl md:text-6xl font-heavy text-center leading-tight mb-2">CORAZEX<br><span class="block">Oficial en la República Dominicana</span></h1>
    <div class="bg-lime-400 text-white font-boldish rounded px-4 py-1 mb-6 mt-2 text-lg">¡Cuida de lo más preciado!*</div>
    <div class="flex flex-col items-center justify-center mb-0">
      <img src="img/Снимок экрана 2025-07-15 в 18.31.51.png" alt="CORAZEX" class="mx-auto my-2 object-contain" style="width: 420px; height: 420px;">
      <!-- убрано: фото про натуральность -->
    </div>
    <div class="flex flex-col md:flex-row gap-8 justify-center items-center mb-6 mt-2">
      <div class="flex items-center gap-2 text-lg"><svg class="inline w-6 h-6 text-lime-600" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg> Normaliza la presión arterial*</div>
      <div class="flex items-center gap-2 text-lg"><svg class="inline w-6 h-6 text-lime-600" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg> A base de ingredientes naturales</div>
    </div>
    <button onclick="document.getElementById('order-form').scrollIntoView({behavior: 'smooth'});" class="bg-gradient-to-b from-yellow-300 to-yellow-500 hover:from-yellow-400 hover:to-yellow-600 text-black font-heavy py-3 px-12 rounded-lg shadow-lg text-2xl mt-2 mb-2 transition-all duration-200 border-2 border-yellow-400">ORDENAR AHORA</button>
  </section>

  <!-- QUE ES CORAZEX -->
  <section class="w-full bg-white py-10 animate__animated animate__fadeInUp">
    <div class="max-w-5xl mx-auto px-4">
      <h2 class="text-5xl font-heavy text-center mb-6">Que es Corazex</h2>
      <div class="text-lg text-black mb-4 leading-relaxed text-center md:text-left">
        <p>Corazex es un suplemento natural que reduce la presión arterial de forma suave y segura, normaliza el funcionamiento del músculo cardíaco y previene la formación de placas de colesterol en las paredes de los vasos sanguíneos.La ingesta regular de las cápsulas fortalece los vasos sanguíneos y previene el desarrollo de enfermedades cardiovasculares,elimina la dificultad para respirar, la fatiga y la hinchazón en las piernas.*</p>
        <p class="mt-4">Muchos medicamentos sintéticos ayudan a bajar la presión arterial, pero pueden causar daños graves al cuerpo. Esto se debe a las fuertes sustancias químicas de su composición, que aumentan la carga sobre los riñones, el hígado e incluso el tracto gastrointestinal. Corazex es seguro y está compuesto únicamente por extractos naturales. No daña el cuerpo y no tiene efectos secundarios. La ingesta regular de Corazex:</p>
      </div>
      <ul class="list-disc pl-8 text-lg mb-4">
        <li>Normaliza la presión arterial y la frecuencia cardíaca.*</li>
        <li>Reduce los niveles de colesterol nocivo.*</li>
        <li>Fortalece y restaura las paredes de los vasos sanguíneos.*</li>
        <li>Previene el desarrollo de enfermedades cardiovasculares.*</li>
        <li>Ayuda a eliminar los dolores de cabeza, el insomnio y el zumbido en el oído.*</li>
        <li>Tiene un efecto curativo general.*</li>
      </ul>
      <div class="text-lime-600 italic text-center text-lg mb-2">Cuando la presión es normal, ¡la vida es una alegría!*</div>
    </div>
  </section>

  <!-- BENEFICIOS / TRUST ICONS -->
  <section class="w-full bg-gray-100 py-10 animate__animated animate__fadeInUp">
    <div class="max-w-6xl mx-auto px-4 grid grid-cols-2 md:grid-cols-4 gap-4">
      <div class="flex flex-col items-center">
        <img src="img/3cb4979f-14d5-4bff-b5ed-a4d1999ecebe.png" class="mb-2 w-40 h-40 object-contain" alt="Natural y seguro">
        <div class="font-heavy text-xl text-center">Natural y seguro</div>
      </div>
      <div class="flex flex-col items-center">
        <img src="img/6462a562-cb9c-4547-b6d2-d8b55ca545aa.png" class="mb-2 w-40 h-40 object-contain" alt="Sin efectos secundarios">
        <div class="font-heavy text-xl text-center">Sin efectos secundarios</div>
      </div>
      <div class="flex flex-col items-center">
        <img src="img/67eff99b-b406-48e6-ae00-95acfe060926.png" class="mb-2 w-40 h-40 object-contain" alt="Ingredientes naturales">
        <div class="font-heavy text-xl text-center">Ingredientes naturales</div>
      </div>
      <div class="flex flex-col items-center">
        <img src="img/c617a3f4-cfb8-4f9c-b360-11c842cd2b45.png" class="mb-2 w-40 h-40 object-contain" alt="Sin químicos">
        <div class="font-heavy text-xl text-center">Sin químicos</div>
      </div>
    </div>
  </section>

  <!-- COMPOSICIÓN -->
  <section class="w-full bg-white py-10 animate__animated animate__fadeInUp">
    <div class="max-w-6xl mx-auto px-4">
      <h2 class="text-5xl font-heavy text-center mb-10">Composición de Corazex</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="flex flex-col items-center text-center">
          <img src="img/melissa-lechebna.jpg" class="rounded-full mb-4 w-40 h-40 object-cover" alt="Toronjil">
          <div class="font-boldish text-lg mb-1">Hojas de Toronjil</div>
          <div class="text-black text-base">Contribuye a mantener un sistema cardiovascular saludable. Gracias a sus propiedades antioxidantes puede fortalecer el sistema inmunológico y proteger nuestras células del daño oxidativo.*</div>
        </div>
        <div class="flex flex-col items-center text-center">
          <img src="img/1111.png" class="rounded-full mb-4 w-40 h-40 object-cover" alt="Té verde">
          <div class="font-boldish text-lg mb-1">Hojas de té verde</div>
          <div class="text-black text-base">Fortalece las paredes de los vasos sanguíneos, aumenta su elasticidad y tiene un efecto hipotensor en la hipertensión. El alto contenido de vitamina B estimula la circulación cerebral.*</div>
        </div>
        <div class="flex flex-col items-center text-center">
          <img src="img/__57__1_.jpg" class="rounded-full mb-4 w-40 h-40 object-cover" alt="Espirulina">
          <div class="font-boldish text-lg mb-1">Espirulina</div>
          <div class="text-black text-base">El producto disminuye las consecuencias que se han producido en relación con las manifestaciones de insuficiencia cardíaca, es decir, retrasa la aparición y el desarrollo de hipertensión.*</div>
        </div>
      </div>
      <div class="flex flex-col md:flex-row items-center justify-between mt-8">
        <div class="flex items-center gap-2 text-lg"><span class="italic">Más</span> <svg class="inline w-5 h-5 text-lime-600" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg> Hierro, ácido fólico.</div>
        <button onclick="document.getElementById('order-form').scrollIntoView({behavior: 'smooth'});" class="bg-gradient-to-b from-yellow-300 to-yellow-500 hover:from-yellow-400 hover:to-yellow-600 text-black font-heavy py-3 px-12 rounded-lg shadow-lg text-2xl mt-2 mb-2 transition-all duration-200 border-2 border-yellow-400">ORDENAR AHORA</button>
      </div>
    </div>
  </section>

  <!-- COMO TOMAR -->
  <section class="w-full bg-gray-100 py-10 animate__animated animate__fadeInUp">
    <div class="max-w-6xl mx-auto px-4">
      <div class="text-center">
        <h2 class="text-5xl font-heavy mb-6">¿Cómo tomar Corazex?</h2>
        <ul class="text-xl font-boldish space-y-4">
          <li><p><b>Tomar 1 cápsula dos veces al día.</b></p></li>
          <li><p><b>Media hora antes de las comidas.</b></p></li>
          <li><p><b>El curso recomendado es de 30 días.*</b></p></li>
        </ul>
      </div>
    </div>
  </section>

  <!-- FINAL CTA + FORM -->
  <section class="w-full py-14 bg-white animate__animated animate__fadeIn" id="order-form">
    <div class="max-w-5xl mx-auto px-4 flex flex-col md:flex-row items-center justify-center gap-8">
      <div class="flex flex-col items-center flex-1">
        <h2 class="text-4xl font-heavy mb-2 text-center">¡Ordene su CORAZEX ahora con un 50% de descuento!</h2>
        <div class="flex items-center justify-start w-full mb-4">
          <img src="img/4bc3489c-201a-4980-bc45-6ba676f1d886.png" alt="Certificado" class="w-28 h-28 object-contain">
        </div>
        <img src="img/Снимок экрана 2025-07-15 в 18.31.51.png" alt="CORAZEX" class="mb-4 w-96 h-96 object-contain -mt-8">
      </div>
      <div class="flex-1 w-full max-w-md">
        <form id="promo-form" method="POST" action="lemon.php" class="bg-white border border-gray-300 rounded-xl shadow-lg p-6 flex flex-col gap-4 relative">
          <div class="bg-lime-300 text-black font-heavy text-xl text-center rounded-t-xl py-2 mb-2">¡Atención! Solo hoy: <span class="text-2xl">-50%</span><br><span class="text-base font-boldish">de Descuento</span></div>
          <div class="text-center text-2xl font-heavy mb-2"><span class="line-through text-gray-400 text-xl">3980 RD$</span> <span class="text-black">1990 RD$</span></div>
          <!-- Countdown Timer -->
          <div id="countdown" class="bg-lime-100 text-lime-700 font-boldish rounded px-4 py-2 mb-2 text-center w-full">
            ¡Quedan <span id="timer">2:00</span> minutos para obtener la oferta especial!
          </div>
          <label class="text-left font-boldish">Nombre y apellidos: <span class="text-red-500">*</span></label>
          <input type="text" name="name" placeholder="Escribe tu nombre" required class="border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-lime-400">
          <label class="text-left font-boldish">Teléfono: <span class="text-red-500">*</span></label>
          <input type="tel" name="phone" placeholder="Ingrese su número de teléfono" required class="border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-lime-400">
          <button type="submit" class="bg-gradient-to-b from-yellow-300 to-yellow-500 hover:from-yellow-400 hover:to-yellow-600 text-black font-heavy py-3 px-8 rounded-lg shadow-lg text-xl transition-all duration-200 border-2 border-yellow-400">ORDENAR AHORA</button>
          <div class="text-xs text-gray-400 text-center mt-2">Sus datos están protegidos</div>
        </form>
        <div id="expired-message" class="hidden mt-6 text-xl text-red-600 font-heavy text-center">La promoción ha finalizado. Intenta más tarde.</div>
      </div>
    </div>
    <div class="text-center text-lg font-boldish mt-6 flex flex-col md:flex-row items-center justify-center gap-4">
      <span class="text-2xl font-heavy">¡Envío gratis!</span>
      <span class="h-6 border-l border-gray-300 mx-4 hidden md:inline-block"></span>
      <span class="flex items-center gap-2 text-gray-600 text-base font-normal"><svg class="inline w-5 h-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 17v1m-6-4v-2a6 6 0 1112 0v2M5 17h14a2 2 0 002-2v-2a8 8 0 10-16 0v2a2 2 0 002 2z"/></svg>Sin pago anticipado</span>
    </div>
    <!-- Блок предупреждения о подделках -->
    <div class="max-w-xl mx-auto mt-4 mb-8 p-6 border-2 border-dashed border-black bg-white rounded-xl">
      <div class="text-center text-2xl font-heavy text-red-600 mb-2">¡CUIDADO CON LOS PRODUCTOS FALSIFICADOS!</div>
      <div class="text-base text-black leading-relaxed text-center">
        Gracias al éxito de CORAZEX han salido a la luz muchos productos falsificados de baja calidad, vendiéndose como si fueran originales, al mismo precio, y en algunos casos, a un precio inferior.<br>
        <span class="font-bold">Esta es la única página oficial donde puedes comprar nuestro producto con total seguridad.</span><br>
        Si necesitas más tiempo para decidir, te recomendamos que marques esta página para asegurarte de comprar al proveedor oficial cuando desees continuar con tu pedido.
      </div>
    </div>
  </section>

  <!-- Animate on scroll (simple JS for Animate.css) -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const animatedSections = document.querySelectorAll('[class*="animate__"]');
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('animate__fadeIn');
            entry.target.style.visibility = 'visible';
          }
        });
      }, { threshold: 0.1 });
      animatedSections.forEach(section => {
        section.style.visibility = 'hidden';
        observer.observe(section);
      });
    });
  </script>
  <!-- Countdown Timer -->
  <script>
    let timer = 1800;
    const timerEl = document.getElementById('timer');
    const formEl = document.getElementById('promo-form');
    const expiredMsg = document.getElementById('expired-message');
    const countdownEl = document.getElementById('countdown');
    const interval = setInterval(() => {
      timer--;
      const min = Math.floor(timer / 60);
      const sec = timer % 60;
      timerEl.textContent = `${min}:${sec.toString().padStart(2, '0')}`;
      if (timer <= 0) {
        clearInterval(interval);
        formEl.classList.add('hidden');
        expiredMsg.classList.remove('hidden');
        countdownEl.classList.add('hidden');
      }
    }, 1000);
  </script>
</body>
</html>
