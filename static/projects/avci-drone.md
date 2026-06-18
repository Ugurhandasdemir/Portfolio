# Avcı Drone (Otonom FPV Takip)

> GNSS jamming senaryosunda sabit kanat hedef İHA'yı arayıp takip edebilen otonom FPV multikopter sistemi.

![Avcı Drone](/static/images/avci.png)

## Genel Bakış

GNSS jamming (sinyal karıştırma) koşullarında, sabit kanat bir hedef İHA'yı otonom olarak arayıp takip edebilen bir FPV multikopter sistemi geliştirdim. Sistem hem klasik görüntü işleme hem de derin öğrenme tabanlı takip yaklaşımlarını destekliyor.

## Görsel Kilit / Takip

- **Klasik görüntü işleme:** MOG2 (arka plan çıkarma), ORB (öznitelik eşleme), CSRT (takip).
- **Derin öğrenme:** YOLOv8 + ByteTrack ile tespit ve çoklu nesne takibi.
- **Backend karşılaştırması:** ONNX Runtime, OpenVINO ve YOLO + CSRT gibi farklı takip backend'lerini karşılaştırmalı çalıştırdım.

## Otonomi Mimarisi

ROS2, Gazebo, PX4 SITL ve MAVLink üzerinde:

- Hedef kestirimi (IMM filter ile)
- Adaptif arama davranışı
- Offboard kontrol akışları

## Teknolojiler

`Python` · `YOLOv8` · `ByteTrack` · `ONNX Runtime` · `OpenCV` · `ROS2` · `Gazebo` · `PX4 SITL` · `MAVLink` · `IMM Filter`
