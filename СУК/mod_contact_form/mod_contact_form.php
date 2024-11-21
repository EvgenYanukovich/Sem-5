<?php
defined('_JEXEC') or die;

session_start(); 

JFactory::getDocument()->addStyleSheet(JURI::base() . 'modules/mod_contact_form/assets/style.css');
JFactory::getDocument()->addScript(JURI::base() . 'modules/mod_contact_form/assets/contact.js');

require_once __DIR__ . '/helper.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'name' => $_POST['name'] ?? '',
        'subject' => $_POST['subject'] ?? '',
        'message' => $_POST['message'] ?? '',
        'captcha' => $_POST['captcha'] ?? '',
        'expected_captcha' => $_POST['expected_captcha'] ?? ''
    ];

    $errors = ModContactFormHelper::validateForm($data);

    if (empty($errors)) {
        $sendStatus = ModContactFormHelper::sendEmail($data);
        if ($sendStatus === true) {
            echo 'Сообщение отправлено';
        } else {
            echo 'Ошибка при отправке сообщения';
        }
    } else {
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    }
    exit; 
}

require JModuleHelper::getLayoutPath('mod_contact_form');
?>
