<?php

use Illuminate\Database\Seeder;

class PaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $paises=[
                ['codigo'=>'ABW', 'nombre'=>'Aruba', 'continente'=>'North America'],
                ['codigo'=>'AFG', 'nombre'=>'Afghanistan', 'continente'=>'Asia'],
                ['codigo'=>'AGO', 'nombre'=>'Angola', 'continente'=>'Africa'],
                ['codigo'=>'AIA', 'nombre'=>'Anguilla', 'continente'=>'North America'],
                ['codigo'=>'ALB', 'nombre'=>'Albania', 'continente'=>'Europe'],
                ['codigo'=>'AND', 'nombre'=>'Andorra', 'continente'=>'Europe'],
                ['codigo'=>'ANT', 'nombre'=>'Netherlands Antilles', 'continente'=>'North America'],
                ['codigo'=>'ARE', 'nombre'=>'United Arab Emirates', 'continente'=>'Asia'],
                ['codigo'=>'ARG', 'nombre'=>'Argentina', 'continente'=>'South America'],
                ['codigo'=>'ARM', 'nombre'=>'Armenia', 'continente'=>'Asia'],
                ['codigo'=>'ASM', 'nombre'=>'American Samoa', 'continente'=>'Oceania'],
                ['codigo'=>'ATA', 'nombre'=>'Antarctica', 'continente'=>'Antarctica'],
                ['codigo'=>'ATF', 'nombre'=>'French Southernterritories', 'continente'=>'Antarctica'],
                ['codigo'=>'ATG', 'nombre'=>'Antigua and Barbuda', 'continente'=>'North America'],
                ['codigo'=>'AUS', 'nombre'=>'Australia', 'continente'=>'Oceania'],
                ['codigo'=>'AUT', 'nombre'=>'Austria', 'continente'=>'Europe'],
                ['codigo'=>'AZE', 'nombre'=>'Azerbaijan', 'continente'=>'Asia'],
                ['codigo'=>'BDI', 'nombre'=>'Burundi', 'continente'=>'Africa'],
                ['codigo'=>'BEL', 'nombre'=>'Belgium', 'continente'=>'Europe'],
                ['codigo'=>'BEN', 'nombre'=>'Benin', 'continente'=>'Africa'],
                ['codigo'=>'BFA', 'nombre'=>'Burkina Faso', 'continente'=>'Africa'],
                ['codigo'=>'BGD', 'nombre'=>'Bangladesh', 'continente'=>'Asia'],
                ['codigo'=>'BGR', 'nombre'=>'Bulgaria', 'continente'=>'Europe'],
                ['codigo'=>'BHR', 'nombre'=>'Bahrain', 'continente'=>'Asia'],
                ['codigo'=>'BHS', 'nombre'=>'Bahamas', 'continente'=>'North America'],
                ['codigo'=>'BIH', 'nombre'=>'Bosniaand Herzegovina', 'continente'=>'Europe'],
                ['codigo'=>'BLR', 'nombre'=>'Belarus', 'continente'=>'Europe'],
                ['codigo'=>'BLZ', 'nombre'=>'Belize', 'continente'=>'North America'],
                ['codigo'=>'BMU', 'nombre'=>'Bermuda', 'continente'=>'North America'],
                ['codigo'=>'BOL', 'nombre'=>'Bolivia', 'continente'=>'South America'],
                ['codigo'=>'BRA', 'nombre'=>'Brazil', 'continente'=>'South America'],
                ['codigo'=>'BRB', 'nombre'=>'Barbados', 'continente'=>'North America'],
                ['codigo'=>'BRN', 'nombre'=>'Brunei', 'continente'=>'Asia'],
                ['codigo'=>'BTN', 'nombre'=>'Bhutan', 'continente'=>'Asia'],
                ['codigo'=>'BVT', 'nombre'=>'BouvetIsland', 'continente'=>'Antarctica'],
                ['codigo'=>'BWA', 'nombre'=>'Botswana', 'continente'=>'Africa'],
                ['codigo'=>'CAF', 'nombre'=>'Central African Republic', 'continente'=>'Africa'],
                ['codigo'=>'CAN', 'nombre'=>'Canada', 'continente'=>'North America'],
                ['codigo'=>'CCK', 'nombre'=>'Cocos (Keeling) Islands', 'continente'=>'Oceania'],
                ['codigo'=>'CHE', 'nombre'=>'Switzerland', 'continente'=>'Europe'],
                ['codigo'=>'CHL', 'nombre'=>'Chile', 'continente'=>'South America'],
                ['codigo'=>'CHN', 'nombre'=>'China', 'continente'=>'Asia'],
                ['codigo'=>'CIV', 'nombre'=>'Coted Ivoire', 'continente'=>'Africa'],
                ['codigo'=>'CMR', 'nombre'=>'Cameroon', 'continente'=>'Africa'],
                ['codigo'=>'COD', 'nombre'=>'Cong', 'continente'=>'The Democratic Republic of the'],
                ['codigo'=>'COG', 'nombre'=>'Congo', 'continente'=>'Africa'],
                ['codigo'=>'COK', 'nombre'=>'Cook Islands', 'continente'=>'Oceania'],
                ['codigo'=>'COL', 'nombre'=>'Colombia', 'continente'=>'South America'],
                ['codigo'=>'COM', 'nombre'=>'Comoros', 'continente'=>'Africa'],
                ['codigo'=>'CPV', 'nombre'=>'Cape Verde', 'continente'=>'Africa'],
                ['codigo'=>'CRI', 'nombre'=>'Costa Rica', 'continente'=>'North America'],
                ['codigo'=>'CUB', 'nombre'=>'Cuba', 'continente'=>'North America'],
                ['codigo'=>'CXR', 'nombre'=>'Christmas Island', 'continente'=>'Oceania'],
                ['codigo'=>'CYM', 'nombre'=>'Cayman Islands', 'continente'=>'North America'],
                ['codigo'=>'CYP', 'nombre'=>'Cyprus', 'continente'=>'Asia'],
                ['codigo'=>'CZE', 'nombre'=>'Czech Republic', 'continente'=>'Europe'],
                ['codigo'=>'DEU', 'nombre'=>'Germany', 'continente'=>'Europe'],
                ['codigo'=>'DJI', 'nombre'=>'Djibouti', 'continente'=>'Africa'],
                ['codigo'=>'DMA', 'nombre'=>'Dominica', 'continente'=>'North America'],
                ['codigo'=>'DNK', 'nombre'=>'Denmark', 'continente'=>'Europe'],
                ['codigo'=>'DOM', 'nombre'=>'Dominican Republic', 'continente'=>'North America'],
                ['codigo'=>'DZA', 'nombre'=>'Algeria', 'continente'=>'Africa'],
                ['codigo'=>'ECU', 'nombre'=>'Ecuador', 'continente'=>'South America'],
                ['codigo'=>'EGY', 'nombre'=>'Egypt', 'continente'=>'Africa'],
                ['codigo'=>'ERI', 'nombre'=>'Eritrea', 'continente'=>'Africa'],
                ['codigo'=>'ESH', 'nombre'=>'Western Sahara', 'continente'=>'Africa'],
                ['codigo'=>'ESP', 'nombre'=>'Spain', 'continente'=>'Europe'],
                ['codigo'=>'EST', 'nombre'=>'Estonia', 'continente'=>'Europe'],
                ['codigo'=>'ETH', 'nombre'=>'Ethiopia', 'continente'=>'Africa'],
                ['codigo'=>'FIN', 'nombre'=>'Finland', 'continente'=>'Europe'],
                ['codigo'=>'FJI', 'nombre'=>'Fiji Islands', 'continente'=>'Oceania'],
                ['codigo'=>'FLK', 'nombre'=>'Falkland Islands', 'continente'=>'South America'],
                ['codigo'=>'FRA', 'nombre'=>'France', 'continente'=>'Europe'],
                ['codigo'=>'FRO', 'nombre'=>'Faroe Islands', 'continente'=>'Europe'],
                ['codigo'=>'FSM', 'nombre'=>'Micronesia', 'continente'=>'Federated States of Micronesia'],
                ['codigo'=>'GAB', 'nombre'=>'Gabon', 'continente'=>'Africa'],
                ['codigo'=>'GBR', 'nombre'=>'United Kingdom', 'continente'=>'Europe'],
                ['codigo'=>'GEO', 'nombre'=>'Georgia', 'continente'=>'Asia'],
                ['codigo'=>'GHA', 'nombre'=>'Ghana', 'continente'=>'Africa'],
                ['codigo'=>'GIB', 'nombre'=>'Gibraltar', 'continente'=>'Europe'],
                ['codigo'=>'GIN', 'nombre'=>'Guinea', 'continente'=>'Africa'],
                ['codigo'=>'GLP', 'nombre'=>'Guadeloupe', 'continente'=>'North America'],
                ['codigo'=>'GMB', 'nombre'=>'Gambia', 'continente'=>'Africa'],
                ['codigo'=>'GNB', 'nombre'=>'Guinea-Bissau', 'continente'=>'Africa'],
                ['codigo'=>'GNQ', 'nombre'=>'Equatorial Guinea', 'continente'=>'Africa'],
                ['codigo'=>'GRC', 'nombre'=>'Greece', 'continente'=>'Europe'],
                ['codigo'=>'GRD', 'nombre'=>'Grenada', 'continente'=>'North America'],
                ['codigo'=>'GRL', 'nombre'=>'Greenland', 'continente'=>'North America'],
                ['codigo'=>'GTM', 'nombre'=>'Guatemala', 'continente'=>'North America'],
                ['codigo'=>'GUF', 'nombre'=>'French Guiana', 'continente'=>'South America'],
                ['codigo'=>'GUM', 'nombre'=>'Guam', 'continente'=>'Oceania'],
                ['codigo'=>'GUY', 'nombre'=>'Guyana', 'continente'=>'South America'],
                ['codigo'=>'HKG', 'nombre'=>'Hong Kong', 'continente'=>'Asia'],
                ['codigo'=>'HMD', 'nombre'=>'Heard Island and McDonald Islands', 'continente'=>'Antarctica'],
                ['codigo'=>'HND', 'nombre'=>'Honduras', 'continente'=>'North America'],
                ['codigo'=>'HRV', 'nombre'=>'Croatia', 'continente'=>'Europe'],
                ['codigo'=>'HTI', 'nombre'=>'Haiti', 'continente'=>'North America'],
                ['codigo'=>'HUN', 'nombre'=>'Hungary', 'continente'=>'Europe'],
                ['codigo'=>'IDN', 'nombre'=>'Indonesia', 'continente'=>'Asia'],
                ['codigo'=>'IND', 'nombre'=>'India', 'continente'=>'Asia'],
                ['codigo'=>'IOT', 'nombre'=>'British Indian Ocean Territory', 'continente'=>'Africa'],
                ['codigo'=>'IRL', 'nombre'=>'Ireland', 'continente'=>'Europe'],
                ['codigo'=>'IRN', 'nombre'=>'Iran', 'continente'=>'Asia'],
                ['codigo'=>'IRQ', 'nombre'=>'Iraq', 'continente'=>'Asia'],
                ['codigo'=>'ISL', 'nombre'=>'Iceland', 'continente'=>'Europe'],
                ['codigo'=>'ISR', 'nombre'=>'Israel', 'continente'=>'Asia'],
                ['codigo'=>'ITA', 'nombre'=>'Italy', 'continente'=>'Europe'],
                ['codigo'=>'JAM', 'nombre'=>'Jamaica', 'continente'=>'North America'],
                ['codigo'=>'JOR', 'nombre'=>'Jordan', 'continente'=>'Asia'],
                ['codigo'=>'JPN', 'nombre'=>'Japan', 'continente'=>'Asia'],
                ['codigo'=>'KAZ', 'nombre'=>'Kazakstan', 'continente'=>'Asia'],
                ['codigo'=>'KEN', 'nombre'=>'Kenya', 'continente'=>'Africa'],
                ['codigo'=>'KGZ', 'nombre'=>'Kyrgyzstan', 'continente'=>'Asia'],
                ['codigo'=>'KHM', 'nombre'=>'Cambodia', 'continente'=>'Asia'],
                ['codigo'=>'KIR', 'nombre'=>'Kiribati', 'continente'=>'Oceania'],
                ['codigo'=>'KNA', 'nombre'=>'Saint Kittsand Nevis', 'continente'=>'North America'],
                ['codigo'=>'KOR', 'nombre'=>'South Korea', 'continente'=>'Asia'],
                ['codigo'=>'KWT', 'nombre'=>'Kuwait', 'continente'=>'Asia'],
                ['codigo'=>'LAO', 'nombre'=>'Laos', 'continente'=>'Asia'],
                ['codigo'=>'LBN', 'nombre'=>'Lebanon', 'continente'=>'Asia'],
                ['codigo'=>'LBR', 'nombre'=>'Liberia', 'continente'=>'Africa'],
                ['codigo'=>'LBY', 'nombre'=>'Libyan Arab Jamahiriya', 'continente'=>'Africa'],
                ['codigo'=>'LCA', 'nombre'=>'Saint Lucia', 'continente'=>'North America'],
                ['codigo'=>'LIE', 'nombre'=>'Liechtenstein', 'continente'=>'Europe'],
                ['codigo'=>'LKA', 'nombre'=>'Sri Lanka', 'continente'=>'Asia'],
                ['codigo'=>'LSO', 'nombre'=>'Lesotho', 'continente'=>'Africa'],
                ['codigo'=>'LTU', 'nombre'=>'Lithuania', 'continente'=>'Europe'],
                ['codigo'=>'LUX', 'nombre'=>'Luxembourg', 'continente'=>'Europe'],
                ['codigo'=>'LVA', 'nombre'=>'Latvia', 'continente'=>'Europe'],
                ['codigo'=>'MAC', 'nombre'=>'Macao', 'continente'=>'Asia'],
                ['codigo'=>'MAR', 'nombre'=>'Morocco', 'continente'=>'Africa'],
                ['codigo'=>'MCO', 'nombre'=>'Monaco', 'continente'=>'Europe'],
                ['codigo'=>'MDA', 'nombre'=>'Moldova', 'continente'=>'Europe'],
                ['codigo'=>'MDG', 'nombre'=>'Madagascar', 'continente'=>'Africa'],
                ['codigo'=>'MDV', 'nombre'=>'Maldives', 'continente'=>'Asia'],
                ['codigo'=>'MEX', 'nombre'=>'Mexico', 'continente'=>'North America'],
                ['codigo'=>'MHL', 'nombre'=>'Marshall Islands', 'continente'=>'Oceania'],
                ['codigo'=>'MKD', 'nombre'=>'Macedonia', 'continente'=>'Europe'],
                ['codigo'=>'MLI', 'nombre'=>'Mali', 'continente'=>'Africa'],
                ['codigo'=>'MLT', 'nombre'=>'Malta', 'continente'=>'Europe'],
                ['codigo'=>'MMR', 'nombre'=>'Myanmar', 'continente'=>'Asia'],
                ['codigo'=>'MNG', 'nombre'=>'Mongolia', 'continente'=>'Asia'],
                ['codigo'=>'MNP', 'nombre'=>'Northern Mariana Islands', 'continente'=>'Oceania'],
                ['codigo'=>'MOZ', 'nombre'=>'Mozambique', 'continente'=>'Africa'],
                ['codigo'=>'MRT', 'nombre'=>'Mauritania', 'continente'=>'Africa'],
                ['codigo'=>'MSR', 'nombre'=>'Montserrat', 'continente'=>'North America'],
                ['codigo'=>'MTQ', 'nombre'=>'Martinique', 'continente'=>'North America'],
                ['codigo'=>'MUS', 'nombre'=>'Mauritius', 'continente'=>'Africa'],
                ['codigo'=>'MWI', 'nombre'=>'Malawi', 'continente'=>'Africa'],
                ['codigo'=>'MYS', 'nombre'=>'Malaysia', 'continente'=>'Asia'],
                ['codigo'=>'MYT', 'nombre'=>'Mayotte', 'continente'=>'Africa'],
                ['codigo'=>'NAM', 'nombre'=>'Namibia', 'continente'=>'Africa'],
                ['codigo'=>'NCL', 'nombre'=>'New Caledonia', 'continente'=>'Oceania'],
                ['codigo'=>'NER', 'nombre'=>'Niger', 'continente'=>'Africa'],
                ['codigo'=>'NFK', 'nombre'=>'Norfolk Island', 'continente'=>'Oceania'],
                ['codigo'=>'NGA', 'nombre'=>'Nigeria', 'continente'=>'Africa'],
                ['codigo'=>'NIC', 'nombre'=>'Nicaragua', 'continente'=>'North America'],
                ['codigo'=>'NIU', 'nombre'=>'Niue', 'continente'=>'Oceania'],
                ['codigo'=>'NLD', 'nombre'=>'Netherlands', 'continente'=>'Europe'],
                ['codigo'=>'NOR', 'nombre'=>'Norway', 'continente'=>'Europe'],
                ['codigo'=>'NPL', 'nombre'=>'Nepal', 'continente'=>'Asia'],
                ['codigo'=>'NRU', 'nombre'=>'Nauru', 'continente'=>'Oceania'],
                ['codigo'=>'NZL', 'nombre'=>'NewZealand', 'continente'=>'Oceania'],
                ['codigo'=>'OMN', 'nombre'=>'Oman', 'continente'=>'Asia'],
                ['codigo'=>'PAK', 'nombre'=>'Pakistan', 'continente'=>'Asia'],
                ['codigo'=>'PAN', 'nombre'=>'Panama', 'continente'=>'North America'],
                ['codigo'=>'PCN', 'nombre'=>'Pitcairn', 'continente'=>'Oceania'],
                ['codigo'=>'PER', 'nombre'=>'Peru', 'continente'=>'South America'],
                ['codigo'=>'PHL', 'nombre'=>'Philippines', 'continente'=>'Asia'],
                ['codigo'=>'PLW', 'nombre'=>'Palau', 'continente'=>'Oceania'],
                ['codigo'=>'PNG', 'nombre'=>'Papua New Guinea', 'continente'=>'Oceania'],
                ['codigo'=>'POL', 'nombre'=>'Poland', 'continente'=>'Europe'],
                ['codigo'=>'PRI', 'nombre'=>'Puerto Rico', 'continente'=>'North America'],
                ['codigo'=>'PRK', 'nombre'=>'North Korea', 'continente'=>'Asia'],
                ['codigo'=>'PRT', 'nombre'=>'Portugal', 'continente'=>'Europe'],
                ['codigo'=>'PRY', 'nombre'=>'Paraguay', 'continente'=>'South America'],
                ['codigo'=>'PSE', 'nombre'=>'Palestine', 'continente'=>'Asia'],
                ['codigo'=>'PYF', 'nombre'=>'French Polynesia', 'continente'=>'Oceania'],
                ['codigo'=>'QAT', 'nombre'=>'Qatar', 'continente'=>'Asia'],
                ['codigo'=>'REU', 'nombre'=>'Reunion', 'continente'=>'Africa'],
                ['codigo'=>'ROM', 'nombre'=>'Romania', 'continente'=>'Europe'],
                ['codigo'=>'RUS', 'nombre'=>'Russian Federation', 'continente'=>'Europe'],
                ['codigo'=>'RWA', 'nombre'=>'Rwanda', 'continente'=>'Africa'],
                ['codigo'=>'SAU', 'nombre'=>'Saudi Arabia', 'continente'=>'Asia'],
                ['codigo'=>'SDN', 'nombre'=>'Sudan', 'continente'=>'Africa'],
                ['codigo'=>'SEN', 'nombre'=>'Senegal', 'continente'=>'Africa'],
                ['codigo'=>'SGP', 'nombre'=>'Singapore', 'continente'=>'Asia'],
                ['codigo'=>'SGS', 'nombre'=>'South Georgia and the South Sandwich Islands', 'continente'=>'Antarctica'],
                ['codigo'=>'SHN', 'nombre'=>'Saint Helena', 'continente'=>'Africa'],
                ['codigo'=>'SJM', 'nombre'=>'Svalbardand JanMayen', 'continente'=>'Europe'],
                ['codigo'=>'SLB', 'nombre'=>'Solomon Islands', 'continente'=>'Oceania'],
                ['codigo'=>'SLE', 'nombre'=>'Sierra Leone', 'continente'=>'Africa'],
                ['codigo'=>'SLV', 'nombre'=>'El Salvador', 'continente'=>'North America'],
                ['codigo'=>'SMR', 'nombre'=>'San Marino', 'continente'=>'Europe'],
                ['codigo'=>'SOM', 'nombre'=>'Somalia', 'continente'=>'Africa'],
                ['codigo'=>'SPM', 'nombre'=>'Saint Pierre and Miquelon', 'continente'=>'North America'],
                ['codigo'=>'STP', 'nombre'=>'Sao Tome and Principe', 'continente'=>'Africa'],
                ['codigo'=>'SUR', 'nombre'=>'Suriname', 'continente'=>'South America'],
                ['codigo'=>'SVK', 'nombre'=>'Slovakia', 'continente'=>'Europe'],
                ['codigo'=>'SVN', 'nombre'=>'Slovenia', 'continente'=>'Europe'],
                ['codigo'=>'SWE', 'nombre'=>'Sweden', 'continente'=>'Europe'],
                ['codigo'=>'SWZ', 'nombre'=>'Swaziland', 'continente'=>'Africa'],
                ['codigo'=>'SYC', 'nombre'=>'Seychelles', 'continente'=>'Africa'],
                ['codigo'=>'SYR', 'nombre'=>'Syria', 'continente'=>'Asia'],
                ['codigo'=>'TCA', 'nombre'=>'Turks and Caicos Islands', 'continente'=>'North America'],
                ['codigo'=>'TCD', 'nombre'=>'Chad', 'continente'=>'Africa'],
                ['codigo'=>'TGO', 'nombre'=>'Togo', 'continente'=>'Africa'],
                ['codigo'=>'THA', 'nombre'=>'Thailand', 'continente'=>'Asia'],
                ['codigo'=>'TJK', 'nombre'=>'Tajikistan', 'continente'=>'Asia'],
                ['codigo'=>'TKL', 'nombre'=>'Tokelau', 'continente'=>'Oceania'],
                ['codigo'=>'TKM', 'nombre'=>'Turkmenistan', 'continente'=>'Asia'],
                ['codigo'=>'TMP', 'nombre'=>'EastTimor', 'continente'=>'Asia'],
                ['codigo'=>'TON', 'nombre'=>'Tonga', 'continente'=>'Oceania'],
                ['codigo'=>'TTO', 'nombre'=>'Trinidad and Tobago', 'continente'=>'North America'],
                ['codigo'=>'TUN', 'nombre'=>'Tunisia', 'continente'=>'Africa'],
                ['codigo'=>'TUR', 'nombre'=>'Turkey', 'continente'=>'Asia'],
                ['codigo'=>'TUV', 'nombre'=>'Tuvalu', 'continente'=>'Oceania'],
                ['codigo'=>'TWN', 'nombre'=>'Taiwan', 'continente'=>'Asia'],
                ['codigo'=>'TZA', 'nombre'=>'Tanzania', 'continente'=>'Africa'],
                ['codigo'=>'UGA', 'nombre'=>'Uganda', 'continente'=>'Africa'],
                ['codigo'=>'UKR', 'nombre'=>'Ukraine', 'continente'=>'Europe'],
                ['codigo'=>'UMI', 'nombre'=>'United States Minor Outlying Islands', 'continente'=>'Oceania'],
                ['codigo'=>'URY', 'nombre'=>'Uruguay', 'continente'=>'South America'],
                ['codigo'=>'USA', 'nombre'=>'UnitedStates', 'continente'=>'North America'],
                ['codigo'=>'UZB', 'nombre'=>'Uzbekistan', 'continente'=>'Asia'],
                ['codigo'=>'VAT', 'nombre'=>'HolySee (VaticanCityState)', 'continente'=>'Europe'],
                ['codigo'=>'VCT', 'nombre'=>'Saint Vincent and the Grenadines', 'continente'=>'North America'],
                ['codigo'=>'VEN', 'nombre'=>'Venezuela', 'continente'=>'South America'],
                ['codigo'=>'VGB', 'nombre'=>'VirginIsland', 'continente'=>'British'],
                ['codigo'=>'VIR', 'nombre'=>'VirginIsland', 'continente'=>'U.S.'],
                ['codigo'=>'VNM', 'nombre'=>'Vietnam', 'continente'=>'Asia'],
                ['codigo'=>'VUT', 'nombre'=>'Vanuatu', 'continente'=>'Oceania'],
                ['codigo'=>'WLF', 'nombre'=>'Wallis and Futuna', 'continente'=>'Oceania'],
                ['codigo'=>'WSM', 'nombre'=>'Samoa', 'continente'=>'Oceania'],
                ['codigo'=>'YEM', 'nombre'=>'Yemen', 'continente'=>'Asia'],
                ['codigo'=>'YUG', 'nombre'=>'Yugoslavia', 'continente'=>'Europe'],
                ['codigo'=>'ZAF', 'nombre'=>'South Africa', 'continente'=>'Africa'],
                ['codigo'=>'ZMB', 'nombre'=>'Zambia', 'continente'=>'Africa'],
                ['codigo'=>'ZWE', 'nombre'=>'Zimbabwe', 'continente'=>'Africa'],
                ['codigo'=>'NA', 'nombre'=>'No Aplica', 'continente'=>'No Aplica'],
        ];

        foreach ($paises as $pais) {
          DB::table('paises')->insert([$pais]);
        }
    }
}
