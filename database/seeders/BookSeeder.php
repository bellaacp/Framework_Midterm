<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $books = [
            [
                'title' => 'The Long Walk',
                'author' => 'Stephen King',
                'cover' => 'images/thelongwalk.jpg',
                'description' => 'Against the wishes of his mother, sixteen-year-old Ray Garraty is about to compete in the annual grueling match of stamina and wits known as The Long Walk. One hundred boys must keep a steady pace of four miles per hour without ever stopping... with the winner being awarded The Prize—anything he wants for the rest of his life. But, as part of this national tournament that sweeps through a dystopian America year after year, there are some harsh rules that Garraty and ninety-nine others must adhere to in order to beat out the rest. There is no finish line—the winner is the last man standing. Contestants cannot receive any outside aid whatsoever. Slow down under the speed limit and you are given a warning. Three warnings and you are out of the game—permanently...'
            ],
            [
                 'title' => 'The Midnight Library',
                 'author' => 'Matt Haig',
                 'cover' => 'images/midnightlibrary.jpg',
                'description' => "Between life and death there is a library.

                When Nora Seed finds herself in the Midnight Library, she has a chance to make things right. Up until now, her life has been full of misery and regret. She feels she has let everyone down, including herself. But things are about to change.

                The books in the Midnight Library enable Nora to live as if she had done things differently. With the help of an old friend, she can now undo every one of her regrets as she tries to work out her perfect life. But things aren't always what she imagined they'd be, and soon her choices place the library and herself in extreme danger.

                Before time runs out, she must answer the ultimate question: what is the best way to live?"
                ],

            [
                'title' => 'To Kill a Mockingbird',
                'author' => 'Harper Lee',
                'cover' => 'images/mockingbird.jpg',
                'description' => 'A gripping, heart-wrenching, and wholly remarkable coming-of-age tale in a South poisoned by virulent prejudice, it views a world of great beauty and savage iniquities through the eyes of a young girl, as her father — a crusading local lawyer — risks everything to defend a black man unjustly accused of a terrible crime.'
            ],
            [
                'title' => 'Normal People',
                'author' => 'Sally Rooney',
                'cover' => 'images/normalpeople.jpg',
                'description' => 'At school Connell and Marianne pretend not to know each other. He’s popular and well-adjusted, star of the school soccer team while she is lonely, proud, and intensely private. But when Connell comes to pick his mother up from her housekeeping job at Marianne’s house, a strange and indelible connection grows between the two teenagers - one they are determined to conceal.

                A year later, they’re both studying at Trinity College in Dublin. Marianne has found her feet in a new social world while Connell hangs at the sidelines, shy and uncertain. Throughout their years in college, Marianne and Connell circle one another, straying toward other people and possibilities but always magnetically, irresistibly drawn back together. Then, as she veers into self-destruction and he begins to search for meaning elsewhere, each must confront how far they are willing to go to save the other.'
            ],
            [
                'title' => 'Pride and Prejudice',
                'author' => 'Jane Austen',
                'cover' => 'images/prideandprej.jpg',
                'description' => 'Pride and Prejudice has charmed generations of readers for more than two centuries. This much-adapted novel is famed for its witty, spirited heroine, sensational romances, and deft remarks on the triumphs and pitfalls of social convention. Author Jane Austen (1775-1817) was an English novelist whose works of social realism achieved unprecedented critical and popular success, though Austen herself remained an anonymous writer throughout her life.'
            ],
                [
                'title' => 'Sharp Objects',
                'author' => 'Gillian Flynn',
                'cover' => 'images/sharpobjects.jpg',
                'description' => 'Sharp Objects is a novel by Gillian Flynn about reporter Camille Preaker who returns to her small hometown to investigate the murders of two preteen girls. While investigating, she must confront her complicated relationship with her mother and half-sister, along with her own troubled past of self-harm and mental health struggles. The synopsis involves Camille delving into a psychological puzzle that blurs the lines between her investigation and her personal demons.'],
            [
                'title' => 'The Lamb',
                'author' => 'Christopher Moore',
                'cover' => 'images/thelamb.jpg',
                'description' => 'Margot and Mama live an isolated life in a cottage tucked away by the forest. Every now and then, a Stray arrives at their doorstep: someone lost in the forest, looking for a warm drink or meal, or a place to rest overnight. Mama takes them in with the warmest welcome she can give. She nurtures them, feeds them and loves them, before turning on the oven and roasting them to consume their flesh. This is the only life Margot has ever known, until one Stray changes their dynamic forever. Eden is the first Stray who isn’t appalled by their lifestyle and Mama quickly falls in love with her white-tooth-smile and bloodthirst to rival her own.  As tensions in the cottage rise, Margots begins to fear that Mama, despite her appetite, only has room for 1 girl in her heart.'
            ],
            [
                'title' => 'Lapvona',
                'author' => 'Ottessa Moshfegh',
                'cover' => 'images/lapnova.jpg',
                'description' => 'Lapvona is a novel by Ottessa Moshfegh set in a medieval village where a deformed boy named Marek is abused by his shepherd father, Jude. When Marek is forced to live at the castle of the cruel lord Villiam, he becomes a pawn in a power struggle involving the village witch and other characters driven by greed and base desires, set against a backdrop of hardship, depravity, and grotesque situations. The story uses its "foul" setting to explore themes of instinct, faith, and morality, ultimately depicting a timeless and interior landscape rather than a historical one'
            ],
            [
                'title' => 'Blue Sisters',
                'author' => 'Coco Mellors',
                'cover' => 'images/bluesisters.jpg',
                'description' => 'Blue Sisters is a novel by Coco Mellors about three estranged sisters, Avery, Bonnie, and Lucky, who must reunite in New York to stop the sale of their childhood apartment after the death of their fourth sister, Nicky. The synopsis explores their individual struggles with grief, addiction, and identity as they navigate their complicated family history and the secrets they have kept from themselves and each other.'
            ],
            [
                'title' => 'Shadow Ticket',
                'author' => 'Thomas Pynchon',
                'cover' => 'images/shadowticket.jpg',
                'description' => 'Vate investigator Hicks McTaggart in 1932 as he tracks a runaway heiress from Milwaukee, leading him on a chaotic journey through Europe with a cast of characters including Nazis, Soviet agents, and swing musicians. The plot is a surreal and complex adventure involving espionage, jazz clubs, and various conspiracies, set against the backdrop of the approaching Big Band era.'
            ],
            [
                'title' => 'Babel',
                'author' => 'R. F. Kuang',
                'cover' => 'images/babel.jpeg',
                'description' => 'Babel is a historical fantasy novel set in an alternate 1830s England about a young Chinese orphan named Robin Swift who is brought to Oxford to study at the Royal Institute of Translation, also known as Babel. At this institution, scholars use a magical system called silver-working, which captures the "lost in translation" meanings between languages to imbue silver bars with power for the British Empire colonial endeavors. The story follows Robin and his fellow students as they question the ethics of their work and become caught between supporting the empire and joining a secret society dedicated to resisting it.'
            ],
            [
                'title' => 'Black Swans',
                'author' => 'Eve Babitz',
                'cover' => 'images/blackswans.jpg',
                'description' => 'The "Black Swan" book refers to The Black Swan: The Impact of the Highly Improbable by Nassim Nicholas Taleb, which argues that history and our lives are shaped by rare, unpredictable, and high-impact events (black swans) that we later try to rationalize as if they were predictable. An alternative, different book titled Black Swans is a collection of short stories by Eve Babitz about life in Los Angeles in the 1980s and 1990s.'
            ],
            [
                'title' => 'Brutes',
                'author' => 'Dizz Tate',
                'cover' => 'images/brutes.jpg',
                'description' => 'Brutes is a coming-of-age mystery novel by Dizz Tate about a group of 13-year-old girls in a Florida town who become obsessed with the disappearance of Sammy, the preachers daughter. As the girls investigate, they uncover dark secrets about their town and the true cost of escaping it. The story explores themes of girlhood, friendship, and the violence lurking beneath a glamorous surface.'
            ],
            [
                'title' => 'Onyx Storm',
                'author' => 'Rebecca Yarros',
                'cover' => 'images/onyxstorm.jpg',
                'description' => 'Onyx Storm is the third book in  Empyrean series, following Violet Sorrengail as she embarks on a quest to find the elusive seventh dragon breed, believing they hold the key to defeating the venin. The book opens with the volatile aftermath of the previous one, with Violet needing to forge new alliances and confront threats from within and outside Basgiath, all while trying to find a cure for Xaden, who has begun to turn venin. Her journey tests her strength and forcing her to keep a world-altering secret.'
            ],
            [
                'title' => 'Trust',
                'author' => 'Hernan Diaz',
                'cover' => 'images/trust.jpg',
                'description' => 'Even through the roar and effervescence of the 1920s, everyone in New York has heard of Benjamin and Helen Rask. He is a legendary Wall Street tycoon; she is the daughter of eccentric aristocrats. Together, they have risen to the very top of a world of seemingly boundless wealth—all as a decade of excess and speculation draws to an end. But at what cost have they acquired their immense fortune? This is the mystery at the center of Bonds, a successful 1937 novel that all of New York seems to have read. Yet there are other versions of this tale of privilege and deceit.'
            ]
        ];

        foreach ($books as $b) {
            Book::create($b);
        }
    }
}
