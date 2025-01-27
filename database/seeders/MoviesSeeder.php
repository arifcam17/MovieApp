<?php

namespace Database\Seeders;

use App\Models\Movie;
use App\Models\Category;
use Illuminate\Database\Seeder;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories = Category::pluck('id')->toArray(); // Kategorilerin ID'lerini al
        // Film listesi
        $movies = [
            [
                'title' => 'ESARETİN BEDELİ',
                'vote_average' => 8.8,
                'youtube_link' => 'https://www.youtube.com/watch?v=PLl99DlL6b4',
                'description' => 'Kadın cinayetinden hüküm giymiş bir bankacı, çeyrek asırdan uzun bir süredir katılaşmış bir mahkûmla dostluk kurarken, masumiyetini korur ve basit bir şefkatle umutlu kalmaya çalışır.',
                'image' => 'images/esaretinbedeli.jpg',
                'video' => 'videos/esaretinbedeli.mp4',
                'poster' => 'posters/esaretinbedeli0.jpg',


            ],
            [
                'title' => 'BATMAN',
                'vote_average' => 9.0,
                'youtube_link' => 'https://www.youtube.com/watch?v=NLOp_6uPccQ',
                'description' => 'Sadist bir seri katil Gothamdaki önemli siyasi figürleri öldürmeye başladığında, Batman şehrin gizli yolsuzluklarını araştırmak ve ailesinin bu işteki rolünü sorgulamak zorunda kalır.',
                'image' => 'images/batman.jpg',
                'video' => 'videos/batman.mp4',
                'poster' => 'posters/batman0.jpg',

            ],
            [
                'title' => 'SCHİNDLER İN LİSTESİ',
                'vote_average' => 9.0,
                'youtube_link' => 'https://www.youtube.com/watch?v=mxphAlJID9U',
                'description' => 'II. Dünya Savaşı sırasında Alman işgali altındaki Polonya da yaşayan sanayici Oskar Schindler, Naziler tarafından Yahudi işçilerin zulmüne tanık olduktan sonra, giderek Yahudi işçileri için endişelenmeye başlar.',
                'image' => 'images/schindlers.jpg',
                'video' => 'videos/schindlers.mp4',
                'poster' => 'posters/schindlers0.jpg',

            ],
            [
                'title' => 'YEŞİL YOL',
                'vote_average' => 9.0,
                'youtube_link' => 'https://www.youtube.com/watch?v=Ki4haFrqSrw',
                'description' => '1930larda Louisianadaki bir hapishanenin baş ölüm cezası gardiyanı olan Paul Edgecomb, iki kızı öldürmekle suçlanan siyah bir adam olan John Coffey adlı bir mahkumla tanışır. Johnun özel bir yeteneği olduğunu keşfettiğinde hayatı kökten değişir.',
                'image' => 'images/greenmile.jpg',
                'video' => 'videos/greenmile.mp4',
                'poster' => 'posters/greenmile0.jpg',

            ],
            [
                'title' => 'DÖVÜŞ KULUBÜ',
                'vote_average' => 9.0,
                'youtube_link' => 'https://www.youtube.com/watch?v=dfeUzm6KF4g',
                'description' => 'Uykusuz bir ofis çalışanı ile umursamaz bir sabun üreticisinin kurduğu yeraltı dövüş kulübü, daha sonra çok daha fazlasına dönüşür.',
                'image' => 'images/fightclub.jpg',
                'video' => 'videos/fightclub.mp4',
                'poster' => 'posters/fightclub0.jpg',

            ],
            [
                'title' => 'BAŞLANGIÇ',
                'vote_average' => 9.0,
                'youtube_link' => 'https://www.youtube.com/watch?v=BlrQvE-OhD4',
                'description' => 'Rüya paylaşım teknolojisini kullanarak şirket sırlarını çalan bir hırsıza, bir CEOnun zihnine bir fikir yerleştirme görevi verilir; ancak bu hırsızın trajik geçmişi, projeyi ve ekibini felakete sürükleyebilir.',
                'image' => 'images/inception.jpg',
                'video' => 'videos/inception.mp4',
                'poster' => 'posters/inception0.jpg',

            ],
            [
                'title' => 'YÜZÜKLERİN EFENDİSİ',
                'vote_average' => 9.3,
                'youtube_link' => 'https://www.youtube.com/watch?v=_nZdmwHrcnw',
                'description' => 'Frodo ve Sam, hilekar Gollumun yardımıyla Mordora yaklaşırken, bölünmüş topluluk, Sauronun yeni müttefiki Saruman ve Isengard ordularına karşı bir duruş sergiler.',
                'image' => 'images/yüzüklerinefendisi.jpg',
                'video' => 'videos/yüzüklerinefendisi.mp4',
                'poster' => 'posters/yüzüklerinefendisi0.jpg',

            ],
            [
                'title' => 'JOKER',
                'vote_average' => 7.8,
                'youtube_link' => 'https://www.youtube.com/watch?v=_OKAwz2MsJs',
                'description' => 'Frodo ve Sam, hilekar Gollumun yardımıyla Mordora yaklaşırken, bölünmüş topluluk, Sauronun yeni müttefiki Saruman ve Isengard ordularına karşı bir duruş sergiler.',
                'image' => 'images/joker.jpg',
                'video' => 'videos/joker.mp4',
                'poster' => 'posters/joker0.jpg',

            ],
            [
                'title' => 'SEVGİNİN GÜCÜ',
                'vote_average' => 7.9,
                'youtube_link' => 'https://www.youtube.com/watch?v=rNw0D7Hh0DY',
                'description' => '12 yaşındaki Mathilda, ailesi öldürüldükten sonra profesyonel bir suikastçı olan Léon tarafından isteksizce kabul edilir. Onun himayesine girdikçe ve suikastçının mesleğini öğrendikçe sıra dışı bir ilişki oluşur.',
                'image' => 'images/leon.jpg',
                'video' => 'videos/leon.mp4',
                'poster' => 'posters/leon0.jpg',

            ],
            [
                'title' => 'YARATIK',
                'vote_average' => 4.8,
                'youtube_link' => 'https://www.youtube.com/watch?v=sVwH0hIvV5k',
                'description' => 'Terk edilmiş bir uzay istasyonunun derin uçlarını karıştıran bir grup genç uzay kolonicisi, evrendeki en korkunç yaşam formuyla yüz yüze gelir.',
                'image' => 'images/yaratık.jpg',
                'video' => 'videos/yaratık.mp4',
                'poster' => 'posters/yaratık0.jpg',

            ],
            [
                'title' => 'SİL BAŞTAN',
                'vote_average' => 7.8,
                'youtube_link' => 'https://www.youtube.com/watch?v=c2e-bj6qy8Y',
                'description' => 'İlişkileri kötüye gitmeye başlayınca, çift birbirlerinin hafızalarından sonsuza dek silinmesi için tıbbi bir operasyona başvurur.',
                'image' => 'images/silbastan.jpg',
                'video' => 'videos/silbastan.mp4',
                'poster' => 'posters/silbastan0.jpg',

            ],
            [
                'title' => 'AŞK',
                'vote_average' => 6.8,
                'youtube_link' => 'https://www.youtube.com/watch?v=dJTU48_yghs',
                'description' => 'Yakın gelecekte, yalnız bir yazar, her ihtiyacını karşılamak üzere tasarlanmış bir işletim sistemiyle alışılmadık bir ilişki geliştirir.',
                'image' => 'images/her.jpg',
                'video' => 'videos/her.mp4',
                'poster' => 'posters/her0.jpg',

            ],
            [
                'title' => 'NOT DEFTERİ',
                'vote_average' => 7.8,
                'youtube_link' => 'https://www.youtube.com/watch?v=BjJcYdEOI0k',
                'description' => 'Yaşlı bir adam, bunama hastası bir kadına, aralarındaki sosyal sınıf farkı yüzünden aşkları tehdit altında olan iki genç aşığın hikayesini okur.',
                'image' => 'images/notebook.jpg',
                'video' => 'videos/notebook.mp4',
                'poster' => 'posters/notebook0.jpg',

            ],
            [
                'title' => 'AMELİE',
                'vote_average' => 6.8,
                'youtube_link' => 'https://www.youtube.com/watch?v=Py7cDXQae2U',
                'description' => 'Hayal dünyasında sıkışmış olmasına rağmen, genç garson Amelie insanların mutluluğu bulmasına yardımcı olmaya karar verir. Neşe yayma arayışı onu gerçek aşkı bulduğu bir yolculuğa çıkarır.',
                'image' => 'images/amelie.jpg',
                'video' => 'videos/amelie.mp4',
                'poster' => 'posters/amelie0.jpg',

            ],
            [
                'title' => 'HAYAT GÜZELDİR',
                'vote_average' => 9.5,
                'youtube_link' => 'https://www.youtube.com/watch?v=L1XE0lqHkvQ',
                'description' => 'Açık fikirli bir Yahudi garson ve oğlu Holokostun kurbanı olunca, oğlunu kamptaki tehlikelerden korumak için irade, mizah ve hayal gücünün mükemmel bir karışımını kullanır.',
                'image' => 'images/hayat.jpg',
                'video' => 'videos/hayat.mp4',
                'poster' => 'posters/hayat0.jpg',

            ],
            [
                'title' => 'BABA',
                'vote_average' => 9.9,
                'youtube_link' => 'https://www.youtube.com/watch?v=UaVTIH8mujA',
                'description' => 'Organize suç hanedanının yaşlanan patriği, gizli imparatorluğunun kontrolünü isteksiz oğluna devreder.',
                'image' => 'images/baba.jpg',
                'video' => 'videos/baba.mp4',
                'poster' => 'posters/baba0.jpg',

            ],
            [
                'title' => 'AVATAR',
                'vote_average' => 9.1,
                'youtube_link' => 'https://www.youtube.com/watch?v=ti-b0hGdggQ',
                'description' => 'Ay Pandoraya benzersiz bir görevle gönderilen felçli bir Deniz Piyade, emirlerini yerine getirmek ve evi olarak gördüğü dünyayı korumak arasında kalır.',
                'image' => 'images/avatar.jpg',
                'video' => 'videos/avatar.mp4',
                'poster' => 'posters/avatar0.jpg',

            ],
            [
                'title' => 'STAR WARS',
                'vote_average' => 8.1,
                'youtube_link' => 'https://www.youtube.com/watch?v=sGbxmsDFVnE',
                'description' => 'Hayatta kalan Direniş, bir kez daha Birinci Düzenle karşı karşıya gelir.',
                'image' => 'images/starwars.jpg',
                'video' => 'videos/starwars.mp4',
                'poster' => 'posters/starwars0.jpg',

            ],
            [
                'title' => 'TESTERE',
                'vote_average' => 8.7,
                'youtube_link' => 'https://www.youtube.com/watch?v=zaANSeQ3La4',
                'description' => 'İki adam uyandıklarında kendilerini bir cesedin zıt taraflarında bulurlar, her biri diğerini öldürmek için belirli talimatlara sahiptir, aksi takdirde sonuçlarla yüzleşeceklerdir. Bu ikisi Jigsaw Killerın son kurbanlarıdır.',
                'image' => 'images/testere.jpg',
                'video' => 'videos/testere.mp4',
                'poster' => 'posters/testere0.jpg',

            ],

        ];


        foreach ($movies as $movieData) {
            // Filmi oluştur
            $movie = Movie::create($movieData);

            // Filme rastgele kategoriler ata
            $randomCategories = array_rand($categories, 7);
            $movie->categories()->attach(array_intersect_key($categories, array_flip((array) $randomCategories)));
        }
    }
}
