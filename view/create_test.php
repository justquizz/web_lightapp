<div id="rules">
	<p>
	Уважаемый пользователь, наш сервис используется в образовательных целях, поэтому и правила создания 
	тестов соответствующие. И базируются на следующих принципах:
	</p>
	<ul>
		<li>Культура речи</li>
		<li>Грамотность</li>
		<li>Адекватность</li>
		<li>Уважение к людям</li>
		<li>Уважение к наукам</li>
		<li>Уважение к окружающему миру</li>
	</ul>
	<p></p>
	<p>Тесты, не удовлетворяющие данным принципам, будут блокироваться.</p>
</div>
<div id="wrapper_button">
	<input class="button" id="button_hide_rules" value="Продолжить" size="10" onclick="hideRules()">
</div>
<div id="test">
	<form name="test" method="get" action="create_test_function.php">
		<div id="test_header">
				<p>
					Введите название теста:
					<input type="text" size="50" name="test_title" value="Тест по азам музыкальной грамоты">
				</p>
				<p>
					Введите краткое описание своего теста:
					<input type="text" size="50" name="test_description" value="Описание теста по азам музыкальной грамоты">
				</p>
				<p>
					Выберите категорию для теста:
					<select name="test_category">
						<option>Программирование</option>
						<option>История</option>
						<option>Математика</option>
					</select>
				</p>
				<p>
					Введите свое имя(либо имя автора теста)
					<input type="text" size="25" name="author" value="Автор теста">
				</p>			
		</div>
		<div id="test_body">
			<div class="question">	
				<p>
					Введите первый вопрос:
					<input type="text" size="100" name="q1" value="Сколько нот в мажорном трезвучии?">
				</p>
				<p>
					Также введите четыре варианта ответа и выберите правильный из них:
					<p>
						1.<input type="radio" name="q1.true" value="q1.1" required />
						<input type="text" size="50" name="q1.1" value="ответ 1- Семь">
					</p>
					<p>
						2.<input type="radio" name="q1.true" value="q1.2" required />
						<input type="text" size="50" name="q1.2" value="ответ 2 - Три">
					</p>
					<p>
						3.<input type="radio" name="q1.true" value="q1.3" required />
						<input type="text" size="50" name="q1.3" value="ответ 3 - Четыре">
					</p>
					<p>
						4.<input type="radio" name="q1.true" value="q1.4" required />
						<input type="text" size="50" name="q1.4" value="ответ 4 - Одинадцать">
					</p>
					<p>
						Комментарий к правильному ответу, будет показан после ответа на вопрос:
						<input type="text" size="100" name="q1.comments" value="Комментарий к вопросу">
					</p>
				</p>
			</div>
			
			<div id="wrapper_button">
				<input class="button" id="button_hide_rules" value="Добавить вопрос" size="13" onclick="addQuestion()">
			</div>
			
		</div>
		<p></p>
		<p>
			<input class="button" type="submit" value="Отправить">
		</p>
	</form>
</div>

