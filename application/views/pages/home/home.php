<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portofolio</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=  "/pages/css/home_style.css" >
    
</head>
<body>
<!--Awal Home-->
    <header>
        <div class="container">
            <div class="row">
                <div class="brand-name">
                    <a href="#" class="logo">WE ARE</a>
                </div>
                <div class="navbar">
                    <ul>
                        <li><a href="#home" class="active">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#skills">Skills</a></li>
                        <li><a href="#blog">Blog</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    
    <section class="home" id="home">
        <div class="container">
            <div class="row full-screen">
                <div class="home-content">
                    <div class="block">
                        <h1>اَلسَّلاَ مُ عَلَيْكُمْ وَرَحْمَةُ اللهِ وَبَرَكَا تُهُ</h1>
                        <h2>Selamat Datang</h2>
                       
                        <p>Nama Saya Adalah <?php echo $user->fullname; ?></p>
                        <p>Mahasiswa Jurusan Teknik Informatika di UNESA</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--Akhir Home-->

<!--Awal About-->
<section class="about-me" id="about">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h1>About Me</h1>
                <p class="small text-uppercase">Information About Me</p>
            </div>
        </div>
        <div class="row">
            <div class="about-content">
                <div class="row">
                    <div class="img">
                        <img src="/assets/images/about-me.jpg" alt="about-me" >
                    </div>
                    <div class="text">
                        <h4>I'M <?php echo $user->nickname; ?></h4>
                        <h6>Just <span>Newbie</span> or <span>Junior Developer</span></h6>
                        <p>Hello guys, my name is <?php echo $user->nickname; ?>. I'm 21 Years old. I'm a begginer developer. So, forgive me yeahh ! :)</p>
                        <div class="info">
                            <div class="list">
                                <label>NIM :</label>
                                <p><?php echo $user->nim; ?></p>
                            </div>
                            <div class="list">
                                <label>Kelas :</label>
                                <p><?php echo $user->class; ?></p>
                            </div>
                            <div class="list">
                                <label>Email :</label>
                                <p><?php echo $user->email; ?></p>
                            </div>
                            <div class="list">
                                <label>Phone :</label>
                                <p><?php echo $user->phone; ?></p>
                            </div>
                            <div class="list">
                                <label>Negara :</label>
                                <p><?php echo $user->country; ?></p>
                            </div>
                            <div class="list">
                                <label>Alamat</label>
                                <p><?php echo $user->address; ?></p>
                            </div>
                            <div class="list">
                                <label>Tempat Kuliah :</label>
                                <p><?php echo $user->college; ?></p>
                            </div>
                            
                        </div>
                        <!--Sosial Media-->
                        <div class="social-links">
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-instagram"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!--Akhir About-->

<!--Awal Our Services-->
    <section class="services" id="services">
        <div class="container">
            <div class="section-title text-center">
                <h1>My Services</h1>
            </div>
            <div class="list-services">
                <div class="service">
                    <i class="fa fa-laptop"></i>
                    <h4 class="title">Laptop Services</h4>
                    <p class="description">
                        Siap menerima jasa service laptop pada bagian software, seperti gagal booting, windows error dll. Dan menerima service untuk pada bagian hardware, seperti mengganti harddisk, ram dan lain-lain.
                    </p>
                </div>
                <div class="service">
                    <i class="fa fa-code"></i>
                    <h4 class="title">Jasa C++</h4>
                    <p class="description">
                        Siap menerima jasa pengerjaan tugas c++ untuk mahasiswa tahun pertama jurusan Teknik Informatika.
                    </p>
                </div>
                <div class="service">
                    <i class="fa fa-globe"></i>
                    <h4 class="title">Web Design</h4>
                    <p class="description">
                        Siap menerima jasa pembuatan web bagian frontend, dengan HTML, CSS dan JavaScript.
                    </p>
                </div>
                <div class="service">
                    <i class="fa fa-database"></i>
                    <h4 class="title">Database</h4>
                    <p class="description">
                        Siap menerima jasa pembuatan database, merancang database. Database yang digunakan adalah postgreSQL.
                    </p>
                </div>
            </div> 
        </div>
    </section>
<!--Akhir Our Services-->

