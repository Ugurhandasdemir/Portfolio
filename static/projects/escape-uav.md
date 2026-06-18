# Gerçek Zamanlı İHA Kaçış ve Tehdit Kontrol Sistemi

> Savunma odaklı senaryolarda rakip İHA'dan otonom kaçış: gerçek zamanlı telemetri işleme, tehdit analizi ve MAVSDK offboard kontrol.

## Genel Bakış

Rakip İHA telemetri verilerini gerçek zamanlı işleyerek ana aracın konum, hız ve yönelim bilgileriyle birlikte tehdit analizi yapan bir kontrol sistemi geliştirdim. Kritik senaryolarda MAVSDK offboard komutlarıyla otonom kaçış manevraları uygulayan bir yapı kurdum.

## Yöntem

- **Tehdit seviyesi belirleme:** Mesafe (Haversine), yönelim uyumu ve bölgede kalma süresi gibi kriterlerle tehdit seviyesini anlık hesapladım.
- **Kaçış manevrası:** Kritik eşik aşılınca MAVSDK offboard kontrol arayüzü üzerinden otonom kaçış komutu ürettim.
- **Uçtan uca akış:** Gerçek zamanlı karar verme → telemetri işleme → otonom kontrol akışını tek bir pipeline içinde tasarladım.

## Teknolojiler

`Python` · `MAVSDK` · `PX4` · `Telemetry Processing` · `Offboard Control` · `Autonomous Control` · `Real-Time Decision Making`
