# TEDx MEchelen

## Gulp

Om gulp te kunnen gebruiken, moet je zien dat deze eerst geïnstalleerd is. Dit doe je door het commando

>sudo npm install gulp-cli -g 

uit te voeren in je terminal.

## SASS

Run hier het commando

>npm install

Hierna worden alle node-modules die gedefinieerd zijn in de **package.json** binnengehaald.

## Run Gulp

Gulp kan je gemakkelijk starten door het commando **gulp**.
>NOTE: je kan dit enkel runnen in de map waar de **gulpfile.js** staat.

## Schrijf SASS

Om SASS te schrijven, schrijf je in een scss file, die zich in de **gulp-resources** map bevindt.

In SASS kan je werken met variabelen. Deze stockeer je in een aparte file onder de map **components** als volgt

> $color: #kleurcode;

Deze file moet je implementeren via de volgende lijn code

> @import "components/_filename.scss";

Hierna kan je alle gedefinieerde variabelen gebruiken.

Have fun coding!