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
	<form name="test" method="post" action="create_test_function.php">
		<div id="test_header">
				<p>
					Введите название теста:
					<input type="text" size="50">
				</p>
				<p>
					Введите краткое описание своего теста:
					<textarea> ... </textarea>
				</p>
				<p>
					Выберите категорию для теста:
					<select>
						<option>Программирование</option>
						<option>История</option>
						<option>Математика</option>
					</select>
				</p>
				<p>
					Введите свое имя(либо имя автора теста)
					<input type="text" size="25">
				</p>			
		</div>
		<div id="test_body">
			<div class="question">	
				<p>
					Введите первый вопрос:
					<input type="text" size="100">
				</p>
				<p>
					Также введите четыре варианта ответа и выберите правильный из них:
					<p>
						1.<input type="radio" name="id" value="<?php echo $item['id']; ?>" required />
						<input type="text" size="50">
					</p>
					<p>
						2.<input type="radio" name="id" value="<?php echo $item['id']; ?>" required />
						<input type="text" size="50">
					</p>
					<p>
						3.<input type="radio" name="id" value="<?php echo $item['id']; ?>" required />
						<input type="text" size="50">
					</p>
					<p>
						4.<input type="radio" name="id" value="<?php echo $item['id']; ?>" required />
						<input type="text" size="50">
					</p>
					<p>
						Комментарий к правильному ответу, будет показан после ответа на вопрос:
						<input type="text" size="100">
					</p>
				</p>
			</div>
			<div class="question">	
				<p>
					Введите второй вопрос:
					<input type="text" size="100">
				</p>
				<p>
					Также введите четыре варианта ответа и выберите правильный из них:
					<p>
						1.<input type="radio" name="id" value="<?php echo $item['id']; ?>" required />
						<input type="text" size="50">
					</p>
					<p>
						2.<input type="radio" name="id" value="<?php echo $item['id']; ?>" required />
						<input type="text" size="50">
					</p>
					<p>
						3.<input type="radio" name="id" value="<?php echo $item['id']; ?>" required />
						<input type="text" size="50">
					</p>
					<p>
						4.<input type="radio" name="id" value="<?php echo $item['id']; ?>" required />
						<input type="text" size="50">
					</p>
					<p>
						Комментарий к правильному ответу, будет показан после ответа на вопрос:
						<input type="text" size="100">
					</p>
				</p>
			</div>	
		</div>
		<p></p>
		<p>
			<input class="button" type="submit" value="Отправить">
		</p>
	</form>
</div>

