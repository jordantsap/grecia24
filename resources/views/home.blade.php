@include('partials.head')

  @include('partials.header')

  <div class="art-sheet">
    <div class="">


      <div id="content" class="col-xs-9">
        {{-- @section('content') @endsection --}}
        <div class="row art-layout-wrapper">
          <div class="art-content-layout">
            <div class="art-content-layout-row">

              <div class="art-layout-cell art-content">
                <!-- begin nostyle -->
                <div class="art-nostyle">
                  <!-- begin nostyle content -->
                  <style>
                  .search_text_MAD span {
                    display: inline-table;
                    font-size: 16px;
                  }

                  .search_text_MAD input,
                  .search_text_MAD select {
                    height: 23px;
                  }

                  #tsearch {
                    height: 31px;
                  }

                  #uniform-city,
                  #uniform-perioxi,
                  #uniform-country,
                  #uniform-eidos_akinitou,
                  #uniform-domatia {
                    height: 34px;
                    width: 117px;
                    padding: 0px;
                  }

                  #uniform-city span,
                  #uniform-perioxi span,
                  #uniform-country span,
                  #uniform-eidos_akinitou span,
                  #uniform-domatia span {
                    background: url('images/koumpia.png');
                    height: 30px;
                    padding-top: 4px;
                    padding-left: 4px;
                  }
                  </style>
                  <script language="javascript" type="text/javascript">
                  var gr_cities = new Array(new Array("Aetolia-Acarnania", new Array(
                        "Missolonghi", "Agrinio", "Aktio-Vonitsa",
                        "Amfilochia", "Thermo", "Nafpaktia", "Xiromero"),
                      "ADSM_CITY_AITOLOKARNANIA"), new Array("Argolis", new Array(
                        "Argos-Mykines", "Epidaurus", "Ermionida", "Nafplio"),
                      "ADSM_CITY_ARGOLIDA"), new Array("Arcadia", new Array(
                      "North Kynouria", "Gortynia", "Megalopoli",
                      "South Kynouria", "Tripoli"), "ADSM_CITY_ARKADIA"), new Array(
                      "Arta", new Array("Arta", "Georgios Karaiskakis",
                        "Central Tzoumerka", "Nikolaos Skoufas"),
                      "ADSM_CITY_ARTA"), new Array("Athens Prefecture", new Array(
                        "Agia Varvara", "Agia Paraskevi", "Agios Dimitrios",
                        "Agioi Anargyroi-Kamatero", "Athens", "Aigaleo",
                        "Alimos", "Marousi", "Vrilissia", "Vyronas",
                        "Galatsi", "Glyfada", "Dafni-Ymittos",
                        "Elliniko-Argyroupoli", "Zografou", "Ilioupoli",
                        "Ilio", "Kaisariani", "Kallithea", "Kifisia",
                        "Lykovrysi - Pefki", "Metamorfosi",
                        "Moschato - Tavros", "Nea Ionia", "Nea Smyrni",
                        "Palaio Faliro", "Papagou - Cholargos", "Penteli",
                        "Peristeri", "Petroupoli", "Filadelfeia - Chalkidona",
                        "Filothei - Psychiko", "Chaidari", "Chalandri"),
                      "ADSM_CITY_ATTIKI_ATHINA"), new Array("East Attica",
                      new Array("Acharnes", "Vari - Voula - Vouliagmeni",
                        "Dionysos", "Kropia", "Lavreotiki", "Marathon",
                        "Markopoulo Mesogaias", "Paiania", "Pallini",
                        "Rafina - Pikermi", "Saronikos", "Spata - Artemida",
                        "Oropos"), "ADSM_CITY_ATTIKI_ANATOLIKI"), new Array(
                      "West Attica", new Array("Aspropyrgos", "Elefsina",
                        "Mandra - Eidyllia", "Megara", "Fyli"),
                      "ADSM_CITY_ATTIKI_DYTIKI"), new Array("Piraeus", new Array(
                      "Angistri", "Aegina", "Keratsini-Drapetsona",
                      "Korydallos", "Cythera",
                      "Nikaia - Agios Ioannis Rentis", "Piraeus", "Perama",
                      "Poros", "Salamis Island", "Spetses", "Troizinia",
                      "Hydra"), "ADSM_CITY_ATTIKI_PIREAS"), new Array(
                      "Achaea", new Array("Aigialeia", "West Achaea",
                        "Erymanthos", "Kalavryta", "Patras"),
                      "ADSM_CITY_AXAIA"), new Array("Boeotia", new Array(
                        "Aliartos", "Distomo-Arachova-Antikyra", "Thebes",
                        "Livadeia", "Orchomenos", "Tanagra"),
                      "ADSM_CITY_BOIOTIA"), new Array("Grevena", new Array(
                      "Grevena", "Deskati"), "ADSM_CITY_GREVENA"), new Array(
                      "Drama", new Array("Doxato", "Drama", "Kato Nevrokopi",
                        "Paranesti", "Prosotsani"), "ADSM_CITY_DRAMA"), new Array(
                      "Dodecanese", new Array("Agathonisi", "Astypalaia",
                        "Kalymnos", "Karpathos", "Kasos", "Kos", "Leipsoi",
                        "Leros", "Kastellorizo - Megisti", "Nisyros",
                        "Patmos", "Rhodes", "Symi", "Tilos"),
                      "ADSM_CITY_DODEKANISA"), new Array("Evros", new Array(
                      "Alexandroupoli", "Didymoteicho", "Orestiada",
                      "Samothrace", "Soufli"), "ADSM_CITY_EVROS"), new Array(
                      "Euboea", new Array("Dirfys-Messapia", "Eretria",
                        "Istiaia - Aidipsos", "Karystos", "Kymi - Aliveri",
                        "Mantoudi - Limni - Agia Anna", "Skyros", "Chalcis"),
                      "ADSM_CITY_EVIA"), new Array("Evrytania", new Array(
                      "Agrafa", "Karpenisi"), "ADSM_CITY_EVRITANIA"), new Array(
                      "Zakynthos", new Array("Zakynthos"),
                      "ADSM_CITY_ZAKYNTHOS"), new Array("Elis", new Array(
                        "Andravida - Kyllini", "Andritsaina", "Olympia",
                        "Zacharo", "Ilida", "Pineios", "Pyrgos"),
                      "ADSM_CITY_ILIA"), new Array("Imathia", new Array(
                        "Alexandreia", "Veria", "Naousa"),
                      "ADSM_CITY_IMATHIA"), new Array("Heraklion", new Array(
                      "Archanes - Asterousia", "Viannos", "Gortyna",
                      "Heraklion", "Malevizi", "Minoa Pediada", "Faistos",
                      "Chersonisos"), "ADSM_CITY_IRAKLIO"), new Array(
                      "Thesprotia", new Array("Igoumenitsa", "Souli",
                        "Filiates"), "ADSM_CITY_THESPROTIA"), new Array(
                      "Thessaloniki", new Array("Ampelokipoi - Menemeni",
                        "Volvi", "Delta", "Thermaikos", "Thermi",
                        "Thessaloniki", "Kalamaria", "Kordelio - Evosmos",
                        "Langadas", "Neapoli - Sykies", "Pavlos Melas",
                        "Pylaia - Chortiatis", "Chalkidona", "Oraiokastro"),
                      "ADSM_CITY_THESSALONIKI"), new Array("Ioannina", new Array(
                        "North Tzoumerka", "Dodoni", "Zagori", "Zitsa",
                        "Ioannina", "Konitsa", "Metsovo", "Pogoni"),
                      "ADSM_CITY_IOANNINA"), new Array("Kavala", new Array(
                        "Thasos", "Kavala", "Nestos", "Pangaio"),
                      "ADSM_CITY_KABALA"), new Array("Karditsa", new Array(
                      "Argithea", "Karditsa", "Lake Plastiras", "Mouzaki",
                      "Palamas", "Sofades"), "ADSM_CITY_KARDITSA"), new Array(
                      "Kastoria", new Array("Kastoria", "Nestorio",
                        "Orestida"), "ADSM_CITY_KASTORIA"), new Array("Corfu",
                      new Array("Corfu", "Paxi"), "ADSM_CITY_KERKIRA"), new Array(
                      "Cephalonia", new Array("Ithaca", "Cephalonia"),
                      "ADSM_CITY_KEFALLONIA"), new Array("Kilkis", new Array(
                      "Kilkis", "Paionia"), "ADSM_CITY_KILKIS"), new Array(
                      "Kozani", new Array("Servia - Velventos", "Voio",
                        "Eordaia", "Kozani"), "ADSM_CITY_KOZANI"), new Array(
                      "Corinthia", new Array("Velo - Vocha", "Corinthia",
                        "Loutraki - Agioi Theodoroi", "Nemea",
                        "Xylokastro - Evrostina", "Sikyona"),
                      "ADSM_CITY_KORINTHIA"), new Array("Cyclades", new Array(
                      "Amorgos", "Anafi", "Andros", "Antiparos", "Thiras",
                      "Ios", "Kea", "Kimolos", "Kythnos", "Milos",
                      "Mykonos", "Naxos and Lesser Cyclades", "Paros",
                      "Serifos", "Sikinos", "Sifnos", "Syros - Ermoupoli",
                      "Tinos", "Folegandros"), "ADSM_CITY_KIKLADES"), new Array(
                      "Laconia", new Array("Elafonisos", "Evrotas", "Μani",
                        "Monemvasia", "Sparti"), "ADSM_CITY_LAKONIA"), new Array(
                      "Larissa", new Array("Agia", "Elassona", "Kileler",
                        "Larissa", "Tempi", "Tyrnavos", "Farsala"),
                      "ADSM_CITY_LARISA"), new Array("Lasithi", new Array(
                      "Agios Nikolaos", "Ierapetra", "Oropedio Lasithiou",
                      "Sitia"), "ADSM_CITY_LASITHI"), new Array("Lesbos", new Array(
                        "Agios Efstratios", "Lesbos", "Lemnos"),
                      "ADSM_CITY_LESVOS"), new Array("Lefkada", new Array(
                      "Lefkada", "Meganisi"), "ADSM_CITY_LEFKADA"), new Array(
                      "Magnesia", new Array("Almyros", "Alonnisos", "Volos",
                        "Zagora - Mouresi", "South Pelion", "Rigas Feraios",
                        "Skiathos", "Skopelos"), "ADSM_CITY_MAGNISIA"), new Array(
                      "Messenia", new Array("West Mani", "Kalamata",
                        "Messini", "Oichalia", "Pylos - Nestor", "Trifylia"),
                      "ADSM_CITY_MESSINIA"), new Array("Xanthi", new Array(
                        "Xanthi", "Abdera", "Myki", "Topeiros"),
                      "ADSM_CITY_KSANTHI"), new Array("Pella", new Array(
                        "Almopia", "Edessa", "Pella", "Skydra"),
                      "ADSM_CITY_PELLA"), new Array("Pieria", new Array(
                        "Dio - Olympos", "Katerini", "Pydna - Kolindros"),
                      "ADSM_CITY_PIERIA"), new Array("Preveza", new Array(
                      "Ziros", "Parga", "Preveza"), "ADSM_CITY_PREVEZA"), new Array(
                      "Rethymno", new Array("Agios Vasileios", "Amari",
                        "Anogeia", "Mylopotamos", "Rethymno"),
                      "ADSM_CITY_RETHIMNO"), new Array("Rhodope", new Array(
                        "Arriana", "Iasmos", "Komotini", "Maroneia - Sapes"),
                      "ADSM_CITY_RODOPI"), new Array("Samos", new Array(
                        "Icaria", "Samos", "Fournoi Korseon"),
                      "ADSM_CITY_SAMOS"), new Array("Serres", new Array(
                        "Amphipolis", "Visaltia", "Emmanouil Pappas",
                        "Irakleia", "Nea Zichni", "Serres", "Sintiki"),
                      "ADSM_CITY_SERRES"), new Array("Trikala", new Array(
                        "Kalambaka", "Pyli", "Trikala", "Farkadona"),
                      "ADSM_CITY_TRIKALA"), new Array("Phthiotis", new Array(
                        "Amfikleia - Elateia", "Domokos", "Lamia", "Lokroi",
                        "Makrakomi", "Molos - Agios Konstantinos", "Stylida"),
                      "ADSM_CITY_FTHIOTIDA"), new Array("Florina", new Array(
                        "Amyntaio", "Prespes", "Florina"),
                      "ADSM_CITY_FLORINA"), new Array("Phocis", new Array(
                      "Delphi", "Dorida"), "ADSM_CITY_FOKIDA"), new Array(
                      "Chalkidiki", new Array("Aristotelis", "Kassandra",
                        "Nea Propontida", "Polygyros", "Sithonia"),
                      "ADSM_CITY_XALKIDIKI"), new Array("Chania", new Array(
                      "Apokoronas", "Gavdos", "Kantanos-Selino", "Kissamos",
                      "Platanias", "Sfakia", "Chania"), "ADSM_CITY_XANIA"),
                    new Array("Chios", new Array("Oinousses", "Chios",
                      "Psara"), "ADSM_CITY_XIOS"));
                  var perioxi = new Array(new Array("Abdera",
                      "ADSM_CITY_KSANTHI_2"), new Array("Acharnes",
                      "ADSM_CITY_ATTIKI_ANATOLIKI_1"), new Array("Aegina",
                      "ADSM_CITY_ATTIKI_PIREAS_2"), new Array("Agathonisi",
                      "ADSM_CITY_DODEKANISA_1"), new Array("Agia",
                      "ADSM_CITY_LARISA_1"), new Array("Agia Paraskevi",
                      "ADSM_CITY_ATTIKI_ATHINA_2"), new Array("Agia Varvara",
                      "ADSM_CITY_ATTIKI_ATHINA_1"), new Array(
                      "Agioi Anargyroi-Kamatero", "ADSM_CITY_ATTIKI_ATHINA_4"
                    ), new Array("Agios Dimitrios",
                      "ADSM_CITY_ATTIKI_ATHINA_3"), new Array(
                      "Agios Efstratios", "ADSM_CITY_LESVOS_1"), new Array(
                      "Agios Nikolaos", "ADSM_CITY_LASITHI_1"), new Array(
                      "Agios Vasileios", "ADSM_CITY_RETHIMNO_1"), new Array(
                      "Agrafa", "ADSM_CITY_EVRITANIA_1"), new Array("Agrinio",
                      "ADSM_CITY_AITOLOKARNANIA_2"), new Array("Aigaleo",
                      "ADSM_CITY_ATTIKI_ATHINA_6"), new Array("Aigialeia",
                      "ADSM_CITY_AXAIA_1"), new Array("Aktio-Vonitsa",
                      "ADSM_CITY_AITOLOKARNANIA_3"), new Array("Alexandreia",
                      "ADSM_CITY_IMATHIA_1"), new Array("Alexandroupoli",
                      "ADSM_CITY_EVROS_1"), new Array("Aliartos",
                      "ADSM_CITY_BOIOTIA_1"), new Array("Alimos",
                      "ADSM_CITY_ATTIKI_ATHINA_7"), new Array("Almopia",
                      "ADSM_CITY_PELLA_1"), new Array("Almyros",
                      "ADSM_CITY_MAGNISIA_1"), new Array("Alonnisos",
                      "ADSM_CITY_MAGNISIA_2"), new Array("Amari",
                      "ADSM_CITY_RETHIMNO_2"), new Array(
                      "Amfikleia - Elateia", "ADSM_CITY_FTHIOTIDA_1"), new Array(
                      "Amfilochia", "ADSM_CITY_AITOLOKARNANIA_4"), new Array(
                      "Amorgos", "ADSM_CITY_KIKLADES_1"), new Array(
                      "Ampelokipoi - Menemeni", "ADSM_CITY_THESSALONIKI_1"),
                    new Array("Amphipolis", "ADSM_CITY_SERRES_1"), new Array(
                      "Amyntaio", "ADSM_CITY_FLORINA_1"), new Array("Anafi",
                      "ADSM_CITY_KIKLADES_2"), new Array(
                      "Andravida - Kyllini", "ADSM_CITY_ILIA_1"), new Array(
                      "Andritsaina", "ADSM_CITY_ILIA_2"), new Array("Andros",
                      "ADSM_CITY_KIKLADES_3"), new Array("Anogeia",
                      "ADSM_CITY_RETHIMNO_3"), new Array("Antiparos",
                      "ADSM_CITY_KIKLADES_4"), new Array("Apokoronas",
                      "ADSM_CITY_XANIA_1"), new Array("Archanes - Asterousia",
                      "ADSM_CITY_IRAKLIO_1"), new Array("Argithea",
                      "ADSM_CITY_KARDITSA_1"), new Array("Argos-Mykines",
                      "ADSM_CITY_ARGOLIDA_1"), new Array("Aristotelis",
                      "ADSM_CITY_XALKIDIKI_1"), new Array("Arriana",
                      "ADSM_CITY_RODOPI_1"), new Array("Arta",
                      "ADSM_CITY_ARTA_1"), new Array("Aspropyrgos",
                      "ADSM_CITY_ATTIKI_DYTIKI_1"), new Array("Astypalaia",
                      "ADSM_CITY_DODEKANISA_2"), new Array("Athens",
                      "ADSM_CITY_ATTIKI_ATHINA_5"), new Array(
                      "Central Tzoumerka", "ADSM_CITY_ARTA_3"), new Array(
                      "Cephalonia", "ADSM_CITY_KEFALLONIA_2"), new Array(
                      "Chaidari", "ADSM_CITY_ATTIKI_ATHINA_33"), new Array(
                      "Chalandri", "ADSM_CITY_ATTIKI_ATHINA_34"), new Array(
                      "Chalcis", "ADSM_CITY_EVIA_8"), new Array("Chalkidona",
                      "ADSM_CITY_THESSALONIKI_13"), new Array("Chania",
                      "ADSM_CITY_XANIA_7"), new Array("Chersonisos",
                      "ADSM_CITY_IRAKLIO_8"), new Array("Chios",
                      "ADSM_CITY_XIOS_2"), new Array("Corfu",
                      "ADSM_CITY_KERKIRA_1"), new Array("Corinthia",
                      "ADSM_CITY_KORINTHIA_2"), new Array("Cythera",
                      "ADSM_CITY_ATTIKI_PIREAS_5"), new Array("Dafni-Ymittos",
                      "ADSM_CITY_ATTIKI_ATHINA_13"), new Array("Delphi",
                      "ADSM_CITY_FOKIDA_1"), new Array("Delta",
                      "ADSM_CITY_THESSALONIKI_3"), new Array("Deskati",
                      "ADSM_CITY_GREVENA_2"), new Array("Didymoteicho",
                      "ADSM_CITY_EVROS_2"), new Array("Dio - Olympos",
                      "ADSM_CITY_PIERIA_1"), new Array("Dionysos",
                      "ADSM_CITY_ATTIKI_ANATOLIKI_3"), new Array(
                      "Dirfys-Messapia", "ADSM_CITY_EVIA_1"), new Array(
                      "Distomo-Arachova-Antikyra", "ADSM_CITY_BOIOTIA_2"),
                    new Array("Dodoni", "ADSM_CITY_IOANNINA_2"), new Array(
                      "Domokos", "ADSM_CITY_FTHIOTIDA_2"), new Array("Dorida",
                      "ADSM_CITY_FOKIDA_2"), new Array("Doxato",
                      "ADSM_CITY_DRAMA_1"), new Array("Drama",
                      "ADSM_CITY_DRAMA_2"), new Array("Edessa",
                      "ADSM_CITY_PELLA_2"), new Array("Elafonisos",
                      "ADSM_CITY_LAKONIA_1"), new Array("Elassona",
                      "ADSM_CITY_LARISA_2"), new Array("Elefsina",
                      "ADSM_CITY_ATTIKI_DYTIKI_2"), new Array(
                      "Elliniko-Argyroupoli", "ADSM_CITY_ATTIKI_ATHINA_14"),
                    new Array("Emmanouil Pappas", "ADSM_CITY_SERRES_3"), new Array(
                      "Eordaia", "ADSM_CITY_KOZANI_3"), new Array("Epidaurus",
                      "ADSM_CITY_ARGOLIDA_2"), new Array("Eretria",
                      "ADSM_CITY_EVIA_2"), new Array("Ermionida",
                      "ADSM_CITY_ARGOLIDA_3"), new Array("Erymanthos",
                      "ADSM_CITY_AXAIA_3"), new Array("Evrotas",
                      "ADSM_CITY_LAKONIA_2"), new Array("Faistos",
                      "ADSM_CITY_IRAKLIO_7"), new Array("Farkadona",
                      "ADSM_CITY_TRIKALA_4"), new Array("Farsala",
                      "ADSM_CITY_LARISA_7"), new Array(
                      "Filadelfeia - Chalkidona",
                      "ADSM_CITY_ATTIKI_ATHINA_31"), new Array("Filiates",
                      "ADSM_CITY_THESPROTIA_3"), new Array(
                      "Filothei - Psychiko", "ADSM_CITY_ATTIKI_ATHINA_32"),
                    new Array("Florina", "ADSM_CITY_FLORINA_3"), new Array(
                      "Folegandros", "ADSM_CITY_KIKLADES_19"), new Array(
                      "Fournoi Korseon", "ADSM_CITY_SAMOS_3"), new Array(
                      "Fyli", "ADSM_CITY_ATTIKI_DYTIKI_5"), new Array(
                      "Galatsi", "ADSM_CITY_ATTIKI_ATHINA_11"), new Array(
                      "Gavdos", "ADSM_CITY_XANIA_2"), new Array(
                      "Georgios Karaiskakis", "ADSM_CITY_ARTA_2"), new Array(
                      "Glyfada", "ADSM_CITY_ATTIKI_ATHINA_12"), new Array(
                      "Gortyna", "ADSM_CITY_IRAKLIO_3"), new Array("Gortynia",
                      "ADSM_CITY_ARKADIA_2"), new Array("Grevena",
                      "ADSM_CITY_GREVENA_1"), new Array("Heraklion",
                      "ADSM_CITY_IRAKLIO_4"), new Array("Hydra",
                      "ADSM_CITY_ATTIKI_PIREAS_13"), new Array("Iasmos",
                      "ADSM_CITY_RODOPI_2"), new Array("Icaria",
                      "ADSM_CITY_SAMOS_1"), new Array("Ierapetra",
                      "ADSM_CITY_LASITHI_2"), new Array("Igoumenitsa",
                      "ADSM_CITY_THESPROTIA_1"), new Array("Ilida",
                      "ADSM_CITY_ILIA_5"), new Array("Ilio",
                      "ADSM_CITY_ATTIKI_ATHINA_17"), new Array("Ilioupoli",
                      "ADSM_CITY_ATTIKI_ATHINA_16"), new Array("Ioannina",
                      "ADSM_CITY_IOANNINA_5"), new Array("Ios",
                      "ADSM_CITY_KIKLADES_6"), new Array("Irakleia",
                      "ADSM_CITY_SERRES_4"), new Array("Istiaia - Aidipsos",
                      "ADSM_CITY_EVIA_3"), new Array("Ithaca",
                      "ADSM_CITY_KEFALLONIA_1"), new Array("Kaisariani",
                      "ADSM_CITY_ATTIKI_ATHINA_18"), new Array("Kalamaria",
                      "ADSM_CITY_THESSALONIKI_7"), new Array("Kalamata",
                      "ADSM_CITY_MESSINIA_2"), new Array("Kalambaka",
                      "ADSM_CITY_TRIKALA_1"), new Array("Kalavryta",
                      "ADSM_CITY_AXAIA_4"), new Array("Kallithea",
                      "ADSM_CITY_ATTIKI_ATHINA_19"), new Array("Kalymnos",
                      "ADSM_CITY_DODEKANISA_3"), new Array("Kantanos-Selino",
                      "ADSM_CITY_XANIA_3"), new Array("Karditsa",
                      "ADSM_CITY_KARDITSA_2"), new Array("Karpathos",
                      "ADSM_CITY_DODEKANISA_4"), new Array("Karpenisi",
                      "ADSM_CITY_EVRITANIA_2"), new Array("Karystos",
                      "ADSM_CITY_EVIA_4"), new Array("Kasos",
                      "ADSM_CITY_DODEKANISA_5"), new Array("Kassandra",
                      "ADSM_CITY_XALKIDIKI_2"), new Array(
                      "Kastellorizo - Megisti", "ADSM_CITY_DODEKANISA_9"),
                    new Array("Kastoria", "ADSM_CITY_KASTORIA_1"), new Array(
                      "Katerini", "ADSM_CITY_PIERIA_2"), new Array(
                      "Kato Nevrokopi", "ADSM_CITY_DRAMA_3"), new Array(
                      "Kavala", "ADSM_CITY_KABALA_2"), new Array("Kea",
                      "ADSM_CITY_KIKLADES_7"), new Array(
                      "Keratsini-Drapetsona", "ADSM_CITY_ATTIKI_PIREAS_3"),
                    new Array("Kifisia", "ADSM_CITY_ATTIKI_ATHINA_20"), new Array(
                      "Kileler", "ADSM_CITY_LARISA_3"), new Array("Kilkis",
                      "ADSM_CITY_KILKIS_1"), new Array("Kimolos",
                      "ADSM_CITY_KIKLADES_8"), new Array("Kissamos",
                      "ADSM_CITY_XANIA_4"), new Array("Komotini",
                      "ADSM_CITY_RODOPI_3"), new Array("Konitsa",
                      "ADSM_CITY_IOANNINA_6"), new Array("Kordelio - Evosmos",
                      "ADSM_CITY_THESSALONIKI_8"), new Array("Korydallos",
                      "ADSM_CITY_ATTIKI_PIREAS_4"), new Array("Kos",
                      "ADSM_CITY_DODEKANISA_6"), new Array("Kozani",
                      "ADSM_CITY_KOZANI_4"), new Array("Kropia",
                      "ADSM_CITY_ATTIKI_ANATOLIKI_4"), new Array(
                      "Kymi - Aliveri", "ADSM_CITY_EVIA_5"), new Array(
                      "Kythnos", "ADSM_CITY_KIKLADES_9"), new Array(
                      "Lake Plastiras", "ADSM_CITY_KARDITSA_3"), new Array(
                      "Lamia", "ADSM_CITY_FTHIOTIDA_3"), new Array("Langadas",
                      "ADSM_CITY_THESSALONIKI_9"), new Array("Larissa",
                      "ADSM_CITY_LARISA_4"), new Array("Lavreotiki",
                      "ADSM_CITY_ATTIKI_ANATOLIKI_5"), new Array("Lefkada",
                      "ADSM_CITY_LEFKADA_1"), new Array("Leipsoi",
                      "ADSM_CITY_DODEKANISA_7"), new Array("Lemnos",
                      "ADSM_CITY_LESVOS_3"), new Array("Leros",
                      "ADSM_CITY_DODEKANISA_8"), new Array("Lesbos",
                      "ADSM_CITY_LESVOS_2"), new Array("Livadeia",
                      "ADSM_CITY_BOIOTIA_4"), new Array("Lokroi",
                      "ADSM_CITY_FTHIOTIDA_4"), new Array(
                      "Loutraki - Agioi Theodoroi", "ADSM_CITY_KORINTHIA_3"),
                    new Array("Lykovrysi - Pefki",
                      "ADSM_CITY_ATTIKI_ATHINA_21"), new Array("Makrakomi",
                      "ADSM_CITY_FTHIOTIDA_5"), new Array("Malevizi",
                      "ADSM_CITY_IRAKLIO_5"), new Array("Mandra - Eidyllia",
                      "ADSM_CITY_ATTIKI_DYTIKI_3"), new Array(
                      "Mantoudi - Limni - Agia Anna", "ADSM_CITY_EVIA_6"),
                    new Array("Marathon", "ADSM_CITY_ATTIKI_ANATOLIKI_6"),
                    new Array("Markopoulo Mesogaias",
                      "ADSM_CITY_ATTIKI_ANATOLIKI_7"), new Array(
                      "Maroneia - Sapes", "ADSM_CITY_RODOPI_4"), new Array(
                      "Marousi", "ADSM_CITY_ATTIKI_ATHINA_8"), new Array(
                      "Megalopoli", "ADSM_CITY_ARKADIA_3"), new Array(
                      "Meganisi", "ADSM_CITY_LEFKADA_2"), new Array("Megara",
                      "ADSM_CITY_ATTIKI_DYTIKI_4"), new Array("Messini",
                      "ADSM_CITY_MESSINIA_3"), new Array("Metamorfosi",
                      "ADSM_CITY_ATTIKI_ATHINA_22"), new Array("Metsovo",
                      "ADSM_CITY_IOANNINA_7"), new Array("Milos",
                      "ADSM_CITY_KIKLADES_10"), new Array("Minoa Pediada",
                      "ADSM_CITY_IRAKLIO_6"), new Array("Missolonghi",
                      "ADSM_CITY_AITOLOKARNANIA_1"), new Array(
                      "Molos - Agios Konstantinos", "ADSM_CITY_FTHIOTIDA_6"),
                    new Array("Monemvasia", "ADSM_CITY_LAKONIA_4"), new Array(
                      "Moschato - Tavros", "ADSM_CITY_ATTIKI_ATHINA_23"), new Array(
                      "Mouzaki", "ADSM_CITY_KARDITSA_4"), new Array("Myki",
                      "ADSM_CITY_KSANTHI_3"), new Array("Mykonos",
                      "ADSM_CITY_KIKLADES_11"), new Array("Mylopotamos",
                      "ADSM_CITY_RETHIMNO_4"), new Array("Nafpaktia",
                      "ADSM_CITY_AITOLOKARNANIA_6"), new Array("Nafplio",
                      "ADSM_CITY_ARGOLIDA_4"), new Array("Naousa",
                      "ADSM_CITY_IMATHIA_3"), new Array(
                      "Naxos and Lesser Cyclades", "ADSM_CITY_KIKLADES_12"),
                    new Array("Nea Ionia", "ADSM_CITY_ATTIKI_ATHINA_24"), new Array(
                      "Nea Propontida", "ADSM_CITY_XALKIDIKI_3"), new Array(
                      "Nea Smyrni", "ADSM_CITY_ATTIKI_ATHINA_25"), new Array(
                      "Nea Zichni", "ADSM_CITY_SERRES_5"), new Array(
                      "Neapoli - Sykies", "ADSM_CITY_THESSALONIKI_10"), new Array(
                      "Nemea", "ADSM_CITY_KORINTHIA_4"), new Array("Nestorio",
                      "ADSM_CITY_KASTORIA_2"), new Array("Nestos",
                      "ADSM_CITY_KABALA_3"), new Array(
                      "Nikaia - Agios Ioannis Rentis",
                      "ADSM_CITY_ATTIKI_PIREAS_6"), new Array(
                      "Nikolaos Skoufas", "ADSM_CITY_ARTA_4"), new Array(
                      "Nisyros", "ADSM_CITY_DODEKANISA_10"), new Array(
                      "North Kynouria", "ADSM_CITY_ARKADIA_1"), new Array(
                      "North Tzoumerka", "ADSM_CITY_IOANNINA_1"), new Array(
                      "Oichalia", "ADSM_CITY_MESSINIA_4"), new Array(
                      "Oinousses", "ADSM_CITY_XIOS_1"), new Array("Olympia",
                      "ADSM_CITY_ILIA_3"), new Array("Oraiokastro",
                      "ADSM_CITY_THESSALONIKI_14"), new Array("Orchomenos",
                      "ADSM_CITY_BOIOTIA_5"), new Array("Orestiada",
                      "ADSM_CITY_EVROS_3"), new Array("Orestida",
                      "ADSM_CITY_KASTORIA_3"), new Array("Oropedio Lasithiou",
                      "ADSM_CITY_LASITHI_3"), new Array("Oropos",
                      "ADSM_CITY_ATTIKI_ANATOLIKI_13"), new Array("Paiania",
                      "ADSM_CITY_ATTIKI_ANATOLIKI_8"), new Array("Paionia",
                      "ADSM_CITY_KILKIS_2"), new Array("Palaio Faliro",
                      "ADSM_CITY_ATTIKI_ATHINA_26"), new Array("Palamas",
                      "ADSM_CITY_KARDITSA_5"), new Array("Pallini",
                      "ADSM_CITY_ATTIKI_ANATOLIKI_9"), new Array("Pangaio",
                      "ADSM_CITY_KABALA_4"), new Array("Papagou - Cholargos",
                      "ADSM_CITY_ATTIKI_ATHINA_27"), new Array("Paranesti",
                      "ADSM_CITY_DRAMA_4"), new Array("Parga",
                      "ADSM_CITY_PREVEZA_2"), new Array("Paros",
                      "ADSM_CITY_KIKLADES_13"), new Array("Patmos",
                      "ADSM_CITY_DODEKANISA_11"), new Array("Patras",
                      "ADSM_CITY_AXAIA_5"), new Array("Pavlos Melas",
                      "ADSM_CITY_THESSALONIKI_11"), new Array("Paxi",
                      "ADSM_CITY_KERKIRA_2"), new Array("Pella",
                      "ADSM_CITY_PELLA_3"), new Array("Penteli",
                      "ADSM_CITY_ATTIKI_ATHINA_28"), new Array("Perama",
                      "ADSM_CITY_ATTIKI_PIREAS_8"), new Array("Peristeri",
                      "ADSM_CITY_ATTIKI_ATHINA_29"), new Array("Petroupoli",
                      "ADSM_CITY_ATTIKI_ATHINA_30"), new Array("Pineios",
                      "ADSM_CITY_ILIA_6"), new Array("Piraeus",
                      "ADSM_CITY_ATTIKI_PIREAS_7"), new Array("Platanias",
                      "ADSM_CITY_XANIA_5"), new Array("Pogoni",
                      "ADSM_CITY_IOANNINA_8"), new Array("Polygyros",
                      "ADSM_CITY_XALKIDIKI_4"), new Array("Poros",
                      "ADSM_CITY_ATTIKI_PIREAS_9"), new Array("Prespes",
                      "ADSM_CITY_FLORINA_2"), new Array("Preveza",
                      "ADSM_CITY_PREVEZA_3"), new Array("Prosotsani",
                      "ADSM_CITY_DRAMA_5"), new Array("Psara",
                      "ADSM_CITY_XIOS_3"), new Array("Pydna - Kolindros",
                      "ADSM_CITY_PIERIA_3"), new Array("Pylaia - Chortiatis",
                      "ADSM_CITY_THESSALONIKI_12"), new Array("Pyli",
                      "ADSM_CITY_TRIKALA_2"), new Array("Pylos - Nestor",
                      "ADSM_CITY_MESSINIA_5"), new Array("Pyrgos",
                      "ADSM_CITY_ILIA_7"), new Array("Rafina - Pikermi",
                      "ADSM_CITY_ATTIKI_ANATOLIKI_10"), new Array("Rethymno",
                      "ADSM_CITY_RETHIMNO_5"), new Array("Rhodes",
                      "ADSM_CITY_DODEKANISA_12"), new Array("Rigas Feraios",
                      "ADSM_CITY_MAGNISIA_6"), new Array("Salamis Island",
                      "ADSM_CITY_ATTIKI_PIREAS_10"), new Array("Samos",
                      "ADSM_CITY_SAMOS_2"), new Array("Samothrace",
                      "ADSM_CITY_EVROS_4"), new Array("Saronikos",
                      "ADSM_CITY_ATTIKI_ANATOLIKI_11"), new Array("Serifos",
                      "ADSM_CITY_KIKLADES_14"), new Array("Serres",
                      "ADSM_CITY_SERRES_6"), new Array("Servia - Velventos",
                      "ADSM_CITY_KOZANI_1"), new Array("Sfakia",
                      "ADSM_CITY_XANIA_6"), new Array("Sifnos",
                      "ADSM_CITY_KIKLADES_16"), new Array("Sikinos",
                      "ADSM_CITY_KIKLADES_15"), new Array("Sikyona",
                      "ADSM_CITY_KORINTHIA_6"), new Array("Sintiki",
                      "ADSM_CITY_SERRES_7"), new Array("Sithonia",
                      "ADSM_CITY_XALKIDIKI_5"), new Array("Sitia",
                      "ADSM_CITY_LASITHI_4"), new Array("Skiathos",
                      "ADSM_CITY_MAGNISIA_7"), new Array("Skopelos",
                      "ADSM_CITY_MAGNISIA_8"), new Array("Skydra",
                      "ADSM_CITY_PELLA_4"), new Array("Skyros",
                      "ADSM_CITY_EVIA_7"), new Array("Sofades",
                      "ADSM_CITY_KARDITSA_6"), new Array("Soufli",
                      "ADSM_CITY_EVROS_5"), new Array("Souli",
                      "ADSM_CITY_THESPROTIA_2"), new Array("South Kynouria",
                      "ADSM_CITY_ARKADIA_4"), new Array("South Pelion",
                      "ADSM_CITY_MAGNISIA_5"), new Array("Sparti",
                      "ADSM_CITY_LAKONIA_5"), new Array("Spata - Artemida",
                      "ADSM_CITY_ATTIKI_ANATOLIKI_12"), new Array("Spetses",
                      "ADSM_CITY_ATTIKI_PIREAS_11"), new Array("Stylida",
                      "ADSM_CITY_FTHIOTIDA_7"), new Array("Symi",
                      "ADSM_CITY_DODEKANISA_13"), new Array(
                      "Syros - Ermoupoli", "ADSM_CITY_KIKLADES_17"), new Array(
                      "Tanagra", "ADSM_CITY_BOIOTIA_6"), new Array("Tempi",
                      "ADSM_CITY_LARISA_5"), new Array("Thasos",
                      "ADSM_CITY_KABALA_1"), new Array("Thebes",
                      "ADSM_CITY_BOIOTIA_3"), new Array("Thermaikos",
                      "ADSM_CITY_THESSALONIKI_4"), new Array("Thermi",
                      "ADSM_CITY_THESSALONIKI_5"), new Array("Thermo",
                      "ADSM_CITY_AITOLOKARNANIA_5"), new Array("Thessaloniki",
                      "ADSM_CITY_THESSALONIKI_6"), new Array("Thiras",
                      "ADSM_CITY_KIKLADES_5"), new Array("Tilos",
                      "ADSM_CITY_DODEKANISA_14"), new Array("Tinos",
                      "ADSM_CITY_KIKLADES_18"), new Array("Topeiros",
                      "ADSM_CITY_KSANTHI_4"), new Array("Trifylia",
                      "ADSM_CITY_MESSINIA_6"), new Array("Trikala",
                      "ADSM_CITY_TRIKALA_3"), new Array("Tripoli",
                      "ADSM_CITY_ARKADIA_5"), new Array("Troizinia",
                      "ADSM_CITY_ATTIKI_PIREAS_12"), new Array("Tyrnavos",
                      "ADSM_CITY_LARISA_6"), new Array(
                      "Vari - Voula - Vouliagmeni",
                      "ADSM_CITY_ATTIKI_ANATOLIKI_2"), new Array(
                      "Velo - Vocha", "ADSM_CITY_KORINTHIA_1"), new Array(
                      "Veria", "ADSM_CITY_IMATHIA_2"), new Array("Viannos",
                      "ADSM_CITY_IRAKLIO_2"), new Array("Visaltia",
                      "ADSM_CITY_SERRES_2"), new Array("Voio",
                      "ADSM_CITY_KOZANI_2"), new Array("Volos",
                      "ADSM_CITY_MAGNISIA_3"), new Array("Volvi",
                      "ADSM_CITY_THESSALONIKI_2"), new Array("Vrilissia",
                      "ADSM_CITY_ATTIKI_ATHINA_9"), new Array("Vyronas",
                      "ADSM_CITY_ATTIKI_ATHINA_10"), new Array("West Achaea",
                      "ADSM_CITY_AXAIA_2"), new Array("West Mani",
                      "ADSM_CITY_MESSINIA_1"), new Array("Xanthi",
                      "ADSM_CITY_KSANTHI_1"), new Array("Xiromero",
                      "ADSM_CITY_AITOLOKARNANIA_7"), new Array(
                      "Xylokastro - Evrostina", "ADSM_CITY_KORINTHIA_5"), new Array(
                      "Zacharo", "ADSM_CITY_ILIA_4"), new Array(
                      "Zagora - Mouresi", "ADSM_CITY_MAGNISIA_4"), new Array(
                      "Zagori", "ADSM_CITY_IOANNINA_3"), new Array(
                      "Zakynthos", "ADSM_CITY_ZAKYNTHOS_1"), new Array(
                      "Ziros", "ADSM_CITY_PREVEZA_1"), new Array("Zitsa",
                      "ADSM_CITY_IOANNINA_4"), new Array("Zografou",
                      "ADSM_CITY_ATTIKI_ATHINA_15"), new Array("Μani",
                      "ADSM_CITY_LAKONIA_3"));

                  var bl_cities = new Array(new Array("Aksakovo",
                      "ADSM_BL_CITY_AKSAKOVO"), new Array("Asenovgrad",
                      "ADSM_BL_CITY_ASENOVGRAD"), new Array("Aytos",
                      "ADSM_BL_CITY_AYTOS"), new Array("Balchik",
                      "ADSM_BL_CITY_BALCHIK"), new Array("Bankya",
                      "ADSM_BL_CITY_BANKYA"), new Array("Bansko",
                      "ADSM_BL_CITY_BANSKO"), new Array("Belene",
                      "ADSM_BL_CITY_BELENE"), new Array("Belogradchik",
                      "ADSM_BL_CITY_BELOGRADCHIK"), new Array("Beloslav",
                      "ADSM_BL_CITY_BELOSLAV"), new Array("Berkovitsa",
                      "ADSM_BL_CITY_BERKOVITSA"), new Array("Blagoevgrad",
                      "ADSM_BL_CITY_BLAGOEVGRAD"), new Array("Bobov Dol",
                      "ADSM_BL_CITY_BOBOV_DOL"), new Array("Botevgrad",
                      "ADSM_BL_CITY_BOTEVGRAD"), new Array("Bozhurishte",
                      "ADSM_BL_CITY_BOZHURISHTE"), new Array("Burgas",
                      "ADSM_BL_CITY_BURGAS"), new Array("Byala",
                      "ADSM_BL_CITY_BYALA"), new Array("Byala Slatina",
                      "ADSM_BL_CITY_BYALA_SLATINA"), new Array("Chepelare",
                      "ADSM_BL_CITY_CHEPELARE"), new Array("Cherven Bryag",
                      "ADSM_BL_CITY_CHERVEN_BRYAG"), new Array("Chirpan",
                      "ADSM_BL_CITY_CHIRPAN"), new Array("Devin",
                      "ADSM_BL_CITY_DEVIN"), new Array("Devnya",
                      "ADSM_BL_CITY_DEVNYA"), new Array("Dimitrovgrad",
                      "ADSM_BL_CITY_DIMITROVGRAD"), new Array("Dobrich",
                      "ADSM_BL_CITY_DOBRICH"), new Array("Dolni Chiflik",
                      "ADSM_BL_CITY_DOLNI_CHIFLIK"), new Array("Dryanovo",
                      "ADSM_BL_CITY_DRYANOVO"), new Array("Dulovo",
                      "ADSM_BL_CITY_DULOVO"), new Array("Dupnitsa",
                      "ADSM_BL_CITY_DUPNITSA"), new Array("Elena",
                      "ADSM_BL_CITY_ELENA"), new Array("Elhovo",
                      "ADSM_BL_CITY_ELHOVO"), new Array("Elin Pelin",
                      "ADSM_BL_CITY_ELIN_PELIN"), new Array("Etropole",
                      "ADSM_BL_CITY_ETROPOLE"), new Array("Gabrovo",
                      "ADSM_BL_CITY_GABROVO"), new Array("Galabovo",
                      "ADSM_BL_CITY_GALABOVO"), new Array("General Toshevo",
                      "ADSM_BL_CITY_GENERAL_TOSHEVO"), new Array(
                      "Gorna Oryahovitsa", "ADSM_BL_CITY_GORNA_ORYAHOVITSA"),
                    new Array("Gotse Delchev", "ADSM_BL_CITY_GOTSE_DELCHEV"),
                    new Array("Harmanli", "ADSM_BL_CITY_HARMANLI"), new Array(
                      "Haskovo", "ADSM_BL_CITY_HASKOVO"), new Array("Hisarya",
                      "ADSM_BL_CITY_HISARYA"), new Array("Ihtiman",
                      "ADSM_BL_CITY_IHTIMAN"), new Array("Isperih",
                      "ADSM_BL_CITY_ISPERIH"), new Array("Kardzhali",
                      "ADSM_BL_CITY_KARDZHALI"), new Array("Karlovo",
                      "ADSM_BL_CITY_KARLOVO"), new Array("Karnobat",
                      "ADSM_BL_CITY_KARNOBAT"), new Array("Kavarna",
                      "ADSM_BL_CITY_KAVARNA"), new Array("Kazanlak",
                      "ADSM_BL_CITY_KAZANLAK"), new Array("Knezha",
                      "ADSM_BL_CITY_KNEZHA"), new Array("Kostenets",
                      "ADSM_BL_CITY_KOSTENETS"), new Array("Kostinbrod",
                      "ADSM_BL_CITY_KOSTINBROD"), new Array("Kotel",
                      "ADSM_BL_CITY_KOTEL"), new Array("Kozloduy",
                      "ADSM_BL_CITY_KOZLODUY"), new Array("Krichim",
                      "ADSM_BL_CITY_KRICHIM"), new Array("Kubrat",
                      "ADSM_BL_CITY_KUBRAT"), new Array("Kuklen",
                      "ADSM_BL_CITY_KUKLEN"), new Array("Kyustendil",
                      "ADSM_BL_CITY_KYUSTENDIL"), new Array("Levski",
                      "ADSM_BL_CITY_LEVSKI"), new Array("Lom",
                      "ADSM_BL_CITY_LOM"), new Array("Lovech",
                      "ADSM_BL_CITY_LOVECH"), new Array("Lukovit",
                      "ADSM_BL_CITY_LUKOVIT"), new Array("Lyaskovets",
                      "ADSM_BL_CITY_LYASKOVETS"), new Array("Lyubimets",
                      "ADSM_BL_CITY_LYUBIMETS"), new Array("Madan",
                      "ADSM_BL_CITY_MADAN"), new Array("Mezdra",
                      "ADSM_BL_CITY_MEZDRA"), new Array("Momchilgrad",
                      "ADSM_BL_CITY_MOMCHILGRAD"), new Array("Montana",
                      "ADSM_BL_CITY_MONTANA"), new Array("Nesebar",
                      "ADSM_BL_CITY_NESEBAR"), new Array("Nova Zagora",
                      "ADSM_BL_CITY_NOVA_ZAGORA"), new Array("Novi Iskar",
                      "ADSM_BL_CITY_NOVI_ISKAR"), new Array("Novi Pazar",
                      "ADSM_BL_CITY_NOVI_PAZAR"), new Array("Omurtag",
                      "ADSM_BL_CITY_OMURTAG"), new Array("Oryahovo",
                      "ADSM_BL_CITY_ORYAHOVO"), new Array("Panagyurishte",
                      "ADSM_BL_CITY_PANAGYURISHTE"), new Array("Parvomay",
                      "ADSM_BL_CITY_PARVOMAY"), new Array("Pavlikeni",
                      "ADSM_BL_CITY_PAVLIKENI"), new Array("Pazardzhik",
                      "ADSM_BL_CITY_PAZARDZHIK"), new Array("Pernik",
                      "ADSM_BL_CITY_PERNIK"), new Array("Perushtitsa",
                      "ADSM_BL_CITY_PERUSHTITSA"), new Array("Peshtera",
                      "ADSM_BL_CITY_PESHTERA"), new Array("Petrich",
                      "ADSM_BL_CITY_PETRICH"), new Array("Pirdop",
                      "ADSM_BL_CITY_PIRDOP"), new Array("Pleven",
                      "ADSM_BL_CITY_PLEVEN"), new Array("Plovdiv",
                      "ADSM_BL_CITY_PLOVDIV"), new Array("Pomorie",
                      "ADSM_BL_CITY_POMORIE"), new Array("Popovo",
                      "ADSM_BL_CITY_POPOVO"), new Array("Provadiya",
                      "ADSM_BL_CITY_PROVADIYA"), new Array("Radnevo",
                      "ADSM_BL_CITY_RADNEVO"), new Array("Radomir",
                      "ADSM_BL_CITY_RADOMIR"), new Array("Rakitovo",
                      "ADSM_BL_CITY_RAKITOVO"), new Array("Rakovski",
                      "ADSM_BL_CITY_RAKOVSKI"), new Array("Razgrad",
                      "ADSM_BL_CITY_RAZGRAD"), new Array("Razlog",
                      "ADSM_BL_CITY_RAZLOG"), new Array("Ruse",
                      "ADSM_BL_CITY_RUSE"), new Array("Saedinenie",
                      "ADSM_BL_CITY_SAEDINENIE"), new Array("Samokov",
                      "ADSM_BL_CITY_SAMOKOV"), new Array("Sandanski",
                      "ADSM_BL_CITY_SANDANSKI"), new Array("Septemvri",
                      "ADSM_BL_CITY_SEPTEMVRI"), new Array("Sevlievo",
                      "ADSM_BL_CITY_SEVLIEVO"), new Array("Shumen",
                      "ADSM_BL_CITY_SHUMEN"), new Array("Silistra",
                      "ADSM_BL_CITY_SILISTRA"), new Array("Simeonovgrad",
                      "ADSM_BL_CITY_SIMEONOVGRAD"), new Array("Simitli",
                      "ADSM_BL_CITY_SIMITLI"), new Array("Sliven",
                      "ADSM_BL_CITY_SLIVEN"), new Array("Slivnitsa",
                      "ADSM_BL_CITY_SLIVNITSA"), new Array("Smolyan",
                      "ADSM_BL_CITY_SMOLYAN"), new Array("Sofia",
                      "ADSM_BL_CITY_SOFIA"), new Array("Sopot",
                      "ADSM_BL_CITY_SOPOT"), new Array("Sozopol",
                      "ADSM_BL_CITY_SOZOPOL"), new Array("Sredets",
                      "ADSM_BL_CITY_SREDETS"), new Array("Stamboliyski",
                      "ADSM_BL_CITY_STAMBOLIYSKI"), new Array("Stara Zagora",
                      "ADSM_BL_CITY_STARA_ZAGORA"), new Array("Straldzha",
                      "ADSM_BL_CITY_STRALDZHA"), new Array("Strazhitsa",
                      "ADSM_BL_CITY_STRAZHITSA"), new Array("Svilengrad",
                      "ADSM_BL_CITY_SVILENGRAD"), new Array("Svishtov",
                      "ADSM_BL_CITY_SVISHTOV"), new Array("Svoge",
                      "ADSM_BL_CITY_SVOGE"), new Array("Targovishte",
                      "ADSM_BL_CITY_TARGOVISHTE"), new Array("Tervel",
                      "ADSM_BL_CITY_TERVEL"), new Array("Teteven",
                      "ADSM_BL_CITY_TETEVEN"), new Array("Topolovgrad",
                      "ADSM_BL_CITY_TOPOLOVGRAD"), new Array("Troyan",
                      "ADSM_BL_CITY_TROYAN"), new Array("Tryavna",
                      "ADSM_BL_CITY_TRYAVNA"), new Array("Tsarevo",
                      "ADSM_BL_CITY_TSAREVO"), new Array("Tutrakan",
                      "ADSM_BL_CITY_TUTRAKAN"), new Array("Tvarditsa",
                      "ADSM_BL_CITY_TVARDITSA"), new Array("Varna",
                      "ADSM_BL_CITY_VARNA"), new Array("Varshets",
                      "ADSM_BL_CITY_VARSHETS"), new Array("Veliki Preslav",
                      "ADSM_BL_CITY_VELIKI_PRESLAV"), new Array(
                      "Veliko Tarnovo", "ADSM_BL_CITY_VELIKO_TARNOVO"), new Array(
                      "Velingrad", "ADSM_BL_CITY_VELINGRAD"), new Array(
                      "Vidin", "ADSM_BL_CITY_VIDIN"), new Array("Vratsa",
                      "ADSM_BL_CITY_VRATSA"), new Array("Yakoruda",
                      "ADSM_BL_CITY_YAKORUDA"), new Array("Yambol",
                      "ADSM_BL_CITY_YAMBOL"), new Array("Zlatitsa",
                      "ADSM_BL_CITY_ZLATITSA"), new Array("Zlatograd",
                      "ADSM_BL_CITY_ZLATOGRAD"));

                  var cy_cities = new Array(new Array("Αμμόχωστος", new Array(
                      "Αγία Θέκλα", "Αγία Μαρίνα", "Αγία Νάπα",
                      "Αγία Τριάδα", "Αμμόχωστος", "Αυγόρου", "Βρυσούλες",
                      "Δασάκι Άχνας", "Δερύνεια", "Κάβο Γκρέκο", "Κάππαρης",
                      "Κόννος", "Λιοπέτρι", "Παραλίμνι", "Περνέρα",
                      "Πρωταράς", "Σωτήρ", "Φρέναρος"),
                    "ADSM_CY_CITY_AMOXOSTOS"), new Array("Λάρνακα", new Array(
                    "Αβδελλερό", "Αγγλισίδες", "Αγία Άννα",
                    "Αγίοι Βαβατσινίας", "Άγιος Θεόδωρος Σκαρίνου",
                    "Αθηαίνου", "Αλαμινός", "Αλεθρικό ", "Αναφωτίδ",
                    "Απλάντα", "Αραδίππου", "Βαβατσινιά", "Βάβλα",
                    "Βασιλικά", "Δεκέλεια", "Δελίκηπος", "Δρομολαξιά",
                    "Δρυς Κάτω", "Ζύγι", "Καλαβασός", "Καλό Χωριό",
                    "Κελλιά", "Κιβισίλι", "Κίτι", "Κλαυδιά", "Κόρνος",
                    "Κόση", "Κοφίνου", "Λάγεια", "Λάρνακα", "Λειβάδια",
                    "Λεύκαρα Κάτω", "Λεύκαρα Πάνω", "Μαζωτός", "Μαρί",
                    "Μαρώνι", "Μελίνη", "Μελούσεια", "Μενεού", "Μενόγεια",
                    "Μοσφιλωτή", "Ξυλοτύμπου", "Ξυλοφάγου", "Οδού", "Ορά",
                    "Ορμίδεια", "Ορόκλινη", "Περβόλια", "Πύλα", "Πυργά",
                    "Σκαρίνου", "Σοφτάδες", "Τερσεφάνου", "Τόχνη",
                    "Τρεμετουσιά", "Τρούλλοι", "Χοιροκοιτία",
                    "Ψεματισμένος", "Ψευδάς"), "ADSM_CY_CITY_LARNAKA"), new Array(
                    "Λεμεσός", new Array("Λεμεσός", "Αγία Φύλα",
                      "Άγιος Αθανάσιος", "Άγιος Αμβρόσιος",
                      "Άγιος Γεώργιος", "Άγιος Δημήτριος",
                      "Άγιος Θεόδωρος Αγρού", "Άγιος Ιωάννης Αγρού",
                      "Άγιος Κωνσταντίνος", "Άγιος Νικόλαος", "Άγιος Συλάς",
                      "Άγιος Τύχωνας", "Αγρίδια", "Αγρός", "Ακαπνού",
                      "Ακρούντα", "Ακρωτήρι", "Ακτή Κυβερνήτη", "Άλασσα",
                      "Αλέκτορα", "Αμαθούντα", "Αμίαντος Κάτω",
                      "Αμίαντος Πάνω", "Ανώγυρα", "Απεσιά", "Αρακαπάς",
                      "Αρμενοχώρι", "Άρσος", "Ασγάτα", "Ασώματος",
                      "Αυδήμου", "Αψιού", "Βάσα Κελλακίου",
                      "Βάσα Κοιλανίου", "Βίκλα", "Βουνί", "Γεράσα",
                      "Γερμασόγεια", "Γεροβάσα", "Διερώνα", "Δύμες", "Δωρά",
                      "Δωρός", "Επισκοπή", "Επταγώνεια", "Ερήμη", "Ζακάκι",
                      "Ζανατζιά (Ζανακιά)", "Ζύγι", "Ζωοπηγή", "Καλό Χωριό",
                      "Καμινάρια", "Καντού", "Καπηλειό", "Κελλάκι",
                      "Κιβίδες Κάτω", "Κιβίδες Πάνω", "Κισσούσα", "Κλωνάρι",
                      "Κοιλάνι", "Κολόσσι", "Κολούμπια", "Κορφή",
                      "Κυπερούντα", "Λάνεια", "Λεμεσός Παλαιά Πόλη",
                      "Λεμίθου", "Λιμνάτης", "Λουβαράς", "Λόφου",
                      "Μαθηκολώνη", "Μαλιά", "Μανδριά", "Μαρίνα",
                      "Μέσα Γειτονιά", "Μέσα Ποταμός", "Μονάγρι",
                      "Μοναγρούλλι", "Μονή", "Μονιάτης", "Μουτταγιάκα",
                      "Μύλος Κάτω", "Νέα Εκάλη", "Νεάπολη", "Όμοδος",
                      "Παλαιόμυλος", "Παλόδεια", "Πάνθεα", "Παραμάλι",
                      "Παραμύθα", "Παρεκκλησιά", "Πάχνα", "Πελένδρι",
                      "Πεντάκωμο", "Πέρα Πεδί", "Πισσούρι", "Πλάτρες Κάτω",
                      "Πλάτρες Πάνω", "Πολεμίδια Κάτω", "Πολεμίδια Πάνω",
                      "Ποταμιού", "Ποταμίτισσα", "Πραστιό Αυδήμου",
                      "Πραστιό Κελλακίου", "Πρόδρομος", "Προφήτης Ηλίας",
                      "Πύργος", "Σαϊττάς", "Σανατόριο Κυπερούντας", "Σανίδ",
                      "Σιλίκου", "Σούνι", "Σπιτάλι", "Συκόπετρα",
                      "Σφαλαγγιότισσα", "Σχολή Μιτσή", "Σωτήρα", "Τραχώνι",
                      "Τριμήκλινη", "Τρόοδος", "Τσερκέζ Τσιφτλίκ", "Ύψωνας",
                      "Φασούλα", "Φασούρι", "Φοινί", "Φοινικάρια",
                      "Χανδριά"), "ADSM_CY_CITY_LEMESOS"), new Array(
                    "Λευκωσία", new Array("Αγία Βαρβάρα",
                      "Αγία Μαρίνα Ξυλιάτου", "Αγία Μαρίνα Σκυλλούρας",
                      "Αγίοι Ομολογητές", "Αγίοι Τριμιθιάς",
                      "Άγιος Ανδρέας", "Άγιος Βασίλειος",
                      "Άγιος Γεώργιος Σολέας", "Άγιος Δομέτιος",
                      "Άγιος Επιφάνειος Ορεινής", "Άγιος Επιφάνειος Σολέας",
                      "Άγιος Θεόδωρος Σολέας", "Άγιος Θεόδωρος Τιλλιρίας",
                      "Άγιος Ιωάννης Μαλούντας", "Άγιος Νικόλαος Στέγης",
                      "Αγλαντζιά", "Αγροκηπιά", "Ακάκι", "Ακρόπολη",
                      "Αλάμπρα", "Άλωνα", "Ανάγεια", "Αναλιόντας",
                      "Ανθούπολη", "Απλίκι", "Αργάκι", "Αρεδιού",
                      "Αρχάγγελος", "Ασίνου", "Ασκάς", "Αστρομερίτης",
                      "Αυλώνα", "Βυζακιά", "Γαλάτα", "Γερακιές", "Γέρι",
                      "Γερόλακκος", "Γούρρη", "ΓΣΠ", "Δάλι (Ιδάλιον)",
                      "Δασούπολη", "Δευτερά Κάτω", "Δευτερά Πάνω", "Έγκωμη",
                      "Επισκοπειό", "Εργάτες", "Ευρύχου", "Ζώδεια Κάτω",
                      "Ζώδεια Πάνω", "Ηλιούπολη", "Καιμακλί", "Κακοπετριά",
                      "Καλλιθέα", "Καλό Χωριό Λεύκας", "Καλό Χωριό Ορεινής",
                      "Καλοπαναγιώτης", "Καμπί Φαρμακά", "Καμπιά", "Κάμπος",
                      "Καννάβια", "Καπέδες", "Κατύδατα", "Κάτω Μονή",
                      "Κατωκοπιά", "Κλήρου", "Κόκκινα", "Κοκκινοτριμιθιά",
                      "Κοτσιάτης", "Κουτραφάς Κάτω", "Κουτραφάς Πάνω",
                      "Κυθρέα", "Λαγουδερά", "Λαζανιάς", "Λακατάμεια",
                      "Λατσιά", "Λευκωσία", "Λιμνίτης", "Λινού",
                      "Λυθροδόντας", "Λυκαβητός", "Λύμπια", "Μαθιάτης",
                      "Μακεδονίτισσα", "Μαλούντα", "Μάμμαρη", "Μαρκί",
                      "Μένικο", "Μια Μηλιά", "Μιτσερό", "Μουτουλλάς",
                      "Μυλικούρι", "Νέα Λήδρα", "Νέο ΓΣΠ", "Νήσου",
                      "Νικητάρι", "Ξυλιάτος", "Ορούντα", "Παλαιομέτοχο",
                      "Παλαιχώρι Ορεινής", "Παλλουριώτισσα", "Πεδουλάς",
                      "Πέρα Ορεινής", "Πέρα Χωριό", "Περιστερώνα",
                      "Πηγένια", "Πλατανιστάσα", "Πλατύ Αγλατζιάς",
                      "Πολιτικό", "Πολύστυπος", "Ποταμιά",
                      "Πύργος Κάτω Τιλλιρίας", "Πύργος Πάνω Τιλλιρίας",
                      "Σαράντι", "Σιά", "Σινά Όρος (Σιναόρος)", "Σπήλια",
                      "Στελμεκ", "Στρόβολος", "Τεμβριά", "Τσέρι", "Τύμπου",
                      "Φαρμακάς", "Φικάρδου", "Φιλάνι", "Φλάσου Κάτω",
                      "Φλάσου Πάνω", "Φτερικούδι", "Ψιμολόφου"),
                    "ADSM_CY_CITY_LEYKOSIA"), new Array("Πάφος", new Array(
                    "Αγία Βαρβάρα", "Αγία Μαρίνα Χρυσοχούς",
                    "Αγία Μαρινούδα", "Άγιος Γεώργιος Πέγειας",
                    "Άγιος Φώτιος", "Ακουρδάλεια Κάτω",
                    "Ακουρδάλεια Πάνω", "Ακουρσός", "Αμαργέτη",
                    "Αμπελίτης", "Αναρίτα", "Αργάκα", "Αρμίνου", "Άρμου",
                    "Αρόδες Κάτω", "Αρόδες Πάνω", "Αρχιμανδρίτα Κάτω",
                    "Αρχιμανδρίτα Πάνω", "Ασπρογιά", "Αχέλεια",
                    "Γαλαταριά", "Γεροσκήπου", "Γιαλιά Κάτω",
                    "Γιαλιά Πάνω", "Γιόλου", "Γουδί", "Δρούσεια",
                    "Δρύμου", "Δρυνιά", "Έμπα", "Επισκοπή", "Ευρέτου",
                    "Θαλασσινές Σπηλιές", "Θελέτρα", "Ίνεια", "Κάθικας",
                    "Καλλέπεια"), "ADSM_CY_CITY_PAFOS"));
                  var cy_perioxi = new Array(new Array("Άγιος Αθανάσιος",
                      "ADSM_CY_CITY_LEMESOS_3"), new Array("Άγιος Αμβρόσιος",
                      "ADSM_CY_CITY_LEMESOS_4"), new Array("Άγιος Ανδρέας",
                      "ADSM_CY_CITY_LEYKOSIA_6"), new Array("Άγιος Βασίλειος",
                      "ADSM_CY_CITY_LEYKOSIA_7"), new Array("Άγιος Γεώργιος",
                      "ADSM_CY_CITY_LEMESOS_5"), new Array(
                      "Άγιος Γεώργιος Πέγειας", "ADSM_CY_CITY_PAFOS_4"), new Array(
                      "Άγιος Γεώργιος Σολέας", "ADSM_CY_CITY_LEYKOSIA_8"),
                    new Array("Άγιος Δημήτριος", "ADSM_CY_CITY_LEMESOS_6"),
                    new Array("Άγιος Δομέτιος", "ADSM_CY_CITY_LEYKOSIA_9"),
                    new Array("Άγιος Επιφάνειος Ορεινής",
                      "ADSM_CY_CITY_LEYKOSIA_10"), new Array(
                      "Άγιος Επιφάνειος Σολέας", "ADSM_CY_CITY_LEYKOSIA_11"),
                    new Array("Άγιος Θεόδωρος Αγρού",
                      "ADSM_CY_CITY_LEMESOS_7"), new Array(
                      "Άγιος Θεόδωρος Σκαρίνου", "ADSM_CY_CITY_LARNAKA_5"),
                    new Array("Άγιος Θεόδωρος Σολέας",
                      "ADSM_CY_CITY_LEYKOSIA_12"), new Array(
                      "Άγιος Θεόδωρος Τιλλιρίας", "ADSM_CY_CITY_LEYKOSIA_13"),
                    new Array("Άγιος Ιωάννης Αγρού", "ADSM_CY_CITY_LEMESOS_8"),
                    new Array("Άγιος Ιωάννης Μαλούντας",
                      "ADSM_CY_CITY_LEYKOSIA_14"), new Array(
                      "Άγιος Κωνσταντίνος", "ADSM_CY_CITY_LEMESOS_9"), new Array(
                      "Άγιος Νικόλαος", "ADSM_CY_CITY_LEMESOS_10"), new Array(
                      "Άγιος Νικόλαος Στέγης", "ADSM_CY_CITY_LEYKOSIA_15"),
                    new Array("Άγιος Συλάς", "ADSM_CY_CITY_LEMESOS_11"), new Array(
                      "Άγιος Τύχωνας", "ADSM_CY_CITY_LEMESOS_12"), new Array(
                      "Άγιος Φώτιος", "ADSM_CY_CITY_PAFOS_5"), new Array(
                      "Άλασσα", "ADSM_CY_CITY_LEMESOS_19"), new Array("Άλωνα",
                      "ADSM_CY_CITY_LEYKOSIA_21"), new Array("Άρμου",
                      "ADSM_CY_CITY_PAFOS_14"), new Array("Άρσος",
                      "ADSM_CY_CITY_LEMESOS_28"), new Array("Έγκωμη",
                      "ADSM_CY_CITY_LEYKOSIA_44"), new Array("Έμπα",
                      "ADSM_CY_CITY_PAFOS_30"), new Array("Ίνεια",
                      "ADSM_CY_CITY_PAFOS_35"), new Array("Όμοδος",
                      "ADSM_CY_CITY_LEMESOS_85"), new Array("Ύψωνας",
                      "ADSM_CY_CITY_LEMESOS_122"), new Array("Αβδελλερό",
                      "ADSM_CY_CITY_LARNAKA_1"), new Array("Αγία Άννα",
                      "ADSM_CY_CITY_LARNAKA_3"), new Array("Αγία Βαρβάρα",
                      "ADSM_CY_CITY_LEYKOSIA_1"), new Array("Αγία Βαρβάρα",
                      "ADSM_CY_CITY_PAFOS_1"), new Array("Αγία Θέκλα",
                      "ADSM_CY_CITY_AMOXOSTOS_1"), new Array("Αγία Μαρίνα",
                      "ADSM_CY_CITY_AMOXOSTOS_2"), new Array(
                      "Αγία Μαρίνα Ξυλιάτου", "ADSM_CY_CITY_LEYKOSIA_2"), new Array(
                      "Αγία Μαρίνα Σκυλλούρας", "ADSM_CY_CITY_LEYKOSIA_3"),
                    new Array("Αγία Μαρίνα Χρυσοχούς", "ADSM_CY_CITY_PAFOS_2"),
                    new Array("Αγία Μαρινούδα", "ADSM_CY_CITY_PAFOS_3"), new Array(
                      "Αγία Νάπα", "ADSM_CY_CITY_AMOXOSTOS_3"), new Array(
                      "Αγία Τριάδα", "ADSM_CY_CITY_AMOXOSTOS_4"), new Array(
                      "Αγία Φύλα", "ADSM_CY_CITY_LEMESOS_2"), new Array(
                      "Αγίοι Βαβατσινίας", "ADSM_CY_CITY_LARNAKA_4"), new Array(
                      "Αγίοι Ομολογητές", "ADSM_CY_CITY_LEYKOSIA_4"), new Array(
                      "Αγίοι Τριμιθιάς", "ADSM_CY_CITY_LEYKOSIA_5"), new Array(
                      "Αγγλισίδες", "ADSM_CY_CITY_LARNAKA_2"), new Array(
                      "Αγλαντζιά", "ADSM_CY_CITY_LEYKOSIA_16"), new Array(
                      "Αγρίδια", "ADSM_CY_CITY_LEMESOS_13"), new Array(
                      "Αγροκηπιά", "ADSM_CY_CITY_LEYKOSIA_17"), new Array(
                      "Αγρός", "ADSM_CY_CITY_LEMESOS_14"), new Array(
                      "Αθηαίνου", "ADSM_CY_CITY_LARNAKA_6"), new Array(
                      "Ακάκι", "ADSM_CY_CITY_LEYKOSIA_18"), new Array(
                      "Ακαπνού", "ADSM_CY_CITY_LEMESOS_15"), new Array(
                      "Ακουρδάλεια Κάτω", "ADSM_CY_CITY_PAFOS_6"), new Array(
                      "Ακουρδάλεια Πάνω", "ADSM_CY_CITY_PAFOS_7"), new Array(
                      "Ακουρσός", "ADSM_CY_CITY_PAFOS_8"), new Array(
                      "Ακρούντα", "ADSM_CY_CITY_LEMESOS_16"), new Array(
                      "Ακρωτήρι", "ADSM_CY_CITY_LEMESOS_17"), new Array(
                      "Ακρόπολη", "ADSM_CY_CITY_LEYKOSIA_19"), new Array(
                      "Ακτή Κυβερνήτη", "ADSM_CY_CITY_LEMESOS_18"), new Array(
                      "Αλάμπρα", "ADSM_CY_CITY_LEYKOSIA_20"), new Array(
                      "Αλέκτορα", "ADSM_CY_CITY_LEMESOS_20"), new Array(
                      "Αλαμινός", "ADSM_CY_CITY_LARNAKA_7"), new Array(
                      "Αλεθρικό ", "ADSM_CY_CITY_LARNAKA_8"), new Array(
                      "Αμίαντος Κάτω", "ADSM_CY_CITY_LEMESOS_22"), new Array(
                      "Αμίαντος Πάνω", "ADSM_CY_CITY_LEMESOS_23"), new Array(
                      "Αμαθούντα", "ADSM_CY_CITY_LEMESOS_21"), new Array(
                      "Αμαργέτη", "ADSM_CY_CITY_PAFOS_9"), new Array(
                      "Αμμόχωστος", "ADSM_CY_CITY_AMOXOSTOS_5"), new Array(
                      "Αμπελίτης", "ADSM_CY_CITY_PAFOS_10"), new Array(
                      "Ανάγεια", "ADSM_CY_CITY_LEYKOSIA_22"), new Array(
                      "Αναλιόντας", "ADSM_CY_CITY_LEYKOSIA_23"), new Array(
                      "Αναρίτα", "ADSM_CY_CITY_PAFOS_11"), new Array(
                      "Αναφωτίδ", "ADSM_CY_CITY_LARNAKA_9"), new Array(
                      "Ανθούπολη", "ADSM_CY_CITY_LEYKOSIA_24"), new Array(
                      "Ανώγυρα", "ADSM_CY_CITY_LEMESOS_24"), new Array(
                      "Απεσιά", "ADSM_CY_CITY_LEMESOS_25"), new Array(
                      "Απλάντα", "ADSM_CY_CITY_LARNAKA_10"), new Array(
                      "Απλίκι", "ADSM_CY_CITY_LEYKOSIA_25"), new Array(
                      "Αραδίππου", "ADSM_CY_CITY_LARNAKA_11"), new Array(
                      "Αρακαπάς", "ADSM_CY_CITY_LEMESOS_26"), new Array(
                      "Αργάκα", "ADSM_CY_CITY_PAFOS_12"), new Array("Αργάκι",
                      "ADSM_CY_CITY_LEYKOSIA_26"), new Array("Αρεδιού",
                      "ADSM_CY_CITY_LEYKOSIA_27"), new Array("Αρμίνου",
                      "ADSM_CY_CITY_PAFOS_13"), new Array("Αρμενοχώρι",
                      "ADSM_CY_CITY_LEMESOS_27"), new Array("Αρχάγγελος",
                      "ADSM_CY_CITY_LEYKOSIA_28"), new Array(
                      "Αρχιμανδρίτα Κάτω", "ADSM_CY_CITY_PAFOS_17"), new Array(
                      "Αρχιμανδρίτα Πάνω", "ADSM_CY_CITY_PAFOS_18"), new Array(
                      "Αρόδες Κάτω", "ADSM_CY_CITY_PAFOS_15"), new Array(
                      "Αρόδες Πάνω", "ADSM_CY_CITY_PAFOS_16"), new Array(
                      "Ασίνου", "ADSM_CY_CITY_LEYKOSIA_29"), new Array(
                      "Ασγάτα", "ADSM_CY_CITY_LEMESOS_29"), new Array("Ασκάς",
                      "ADSM_CY_CITY_LEYKOSIA_30"), new Array("Ασπρογιά",
                      "ADSM_CY_CITY_PAFOS_19"), new Array("Αστρομερίτης",
                      "ADSM_CY_CITY_LEYKOSIA_31"), new Array("Ασώματος",
                      "ADSM_CY_CITY_LEMESOS_30"), new Array("Αυγόρου",
                      "ADSM_CY_CITY_AMOXOSTOS_6"), new Array("Αυδήμου",
                      "ADSM_CY_CITY_LEMESOS_31"), new Array("Αυλώνα",
                      "ADSM_CY_CITY_LEYKOSIA_32"), new Array("Αχέλεια",
                      "ADSM_CY_CITY_PAFOS_20"), new Array("Αψιού",
                      "ADSM_CY_CITY_LEMESOS_32"), new Array("Βάβλα",
                      "ADSM_CY_CITY_LARNAKA_13"), new Array("Βάσα Κελλακίου",
                      "ADSM_CY_CITY_LEMESOS_33"), new Array("Βάσα Κοιλανίου",
                      "ADSM_CY_CITY_LEMESOS_34"), new Array("Βίκλα",
                      "ADSM_CY_CITY_LEMESOS_35"), new Array("Βαβατσινιά",
                      "ADSM_CY_CITY_LARNAKA_12"), new Array("Βασιλικά",
                      "ADSM_CY_CITY_LARNAKA_14"), new Array("Βουνί",
                      "ADSM_CY_CITY_LEMESOS_36"), new Array("Βρυσούλες",
                      "ADSM_CY_CITY_AMOXOSTOS_7"), new Array("Βυζακιά",
                      "ADSM_CY_CITY_LEYKOSIA_33"), new Array("ΓΣΠ",
                      "ADSM_CY_CITY_LEYKOSIA_39"), new Array("Γέρι",
                      "ADSM_CY_CITY_LEYKOSIA_36"), new Array("Γαλάτα",
                      "ADSM_CY_CITY_LEYKOSIA_34"), new Array("Γαλαταριά",
                      "ADSM_CY_CITY_PAFOS_21"), new Array("Γεράσα",
                      "ADSM_CY_CITY_LEMESOS_37"), new Array("Γερακιές",
                      "ADSM_CY_CITY_LEYKOSIA_35"), new Array("Γερμασόγεια",
                      "ADSM_CY_CITY_LEMESOS_38"), new Array("Γεροβάσα",
                      "ADSM_CY_CITY_LEMESOS_39"), new Array("Γεροσκήπου",
                      "ADSM_CY_CITY_PAFOS_22"), new Array("Γερόλακκος",
                      "ADSM_CY_CITY_LEYKOSIA_37"), new Array("Γιαλιά Κάτω",
                      "ADSM_CY_CITY_PAFOS_23"), new Array("Γιαλιά Πάνω",
                      "ADSM_CY_CITY_PAFOS_24"), new Array("Γιόλου",
                      "ADSM_CY_CITY_PAFOS_25"), new Array("Γουδί",
                      "ADSM_CY_CITY_PAFOS_26"), new Array("Γούρρη",
                      "ADSM_CY_CITY_LEYKOSIA_38"), new Array("Δάλι (Ιδάλιον)",
                      "ADSM_CY_CITY_LEYKOSIA_40"), new Array("Δασάκι Άχνας",
                      "ADSM_CY_CITY_AMOXOSTOS_8"), new Array("Δασούπολη",
                      "ADSM_CY_CITY_LEYKOSIA_41"), new Array("Δεκέλεια",
                      "ADSM_CY_CITY_LARNAKA_15"), new Array("Δελίκηπος",
                      "ADSM_CY_CITY_LARNAKA_16"), new Array("Δερύνεια",
                      "ADSM_CY_CITY_AMOXOSTOS_9"), new Array("Δευτερά Κάτω",
                      "ADSM_CY_CITY_LEYKOSIA_42"), new Array("Δευτερά Πάνω",
                      "ADSM_CY_CITY_LEYKOSIA_43"), new Array("Διερώνα",
                      "ADSM_CY_CITY_LEMESOS_40"), new Array("Δρομολαξιά",
                      "ADSM_CY_CITY_LARNAKA_17"), new Array("Δρούσεια",
                      "ADSM_CY_CITY_PAFOS_27"), new Array("Δρυνιά",
                      "ADSM_CY_CITY_PAFOS_29"), new Array("Δρυς Κάτω",
                      "ADSM_CY_CITY_LARNAKA_18"), new Array("Δρύμου",
                      "ADSM_CY_CITY_PAFOS_28"), new Array("Δωρά",
                      "ADSM_CY_CITY_LEMESOS_42"), new Array("Δωρός",
                      "ADSM_CY_CITY_LEMESOS_43"), new Array("Δύμες",
                      "ADSM_CY_CITY_LEMESOS_41"), new Array("Επισκοπή",
                      "ADSM_CY_CITY_LEMESOS_44"), new Array("Επισκοπή",
                      "ADSM_CY_CITY_PAFOS_31"), new Array("Επισκοπειό",
                      "ADSM_CY_CITY_LEYKOSIA_45"), new Array("Επταγώνεια",
                      "ADSM_CY_CITY_LEMESOS_45"), new Array("Ερήμη",
                      "ADSM_CY_CITY_LEMESOS_46"), new Array("Εργάτες",
                      "ADSM_CY_CITY_LEYKOSIA_46"), new Array("Ευρέτου",
                      "ADSM_CY_CITY_PAFOS_32"), new Array("Ευρύχου",
                      "ADSM_CY_CITY_LEYKOSIA_47"), new Array("Ζακάκι",
                      "ADSM_CY_CITY_LEMESOS_47"), new Array(
                      "Ζανατζιά (Ζανακιά)", "ADSM_CY_CITY_LEMESOS_48"), new Array(
                      "Ζωοπηγή", "ADSM_CY_CITY_LEMESOS_50"), new Array("Ζύγι",
                      "ADSM_CY_CITY_LARNAKA_19"), new Array("Ζύγι",
                      "ADSM_CY_CITY_LEMESOS_49"), new Array("Ζώδεια Κάτω",
                      "ADSM_CY_CITY_LEYKOSIA_48"), new Array("Ζώδεια Πάνω",
                      "ADSM_CY_CITY_LEYKOSIA_49"), new Array("Ηλιούπολη",
                      "ADSM_CY_CITY_LEYKOSIA_50"), new Array(
                      "Θαλασσινές Σπηλιές", "ADSM_CY_CITY_PAFOS_33"), new Array(
                      "Θελέτρα", "ADSM_CY_CITY_PAFOS_34"), new Array(
                      "Κάβο Γκρέκο", "ADSM_CY_CITY_AMOXOSTOS_10"), new Array(
                      "Κάθικας", "ADSM_CY_CITY_PAFOS_36"), new Array("Κάμπος",
                      "ADSM_CY_CITY_LEYKOSIA_59"), new Array("Κάππαρης",
                      "ADSM_CY_CITY_AMOXOSTOS_11"), new Array("Κάτω Μονή",
                      "ADSM_CY_CITY_LEYKOSIA_63"), new Array("Κίτι",
                      "ADSM_CY_CITY_LARNAKA_24"), new Array("Καιμακλί",
                      "ADSM_CY_CITY_LEYKOSIA_51"), new Array("Κακοπετριά",
                      "ADSM_CY_CITY_LEYKOSIA_52"), new Array("Καλαβασός",
                      "ADSM_CY_CITY_LARNAKA_20"), new Array("Καλλέπεια",
                      "ADSM_CY_CITY_PAFOS_37"), new Array("Καλλιθέα",
                      "ADSM_CY_CITY_LEYKOSIA_53"), new Array("Καλοπαναγιώτης",
                      "ADSM_CY_CITY_LEYKOSIA_56"), new Array("Καλό Χωριό",
                      "ADSM_CY_CITY_LARNAKA_21"), new Array("Καλό Χωριό",
                      "ADSM_CY_CITY_LEMESOS_51"), new Array(
                      "Καλό Χωριό Λεύκας", "ADSM_CY_CITY_LEYKOSIA_54"), new Array(
                      "Καλό Χωριό Ορεινής", "ADSM_CY_CITY_LEYKOSIA_55"), new Array(
                      "Καμινάρια", "ADSM_CY_CITY_LEMESOS_52"), new Array(
                      "Καμπί Φαρμακά", "ADSM_CY_CITY_LEYKOSIA_57"), new Array(
                      "Καμπιά", "ADSM_CY_CITY_LEYKOSIA_58"), new Array(
                      "Καννάβια", "ADSM_CY_CITY_LEYKOSIA_60"), new Array(
                      "Καντού", "ADSM_CY_CITY_LEMESOS_53"), new Array(
                      "Καπέδες", "ADSM_CY_CITY_LEYKOSIA_61"), new Array(
                      "Καπηλειό", "ADSM_CY_CITY_LEMESOS_54"), new Array(
                      "Κατωκοπιά", "ADSM_CY_CITY_LEYKOSIA_64"), new Array(
                      "Κατύδατα", "ADSM_CY_CITY_LEYKOSIA_62"), new Array(
                      "Κελλάκι", "ADSM_CY_CITY_LEMESOS_55"), new Array(
                      "Κελλιά", "ADSM_CY_CITY_LARNAKA_22"), new Array(
                      "Κιβίδες Κάτω", "ADSM_CY_CITY_LEMESOS_56"), new Array(
                      "Κιβίδες Πάνω", "ADSM_CY_CITY_LEMESOS_57"), new Array(
                      "Κιβισίλι", "ADSM_CY_CITY_LARNAKA_23"), new Array(
                      "Κισσούσα", "ADSM_CY_CITY_LEMESOS_58"), new Array(
                      "Κλήρου", "ADSM_CY_CITY_LEYKOSIA_65"), new Array(
                      "Κλαυδιά", "ADSM_CY_CITY_LARNAKA_25"), new Array(
                      "Κλωνάρι", "ADSM_CY_CITY_LEMESOS_59"), new Array(
                      "Κοιλάνι", "ADSM_CY_CITY_LEMESOS_60"), new Array(
                      "Κοκκινοτριμιθιά", "ADSM_CY_CITY_LEYKOSIA_67"), new Array(
                      "Κολούμπια", "ADSM_CY_CITY_LEMESOS_62"), new Array(
                      "Κολόσσι", "ADSM_CY_CITY_LEMESOS_61"), new Array(
                      "Κορφή", "ADSM_CY_CITY_LEMESOS_63"), new Array(
                      "Κοτσιάτης", "ADSM_CY_CITY_LEYKOSIA_68"), new Array(
                      "Κουτραφάς Κάτω", "ADSM_CY_CITY_LEYKOSIA_69"), new Array(
                      "Κουτραφάς Πάνω", "ADSM_CY_CITY_LEYKOSIA_70"), new Array(
                      "Κοφίνου", "ADSM_CY_CITY_LARNAKA_28"), new Array(
                      "Κυθρέα", "ADSM_CY_CITY_LEYKOSIA_71"), new Array(
                      "Κυπερούντα", "ADSM_CY_CITY_LEMESOS_64"), new Array(
                      "Κόκκινα", "ADSM_CY_CITY_LEYKOSIA_66"), new Array(
                      "Κόννος", "ADSM_CY_CITY_AMOXOSTOS_12"), new Array(
                      "Κόρνος", "ADSM_CY_CITY_LARNAKA_26"), new Array("Κόση",
                      "ADSM_CY_CITY_LARNAKA_27"), new Array("Λάγεια",
                      "ADSM_CY_CITY_LARNAKA_29"), new Array("Λάνεια",
                      "ADSM_CY_CITY_LEMESOS_65"), new Array("Λάρνακα",
                      "ADSM_CY_CITY_LARNAKA_30"), new Array("Λαγουδερά",
                      "ADSM_CY_CITY_LEYKOSIA_72"), new Array("Λαζανιάς",
                      "ADSM_CY_CITY_LEYKOSIA_73"), new Array("Λακατάμεια",
                      "ADSM_CY_CITY_LEYKOSIA_74"), new Array("Λατσιά",
                      "ADSM_CY_CITY_LEYKOSIA_75"), new Array("Λειβάδια",
                      "ADSM_CY_CITY_LARNAKA_31"), new Array("Λεμίθου",
                      "ADSM_CY_CITY_LEMESOS_67"), new Array("Λεμεσός",
                      "ADSM_CY_CITY_LEMESOS_1"), new Array(
                      "Λεμεσός Παλαιά Πόλη", "ADSM_CY_CITY_LEMESOS_66"), new Array(
                      "Λευκωσία", "ADSM_CY_CITY_LEYKOSIA_76"), new Array(
                      "Λεύκαρα Κάτω", "ADSM_CY_CITY_LARNAKA_32"), new Array(
                      "Λεύκαρα Πάνω", "ADSM_CY_CITY_LARNAKA_33"), new Array(
                      "Λιμνάτης", "ADSM_CY_CITY_LEMESOS_68"), new Array(
                      "Λιμνίτης", "ADSM_CY_CITY_LEYKOSIA_77"), new Array(
                      "Λινού", "ADSM_CY_CITY_LEYKOSIA_78"), new Array(
                      "Λιοπέτρι", "ADSM_CY_CITY_AMOXOSTOS_13"), new Array(
                      "Λουβαράς", "ADSM_CY_CITY_LEMESOS_69"), new Array(
                      "Λυθροδόντας", "ADSM_CY_CITY_LEYKOSIA_79"), new Array(
                      "Λυκαβητός", "ADSM_CY_CITY_LEYKOSIA_80"), new Array(
                      "Λόφου", "ADSM_CY_CITY_LEMESOS_70"), new Array("Λύμπια",
                      "ADSM_CY_CITY_LEYKOSIA_81"), new Array("Μάμμαρη",
                      "ADSM_CY_CITY_LEYKOSIA_85"), new Array("Μένικο",
                      "ADSM_CY_CITY_LEYKOSIA_87"), new Array("Μέσα Γειτονιά",
                      "ADSM_CY_CITY_LEMESOS_75"), new Array("Μέσα Ποταμός",
                      "ADSM_CY_CITY_LEMESOS_76"), new Array("Μαζωτός",
                      "ADSM_CY_CITY_LARNAKA_34"), new Array("Μαθηκολώνη",
                      "ADSM_CY_CITY_LEMESOS_71"), new Array("Μαθιάτης",
                      "ADSM_CY_CITY_LEYKOSIA_82"), new Array("Μακεδονίτισσα",
                      "ADSM_CY_CITY_LEYKOSIA_83"), new Array("Μαλιά",
                      "ADSM_CY_CITY_LEMESOS_72"), new Array("Μαλούντα",
                      "ADSM_CY_CITY_LEYKOSIA_84"), new Array("Μανδριά",
                      "ADSM_CY_CITY_LEMESOS_73"), new Array("Μαρί",
                      "ADSM_CY_CITY_LARNAKA_35"), new Array("Μαρίνα",
                      "ADSM_CY_CITY_LEMESOS_74"), new Array("Μαρκί",
                      "ADSM_CY_CITY_LEYKOSIA_86"), new Array("Μαρώνι",
                      "ADSM_CY_CITY_LARNAKA_36"), new Array("Μελίνη",
                      "ADSM_CY_CITY_LARNAKA_37"), new Array("Μελούσεια",
                      "ADSM_CY_CITY_LARNAKA_38"), new Array("Μενεού",
                      "ADSM_CY_CITY_LARNAKA_39"), new Array("Μενόγεια",
                      "ADSM_CY_CITY_LARNAKA_40"), new Array("Μια Μηλιά",
                      "ADSM_CY_CITY_LEYKOSIA_88"), new Array("Μιτσερό",
                      "ADSM_CY_CITY_LEYKOSIA_89"), new Array("Μονάγρι",
                      "ADSM_CY_CITY_LEMESOS_77"), new Array("Μονή",
                      "ADSM_CY_CITY_LEMESOS_79"), new Array("Μοναγρούλλι",
                      "ADSM_CY_CITY_LEMESOS_78"), new Array("Μονιάτης",
                      "ADSM_CY_CITY_LEMESOS_80"), new Array("Μοσφιλωτή",
                      "ADSM_CY_CITY_LARNAKA_41"), new Array("Μουτουλλάς",
                      "ADSM_CY_CITY_LEYKOSIA_90"), new Array("Μουτταγιάκα",
                      "ADSM_CY_CITY_LEMESOS_81"), new Array("Μυλικούρι",
                      "ADSM_CY_CITY_LEYKOSIA_91"), new Array("Μύλος Κάτω",
                      "ADSM_CY_CITY_LEMESOS_82"), new Array("Νέα Εκάλη",
                      "ADSM_CY_CITY_LEMESOS_83"), new Array("Νέα Λήδρα",
                      "ADSM_CY_CITY_LEYKOSIA_92"), new Array("Νέο ΓΣΠ",
                      "ADSM_CY_CITY_LEYKOSIA_93"), new Array("Νήσου",
                      "ADSM_CY_CITY_LEYKOSIA_94"), new Array("Νεάπολη",
                      "ADSM_CY_CITY_LEMESOS_84"), new Array("Νικητάρι",
                      "ADSM_CY_CITY_LEYKOSIA_95"), new Array("Ξυλιάτος",
                      "ADSM_CY_CITY_LEYKOSIA_96"), new Array("Ξυλοτύμπου",
                      "ADSM_CY_CITY_LARNAKA_42"), new Array("Ξυλοφάγου",
                      "ADSM_CY_CITY_LARNAKA_43"), new Array("Οδού",
                      "ADSM_CY_CITY_LARNAKA_44"), new Array("Ορά",
                      "ADSM_CY_CITY_LARNAKA_45"), new Array("Ορμίδεια",
                      "ADSM_CY_CITY_LARNAKA_46"), new Array("Ορούντα",
                      "ADSM_CY_CITY_LEYKOSIA_97"), new Array("Ορόκλινη",
                      "ADSM_CY_CITY_LARNAKA_47"), new Array("Πάνθεα",
                      "ADSM_CY_CITY_LEMESOS_88"), new Array("Πάχνα",
                      "ADSM_CY_CITY_LEMESOS_92"), new Array("Πέρα Ορεινής",
                      "ADSM_CY_CITY_LEYKOSIA_102"), new Array("Πέρα Πεδί",
                      "ADSM_CY_CITY_LEMESOS_95"), new Array("Πέρα Χωριό",
                      "ADSM_CY_CITY_LEYKOSIA_103"), new Array("Παλαιομέτοχο",
                      "ADSM_CY_CITY_LEYKOSIA_98"), new Array(
                      "Παλαιχώρι Ορεινής", "ADSM_CY_CITY_LEYKOSIA_99"), new Array(
                      "Παλαιόμυλος", "ADSM_CY_CITY_LEMESOS_86"), new Array(
                      "Παλλουριώτισσα", "ADSM_CY_CITY_LEYKOSIA_100"), new Array(
                      "Παλόδεια", "ADSM_CY_CITY_LEMESOS_87"), new Array(
                      "Παραλίμνι", "ADSM_CY_CITY_AMOXOSTOS_14"), new Array(
                      "Παραμάλι", "ADSM_CY_CITY_LEMESOS_89"), new Array(
                      "Παραμύθα", "ADSM_CY_CITY_LEMESOS_90"), new Array(
                      "Παρεκκλησιά", "ADSM_CY_CITY_LEMESOS_91"), new Array(
                      "Πεδουλάς", "ADSM_CY_CITY_LEYKOSIA_101"), new Array(
                      "Πελένδρι", "ADSM_CY_CITY_LEMESOS_93"), new Array(
                      "Πεντάκωμο", "ADSM_CY_CITY_LEMESOS_94"), new Array(
                      "Περβόλια", "ADSM_CY_CITY_LARNAKA_48"), new Array(
                      "Περιστερώνα", "ADSM_CY_CITY_LEYKOSIA_104"), new Array(
                      "Περνέρα", "ADSM_CY_CITY_AMOXOSTOS_15"), new Array(
                      "Πηγένια", "ADSM_CY_CITY_LEYKOSIA_105"), new Array(
                      "Πισσούρι", "ADSM_CY_CITY_LEMESOS_96"), new Array(
                      "Πλάτρες Κάτω", "ADSM_CY_CITY_LEMESOS_97"), new Array(
                      "Πλάτρες Πάνω", "ADSM_CY_CITY_LEMESOS_98"), new Array(
                      "Πλατανιστάσα", "ADSM_CY_CITY_LEYKOSIA_106"), new Array(
                      "Πλατύ Αγλατζιάς", "ADSM_CY_CITY_LEYKOSIA_107"), new Array(
                      "Πολεμίδια Κάτω", "ADSM_CY_CITY_LEMESOS_99"), new Array(
                      "Πολεμίδια Πάνω", "ADSM_CY_CITY_LEMESOS_100"), new Array(
                      "Πολιτικό", "ADSM_CY_CITY_LEYKOSIA_108"), new Array(
                      "Πολύστυπος", "ADSM_CY_CITY_LEYKOSIA_109"), new Array(
                      "Ποταμίτισσα", "ADSM_CY_CITY_LEMESOS_102"), new Array(
                      "Ποταμιά", "ADSM_CY_CITY_LEYKOSIA_110"), new Array(
                      "Ποταμιού", "ADSM_CY_CITY_LEMESOS_101"), new Array(
                      "Πραστιό Αυδήμου", "ADSM_CY_CITY_LEMESOS_103"), new Array(
                      "Πραστιό Κελλακίου", "ADSM_CY_CITY_LEMESOS_104"), new Array(
                      "Προφήτης Ηλίας", "ADSM_CY_CITY_LEMESOS_106"), new Array(
                      "Πρωταράς", "ADSM_CY_CITY_AMOXOSTOS_16"), new Array(
                      "Πρόδρομος", "ADSM_CY_CITY_LEMESOS_105"), new Array(
                      "Πυργά", "ADSM_CY_CITY_LARNAKA_50"), new Array("Πύλα",
                      "ADSM_CY_CITY_LARNAKA_49"), new Array("Πύργος",
                      "ADSM_CY_CITY_LEMESOS_107"), new Array(
                      "Πύργος Κάτω Τιλλιρίας", "ADSM_CY_CITY_LEYKOSIA_111"),
                    new Array("Πύργος Πάνω Τιλλιρίας",
                      "ADSM_CY_CITY_LEYKOSIA_112"), new Array("Σανίδ",
                      "ADSM_CY_CITY_LEMESOS_110"), new Array(
                      "Σανατόριο Κυπερούντας", "ADSM_CY_CITY_LEMESOS_109"),
                    new Array("Σαράντι", "ADSM_CY_CITY_LEYKOSIA_113"), new Array(
                      "Σαϊττάς", "ADSM_CY_CITY_LEMESOS_108"), new Array("Σιά",
                      "ADSM_CY_CITY_LEYKOSIA_114"), new Array("Σιλίκου",
                      "ADSM_CY_CITY_LEMESOS_111"), new Array(
                      "Σινά Όρος (Σιναόρος)", "ADSM_CY_CITY_LEYKOSIA_115"),
                    new Array("Σκαρίνου", "ADSM_CY_CITY_LARNAKA_51"), new Array(
                      "Σοφτάδες", "ADSM_CY_CITY_LARNAKA_52"), new Array(
                      "Σούνι", "ADSM_CY_CITY_LEMESOS_112"), new Array(
                      "Σπήλια", "ADSM_CY_CITY_LEYKOSIA_116"), new Array(
                      "Σπιτάλι", "ADSM_CY_CITY_LEMESOS_113"), new Array(
                      "Στελμεκ", "ADSM_CY_CITY_LEYKOSIA_117"), new Array(
                      "Στρόβολος", "ADSM_CY_CITY_LEYKOSIA_118"), new Array(
                      "Συκόπετρα", "ADSM_CY_CITY_LEMESOS_114"), new Array(
                      "Σφαλαγγιότισσα", "ADSM_CY_CITY_LEMESOS_115"), new Array(
                      "Σχολή Μιτσή", "ADSM_CY_CITY_LEMESOS_116"), new Array(
                      "Σωτήρ", "ADSM_CY_CITY_AMOXOSTOS_17"), new Array(
                      "Σωτήρα", "ADSM_CY_CITY_LEMESOS_117"), new Array(
                      "Τεμβριά", "ADSM_CY_CITY_LEYKOSIA_119"), new Array(
                      "Τερσεφάνου", "ADSM_CY_CITY_LARNAKA_53"), new Array(
                      "Τραχώνι", "ADSM_CY_CITY_LEMESOS_118"), new Array(
                      "Τρεμετουσιά", "ADSM_CY_CITY_LARNAKA_55"), new Array(
                      "Τριμήκλινη", "ADSM_CY_CITY_LEMESOS_119"), new Array(
                      "Τρούλλοι", "ADSM_CY_CITY_LARNAKA_56"), new Array(
                      "Τρόοδος", "ADSM_CY_CITY_LEMESOS_120"), new Array(
                      "Τσέρι", "ADSM_CY_CITY_LEYKOSIA_120"), new Array(
                      "Τσερκέζ Τσιφτλίκ", "ADSM_CY_CITY_LEMESOS_121"), new Array(
                      "Τόχνη", "ADSM_CY_CITY_LARNAKA_54"), new Array("Τύμπου",
                      "ADSM_CY_CITY_LEYKOSIA_121"), new Array("Φαρμακάς",
                      "ADSM_CY_CITY_LEYKOSIA_122"), new Array("Φασούλα",
                      "ADSM_CY_CITY_LEMESOS_123"), new Array("Φασούρι",
                      "ADSM_CY_CITY_LEMESOS_124"), new Array("Φικάρδου",
                      "ADSM_CY_CITY_LEYKOSIA_123"), new Array("Φιλάνι",
                      "ADSM_CY_CITY_LEYKOSIA_124"), new Array("Φλάσου Κάτω",
                      "ADSM_CY_CITY_LEYKOSIA_125"), new Array("Φλάσου Πάνω",
                      "ADSM_CY_CITY_LEYKOSIA_126"), new Array("Φοινί",
                      "ADSM_CY_CITY_LEMESOS_125"), new Array("Φοινικάρια",
                      "ADSM_CY_CITY_LEMESOS_126"), new Array("Φρέναρος",
                      "ADSM_CY_CITY_AMOXOSTOS_18"), new Array("Φτερικούδι",
                      "ADSM_CY_CITY_LEYKOSIA_127"), new Array("Χανδριά",
                      "ADSM_CY_CITY_LEMESOS_127"), new Array("Χοιροκοιτία",
                      "ADSM_CY_CITY_LARNAKA_57"), new Array("Ψεματισμένος",
                      "ADSM_CY_CITY_LARNAKA_58"), new Array("Ψευδάς",
                      "ADSM_CY_CITY_LARNAKA_59"), new Array("Ψιμολόφου",
                      "ADSM_CY_CITY_LEYKOSIA_128"));


                  function load_Nomous_MAD(country, fnomos, fdimos, nomos,
                    dimos, span_nomos, span_dimos, def_val_nomos, def_val_dimos
                  ) {
                    if (country == 'gr') {
                      var cities = gr_cities;
                    } else if (country == 'cy') {
                      var cities = cy_cities;
                    } else {
                      var cities = bl_cities;
                    }
                    if (!def_val_nomos) def_val_nomos = "Select..";
                    var nomos_selected = false;
                    var nomoi = fnomos;
                    nomoi.options.length = 0; //clear
                    nomoi.options[0] = new Option(def_val_nomos, "");
                    for (j = 0; j < cities.length; j++) {
                      if (country != 'bl') {
                        nomoi.options[j + 1] = new Option(cities[j][0], cities[
                          j][2]);
                      } else {
                        nomoi.options[j + 1] = new Option(cities[j][0], cities[
                          j][1]);
                      }

                      if (cities[j][0] == nomos) {
                        nomoi.selectedIndex = j + 1;
                        nomos_selected = true;
                      }
                    }
                    if (nomos_selected) load_Dimous_MAD(fcountry, fnomos,
                      fdimos, dimos, span_nomos, span_dimos, def_val_dimos);
                  }


                  function load_all_Dimous(fcountry, fnomos, span_dimos) {

                    if (fcountry == 'gr') {
                      var al_perioxi = perioxi;
                    }
                    if (fcountry == 'cy') {
                      var al_perioxi = cy_perioxi;
                    }

                    var nomoi = fnomos;
                    nomoi.options.length = 0; //clear
                    nomoi.options[0] = new Option("Select..", "");
                    for (j = 0; j < al_perioxi.length; j++) {
                      nomoi.options[j + 1] = new Option(al_perioxi[j][0],
                        al_perioxi[j][1]);
                      if (al_perioxi[j][0] == '') {
                        nomoi.selectedIndex = j + 1;
                        nomos_selected = true;
                      }
                    }
                    set_span_title_MAD(span_dimos, span_dimos + '_span');

                  }


                  function load_Dimous_MAD(fcountry, fnomos, fdimos, dimos,
                    span_nomos, span_dimos, def_val_dimos) {

                    if (fcountry == 'gr') {
                      var cities = gr_cities;
                    }
                    if (fcountry == 'cy') {
                      var cities = cy_cities;
                    }

                    if (!def_val_dimos) def_val_dimos = "Select..";
                    var poli = fnomos;
                    var selectedBoxValue = poli.value;
                    var poliLength = 0;

                    var perioxi = fdimos;
                    perioxi.options.length = 0; //clear
                    perioxi.options[0] = new Option(def_val_dimos, "");

                    set_span_title_MAD(span_nomos, span_nomos + '_span');
                    set_span_title_MAD(span_dimos, span_dimos + '_span');


                    var c;
                    var cc;
                    var i;
                    var j;
                    for (c = 0; c < cities.length; c++) {
                      if (cities[c][2] == selectedBoxValue) {
                        poliLength = cities[c][1].length;
                        cc = c;
                      }
                    }
                    for (i = 0; i < poli.options.length; i++) {
                      if (selectedBoxValue == poli.options[i].value) {
                        for (j = 0; j < poliLength; j++) {
                          perioxi.options[j + 1] = new Option(cities[cc][1][j],
                            cities[cc][2] + '_' + (parseInt(j) + 1));
                          if (cities[cc][1][j] == dimos) perioxi.selectedIndex =
                            j + 1;
                        }
                      }
                    }
                  }

                  function set_span_title_MAD(from, to) {
                    if (document.getElementById(to) != null) {
                      document.getElementById(to).innerHTML = document.getElementById(
                          from).options[document.getElementById(from).selectedIndex]
                        .text;
                    }
                  }
                  </script>


                  <script language="javascript" type="text/javascript">
                  (function($) {
                    $(document).ready(function() {
                      load_Nomous_MAD("gr", document.ads_search_Form.city,
                        document.ads_search_Form.perioxi, "", "",
                        "city", "perioxi");
                      load_all_Dimous(document.ads_search_Form.country.value,
                        document.ads_search_Form.perioxi, "perioxi");
                      $('#uniform-perioxi span').text('Municipality');
                      $('#uniform-city span').text('Prefecture');
                      $('#uniform-eidos_akinitou span').text('Select..');
                      $('#uniform-domatia span').text('Select..');
                      $('#city').change(function() {
                        $('#uniform-perioxi span').text(
                          'Municipality');
                        $('#perioxi option').first().text(
                          'Municipality');

                      });

                      $('#city option').first().text('Prefecture');
                      $('#perioxi option').first().text('Municipality');

                      $('#uniform-country span').text('Greece');


                      $('#country').change(function() {
                        set_span_title_MAD('country', 'country_span');

                        $('#city, #perioxi').val('0');

                        $('#uniform-perioxi span').text(
                          'Municipality');
                        $('#uniform-city span').text('Prefecture');

                        if ($(this).val() == 'gr') {
                          $('#uniform-perioxi span').text(
                            'Municipality');
                          $('#uniform-city span').text('Prefecture');

                          $('#uniform-perioxi').show();
                          $('#tsearch').parent().css('width', '445px');

                          load_Dimous_MAD(document.ads_search_Form.country
                            .value, document.ads_search_Form.city,
                            document.ads_search_Form.perioxi, '',
                            'city', 'perioxi');
                          load_all_Dimous(document.ads_search_Form.country
                            .value, document.ads_search_Form.perioxi,
                            "perioxi");

                          load_Nomous_MAD("gr", document.ads_search_Form
                            .city, document.ads_search_Form.perioxi,
                            "", "", "city", "perioxi");


                        } else if ($(this).val() == 'cy') {
                          $('#uniform-city span').text('Communities');
                          $('#uniform-perioxi span').text('Area');
                          $('#uniform-perioxi').show();
                          $('#tsearch').parent().css('width', '445px');

                          load_Dimous_MAD(document.ads_search_Form.country
                            .value, document.ads_search_Form.city,
                            document.ads_search_Form.perioxi, '',
                            'city', 'perioxi');
                          load_all_Dimous(document.ads_search_Form.country
                            .value, document.ads_search_Form.perioxi,
                            "perioxi");
                          load_Nomous_MAD("cy", document.ads_search_Form
                            .city, document.ads_search_Form.perioxi,
                            "", "", "city", "perioxi");


                        } else {
                          $('#uniform-city span').text('Cities');
                          $('#tsearch').parent().css('width', '560px');
                          $('#uniform-perioxi').hide();
                          load_Nomous_MAD("bl", document.ads_search_Form
                            .city, document.ads_search_Form.perioxi,
                            "", "", "city", "perioxi");
                        }
                      })




                    });
                  })(jQuery);
                  </script>


                  <script language="javascript" type="text/javascript">
                  function swap_image_tick_MAD(id, id2, val_def, val, field) {
                    var el = document.getElementById(id);
                    var el2 = document.getElementById(id2);
                    var imgnameArr = Array();
                    imgnameArr = el.src.split('/');
                    var imgName = imgnameArr[imgnameArr.length - 1];

                    if (imgName == 'checkboxChecked.gif') {
                      el.src = el.src.replace('checkboxChecked.gif',
                        'checkboxUnChecked.gif');
                      document.getElementById(field).value = val_def;
                    } else {
                      el.src = el.src.replace('checkboxUnChecked.gif',
                        'checkboxChecked.gif');
                      document.getElementById(field).value = val;
                      el2.src = el2.src.replace('checkboxChecked.gif',
                        'checkboxUnChecked.gif');
                    }
                  }

                  function clear_form_MAD() {
                    if (document.getElementById('tsearch').value ==
                      'e.g. Santorini Villas')
                      document.getElementById('tsearch').value = '';

                    if (document.getElementById('price_from').value ==
                      'from...')
                      document.getElementById('price_from').value = '';

                    if (document.getElementById('price_to').value == 'to...')
                      document.getElementById('price_to').value = '';

                    if (document.getElementById('embadom_from').value ==
                      'from...')
                      document.getElementById('embadom_from').value = '';

                    if (document.getElementById('embadom_to').value == 'to...')
                      document.getElementById('embadom_to').value = '';
                  }
                  </script>

                  <form name="ads_search_Form" id="ads_search_Form" action="/index.php?option=com_adsmanager&amp;view=result&amp;Itemid=691&amp;lang=en"
                    method="post">
                    <input type="hidden" value="1" name="new_search">

                    <div class="search_box_MAD">
                      <div class="adsmanager_spacer" style="margin-top:10px;"></div>

                      <div style="width:100%;" class="search_text_MAD">
                        <span>


                          <select name="country" id="country">
                            <option value="gr" selected="selected">Greece</option>
                            <option value="cy">Cyprus</option>
                            <option value="bl">Bulgary</option>
                          </select>
                        </span>



                        <span>


                          <select name="city" id="city" onchange="load_Dimous_MAD(document.ads_search_Form.country.value,document.ads_search_Form.city,document.ads_search_Form.perioxi,'','city','perioxi');set_span_title_MAD('city', 'city_span');">



                            <option value="">Prefecture</option>
                            <option value="ADSM_CITY_AITOLOKARNANIA">Aetolia-Acarnania</option>
                            <option value="ADSM_CITY_ARGOLIDA">Argolis</option>
                            <option value="ADSM_CITY_ARKADIA">Arcadia</option>
                            <option value="ADSM_CITY_ARTA">Arta</option>
                            <option value="ADSM_CITY_ATTIKI_ATHINA">Athens Prefecture</option>
                            <option value="ADSM_CITY_ATTIKI_ANATOLIKI">East Attica</option>
                            <option value="ADSM_CITY_ATTIKI_DYTIKI">West Attica</option>
                            <option value="ADSM_CITY_ATTIKI_PIREAS">Piraeus</option>
                            <option value="ADSM_CITY_AXAIA">Achaea</option>
                            <option value="ADSM_CITY_BOIOTIA">Boeotia</option>
                            <option value="ADSM_CITY_GREVENA">Grevena</option>
                            <option value="ADSM_CITY_DRAMA">Drama</option>
                            <option value="ADSM_CITY_DODEKANISA">Dodecanese</option>
                            <option value="ADSM_CITY_EVROS">Evros</option>
                            <option value="ADSM_CITY_EVIA">Euboea</option>
                            <option value="ADSM_CITY_EVRITANIA">Evrytania</option>
                            <option value="ADSM_CITY_ZAKYNTHOS">Zakynthos</option>
                            <option value="ADSM_CITY_ILIA">Elis</option>
                            <option value="ADSM_CITY_IMATHIA">Imathia</option>
                            <option value="ADSM_CITY_IRAKLIO">Heraklion</option>
                            <option value="ADSM_CITY_THESPROTIA">Thesprotia</option>
                            <option value="ADSM_CITY_THESSALONIKI">Thessaloniki</option>
                            <option value="ADSM_CITY_IOANNINA">Ioannina</option>
                            <option value="ADSM_CITY_KABALA">Kavala</option>
                            <option value="ADSM_CITY_KARDITSA">Karditsa</option>
                            <option value="ADSM_CITY_KASTORIA">Kastoria</option>
                            <option value="ADSM_CITY_KERKIRA">Corfu</option>
                            <option value="ADSM_CITY_KEFALLONIA">Cephalonia</option>
                            <option value="ADSM_CITY_KILKIS">Kilkis</option>
                            <option value="ADSM_CITY_KOZANI">Kozani</option>
                            <option value="ADSM_CITY_KORINTHIA">Corinthia</option>
                            <option value="ADSM_CITY_KIKLADES">Cyclades</option>
                            <option value="ADSM_CITY_LAKONIA">Laconia</option>
                            <option value="ADSM_CITY_LARISA">Larissa</option>
                            <option value="ADSM_CITY_LASITHI">Lasithi</option>
                            <option value="ADSM_CITY_LESVOS">Lesbos</option>
                            <option value="ADSM_CITY_LEFKADA">Lefkada</option>
                            <option value="ADSM_CITY_MAGNISIA">Magnesia</option>
                            <option value="ADSM_CITY_MESSINIA">Messenia</option>
                            <option value="ADSM_CITY_KSANTHI">Xanthi</option>
                            <option value="ADSM_CITY_PELLA">Pella</option>
                            <option value="ADSM_CITY_PIERIA">Pieria</option>
                            <option value="ADSM_CITY_PREVEZA">Preveza</option>
                            <option value="ADSM_CITY_RETHIMNO">Rethymno</option>
                            <option value="ADSM_CITY_RODOPI">Rhodope</option>
                            <option value="ADSM_CITY_SAMOS">Samos</option>
                            <option value="ADSM_CITY_SERRES">Serres</option>
                            <option value="ADSM_CITY_TRIKALA">Trikala</option>
                            <option value="ADSM_CITY_FTHIOTIDA">Phthiotis</option>
                            <option value="ADSM_CITY_FLORINA">Florina</option>
                            <option value="ADSM_CITY_FOKIDA">Phocis</option>
                            <option value="ADSM_CITY_XALKIDIKI">Chalkidiki</option>
                            <option value="ADSM_CITY_XANIA">Chania</option>
                            <option value="ADSM_CITY_XIOS">Chios</option>
                          </select>
                        </span>

                        <span>
                          <select name="perioxi" id="perioxi" onchange="load_all_Dimous(document.ads_search_Form.country.value,document.ads_search_Form.perioxi, "
                            perioxi ");set_span_title_mad('perioxi',="
                            " 'perioxi_span');"="">

                            <option value="">Municipality</option>
                            <option value="ADSM_CITY_KSANTHI_2">Abdera</option>
                            <option value="ADSM_CITY_ATTIKI_ANATOLIKI_1">Acharnes</option>
                            <option value="ADSM_CITY_ATTIKI_PIREAS_2">Aegina</option>
                            <option value="ADSM_CITY_DODEKANISA_1">Agathonisi</option>
                            <option value="ADSM_CITY_LARISA_1">Agia</option>
                            <option value="ADSM_CITY_ATTIKI_ATHINA_2">Agia Paraskevi</option>
                            <option value="ADSM_CITY_ATTIKI_ATHINA_1">Agia Varvara</option>
                            <option value="ADSM_CITY_ATTIKI_ATHINA_4">Agioi Anargyroi-Kamatero</option>
                            <option value="ADSM_CITY_ATTIKI_ATHINA_3">Agios Dimitrios</option>
                            <option value="ADSM_CITY_LESVOS_1">Agios Efstratios</option>
                            <option value="ADSM_CITY_LASITHI_1">Agios Nikolaos</option>
                            <option value="ADSM_CITY_RETHIMNO_1">Agios Vasileios</option>
                            <option value="ADSM_CITY_EVRITANIA_1">Agrafa</option>
                            <option value="ADSM_CITY_AITOLOKARNANIA_2">Agrinio</option>
                            <option value="ADSM_CITY_ATTIKI_ATHINA_6">Aigaleo</option>
                            <option value="ADSM_CITY_AXAIA_1">Aigialeia</option>
                            <option value="ADSM_CITY_AITOLOKARNANIA_3">Aktio-Vonitsa</option>
                            <option value="ADSM_CITY_IMATHIA_1">Alexandreia</option>
                            <option value="ADSM_CITY_EVROS_1">Alexandroupoli</option>
                            <option value="ADSM_CITY_BOIOTIA_1">Aliartos</option>
                            <option value="ADSM_CITY_ATTIKI_ATHINA_7">Alimos</option>
                            <option value="ADSM_CITY_PELLA_1">Almopia</option>
                            <option value="ADSM_CITY_MAGNISIA_1">Almyros</option>
                            <option value="ADSM_CITY_MAGNISIA_2">Alonnisos</option>
                            <option value="ADSM_CITY_RETHIMNO_2">Amari</option>
                            <option value="ADSM_CITY_FTHIOTIDA_1">Amfikleia - Elateia</option>
                            <option value="ADSM_CITY_AITOLOKARNANIA_4">Amfilochia</option>
                            <option value="ADSM_CITY_KIKLADES_1">Amorgos</option>
                            <option value="ADSM_CITY_THESSALONIKI_1">Ampelokipoi - Menemeni</option>
                            <option value="ADSM_CITY_SERRES_1">Amphipolis</option>
                            <option value="ADSM_CITY_FLORINA_1">Amyntaio</option>
                            <option value="ADSM_CITY_KIKLADES_2">Anafi</option>
                            <option value="ADSM_CITY_ILIA_1">Andravida - Kyllini</option>
                            <option value="ADSM_CITY_ILIA_2">Andritsaina</option>
                            <option value="ADSM_CITY_KIKLADES_3">Andros</option>
                            <option value="ADSM_CITY_RETHIMNO_3">Anogeia</option>
                            <option value="ADSM_CITY_KIKLADES_4">Antiparos</option>
                            <option value="ADSM_CITY_XANIA_1">Apokoronas</option>
                            <option value="ADSM_CITY_IRAKLIO_1">Archanes - Asterousia</option>
                            <option value="ADSM_CITY_KARDITSA_1">Argithea</option>
                            <option value="ADSM_CITY_ARGOLIDA_1">Argos-Mykines</option>
                            <option value="ADSM_CITY_XALKIDIKI_1">Aristotelis</option>
                            <option value="ADSM_CITY_RODOPI_1">Arriana</option>
                            <option value="ADSM_CITY_ARTA_1">Arta</option>
                            <option value="ADSM_CITY_ATTIKI_DYTIKI_1">Aspropyrgos</option>
                            <option value="ADSM_CITY_DODEKANISA_2">Astypalaia</option>
                            <option value="ADSM_CITY_ATTIKI_ATHINA_5">Athens</option>
                            <option value="ADSM_CITY_ARTA_3">Central Tzoumerka</option>
                            <option value="ADSM_CITY_KEFALLONIA_2">Cephalonia</option>
                            <option value="ADSM_CITY_ATTIKI_ATHINA_33">Chaidari</option>
                            <option value="ADSM_CITY_ATTIKI_ATHINA_34">Chalandri</option>
                            <option value="ADSM_CITY_EVIA_8">Chalcis</option>
                            <option value="ADSM_CITY_THESSALONIKI_13">Chalkidona</option>
                            <option value="ADSM_CITY_XANIA_7">Chania</option>
                            <option value="ADSM_CITY_IRAKLIO_8">Chersonisos</option>
                            <option value="ADSM_CITY_XIOS_2">Chios</option>
                            <option value="ADSM_CITY_KERKIRA_1">Corfu</option>
                            <option value="ADSM_CITY_KORINTHIA_2">Corinthia</option>
                            <option value="ADSM_CITY_ATTIKI_PIREAS_5">Cythera</option>
                            <option value="ADSM_CITY_ATTIKI_ATHINA_13">Dafni-Ymittos</option>
                            <option value="ADSM_CITY_FOKIDA_1">Delphi</option>
                            <option value="ADSM_CITY_THESSALONIKI_3">Delta</option>
                            <option value="ADSM_CITY_GREVENA_2">Deskati</option>
                            <option value="ADSM_CITY_EVROS_2">Didymoteicho</option>
                            <option value="ADSM_CITY_PIERIA_1">Dio - Olympos</option>
                            <option value="ADSM_CITY_ATTIKI_ANATOLIKI_3">Dionysos</option>
                            <option value="ADSM_CITY_EVIA_1">Dirfys-Messapia</option>
                            <option value="ADSM_CITY_BOIOTIA_2">Distomo-Arachova-Antikyra</option>
                            <option value="ADSM_CITY_IOANNINA_2">Dodoni</option>
                            <option value="ADSM_CITY_FTHIOTIDA_2">Domokos</option>
                            <option value="ADSM_CITY_FOKIDA_2">Dorida</option>
                            <option value="ADSM_CITY_DRAMA_1">Doxato</option>
                            <option value="ADSM_CITY_DRAMA_2">Drama</option>
                            <option value="ADSM_CITY_PELLA_2">Edessa</option>
                            <option value="ADSM_CITY_LAKONIA_1">Elafonisos</option>
                            <option value="ADSM_CITY_LARISA_2">Elassona</option>
                            <option value="ADSM_CITY_ATTIKI_DYTIKI_2">Elefsina</option>
                            <option value="ADSM_CITY_ATTIKI_ATHINA_14">Elliniko-Argyroupoli</option>
                            <option value="ADSM_CITY_SERRES_3">Emmanouil Pappas</option>
                            <option value="ADSM_CITY_KOZANI_3">Eordaia</option>
                            <option value="ADSM_CITY_ARGOLIDA_2">Epidaurus</option>
                            <option value="ADSM_CITY_EVIA_2">Eretria</option>
                            <option value="ADSM_CITY_ARGOLIDA_3">Ermionida</option>
                            <option value="ADSM_CITY_AXAIA_3">Erymanthos</option>
                            <option value="ADSM_CITY_LAKONIA_2">Evrotas</option>
                            <option value="ADSM_CITY_IRAKLIO_7">Faistos</option>
                            <option value="ADSM_CITY_TRIKALA_4">Farkadona</option>
                            <option value="ADSM_CITY_LARISA_7">Farsala</option>
                            <option value="ADSM_CITY_ATTIKI_ATHINA_31">Filadelfeia - Chalkidona</option>
                            <option value="ADSM_CITY_THESPROTIA_3">Filiates</option>
                            <option value="ADSM_CITY_ATTIKI_ATHINA_32">Filothei - Psychiko</option>
                            <option value="ADSM_CITY_FLORINA_3">Florina</option>
                            <option value="ADSM_CITY_KIKLADES_19">Folegandros</option>
                            <option value="ADSM_CITY_SAMOS_3">Fournoi Korseon</option>
                            <option value="ADSM_CITY_ATTIKI_DYTIKI_5">Fyli</option>
                            <option value="ADSM_CITY_ATTIKI_ATHINA_11">Galatsi</option>
                            <option value="ADSM_CITY_XANIA_2">Gavdos</option>
                            <option value="ADSM_CITY_ARTA_2">Georgios Karaiskakis</option>
                            <option value="ADSM_CITY_ATTIKI_ATHINA_12">Glyfada</option>
                            <option value="ADSM_CITY_IRAKLIO_3">Gortyna</option>
                            <option value="ADSM_CITY_ARKADIA_2">Gortynia</option>
                            <option value="ADSM_CITY_GREVENA_1">Grevena</option>
                            <option value="ADSM_CITY_IRAKLIO_4">Heraklion</option>
                            <option value="ADSM_CITY_ATTIKI_PIREAS_13">Hydra</option>
                            <option value="ADSM_CITY_RODOPI_2">Iasmos</option>
                            <option value="ADSM_CITY_SAMOS_1">Icaria</option>
                            <option value="ADSM_CITY_LASITHI_2">Ierapetra</option>
                            <option value="ADSM_CITY_THESPROTIA_1">Igoumenitsa</option>
                            <option value="ADSM_CITY_ILIA_5">Ilida</option>
                            <option value="ADSM_CITY_ATTIKI_ATHINA_17">Ilio</option>
                            <option value="ADSM_CITY_ATTIKI_ATHINA_16">Ilioupoli</option>
                            <option value="ADSM_CITY_IOANNINA_5">Ioannina</option>
                            <option value="ADSM_CITY_KIKLADES_6">Ios</option>
                            <option value="ADSM_CITY_SERRES_4">Irakleia</option>
                            <option value="ADSM_CITY_EVIA_3">Istiaia - Aidipsos</option>
                            <option value="ADSM_CITY_KEFALLONIA_1">Ithaca</option>
                            <option value="ADSM_CITY_ATTIKI_ATHINA_18">Kaisariani</option>
                            <option value="ADSM_CITY_THESSALONIKI_7">Kalamaria</option>
                            <option value="ADSM_CITY_MESSINIA_2">Kalamata</option>
                            <option value="ADSM_CITY_TRIKALA_1">Kalambaka</option>
                            <option value="ADSM_CITY_AXAIA_4">Kalavryta</option>
                            <option value="ADSM_CITY_ATTIKI_ATHINA_19">Kallithea</option>
                            <option value="ADSM_CITY_DODEKANISA_3">Kalymnos</option>
                            <option value="ADSM_CITY_XANIA_3">Kantanos-Selino</option>
                            <option value="ADSM_CITY_KARDITSA_2">Karditsa</option>
                            <option value="ADSM_CITY_DODEKANISA_4">Karpathos</option>
                            <option value="ADSM_CITY_EVRITANIA_2">Karpenisi</option>
                            <option value="ADSM_CITY_EVIA_4">Karystos</option>
                            <option value="ADSM_CITY_DODEKANISA_5">Kasos</option>
                            <option value="ADSM_CITY_XALKIDIKI_2">Kassandra</option>
                            <option value="ADSM_CITY_DODEKANISA_9">Kastellorizo - Megisti</option>
                            <option value="ADSM_CITY_KASTORIA_1">Kastoria</option>
                            <option value="ADSM_CITY_PIERIA_2">Katerini</option>
                            <option value="ADSM_CITY_DRAMA_3">Kato Nevrokopi</option>
                            <option value="ADSM_CITY_KABALA_2">Kavala</option>
                            <option value="ADSM_CITY_KIKLADES_7">Kea</option>
                            <option value="ADSM_CITY_ATTIKI_PIREAS_3">Keratsini-Drapetsona</option>
                            <option value="ADSM_CITY_ATTIKI_ATHINA_20">Kifisia</option>
                            <option value="ADSM_CITY_LARISA_3">Kileler</option>
                            <option value="ADSM_CITY_KILKIS_1">Kilkis</option>
                            <option value="ADSM_CITY_KIKLADES_8">Kimolos</option>
                            <option value="ADSM_CITY_XANIA_4">Kissamos</option>
                            <option value="ADSM_CITY_RODOPI_3">Komotini</option>
                            <option value="ADSM_CITY_IOANNINA_6">Konitsa</option>
                            <option value="ADSM_CITY_THESSALONIKI_8">Kordelio - Evosmos</option>
                            <option value="ADSM_CITY_ATTIKI_PIREAS_4">Korydallos</option>
                            <option value="ADSM_CITY_DODEKANISA_6">Kos</option>
                            <option value="ADSM_CITY_KOZANI_4">Kozani</option>
                            <option value="ADSM_CITY_ATTIKI_ANATOLIKI_4">Kropia</option>
                            <option value="ADSM_CITY_EVIA_5">Kymi - Aliveri</option>
                            <option value="ADSM_CITY_KIKLADES_9">Kythnos</option>
                            <option value="ADSM_CITY_KARDITSA_3">Lake Plastiras</option>
                            <option value="ADSM_CITY_FTHIOTIDA_3">Lamia</option>
                            <option value="ADSM_CITY_THESSALONIKI_9">Langadas</option>
                            <option value="ADSM_CITY_LARISA_4">Larissa</option>
                            <option value="ADSM_CITY_ATTIKI_ANATOLIKI_5">Lavreotiki</option>
                            <option value="ADSM_CITY_LEFKADA_1">Lefkada</option>
                            <option value="ADSM_CITY_DODEKANISA_7">Leipsoi</option>
                            <option value="ADSM_CITY_LESVOS_3">Lemnos</option>
                            <option value="ADSM_CITY_DODEKANISA_8">Leros</option>
                            <option value="ADSM_CITY_LESVOS_2">Lesbos</option>
                            <option value="ADSM_CITY_BOIOTIA_4">Livadeia</option>
                            <option value="ADSM_CITY_FTHIOTIDA_4">Lokroi</option>
                            <option value="ADSM_CITY_KORINTHIA_3">Loutraki - Agioi Theodoroi</option>
                            <option value="ADSM_CITY_ATTIKI_ATHINA_21">Lykovrysi - Pefki</option>
                            <option value="ADSM_CITY_FTHIOTIDA_5">Makrakomi</option>
                            <option value="ADSM_CITY_IRAKLIO_5">Malevizi</option>
                            <option value="ADSM_CITY_ATTIKI_DYTIKI_3">Mandra - Eidyllia</option>
                            <option value="ADSM_CITY_EVIA_6">Mantoudi - Limni - Agia Anna</option>
                            <option value="ADSM_CITY_ATTIKI_ANATOLIKI_6">Marathon</option>
                            <option value="ADSM_CITY_ATTIKI_ANATOLIKI_7">Markopoulo Mesogaias</option>
                            <option value="ADSM_CITY_RODOPI_4">Maroneia - Sapes</option>
                            <option value="ADSM_CITY_ATTIKI_ATHINA_8">Marousi</option>
                            <option value="ADSM_CITY_ARKADIA_3">Megalopoli</option>
                            <option value="ADSM_CITY_LEFKADA_2">Meganisi</option>
                            <option value="ADSM_CITY_ATTIKI_DYTIKI_4">Megara</option>
                            <option value="ADSM_CITY_MESSINIA_3">Messini</option>
                            <option value="ADSM_CITY_ATTIKI_ATHINA_22">Metamorfosi</option>
                            <option value="ADSM_CITY_IOANNINA_7">Metsovo</option>
                            <option value="ADSM_CITY_KIKLADES_10">Milos</option>
                            <option value="ADSM_CITY_IRAKLIO_6">Minoa Pediada</option>
                            <option value="ADSM_CITY_AITOLOKARNANIA_1">Missolonghi</option>
                            <option value="ADSM_CITY_FTHIOTIDA_6">Molos - Agios Konstantinos</option>
                            <option value="ADSM_CITY_LAKONIA_4">Monemvasia</option>
                            <option value="ADSM_CITY_ATTIKI_ATHINA_23">Moschato - Tavros</option>
                            <option value="ADSM_CITY_KARDITSA_4">Mouzaki</option>
                            <option value="ADSM_CITY_KSANTHI_3">Myki</option>
                            <option value="ADSM_CITY_KIKLADES_11">Mykonos</option>
                            <option value="ADSM_CITY_RETHIMNO_4">Mylopotamos</option>
                            <option value="ADSM_CITY_AITOLOKARNANIA_6">Nafpaktia</option>
                            <option value="ADSM_CITY_ARGOLIDA_4">Nafplio</option>
                            <option value="ADSM_CITY_IMATHIA_3">Naousa</option>
                            <option value="ADSM_CITY_KIKLADES_12">Naxos and Lesser Cyclades</option>
                            <option value="ADSM_CITY_ATTIKI_ATHINA_24">Nea Ionia</option>
                            <option value="ADSM_CITY_XALKIDIKI_3">Nea Propontida</option>
                            <option value="ADSM_CITY_ATTIKI_ATHINA_25">Nea Smyrni</option>
                            <option value="ADSM_CITY_SERRES_5">Nea Zichni</option>
                            <option value="ADSM_CITY_THESSALONIKI_10">Neapoli - Sykies</option>
                            <option value="ADSM_CITY_KORINTHIA_4">Nemea</option>
                            <option value="ADSM_CITY_KASTORIA_2">Nestorio</option>
                            <option value="ADSM_CITY_KABALA_3">Nestos</option>
                            <option value="ADSM_CITY_ATTIKI_PIREAS_6">Nikaia - Agios Ioannis Rentis</option>
                            <option value="ADSM_CITY_ARTA_4">Nikolaos Skoufas</option>
                            <option value="ADSM_CITY_DODEKANISA_10">Nisyros</option>
                            <option value="ADSM_CITY_ARKADIA_1">North Kynouria</option>
                            <option value="ADSM_CITY_IOANNINA_1">North Tzoumerka</option>
                            <option value="ADSM_CITY_MESSINIA_4">Oichalia</option>
                            <option value="ADSM_CITY_XIOS_1">Oinousses</option>
                            <option value="ADSM_CITY_ILIA_3">Olympia</option>
                            <option value="ADSM_CITY_THESSALONIKI_14">Oraiokastro</option>
                            <option value="ADSM_CITY_BOIOTIA_5">Orchomenos</option>
                            <option value="ADSM_CITY_EVROS_3">Orestiada</option>
                            <option value="ADSM_CITY_KASTORIA_3">Orestida</option>
                            <option value="ADSM_CITY_LASITHI_3">Oropedio Lasithiou</option>
                            <option value="ADSM_CITY_ATTIKI_ANATOLIKI_13">Oropos</option>
                            <option value="ADSM_CITY_ATTIKI_ANATOLIKI_8">Paiania</option>
                            <option value="ADSM_CITY_KILKIS_2">Paionia</option>
                            <option value="ADSM_CITY_ATTIKI_ATHINA_26">Palaio Faliro</option>
                            <option value="ADSM_CITY_KARDITSA_5">Palamas</option>
                            <option value="ADSM_CITY_ATTIKI_ANATOLIKI_9">Pallini</option>
                            <option value="ADSM_CITY_KABALA_4">Pangaio</option>
                            <option value="ADSM_CITY_ATTIKI_ATHINA_27">Papagou - Cholargos</option>
                            <option value="ADSM_CITY_DRAMA_4">Paranesti</option>
                            <option value="ADSM_CITY_PREVEZA_2">Parga</option>
                            <option value="ADSM_CITY_KIKLADES_13">Paros</option>
                            <option value="ADSM_CITY_DODEKANISA_11">Patmos</option>
                            <option value="ADSM_CITY_AXAIA_5">Patras</option>
                            <option value="ADSM_CITY_THESSALONIKI_11">Pavlos Melas</option>
                            <option value="ADSM_CITY_KERKIRA_2">Paxi</option>
                            <option value="ADSM_CITY_PELLA_3">Pella</option>
                            <option value="ADSM_CITY_ATTIKI_ATHINA_28">Penteli</option>
                            <option value="ADSM_CITY_ATTIKI_PIREAS_8">Perama</option>
                            <option value="ADSM_CITY_ATTIKI_ATHINA_29">Peristeri</option>
                            <option value="ADSM_CITY_ATTIKI_ATHINA_30">Petroupoli</option>
                            <option value="ADSM_CITY_ILIA_6">Pineios</option>
                            <option value="ADSM_CITY_ATTIKI_PIREAS_7">Piraeus</option>
                            <option value="ADSM_CITY_XANIA_5">Platanias</option>
                            <option value="ADSM_CITY_IOANNINA_8">Pogoni</option>
                            <option value="ADSM_CITY_XALKIDIKI_4">Polygyros</option>
                            <option value="ADSM_CITY_ATTIKI_PIREAS_9">Poros</option>
                            <option value="ADSM_CITY_FLORINA_2">Prespes</option>
                            <option value="ADSM_CITY_PREVEZA_3">Preveza</option>
                            <option value="ADSM_CITY_DRAMA_5">Prosotsani</option>
                            <option value="ADSM_CITY_XIOS_3">Psara</option>
                            <option value="ADSM_CITY_PIERIA_3">Pydna - Kolindros</option>
                            <option value="ADSM_CITY_THESSALONIKI_12">Pylaia - Chortiatis</option>
                            <option value="ADSM_CITY_TRIKALA_2">Pyli</option>
                            <option value="ADSM_CITY_MESSINIA_5">Pylos - Nestor</option>
                            <option value="ADSM_CITY_ILIA_7">Pyrgos</option>
                            <option value="ADSM_CITY_ATTIKI_ANATOLIKI_10">Rafina - Pikermi</option>
                            <option value="ADSM_CITY_RETHIMNO_5">Rethymno</option>
                            <option value="ADSM_CITY_DODEKANISA_12">Rhodes</option>
                            <option value="ADSM_CITY_MAGNISIA_6">Rigas Feraios</option>
                            <option value="ADSM_CITY_ATTIKI_PIREAS_10">Salamis Island</option>
                            <option value="ADSM_CITY_SAMOS_2">Samos</option>
                            <option value="ADSM_CITY_EVROS_4">Samothrace</option>
                            <option value="ADSM_CITY_ATTIKI_ANATOLIKI_11">Saronikos</option>
                            <option value="ADSM_CITY_KIKLADES_14">Serifos</option>
                            <option value="ADSM_CITY_SERRES_6">Serres</option>
                            <option value="ADSM_CITY_KOZANI_1">Servia - Velventos</option>
                            <option value="ADSM_CITY_XANIA_6">Sfakia</option>
                            <option value="ADSM_CITY_KIKLADES_16">Sifnos</option>
                            <option value="ADSM_CITY_KIKLADES_15">Sikinos</option>
                            <option value="ADSM_CITY_KORINTHIA_6">Sikyona</option>
                            <option value="ADSM_CITY_SERRES_7">Sintiki</option>
                            <option value="ADSM_CITY_XALKIDIKI_5">Sithonia</option>
                            <option value="ADSM_CITY_LASITHI_4">Sitia</option>
                            <option value="ADSM_CITY_MAGNISIA_7">Skiathos</option>
                            <option value="ADSM_CITY_MAGNISIA_8">Skopelos</option>
                            <option value="ADSM_CITY_PELLA_4">Skydra</option>
                            <option value="ADSM_CITY_EVIA_7">Skyros</option>
                            <option value="ADSM_CITY_KARDITSA_6">Sofades</option>
                            <option value="ADSM_CITY_EVROS_5">Soufli</option>
                            <option value="ADSM_CITY_THESPROTIA_2">Souli</option>
                            <option value="ADSM_CITY_ARKADIA_4">South Kynouria</option>
                            <option value="ADSM_CITY_MAGNISIA_5">South Pelion</option>
                            <option value="ADSM_CITY_LAKONIA_5">Sparti</option>
                            <option value="ADSM_CITY_ATTIKI_ANATOLIKI_12">Spata - Artemida</option>
                            <option value="ADSM_CITY_ATTIKI_PIREAS_11">Spetses</option>
                            <option value="ADSM_CITY_FTHIOTIDA_7">Stylida</option>
                            <option value="ADSM_CITY_DODEKANISA_13">Symi</option>
                            <option value="ADSM_CITY_KIKLADES_17">Syros - Ermoupoli</option>
                            <option value="ADSM_CITY_BOIOTIA_6">Tanagra</option>
                            <option value="ADSM_CITY_LARISA_5">Tempi</option>
                            <option value="ADSM_CITY_KABALA_1">Thasos</option>
                            <option value="ADSM_CITY_BOIOTIA_3">Thebes</option>
                            <option value="ADSM_CITY_THESSALONIKI_4">Thermaikos</option>
                            <option value="ADSM_CITY_THESSALONIKI_5">Thermi</option>
                            <option value="ADSM_CITY_AITOLOKARNANIA_5">Thermo</option>
                            <option value="ADSM_CITY_THESSALONIKI_6">Thessaloniki</option>
                            <option value="ADSM_CITY_KIKLADES_5">Thiras</option>
                            <option value="ADSM_CITY_DODEKANISA_14">Tilos</option>
                            <option value="ADSM_CITY_KIKLADES_18">Tinos</option>
                            <option value="ADSM_CITY_KSANTHI_4">Topeiros</option>
                            <option value="ADSM_CITY_MESSINIA_6">Trifylia</option>
                            <option value="ADSM_CITY_TRIKALA_3">Trikala</option>
                            <option value="ADSM_CITY_ARKADIA_5">Tripoli</option>
                            <option value="ADSM_CITY_ATTIKI_PIREAS_12">Troizinia</option>
                            <option value="ADSM_CITY_LARISA_6">Tyrnavos</option>
                            <option value="ADSM_CITY_ATTIKI_ANATOLIKI_2">Vari - Voula - Vouliagmeni</option>
                            <option value="ADSM_CITY_KORINTHIA_1">Velo - Vocha</option>
                            <option value="ADSM_CITY_IMATHIA_2">Veria</option>
                            <option value="ADSM_CITY_IRAKLIO_2">Viannos</option>
                            <option value="ADSM_CITY_SERRES_2">Visaltia</option>
                            <option value="ADSM_CITY_KOZANI_2">Voio</option>
                            <option value="ADSM_CITY_MAGNISIA_3">Volos</option>
                            <option value="ADSM_CITY_THESSALONIKI_2">Volvi</option>
                            <option value="ADSM_CITY_ATTIKI_ATHINA_9">Vrilissia</option>
                            <option value="ADSM_CITY_ATTIKI_ATHINA_10">Vyronas</option>
                            <option value="ADSM_CITY_AXAIA_2">West Achaea</option>
                            <option value="ADSM_CITY_MESSINIA_1">West Mani</option>
                            <option value="ADSM_CITY_KSANTHI_1">Xanthi</option>
                            <option value="ADSM_CITY_AITOLOKARNANIA_7">Xiromero</option>
                            <option value="ADSM_CITY_KORINTHIA_5">Xylokastro - Evrostina</option>
                            <option value="ADSM_CITY_ILIA_4">Zacharo</option>
                            <option value="ADSM_CITY_MAGNISIA_4">Zagora - Mouresi</option>
                            <option value="ADSM_CITY_IOANNINA_3">Zagori</option>
                            <option value="ADSM_CITY_ZAKYNTHOS_1">Zakynthos</option>
                            <option value="ADSM_CITY_PREVEZA_1">Ziros</option>
                            <option value="ADSM_CITY_IOANNINA_4">Zitsa</option>
                            <option value="ADSM_CITY_ATTIKI_ATHINA_15">Zografou</option>
                            <option value="ADSM_CITY_LAKONIA_3">Μani</option>
                          </select>
                        </span>

                        <span style="width:445px;">
                          <input type="text" name="tsearch" id="tsearch" value="e.g. Santorini Villas" onfocus="if( this.value=='e.g. Santorini Villas') this.value='';"
                            onblur="if( this.value=='') this.value='e.g. Santorini Villas';">
                        </span>

                      </div>

                      <div class="adsmanager_spacer" style="margin-top:15px;"></div>

                      <div width="100%" class="search_text_MAD">

                        <span style="width:auto;">
                          <div class="search_box_polisi_MAD" style="display:inline-block; margin-left:0px;">
                            <input type="checkbox" name="akinitopros" id="akinitopros" value="0"> &nbsp;Sale &nbsp;&nbsp;&nbsp;&nbsp;

                            <input type="checkbox" name="akinitopros" id="akinitopros" value="1"> &nbsp;Hire


                          </div>
                        </span>

                        <span style="margin-right:4px;">Price :

                          <input type="text" name="price_from" style="width:40px;" id="price_from" size="5"
                            value="from..." onfocus="if(this.value=='from...') this.value='';"
                            onblur="if( this.value=='') this.value='from...';">&nbsp;&nbsp;


                          <input type="text" name="price_to" id="price_to" style="width:40px;" value="to..."
                            onfocus="if(this.value=='to...') this.value='';" onblur="if( this.value=='') this.value='to...';">
                        </span>
                        <span style="margin-right:4px;">Size:

                          <input type="text" name="embadom_from" style="width:40px;" id="embadom_from" size="5"
                            value="from..." onfocus="if(this.value=='from...') this.value='';"
                            onblur="if( this.value=='') this.value='from...';">&nbsp;&nbsp;


                          <input type="text" name="embadom_to" style="width:40px;" id="embadom_to" size="5"
                            value="to..." onfocus="if(this.value=='to...') this.value='';"
                            onblur="if( this.value=='') this.value='to...';">
                        </span>
                      </div>

                      <div class="adsmanager_spacer" style="margin-top:15px;"></div>

                      <div width="100%" class="search_text_MAD">
                        <span>Type:
                          <select name="eidos_akinitou" id="eidos_akinitou" onchange="set_span_title_MAD('eidos_akinitou', 'eidos_akinitou_span');">
                            <option value="-1" selected="selected">Select..</option>
                            <option value="0">Villa</option>
                            <option value="1">House</option>
                            <option value="2">Maisonette</option>
                            <option value="3">Apartment/Penthouse</option>
                            <option value="4">Apartment</option>
                            <option value="5">Bedsit</option>
                            <option value="6">Studio</option>
                            <option value="7">Business area</option>
                            <option value="8">Shop</option>
                            <option value="9">Office</option>
                            <option value="10">Warehouse</option>
                            <option value="11">Garage/parking</option>
                            <option value="12">Hotel</option>
                            <option value="13">Rented Rooms</option>
                            <option value="14">Plot</option>
                            <option value="15">Parcel</option>
                            <option value="16">Island</option>
                            <option value=""></option>
                          </select>
                        </span>
                        <span style="margin-right:4px;">Rooms:


                          <select name="domatia" id="domatia" onchange="set_span_title_MAD('domatia', 'domatia_span');">
                            <option value="-1">Select..</option>
                            <option value="0">1</option>
                            <option value="1">2</option>
                            <option value="2">3</option>
                            <option value="3">4</option>
                            <option value="4">5</option>
                            <option value="5">6</option>
                            <option value="6">7</option>
                            <option value="7">8</option>
                            <option value="8">9</option>
                            <option value="9">10</option>
                          </select>

                        </span>
                        <span style="margin-right:4px;">
                          First at sea:

                          <div style="display:inline-block; margin-left:0px;">

                            <input type="checkbox" name="apostasithalassa" id="apostasithalassa" value="0">&nbsp;YES &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name="apostasithalassa" id="apostasithalassa" value="1">&nbsp;NO

                          </div>
                        </span>

                        <span style="margin-right:4px; float:right; margin-top:-10px;">
                          <a href="JavaScript:void(0);" onclick="clear_form_MAD(); document.ads_search_Form.submit();"
                            class="adsmanager_general_links_button" style="color:#A12908;font-size:12px;;">FIND NOW</a>
                        </span>

                      </div>

                    </div>

                  </form>
                  <!-- end nostyle content -->
                </div>
                <!-- end nostyle -->
                <article class="art-post art-messages" style="display: none;">
                  <div class="art-postcontent clearfix"></div>
                </article>
                <article class="art-post">
                  <div class="art-postcontent clearfix">
                    <style>
                    .active_tab {}
                    </style>

                    <script>
                    jQuery(document).ready(function() {


                      var parent_enoik_html = jQuery('#parent_enoik').parent()
                        .html();
                      var parent_pol_html = jQuery('#parent_pol').parent().html();
                      jQuery('#parent_enoik').remove();
                      jQuery('#parent_pol').remove();
                      jQuery('#home').prepend(
                        '<div class="tabs_header" ><span>' +
                        parent_pol_html + '</span><span>' +
                        parent_enoik_html + '</span></div>');
                      jQuery('.enoik_class').hide();
                      jQuery('#parent_pol').addClass('active_tab');

                      jQuery('#parent_enoik').click(function(e) {
                        e.preventDefault();
                        jQuery('#parent_enoik').addClass('active_tab');
                        jQuery('#parent_pol').removeClass('active_tab');
                        jQuery('.enoik_class').fadeIn(300);
                        jQuery('.pol_class').hide();

                      })
                      jQuery('#parent_pol').click(function(e) {
                        e.preventDefault();
                        jQuery('#parent_enoik').removeClass(
                          'active_tab');
                        jQuery('#parent_pol').addClass('active_tab');
                        jQuery('.pol_class').fadeIn(300);
                        jQuery('.enoik_class').hide();

                      })

                    })
                    </script>

                    <div id="home" style="margin-top:-16px;">
                      <div class="">
                        <span>

                          <a id="parent_pol" class="active_tab">

                            Property Sales</a>
                        </span>
                        <span>

                          <a id="parent_enoik">

                            Property Rentals</a>
                        </span>
                      </div>
                      <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr align="center">
                            <td width="31%" style="margin:1%;" align="left">

                            </td>
                          </tr>
                          <tr align="center">
                            <td width="31%" style="margin:1%;" align="left">

                              <a href="/index.php?option=com_adsmanager&amp;view=list&amp;catid=7&amp;Itemid=691&amp;lang=en"
                                class="adsmanager_category_links_button enoik_class"
                                style="display: none;">

                                <img class="imgcat_ads" src="http://grecia24.ru//images/com_adsmanager/categories/7cat.jpg"
                                  alt="Appartments">Appartments
                                </a>
                            </td>
                            <td width="31%" style="margin:1%;" align="left">

                              <a href="/index.php?option=com_adsmanager&amp;view=list&amp;catid=13&amp;Itemid=691&amp;lang=en"
                                class="adsmanager_category_links_button enoik_class"
                                style="display: none;">

                                <img class="imgcat_ads" src="http://grecia24.ru//images/com_adsmanager/categories/13cat.jpg"
                                  alt="Houses">Houses
                                </a>
                            </td>
                            <td width="31%" style="margin:1%;" align="left">

                              <a href="/index.php?option=com_adsmanager&amp;view=list&amp;catid=14&amp;Itemid=691&amp;lang=en"
                                class="adsmanager_category_links_button enoik_class"
                                style="display: none;">

                                <img class="imgcat_ads" src="http://grecia24.ru//images/com_adsmanager/categories/14cat.jpg"
                                  alt="Holiday homes">Holiday
                                homes</a>
                            </td>
                          </tr>
                          <tr align="center">
                            <td width="31%" style="margin:1%;" align="left">

                              <a href="/index.php?option=com_adsmanager&amp;view=list&amp;catid=15&amp;Itemid=691&amp;lang=en"
                                class="adsmanager_category_links_button enoik_class"
                                style="display: none;">

                                <img class="imgcat_ads" src="http://grecia24.ru//images/com_adsmanager/categories/15cat.jpg"
                                  alt="Hotels">Hotels
                                </a>
                            </td>
                            <td width="31%" style="margin:1%;" align="left">

                              <a href="/index.php?option=com_adsmanager&amp;view=list&amp;catid=16&amp;Itemid=691&amp;lang=en"
                                class="adsmanager_category_links_button enoik_class"
                                style="display: none;">

                                <img class="imgcat_ads" src="http://grecia24.ru//images/com_adsmanager/categories/16cat.jpg"
                                  alt="Businesses">Businesses
                                </a>
                            </td>
                            <td width="31%" style="margin:1%;" align="left">

                              <a href="/index.php?option=com_adsmanager&amp;view=list&amp;catid=17&amp;Itemid=691&amp;lang=en"
                                class="adsmanager_category_links_button enoik_class"
                                style="display: none;">

                                <img class="imgcat_ads" src="http://grecia24.ru//images/com_adsmanager/categories/17cat.jpg"
                                  alt="Business area">Business
                                area</a>
                            </td>
                          </tr>
                          <tr align="center">
                            <td width="31%" style="margin:1%;" align="left">

                              <a href="/index.php?option=com_adsmanager&amp;view=list&amp;catid=18&amp;Itemid=691&amp;lang=en"
                                class="adsmanager_category_links_button enoik_class"
                                style="display: none;">

                                <img class="imgcat_ads" src="http://grecia24.ru//images/com_adsmanager/categories/18cat.jpg"
                                  alt="Parcels">Parcels
                                </a>
                            </td>
                            <td width="31%" style="margin:1%;" align="left">

                              <a href="/index.php?option=com_adsmanager&amp;view=list&amp;catid=19&amp;Itemid=691&amp;lang=en"
                                class="adsmanager_category_links_button enoik_class"
                                style="display: none;">

                                <img class="imgcat_ads" src="http://grecia24.ru//images/com_adsmanager/categories/19cat.jpg"
                                  alt="Plots">Plots
                                </a>
                            </td>
                            <td width="31%" style="margin:1%;" align="left">

                              <a href="/index.php?option=com_adsmanager&amp;view=list&amp;catid=20&amp;Itemid=691&amp;lang=en"
                                class="adsmanager_category_links_button enoik_class"
                                style="display: none;">

                                <img class="imgcat_ads" src="http://grecia24.ru//images/com_adsmanager/categories/20cat.jpg"
                                  alt="Islands">Islands
                              </a>

                            </td>
                            <td width="31%" style="margin:1%;" align="left">

                            </td>
                          </tr>
                          <tr align="center">
                            <td width="31%" style="margin:1%;" align="left">

                              <a href="/index.php?option=com_adsmanager&amp;view=list&amp;catid=1&amp;Itemid=691&amp;lang=en"
                                class="adsmanager_category_links_button pol_class">

                                <img class="imgcat_ads" src="http://grecia24.ru//images/com_adsmanager/categories/1cat.jpg"
                                  alt="Appartments">Appartments
                                </a>
                            </td>
                            <td width="31%" style="margin:1%;" align="left">

                              <a href="/index.php?option=com_adsmanager&amp;view=list&amp;catid=9&amp;Itemid=691&amp;lang=en"
                                class="adsmanager_category_links_button pol_class">

                                <img class="imgcat_ads" src="http://grecia24.ru//images/com_adsmanager/categories/9cat.jpg"
                                  alt="Houses">Houses
                                </a>
                            </td>
                            <td width="31%" style="margin:1%;" align="left">

                              <a href="/index.php?option=com_adsmanager&amp;view=list&amp;catid=10&amp;Itemid=691&amp;lang=en"
                                class="adsmanager_category_links_button pol_class">

                                <img class="imgcat_ads" src="http://grecia24.ru//images/com_adsmanager/categories/10cat.jpg"
                                  alt="Holiday homes">Holiday
                                homes</a>
                            </td>
                          </tr>
                          <tr align="center">
                            <td width="31%" style="margin:1%;" align="left">

                              <a href="/index.php?option=com_adsmanager&amp;view=list&amp;catid=5&amp;Itemid=691&amp;lang=en"
                                class="adsmanager_category_links_button pol_class">

                                <img class="imgcat_ads" src="http://grecia24.ru//images/com_adsmanager/categories/5cat.jpg"
                                  alt="Hotels">Hotels
                                </a>
                            </td>
                            <td width="31%" style="margin:1%;" align="left">

                              <a href="/index.php?option=com_adsmanager&amp;view=list&amp;catid=8&amp;Itemid=691&amp;lang=en"
                                class="adsmanager_category_links_button pol_class">

                                <img class="imgcat_ads" src="http://grecia24.ru//images/com_adsmanager/categories/8cat.jpg"
                                  alt="Businesses">Businesses
                                </a>
                            </td>
                            <td width="31%" style="margin:1%;" align="left">

                              <a href="/index.php?option=com_adsmanager&amp;view=list&amp;catid=3&amp;Itemid=691&amp;lang=en"
                                class="adsmanager_category_links_button pol_class">

                                <img class="imgcat_ads" src="http://grecia24.ru//images/com_adsmanager/categories/3cat.jpg"
                                  alt="Business area">Business
                                area</a>
                            </td>
                          </tr>
                          <tr align="center">
                            <td width="31%" style="margin:1%;" align="left">

                              <a href="/index.php?option=com_adsmanager&amp;view=list&amp;catid=2&amp;Itemid=691&amp;lang=en"
                                class="adsmanager_category_links_button pol_class">

                                <img class="imgcat_ads" src="http://grecia24.ru//images/com_adsmanager/categories/2cat.jpg"
                                  alt="Parcels">Parcels
                                </a>
                            </td>
                            <td width="31%" style="margin:1%;" align="left">

                              <a href="/index.php?option=com_adsmanager&amp;view=list&amp;catid=11&amp;Itemid=691&amp;lang=en"
                                class="adsmanager_category_links_button pol_class">

                                <img class="imgcat_ads" src="http://grecia24.ru//images/com_adsmanager/categories/11cat.jpg"
                                  alt="Plots">Plots
                                </a>
                            </td>
                            <td width="31%" style="margin:1%;" align="left">

                              <a href="/index.php?option=com_adsmanager&amp;view=list&amp;catid=12&amp;Itemid=691&amp;lang=en"
                                class="adsmanager_category_links_button pol_class">

                                <img class="imgcat_ads" src="http://grecia24.ru//images/com_adsmanager/categories/12cat.jpg"
                                  alt="Islands">Islands
                              </a>

                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </article>
                <!-- end nostyle -->
                <!-- begin nostyle -->
                <div class="art-nostyle">
                  <!-- begin nostyle content -->
                  <style>
                  /*HORIZONTIAL */

                  #d_akin_hor {
                    width: 820px;
                    margin: 0 auto;
                    display: block;
                    background: url('../images/d_akin_hor_bg2.png') no-repeat center;
                    margin-top: 20px;
                    padding-top: 20px;
                  }

                  #d_hor_animate {
                    margin: 0px!important;
                    padding: 0px!important;
                    position: relative;
                    height: 630px;
                    overflow: hidden;
                    display: block;
                  }

                  #d_akin_hor .adsmanager_hor_list {
                    height: 630px;
                    position: relative;
                  }

                  #d_akin_hor .adsmanager_hor_list li {
                    list-style-type: none;
                    float: left;
                    width: 190px;
                  }

                  #d_akin_hor .adsmanager_hor_list li .center {
                    position: relative;
                    padding: 0px!important;
                    margin: 0px 10px 0px 0px!important;
                    width: 178px;
                    height: 210px;
                    text-align: left !important;
                  }

                  #button_left,
                  #button_right {
                    cursor: pointer;
                  }

                  #button_left {
                    float: left;
                    margin-top: 278px;
                    margin-left: -20px;
                  }

                  #button_right {
                    float: right;
                    margin-top: -352px;
                    margin-right: -20px;
                  }
                  </style>


                  <script>
                  jQuery(document).ready(function() {

                    right_click = 0;
                    left_click = 0;
                    count_d_akin_hor = 0;

                    var left = jQuery('.adsmanager_hor_list  li').outerWidth(
                      true);
                    jQuery('#d_hor_animate').css('width', left * 4);
                    left = left;

                    jQuery('.adsmanager_hor_list  li').each(function(index,
                      element) {
                      count_d_akin_hor++;
                    })
                    jQuery('.adsmanager_hor_list').width(count_d_akin_hor /
                      3 * left);
                    if (count_d_akin_hor > 8) {
                      jQuery('#button_right').show();
                      jQuery('#button_left').css('visibility', 'hidden');
                    } else {
                      jQuery('#button_right, #button_left').hide();
                    }


                    jQuery('#button_right').click(function() {

                      jQuery('.adsmanager_hor_list').animate({
                        left: '-=' + left
                      }, 500);

                      right_click++;

                      check_first_last();
                    })

                    jQuery('#button_left').click(function() {

                      jQuery('.adsmanager_hor_list').animate({
                        left: '+=' + left
                      }, 500);

                      right_click = right_click - 1;

                      check_first_last();
                    })



                    function check_first_last() {



                      if (right_click == ((parseInt(count_d_akin_hor / 3)) -
                          4)) {
                        jQuery('#button_right').css('visibility', 'hidden');
                      } else {
                        jQuery('#button_right').css('visibility', 'visible');
                      }

                      if (right_click != 0) {
                        jQuery('#button_left').css('visibility', 'visible');
                      }

                      if (right_click == 0) {
                        jQuery('#button_left').css('visibility', 'hidden');
                      }

                    }



                  })
                  </script>
                  <!-- end nostyle content -->
                </div>
                <!-- end nostyle -->


              </div>

            </div>
          </div>
        </div>



        <div class="push-left">
          @include('partials.outputgif') @include('partials.exnethellasbanner')
        </div>
      </div>
      <div id="right" class="col-xs-3 border">
        @include('partials.right')
      </div>
    </div>
  </div>

  @include('partials.footer')

</body>

</html>
