<?php

namespace Pingu\Countries;

enum Country: string
{
    case Afghanistan = 'AF';
    case Albania = 'AL';
    case Algeria = 'DZ';
    case Andorra = 'AD';
    case Angola = 'AO';
    case AntiguaAndBarbuda = 'AG';
    case Argentina = 'AR';
    case Armenia = 'AM';
    case Australia = 'AU';
    case Austria = 'AT';
    case Azerbaijan = 'AZ';
    case Bahamas = 'BS';
    case Bahrain = 'BH';
    case Bangladesh = 'BD';
    case Barbados = 'BB';
    case Belarus = 'BY';
    case Belgium = 'BE';
    case Belize = 'BZ';
    case Benin = 'BJ';
    case Bhutan = 'BT';
    case Bolivia = 'BO';
    case BosniaAndHerzegovina = 'BA';
    case Botswana = 'BW';
    case Brazil = 'BR';
    case Brunei = 'BN';
    case Bulgaria = 'BG';
    case BurkinaFaso = 'BF';
    case Burundi = 'BI';
    case Cambodia = 'KH';
    case Cameroon = 'CM';
    case Canada = 'CA';
    case CapeVerde = 'CV';
    case CentralAfricanRepublic = 'CF';
    case Chad = 'TD';
    case Chile = 'CL';
    case China = 'CN';
    case Colombia = 'CO';
    case Comoros = 'KM';
    case Congo = 'CG';
    case CostaRica = 'CR';
    case Croatia = 'HR';
    case Cuba = 'CU';
    case Cyprus = 'CY';
    case Czechia = 'CZ';
    case Denmark = 'DK';
    case Djibouti = 'DJ';
    case Dominica = 'DM';
    case DominicanRepublic = 'DO';
    case Ecuador = 'EC';
    case Egypt = 'EG';
    case ElSalvador = 'SV';
    case EquatorialGuinea = 'GQ';
    case Eritrea = 'ER';
    case Estonia = 'EE';
    case Eswatini = 'SZ';
    case Ethiopia = 'ET';
    case Fiji = 'FJ';
    case Finland = 'FI';
    case France = 'FR';
    case Gabon = 'GA';
    case Gambia = 'GM';
    case Georgia = 'GE';
    case Germany = 'DE';
    case Ghana = 'GH';
    case Greece = 'GR';
    case Grenada = 'GD';
    case Guatemala = 'GT';
    case Guinea = 'GN';
    case GuineaBissau = 'GW';
    case Guyana = 'GY';
    case Haiti = 'HT';
    case Honduras = 'HN';
    case Hungary = 'HU';
    case Iceland = 'IS';
    case India = 'IN';
    case Indonesia = 'ID';
    case Iran = 'IR';
    case Iraq = 'IQ';
    case Ireland = 'IE';
    case Israel = 'IL';
    case Italy = 'IT';
    case Jamaica = 'JM';
    case Japan = 'JP';
    case Jordan = 'JO';
    case Kazakhstan = 'KZ';
    case Kenya = 'KE';
    case Kiribati = 'KI';
    case NorthKorea = 'KP';
    case SouthKorea = 'KR';
    case Kuwait = 'KW';
    case Kyrgyzstan = 'KG';
    case Laos = 'LA';
    case Latvia = 'LV';
    case Lebanon = 'LB';
    case Lesotho = 'LS';
    case Liberia = 'LR';
    case Libya = 'LY';
    case Liechtenstein = 'LI';
    case Lithuania = 'LT';
    case Luxembourg = 'LU';
    case Madagascar = 'MG';
    case Malawi = 'MW';
    case Malaysia = 'MY';
    case Maldives = 'MV';
    case Mali = 'ML';
    case Malta = 'MT';
    case MarshallIslands = 'MH';
    case Mauritania = 'MR';
    case Mauritius = 'MU';
    case Mexico = 'MX';
    case Micronesia = 'FM';
    case Moldova = 'MD';
    case Monaco = 'MC';
    case Mongolia = 'MN';
    case Montenegro = 'ME';
    case Morocco = 'MA';
    case Mozambique = 'MZ';
    case Myanmar = 'MM';
    case Namibia = 'NA';
    case Nauru = 'NR';
    case Nepal = 'NP';
    case Netherlands = 'NL';
    case NewZealand = 'NZ';
    case Nicaragua = 'NI';
    case Niger = 'NE';
    case Nigeria = 'NG';
    case NorthMacedonia = 'MK';
    case Norway = 'NO';
    case Oman = 'OM';
    case Pakistan = 'PK';
    case Palau = 'PW';
    case Panama = 'PA';
    case PapuaNewGuinea = 'PG';
    case Paraguay = 'PY';
    case Peru = 'PE';
    case Philippines = 'PH';
    case Poland = 'PL';
    case Portugal = 'PT';
    case Qatar = 'QA';
    case Romania = 'RO';
    case Russia = 'RU';
    case Rwanda = 'RW';
    case SaintKittsAndNevis = 'KN';
    case SaintLucia = 'LC';
    case SaintVincentAndTheGrenadines = 'VC';
    case Samoa = 'WS';
    case SanMarino = 'SM';
    case SaoTomeAndPrincipe = 'ST';
    case SaudiArabia = 'SA';
    case Senegal = 'SN';
    case Serbia = 'RS';
    case Seychelles = 'SC';
    case SierraLeone = 'SL';
    case Singapore = 'SG';
    case Slovakia = 'SK';
    case Slovenia = 'SI';
    case SolomonIslands = 'SB';
    case Somalia = 'SO';
    case SouthAfrica = 'ZA';
    case SouthSudan = 'SS';
    case Spain = 'ES';
    case SriLanka = 'LK';
    case Sudan = 'SD';
    case Suriname = 'SR';
    case Sweden = 'SE';
    case Switzerland = 'CH';
    case Syria = 'SY';
    case Taiwan = 'TW';
    case Tajikistan = 'TJ';
    case Tanzania = 'TZ';
    case Thailand = 'TH';
    case TimorLeste = 'TL';
    case Togo = 'TG';
    case Tonga = 'TO';
    case TrinidadAndTobago = 'TT';
    case Tunisia = 'TN';
    case Turkey = 'TR';
    case Turkmenistan = 'TM';
    case Tuvalu = 'TV';
    case Uganda = 'UG';
    case Ukraine = 'UA';
    case UnitedArabEmirates = 'AE';
    case UnitedKingdom = 'GB';
    case UnitedStates = 'US';
    case Uruguay = 'UY';
    case Uzbekistan = 'UZ';
    case Vanuatu = 'VU';
    case VaticanCity = 'VA';
    case Venezuela = 'VE';
    case Vietnam = 'VN';
    case Yemen = 'YE';
    case Zambia = 'ZM';
    case Zimbabwe = 'ZW';

