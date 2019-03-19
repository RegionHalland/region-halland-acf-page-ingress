# Skapa en textruta med plats för ingress högst upp på en sida

## Hur man använder Region Hallands plugin "region-halland-acf-page-ingress"

Nedan följer instruktioner hur du kan använda pluginet "region-halland-acf-page-ingress".


## Användningsområde

Denna plugin skapar en textruta med plats för ingress högst upp på en sida


## Installation och aktivering

```sh
A) Hämta pluginen via Git eller läs in det med Composer
B) Installera Region Hallands plugin i Wordpress plugin folder
C) Aktivera pluginet inifrån Wordpress admin
```


## Hämta hem pluginet via Git

```sh
git clone https://github.com/RegionHalland/region-halland-acf-page-ingress.git
```


## Läs in pluginen via composer

Dessa två delar behöver du lägga in i din composer-fil

Repositories = var pluginen är lagrad, i detta fall på github

```sh
"repositories": [
  {
    "type": "vcs",
    "url": "https://github.com/RegionHalland/region-halland-acf-page-ingress.git"
  },
],
```
Require = anger vilken version av pluginen du vill använda, i detta fall version 1.0.0

OBS! Justera så att du hämtar aktuell version.

```sh
"require": {
  "regionhalland/region-halland-acf-page-ingress": "1.0.0"
},
```


## Visa ingressen på en sida via "Blade"

```sh
<div>
  {{ get_region_halland_acf_page_ingress() }}
</div>
```

## Visa navigation-texten på en sida via "Blade"

OBS! Notera att man i en navigation måste ange även ID för den post man vill visa 

```sh
<div>
  {{ get_region_halland_acf_page_navigation_text(116) }}
</div>
```

## Versionhistorik

### 1.1.1
- Lagt till ID till navigation text

### 1.1.0
- Lagt till en extra kolumn för navigation text

### 1.0.0
- Första version