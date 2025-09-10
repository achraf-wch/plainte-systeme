<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>اتصل بنا | Contactez-nous</title>
    @vite(['resources/js/app.js', 'resources/sass/app.scss'])
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
  <style>
    .contact-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 2rem;
      padding: 2rem;
    }

    .contact-card {
      background: #fff;
      padding: 1.5rem;
      border-right: 5px solid var(--green-light);
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      text-align: center;
    }

    .contact-card h2 {
      color: var(--green-dark);
      margin-bottom: 1rem;
    }

    .contact-card ul {
      list-style: none;
      padding: 0;
    }

    .contact-card li {
      margin: 1rem 0;
    }

    .contact-card a {
      font-size: 2rem;
      color: var(--green-dark);
      transition: color 0.3s;
    }

    .contact-card a:hover {
      color: var(--green-light);
    }

    .contact-card h3 {
      margin-top: 0.5rem;
      font-size: 1rem;
    }


  </style>
</head>

<body>
  <header>
    <nav>
      <ul>
        <li><a href="{{route('homePage')}}">الرئيسية | Home</a></li>
        <li><h2>اتصل بنا | Contact</h2></li>
      </ul>
    </nav>
  </header>

  <main>
    <section class="hero">
      <h2>وسائل الاتصال بالجماعة والمطور</h2>
      <p>Vous pouvez nous contacter via les réseaux sociaux ou par e-mail</p>
    </section>

    <section class="contact-container">
      <div class="contact-card">
        <h2>جماعة عين بوعلي | Commune Ain Bouali</h2>
        <ul>
          <li><a href="#"><i class="fas fa-envelope"></i></a><h3>Email</h3></li>
          <li><a href="#"><i class="fab fa-whatsapp"></i></a><h3>WhatsApp</h3></li>
        </ul>
      </div>

      <div class="contact-card">
        <h2>المطور | Développeur</h2>
        <ul>
          <li><a href="mailto:ahcrafwandich1@gmail.com"><i class="fas fa-envelope"></i></a><h3>Email</h3></li>
          <li><a href="tel:+212622236208"><i class="fab fa-whatsapp"></i></a><h3>WhatsApp</h3></li>
          <li><a href="https://www.instagram.com/achraf_wandich" target="_blank"><i class="fab fa-instagram"></i></a><h3>Instagram</h3></li>
        </ul>
      </div>

     
    </section>
  </main>

  <footer>
    <p>&copy; 2025 جماعة عين بوعلي - Commune Ain Bouali</p>
  </footer>
</body>
</html>
