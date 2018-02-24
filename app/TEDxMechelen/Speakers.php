<?php

namespace App\TEDxMechelen;

class Speakers {
	public function getSpeakers() {
		$speakers = array(
			"bram" => array(
				"firstName" => "Bram",
				"name" => "Bram Vanderborght",
				"image" => "/img/hosts/Bram.png",
				"job" => "Professor robotics @ VUB",
				"quote" => "Revolution in Robotics",
				"linkedin" => "https://www.linkedin.com/in/bramvanderborght/",
				"description" => "<p>Bram Vanderborght is an absolute authority in the field of robotics. The top researcher has a master’s degree in mechanical engineering at the Vrije University of Brussels (VUB) with the highest distinction, and received his doctorate in applied sciences in 2007.</p><p>Vanderborght conducted research at the Italian Institute of Technology in Genova, the Babes-Bolyai University Cluj-Napoca (Romania), and Japanese / French robo- tics laboratory in Tsukuba (Japan).</p>
            <p>Recently, his research on self-healing robots are still getting attention in the national media. His research interests include cognitive and physical human robot interaction, robot-assisted therapy, humanoids and rehabilitation robotics such as exoskeletons.</p>",
			),
			"geert" => array(
				"firstName" => "Geert",
				"name" => "Geert Vanwonterghem",
				"image" => "/img/hosts/Geert.png",
				"quote" => "Revolutionary way to Network via Technology",
				"job" => "Founding partner @ MeetMatch",
				"linkedin" => "https://www.linkedin.com/in/geertvanwonterghem/",
				"description" => "<p>Geert has been many things in his life: a fanatic software developer, an innovation manager, a professor,... But first & fore-most, he is and will always be an entrepreneur. He loves everything about innovation, has done a lot of innovating himself and has spent a lot of time sparring with people on how to organize innovation within their company.</p><p>He also loves Change Projects: to guide people in new directions and see a transformation take place.</p>",
			),
			"lidewij" => array(
				"firstName" => "Lidewij",
				"name" => "Lidewij Nuitten",
				"image" => "/img/hosts/Lidewij.png",
				"quote" => "Revolution in Reporting",
				"job" => "Televisiemaakster @ VRT",
				"linkedin" => "https://www.linkedin.com/in/lidewij-nuitten-0681a546/",
				"description" => "<p>Lidewij Nuitten is a Belgian television maker who made numerous amount of very intriguing series during the past couple of years. Nuitten studied journalism at the Erasmushogeschool Brussel and started her career at VRT where she made the now famous reporter series ‘Iedereen Beroemd’, ‘Altijd rechtdoor’ - in which she walked in a straight line from Limburg until the Belgian coast line - and ‘De Laatstejaars’</p><p>Her most recent work is ‘My Street’. Setup of this project was to interview as many of the people as possible in her very diverse street in Schaarbeek. Armed with 2 cameras she was able to capture the most fantastic stories</p>",
			),
			"nilesh" => array(
				"firstName" => "Nilesh",
				"name" => "Nilesh Mahdu",
				"image" => "/img/hosts/Nilesh.png",
                "quote" => "Revolution in Sound Processing",
				"job" => "Professor @ University Ghent",
				/*"linkedin" => "http://www.linkedin/speaker",*/
				"description" => "<p>Nilesh Madhu is a researcher dedicated to speech technology and sound processing.</p>
            <p>He is an engineer, who teaches at the University of Ghent</p>",
			),
			"rik" => array(
				"firstName" => "Rik",
				"name" => "Rik Vera",
				"image" => "/img/hosts/Rik.png",
                "quote" => "Managers the Day After Tomorrow",
				"job" => "CEO @ Nexxworx",
				"linkedin" => "https://www.linkedin.com/in/rikvera/",
				"description" => "<p>Having gathered years of C-level experience in sales and marketing related functions, he now inspires companies to develop customer-centric strategies fit for a connected world. Rik has given more than 350 keynote sessions around the world, in more than 15 countries, divided over 3 continents, to international pioneers like Assa Abloy, Cisco, Volvo, Swedbank, Telia, Baloise, Mastercard, Mundipharma, Sogeti and Microsoft.</p>
            <p>He is a renowned thought-leader, worldwide keynote speaker, acclaimed author and trusted advisor on the topics of extreme customer-centricity, disruption, business model change, sales, marketing and making companies ready for the Day After Tomorrow.</p>",
			),
			"nico" => array(
				"firstName" => "Nico",
				"name" => "Nico Huybrechts",
				"image" => "/img/hosts/Nico.png",
                "quote" => "DataSHIFT",
				"job" => "CEO @ dataSHIFT",
				"linkedin" => "https://www.linkedin.com/in/nicohuybrechts/",
				"description" => "<p>Entrepreneurial professional with a background in Data Management, Analytics and Business Intelligence. Co-founder of dataSHIFT. Convinced that everything can be measured. People, performance, success. Historically, currently, predictively.</p>
            <p>His personal ambition is to make measuring motivational in order to lead to better business decisions and outcomes.</p>",
			)
		);

		return $speakers;
	}
}