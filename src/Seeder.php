<?php
require_once ('OST.php');
require_once('Song.php');

class Seeder{
    private $tracks;

    public function __construct()
    {
        $this->tracks = [
            new OST('0A', 'Devil may cry 5 Original Soundtrack', 'Devil may cry', 2019, [
                new Song('00', 'Devil Trigger', 'Casey Edwars', 1, '6:45'),
                new Song('01', 'Crimson Cloud', 'Rachel Fannan', 2, '4:49'),
                new Song('02', 'Subhuman', 'Michael Barr', 3, '5:09'),
                new Song('03', 'Bury the Light', 'Casey Edwards', 4, '9:40'),
                new Song('04', 'The Duel', 'Casey Edwards', 5, '2:55')
            ]),

            new OST('0B', 'Final Fantasy VII Soundtrack', 'Final Fantasy 7', 1997, [
                new Song('00', 'Let the Battle Begin', 'Nobuo Uematsu', 10, '2:47'),
                new Song('01', 'Jenova', 'Nobuo Uematsu', 37, '2:37'),
                new Song('02', 'One-Winged Angel', 'Nobuo Uematsu', 83, '7:19'),
                new Song('03', 'Shinra\'s Full-Scale Assault', 'Nobuo Uematsu', 68, '2:57'),
                new Song('04', 'Opening - Bombing Mission', 'Nobuo Uematsu', 2, '3:58')
            ]),

            new OST('0C', 'Half Life 1+2 Complete OST', 'Half Life 1+2', 2004, [
                new Song('00', 'Nuclear Mission Jam', 'Valve', 14, '2:00'),
                new Song('01', 'Vogue Voices', 'Valve', 2, '2:14'),
                new Song('02', 'Lab Practicum', 'Valve', 46, '2:52'),
                new Song('03', 'Ravenholm Reprise', 'Valve', 35, '0:51'),
                new Song('04', 'Shadows Fore and Aft', 'Valve', 55, '1:23')
            ]),

            new OST('0D', 'Doom (Original Game Soundtrack)', 'Doom', 2016, [
                new Song('00', '1.Dogma', 'Mick Gordon', 1, '0.44'),
                new Song('01', 'Rip & Tear', 'Mick Gordon', 2,  '4:17'),
                new Song('02', 'Hellwalker', 'Mick Gordon', 6, '5:05'),
                new Song('03', 'Harbinger', 'Mick Gordon', 14, '7:11'),
                new Song('04', 'Transistor Fist', 'Mick Gordon', 17, '6:09')
            ])
        ];
    }

    public function getTracks()
    {
        return $this->tracks;
    }
}
?>