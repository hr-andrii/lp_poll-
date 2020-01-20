<html>
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/logo.png" type="image/png">
    <link rel="shortcut icon" href="img/logo.jpg" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/index.css">
    <title>Опитування студентів НУЛП</title>

</head>
<body>
    <div class="poll">

        <h1 class="header_text">Форма для оціювання якості викладання</h1>
        <h1 class="header_text">Національний університет "Львівська політехніка"</h1>
        <a href="">
            <img src="img/logo.png" alt="Логотип НУЛП, щоб перейти на сайт натисніть">
        </a>

        <form action="php/accept.php" method="POST">
            <select class="field" name="institute">
                <option selected>Інститут телекомунікацій, радіоелектроніки та електронної техніки</option>
            </select>

            <select class="field" name="specialty" id="specialty" required >
                <option disabled selected>Оберіть Спеціальність</option>
                <option> Інформаційно-комунікаційні системи </option>
                <option> Aвіоніка </option>
                <option> Телекомунікаційні технології </option>
                <option> Біомедична інженерія </option>
                <option> Електроніка </option>
                <option> Мікро- та наносистемна техніка </option>
            </select>
            <select class="field" name="teacher" id="teacher" required >
                <option disabled selected>Оберіть Викладача</option>
                <option>Андрусяк І.В.</option>
                <option>Андрущак В.С.</option>
                <option>Артеменко</option>
                <option>Бак Р.І.</option>
                <option>Балабан О.В.</option>
                <option>Балацька Л.П.</option>
                <option>Барило Г.І.</option>
                <option>Белей О.І.</option>
                <option>Беспалов А.Л.</option>
                <option>Бешлей М.І.</option>
                <option>Бродяк О.Я.</option>
                <option>Бугиль Б.А.</option>
                <option>Буковський І.В.</option>
                <option>Булавінець Т.О.</option>
                <option>Булик-Верхола С.З.</option>
                <option>Бурачок Р.А.</option>
                <option>Венгрин Б.Я.</option>
                <option>Веселовська О.В.</option>
                <option>Вільховченко Н.П.</option>
                <option>Вороняк Т.І.</option>
                <option>Вус Б.С.</option>
                <option>Гавриляк В.В.</option>
                <option>Гадьо І.В.</option>
                <option>Гельжинський І.І.</option>
                <option>Гетьманчук М.П</option>
                <option>Гліненко Л.К.</option>
                <option>Гнатчук М.М.</option>
                <option>Гніліцький Я.М.</option>
                <option>Гоблик В.В.</option>
                <option>Головатий А.І.</option>
                <option>Голяка Р.Л.</option>
                <option>Городиловська Г.П.</option>
                <option>Губа С.К.</option>
                <option>Гущак Р.І.</option>
                <option>Данилов А.Б.</option>
                <option>Демидов І.В.</option>
                <option>Демкович І.В.</option>
                <option>Децик К.О.</option>
                <option>Дмитрів Х.П.</option>
                <option>Добош О.С.</option>
                <option>Дружинін А.О.</option>
                <option>Думич С.С.</option>
                <option>Єрохов В.Ю.</option>
                <option>Завущак І.І.</option>
                <option>Залуцька Г.І.</option>
                <option>Здеб В.Б.</option>
                <option>Змисний М.М.</option>
                <option>Івасик Г.В.</option>
                <option>Івах М.С.</option>
                <option>Ільканич К.І.</option>
                <option>Кагало І.О.</option>
                <option>Карп Ю.С.</option>
                <option>Кіселичник М.Д.</option>
                <option>Клапчук М.І.</option>
                <option>Климаш М.М.</option>
                <option>Коваль Б.В.</option>
                <option>Когут З.О.</option>
                <option>Колесник Г.О.</option>
                <option>Колодій Н.В.</option>
                <option>Колодій Р.С.</option>
                <option>Коломієць О.В.</option>
                <option>Коляса Л.І.</option>
                <option>Комаренська З.М.</option>
                <option>Конюхов С.В.</option>
                <option>Кориневський М.А.</option>
                <option>Костів О.Л.</option>
                <option>Крайник Л.Б.</option>
                <option>Красько О.В.</option>
                <option>Кремер І.П.</option>
                <option>Кузик А.О.</option>
                <option>Кузьмин Р.Я.</option>
                <option>Кулик І.В.</option>
                <option>Курапов П.Р.</option>
                <option>Кучмій Г.Л.</option>
                <option>Лаба Г.П</option>
                <option>Лазько</option>
                <option>Лебідь С.Ю.</option>
                <option>Ліске О.М.</option>
                <option>Логуш О.І.</option>
                <option>Лозинський В.І.</option>
                <option>Лукіянець Б.А.</option>
                <option>Лях-Кагуй Н.С.</option>
                <option>Максимів І.П.</option>
                <option>Максимюк Т.А.</option>
                <option>Малик О.П.</option>
                <option>Маньковський С.В.</option>
                <option>Матвійків М.Д.</option>
                <option>Матієшин Ю.М.</option>
                <option>Матулка Д.В.</option>
                <option>Микитюк З.М.</option>
                <option>Мінзюк В.В.</option>
                <option>Міськів В.В.</option>
                <option>Муравський Л.І.</option>
                <option>Невінський Д.В.</option>
                <option>Николишин М.Й.</option>
                <option>Нічкало С.І.</option>
                <option>Оборжицький В.І.</option>
                <option>Пабирівський В.В.</option>
                <option>Павликевич М.Й.</option>
                <option>Панчак Р.Т.</option>
                <option>Пастирська І.Я.</option>
                <option>Петрович Й.М.</option>
                <option>Петровська Г.А.</option>
                <option>Пиріг Ю.В.</option>
                <option>Плесканка Н.М.</option>
                <option>Повторева С.М.</option>
                <option>Понеділок Г.В.</option>
                <option>Пришляк М.В.</option>
                <option>Протасевич В.Г.</option>
                <option>Процик В.І.</option>
                <option>Прудиус І.Н.</option>
                <option>Пура Я.С.</option>
                <option>Ратич А.Т.</option>
                <option>Рибицька О.М.</option>
                <option>Романишин Ю.М.</option>
                <option>Романів</option>
                <option>Селюченко М.О.</option>
                <option>Сеник А.П.</option>
                <option>Сенів Л.А.</option>
                <option>Середницька А.Я.</option>
                <option>Симотюк М.М.</option>
                <option>Сиротюк С.В.</option>
                <option>Скалецький М.П.</option>
                <option>Смердова Т.А.</option>
                <option>Сніцарук Л.А.</option>
                <option>Сологуб Б.В.</option>
                <option>Старчевський В.Л.</option>
                <option>Стахіра П.Й.</option>
                <option>Стебельська О.І.</option>
                <option>Сторож В.Г.</option>
                <option>Сторчун Є.В.</option>
                <option>Строган О.І.</option>
                <option>Сушинський О.Є.</option>
                <option>Товстюк К.К.</option>
                <option>Токарєва М.О.</option>
                <option>Убізський С.Б.</option>
                <option>Фабіровський С.Є.</option>
                <option>Фаст В.М.</option>
                <option>Фітьо В.М.</option>
                <option>Фучила О.М.</option>
                <option>Хар О.Ю.</option>
                <option>Харчишин Б.М.</option>
                <option>Ховерко Ю.М.</option>
                <option>Цимбрило С.М.</option>
                <option>Чабан А.В.</option>
                <option>Чайковський І.Б.</option>
                <option>Чернихівський Є.М.</option>
                <option>Чумакевич В.О.</option>
                <option>Шаповалов Ю.І.</option>
                <option>Шкілюк О.П.</option>
                <option>Юзефович Р.М.</option>
                <option>Юринець Р.В.</option>
                <option>Яковенко Є.І.</option>
                <option>Якубенко В.М.</option>
                <option>Яремко О.М.</option>
                <option>Яремчук І.Я.</option>
                <option>Яцишин Б.П.</option>
                
            </select>

            <div>
                <p class="question">Оцініть якість викладання (0-10)</p>
                <p><input type="range" name="mark" min="0" max="10" value="5" class="slider" onchange="document.getElementById('rangeValueFirst').innerHTML = this.value;" list="rangeListFirst"> <span id="rangeValueFirst">5</span></p>
                <datalist id="rangeListFirst">
                <option value="0" label="0">
                <option value="1" label="1">
                <option value="2" label="2">
                <option value="3" label="3">
                <option value="4" label="4">
                <option value="5" label="5">
                <option value="6" label="6">
                <option value="7" label="7">
                <option value="8" label="8">
                <option value="9" label="9">
                <option value="10" label="10">
                </datalist>
            </div>

            <div>
                <p class="question">Оцініть ставлення викладача до студентів (0-10) </p>
                <p><input type="range" name="marks" min="0" max="10" value="5" class="slider" onchange="document.getElementById('rangeValueSecond').innerHTML = this.value;" list="rangeListSecond"> <span id="rangeValueSecond">5</span></p>
                <datalist id="rangeListSecond">
                <option value="0" label="0">
                <option value="1" label="1">
                <option value="2" label="2">
                <option value="3" label="3">
                <option value="4" label="4">
                <option value="5" label="5">
                <option value="6" label="6">
                <option value="7" label="7">
                <option value="8" label="8">
                <option value="9" label="9">
                <option value="10" label="10">
                </datalist>
            </div>

            <br>
            <textarea rows="5" cols="30" minlength="0" maxlength="365" class="field_text" name="message" placeholder="Коментар (0-365 символів)" required></textarea>
            <br>
            <button class="button" >Відправити</button>
        </form>
    </div>
</body>
</html>