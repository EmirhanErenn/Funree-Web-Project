var sorular = [
    {
        soru:"Soru 1 : Türkiyeye Yazılımı Getiren 5 Kişiden İlki Kimdir?",
        secenekler:["Ryan LOFT","İsmail DÜŞMEZ","Murat GÜNEY","Özer KESTANE"],
        dogrucevap:"İsmail DÜŞMEZ"
    },
    {
        soru:"Soru 2 : C# OOP Aşağıdaki Nesnelerden Hangisini Barındırmaz?",
        secenekler:["TextBox","EditText","Button","ListBox"],
        dogrucevap:"EditText"
    },
    {
        soru:"Soru 3 : Mobil Programlama İçin Hangisi Yanlıştır?",
        secenekler:["Kotlin-Andorid","Swift-IOS","Flutter-IOS,Android...","Hiçbiri"],
        dogrucevap:"Hiçbiri"
    },
    {
        soru:"Soru 4 : Aşağıdakilerden Hangisi SQL Komutları İçin Doğrudur?",
        secenekler:["Insert Int ogrenci values(ad,soyad,not)","Drop Table ogrenci","Select*Fron ogrenci","Alter Table ogrenci to(...)"],
        dogrucevap:"Drop Table ogrenci"
    },
    {
        soru:"Soru 5 : Aşağıdaki For Döngülerinden Hangisi Çalışmaz?",
        secenekler:["for(i = 0 ;i < ogrenci.lenght;i++)","for(i = 0;i > ogrenciler.length;i --)","for(i = 1;i < 10; i++)","for(i = 0;i < x;i++)"],
        dogrucevap:"for(i = 0;i < ogrenci.lenght;i++)"
    }
];

var suankiSoru = 0;
var toplamSorular = sorular.length;
function soruyuGoster(){
    var icerik = document.getElementById("container");
    var sorubilgi = sorular[suankiSoru];
    icerik.innerHTML = `<div class="question">${sorubilgi.soru}</div>`;
    var seceneklerHTML = "";
    sorubilgi.secenekler.forEach(secenek => {
        seceneklerHTML += `<div class="option"><input type="radio" name="cevap${suankiSoru + 1}" value="${secenek}"> ${secenek}</div>`;
    });
    icerik.innerHTML += `<div class="options">${seceneklerHTML}</div>`;
}

function cevabiKontrolEt(){
    var secilenCevap = document.querySelector(`input[name="cevap${suankiSoru + 1}"]:checked`);
    var sonucContainer = document.getElementById("sonuc");
    if (secilenCevap) {
        var cevap = secilenCevap.value;
        if (cevap == sorular[suankiSoru].dogrucevap) {
            sonucContainer.textContent = "Doğru cevap!";
        } else {
            sonucContainer.textContent = `Yanlış cevap! Doğru cevap: ${sorular[suankiSoru].dogrucevap}`;
        }
        sonucContainer.style.display = "block";
        if (suankiSoru < toplamSorular - 1) {
            suankiSoru++;
            setTimeout(soruyuGoster, 1000);
        } else {
            setTimeout(function() {
                sonucContainer.textContent = `Oyun bitti! Toplam doğru cevaplar: ${toplamSorular}`;
            }, 1000);
        }
    } else {
        alert("Lütfen bir cevap seçin.");
    }
}
soruyuGoster();
