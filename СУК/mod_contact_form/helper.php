<?php
defined('_JEXEC') or die;

class ModContactFormHelper {
    public static function validateForm($data) {
        $errors = [];

        if (empty($data['name'])) {
            $errors[] = 'Поле имени не должно быть пустым';
        }
        if (empty($data['subject'])) {
            $errors[] = 'Поле темы не должно быть пустым';
        }
        if (empty($data['message'])) {
            $errors[] = 'Поле сообщения не должно быть пустым';
        }
        if (!isset($data['captcha']) || $data['captcha'] != $data['expected_captcha']) {
            $errors[] = 'Неправильный ответ на капчу';
        }

        return $errors;
    }

    public static function sendEmail($data) {
        $mailer = JFactory::getMailer();
        $config = JFactory::getConfig();
        
        $from = $config->get('mailfrom');
        $fromName = $config->get('fromname');
        $recipient = $config->get('mailfrom');

        $subject = $data['subject'];
        $body = "Имя: " . $data['name'] . "\n\nСообщение:\n" . $data['message'];

        $mailer->setSender([$from, $fromName]);
        $mailer->addRecipient($recipient);
        $mailer->setSubject($subject);
        $mailer->setBody($body);

        return $mailer->Send();
    }
}
?>
