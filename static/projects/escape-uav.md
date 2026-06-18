# Escape UAV

> Takip eden rakip İHA'dan kaçış için güvenli koridor izleme ve kaçış manevrası karar desteği.

## Genel Bakış

Takip eden (rakip) bir İHA'dan kaçış senaryosu için, rakip İHA'nın konumunu her adımda güvenli koridor ihlali açısından izleyen bir sistem geliştirdim.

## Yöntem

- İki İHA arasındaki **mesafeyi** Haversine formülüyle hesapladım.
- **Yönelimleri** (heading) takip ederek tehlikeli yakınlaşmaları tespit ettim.
- Tehlikeli yakınlaşmalarda uyarı üretip kaçış manevrası kararını destekledim.
- Sonuçları rota/buffer görselleştirmesiyle doğruladım.

## Teknolojiler

`Python` · `NumPy` · `Shapely` · `Matplotlib`
