<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Twig;

use AppBundle\Utils\Markdown;
use Symfony\Component\Intl\Intl;
use \NumberFormatter;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * This Twig extension adds a new 'md2html' filter to easily transform Markdown
 * contents into HTML contents inside Twig templates.
 * See http://symfony.com/doc/current/cookbook/templating/twig_extension.html
 *
 * In addition to creating the Twig extension class, before using it you must also
 * register it as a service. See app/config/services.yml file for details.
 *
 * @author Ryan Weaver <weaverryan@gmail.com>
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 * @author Julien ITARD <julienitard@gmail.com>
 */
class AppExtension extends \Twig_Extension
{

    /**
     * @var Markdown
     */
    private $parser;

    /**
     * @var array
     */
    private $locales;
    private $currencies;
    private $session;

    public function __construct(Markdown $parser, $locales, $currencies, $session)
    {
        $this->parser = $parser;
        $this->locales = $locales;
        $this->currencies = $currencies;
        $this->session = $session;
    }

    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('md2html', [$this, 'markdownToHtml'], ['is_safe' => ['html']]),
            new \Twig_SimpleFilter("convertcurrency", [$this, 'convertCurrency']),
            new \Twig_SimpleFilter("currencysymbol", [$this, 'getCurrencySymbol'])
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('locales', [$this, 'getLocales']),
            new \Twig_SimpleFunction('currencies', [$this, 'getCurrencies']),
        ];
    }

    /**
     * Transforms the given Markdown content into HTML content.
     *
     *  @param string $content
     *
     * @return string
     */
    public function markdownToHtml($content)
    {
        return $this->parser->toHtml($content);
    }

    /**
     * Takes the list of codes of the locales (languages) enabled in the
     * application and returns an array with the name of each locale written
     * in its own language (e.g. English, Français, Español, etc.)
     *
     * @return array
     */
    public function getLocales()
    {
        $localeCodes = explode('|', $this->locales);

        $locales = [];
        foreach ($localeCodes as $localeCode) {
            $locales[] = ['code' => $localeCode, 'name' => Intl::getLocaleBundle()->getLocaleName($localeCode, $localeCode)];
        }

        return $locales;
    }

    public function getCurrencySymbol($currency)
    { 
        if($currency) {
        $locale = 'en'; //browser or user locale
        $formatter = new NumberFormatter($locale, NumberFormatter::CURRENCY);
        // Prevent any extra spaces, etc. in formatted currency
//        $formatter->setPattern('¤');
        // Prevent significant digits (e.g. cents) in formatted currency
        $formatter->setAttribute(NumberFormatter::ROUNDING_MODE, 0);

        // Get the formatted price for '0'
        $formattedPrice = $formatter->formatCurrency(0, $currency);

        // Strip out the zero digit to get the currency symbol
        $zero = $formatter->getSymbol(NumberFormatter::ZERO_DIGIT_SYMBOL);
        $currencySymbol = str_replace($zero, '', $formattedPrice);
        $symbol = str_replace('.', '', $currencySymbol);
        
        return $symbol;
        } else {
            return "CFA";
        }
    }

    /**
     * Takes the list of codes of the locales (languages) enabled in the
     * application and returns an array with the name of each locale written
     * in its own language (e.g. English, Français, Español, etc.)
     *
     * @return array
     */
    public function getCurrencies()
    {
        $appCurrencies = explode('|', $this->currencies);

        $currencies = [];
        foreach ($appCurrencies as $currency) {
            $currencies[] = ['code' => $currency, 'symbol' => $this->getCurrencySymbol($currency)];
        }

        return $currencies;
    }

    public function convertCurrency($amount)
    {
//        print_r(isset($this->session->get('currency')));die();
        if ($this->session->get('currency') !== NULL) {
            $url = "https://www.google.com/finance/converter?a=$amount&from=XOF&to=" . $this->session->get('currency');
            $data = file_get_contents($url);
            preg_match("/<span class=bld>(.*)<\/span>/", $data, $converted);
            $converted = preg_replace("/[^0-9.]/", "", $converted[1]);

            return round($converted, 3);
        } else {
            return $amount;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        // the name of the Twig extension must be unique in the application. Consider
        // using 'app.extension' if you only have one Twig extension in your application.
        return 'app.extension';
    }

}
