<?php
get_header();
if (have_posts()) : while (have_posts()) : the_post();
        get_template_part('entry');
        comments_template();
    endwhile;
endif;
get_template_part('nav', 'below');
?>
<h3 class="text">Explore the latest news about covid</h3>
<p class="second-slogan">
    don't forget to wear a mask and keep your distance to protect
    yourself
</p>

<section class="second-page" id="second-page">
    <div class="trend-title">News Updates</div>
    <a href="#"><button class="more-trend">More ></button></a>

    <div class="news">
        <img src="<?= get_theme_file_uri('img/kasus-covid.jpg') ?>" alt="" class="pictures" />
        <div class="title-description">
            <h3 class="title-news">
                Jakarta, CNN Indonesia -- Kasus positif virus corona (Covid-19) harian kembali memecahkan rekor baru, Jumat (28/8). <br>
                Dalam waktu 24 jam, kasus positif virus corona bertambah mencapai 3.003 orang.
            </h3>
            <p class="desc-news">
                Hal itu berdasarkan data yang dikumpulkan Kementerian Kesehatan sejak kemarin sampai pukul 12.00 WIB hari ini. <br> Dengan demikian jumlah kumulatif kasus positif mencapai 165.887 orang.
                Rekor tambahan kasus positif Covid-19 dalam sehari sebelumnya terjadi <br> kemarin, 27 Agustus, dengan 2.719 orang. Sebelumnya lagi terjadi pada 9 Juli, yang bertambah 2.657 orang.
                Kasus positif virus corona melonjak drastis pada bulan ini. <br> Setidaknya hingga hari ini, jumlah kumulatif dari 1 sampai 28 Agustus mencapai 57.511 orang.
            </p>
        </div>
    </div>

    <div class="news">
        <img src="<?= get_theme_file_uri('img/vaksin-covid.jpeg') ?>" alt="" class="pictures" />
        <div class="title-description">
            <h3 class="title-news">
                Survei Lapor Covid-19: Masyarakat Masih Ragu pada Vaksin
            </h3>
            <p class="desc-news">
                Jakarta, CNN Indonesia -- Lapor Covid-19 melakukan survei Pemahaman dan Kepercayaan Masyarakat<br>
                terhadap Vaksin dan Obat Virus Corona (Covid-19) di Indonesia. Berdasarkan hasil survei <br>
                tersebut, sebagian masyarakat masih ragu
                menerima vaksin dan obat Covid-19 yang dibuat oleh Tim Unair bersama BIN dan TNI-AD.
            </p>
        </div>
    </div>

    <div class="news">
        <img src="<?php echo get_theme_file_uri('img/gaya-hidup-alami.jpg') ?>" alt="" class="pictures" />
        <div class="title-description">
            <h3 class="title-news">
                Jakarta, CNN Indonesia -- Gaya hidup alami menjadi tren yang turut naik daun saat pandemi Covid-19.
            </h3>
            <p class="desc-news">
                Semakin banyak orang sadar akan kesehatan yang diperlihatkan dengan meningkatnya minat konsumen pada produk-produk alami.
                Survei terbaru dari FMCG <br> Gurus Indonesia pada Juli 2020 menemukan, pandemi mendorong 95 persen konsumen di Indonesia untuk melakukan banyak upaya supaya tetap sehat.
                <br> Minat konsumen terhadap produk-produk alami di Indonesia meningkat dari 67 persen pada Mei menjadi 78 persen pada Juli.
            </p>
        </div>
    </div>

    <!-- <div class="news">
        <img src="<?php //echo get_theme_file_uri('img/fourth-picture.jpeg') 
                    ?>" alt="" class="pictures" />
        <div class="title-description">
            <h3 class="title-news">
                DKI Jakarta Sumbang 2.235, Ini Sebaran 5.459 Kasus Covid Baru RI 26
                November
            </h3>
            <p class="desc-news">
                Jakarta - Indonesia mencatat sebanyak 5.469 kasus baru COVID-19,
                Sabtu (26/11/2022). Kasus aktif kini sebanyak 62.120 kasus.DKI
                Jakarta kini menyumbang jumlah kasus terbanyak dengan total 2.235.
                Disusul oleh Jawa Barat dengan total 1.110 kasus.
            </p>
        </div>
    </div>

    <div class="news">
        <img src="<?php //echo get_theme_file_uri('img/fifth-picture.jpg'); 
                    ?>" alt="" class="pictures" />
        <div class="title-description">
            <h3 class="title-news">
                Update COVID-19 RI 30 November: 5.609 Kasus Baru, Kasus Aktif Ada
                59.276
            </h3>
            <p class="desc-news">
                Jakarta - Indonesia mencatat 5.609 kasus baru COVID-19 hari ini,
                Rabu (30/11/2022). Seiring itu terdapat kasus sembuh sebanyak 4.411
                dan sebanyak 41 pasien COVID-19 meninggal dunia. Kasus aktif
                COVID-19 di Indonesia kini ada sebanyak 59.276.
            </p>
        </div>
    </div> -->
</section>

<section class="third-page" id="third-page">
    <div class="title-content">Covid-19 Events</div>
    <a href="#"><button class="more-trend">More ></button></a>

    <div class="event">
        <h4 class="title-event">
            Minister of Trade Zulkifli Hasan: The Pride of Indonesia Exhibition is
            Evidence of the Progress of Products made by the Nation's Children
        </h4>
        <p class="event-date">November 14, 2022</p>
    </div>

    <div class="event">
        <h4 class="title-event">
            Supporting Indonesia’s G20 Presidency with Real Solutions, IDIC and
            Bloomberg Organized IDIC-Bloomberg CEO Forum 2022
        </h4>
        <p class="event-date">November 11, 2022</p>
    </div>

    <div class="event">
        <h4 class="title-event">
            IDIC Revitalize Sakenan Temple and Asy-Syuhada Mosque as a Form of
            Religious Tolerance and Support to Bali Tourism
        </h4>
        <p class="event-date">November 10, 2022</p>
    </div>

    <div class="event">
        <h4 class="title-event">
            Former New Zealand PM Praises Indonesia's Initiative in Handling
            Climate Change
        </h4>
        <p class="event-date">November 10, 2022</p>
    </div>
</section>

<section class="fourth-page" id="fourt-page">
    <div class="editor-title">Each Selected Editor</div>
    <a href="#"><button class="more-trend">More ></button></a>
    <div class="event">
        <h4 class="title-event">
            Supporting Indonesia’s G20 Presidency with Real Solutions, IDIC and
            Bloomberg Organized IDIC-Bloomberg CEO Forum 2022
        </h4>
        <p class="event-date">November 11, 2022</p>
        <p class="p-editor">Editor By </p>
    </div>
    
    <div class="event">
        <h4 class="title-event">
            IDIC Revitalize Sakenan Temple and Asy-Syuhada Mosque as a Form of
            Religious Tolerance and Support to Bali Tourism
        </h4>
        <p class="event-date">November 10, 2022</p>
        <p class="p-editor">Editor By </p>
    </div>

</section>

</body>
</html>

<?php
get_footer();
?>