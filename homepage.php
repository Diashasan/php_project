<?php
session_start();
include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gruzzik!</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="responsive.css">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar">
    <div class="logo">Gruzzik!</div>
    <ul class="nav-links">
      <li><a href="#home">Home</a></li>
      <li><a href="#artist">Artist</a></li>
      <li><a href="#playlists">Playlists</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
    <button class="logout-btn">
      <a href="index.php">Logout</a>
    </button>
  </nav>

  <!-- Header -->
  <section id="home">
  <header class="hero">
    <div class="hero-content">
      <h1>Welcome! Feel the Rythm Ladies and Gentlemen!</h1>
      <p>Discover, and listen to your favorite music playlists.</p>
    </div>
  </header>
  </section>
<!-- bagian artist-->
<section id="artist">
    <div class="artist main-container">
      <h1 class="pre-title">Popular Artists</h1>
      <p class="section-description">
        Discover your favorite artists and explore their top tracks.
      </p>
      <div class="artist-grid">
        <div class="artist-card">
          <img src="images/greenday.jpg" alt="Artist 1" class="artist-photo">
          <h3 class="artist-name">Green Day</h3>
          <p>Green Day adalah band punk rock legendaris asal Amerika Serikat yang dibentuk pada tahun 1987 di Berkeley, California. Band ini terdiri dari tiga anggota utama: Billie Joe Armstrong (vokalis utama dan gitaris), Mike Dirnt (bass dan vokal latar), dan Tré Cool (drummer). Green Day dikenal sebagai salah satu pelopor kebangkitan punk rock di era 1990-an, membawa genre ini ke arus utama dengan perpaduan melodi yang catchy, lirik yang sering kali penuh kritik sosial, dan energi panggung yang eksplosif.</p>
          <button class="view-btn">View Profile</button>
        </div>
        <div class="artist-card">
          <img src="images/radiohead.webp" alt="Artist 2" class="artist-photo">
          <h3 class="artist-name">Radiohead</h3>
          <p>Radiohead adalah band rock alternatif asal Inggris yang dibentuk pada tahun 1985 di Abingdon, Oxfordshire. Band ini terdiri dari Thom Yorke (vokalis utama, gitar, piano), Jonny Greenwood (gitar utama, keyboard, berbagai instrumen), Colin Greenwood (bass), Ed O'Brien (gitar ritme, vokal latar), dan Philip Selway (drum, perkusi). Radiohead dikenal karena eksplorasi musiknya yang inovatif, lirik yang emosional dan introspektif, serta pendekatan mereka yang sering menantang norma industri musik.</p>
          <button class="view-btn">View Profile</button>
        </div>
        <div class="artist-card">
          <img src="images/boypablo.jpg" alt="Artist 3" class="artist-photo">
          <h3 class="artist-name">Boy Pablo
          </h3>
          <p>Boy Pablo adalah proyek musik indie pop asal Norwegia yang dipimpin oleh musisi berbakat Nicolás Muñoz. Lahir pada tahun 2015, Boy Pablo mulai dikenal di kancah musik internasional berkat pendekatan lo-fi yang menyegarkan, melodi yang ringan, serta lirik yang penuh emosi tentang cinta, kekecewaan, dan kehidupan sehari-hari. Nicolás, yang memiliki darah campuran Chili dan Norwegia, merupakan inti dari proyek ini, meskipun ia kerap tampil dengan band pendukung dalam pertunjukan langsung.</p>
          <button class="view-btn">View Profile</button>
        </div>
        <div class="artist-card">
          <img src="images/ardhito.jpeg" alt="Artist 4" class="artist-photo">
          <h3 class="artist-name">Ardhito Pramono</h3>
          <p>Ardhito Pramono adalah musisi, penyanyi, dan aktor asal Indonesia yang dikenal karena gaya musiknya yang memadukan jazz, pop, dan elemen indie dengan nuansa yang segar dan modern. Lahir pada 22 Mei 1995 di Jakarta, Ardhito mulai menarik perhatian publik melalui lagu-lagu yang ia unggah secara independen di platform seperti YouTube dan SoundCloud. Musiknya dikenal dengan lirik yang romantis dan puitis, serta melodi yang mengingatkan pada era jazz klasik.</p>
          <button class="view-btn">View Profile</button>
        </div>
      </div>
    </div>
  </section>
  <!--akhir artist-->
  
  <!--bagian playlists-->
  <section id="playlists">
    <div class="playlist-container">
      <h1 class="playlist-title">our Playlists</h1>
  
      <!-- Band 1 -->
      <div class="playlist band-left">
        <img src="images/radiohead.webp" alt="radiohead">
        <div class="band-info">
          <h2>Radiohead</h2>
          <p>Too much radio, not enough head.</p>
          <ul>
            <li>
              <span>Creep</span>
              <audio controls>
                <source src="music/Radiohead - Creep.mp3" type="audio/mpeg">
              </audio>
            </li>
            <li>
              <span>No Surprises</span>
              <audio controls>
                <source src="music/Radiohead - No Surprises.mp3" type="audio/mpeg">
              </audio>
            </li>
            <li>
              <span>Fake Plastic Trees</span>
              <audio controls>
                <source src="music/Radiohead - Fake Plastic Trees.mp3" type="audio/mpeg">
              </audio>
            </li>
            <li>
              <span>Karma Police</span>
              <audio controls>
                <source src="music/Radiohead - Karma Police.mp3" type="audio/mpeg">
              </audio>
            </li>
          </ul>
        </div>
      </div>
  
      <!-- Band 2 -->
      <div class="playlist band-right">
        <img src="images/greenday_2.jpg" alt="greenday">
        <div class="band-info">
          <h2>Green Day</h2>
          <p>Wake Up, Rock Hard, Stay Loud!</p>
          <ul>
            <li>
              <span>Wake Me Up When September Ends</span>
              <audio controls autoplay src="music/wakemeup.mp3"></audio>
            </li>
            <li>
              <span>Basket Case</span>
              <audio controls>
                <source src="music/BasketCase.mp3" type="audio/mpeg">
              </audio>
            </li>
            <li>
              <span>American Idiot</span>
              <audio controls>
                <source src="music/American Idiot.mp3" type="audio/mpeg">
              </audio>
            </li>
            <li>
              <span>Good Riddance (Time of Your Life)</span>
              <audio controls>
                <source src="music/Green Day - Good Riddance (Time of Your Life).mp3" type="audio/mpeg">
              </audio>
            </li>
          </ul>
        </div>
      </div>
  
      <!-- Band 3 -->
      <div class="playlist band-left">
        <img src="images/boypablo2.jpg" alt="soypablo">
        <div class="band-info">
          <h2>boypablo</h2>
          <p>Dreamy Tunes, Real Feelings.</p>
          <ul>
            <li>
              <span>everytime</span>
              <audio controls>
                <source src="music/boy pablo - Everytime.mp3" type="audio/mpeg">
              </audio>
            </li>
            <li>
              <span>sick feeling</span>
              <audio controls>
                <source src="music/boy pablo - sick feeling (official video).mp3" type="audio/mpeg">
              </audio>
            </li>
            <li>
              <span>wachito rico</span>
              <audio controls>
                <source src="music/boy pablo - wachito rico (Wachito Rico_ Chapter 5).mp3" type="audio/mpeg">
              </audio>
            </li>
            <li>
              <span>rest up</span>
              <audio controls>
                <source src="music/boy pablo - rest up (Wachito Rico_ Chapter 3).mp3" type="audio/mpeg">
              </audio>
            </li>
          </ul>
        </div>
      </div>
  
      <!-- Band 4 -->
      <div class="playlist band-right">
        <img src="images/ardhitoo.webp" alt="Ardhito Pramono">
        <div class="band-info">
          <h2>Ardhito Pramono</h2>
          <p>Harmoni Rasa, Irama Cinta.</p>
          <ul>
            <li>
              <span>cigarettes of ours</span>
              <audio controls>
                <source src="music/Ardhito Pramono - cigarettes of ours.mp3" type="audio/mpeg">
              </audio>
            </li>
            <li>
              <span>superstar</span>
              <audio controls>
                <source src="music/Ardhito Pramono - superstar.mp3" type="audio/mpeg">
              </audio>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!--akhir playlists-->
 
  <!--contact-->
  <section id="contact">
    <h1>Request</h1>
    <div class="contact main-container">
        <div class="contact-left">
            <form class="contact-form" action="https://formspree.io/f/mgvwgagj" method="POST">
                <div>
                    <input type="text" placeholder="Name" name="name">
                </div>
                <div>
                    <input type="email" placeholder="Email" name="email">
                </div>
                <div>
                    <textarea name="message" id="message" placeholder="Message" cols="30" rows="10"></textarea>
                </div>
                <div>
                    <button class="btn-submit">Send Message</button>
                </div>
            </form>
        </div>
        <div class="contact-right">
            <!-- Contact Item 1 -->
            <div class="contact-item">
                <div class="contact-item-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                  </svg>
                </div>
                 <div class="contact-item-detail">
                <h4>241351157</h4>
                <p>M. Dias Sapriatna Hasan</p>
            </div>  
        </div>
        
        <!-- Contact Item 2 -->
        <div class="contact-item">
                <div class="contact-item-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                  </svg>
                </div>
                 <div class="contact-item-detail">
                <h4>null</h4>
                <p>-</p>
            </div>  
        </div>
        
        <!-- Contact Item 3 -->
        <div class="contact-item">
                <div class="contact-item-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                  </svg>
                </div>
                 <div class="contact-item-detail">
                <h4>null</h4>
                <p>-</p>
            </div>  
        </div>
    </div>
</section>
<!-- End of Contact -->
  
<!-- Footer -->
<footer>
  <p>&#169; 2024 - Made by Dias Hasan</p>
</footer>
<!-- End of Footer-->



  <!--Js-->
  <script>
    const audios = document.querySelectorAll('audio');
  
    audios.forEach(audio => {
      audio.addEventListener('play', () => {
        audios.forEach(otherAudio => {
          if (otherAudio !== audio) {
            otherAudio.pause();
            otherAudio.currentTime = 0;
          }
        });
      });
    });

    window.onbeforeunload = () => {
    for (const form of document.getElementsByTagName("form")) {
        form.reset();
    }
}

  </script>
  
  
  
  
  


</body>
</html>
