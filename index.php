<?php
session_start();

<<<<<<< HEAD
if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
=======
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
>>>>>>> 624c8a8cea32ee661ee5878b3cfd5b16057e7428
    header("Location: login/login.php");
    exit();
}
?>

<<<<<<< HEAD

=======
>>>>>>> 624c8a8cea32ee661ee5878b3cfd5b16057e7428
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style & js/style.css">
    <link rel="stylesheet" href="style & js/bootstrap.min.js">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/6.0.0/normalize.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="portfolio.css">
    <title>project</title>
</head>
<body>

    <div><img class="back-ground-pc" src="back-ground/back-ground-pc.jpg" alt="#"></div>
    <div><img class="back-ground-phone" src="back-ground/back-ground-phone.jpg" alt="#"></div>
    <div class="links">
        <label ><a class="menu-f" href="#rijal">ملابس الرجال</a></label>
        <label ><a class="menu-f" href="#nissae">ملابس الحج النساء</a></label>
        <label ><a class="menu-f" href="#hotels">الفنادق</a></label>
        <label ><a class="menu-f" href="#info-l7aj">معلومات للحجاج</a> </label>
        <label ><a class="menu-f" href="#contact">للمزيد من الماعلومات</a></label>
        <label ><a  class="menu-f" href="login/login.php">تسجيل الخروج</a></label>

    </div>
    
    
    <div class="bb">
        <div class="ss">
            <ul class="zz">
                <h1 id="rijal">ملابس الحج الرجال</h1></ul>
            <ul class="zz">  
                <div class="ee"><img title="إحرام خاص بالرجال" class="imag" src="ملابس الحج الرجال/vetment1.webp" alt="aa"><p class="ani">إحرام خاص بالرجال<br>50$</p></div>
                <div class="ee"><img title="إحرام خاص بالأطفال" class="imag" src="ملابس الحج الرجال/evetment2.webp" alt="aa"><p class="ani">إحرام خاص بالأطفال<br>30$</p></div>
                <div class="ee"><img title="جزء علوي من الإحرام الخاص بالرجال" class="imag" src="ملابس الحج الرجال/vetment3.webp" alt="aa"><p class="ani">جزء علوي من الإحرام<br>30$</p></div>
                <div class="ee"><img title="تجميعة خاصة بالحجاج" class="imag" src="ملابس الحج الرجال/evetment4.webp" alt="aa"><p class="ani">تجميعة خاصة بالحجاج<br>1000$</p></div>
            </ul><br><bp>
            <ul class="zz">
                <div class="ee"><img title="سروال مريح مع ساعة رائعة وجوارب وحداء دو جودة خيالية" class="imag" src="ملابس الحج الرجال/srwal-wa3r.jpg" alt="aa"><p class="ani">سروال مع ساعة وجوارب وحداء<br>70$</p></div>
                <div class="ee"><img title="فوقية باردة و رائعة دات جودة جيدة" class="imag" src="ملابس الحج الرجال/fo9ya.webp" alt="aa"><p class="ani">فوقية باردة و دات جودة جيدة<br>50$</p></div>
                <div class="ee"><img title="غندورة مغربية من صنع اليد" class="imag" src="ملابس الحج الرجال/foukya2.jpg" alt="aa"><p class="ani">غندورة مغربية من صنع اليد<br>50$</p></div>
                <div class="ee"><img title="طاقية مغربية دات جودة ممتازة" class="imag" src="ملابس الحج الرجال/ta9ya.jpeg" alt="aa"><p class="ani">طاقية مغربية دات جودة ممتازة<br>10$</p></div>
            </ul><br><br>
    
            </div>   
        </div>

    </div>

    <div class="bb">
        <div class="ss">
            <ul class="zz">
                <h1 id="nissae">ملابس الحج النساء</h1></ul>
            <ul class="zz">  
                <div class="ee"><img title="عباية سوداء" class="imag" src="ملابس الحج النساء/1.webp" alt="aa"><p class="ani">عباية سوداء<br>50$</p></div>
                <div class="ee"><img title="عباية بيضاء" class="imag" src="ملابس الحج النساء/2.webp" alt="aa"><p class="ani">عباية بيضاء<br>30$</p></div>
                <div class="ee"><img title="عباية زرقاء" class="imag" src="ملابس الحج النساء/3.webp" alt="aa"><p class="ani">عباية زرقاء<br>30$</p></div>
                <div class="ee"><img title="عباية بنية" class="imag" src="ملابس الحج النساء/4.webp" alt="aa"><p class="ani">عباية بنية<br>1000$</p></div>
            </ul><br><bp>
            <ul class="zz">
                <div class="ee"><img title="سروال مريح مع ساعة رائعة وجوارب وحداء دو جودة خيالية" class="imag" src="ملابس الحج النساء/5.jpg" alt="aa"><p class="ani">سروال مع ساعة وجوارب وحداء<br>70$</p></div>
                <div class="ee"><img title="سجادة" class="imag" src="ملابس الحج النساء/8.jpeg" alt="aa"><p class="ani">سجادة<br>50$</p></div>
                <div class="ee"><img title="ملابس صلاة مكونة من قطعتين، فستان مسلم للنساء والبنات، مريح للاستخدام اليومي، قماش مطبوع مع زهور للحج والعمرة، يستخدم بالكامل في جميع المناسبات الحجاب والتنورة" class="imag" src="ملابس الحج النساء/6.jpg" alt="aa"><p class="ani">ملابس صلاة للنساء<br>50$</p></div>
                <div class="ee"><img title="تسبيح" class="imag" src="ملابس الحج النساء/9.png" alt="aa"><p class="ani">تسبيح<br>10$</p></div>
            </ul><br><br>
    
            </div>   
        </div>

    </div>
    


    <div id="hotels" class="bb">
        <div class="ss">
            <ul class="zz">
                <h1 >فنادق بالقرب من مكة</h1></ul>
            <ul class="zz">  
                <div class="ee" ><a class="lien" href="https://ar.tripadvisor.com/Hotel_Review-g293993-d318857-Reviews-InterContinental_Dar_al_Tawhid_Makkah_an_IHG_Hotel-Mecca_Makkah_Province.html" target="_blank"><img  title="فندق دار التوحيد إنتركونتينتال" class="imag" src="hotels/dar-taw7id.jpg" alt="aa"><p class="ani">فندق دار التوحيد إنتركونتينتال<br>3,764 MAD</p></a></div>
                <div class="ee"><a class="lien" href="https://www.booking.com/hotel/sa/makkah-hotel.fr.html" target="_blank"><img title="Makkah Hotel" class="imag" src="hotels/hotel-makkah.jpg" alt="aa"><p class="ani">Makkah Hotel<br>2,694 MAD</p></a></div>
                <div class="ee"><a class="lien"  href="https://www.addresshotels.com/en/offers/ramadan-early-bird-offer-15-stay-iftar/?hotel=address-jabal-omar-makkah&utm_source=google&utm_medium=cpc&utm_campaign=assembly_google_search_address_makkah_en_brand_exact&gad_source=1&gclid=Cj0KCQjwwMqvBhCtARIsAIXsZpY21js3xYWoNn27KBxdAJH1R0oMNHr_lOwLruuV5DHe7GrvdnCJ5FAaAnihEALw_wcB" target="_blank"><img title="Address Jabal Omar Makkah" class="imag" src="hotels/jabal-omar.jpg" alt="aa"><p class="ani">Address Jabal Omar<br>2,155 MAD</p></a></div>
                <div class="ee"><a class="lien" href="https://www.booking.com/city/sa/mecca.ar.html?aid=325250;label=mecca-KyypB30*9OyE8Q9acy0jRwS393284191420:pl:ta:p1:p2:ac:ap:neg:fi:tikwd-26081888956:lp1009974:li:dec:dm:ppccp=UmFuZG9tSVYkc2RlIyh9YfNeh-lbHkPZBh1Z24Ekd1M;ws=&gad_source=1&gclid=Cj0KCQjwwMqvBhCtARIsAIXsZpaHjTCqoHddYGuOslpDowpqoTFL8PmqS3XfBE0taSnBnv4Txxz2CisaAjgnEALw_wcB" target="_blank"><img title="فندق قصر مكة رافلز" class="imag" src="hotels/qasser-makkah.jpg" alt="aa"><p class="ani">فندق قصر مكة رافلز<br>4,522 MAD</p></a></div>
            </ul><br><br>
            <ul class="zz">
                <div class="ee"><a class="lien" href="https://www.ghufran-makkah.com/ar" target="_blank"><img title="فندق صفوة الغفران مكة" class="imag" src="hotels/safwa.jpg" alt="aa"><p class="ani">فندق صفوة الغفران مكة<br>2,657 MAD</p></a></div>
                <div class="ee"><a class="lien" href="https://mira-ajyad-mecca.albooked.com/" target="_blank" ><img title="جميرا مكة" class="imag" src="hotels/jmira.jpg" alt="aa"><p class="ani">جميرا مكة<br>2,880 MAD</p></a></div>
                <div class="ee"><a class="lien" href="https://www.booking.com/hotel/sa/swissotel-makkah.ar.html" target="_blank" ><img title="سويس اوتيل" class="imag" src="hotels/swiss.jpg" alt="aa"><p class="ani">سويس اوتيل<br>5000 MAD</p></a></div>
                <div class="ee"><a class="lien" href="https://www.booking.com/hotel/ma/hyatt-regency-ccsablanca.ar.html" target="_blank"><img  title="حياة ريجنسي" class="imag" src="hotels/rinjissi.jpg" alt="aa"><p class="ani">حياة ريجنسي<br>1000 MAD</p></a></div>
            </ul><br><br>
    
            </div>   
        </div>

    <div id="info-l7aj" class="maalomat">
        <h1>معلومات للحجاج</h1>
        <li>مناسك الحج</li>
        <p>يبدأ الحاج بالإحرام، ثم يقصد الكعبة؛ للطواف حولها، ثم السعي بين الصفا والمروة، ويتحلل الحاج إن كان متمتعاً، أما إن كان قارناً، أو مُفرداً؛ فلا يتحلل، ثم يكون التوجه إلى مِنى في اليوم الثامن من ذي الحجة، ثم الوقوف في عرفة في اليوم التاسع، ثم التوجه إلى مزدلفة بعد غروب شمس اليوم التاسع، وفي اليوم العاشر يكون رمي جمرة العقبة، ونحر الهدي، وحلق الشعر أو التقصير، والطواف، ثم الرجوع إلى مِنى؛ والمبيت فيها ليالي التشريق، وتُرمى الجمرات الثلاث؛ الصغرى، والوسطى، والعقبة، في كل يومٍ من أيام التشريق الثلاث، ويُشرع للمتعجل المبيت ليلتين فقط، ويختم الحاج أعمال الحج بأداء طواف الوداع.</p>
        <li>أركان الحج</li>
        <p>1- الإحرام وهو نية الدخول في النسك لقول الرسول- صلى الله عليه وسلَّم- : ( إنما الأعمال بالنيات وإنما لكل امرىء ما نوى ) ، وله زمان محدد وهي أشهر الحج التي ورد ذكرها في قوله تعالى: { الحج أشهر معلومات فمن فرض فيهن الحج فلا رفث ولا فسوق ولا جدال في الحج } (البقرة: 197) ، ومكان محدد وهي المواقيت التي يُحْرِمُ الحاج منها .


            <br>2- الوقوف بعرفة لقول النبي - صلى الله عليه وسلم- : ( الحج عرفة ، من جاء ليلة جَمْع قبل طلوع الفجر فقد أدرك )  رواه أبوداود وغيره، والمقصود بجَمْع: المزدلفة، ويبتدئ وقته من زوال شمس يوم التاسع من ذي الحجة ويمتد إلى طلوع فجر يوم النحر ، وقيل يبتدىء من طلوع فجر اليوم التاسع .
            
            
            فمن حصل له في هذا الوقت وقوف بعرفة ولو لحظة واحدة فقد أدرك الوقوف، لحديث عروة بن مضرس رضي الله عنه قال : أتيت رسول الله- صلى الله عليه وسلم- المزدلفة حين خرج إلى الصلاة ، فقلت : يا رسول الله إني جئت من جبل طيئ ، أكللت راحلتي ، وأتعبت نفسي ، والله ما تركت من حبل إلا وقفت عليه ، فهل لي من حج ؟ فقال رسول الله - صلى الله عليه وسلم- : ( من شهد صلاتنا هذه ، ووقف معنا حتى ندفع ، وقد وقف قبل ذلك بعرفة ليلاً أو نهاراً فقد تم حجه ، وقضى تفثه ) رواه أبو داود وغيره .
            
            
            وفي أي مكان وقف من عرفة أجزأه لقول النبي صلى الله عليه وسلّم: ( وقفت ههنا وعرفة كلها موقف ) أخرجه مسلم .
            
            
            <br>3- طواف الإفاضة لقوله سبحانه :{ثم ليقضوا تفثهم وليوفوا نذورهم وليطوفوا بالبيت العتيق } (الحج: 29) ولأن النبي - صلى الله عليه وسلم- قال - حين أُخبِرَ بأن صفية رضي الله عنها حاضت -  ( أحابستنا هي ؟، فقالوا : يا رسول الله إنها قد أفاضت وطافت بالبيت ثم حاضت بعد الإفاضة ، قال : فلتنفر إذاً ) متفق عليه ، مما يدل على أن هذا الطواف لا بد منه ، وأنه حابس لمن لم يأت به ، ووقته بعد الوقوف بعرفة ومزدلفة ولا آخر لوقته عند الجمهور بل يبقى عليه ما دام حياً ، وإنما وقع الخلاف في وجوب الدم على من أخره عن أيام التشريق أو شهر ذي الحجة .
            
            
            <br>4- السعي بين الصفا والمروة لقوله- صلى الله عليه وسلم- : ( اسعوا فإن الله كتب عليكم السعي ) رواه أحمد ولقول عائشة رضي الله عنها : " طاف رسول الله - صلى الله عليه وسلم- وطاف المسلمون- تعني بين الصفا والمروة - فكانت سنة ، فلعمري ما أتم الله حج من لم يطف بين الصفا والمروة "رواه مسلم .
            
            
            وهذا السعي هو سعي الحج ، ووقته بالنسبة للمتمتع بعد الوقوف بعرفة ومزدلفة وطواف الإفاضة ، وأما القارن والمفرد فلهما السعي بعد طواف القدوم .
            
            
            فهذه الأركان الأربعة : الإحرام ، والوقوف بعرفة ، وطواف الإفاضة ، والسعي بين الصفا والمروة لا يصح الحج بدونها ، ولا يجبر ترك شيء منها بدم ولا بغيره ، بل لا بد من فعله ، كما أن الترتيب في فعل هذه الأركان شرط لا بد منه لصحتها ؛ فيُشترط تقديم الإحرام عليها جميعاً ، وتقديم وقوف عرفة على طواف الإفاضة ، إضافة إلى الإتيان بالسعي بعد طواف صحيح عند جمهور أهل العلم .</p>

    </div>

    <div id="contact" class="bb">
        <div class="ss">
            <ul class="zz">
                <h1 >للمزيد من المعلومات</h1></ul>
            <ul class="zz">  
                <form id="contact-form">
                    <div class="form-group">
                        <label for="name">الإسم:</label>
                        <input type="text" class="form-control" id="name" placeholder="أدخل إسمك">
                    </div>
                    <div class="form-group">
                        <label for="email">البريد الإلكتروني:</label>
                        <input type="email" class="form-control" id="email" placeholder="أدخل بريدك الإلكتروني">
                    </div>
                    <div class="form-group">
                        <label for="message">رسالة:</label>
                        <textarea class="form-control" id="message" rows="3" placeholder="أدخل رسالتك"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">إرسال</button>
                </form>
            </ul><br><br>
            <div id="footer-above">
                <div class="tawassol">
                    <h3>Find me on</h3>
                    <ul id="contact">
                        <li><a class="button social" href="https://www.facebook.com/abdlwahd.hossni?mibextid=ZbWKwL" target="_blank"><i class="fa fa-fw fa-facebook"></i></a></li>
                        <li><a class="button social" href="https://www.instagram.com/hossni.abdo?igsh=dTluM29hbmplNWJy" target="_blank"><i class="fa fa-fw fa-instagram"></i></a></li>
                        <li><a class="button social" href="https://wa.me/qr/PM7AKUW4KOQXG1" target="_blank"><i class="fa fa-fw fa-whatsapp"></i></a></li>
                        <li><a class="button social" href="https://t.me/+212696791587" target="_blank"><i class="fa fa-telegram"></i></a></li>
                    </ul>
                </div>
            </div>
    </div>
    
    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('nav a').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
        document.querySelectorAll('nav a').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
                });
            });
        });


        // Form validation
        document.getElementById('contact-form').addEventListener('submit', function (e) {
            e.preventDefault();

            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;

            if (!name || !email || !message) {
                alert('يرجى ملء جميع الحقول.');
                return;
            }

            if (!validateEmail(email)) {
                alert('يرجى إدخال بريد إلكتروني صالح.');
                return;
            }

            alert('تم إرسال رسالتك بنجاح.');
            document.getElementById('contact-form').reset();
        });

        // Email validation function
        function validateEmail(email) {
            const re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            return re.test(email);
        }
    </script>
</body>
</html>
