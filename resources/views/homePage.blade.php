<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Commune Ain Bouali | جماعة عين بوعلي</title>
<link rel="stylesheet" href="{{ asset('css/main.css') }}">

</head>
<body>
  <header>
    <h1><span>Commune</span> Ain Bouali | <span dir="rtl">جماعة عين بوعلي</span></h1>
    <nav>
      <ul>
        <li><a href="{{route('services')}}">Services | الخدمات</a></li>
        <li><a href="{{route('informations')}}">Informations | معلومات</a></li>
       <li><a href="{{route('problems')}}">المشاكل | Problems</a></li>
        <li><a href="{{route('admin.Login')}}">Admin | الإدارة</a></li>
        <li><a href="{{route('citoyen.Login')}}">Plainte | الشكايات</a></li>
        <li><a href="{{route('contact')}}">Contact | اتصل بنا</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section class="hero">
      <h2>Bienvenue à Ain Bouali</h2>
      <p dir="rtl">مرحبًا بكم في عين بوعلي</p>
      <p>la commune ain bouali située dans la région de Sidi Ahmad Lbarnousi, province de Moulay Yacoub, près de Fès.</p>
      <p dir="rtl">جماعة قروية تقع في منطقة سيدي أحمد البرنوصي، إقليم مولاي يعقوب، بالقرب من مدينة فاس.</p>
    </section>
     <div class="map">
       <img src="{{ asset('images/map.png') }}" alt="Paysage 2" />
     </div>
    <section class="about">
      <h3>À propos de la commune | معلومات عن الجماعة</h3>
      <p>Ain Bouali est connue pour ses paysages agricoles, ses habitants chaleureux, et son lien avec la tradition marocaine authentique.</p>
      <p dir="rtl">تشتهر عين بوعلي بطبيعتها الفلاحية، وسكانها الطيبين، وارتباطها بالتقاليد المغربية الأصيلة.</p>
    </section>

    <section class="features">
      <div class="feature">
        <h4>Population | عدد السكان</h4>
        <p>Environ 12 354 habitants, principalement dans des zones rurales.</p>
        <p dir="rtl">يبلغ عدد السكان حوالي 12354 نسمة، يقطنون أغلبهم في المناطق القروية.</p>
      </div>
      <div class="feature">
        <h4>Emplacement | الموقع الجغرافي</h4>
        <p>Située à proximité de Moulay Yacoub et des sources thermales célèbres de la région.</p>
        <p dir="rtl">تقع بالقرب من مولاي يعقوب والعيون الساخنة المشهورة بالمنطقة.</p>
      </div>
    </section>

    <section class="gallery">
      <h3>Galerie | معرض الصور</h3>
      <div class="photos">
       <img src="{{ asset('images/img2.jpg') }}" alt="Paysage 2" />
        <img src="{{ asset('images/img1.webp') }}" alt="Paysage 2" />
         <img src="{{ asset('images/img4.jpg') }}" alt="Paysage 2" />
     
      </div>
    </section>

    <section class="cta">
      <p>Pour toute information complémentaire, n'hésitez pas à nous contacter.</p>
      <p dir="rtl">لأي استفسار إضافي، لا تترددوا في التواصل معنا.</p>
      <a class="btn" href="contact/contact.html">Contactez-nous | اتصل بنا</a>
    </section>
  </main>

  <footer>
    <p>&copy; 2025 Commune Ain Bouali - تصميم مشترك بالحب 🇲🇦</p>
  </footer>
</body>
</html>
