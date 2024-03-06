<?php
/**
 * @return array
 */
function getSillies()
{
    return [
        [
            "id" => 1,
            "name" => "Unico Uniuni",
            "date-of-birth" => "27 March, 2020",
            "image" => "img/Uni.png",
        ],
        [
            "id" => 2,
            "name" => "Luna \"Crunchy cat\"",
            "date-of-birth" => "30 may, 2019",
            "image" => "img/Luna.png",
        ],
        [
            "id" => 3,
            "name" => "Milly (A.K.A. Blehh cat)",
            "date-of-birth" => "Unknown",
            "image" => "img/Milly.png",
        ],
        [
            "id" => 4,
            "name" => "Radio cat",
            "date-of-birth" => "7 August, 2000",
            "image" => "img/MeowSynth.jpg",
        ],
        [
            "id" => 5,
            "name" => "Wawa cat",
            "date-of-birth" => "Unknown",
            "image" => "img/WawaCat.png",
        ],
        [
            "id" => 6,
            "name" => "Thurston Waffles",
            "date-of-birth" => "9 June, 2007",
            "image" => "img/Thurston.jpg",
        ],
        [
            "id" => 7,
            "name" => "The eeper",
            "date-of-birth" => "Unknown",
            "image" => "img/eepy.png",
        ],
        [
            "id" => 8,
            "name" => "Scaredy cat",
            "date-of-birth" => "31 October, 2020",
            "image" => "img/scaredycat.jpg",
        ],
        [
            "id" => 9,
            "name" => "Mr. Fresh",
            "date-of-birth" => "Unknown",
            "image" => "img/MrFresh.png",
        ],
        [
            "id" => 10,
            "name" => "Halo",
            "date-of-birth" => "Unknown",
            "image" => "img/halo.png",
        ]
    ];
}

/**
// * @param $id
 * @return mixed
 */
function getSillyDetails($id)
{
    $tags = [
        1 => [
            "description" => "Uni is a silly little cat goober who holds an unstable amount of power. He has stubby legs and a black face except for his chin, giving him a :3 appearance. He looks a lot like Maxwell but has enough differences to be told apart. He loves boxes, and constantly fuses into them.",
            "tags" => ['Male', 'minuet', ':3', 'maxwell', 'uni', 'tuxedo cat', '"the strongest"']
        ],
        2 => [
            "description" => "Luna also known as the cruncher is a remarkable cat who faces the challenge of pica, an eating disorder where she consumes non-edible objects. She also really likes eating uranium",
            "tags" => ['Female', 'crunchy', 'plink', 'domestic short-hair']
        ],
        3 => [
            "description" => "Milly, also known as Bleh Cat is a very famous silly kitty known for sticking her tongue out and going \"bleeeeeehhhhhhh :P\". She is commonly called \"the face of sillyness\". Her most common sighting location is on the table tennis table of her owner. She can often be seen on TikTok slideshows, profile pictures, and videos. Also known as The Sillyest Kitty.",
            "tags" => ['Female', 'Blehhh', 'Calico', ':P', 'THE SILLIEST KITTY']
        ],
        4 => [
            "description" => "Radio Cat was born on a family farm and always loved music. He eventually moved out and became an aspiring singer. He contacted various radio stations and eventually made it onto a few different stations in which he became incredibly popular. He even managed to earn his own station called \"Meowsynth\" which is an incredibly popular radio station. He is last seen on \"International Broadcast\" in which he commentates on the silly war even fighting in it himself by helping hurt cats recover during battle. He still sings but lives a peaceful life in a small peaceful neighborhood.",
            "tags" => ['Male', 'tabby', 'meowsynth', 'BEST RADIO HOST']
        ],
        5 => [
            "description" => "Wawa cat or \"The misery cat\" is a silly cat form japan named \"Kotaro\" It is a popular Latin America meme with the caption \"*No hace nada*\" which is traduced to \"Does nothing\" or \"Is doing nothing\" it has many images from it's owner's Instagram account (@nikoandkota.toro). Many of it's history is unknown and specifications. A variety of images can be found.",
            "tags" => ['Male','wawa', 'racist cat', 'misery cat']
        ],
        6 => [
            "description" => "Thurston Waffles is a white cat that meows. He appears as a side character most of the time during the show and is usually shown doing his iconic scream meow. Similar to other side characters not much is known about him other then the fact that he was born with much stronger vocal cords then other cats allowing him to scream so loud. At the end of the show he fights in the war of the silly where he is then killed by evil cat, though before he dies he releases the loudest meow ever heard which was said to echo around the world hurting cats ears. In real life it is theorized that he has died of cancer",
            "tags" => ['Male', 'Turkish van', 'white', 'fluffy']
        ],
        7 => [
            "description" => "The Eeper is a kitten who loves to eep, they eep all day and all night they love eeping. They love eeping so much, that a puddle of drool can be found right beside them.",
            "tags" => ['Male', 'tabby', 'eepy', 'sleepy', 'tired', 'orange']
        ],
        8 => [
            "description" => "Scaredy Cat is a supporting cast in the hour long Halloween Special. The episode was a fan favorite. Ironically, Scaredy Cat, living in the Halloween dimension is scared very easily.",
            "tags" => ['Male', 'domestic shorthair', 'scared', 'halloween', 'spooky']
        ],
        9 => [
            "description" => "Mr. Fresh, also known as the \"Streamer Cat\" and \"Side Eye Cat,\" is a stray cat from Hello Street Cat/cat houses. He can be seen from the Chinese app called Hello Street Cat, a 24/7 livestream where you can donate money to feed stray cats in \"cat houses\". His name comes from his tendency to prefer fresh food from the automatic dispenser, which is linked to livestream donations.",
            "tags" => ['Male', 'shorthair', 'orange', 'judgemental', 'fresh bro', 'side eye']
        ],
        10 => [
            "description" => "Halo is a mythical angelic guardian often seen in the legends of a popular mythical text originating in a book named the \"Black Book of Silly Magic,\" believed by archaeologists to be lost, but on multiple occasions has been referenced to by Future Kitty, who gifted multiple copies to many cats.",
            "tags" => ['Male', 'Orange', 'MYAAAAAAA', 'ugly', 'fourth dimensional creature']
        ],

    ];

    return $tags[$id];
}
