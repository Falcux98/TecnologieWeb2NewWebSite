<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class seeder_prodotti extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prodotto')->insert([
            'nome' => 'ASUS VivoBook S15',
            'descrizioneBreve' => 'Computer portatile 39,6 cm (15.6")',
            'descrizioneEstesa' => 'Computer portatile. Famiglia processore: Intel® Pentium® Gold. Fattore di forma: Clamshell. Modello del processore: 5405U, Frequenza del processore: 2,3 GHz. Dimensioni schermo: 39,6 cm (15.6"), Tipologia HD: HD, Risoluzione del display: 1366 x 768 Pixel. RAM installata: 4 GB, Tipo di RAM: DDR4-SDRAM. Capacità totale di archiviazione: 128 GB, Supporto di memoria: SSD. Scheda grafica integrata. Sistema operativo incluso: Windows 10 S. Colore del prodotto: Argento',
            'prezzo' => '429.00',
            'foto' => '/ASUSVivoBook.jpg',
            'percentualeSconto' => '15',
            'inPromozione' => '1',
            'categoria' => '01',
            'sottocategoria' => '01'
        ]);


        DB::table('prodotto')->insert([
            'nome' => 'ASUS ZenBook 14',
            'descrizioneBreve' => 'Computer portatile 35,6 cm (14")',
            'descrizioneEstesa' => 'Computer portatile, Fattore di forma: Clamshell. Famiglia processore: Intel® Core™ i7 di decima generazione, Modello del processore: i7-10510U, Frequenza del processore: 1,8 GHz. Dimensioni schermo: 35,6 cm (14"), Tipologia HD: Full HD, Risoluzione del display: 1920 x 1080 Pixel. RAM installata: 8 GB. Capacità totale di archiviazione: 256 GB, Supporto di memoria: SSD. Scheda grafica integrata, Adattatore di scheda grafica separato. Sistema operativo incluso: Windows 10. Colore del prodotto: Argento',
            'prezzo' => '899.00',
            'foto' => '/ASUSZenbook.jpg',
            'percentualeSconto' => '10',
            'inPromozione' => '1',
            'categoria' => '01',
            'sottocategoria' => '01'
        ]);

        DB::table('prodotto')->insert([
            'nome' => 'Lenovo IdeaPad S340',
            'descrizioneBreve' => 'Computer portatile 39,6 cm (15.6") ',
            'descrizioneEstesa' => 'Sottile e leggero per una notevole portabilità. I bordi stretti consentono di sfruttare al meglio le potenzialità del display con i suoni di qualità cinematografica di Dolby Audio™  la potenza della tecnologia AMD Ryzen™ per garantirti velocità di elaborazione indipendentemente dal lavoro che devi svolgere. ',
            'prezzo' => '699.00',
            'foto' => '/ideapad.jpg',
            'percentualeSconto' => '0',
            'inPromozione' => '0',
            'categoria' => '01',
            'sottocategoria' => '01'
        ]);

        DB::table('prodotto')->insert([
            'nome' => 'MSI PS42',
            'descrizioneBreve' => 'Notebook da 14" ',
            'descrizioneEstesa' => 'Processore Intel® Core™ I7-8550U SSD: 512 GB - RAM: 16 GB - Display: 14 LCD Full HD - WiFi IEEE 802.11a/b/g/n/ac - Bluetooth 4.1 - Windows 10 Home Plus - Scheda grafica: NVIDIA MX150, 2 GB dedicata. ',
            'prezzo' => '1499.99',
            'foto' => '/prestige15.jpg',
            'percentualeSconto' => '15',
            'inPromozione' => '1',
            'categoria' => '01',
            'sottocategoria' => '01'
        ]);

         DB::table('prodotto')->insert([
            'nome' => 'MSI Infinite A 9SC-839IT',
            'descrizioneBreve' => 'Intel® Core™ i7 di nona generazione i7-9700F',
            'descrizioneEstesa' => 'Sistema operativo incluso Windows 10 Home, modello del processore i7-9700F, RAM installata 16  GB, capacità SSD 256  GB',
            'prezzo' => '1599.00',
            'foto' => '/msiinfinite.jpg',
            'percentualeSconto' => '10',
            'inPromozione' => '1',
            'categoria' => '01',
            'sottocategoria' => '02'
        ]);
         
            DB::table('prodotto')->insert([
            'nome' => 'MSI TRIDENT 3 9SH-420IT',
            'descrizioneBreve' => 'PC Desktop 3 9SH-420IT',
            'descrizioneEstesa' => 'Processore Intel® Core™ I5-9400 (2,9 GHz - 9 MB L3) HDD: 512 GB - RAM: 8 GB - WiFi IEEE 802.11a/b/g/n/ac Bluetooth 4.2 - Windows 10 Home  Scheda audio: 5.1 Channel HD Audio con Nahimic audio enhancer Scheda grafica: NVIDIA GTX 1660 Aero ITX, 6 GB dedicata',
            'prezzo' => '1099.00',
            'foto' => '/108000.jpg',
            'percentualeSconto' => '20',
            'inPromozione' => '1',
            'categoria' => '01',
            'sottocategoria' => '02'
        ]);
            
               DB::table('prodotto')->insert([
            'nome' => 'OMEN by HP Obelisk',
            'descrizioneBreve' => 'PC Desktop 875-1013nl',
            'descrizioneEstesa' => 'Processore Intel® Core™ i7-9700F (3 GHz - 12 MB L3) HDD: 1000 GB - SSD: 256 GB - RAM: 16 GB WiFi IEEE 802.11a/b/g/n/ac - Bluetooth 4.2 Windows 10 Home 64 Scheda audio: DTS Studio Sound, DTS Headphone: X Scheda grafica: NVIDIA GeForce RTX 2080 Super, 8 GB dedicata',
            'prezzo' => '2499.00',
            'foto' => '/116680.jpg',
            'percentualeSconto' => '0',
            'inPromozione' => '0',
            'categoria' => '01',
            'sottocategoria' => '02'
        ]);
               
                  DB::table('prodotto')->insert([
            'nome' => 'MICROSOFT Surface Pro7',
            'descrizioneBreve' => 'Notebook 2 in 1 da 12,3" ',
            'descrizioneEstesa' => 'Processore Intel® Core™ I5-1035G4 | 1,1 GHz - 6 MB L3| - SSD: 128 GB - RAM: 8 GB - Display: 12,3" LED - WiFi IEEE 802.11a/b/g/n/ac - Bluetooth 5.0 - Windows 10 Home - Scheda grafica: INTEL Iris Plus Graphics Condivisa',
            'prezzo' => '916.00',
            'foto' => '/111087.jpg',
            'percentualeSconto' => '10',
            'inPromozione' => '1',
            'categoria' => '01',
            'sottocategoria' => '03'
        ]);
                  
                     DB::table('prodotto')->insert([
            'nome' => 'MICROSOFT Surface Book2 ',
            'descrizioneBreve' => 'Notebook 2 in 1 da 13,5" ',
            'descrizioneEstesa' => 'Processore Intel® Core™ I7-8650U (1,9 GHz - 16 MB L3) SSD 1000 GB - RAM 8 GB - Display 13,5" LCD WiFi IEEE 802.11a/b/g/n/ac - Bluetooth 4.1 Windows 10 Pro Scheda grafica nVidia GeForce GTX 1050(2 GB dedicata)',
            'prezzo' => '2548.00',
            'foto' => '/750207.jpg',
            'percentualeSconto' => '0',
            'inPromozione' => '0',
            'categoria' => '01',
            'sottocategoria' => '03'
        ]);
                     
                        DB::table('prodotto')->insert([
            'nome' => 'ACER Aspire C27-865',
            'descrizioneBreve' => 'PC All-In-One',
            'descrizioneEstesa' => ' Processore Intel® Core™ i5-8250U (1,6 GHz - 6 MB L2)SSD: 256 GB - RAM: 8 GB WiFi IEEE 802.11a/b/g/n/ac - Bluetooth 4.2 Scheda grafica: NVIDIA MX130, 2 GB dedicata Display 27" Full HD',
            'prezzo' => '1099.00',
            'foto' => '/994420.jpg',
            'percentualeSconto' => '15',
            'inPromozione' => '1',
            'categoria' => '01',
            'sottocategoria' => '04'
        ]);
                        
                           DB::table('prodotto')->insert([
            'nome' => 'APPLE iMac 21.5"',
            'descrizioneBreve' => 'PC All-In-One',
            'descrizioneEstesa' => 'Intel® Dual Core i5 (2.3/3.6GHz) HD 1TB - RAM 8GB - Microfono - Uscita Thunderbolt 3 Wi-Fi 802.11a/b/g/n/ac - Bluetooth 4.2 - Mac OS Sierra Processore grafico Intel Iris Plus Graphics 640 - Scheda audio Integrata',
            'prezzo' => '1199.00',
            'foto' => '/741140.jpg',
            'percentualeSconto' => '0',
            'inPromozione' => '0',
            'categoria' => '01',
            'sottocategoria' => '04'
        ]);
                           
                              DB::table('prodotto')->insert([
            'nome' => 'Samsung Series 5',
            'descrizioneBreve' => '81,3 cm (32") Full HD Smart TV',
            'descrizioneEstesa' => 'Dimensioni schermo 32", risoluzione del display 1920 x 1080  pixel, sistema operativo incluso Tizen ',
            'prezzo' => '269.00',
            'foto' => '/smart1.jpg',
            'percentualeSconto' => '10',
            'inPromozione' => '1',
            'categoria' => '02',
            'sottocategoria' => '05'
        ]);
                              
        DB::table('prodotto')->insert([
            'nome' => 'PHILIPS 32PFS5803/12',
            'descrizioneBreve' => 'Smart Tv Led 32" Full HD ',
            'descrizioneEstesa' => 'SMART TV LED 32" Full HD - Risoluzione: 1920x1080 pixel Tecnologia WiFi - Ethernet Tuner Digitale Terrestre: DVB-T2 HEVC e Satellitare DVB-S2 Casse integrate - Potenza in uscita: 16 W',
            'prezzo' => '249.00',
            'foto' => '/752731.jpg',
            'percentualeSconto' => '5',
            'inPromozione' => '1',
            'categoria' => '02',
            'sottocategoria' => '06'
        ]);
                                 
               DB::table('prodotto')->insert([
            'nome' => 'LG 32LM550BPLB ',
            'descrizioneBreve' => 'TV LED 32"',
            'descrizioneEstesa' => 'TV LED 32" HD - Risoluzione: 1366x768 pixel Frequenza: 60 Hz - Casse integrate - Potenza in uscita: 10 W Tuner Digitale Terrestre: DVB-T2 HEVCe Satellitare DVB-S2 Classe efficienza energetica: A + - Distribuito da Lg Italia',
            'prezzo' => '159.00',
            'foto' => '/127409.jpg',
            'percentualeSconto' => '1',
            'inPromozione' => '0',
            'categoria' => '02',
            'sottocategoria' => '06'
        ]);
                                    
            DB::table('prodotto')->insert([
            'nome' => 'SONY KD55AG8',
            'descrizioneBreve' => 'Smart TV 55" Ultra HD (4K)',
            'descrizioneEstesa' => 'SMART TV OLED 55" 4K - Risoluzione: 3840 x 2160 pixel Frequenza: 100 Hz - WiFi + Ethernet - DLNA Tuner Digitale Terrestre: DVB-T2 HEVCe Satellitare DVB-S2 Casse integrate - Potenza in uscita: 40 W',
            'prezzo' => '1549.00',
            'foto' => '/994513.jpg',
            'percentualeSconto' => '10',
            'inPromozione' => '0',
            'categoria' => '02',
            'sottocategoria' => '07'
        ]);
                DB::table('prodotto')->insert([
            'nome' => 'LG OLED 65C9PLA',
            'descrizioneBreve' => 'Smart TV 65" Ultra HD',
            'descrizioneEstesa' => 'SMART TV OLED 65" 4K - Risoluzione: 3840 x 2160 pixel Tuner Digitale Terrestre: DVB-T2 HEVCe Satellitare DVB-S2 WiFi + Ethernet - DLNA - Casse integrate - Potenza in uscita: 40 W',
            'prezzo' => '2199.00',
            'foto' => '/994152.jpg',
            'percentualeSconto' => '10',
            'inPromozione' => '0',
            'categoria' => '02',
            'sottocategoria' => '07'
        ]);
                
          DB::table('prodotto')->insert([
            'nome' => 'SAMSUNG Galaxy A71 ',
            'descrizioneBreve' => 'Smartphone Dual SIM',
            'descrizioneEstesa' => 'Quadri Band - 4G-LTE - Wi-Fi - NFC - A-GPS Fotocamera posteriore: 64 Megapixel - Android 10 Processore: 8-Core da 2,2 GHz - Memoria interna: 128 GB - RAM: 6 GB',
            'prezzo' => '359.00',
            'foto' => '/120098.jpg',
            'percentualeSconto' => '0',
            'inPromozione' => '0',
            'categoria' => '03',
            'sottocategoria' => '08'
        ]);
          DB::table('prodotto')->insert([
            'nome' => 'APPLE iPhone 11 64GB',
            'descrizioneBreve' => 'Smartphone',
            'descrizioneEstesa' => 'Display Liquid Retina HD 6,1" - iOS 13 Processore A13 Bionic Dual Core Doppia Fotocamera con grandangolo e ultragrandangolo Smart HDR - Video 4K a 60 fps',
            'prezzo' => '753.00',
            'foto' => '/112081.jpg',
            'percentualeSconto' => '1',
            'inPromozione' => '0',
            'categoria' => '03',
            'sottocategoria' => '09'
        ]);
        DB::table('prodotto')->insert([
            'nome' => 'APPLE iPhone 11 Pro',
            'descrizioneBreve' => 'Smartphone',
            'descrizioneEstesa' => 'Display Super retina XDR Oled 5,8" Processore A13 Bionic Dual Core Tripla Fotocamera con grandangolo, ultragrandangolo e teleobiettivo Smart HDR - Video 4K a 60 fps',
            'prezzo' => '1018.00',
            'foto' => '/112125_1.jpg',
            'percentualeSconto' => '10',
            'inPromozione' => '1',
            'categoria' => '03',
            'sottocategoria' => '09'
        ]);
          DB::table('prodotto')->insert([
            'nome' => 'XIAOMI Redmi Note 8 Pro ',
            'descrizioneBreve' => 'Smartphone Dual SIM',
            'descrizioneEstesa' => 'Quadri Band - 4G-LTE - Wi-Fi - NFC Fotocamera posteriore: 64 Megapixel Processore: 8-Core da 2,05 GHz Memoria interna: 128 GB - RAM: 6 GB Display 6,53" ',
            'prezzo' => '239.00',
            'foto' => '/113920.jpg',
            'percentualeSconto' => '15',
            'inPromozione' => '1',
            'categoria' => '03',
            'sottocategoria' => '08'
        ]);
            DB::table('prodotto')->insert([
            'nome' => 'SAMSUNG Galaxy S20',
            'descrizioneBreve' => 'Smartphone',
            'descrizioneEstesa' => 'Quadri Band - 4G-LTE - Wi-Fi - NFC Tripla Fotocamera Dual OIS con AF e Flash LED Fotocamera anteriore 10 MP, F2.2 - Android 10 Processore: 8-Core da 2,73 GHz Display 6,2 " Dynamic AMOLED Memoria interna: 128 GB - RAM: 8 GB ',
            'prezzo' => '775.00',
            'foto' => '/123401.jpg',
            'percentualeSconto' => '0',
            'inPromozione' => '0',
            'categoria' => '03',
            'sottocategoria' => '08'
        ]);
              DB::table('prodotto')->insert([
            'nome' => 'SAMSUNG Galaxy Tab A',
            'descrizioneBreve' => 'Tablet 10,1 " 4G-LTE',
            'descrizioneEstesa' => 'Processore Samsung Exynos 7904 8-Core 1,8 GHz - Display: 10,1 " LCD - Risoluzione: 1200x1920 pixel - Memoria interna: 32 GB - RAM: 2 GB - 4G-LTE - WiFi - GPS - Bluetooth 5.0 - Fotocamera posteriore: 8 Mpx - Fotocamera anteriore: 5 Mpx - Sistema operativo: 9 Pie',
            'prezzo' => '249.00',
            'foto' => '/992110.jpg',
            'percentualeSconto' => '1',
            'inPromozione' => '0',
            'categoria' => '03',
            'sottocategoria' => '10'
        ]);
              DB::table('prodotto')->insert([
            'nome' => 'HUAWEI Mediapad T5',
            'descrizioneBreve' => 'Tablet 10,1" Wi-Fi',
            'descrizioneEstesa' => 'Processore Kirin 659 series 8-Core 2.36 GHz Display LCD IPS 10,1" - 1920x1200 pixel Memoria interna 32GB - RAM: 3GB - Fotocamera da 5 Megapixel Wi-Fi - Bluetooth 4.2 - GPS',
            'prezzo' => '179.00',
            'foto' => '/983964.jpg',
            'percentualeSconto' => '1',
            'inPromozione' => '0',
            'categoria' => '03',
            'sottocategoria' => '10'
        ]);
              DB::table('prodotto')->insert([
            'nome' => 'APPLE iPad 10.2',
            'descrizioneBreve' => 'Tablet 10,2" Wi-Fi + Cellular',
            'descrizioneEstesa' => 'Processore Apple A10 Fusion con architettura 64 bit Coprocessore M10 integrato - Display: 10,2 " Retina Risoluzione: 2160x1620 pixel - Memoria interna: 128 GB WiFi - GPS - LTE - Bluetooth 4.2 - Peso: 493 g Fotocamera posteriore: 8 MP - Fotocamera anteriore: 1,2 MP',
            'prezzo' => '700.00',
            'foto' => '/112279.jpg',
            'percentualeSconto' => '10',
            'inPromozione' => '1',
            'categoria' => '03',
            'sottocategoria' => '11'
        ]);
                                                
             DB::table('prodotto')->insert([
            'nome' => 'APPLE iPad Pro 11',
            'descrizioneBreve' => 'Tablet 11" 4G-LTE',
            'descrizioneEstesa' => 'Processore Apple A12Z Bionic con architettura a 64 bit Coprocessore M12 8-Core Display Liquid Retina 11" LED - Risoluzione: 2388x1668 pixel memoria interna: 128 GB - 4G-LTE - WiFi - GPS - Bluetooth 5.0',
            'prezzo' => '1069.00',
            'foto' => '/127804.jpg',
            'percentualeSconto' => '1',
            'inPromozione' => '0',
            'categoria' => '03',
            'sottocategoria' => '11'
        ]);
             
              DB::table('prodotto')->insert([
            'nome' => 'SONY MDRZX110B Black',
            'descrizioneBreve' => 'Cuffie con filo',
            'descrizioneEstesa' => 'Cuffie Stereo Risposta in frequenza 12-20.000 Hz',
            'prezzo' => '14.99',
            'foto' => '/684537.jpg',
            'percentualeSconto' => '1',
            'inPromozione' => '0',
            'categoria' => '03',
            'sottocategoria' => '12'
        ]);
              
                DB::table('prodotto')->insert([
            'nome' => 'APPLE AIRPODS ',
            'descrizioneBreve' => 'Auricolari wireless',
            'descrizioneEstesa' => 'Auricolari Wireless Tecnologia Bluetooth Microfono integrato Custodia/caricabatteria inclusa',
            'prezzo' => '179.00',
            'foto' => '/993203.jpg',
            'percentualeSconto' => '1',
            'inPromozione' => '0',
            'categoria' => '03',
            'sottocategoria' => '12'
        ]);
                
                  DB::table('prodotto')->insert([
            'nome' => 'AMD RYZEN 7',
            'descrizioneBreve' => 'CPU AMD',
            'descrizioneEstesa' => 'Processore: AMD Ryzen 5 Velocità della clock: 3,5 GHz Cache di Terzo Livello: 16 MB',
            'prezzo' => '500',
            'foto' => '/100296.jpg',
            'percentualeSconto' => '1',
            'inPromozione' => '0',
            'categoria' => '04',
            'sottocategoria' => '13'
        ]);
                  
                    DB::table('prodotto')->insert([
            'nome' => 'INTEL CORE I7',
            'descrizioneBreve' => 'Processore 3.60GHZ',
            'descrizioneEstesa' => 'Processore Intel® Core™ I7 Dimensione Memoria Max: 128 GB Numero di Core: 8',
            'prezzo' => '429.00',
            'foto' => '/113145.jpg',
            'percentualeSconto' => '1',
            'inPromozione' => '0',
            'categoria' => '04',
            'sottocategoria' => '13'
        ]);
                    
                      DB::table('prodotto')->insert([
            'nome' => 'MSI GF RTX 2060 SUP. X',
            'descrizioneBreve' => 'Scheda grafica ',
            'descrizioneEstesa' => 'Memoria dedicata: 8 GB DDR6 DirectX: 12 - HDMI - DisplayPort',
            'prezzo' => '579.00',
            'foto' => '/119320.jpg',
            'percentualeSconto' => '1',
            'inPromozione' => '0',
            'categoria' => '04',
            'sottocategoria' => '14'
        ]);
                      
                        DB::table('prodotto')->insert([
            'nome' => 'ASUS ROG-8G-EVO',
            'descrizioneBreve' => 'Scheda grafica',
            'descrizioneEstesa' => 'Scheda grafica - Memoria dedicata: 8 GB DDR6 HDMI - DisplayPort',
            'prezzo' => '530.00',
            'foto' => '/128409.jpg',
            'percentualeSconto' => '1',
            'inPromozione' => '0',
            'categoria' => '04',
            'sottocategoria' => '14'
        ]);
                        
                          DB::table('prodotto')->insert([
            'nome' => 'MSI RTX 2070 ',
            'descrizioneBreve' => 'Scheda Video',
            'descrizioneEstesa' => 'Memoria dedicata: 8 GB DDR6 DirectX: 12 - Tecnologia SLI HDMI - DisplayPort',
            'prezzo' => '800',
            'foto' => '/.jpg',
            'percentualeSconto' => '20',
            'inPromozione' => '1',
            'categoria' => '04',
            'sottocategoria' => '14'
        ]);
                          
                            DB::table('prodotto')->insert([
            'nome' => 'KINGSTON HX432C16FB3/8',
            'descrizioneBreve' => 'Memoria RAM',
            'descrizioneEstesa' => 'RAM DDR4 - Modulo: DIMM - Capacità: 8 GB Frequenza: 3200 MHz - Numero moduli: 1 Capacità singolo modulo: 8 GB - Numero pin: 288',
            'prezzo' => '55',
            'foto' => '/115479.jpg',
            'percentualeSconto' => '10',
            'inPromozione' => '1',
            'categoria' => '04',
            'sottocategoria' => '15'
        ]);
                            
                              DB::table('prodotto')->insert([
            'nome' => 'KINGSTON HX430C15FB3A/8',
            'descrizioneBreve' => 'Memoria RAM',
            'descrizioneEstesa' => 'RAM DDR4 - Modulo: DIMM - Capacità: 8 GB - Frequenza: 3000 MHz - Numero moduli: 1 - Capacità singolo modulo: 8 GB - Numero pin: 288',
            'prezzo' => '65.00',
            'foto' => '/115478.jpg',
            'percentualeSconto' => '1',
            'inPromozione' => '0',
            'categoria' => '04',
            'sottocategoria' => '15'
        ]);
                              
            DB::table('prodotto')->insert([
            'nome' => 'SanDisk Plus SSD 240 GB',
            'descrizioneBreve' => 'Hard Disk Interni',
            'descrizioneEstesa' => 'Solide State Drive Interno 2,5" - Capacità 240 GB Lettura sequenziale fino a 530 MB/s - Compatto Resistente ad urti e calore',
            'prezzo' => '51.00',
            'foto' => '/722300.jpg',
            'percentualeSconto' => '1',
            'inPromozione' => '0',
            'categoria' => '04',
            'sottocategoria' => '16'
        ]);
        DB::table('prodotto')->insert([
            'nome' => 'SAMSUNG SSD 500 GB',
            'descrizioneBreve' => 'Hard disk Interno SSD',
            'descrizioneEstesa' => 'Hard disk Interno SSD - Formato: 2,5" Capacità 500 GB - Alimentazione Interna',
            'prezzo' => '80.00',
            'foto' => '/753861.jpg',
            'percentualeSconto' => '10',
            'inPromozione' => '1',
            'categoria' => '04',
            'sottocategoria' => '16'
        ]);
                DB::table('prodotto')->insert([
            'nome' => 'WD RED 2TB ',
            'descrizioneBreve' => 'Hard Disk interno per NAS',
            'descrizioneEstesa' => 'Disco fisso per NAS SATA III 3.5" - Capacità: 2TB Velocità 5400 rpm - Buffer 64 MB Progettato per sistemi NAS a 1-8 vani Nuovo NASware 3.0 - 3D Active Balance Plus',
            'prezzo' => '119.99',
            'foto' => '/685359.jpg',
            'percentualeSconto' => '1',
            'inPromozione' => '0',
            'categoria' => '04',
            'sottocategoria' => '16'
        ]);
                                                              
    
                                                                                        
    }
}
