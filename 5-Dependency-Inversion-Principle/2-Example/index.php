<?php

/**
 * Dependency Inversion Principle.
 */

use Mailing\SendMail;
use Mailing\Mailers\SwiftMailer;
use Mailing\Mailers\PHPMailer;

require_once 'Mailing/Contracts/Mailers/MailerInterface.php';
require_once 'Mailing/Mailers/SwiftMailer.php';
require_once 'Mailing/Mailers/PHPMailer.php';
require_once 'Mailing/SendMail.php';

/**
 * In this example, Mailers "\Mailing\Mailers\SwiftMailer" and "\Mailing\Mailers\PHPMailer" implement the
 * interface/contract "\Mailing\Contracts\Mailier\FormatterInterface".
 *
 * The "\Mailing\SendMail" class expects a dependency class in its constructor that implements the
 * interface/contract "\Mailing\Contracts\Mailier\FormatterInterface".
 *
 * And we can then send the message with the "sendMessage" method of the "\Mailing\SendMail" class.
 *
 * In this example, we therefore see that we are replacing the dependency injected into the constructor of "\Mailing\SendMail".
 */

$swiftMailer = new SwiftMailer();

$sendMail = new SendMail($swiftMailer);
// return string - Returns SwiftMailer's confirmation message.
echo '<pre>';
var_dump($sendMail->sendMessage());

/**
 * We can therefore replace the injected dependency "\Mailing\Mailers\SwiftMailer" by "\Mailing\Mailers\PHPMailer".
 */

$phpMailer = new PHPMailer();

$sendMail = new SendMail($phpMailer);
// return string - Returns PHPMailer's confirmation message.
echo '<pre>';
var_dump($sendMail->sendMessage());
