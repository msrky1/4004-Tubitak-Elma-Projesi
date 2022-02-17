@extends('layouts.app')


@section('content')
<section class="hero-section set-bg" data-setbg="{{asset('assets')}}/img/bg2.jpg">
    <div class="container">
      <div class="hero-text text-white">

      r. </h4>



        <h2> Tohumdan Soframa Elmanın Serüveni</h2>
        <h4 style="background-color:red;">Projemiz Başarıyla Gerçekleşmiştir. Projede Emeği Geçen Herkese Teşekkür Ederiz. </h4>
        <p >Doğa eğitimi çalışmaları iki ana başlık altında gerçekleştirilecektir. Birinci aşamada çocukların elmanın tohumdan fidana evrilmesi daha sonra fidan dikimiyle birlikte ağaç formunun çapalanması, sulanması, gübrelenmesi, budanması ve hasadı gibi yetiştiriciliğine ve çeşitlerini öğrenmelerine yönelik etkinlikler gerçekleştirilecektir. İkinci aşamada elmanın geçmişten günümüze gelen geleneksel ve sonrasında modern üretim yöntem ve teknikleriyle kullanım alanlarına yönelik etkinlikler gerçekleştirilecektir. Etkinlikler birinci aşamada Karaman ilinde farklı lokasyonlardaki elma bahçelerinde ikinci aşamada ise Üniversitemiz Teknik Bilimler Meslek Yüksekokulu Bitkisel ve Hayvansal Üretim Laboratuvarı ve Mühendislik Fakültesi Gıda Mühendisliği Bölümü Laboratuvarları ile elma suyu üretim fabrikasında gerçekleştirilecektir. Proje sonuçlarının değerlendirilmesi için çocukların izlenimlerinin ve kazanımlarının belirlenmesine yönelik ölçme değerlendirme etkinlikleri gerçekleştirilecektir.

            Proje ile katılımcı öğrencilerin yörede önemli bir sektör olan Elmacılık konusunda farkındalıklarının artırılması ve akademik eğitimlerinin erken evresinde meslek tercihleri konusunda yörenin temel dinamiklerinden olan tarıma yönelimleri sağlanmış olacaktır. Çocuklara genel manada doğaya saygı ve sahip çıkma bilinci kazandırılması sağlanmış olacaktır.
            </p>
      </div>
      <div class="row">
        <div class="col-lg-10 offset-lg-1">



         <a href="{{asset('assets')}}/img/secilenogrenciler.pdf" >  <button class="site-btn center">Sonuçları Görüntüleyin</button> </a>
         <a href="{{route('galeri')}}" >  <button class="site-btn center">Projemizden Görseller İçin Tıklayınız!</button> </a>

        </div>
      </div>
    </div>
  </section>





@endsection
