<?php
// back-end of stranger-things.php

$plot = "Set in the fictional town of Hawkins, Indiana in the 1980s, the first season focuses on the investigation into the disappearance of a young boy amid supernatural events occurring around the town including the appearance of a psychokinetic girl who helps
the missing boy's friends in their own search.";

$links = [
	'eleven' => '<a href="#eleven" class="no-link-color no-decor">El</a>',
	'mike' => '<a href="#mike" class="no-link-color no-decor">Mike</a>',
	'will' => '<a href="#will" class="no-link-color no-decor">Will</a>',
	'robin' => '<a href="#robin" class="no-link-color no-decor">a lesbian</a>',
	'lucas' => '<a href="#lucas" class="no-link-color no-decor">Lucas</a>',
	'dustin' => '<a href="#dustin" class="no-link-color no-decor">Dustin</a>',
	'max' => '<a href="#max" class="no-link-color no-decor">Max</a>',
	'billy' => '<a href="#billy" class="no-link-color no-decor">Billy</a>',
	'karen' => '<a href="#karen" class="no-link-color no-decor">Karen</a>',
	'joyce' => '<a href="#joyce" class="no-link-color no-decor">Joyce</a>',
	'nancy' => '<a href="#nancy" class="no-link-color no-decor">Nancy</a>',
	'steve' => '<a href="#steve" class="no-link-color no-decor">Steve</a>',
	'jonathan' => '<a href="#jonathan" class="no-link-color no-decor">Jonathan</a>'
];

