<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
// karena belum terhubung ke database maka perintah diatas bisa dihapus 

// {
//     use HasFactory;
//     ini juga bisa dihapus
// }

class Post
{
    private static $blog_posts = [
        [
            "title" => "judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "Dwi Putera Anugrah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam omnis maiores rerum repellat eum assumenda deserunt. Sit aliquid accusamus ducimus sapiente distinctio optio atque perferendis consequatur quaerat est veniam, numquam dolor ipsum alias cumque. Placeat explicabo cupiditate impedit harum eos, perferendis, facilis quidem commodi provident nesciunt, quasi obcaecati mollitia aliquam earum necessitatibus magnam? Iure animi saepe, ipsam praesentium deleniti velit minus enim facilis ex neque quos amet beatae, quod vero a necessitatibus obcaecati quaerat architecto similique possimus! Molestiae, placeat saepe, veniam laborum facilis fugiat architecto quis debitis quasi doloremque at nulla modi voluptatum, ipsa numquam illo a quaerat molestias illum! Explicabo dolore accusantium laboriosam nulla esse accusamus repellendus quia debitis illum voluptas, vero, dolorum aliquid sunt doloribus ipsa odio assumenda quos iusto est odit quidem, suscipit optio! Eum perferendis labore, ratione harum natus obcaecati. Consequuntur autem eligendi dolore modi libero impedit temporibus perspiciatis ad est tenetur maiores recusandae sapiente eos, sequi sunt ratione praesentium voluptatem asperiores, ipsum, suscipit necessitatibus numquam cum quae tempora. Dignissimos magnam facere quam dolore explicabo iure necessitatibus perspiciatis laborum quo aspernatur quasi dicta quod nesciunt earum aperiam impedit alias, qui tempora optio doloremque fugit cupiditate minima accusamus iste. At officia debitis doloremque assumenda eaque pariatur odit, sunt beatae sapiente eveniet magnam quae facere ducimus, adipisci animi veritatis perferendis fugit quia mollitia tenetur laudantium repellendus nemo. Quae molestiae amet harum optio? Laudantium reiciendis dolorum beatae magni, neque aliquid, eos inventore optio dolore aliquam cumque accusantium, culpa rerum earum illo quas id non adipisci minus ducimus corporis architecto numquam assumenda totam! Inventore ex nemo nobis modi, quae nulla assumenda, dolor veritatis pariatur eveniet quaerat rerum quisquam, voluptatibus ea adipisci facere fugiat aperiam? Necessitatibus enim velit porro dolorem at adipisci suscipit, labore corrupti, neque nobis nulla hic provident, nam dolore! Ea iure voluptas quo inventore dolorem quod similique mollitia veniam at est qui suscipit nemo ex, illo, quaerat asperiores animi. Dolores nesciunt recusandae consectetur facere velit error deleniti deserunt debitis, facilis omnis mollitia voluptatem totam, eaque vel? Enim, perferendis facilis facere accusamus illo commodi provident reiciendis possimus molestias dolores sequi blanditiis placeat ut, necessitatibus at deserunt quis inventore voluptates consectetur eos non suscipit est? Natus quia consequuntur officiis similique vel facere ea repellat eaque deleniti quae magni, esse soluta laudantium modi reiciendis accusamus unde quos, aperiam dicta voluptates nihil ad. Voluptatibus ipsum dolorem iste. Consequuntur facere repellat ullam, suscipit porro quidem sed quae at aliquid et odio incidunt consectetur sunt nobis delectus, vero voluptas, odit id architecto repudiandae perferendis quasi obcaecati eveniet. Rem doloribus ratione, tempora mollitia quos veritatis libero praesentium quam a architecto deserunt reprehenderit id iusto iste incidunt labore quibusdam omnis quia ipsam eum quo esse. Maxime exercitationem incidunt fugiat repudiandae laborum nobis natus, repellat suscipit dolorum maiores sit temporibus corporis est ut voluptatibus consectetur quo labore! Quos voluptas accusantium, dignissimos voluptatem neque ipsa aut alias maxime a repellendus aliquam sint consectetur excepturi. Nulla delectus, eligendi dolor ipsam excepturi nam cumque eum natus recusandae temporibus sapiente doloremque esse iusto magni assumenda aperiam atque ipsum corporis aliquam sequi?"
        ],
        [
            "title" => "judul post kedua",
            "slug" => "judul-post-kedua",
            "author" => "eko radityo",
            "body" => "doloremque at nulla modi voluptatum, ipsa numquam illo a quaerat molestias illum! Explicabo dolore accusantium laboriosam nulla esse accusamus repellendus quia debitis illum voluptas, vero, dolorum aliquid sunt doloribus ipsa odio assumenda quos iusto est odit quidem, suscipit optio! Eum perferendis labore, ratione harum natus obcaecati. Consequuntur autem eligendi dolore modi libero impedit temporibus perspiciatis ad est tenetur maiores recusandae sapiente eos, sequi sunt ratione praesentium voluptatem asperiores, ipsum, suscipit necessitatibus numquam cum quae tempora. Dignissimos magnam facere quam dolore explicabo iure necessitatibus perspiciatis laborum quo aspernatur quasi dicta quod nesciunt earum aperiam impedit alias, qui tempora optio doloremque fugit cupiditate minima accusamus iste. At officia debitis doloremque assumenda eaque pariatur odit, sunt beatae sapiente eveniet magnam quae facere ducimus, adipisci animi veritatis perferendis fugit quia mollitia tenetur laudantium repellendus nemo. Quae molestiae amet harum optio? Laudantium reiciendis dolorum beatae magni, neque aliquid, eos inventore optio dolore aliquam cumque accusantium, culpa rerum earum illo quas id non adipisci minus ducimus corporis architecto numquam assumenda totam! Inventore ex nemo nobis modi, quae nulla assumenda, dolor veritatis pariatur eveniet quaerat rerum quisquam, voluptatibus ea adipisci facere fugiat aperiam? Necessitatibus enim velit porro dolorem at adipisci suscipit, labore corrupti, neque nobis nulla hic provident, nam dolore! Ea iure voluptas quo inventore dolorem quod similique mollitia veniam at est qui suscipit nemo ex, illo, quaerat asperiores animi. Dolores nesciunt recusandae consectetur facere velit error deleniti deserunt debitis, facilis omnis mollitia voluptatem totam, eaque vel? Enim, perferendis facilis facere accusamus illo commodi provident reiciendis possimus molestias dolores sequi blanditiis placeat ut, necessitatibus at deserunt quis inventore voluptates consectetur eos non suscipit est? Natus quia consequuntur officiis similique vel facere ea repellat eaque deleniti quae magni, esse soluta laudantium modi reiciendis accusamus unde quos, aperiam dicta voluptates nihil ad. Voluptatibus ipsum dolorem iste. Consequuntur facere repellat ullam, suscipit porro quidem sed quae at aliquid et odio incidunt consectetur sunt nobis delectus, vero voluptas, odit id architecto repudiandae perferendis quasi obcaecati eveniet. Rem doloribus ratione, tempora mollitia quos veritatis libero praesentium quam a architecto deserunt reprehenderit id iusto iste incidunt labore quibusdam omnis quia ipsam eum quo esse. Maxime exercitationem incidunt fugiat repudiandae laborum nobis natus, repellat suscipit dolorum maiores sit temporibus corporis est ut voluptatibus consectetur quo labore! Quos voluptas accusantium, dignissimos voluptatem neque ipsa aut alias maxime a repellendus aliquam sint consectetur excepturi. Nulla delectus, eligendi dolor ipsam excepturi nam cumque eum natus recusandae temporibus sapiente doloremque esse iusto magni assumenda aperiam atque ipsum corporis aliquam sequi?"
        ]
    ];

    public static function all()
    {
        // return self::$blog_posts;
        return collect(self::$blog_posts);
        // ini supaya arraynya jadi collection
    }

    public static function find($slug)
    {
        // $posts = self::$blog_posts;
        // $post = [];
        // foreach($posts as $p) {
        //     if($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        // return $post;
        // ini belum pakai collection, jadi nyarinya manual

        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
        // karena udah jadi collection jadi bisa pakai function
    }
}
