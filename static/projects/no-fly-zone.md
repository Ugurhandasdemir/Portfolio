# No-Fly Zone İçeren İHA Rota Planlama

> Savaşan İHA 2025 yarışması kapsamında, yasaklı alanlardan kaçınan rota planlama algoritması.

![No-Fly Zone Rota Planlama](/static/images/b.jpeg)

## Genel Bakış

Yasaklı alanlardan (no-fly zone) kaçınan bir İHA rota planlama algoritması geliştirdim. QGroundControl `.plan` formatında ya da sunucudan alınan geofence verilerini (uçuş sınırı poligonu ve yasaklı dairesel bölgeler) işleyerek bu alanlara ek bir güvenlik tamponu (buffer) tanımladım.

## Yöntem

1. **Alan modelleme:** Shapely ile uçuş sınırını poligon, yasaklı bölgeleri ise dairesel engeller olarak modelledim ve yalnızca güvenli bölgede kalan noktaları seçtim.
2. **Yol haritası (PRM):** Probabilistic Roadmap yaklaşımıyla harita üzerinde rastgele örneklem noktaları ürettim; bu noktaları en yakın k komşuluk ilişkisiyle bir grafik yapısına bağladım.
3. **En kısa yol (A\*):** Başlangıç konumu ile seçilen hedef nokta arasında çakışmasız ve kısa bir güzergâh için A\* algoritmasıyla en uygun rotayı hesapladım.
4. **Yumuşatma:** Rotayı, uçuş kontrolünün daha kararlı olması için Chaikin tabanlı yumuşatma ile pürüzsüzleştirdim.

## Çıktı / Entegrasyon

- Rotayı İHA'nın kullanabileceği waypoint/misyon formatlarına dönüştürdüm: **QGC WPL 110 `.waypoints`** ve **QGroundControl `.plan`**.
- Görevi yer kontrol istasyonu üzerinden ve/veya MAVSDK ile simülasyona aktarılacak şekilde yapılandırdım.
- Doğrulamayı Gazebo tabanlı simülasyon testleri ve görselleştirme çıktıları ile gerçekleştirdim.

## Video

[YouTube'da izle ▶](https://www.youtube.com/watch?v=YYVqzlg4NcY)

## Teknolojiler

`Python` · `Shapely` · `PRM` · `A*` · `MAVSDK` · `spline/BSpline`
