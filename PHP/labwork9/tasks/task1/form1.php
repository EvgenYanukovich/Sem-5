<form action="result1.php" method="POST">
    <label>Email:</label>
    <input type="email" name="email" required><br>

    <label>Дата:</label>
    <input type="date" name="date" required><br>

    <label>Выберите пол:</label>
    <input type="radio" name="gender" value="male" required> Мужчина
    <input type="radio" name="gender" value="female" required> Женщина<br>

    <label>Согласие:</label>
    <input type="checkbox" name="agree" required> Согласен<br>

    <input type="hidden" name="hiddenField" value="someHiddenValue">

    <label>Страна:</label>
    <select name="country">
        <option value="ru">Россия</option>
        <option value="us">США</option>
    </select><br>

    <label>Телефон:</label>
    <input type="tel" name="tel" required><br>

    <label>Сайт:</label>
    <input type="url" name="website" required><br>

    <label>Цвет:</label>
    <input type="color" name="color" required><br>

    <button type="submit">Отправить</button>
</form>
