<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            [
                'name' => 'Apex Legend',
                'description' => 'Apex Legends is the award-winning, free-to-play Hero shooter from Respawn Entertainment. Master an ever-growing roster of legendary characters with powerful abilities and experience strategic squad play and innovative gameplay in the next evolution of Hero Shooter and Battle Royale.',
                'description_long'=>"Conquer with character in Apex Legends, a free-to-play Hero shooter where legendary characters with powerful abilities team up to battle for fame & fortune on the fringes of the Frontier.

                Master an ever-growing roster of diverse Legends, deep tactical squad play and bold new innovations that go beyond the Battle Royale experience—all within a rugged world where anything goes. Welcome to the next evolution of Hero Shooter.

                KEY FEATURES
                A Roster of Legendary Characters -Master a growing roster of powerful Legends, each with their own unique personality, strengths and abilities that are easy to pick up but challenging to truly master.
                Build Your Crew -Choose your Legend and combine their unique skills together with other players to form the ultimate crew.
                Strategic Squad Play- Whether you're battling on a massive floating city in Battle Royale or dueling in close-quarters Arenas, you'll need to think fast. Master your Legend's unique abilities and coordinate with your teammates to discover new tactics and powerful combinations.
                Innovative Combat - Master an expanding assortment of powerful weapons and equipment. You'll need to move fast and learn the rhythms of each weapon to get the most of your arsenal. Plus change it up in limited-time modes, and get ready for a boatload of new content each season.
                Ever-Expanding Universe - Apex Legends takes place in an immersive universe where the story continues to evolve, maps change each season, and new Legends keep joining the fight. Make your mark on the Apex Games with a multitude of distinctive outfits and join the adventure!",
                'category'=>'Action',
                'developer' =>'Respawn Entertainment',
                'publisher'=> 'Electronic Arts',
                'price'=>100000,
                'cover'=>'Images/apex.jpg',
                'video'=>'Videos/apex.webm',
                'is_adult' => false,
            ],
            [
                'name'=>'Euro Truck Simulator 2',
                'description'=>'Travel across Europe as king of the road, a trucker who delivers important cargo across impressive distances! With dozens of cities to explore, your endurance, skill and speed will all be pushed to their limits.',
                'description_long'=>"Travel across Europe as king of the road, a trucker who delivers important cargo across impressive distances! With dozens of cities to explore from the UK, Belgium, Germany, Italy, the Netherlands, Poland, and many more, your endurance, skill and speed will all be pushed to their limits. If you’ve got what it takes to be part of an elite trucking force, get behind the wheel and prove it!
                Key Features:
                Transport a vast variety of cargo across more than 60 European cities.
                Run your own business which continues to grow even as you complete your freight deliveries.
                Build your own fleet of trucks, buy garages, hire drivers, manage your company for maximum profits.
                A varied amount of truck tuning that range from performance to cosmetic changes.
                Customize your vehicles with optional lights, bars, horns, beacons, smoke exhausts, and more.
                Thousands of miles of real road networks with hundreds of famous landmarks and structures.
                World of Trucks
                Take advantage of additional features of Euro Truck Simulator 2 by joining our online community on World of Trucks, our center for virtual truckers all around the world interested in Euro Truck Simulator 2 and future SCS Software's truck simulators.

                Use in-game Photo Mode to capture the best moments and share them with thousands of people who love trucks.
                Favorite the images you like the most and return to them anytime in the future.
                Discuss the screenshots with everyone using World of Trucks.
                See the best images hand-picked by the game creators in Editor's Pick updated almost every day. Try to get your own screenshot on this list!
                Upload and use your custom avatar and license plate in the game.
                More features coming soon!",
                'category'=>'Simulation',
                'developer'=>'SCS Software',
                'publisher'=>'SCS Software',
                'price'=>169999,
                'cover'=>'Images/eurotruck.jpg',
                'video'=>'Videos/eurotruck.webm',
                'is_adult' => false,
            ],
            [
                'name'=>'Forza Horizon 4',
                'description'=>"Dynamic seasons change everything at the world's greatest automotive festival. Go it alone or team up with others to explore beautiful and historic Britain in a shared open world.",
                'description_long'=>"Dynamic seasons change everything at the world's greatest automotive festival. Go it alone or team up with others to explore beautiful and historic Britain in a shared open world. Collect, modify and drive over 450 cars. Race, stunt, create and explore - choose your own path to become a Horizon Superstar.

                Collect Over 450 Cars
                Enjoy the largest and most diverse Horizon car roster yet, including over 100 licensed manufacturers.

                Race. Stunt. Create. Explore.
                In the new open-ended campaign, everything you do progresses your game.

                Explore a Shared World
                Real players populate your world. When time of day, weather and seasons change, everyone playing the game experiences it at the same time.

                Explore Beautiful, Historic Britain
                This is Britain Like You've Never Seen it. Discover lakes, valleys, castles, and breathtaking scenery all in spectacular native 4K and HDR.",
                'category'=>'Simulation',
                'developer'=>'Playground Games',
                'publisher'=>'XBOX Game Studios',
                'price'=>249999,
                'cover'=>'Images/forza.jpg',
                'video'=>'Videos/forza.webm',
                'is_adult' => false,
            ],
            [
                'name'=>'Grand Theft Auto V',
                'description'=>"Grand Theft Auto V for PC offers players the option to explore the award-winning world of Los Santos and Blaine County in resolutions of up to 4k and beyond, as well as the chance to experience the game running at 60 frames per second.",
                'description_long'=>"When a young street hustler, a retired bank robber and a terrifying psychopath find themselves entangled with some of the most frightening and deranged elements of the criminal underworld, the U.S. government and the entertainment industry, they must pull off a series of dangerous heists to survive in a ruthless city in which they can trust nobody, least of all each other.

                Grand Theft Auto V for PC offers players the option to explore the award-winning world of Los Santos and Blaine County in resolutions of up to 4k and beyond, as well as the chance to experience the game running at 60 frames per second.

                The game offers players a huge range of PC-specific customization options, including over 25 separate configurable settings for texture quality, shaders, tessellation, anti-aliasing and more, as well as support and extensive customization for mouse and keyboard controls. Additional options include a population density slider to control car and pedestrian traffic, as well as dual and triple monitor support, 3D compatibility, and plug-and-play controller support.

                Grand Theft Auto V for PC also includes Grand Theft Auto Online, with support for 30 players and two spectators. Grand Theft Auto Online for PC will include all existing gameplay upgrades and Rockstar-created content released since the launch of Grand Theft Auto Online, including Heists and Adversary modes.

                The PC version of Grand Theft Auto V and Grand Theft Auto Online features First Person Mode, giving players the chance to explore the incredibly detailed world of Los Santos and Blaine County in an entirely new way.",
                'category'=>'Role-Playing',
                'developer'=>'Rockstar North',
                'publisher'=>'Rockstar Games',
                'price'=>551022,
                'cover'=>'Images/gta.jpg',
                'video'=>'Videos/gta.webm',
                'is_adult' => true,
            ],
            [
                'name'=>'GTFO',
                'description'=>"GTFO is an extreme cooperative horror shooter that throws you from gripping suspense to explosive action in a heartbeat. Stealth, strategy, and teamwork are necessary to survive in your deadly, underground prison. Work together or die together.",
                'description_long'=>"Your team of prisoners is dropped into the Rundown when a new Work Order is issued by the Warden, the mysterious entity holding you captive. The Rundown is a series of expeditions, each one taking you deeper into a decayed research facility called the Complex. You descend level by level, scavenging tools and resources that help you survive in a perilous network of tunnels where gruesome creatures lurk in every shadow. Complete all of the expeditions to fulfill the Work Order and clear the Rundown.

                Be warned, GTFO isn't your typical run and gun shooter. It's for players that value a serious challenge.
                A 4-player cooperative experience
                GTFO is designed for prisoner teams of four, putting cooperation at the core of the experience. Bots can fill your lineup if you're short one or two players. They'll follow you through expeditions, sneak when you sneak, collect resources, and fight alongside you. They're a good fallback, but the level of communication and tactical combat in GTFO means it's best to play with people.
                Prepare, Explore, Survive
                A strategy is necessary to clear the Rundown. Before you drop into the Complex, your team needs to decide what gear, boosters, and weapons to bring. You must also balance the team, identifying the function of each prisoner so that you know what to do when things go wrong. And they will. They always do.
                Don't wake them up
                Stealth and coordination are necessary to survive as you maneuver through the Complex. Many of the creatures of GTFO are suspended in a state of hibernation, so light, noise, and vibrations can easily wake up these Sleepers. And if one of them knows you're there, they all know. That's when things get messy.",
                'category'=>'Action',
                'developer'=>'10 Chambers',
                'publisher'=>'10 Chambers',
                'price'=>497000,
                'cover'=>'Images/gtfo.jpg',
                'video'=>'Videos/gtfo.webm',
                'is_adult' => true,
            ],
            [
                'name'=>'Monster Hunter World',
                'description'=>"Welcome to a new world! In Monster Hunter: World, the latest installment in the series, you can enjoy the ultimate hunting experience, using everything at your disposal to hunt monsters in a new world teeming with surprises and excitement.",
                'description_long'=>"Welcome to a new world! Take on the role of a hunter and slay ferocious monsters in a living, breathing ecosystem where you can use the landscape and its diverse inhabitants to get the upper hand. Hunt alone or in co-op with up to three other players, and use materials collected from fallen foes to craft new gear and take on even bigger, badder beasts!
                INTRODUCTION
                Overview
                Battle gigantic monsters in epic locales.

                As a hunter, you'll take on quests to hunt monsters in a variety of habitats.
                Take down these monsters and receive materials that you can use to create stronger weapons and armor in order to hunt even more dangerous monsters.

                In Monster Hunter: World, the latest installment in the series, you can enjoy the ultimate hunting experience, using everything at your disposal to hunt monsters in a new world teeming with surprises and excitement.

                Setting
                Once every decade, elder dragons trek across the sea to travel to the land known as the New World in a migration referred to as the Elder Crossing.

                To get to the bottom of this mysterious phenomenon, the Guild has formed the Research Commission, dispatching them in large fleets to the New World.

                As the Commission sends its Fifth Fleet in pursuit of the colossal elder dragon, Zorah Magdaros, one hunter is about to embark on a journey grander than anything they could have ever imagined.",
                'category'=>'Adventure',
                'developer'=>'Capcom Co.,Ltd.',
                'publisher'=>'Capcom Co.,Ltd.',
                'price'=>334000,
                'cover'=>'Images/mhw.jpg',
                'video'=>'Videos/mhw.webm',
                'is_adult' => false,
            ],
            [
                'name'=>'Planet Coaster',
                'description'=>'Planet Coaster® - the future of coaster park simulation games has arrived! Surprise, delight and thrill incredible crowds as you build your coaster park empire - let your imagination run wild, and share your success with the world.',
                'description_long'=>"Surprise, delight and thrill crowds as you build the theme park of your dreams. Build and design incredible coaster parks with unparalleled attention to detail and manage your park in a truly living world.

                Piece-by-Piece Construction: Planet Coaster makes a designer out of everyone. Lay paths, build scenery, customize rides and make everything in your park unique with piece-by-piece construction and over a thousand unique building components.

                Landscape Sculpting: Play with nature and reshape the land beneath your feet. Sculpt the landscape to raise mountains, form lakes, dig caverns and even build islands in the sky, then weave coasters through your park above ground and below.

                Total Authenticity: Recreate your favorite rides or leave the real world at the door. However you love to play, the most realistic rides and most realistic reactions from your guests make Planet Coaster the most authentic simulation ever.

                Simulation Evolved: The deepest park simulation in gaming history rewards your skills and makes management fun. Control every aspect of your guests' experience and watch as Planet Coaster's world reacts to your choices in an instant.

                A Living World: Every park guest is an expressive individual who thinks, feels and explores your park with their own interests and desires. Together Planet Coaster's guests will tell you at a glance just how well your park is run.

                Park Management: You're the boss with accessible controls that make management fun. Test your skills in a campaign of creative scenarios, or just build for fun and tweak your parks to surprise, delight and thrill your guests.

                Communal Creation: Planet Coaster links coaster fanatics and creators around the world with the Steam Workshop community hub. Trade scenery, rollercoasters and even entire parks with other players, and add the world's wildest creations to your own park.",
                'category'=>'Strategy',
                'developer'=>'Frontier Developments, Aspyr (Mac)',
                'publisher'=>'Frontier Developments, Aspyr (Mac)',
                'price'=>592000,
                'cover'=>'Images/planetcoaster.jpg',
                'video'=>'Videos/planetcoaster.webm',
                'is_adult'=>false,
            ],
            [
                'name'=>"Tom Clancy's Rainbow Six® Siege",
                'description'=>"Tom Clancy's Rainbow Six Siege is the latest installment of the acclaimed first-person shooter franchise developed by the renowned Ubisoft Montreal studio.",
                'description_long'=>"Master the art of destruction and gadgetry in Tom Clancy’s Rainbow Six Siege. Face intense close quarters combat, high lethality, tactical decision making, team play and explosive action within every moment. Experience a new era of fierce firefights and expert strategy born from the rich legacy of past Tom Clancy's Rainbow Six games.


                Engage in a brand-new style of assault using an unrivaled level of destruction and gadgetry.
                On defense, coordinate with your team to transform your environments into strongholds. Trap, fortify and create defensive systems to prevent being breached by the enemy.
                On attack, lead your team through narrow corridors, barricaded doorways and reinforced walls. Combine tactical maps, observation drones, rappelling and more to plan, attack and defuse every situation.


                Choose from dozens of highly trained, Special Forces operators from around the world. Deploy the latest technology to track enemy movement. Shatter walls to open new lines of fire. Breach ceilings and floors to create new access points. Employ every weapon and gadget from your deadly arsenal to locate, manipulate and destroy your enemies and the environment around them.


                Experience new strategies and tactics as Rainbow Six Siege evolves over time. Change the rules of Siege with every update that includes new operators, weapons, gadgets and maps. Evolve alongside the ever-changing landscape with your friends and become the most experienced and dangerous operators out there.


                Compete against others from around the world in ranked match play. Grab your best squad and join the competitive community in weekly tournaments or watch the best professional teams battle it out in the Rainbow Six Siege Pro League.",
                'category'=>'Action',
                'developer'=>'Ubisoft Montreal',
                'publisher'=>'Ubisoft',
                'price'=>295000,
                'cover'=>'Images/rsix.jpg',
                'video'=>'Videos/rsix.webm',
                'is_adult'=>false,
            ],
            [
                'name'=>'Totally Accurate Battle Simulator',
                'description'=>'Be the leader of wobblers from ancient lands, spooky places, and fantasy worlds. Watch them fight in simulations made with the wobbliest physics system ever created, make your own wobblers in the unit creator and send your army off to fight your friends in multiplayer.',
                'description_long'=>"Be the leader of red and blue wobblers from ancient lands, spooky places, and fantasy worlds. Watch them fight in simulations made with the wobbliest physics system ever created.

                When you grow tired of the 100+ wobblers at your disposal you can make new ones in the unit creator.

                You can also send wobblers to fight your friends or strangers in online multiplayer!

                Features:
                Campaigns
                Multiplayer
                Workshop
                Unit and faction Creator
                Campaign and battle creator
                Sandbox mode
                Unit Possession
                A bunch of silly units


                Custom content and workshop:
                Unit and faction Creator
                Campaign and battle creator
                In-game workshop",
                'category'=>'Strategy',
                'developer'=>'Landfall',
                'publisher'=>'Landfall',
                'price'=>109000,
                'cover'=>'Images/tabs.jpg',
                'video'=>'Videos/tabs.webm',
                'is_adult'=>false,
            ],

        ]);
    }
}
