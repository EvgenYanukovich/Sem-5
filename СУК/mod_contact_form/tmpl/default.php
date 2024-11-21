<div id="contact-form" class="contact-form collapsed">
    <button id="toggle-button">Связаться с нами</button>

    <form id="contact-form-content" action="<?php echo JUri::base(); ?>index.php?option=com_ajax&module=contact_form" method="post" class="hidden">
        <label>Имя:</label>
        <input type="text" name="name" required>

        <label>Тема:</label>
        <input type="text" name="subject" required>

        <label>Сообщение:</label>
        <textarea name="message" required></textarea>

        <label>Введите результат: <span id="captcha-question"></span></label>
        <input type="text" name="captcha" required>
        <input type="hidden" name="expected_captcha">

        <button type="submit">Отправить</button>
    </form>
</div>
