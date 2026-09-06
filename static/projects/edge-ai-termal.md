# Edge AI Tabanlı Termal Nesne Tespiti

> Savunma Sanayii Yapay Zekâ Kümelenmesi (SAYZEK) bursiyeri olarak yürütülen, uç cihazlarda gerçek zamanlı çalışan termal nesne tespiti projesi.

## Genel Bakış

Uç (edge) cihazlarda gerçek zamanlı nesne tespiti için Python tabanlı bir derin öğrenme projesi geliştirdim. Termal görüntülerde **car**, **person** ve **other_vehicle** sınıflarını tespit eden modeller eğittim ve farklı mimarileri karşılaştırmalı olarak değerlendirdim.

## Yaklaşım

- **Mimari karşılaştırması:** YOLOv8, YOLOv11, Faster R-CNN, U-Net ve RT-DETR mimarilerini aynı veri seti üzerinde eğitip karşılaştırdım.
- **Veri:** COCO ve YOLO veri formatlarıyla çalıştım; veri çoğaltma için Albumentations kullandım.
- **Sınıf dengesizliği:** Focal Loss ve Class-Balanced Loss ile az örnekli sınıfların başarımını iyileştirdim.
- **Değerlendirme:** Modelleri precision, recall, mAP50 ve mAP50-95 metrikleriyle ölçtüm.

## Uç Cihaz Optimizasyonu

- ONNX dönüşümü
- INT8 quantization
- Structured pruning
- **Jetson Orin** üzerinde FPS ve inference time benchmark testleri

## Teknolojiler

`Python` · `PyTorch` · `Ultralytics YOLO` · `RT-DETR` · `Faster R-CNN` · `ONNX Runtime` · `INT8 Quantization` · `Structured Pruning` · `CUDA` · `Jetson Orin`
