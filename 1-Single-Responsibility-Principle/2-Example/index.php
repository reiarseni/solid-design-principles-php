<?php

/**
 * Single Responsibility Principle.
 */

require_once 'Article/Article.php';
require_once 'Article/Formatters/FormatterInterface.php';
require_once 'Article/Formatters/JsonFormatter.php';
require_once 'Article/Formatters/XmlFormatter.php';

use Article\Article;
use Article\Formatters\JsonFormatter;
use Article\Formatters\XmlFormatter;

/**
 * In this example, the "\Article\Formatters\JsonFormatter" and "\Article\Formatters\XmlFormatter" Formatters implement
 * the "\Article\Formatters\FormatterInterface" interface.
 * This is useful to ensure that the "format" method is present in all "Formatters".
 *
 * The "format" methods of Formatters expect an instance of "\Article\Article" as a parameter,
 * because these Formatters must return with the "format" method in response the data of an "\Article\Article" in their formats.
 *
 * In this example, we see that each class has only one responsibility.
 */

$article = new Article();

$jsonFormatter = new JsonFormatter();

// return string - Returns the content of the article in JSON format.
echo '<pre>';
var_dump($jsonFormatter->format($article));

$xmlFormatter = new XmlFormatter();

// return string - Returns the content of the article in XML format.
echo '<pre>';
var_dump($xmlFormatter->format($article));