$seasons = [
	'season-1' => [
		'seasonName' => 'Season 1',
		'characters' => [
			'joyce' => [
				'images' => [
					'Season 1' => 'https://media.glamour.com/photos/59f21012ad714a335821fc8a/4:3/w_1328,h_996,c_limit/ST%20(1).jpg',
					'Season 2' => 'https://preview.redd.it/du10ngysc0w51.jpg?auto=webp&s=3f4789cd962120e9398206f0c2985306cf2e36da',
					'Season 3' => 'https://cdn3.whatculture.com/images/2019/07/b11ae7cffd476ef2-600x338.png',
					'Season 4' => 'https://pbs.twimg.com/media/FDhCqxlXoAk7yZ8.jpg',
					'Season 5' => 'https://pbs.twimg.com/media/FDhCqxlXoAk7yZ8.jpg'
				],
				'characterLink' => 'http://strangerthings.wikia.com/wiki/Joyce_Byers',
				'characterName' => 'Joyce "Have You Seen My Son" Byers',
				'content' => [
					'Nervous',
					'Desperate',
					'Just wants her son back',
					'A cigarette a day keeps the pain at bay',
					'Has ' . $links['will'] . ' as her sole purpose for living until realizing the existence of magnets',
					'Elite'
				]
			],
			'hopper' => [
				'images' => [
					'Season 1' => 'https://bamfstyle.com/wp-content/uploads/2019/10/sthops1-main1.jpg',
					'Season 2' => 'https://static.onecms.io/wp-content/uploads/sites/6/2017/10/dki-2000.jpg',
					'Season 3' => 'https://www.hollywoodreporter.com/wp-content/uploads/2019/07/stranger_things_s03_still_20.jpg',
					'Season 4' => 'https://www.denofgeek.com/wp-content/uploads/2020/09/stranger-things-russia-david-harbour-netflix.jpg?fit=1200%2C680',
					'Season 5' => 'https://www.denofgeek.com/wp-content/uploads/2020/09/stranger-things-russia-david-harbour-netflix.jpg?fit=1200%2C680'
				],
				'characterLink' => 'http://strangerthings.wikia.com/wiki/Jim_Hopper',
				'characterName' => 'Chief What\'s His Name',
				'content' => [
					'Hoppy',
					'Not having it',
					$links['joyce'] . '\'s boyfriend',
					'Coffee and contemplation',
					'Punches away his problems',
					$links['eleven'] . '\'s dad',
					'Hates ' . $links['mike']
				]
			],
			'mike' => [
				'images' => [
					'Season 1' => 'https://i.pinimg.com/originals/a4/56/06/a45606b7391adad4e5d8ae30b5d0e44a.jpg',
					'Season 2' => 'https://data.whicdn.com/images/306468778/original.jpg',
					'Season 3' => 'https://i.pinimg.com/originals/ec/b0/ec/ecb0ec1a67694893a5742f33daa682c4.jpg',
					'Season 4' => 'https://metagalaxia.com.br/wp-content/uploads/2022/05/Mike-Wheeler.webp',
					'Season 5' => 'https://metagalaxia.com.br/wp-content/uploads/2022/05/Mike-Wheeler.webp'
				],
				'characterLink' => 'http://strangerthings.wikia.com/wiki/Mike_Wheeler',
				'characterName' => 'Mikey',
				'content' => [
					'Essentially the leader of his friend group',
					'Annoying to his friends',
					'Repeats himself a lot',
					'Sassy',
					'Loves his friends but mostly ' . $links['eleven'],
					'Has a lot of red flags because he is in fact a Man&trade;',
					'But season 3/4 Mike made the red flags turn green',
					'I\'m in love with him oops'
				]
			],
			'eleven' => [
				'images' => [
					'Season 1' => 'https://r2.mt.ru/r5/photoA756/20688347315-0/jpg/bp.webp',
					'Season 2' => 'https://media.vanityfair.com/photos/59f370dd16ff751cf425ef46/master/pass/wv_publicity_pre_launch_A_still_23.jpg',
					'Season 3' => 'https://s2.r29static.com/bin/entry/75e/x,80/2214031/image.jpg',
					'Season 4' => 'https://cdn.vox-cdn.com/thumbor/-8oXNxQXzj65-offemosTJab_jY=/0x0:3840x1912/1520x1013/filters:focal(1613x649:2227x1263):format(webp)/cdn.vox-cdn.com/uploads/chorus_image/image/70818434/A715C016_210714_R21J.00902542.0.jpg',
					'Season 5' => 'https://cdn.vox-cdn.com/thumbor/-8oXNxQXzj65-offemosTJab_jY=/0x0:3840x1912/1520x1013/filters:focal(1613x649:2227x1263):format(webp)/cdn.vox-cdn.com/uploads/chorus_image/image/70818434/A715C016_210714_R21J.00902542.0.jpg'
				],
				'characterLink' => 'http://strangerthings.wikia.com/wiki/Eleven',
				'characterName' => '011',
				'content' => [
					'Yasssss queen',
					'Better than her three male friends',
					'Has telekinetic powers and a lot of nosebleeds',
					'Only says "' . $links['mike'] . '" and "Eggos"',
					'Really loves both',
					'Does everything to protect ' . $links['mike'],
					'Is only just starting to realize she has a personality outside of the men in her life'
				]
			],
			'dustin' => [
				'images' => [
					'Season 1' => 'https://media1.popsugar-assets.com/files/thumbor/4ypNkOELQqrpMegFUGjbNGxWVWM/fit-in/2048xorig/filters:format_auto-!!-:strip_icc-!!-/2016/08/16/139/n/1922283/66282b67cb35bc36_dustin/i/Dustin-From-Stranger-Things.jpg',
					'Season 2' => 'https://notesfromachair.files.wordpress.com/2017/12/who-was-the-dumbest-smartest-and-most-heroic-in-stranger-things-season-2.png?w=584&h=438',
					'Season 3' => 'https://s3.r29static.com/bin/entry/869/x,80/2214004/image.jpg',
					'Season 4' => 'https://s3.r29static.com/bin/entry/869/x,80/2214004/image.jpg',
					'Season 5' => 'https://s3.r29static.com/bin/entry/869/x,80/2214004/image.jpg'
				],
				'characterLink' => 'http://strangerthings.wikia.com/wiki/Dustin_Henderson',
				'characterName' => 'Dusty-Bun',
				'content' => [
					'I love him more than I love ' . $links['mike'],
					'Genuinely believes in ' . $links['eleven'],
					'Sooooooo cute',
					'Nilla Wafer connoisseur',
					'Loves animals and has(d) a cat named Mews',
					'Hates the lunch lady (bald-faced liar)'
				]
			],
			'lucas' => [
				'images' => [
					'Season 1' => 'https://mfiles.alphacoders.com/810/thumb-1920-810612.jpg',
					'Season 2' => 'https://i.pinimg.com/originals/a3/a6/17/a3a617257b1d4a2504d9f7d3298b1105.jpg',
					'Season 3' => 'https://i.pinimg.com/originals/a0/6c/58/a06c581688c7cf606f99d564b6ef98a8.png',
					'Season 4' => 'https://i.pinimg.com/originals/a0/6c/58/a06c581688c7cf606f99d564b6ef98a8.png',
					'Season 5' => 'https://i.pinimg.com/originals/a0/6c/58/a06c581688c7cf606f99d564b6ef98a8.png'
				],
				'characterLink' => 'http://strangerthings.wikia.com/wiki/Lucas_Sinclair',
				'characterName' => 'Lukey',
				'content' => [
					'2/10 would not recommend',
					'Because he didn\'t like ' . $links['eleven'] . ' at the beginning',
					'I can relate a lot to his personality though',
					'Unbothered',
					'Takes nobody\'s crap',
					'Likes his bandana'
				]
			],
			'nancy' => [
				'images' => [
					'Season 1' => 'https://preview.redd.it/d7z1h7lkfqq81.jpg?width=828&format=pjpg&auto=webp&s=3f3b8e70664b906401332b414cce7586042c2265',
					'Season 2' => 'https://i.pinimg.com/originals/0f/1d/14/0f1d142ca6cfaf932dc11cbaf3f59257.png',
					'Season 3' => 'https://preview.redd.it/daoszdx66vm41.jpg?auto=webp&s=d73d9aee1fa157907fb8998c0816c2fffe662847',
					'Season 4' => 'https://preview.redd.it/daoszdx66vm41.jpg?auto=webp&s=d73d9aee1fa157907fb8998c0816c2fffe662847',
					'Season 5' => 'https://preview.redd.it/daoszdx66vm41.jpg?auto=webp&s=d73d9aee1fa157907fb8998c0816c2fffe662847'
				],
				'characterLink' => 'http://strangerthings.wikia.com/wiki/Nancy_Wheeler',
				'characterName' => 'Nancy Drew',
				'content' => [
					$links['mike'] . '\'s sister',
					'Goals',
					'Like, she\'s REALLY pretty (we get it, Arianna)',
					'Bad taste in guys though',
					'Good with a gun',
					'Mean to her dead friend Barb and her two boyfriends'
				]
			],
			'jonathan' => [
				'images' => [
					'Season 1' => 'https://i.pinimg.com/originals/b8/ce/3a/b8ce3aa13638292e28eefdd2ea4e569a.png',
					'Season 2' => 'https://pbs.twimg.com/media/Dwa7KeoX0AE_ssw.jpg',
					'Season 3' => 'https://nitter.net/pic/media%2FFNbhSv8VgAA1izm.jpg%3Fname%3Dsmall',
					'Season 4' => 'https://nitter.net/pic/media%2FFNbhSv8VgAA1izm.jpg%3Fname%3Dsmall',
					'Season 5' => 'https://nitter.net/pic/media%2FFNbhSv8VgAA1izm.jpg%3Fname%3Dsmall'
				],
				'characterLink' => 'http://strangerthings.wikia.com/wiki/Jonathan_Byers',
				'characterName' => 'Jonathan? Harry Styles?',
				'content' => [
					$links['will'] . '\'s older brother',
					'#Jancy forever',
					'Likes good music',
					'Loves his brother',
					'Abby loves him'
				]
			],
			'will' => [
				'images' => [
					'Season 1' => 'https://pbs.twimg.com/media/E_XL2iGXEAQq8S7.jpg:large',
					'Season 2' => 'https://pyxis.nymag.com/v1/imgs/998/83c/3117e183a858dcaa2e08738c491e90979b-27-will-byers-stranger-things.rsquare.w700.jpg',
					'Season 3' => 'https://preview.redd.it/pr8vqgmqp8o41.png?auto=webp&s=cd7fe89f5e4c424df5d25072e06c6cf285b74b89',
					'Season 4' => 'https://preview.redd.it/pr8vqgmqp8o41.png?auto=webp&s=cd7fe89f5e4c424df5d25072e06c6cf285b74b89',
					'Season 5' => 'https://preview.redd.it/pr8vqgmqp8o41.png?auto=webp&s=cd7fe89f5e4c424df5d25072e06c6cf285b74b89'
				],
				'characterLink' => 'http://strangerthings.wikia.com/wiki/Will_Byers',
				'characterName' => 'Will The Wise',
				'content' => [
					'Status: Alive (for now)',
					'Gay',
					'Doesn\'t deserve this',
					'Has treacherous hair always and forever'
				]
			],
			'steve' => [
				'images' => [
					'Season 1' => 'https://i.imgur.com/wZ3VHFQ.jpg',
					'Season 2' => 'https://cdn.vox-cdn.com/thumbor/SrDH65R7xShm1EJ0l6G5WRk6pAo=/0x0:8000x3720/1200x800/filters:focal(2271x231:3551x1511)/cdn.vox-cdn.com/uploads/chorus_image/image/59165497/wv_publicity_post_launch_still_6.000001.0.jpg',
					'Season 3' => 'https://styles.redditmedia.com/t5_zxomw/styles/profileIcon_bjk7usx496d81.jpg',
					'Season 4' => 'https://styles.redditmedia.com/t5_zxomw/styles/profileIcon_bjk7usx496d81.jpg',
					'Season 5' => 'https://styles.redditmedia.com/t5_zxomw/styles/profileIcon_bjk7usx496d81.jpg'
				],
				'characterLink' => 'http://strangerthings.wikia.com/wiki/Steve_Harrington',
				'characterName' => 'Steve Hair-ington',
				'content' => [
					'A+ hair',
					'C- personality up to the end of Season 2',
					'Becomes Babysitter: Ultimate Edition',
					'Kind of doesn\'t have anything going for him',
					'Fell in love with ' . $links['robin'] . ' (we\'ve all been there, Stevie)'
				]
			]
		],
		'episodes' => [
			'one' => [
				'title' => 'The Vanishing of Will Byers',
				'rating' => '3',
				'thoughts' => 'A classic. This episode perfectly sets the mood for a spooky winter season. Everyone was so young, and I always get so nostalgic watching this.',
				'quotes' => [
					'IT ROARS IN ANGER',
					'The campaign took two weeks to plan! How was I supposed to know it was gonna take ten hours...',
					'Am I speaking <em>Chinese</em> in this house?'
				]
			],
			'two' => [
				'title' => 'The Weirdo on Maple Street',
				'rating' => '4',
				'thoughts' => 'Mike and El having their first real conversation makes me cry every time. I also loved when he showed her around his room and showed her all of his toys. Hazy Shade Of Winter playing in the credits after Barb goes missing is probably my favorite ending to any ST episode.',
				'quotes' => [
					'...Well my name\'s Mike, short for Michael',
					'We have OJ, skim milk, what else...',
					'...The last time I told you I was sick you made me go to school anyway—',
					'We never would\'ve upset you if we knew you had superpowers'
				]
			],
			'three' => [
				'title' => 'Holly, Jolly',
				'rating' => '2',
				'thoughts' => 'This episode is kind of boring, since nothing really happens besides the kids riding around on their bikes. Although, it is a classic with the wall alphabet, and the kids finding Will at the end with Heroes playing in the background always makes me so sad. It always devastates me to see anyone yelling at El, especially Mike.',
				'quotes' => [
					'We need energy for our travels for stamina',
					'I bet that she could make this fly',
					'COMING',
					'You look at her all like... \'Hi El :) Oh El, El, El\'',
					'This is the <em>Monsta Killa</em>',
					'*Nervous* "...Yep"',
					'Blink once for yes, twice for no'
				]
			],
			'four' => [
				'title' => 'The Body',
				'rating' => '5',
				'thoughts' => 'It\'s so sad how poor Joyce sounded so crazy to anyone she spoke to. Her blasting music and screaming at the walls like "Come on... COME ON! TALK TO ME!" was a real serve. Also, El\'s makeover done by the boys! I love every second.',
				'quotes' => [
					'ARE YOU DEAF',
					'I think I just wanna stay home today... I mean, if that\'s okay :(',
					'No, not his funeral, <em>screw his funeral</em>',
					'We\'re— upset :)— :(',
					'Did I say O\'Bannon, I meant... okay'
				]
			],
			'five' => [
				'title' => 'The Flea and the Acrobat',
				'rating' => '5',
				'thoughts' => 'I still hate when Mike yells at El. He\'s been so mean to her this season and it makes me really disappointed mostly in myself that he\'s my favorite character. Still, though, the fight between him and Lucas was kind of a good time and I\'m always cheering him on to kick his friend\'s butt.',
				'quotes' => [
					'Take another photo? Yell at it?',
					'We\'re... in mourning',
					'You\'re blind because you like that a girl\'s not grossed out by you',
					'NYU, Lonnie! He\'s wanted to go to NYU since he was <em>six years old</em>!',
					'Bull, that\'s old blood! Right, El? ...<em>Right, El?</em>'
				]
			],
			'six' => [
				'title' => 'The Monster',
				'rating' => '2',
				'thoughts' => 'This one\'s kind of boring too, but I was a fan of El robbing the grocery store. It\'s so funny how she doesn\'t know that she should hide her powers, so she just does whatever she wants whenever she wants. And Tantrum Wheeler shouldn\'t be as hilarious as he is.',
				'quotes' => [
					'You\'re <em>shaking his hand</em>" "No I\'m not'
				]
			],
			'seven' => [
				'title' => 'The Bathtub',
				'rating' => '2',
				'thoughts' => '',
				'quotes' => [
					'Did you see that??" "No, Dustin, we missed it'
				]
			],
			'eight' => [
				'title' => 'The Upside Down',
				'rating' => '4',
				'thoughts' => 'Steve swinging the bat',
				'quotes' => [
					'<em>Mike! I found the chocolate pudding!</em>'
				]
			]
		]
	],
	'season-2' => [
		'seasonName' => 'Season 2',
		'characters' => [
			'max' => [
				'images' => [
					'Season 2' => 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/max-mayfield-stranger-things-season-2-1552398515.jpg',
					'Season 3' => 'https://i.pinimg.com/originals/6e/db/24/6edb24cb3e1e134373b44991b19ac900.jpg',
					'Season 4' => 'https://i.pinimg.com/originals/6e/db/24/6edb24cb3e1e134373b44991b19ac900.jpg',
					'Season 5' => 'https://i.pinimg.com/originals/6e/db/24/6edb24cb3e1e134373b44991b19ac900.jpg'
				],
				'characterLink' => 'http://strangerthings.wikia.com/wiki/Max',
				'characterName' => 'Very Mad Max',
				'content' => [
					$links['dustin'] . ' and ' . $links['lucas'] . ' fall in love with her',
					'But ' . $links['lucas'] . ' somehow wins her heart',
					'Sweet baby that just wants friends',
					'Gaslight Gatekeep Girlboss'
				]
			],
			'billy' => [
				'images' => [
					'Season 2' => 'https://hips.hearstapps.com/digitalspyuk.cdnds.net/17/45/1510058296-dacre-hargrove.png?crop=0.5620608899297423xw:1xh;center,top&resize=480:*',
					'Season 3' => 'https://s3.r29static.com/bin/entry/ac4/x,80/2214044/image.jpg',
					'Season 4' => 'https://s3.r29static.com/bin/entry/ac4/x,80/2214044/image.jpg',
					'Season 5' => 'https://s3.r29static.com/bin/entry/ac4/x,80/2214044/image.jpg'
				],
				'characterLink' => 'http://strangerthings.wikia.com/wiki/Billy',
				'characterName' => 'Billiam',
				'content' => [
					'[Derogatory]',
					'A r*cist',
					$links['max'] . '\'s step-brother',
					'Creepy with ' . $links['karen']
				]
			],
			'bob' => [
				'images' => [
					'Season 2' => 'https://preview.redd.it/nk30b23cnn141.png?auto=webp&s=253edbf76e8aef81098e810cf24ff2e49a687b10'
				],
				'characterLink' => 'http://strangerthings.wikia.com/wiki/Bob_Newby',
				'characterName' => 'Bob Newby: Superhero',
				'content' => [
					'Sweet baby of a man',
					'Loved ' . $links['joyce'] . ' and the kids',
					'Bob The Brain'
				]
			],
			'murray' => [
				'images' => [
					'Season 2' => 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/mh-strangerthingsmurray-1563208137.jpg?crop=0.500xw:1.00xh;0.348xw,0&resize=480:*',
					'Season 3' => 'https://pyxis.nymag.com/v1/imgs/beb/3db/c45ec2f83466cff18546955c2e7a799691-4-Murray-Bauman.rsocial.w1200.jpg',
					'Season 4' => 'https://pyxis.nymag.com/v1/imgs/beb/3db/c45ec2f83466cff18546955c2e7a799691-4-Murray-Bauman.rsocial.w1200.jpg',
					'Season 5' => 'https://pyxis.nymag.com/v1/imgs/beb/3db/c45ec2f83466cff18546955c2e7a799691-4-Murray-Bauman.rsocial.w1200.jpg'
				],
				'characterLink' => 'http://strangerthings.wikia.com/wiki/Bob_Newby',
				'characterName' => 'Bunman',
				'content' => [
					'Calls everyone out on their bullshit',
					'Knows Russian',
					'Kinda sketchy and weird but endearing',
					'Hates children',
					'Balding'
				]
			],
			'erica' => [
				'images' => [
					'Season 2' => 'https://img.fredtvshow.com/img/tv/8760/stranger-things-2meet-the-internets-new-favorite-little-sister.jpg',
					'Season 3' => 'https://media.vanityfair.com/photos/5d1b972f5f741a0008ed0667/3:2/w_1500,h_1000,c_limit/priah-ferguson-stranger-things.jpg',
					'Season 4' => 'https://media.vanityfair.com/photos/5d1b972f5f741a0008ed0667/3:2/w_1500,h_1000,c_limit/priah-ferguson-stranger-things.jpg',
					'Season 5' => 'https://media.vanityfair.com/photos/5d1b972f5f741a0008ed0667/3:2/w_1500,h_1000,c_limit/priah-ferguson-stranger-things.jpg'
				],
				'characterLink' => 'https://strangerthings.fandom.com/wiki/Erica_Sinclair',
				'characterName' => '"Mall Rat"',
				'content' => [
					$links['lucas'] . '\'s younger sister',
					'Rude (in a good way)',
					'Bullies everyone for being nerds',
					'Likes ice cream'
				]
			]
		],
		'episodes' => [
			'one' => [
				'title' => 'MADMAX',
				'rating' => '3',
				'thoughts' => '',
				'quotes' => [
					'I\'m not <em>prostituting my sister</em>'
				]
			],
			'two' => [
				'title' => 'Trick or Treat, Freak',
				'rating' => '4',
				'thoughts' => '',
				'quotes' => [
					'*Scary music* "OH— <em>Jesus</em>"',
					'I specifically didn\'t agree to Winston'
				]
			],
			'three' => [
				'title' => 'The Pollywog',
				'rating' => '5',
				'thoughts' => 'I hated how Mike called Max annoying. El throwing Max off her skateboard',
				'quotes' => [
					'That\'s like saying just because someone\'s from the Death Star doesn\'t make them bad',
					'MR. SINCLAIR'
				]
			],
			'four' => [
				'title' => 'Will the Wise',
				'rating' => '3',
				'thoughts' => '',
				'quotes' => [
					'You say... I go, and I never leave! <em>Nothing ever happens!</em>'
				]
			],
			'five' => [
				'title' => 'Dig Dug',
				'rating' => '2',
				'thoughts' => '',
				'quotes' => [
					''
				]
			],
			'six' => [
				'title' => 'The Spy',
				'rating' => '3',
				'thoughts' => '',
				'quotes' => [
					''
				]
			],
			'seven' => [
				'title' => 'The Lost Sister',
				'rating' => '1',
				'thoughts' => '',
				'quotes' => [
					''
				]
			],
			'eight' => [
				'title' => 'The Mind Flayer',
				'rating' => '4',
				'thoughts' => '',
				'quotes' => [
					'We can\'t just sit here while those <em>things</em> are loose',
					'It\'s like a play on words—" "Okay'
				]
			],
			'nine' => [
				'title' => 'The Gate',
				'rating' => '5',
				'thoughts' => 'Lucas\'s scream',
				'quotes' => [
					'Protecting her… PROTECTING HER?',
					'Maybe if we set this on <em>fire</em>—" "Yeah, <em>that\'s</em> a no',
					'Nancy?',
					'*Screaming* "...I\'m okay"'
				]
			]
		]
	],
	'season-3' => [
		'seasonName' => 'Season 3',
		'characters' => [
			'robin' => [
				'images' => [
					'Season 3' => 'https://s3.r29static.com/bin/entry/bac/x,80/2215810/image.jpg',
					'Season 4' => 'https://s3.r29static.com/bin/entry/bac/x,80/2215810/image.jpg',
					'Season 5' => 'https://s3.r29static.com/bin/entry/bac/x,80/2215810/image.jpg'
				],
				'characterLink' => 'https://strangerthings.fandom.com/wiki/Robin_Buckley',
				'characterName' => 'Tweedledee',
				'content' => [
					'Also gay',
					'Also knows Russian',
					'Was bullied by ' . $links['steve'] . ' in high school (who wasn\'t)',
					'Worked at Scoops Ahoy until the mall collapsed',
					'Had beef with ' . $links['nancy'] . '?',
					'Played soccer',
					'Did drama'
				]
			]
		],
		'episodes' => [
			'one' => [
				'title' => 'Suzie, Do You Copy?',
				'rating' => '3',
				'thoughts' => '',
				'quotes' => [
					'There\'s nothing wrong with Nana'
				]
			],
			'two' => [
				'title' => 'The Mall Rats',
				'rating' => '3',
				'thoughts' => '',
				'quotes' => [
					'It\'s 9:32, where are you',
					'Max has dumped me five times',
					'<em>What\'s wrong with you?</em> You know she\'s not allowed to be here'
				]
			],
			'three' => [
				'title' => 'The Case of the Missing Lifeguard',
				'rating' => '2',
				'thoughts' => '',
				'quotes' => [
					'Is it <em>early</em>, Michael',
					'yEaH'
				]
			],
			'four' => [
				'title' => 'The Sauna Test',
				'rating' => '5',
				'thoughts' => '',
				'quotes' => [
					'I love her and I can\'t lose her again'
				]
			],
			'five' => [
				'title' => 'The Flayed',
				'rating' => '2',
				'thoughts' => '',
				'quotes' => [
					''
				]
			],
			'six' => [
				'title' => 'E Pluribus Unum',
				'rating' => '3',
				'thoughts' => '',
				'quotes' => [
					''
				]
			],
			'seven' => [
				'title' => 'The Bite',
				'rating' => '5',
				'thoughts' => '',
				'quotes' => [
					'She\'s gonna need some <em>backup</em>',
					'Old people?'
				]
			],
			'eight' => [
				'title' => 'The Battle of Starcourt',
				'rating' => '4',
				'thoughts' => '',
				'quotes' => [
					'Told you... physics'
				]
			]
		]
	],
	'season-4' => [
		'seasonName' => 'Season 4',
		'characters' => [
			'eddie' => [
				'images' => [
					'Season 4' => 'https://helios-i.mashable.com/imagery/articles/06rbenK6uYEGGrkDkxeutKy/images-4.fit_lim.size_1400x.v1649776645.jpg',
					'Season 5' => 'https://helios-i.mashable.com/imagery/articles/06rbenK6uYEGGrkDkxeutKy/images-4.fit_lim.size_1400x.v1649776645.jpg'
				],
				'characterLink' => 'https://strangerthings.fandom.com/wiki/Eddie_Munson',
				'characterName' => 'Cool Metal Man',
				'content' => [
					'Seems cool',
					'I hope he\'s not mean'
				]
			],
			'argyle' => [
				'images' => [
					'Season 4' => 'https://m.media-amazon.com/images/M/MV5BOTJhMDA2Y2ItYzljYy00YjU1LThjMTAtNmNjZWU1MzcwYWVkXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_.jpg',
					'Season 5' => 'https://m.media-amazon.com/images/M/MV5BOTJhMDA2Y2ItYzljYy00YjU1LThjMTAtNmNjZWU1MzcwYWVkXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_.jpg'
				],
				'characterLink' => 'https://strangerthings.fandom.com/wiki/Eddie_Munson',
				'characterName' => 'California Knows How To Party',
				'content' => [
					$links['jonathan'] . '\'s new friend',
					'Allegedly introduces ' . $links['jonathan'] . ' to drugs'
				]
			]
		],
		'episodes' => [
			'one' => [
				'title' => 'The Hellfire Club',
				'rating' => '',
				'thoughts' => '',
				'quotes' => [
					''
				]
			],
			'two' => [
				'title' => 'Vecna\'s Curse',
				'rating' => '',
				'thoughts' => '',
				'quotes' => [
					''
				]
			],
			'three' => [
				'title' => 'The Monster and the Superhero',
				'rating' => '',
				'thoughts' => '',
				'quotes' => [
					''
				]
			],
			'four' => [
				'title' => 'Dear Billy',
				'rating' => '',
				'thoughts' => '',
				'quotes' => [
					''
				]
			],
			'five' => [
				'title' => 'The Nina Project',
				'rating' => '',
				'thoughts' => '',
				'quotes' => [
					''
				]
			],
			'six' => [
				'title' => 'The Dive',
				'rating' => '',
				'thoughts' => '',
				'quotes' => [
					''
				]
			],
			'seven' => [
				'title' => 'The Massacre at Hawkins Lab',
				'rating' => '',
				'thoughts' => '',
				'quotes' => [
					''
				]
			],
			'eight' => [
				'title' => 'Papa',
				'rating' => '',
				'thoughts' => '',
				'quotes' => [
					''
				]
			],
			'nine' => [
				'title' => 'The Piggyback',
				'rating' => '',
				'thoughts' => '',
				'quotes' => [
					''
				]
			]
		]
	],
	'season-5' => [
		'seasonName' => 'Season 5',
		'characters' => [],
		'episodes' => []
	]
];

$characterRank = [
	'mike',
	'max',
	'dustin',
	'eleven',
	'joyce',
	'will',
	'bob',
	'hopper',
	'robin',
	'steve',
	'lucas',
	'jonathan',
	'erica',
	'nancy',
	'karen',
	'billy'
];