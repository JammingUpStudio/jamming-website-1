 <div id="our-team">
    <div class="container">
      <div class="text-left"><br><br><br>
        <img src="asset_frontend/img/profil.png" width="50%">
      </div>
    
      </div>
    </div>
  </div>
   <footer>
    <div id="contact" style="background-color: white;">
      <div class="container">
        <div class="text-center">
          <h3>History of  <img src="asset_frontend/img/logo1.png" width="30%"> </h3>
          <p align="justify">Tepat di tanggal 23 Februari 2019, sekitar 15 orang dengan latar belakang berbeda berkumpul. Kami berdiskusi wadah apa yang cocok untuk menampung orang-orang yang ingin belajar Bahasa Pemrograman? Karena kami ingin wadah ini netral tak ada campur tangan pihak manapun. Maka tercetuslah untuk membuat sebuah komunitas bernama JAMMINGUP STUDIO. Mengapa Studio? Karena kami percaya suatu saat JAMMINGUP STUDIO akan menjadi tempat utama yang nyaman bagi teman-teman yang ingin belajar Bahasa Pemrograman.</p><br><br>
          <p align="center"> <img src="asset_frontend/img/log1.png" width="30%"><br>
          <b>"Logo Jammingup Studio"</b> </p>
          <p align="justify"> Dalam mengembangkan Jammingup Studio, kami banyak sekali melewati halang rintang serta waktu yang dirasa sulit dalam mengadakan pertemuan dalam pembahasan Jammingup Studio untuk kedepannya karena tempat tinggal anggota jamming yang berjauhan. tetapi pada tanggal 23 Januari 2019 kami mengadakan sebuah pertemuan untuk membahas project - project yang akan dibuat oleh Jamming up Studio. </p>
          <p align="center"><br><img src="asset_frontend/img/slide1.jpg" width="70%"><br><br>
          <b>"Sendiri kita bisa melakukan suatu hal, tapi bersama kita bisa melakukan banyak hal"</b></p>
          <p align="justify">Dan dari pertemuan inilah kami mendapatkan ide - ide untuk mengembangkan jammming up Studio kedepannya serta project pertama Jammingup Studio yang akan kami garap bersama - sama . dan dari sini pula kami membuat sebuah struktur untuk mempermudah kerja kami dalam mengerjakan setiap tugas-tugas project untuk Jammingup Studio. Kami mengharapkan Jammingup Studio Kedepannya bisa lebih berkembang dan berkembang lagi.</p> 
            <p align="center"><br><img src="asset_frontend/img/slide2.jpg" width="70%"><br><br>
              <b>"1 Team, 1 Tujuan dan 1 Harapan untuk Jammingup Studio kedepan"</b></p>
          
        </div>
      </div>
             
          </div>
        </div>
      </div>
    </div>
     <div id="our-team">
    <div class="container">
      <div class="text-center">
        <h3>Jammingup Studio Squad</h3>
        <p>Team Jammingup Studio yang berdedikasi dalam mendirikan Jammingup Studio</p>
      </div>
       <?php
                  require("../control/squad.php");
                  $Squad = new Library();
                  $show = $Squad->showArt();
                    while($data = $show->fetch(PDO::FETCH_OBJ))
                    {
                        echo'
      <div class="row">
        <div class="col-md-4 wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
          <div class="text-center">
            <img class="img-sm rounded-circle mb-4 mb-md-8" src="j_article/article-picture/'.$data->twibbon.'">
            <h2>'.$data->nama.'</h2>
            <h4>'.$data->ttl.'</h4>
            <p>Kami memberikan sebuah pelayanan dalam pembuatan aplikasi dekstop, Game
            , Website, Design Animasi dan Mobile Aps</p>
          </div>
        </div>

         ';
                            }
                        ?>  
       <!--  <div class="col-md-4 wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
          <div class="text-center">
           
          </div>
        </div>
        <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
          <div class="text-center">
           
          </div>
        </div> -->
      </div>
    </div>
  </div>
</footer>