    /**
     * Get Iso code for a country.
     */
    public function getIsoCode(): string
    {
        return $this->value;
    }

    /**
     * Get Iso code for a country in lower case.
     */
    public function getIsoCodeLowerCase(): string
    {
        return strtolower($this->value);
    }

    /**
     * Get the country name in English.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get a human-readable version of the enum name.
     *
     * This inserts a space before each uppercase letter (except the first one),
     * converting values like "SaintKittsAndNevis" into "Saint Kitts And Nevis".
     *
     * Regex explanation:
     *   (?<!^)  → Negative lookbehind to ensure we are not at the start of the string
     *   ([A-Z]) → Match any uppercase letter
     *   ' $1'   → Replace the match with a space followed by the letter
     */
    public function getFormattedName(): string
    {
        $name = preg_replace('/(?<!^)([A-Z])/', ' $1', $this->name);

        return str_replace(' And ', ' and ', $name);
    }

    /**
     * Return all countries as an array of enum cases.
     *
     * @return array<\App\Enums\Country>
     */
    public static function all(): array
    {
        return self::cases();
    }

    /**
     * Lookup by ISO code (case-insensitive).
     *
     * @throws \ValueError if ISO code not found.
     */
    public static function fromIso(string $isoCode): self
    {
        $isoCode = strtoupper($isoCode);

        return self::from($isoCode);
    }

    /**
     * Lookup by name (case-insensitive).
     *
     * @throws \InvalidArgumentException if name not found.
     */
    public static function fromName(string $name): self
    {
        foreach (self::cases() as $case) {
            if (strcasecmp($case->getName(), $name) === 0) {
                return $case;
            }
        }

        throw new \InvalidArgumentException("Country with name '{$name}' not found.");
    }

    /**
     * For dropdowns: return [ 'DE' => 'Germany', ... ].
     *
     * @return array<string,string>
     */
    public static function dropdown(): array
    {
        $list = [];
        foreach (self::cases() as $case) {
            $list[$case->getIsoCode()] = $case->getFormattedName();
        }
        return $list;
    }

    /**
     * For dropdowns: return [ 'de' => 'Germany', ... ].
     *
     * @return array<string,string>
     */
    public static function dropdownLowercase(): array
    {
        $list = [];
        foreach (self::cases() as $case) {
            $list[$case->getIsoCodeLowerCase()] = $case->getFormattedName();
        }
        return $list;
    }
}
