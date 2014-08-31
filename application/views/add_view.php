<!DOCTYPE html>
<html lang="zh">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta charset="UTF-8"/>
	<title></title>
	<style>
		textarea {
			vertical-align: top;
		}

		form {
			width: 700px;
			height: 500px;
			margin: 0 auto;
		}

		#submit {
			margin-left: 40px;
		}


		.add {
			margin-left: 40px;
		}
	</style>
</head>
<body>
<form action="http://localhost/index.php/admin/add" method="post">
	<p><label for="title">标题:</label><input type="text" name="title" id="title"/></p>

	<p id="tags"><label for="tag">标签:</label>
		<input type="checkbox" name="tag[]" id="javascript"
		       value="JavaScript"/><label for="javascript">JavaScript</label>
		<input type="checkbox" name="tag[]" id="css" value="CSS"/><label for="css">CSS</label>
		<input type="checkbox" name="tag[]" id="html" value="HTML"/><label for="html">HTML</label>
		<input type="checkbox" name="tag[]" id="html5" value="HTML5"/><label
			for="html5">HTML5</label>
		<input type="checkbox" name="tag[]" id="php" value="PHP"/><label for="php">PHP</label>
		<input type="checkbox" name="tag[]" id="node" value="Node.js"/><label
			for="node">Node.js</label>
		<input type="checkbox" name="tag[]" id="webgl" value="WEBGL"/><label
			for="webgl">WEBGL</label>
		<input type="checkbox" name="tag[]" id="java"
		       value="Java"/><label
			for="java">Java</label>
	</p>

	<p class="add">
		当前标签:<span id="result"></span>
	</p>
	<p>
		<label for="group">类别:</label><input type="radio" name="group" id="jswz" value="jswz"
		                                     checked/>
		<label for="jswz">技术文章</label>
		<input type="radio" name="group" id="sbzt" value="sbzt"/>
		<label for="sbzt">随笔杂谈</label>
	</p>

	<p>
		<label for="time">日期:</label><input type="text" name="time"/>
	</p>

	<p>
		<label for="article">文章:</label><textarea name="article" cols="100" rows="20"></textarea>
	</p>

	<p><input type="submit" id="submit"/></p>
</form>
<script>
	window.addEventListener("load", function () {
		var dateInput = document.forms[0]['time'],
			nowDate = new Date(),
			pCheckBox = document.getElementById('tags'),
			resultTag = document.getElementById('result');
		dateInput.value = nowDate.getFullYear() + "-" + (nowDate.getMonth() + 1) + "-" + nowDate
			.getDate();
		pCheckBox.addEventListener('click', function (event) {
			var c = event.target, i;
			if (c.checked === true) {
				resultTag.innerHTML += c.value + "-";
			} else {
				resultTag.innerHTML = resultTag.innerHTML.replace((c.value + "-"), '');
			}
		}, false);

	}, false)
</script>
</body>
</html>