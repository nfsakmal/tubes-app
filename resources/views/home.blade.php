@extends('layouts.main')

@section('container')
    <link
      rel="stylesheet"
      href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
      integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
      crossorigin=""
    />
    <script
      src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
      integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
      crossorigin=""
    ></script>
    <style>
      #map {
        height: 80vh;
        width: 100%;
      }
    </style>
    <link
      rel="stylesheet"
      href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css"
    />
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
      <body>
    <p>By Kelompok 13</p>
    <div id="map"></div>
  </body>
  <script>
  
    var map = L.map("map").setView(
      [-5.378086121603646, 105.24670545808769],
      9
    );
    L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
      maxZoom: 19,
      attribution:
        '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
    }).addTo(map); 

    var kr_liwa = L.marker([-5.038121821689704, 104.07623749479862]).bindPopup('<a href="/lampung_barat/kebun_raya_liwa">Kebun Raya Liwa</a>'),
        bkb_bakung    = L.marker([-5.043057778465433, 104.13803597834448]).bindPopup('<a href="/lampung_barat/bukit_kabut_bawang_bakung">Bukit Kabut Bawang Bakung</a>'),
        g_seminung    = L.marker([-4.910733110399761, 103.96332192586004]).bindPopup('<a href="/lampung_barat/gunung_seminung">Gunung Seminung</a>'),
        d_suoh    = L.marker([-5.234805744860422, 104.27334543793258]).bindPopup('<a href="/lampung_barat/danau_suoh">Danau Suoh</a>'),
        g_pesagi    = L.marker([-4.925896542740314, 104.1484044880606]).bindPopup('<a href="/lampung_barat/gunung_pesagi">Gunung Pesagi</a>');
    var l_barat = L.layerGroup([kr_liwa, bkb_bakung, g_seminung, d_suoh, g_pesagi]);

    var p_marina = L.marker([-5.681650071767397, 105.5156725667715]).bindPopup('<a href="/lampung_selatan/pantai_marina">Pantai  Marina</a>'),
        at_waykalam    = L.marker([-5.775832551679911, 105.6644382745207]).bindPopup('<a href="/lampung_selatan/air_terjun_way_kalam">Air Terjun  Way Kalam</a>'),
        p_mengkudu    = L.marker([-5.8475909991498085, 105.68439644410411]).bindPopup('<a href="/lampung_selatan/pulau_mengkudu">Pulau Mengkudu</a>'),
        m_siger    = L.marker([-5.865276568100413, 105.7497496532799]).bindPopup('<a href="/lampung_selatan/menara_siger">Menara Siger</a>'),
        p_sebesi    = L.marker([-5.944561002641266, 105.4886311937699]).bindPopup('<a href="/lampung_selatan/pulau_sebesi">Pulau Sebesi</a>');
    var l_selatan = L.layerGroup([p_marina, at_waykalam, p_mengkudu, m_siger, p_sebesi]);

    var mib_jaya = L.marker([-4.93512011384727, 105.21153489560199]).bindPopup('<a href="masjid_istiqlal_bandar_jaya">Masjid Istiqlal Bandar Jaya</a>'),
        dt_gangga    = L.marker([-4.807288769776795, 105.52119824194222]).bindPopup('<a href="lampung_tengah/danau_tirta_gangga">Danau Tirta Gangga</a>'),
        t_pepadun    = L.marker([-4.975818538590791, 105.21319076682694]).bindPopup('<a href="/lampung_tengah/tugu_pepadun">Tugu Pepadun</a>'),
        krt_putri    = L.marker([-4.824481387895171, 105.49597962446734]).bindPopup('<a href="/lampung_tengah/kolam_renang_telaga_putri">Kolam Renang Telaga Putri</a>'),
        dtrs_baru    = L.marker([-5.167291119714039, 104.83769979560354]).bindPopup('<a href="/lampung_tengah/danau_telogo_rejo_sendang_baru">Danau Telogo Rejo Sendang Baru</a>');
    var l_tengah = L.layerGroup([mib_jaya, dt_gangga, t_pepadun, krt_putri, dtrs_baru]);

    var tnw_kambas = L.marker([-4.927340632984504, 105.77690683793057]).bindPopup('<a href="/lampung_timur/taman_nasional_way_kambas">Taman Nasional Way Kambas</a>'),
        pc_indah    = L.marker([-5.4201337964263345, 105.82169753793396]).bindPopup('<a href="/lampung_timur/pantai_cemara_indah">Pantai Cemara Indah</a>'),
        dw_jepara    = L.marker([-5.202718217498674, 105.66407369560373]).bindPopup('<a href="/lampung_timur/danau_way_jepara">Danau Way Jepara</a>'),
        d_kemuning    = L.marker([-5.304827337062339, 105.73421926683713]).bindPopup('<a href="/lampung_timur/danau_kemuning">Danau Kemuning</a>'),
        tp_pugungraharjo    = L.marker([-5.300632935591387, 105.57124192448359]).bindPopup('<a href="/lampung_timur/taman_purbakala_pugungraharjo">Taman Purbakala Pugungraharjo</a>');
    var l_timur = L.layerGroup([tnw_kambas, pc_indah, dw_jepara, d_kemuning, tp_pugungraharjo]);

    var at_beringin = L.marker([-4.912100227615221, 104.5532191379305]).bindPopup('<a href="/lampung_utara/air_terjun_beringin">Air Terjun Beringin</a>'),
        tpm_kotabumi    = L.marker([-4.8343297004919, 104.89682629566055]).bindPopup('<a href="/lampung_utara/tugu_payan_mas_kotabumi">Tugu Payan Mas Kotabumi</a>'),
        tw_waytebabeng    = L.marker([-4.921312430872601, 104.98435749564298]).bindPopup('<a href="/lampung_utara/taman_wisata_way_tebabeng">Taman Wisata Way Tebabeng</a>'),
        tw_wayrarem    = L.marker([-4.931132145201147, 104.7928051244376]).bindPopup('<a href="/lampung_utara/taman_wisata_way_rarem">Taman Wisata Way Rarem</a>'),
        awlb_kuning    = L.marker([-4.840434874295974, 104.93313489560141]).bindPopup('<a href="/lampung_utara/agrowisata_lembah_bambu_kuning">Agrowisata Lembah Bambu Kuning</a>');
    var l_utara = L.layerGroup([at_beringin, tpm_kotabumi, tw_waytebabeng, tw_wayrarem, awlb_kuning]);

    var mas_pematang = L.marker([-4.01924044945197, 105.2462221667963]).bindPopup('<a href="/mesuji/masjid_agung_simpang_pematang">Masjid Agung Simpang Pematang</a>'),
        as_pematang    = L.marker([-4.018022649145798, 105.24768653792513]).bindPopup('<a href="/mesuji/alun-alun_simpang_pematang">Alun-alun Simpang Pematang</a>'),
        wa_wiralaga    = L.marker([-3.8490618941854726, 105.44514989562448]).bindPopup('<a href="/mesuji/sungai_mesuji">Wisata Asik Wiralaga</a>'),
        s_mesuji    = L.marker([-4.156399077421272, 105.81740108780043]).bindPopup('<a href="/mesuji/wisata_asik_wiralaga">Sungai Mesuji</a>');
    var mesuji = L.layerGroup([mas_pematang, as_pematang, wa_wiralaga, s_mesuji]);

    var ats_tiga = L.marker([-5.530089379795424, 105.10346193798317]).bindPopup('<a href="/pesawaran/air_terjun_sinar_tiga">Air Terjun Sinar Tiga</a>'),
        p_kelagian    = L.marker([-5.62514147915091, 105.22487329605609]).bindPopup('<a href="/pesawaran/pulau_kelagian">Pulau Kelagian</a>'),
        n_ciupang    = L.marker([-5.586927759171477, 105.02219243798162]).bindPopup('<a href="/pesawaran/air_terjun_ciupang">Niagara Ciupang</a>'),
        hm_petengoran    = L.marker([-5.56840297390671, 105.24007923798878]).bindPopup('<a href="/pesawaran/hutan_mangrove_petengoran">Hutan Mangrove Petengoran</a>'),
        p_klara    = L.marker([-5.579699712405549, 105.21312043798089]).bindPopup('<a href="/pesawaran/pantai_klara">Pantai Klara</a>');
    var pesawaran = L.layerGroup([ats_tiga, p_kelagian, n_ciupang, hm_petengoran, p_klara]);

    var l_jukung = L.marker([-5.189280388829258, 103.93159411538194]).bindPopup('<a href="/pesisir_barat/labuhan_jukung">Labuhan Jukung</a>'),
        pt_setia    = L.marker([-5.3030197822148475, 104.00015034607993]).bindPopup('<a href="/pesisir_barat/pantai_tanjung_setia_krui">Pantai Tanjung Setia Krui</a>'),
        p_tembakak    = L.marker([-5.1040003101468185, 103.86402323793169]).bindPopup('<a href="/pesisir_barat/pantai_tembakak_krui">Pantai Tembakak Krui</a>'),
        tnbb_selatan    = L.marker([-5.448248906868756, 104.35155620909845]).bindPopup('<a href="/pesisir_barat/taman_nasional_bukit_barisan_selatan">Taman Nasional Bukit Barisan</a>'),
        p_pisang    = L.marker([-5.119924422291295, 103.84684873150412]).bindPopup('<a href="/pesisir_barat/pulau_pisang">Pulau Pisang</a>');
    var pesibar = L.layerGroup([l_jukung, pt_setia, p_tembakak, tnbb_selatan, p_pisang]);

    var rkm_alam = L.marker([-5.326931179699852, 104.96544216676891]).bindPopup('<a href="/pringsewu/rumah_kalkun_mitra_alam">Rumah Kalkun Mitra Alam</a>'),
        wbw_sewu    = L.marker([-5.3562178548803905, 104.9148859533211]).bindPopup('<a href="/pringsewu/wahana_berkuda_watu_sewu">Wahana Berkuda Watu Sewu</a>'),
        tm_bmj    = L.marker([-5.38086562659424, 105.05352768031302]).bindPopup('<a href="/pringsewu/taman_wisata_bmj">Taman wisata BMJ</a>'),
        ti_pajaresuk    = L.marker([-5.3546625543345465, 104.94956985331075]).bindPopup('<a href="/pringsewu/talang_indah_pajaresuk">Talang Indah Pajaresuk</a>'),
        bp_pangonan    = L.marker([-5.352104653440008, 104.94496993793338]).bindPopup('<a href="/pringsewu/bukit_puncak_pangonan">Bukit Puncak Pangonan</a>');
    var pringsewu = L.layerGroup([rkm_alam, wbw_sewu, tm_bmj, ti_pajaresuk, bp_pangonan]);

    var st_beach = L.marker([-5.755609149805234, 105.05762472444347]).bindPopup('<a href="/tanggamus/sharks_teeth_beach">Sharks Teeth Beach</a>'),
        atl_pelangi    = L.marker([-5.3331156644487, 104.54590016676899]).bindPopup('<a href="/tanggamus/air_terjun_lembah_pelangi">Air Terjun Lembah Pelangi</a>'),
        g_tanggamus    = L.marker([-5.425448805696237, 104.67551261540844]).bindPopup('<a href="/tanggamus/gunung_tanggamus">Gunung Tanggamus</a>'),
        atb_lapis    = L.marker([-5.377979380870693, 104.66091553793365]).bindPopup('<a href="/tanggamus/air_terjun_batu_lapis">Air Terjun Batu Lapis</a>'),
        pk_bebai    = L.marker([-5.675496869493288, 104.90548309560718]).bindPopup('<a href="/tanggamus/pantai_karang_bebai">Pantai Karang Bebai</a>');
    var tanggamus = L.layerGroup([st_beach, atl_pelangi, g_tanggamus, atb_lapis, pk_bebai]);

    var i_center = L.marker([-4.542486697625745, 105.09144796676375]).bindPopup('<a href="/tulang_bawang/islamic_center_tulang_bawang_barat">Islamic Center Tulang Bawang Barat</a>'),
        te_marga    = L.marker([-4.487424784692246, 105.10610629559916]).bindPopup('<a href="/tulang_bawang/tugu_empat_marga">Tugu Empat Marga</a>'),
        st_bawang    = L.marker([-4.406086770880783, 105.8433608153025]).bindPopup('<a href="/tulang_bawang/sungai_tulang_bawang">Sungai Tulang Bawang</a>'),
        kwc_raya    = L.marker([-4.427338562332309, 105.26045796676311]).bindPopup('<a href="/tulang_bawang/kawasan_wisata_cakat_raya">Kawasan Wisata Cakat Raya</a>'),
        krt_bahagia    = L.marker([-4.3895504509478425, 105.28523613792728]).bindPopup('<a href="/tulang_bawang/kolam_renang_taman_bahagia">Kolam Renang Taman Bahagia</a>');
    var t_bawang = L.layerGroup([i_center, te_marga, st_bawang, kwc_raya, krt_bahagia]);

    var atc_gangsa = L.marker([-4.668543157593856, 104.41709409560023]).bindPopup('<a href="/lampung">Air Terjun Curup Gangsa</a>'),
        atp_malu    = L.marker([-4.85981179958176, 104.38605786676582]).bindPopup('<a href="/lampung">Air Terjun Putri Malu</a>'),
        c_kereta    = L.marker([-4.6676803505284115, 104.46149599560026]).bindPopup('<a href="/lampung">Curup Kereta</a>'),
        kwg_batin    = L.marker([-4.627259236303527, 104.59941830994734]).bindPopup('<a href="/lampung">Kampung Wisata Gedung Batin</a>'),
        c_kedaton    = L.marker([-4.73694235928681, 104.45367696676509]).bindPopup('<a href="/lampung">Curup Kedaton</a>');
    var w_kanan = L.layerGroup([atc_gangsa, atp_malu, c_kereta, kwg_batin, c_kedaton]);

    var l_walk = L.marker([-5.3904429040721205, 105.27662842444069]).bindPopup('<a href="/bandar_lampung/lampung_walk">Lampung Walk</a>'),
        w_garden    = L.marker([-5.436015382898631, 105.22955299560539]).bindPopup('<a href="/bandar_lampung/wira_garden">Taman Wisata Alam & Cottage Wira Garden</a>'),
        tsm_lampung    = L.marker([-5.382870201151022, 105.28222919560501]).bindPopup('<a href="/bandar_lampung/trans_studio_mini_lampung">Trans Studio Mini Lampung</a>'),
        al_furqon    = L.marker([-5.429209219090481, 105.26031952444104]).bindPopup('<a href="/bandar_lampung/masjid_al_furqon">Masjid Agung Al-Furqon</a>'),
        b_aslan    = L.marker([-5.418317476647281, 105.31136683793389]).bindPopup('<a href="/bandar_lampung/bukit_aslan">Bukit AsLan</a>');
    var b_lampung = L.layerGroup([l_walk, w_garden, tsm_lampung, al_furqon, b_aslan]);

    var mt_metro = L.marker([-5.114547886411279, 105.30678613793184]).bindPopup('<a href="/lampung">Masjid Taqwa Metro</a>'),
        py_pelangi    = L.marker([-5.103039868699793, 105.32831743793174]).bindPopup('<a href="/lampung">Pasar Yosomulyo Pelangi</a>'),
        t_merdeka    = L.marker([-5.114553572528138, 105.30821880909606]).bindPopup('<a href="/lampung">Taman Merdeka</a>'),
        tmi_indah    = L.marker([-5.100161867744221, 105.2948023379317]).bindPopup('<a href="/lampung">Taman Metro Indonesia Indah (TMII)</a>'),
        tp_indah    = L.marker([-5.12539579020742, 105.28706893793189]).bindPopup('<a href="/lampung">Taman Palem Indah</a>');
    var metro = L.layerGroup([mt_metro, py_pelangi, t_merdeka, tmi_indah, tp_indah]);

    var overlayMaps = {
      "Kabupaten Lampung Barat": l_barat,
      "Kabupaten Lampung Selatan" : l_selatan,
      "Kabupaten Lampung Tengah": l_tengah,
      "Kabupaten Lampung Timur" : l_timur,
      "Kabupaten Lampung Utara": l_utara,
      "Kabupaten Mesuji" : mesuji,
      "Kabupaten Pesawaran": pesawaran,
      "Kabupaten Pesisir Barat" : pesibar,
      "Kabupaten Pringsewu": pringsewu,
      "Kabupaten Tanggamus" : tanggamus,
      "Kabupaten Tulang Bawang": t_bawang,
      "Kabupaten Way Kanan" : w_kanan,
      "Kota Bandar Lampung": b_lampung,
      "Kota Metro" : metro
    };

    L.control.layers(overlayMaps).addTo(map);
    
    

    L.control
      .scale({
        metric: true,
        imperial: false,
        position: "topright",
      })
      .addTo(map);
  </script>
@endsection