<!--Awal Skills-->
    <section class="skills" id="skills">
        <div class="container">
            <div class="row align-items-center">
                    <div class="skills-content">
                        <div class="row">
                            <div class="section-title">
                                <h1>My Skills</h1>
                                <p>
                                    Skill yang sekarang saya punya, masihlah sedikit. InsyaAllah skill saya akan berkembang lagi. Semoga Allah Azza waJalla memudahkan saya. Dan dibawah ini adalah graphic skill dari skill yang saya miliki. Barakallahu fiikum.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="skill-box">
                                <h6>C++</h6>
                                <div class="skill-bar">
                                    <div class="skill-bar-in" style="width: 49%">
                                        <span>49%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="skill-box">
                                <h6>HTML</h6>
                                <div class="skill-bar">
                                    <div class="skill-bar-in" style="width: 56%">
                                        <span>56%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="skill-box">
                                <h6>CSS</h6>
                                <div class="skill-bar">
                                    <div class="skill-bar-in" style="width: 30%">
                                        <span>30%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="skill-box">
                                <h6>PostgreSQL</h6>
                                <div class="skill-bar">
                                    <div class="skill-bar-in" style="width: 60%">
                                        <span>62%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="img">
                        <img src="/assets/images/skill.jpg" alt="skill">
                    </div>
            </div>
        </div>
    </section>
<!--Akhir Skills-->

<!--Awal Blog-->
    <section class="blogs" id="blog">
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h1>My Blogs</h1>
                </div>
            </div>
            <div class="row">
                <div class="news-active">
                    <div class="col-md-4">
                        <div class="latest-news-wrap">
                            <div class="news-img">
                                <img src="/assets/images/blog/1.jpg" alt="blog 1">
                                <div class="date">
                                    <span>10</span>
                                    <span>Maret</span>
                                </div>
                            </div>
                            <div class="news-content">
                                <h3>Keutamaan Menuntut Ilmu Syar'i</h3>
                                <p>
                                    Dari Mu’awiyah, Nabi shallallahu ‘alaihi wa sallam bersabda,“Barang siapa menelusuri jalan untuk mencari ilmu padanya, Allah akan memudahkan baginya jalan menuju surga.” (HR. Muslim). 
                                </p><br>
                                <a href="">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="latest-news-wrap">
                            <div class="news-img">
                                <img src="/assets/images/blog/2.jpg" alt="blog 1">
                                <div class="date">
                                    <span>15</span>
                                    <span>Maret</span>
                                </div>
                            </div>
                            <div class="news-content">
                                <h3>Keutamaan Menikah</h3>
                                <p>
                                    “Jika seseorang menikah, maka ia telah menyempurnakan separuh agamanya. Karenanya, bertakwalah pada Allah pada separuh yang lainnya.” (HR. Al Baihaqi )
                                </p><br>
                                <a href="">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="latest-news-wrap">
                            <div class="news-img">
                                <img src="/assets/images/blog/3.jpg" alt="blog 1">
                                <div class="date">
                                    <span>19</span>
                                    <span>Maret</span>
                                </div>
                            </div>
                            <div class="news-content">
                                <h3>From Hero to Zero</h3>
                                <p>
                                    Jadilah manusia yang merasa zero, dalam artian butuh banget kepada Allah, karna semua berasal dari Allah Azza waJalla. Dan jangan merasa hero atas apa yang kita miliki. Semua milik Allah Tabaroka WaTa'ala.
                                </p><br>
                                <a href="">Read More</a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
<!--Akhir Blog-->

<!--Awal Contact me-->
    <section class="contact-me" id="contact">
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h1>Contact Me</h1>
                </div>
            </div>
            <div class="row">
                <div class="contact-form">
                    <div class="row">
                        <div class="text">
                            <h2>Drop me a text</h2>
                            <p>I'm here to answer your order</p>
                        </div>
                    </div>
                    <div class="row space-between">
                        <div class="col-6">
                            <input type="text" class="form-control" name="" placeholder="Name">
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control" name="" placeholder="Email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <textarea class="form-control" placeholder="Your Comment" ></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="button">
                            <a href="">Submit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--Akhir Contactr me-->

<!--Awal Footer-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="logo">
                    WE ARE
                </div>
                <div class="social">
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-instagram"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </footer>
<!--Akhir Footer-->
<!--CopyRight-->
    <div class="copyright">
        <div class="container">
            <p>&copy; 2020 copyright all right reserved</p>
        </div>
    </div>
<!--CopyRight-->
<script type="text/javascript" src="/pages/js/home_script.js"></script>
</body>
</html>

